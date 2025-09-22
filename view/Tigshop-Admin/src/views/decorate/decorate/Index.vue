<template>
    <div class="decorate-page" :class="{ 'decorate-page-pc': props.decorateType === 2 }">
        <div class="decorate-topbar-warp">
            <div class="decorate-topbar-con">
                <div class="topbar-left">
                    <div class="topbar-logo"></div>
                    <div class="topbar-now-txt cursor-pointer" @click="onLogout()">
                        <i class="iconfont-admin icon-tuichu" style="margin-right: 8px"></i>退出编辑
                    </div>
                    <div class="topbar-now-txt"><span class="tit">正在装修：</span>{{ decorateTitle }}</div>
                </div>
                <el-space class="topbar-right">
                    <el-button class="btn" text @click="onPreview()" :disabled="decorateDisabled">预览</el-button>
                    <el-button class="btn" text @click="onSavetoDraft()" :disabled="decorateDisabled">存至草稿</el-button>
                    <el-button @click="onPublish()" type="primary" :disabled="decorateDisabled">保存并发布</el-button>
                </el-space>
            </div>
        </div>

        <ToolBar v-model:modules="modules" v-if="props.decorateType === 1" @item-added="onAdd"></ToolBar>
        <PcToolBar v-model:modules="modules" v-if="props.decorateType === 2" @item-added="onAdd"></PcToolBar>
        <perfect-scrollbar class="decorate-page-wrap">
            <Alert v-if="hasDraftData" class="decorate-page-alert" message="该页面有一条草稿记录，您可以还原草稿继续编辑。" type="warning" show-icon closable>
                <template #action>
                    <el-button @click="continueEditDraft">继续编辑</el-button>
                </template>
            </Alert>
            <div
                class="decorate-page-window"
                :style="'background-position: top center;' + format.backgroundColor + format.backgroundImage + format.backgroundRepeat + format.backgroundSize"
            >
                <div class="theme-modules-warp">
                    <div
                        @click="onEditPage"
                        :class="'list-item modules-item modules-item-topbar' + (editVisiable === 'page' ? ' module-item-active' : '')"
                        draggable="false"
                    >
                        <Page v-model:module="modules.pageModule"></Page>
                    </div>
                    <draggable
                        class="gallery-list-ul"
                        item-key="moduleIndex"
                        :list="modules.moduleList"
                        ghost-class="sortable-ghost"
                        chosen-class="chosenClass"
                        animation="300"
                        @start=""
                        @end="onEnd"
                        @add="onAdd"
                        :group="{ name: 'advanced', pull: false, put: true }"
                        style="min-height: 700px"
                    >
                        <template #item="{ element, index }">
                            <div
                                :class="['list-item modules-item', { 'module-item-active': editModuleIndex === index }]"
                                draggable="false"
                                @click="onEditComponent(index)"
                            >
                                <Modules
                                    v-if="element.type"
                                    v-model:module="element.module"
                                    v-model:moduleType="element.type"
                                    v-model:moduleUrl="element.url"
                                    :moduleIndex="element.moduleIndex"
                                    :decorateId="id"
                                ></Modules>
                                <div class="module-label">
                                    <div class="label-name">{{ element.label }}</div>
                                </div>
                                <div class="module-operate" v-if="index === editModuleIndex && editVisiable == 'list'">
                                    <div class="module-operate-item" @click.stop="onModuleUp(index)">
                                        <i class="ico-decorate icon-dec-shangyi"></i>
                                        <div class="opt-tip">上移</div>
                                    </div>
                                    <div class="module-operate-item" @click.stop="onModuleDown(index)">
                                        <i class="ico-decorate icon-dec-xiayi"></i>
                                        <div class="opt-tip">下移</div>
                                    </div>
                                    <div class="module-operate-item" @click.stop="onModuleShow(index)">
                                        <i :class="'ico-decorate ' + (element.isShow ? 'icon-dec-mimaxianshi' : 'icon-dec-mimayincang')"></i>
                                        <div class="opt-tip">显示</div>
                                    </div>
                                    <div class="module-operate-item" @click.stop="onModuleCopy(index)">
                                        <i class="ico-decorate icon-dec-fuzhi1"></i>
                                        <div class="opt-tip">复制</div>
                                    </div>
                                    <div class="module-operate-item" @click.stop="onModuleDel(index)">
                                        <i class="ico-decorate icon-dec-shanchu"></i>
                                        <div class="opt-tip">删除</div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </draggable>
                </div>
            </div>
            <div class="decorate-page-config-warp">
                <div class="decorate-page-config-con">
                    <div class="page-config-item" @click="onEditPage"><i class="ico-decorate icon-dec-yemianshezhi"></i><span>页面设置</span></div>
                </div>
            </div>
        </perfect-scrollbar>
        <div class="decorate-edit-wrap">
            <!-- <editComponent
                v-if="editModuleIndex !== null && editVisiable == 'list' && modules.moduleList[editModuleIndex]"
                v-model:module="modules.moduleList[editModuleIndex].module"
            ></editComponent> -->
            <editComponent
                v-if="editModuleIndex !== null && editVisiable === 'list' && modules.moduleList[editModuleIndex]"
                v-model:module="modules.moduleList[editModuleIndex].module"
            ></editComponent>
            <PageEdit v-if="editVisiable === 'page'" v-model:module="modules.pageModule"></PageEdit>
        </div>
    </div>
</template>
<script lang="ts" setup>
import { DialogForm } from "@/components/dialog";
import { ArrowDown } from "@element-plus/icons-vue";
import { ref, defineAsyncComponent, onMounted, shallowRef, computed } from "vue";
import { useRouter } from "vue-router";
import request from "@/utils/request";
import { loadDraftData, saveDraft, decorateDetail } from "@/api/decorate/decorate";
import ToolBar from "./src/ToolBar.vue";
import PcToolBar from "./src/PcToolBar.vue";
import Modules from "./src/Modules.vue";
import Page from "./src/modules/src/commonPage/View.vue";
import PageEdit from "./src/modules/src/commonPage/Edit.vue";
import draggable from "vuedraggable";
import { message, Alert, Modal } from "ant-design-vue";
import { cloneDeep, set } from "lodash";
import { toCamelCase } from "@/utils/util";
import { urlWapFormat, urlFormat, baseDirFormat } from "@/utils/format";
import { ModulesType, EditResult } from "@/types/decorate/decorate.d";
import { ModuleTypeList } from "@/views/decorate/decorate/src/modules/editIndex";
import { getLocalesList } from "@/api/multilingual/languagesList";
import { delDecorate } from "@/api/decorate/mobileDecorate";
import "@/views/decorate/decorate/src/css/decorate.less";
import "@/views/decorate/decorate/src/css/module.less";
import { useDecorateStore } from "@/store/decorate";
const { decorateInfo, setLocaleId, setIsDefault } = useDecorateStore();
const props = defineProps({
    decorateType: {
        type: Number,
        default: 1
    }
});
const query = useRouter().currentRoute.value.query;
const id = ref<number>(Number(query.id) || 0);
const parentId = ref<number>(Number(decorateInfo.decorateId) || 0);
const languageId = ref<any>(Number(decorateInfo.localeId) || 0);
const decorateTitle = ref<string>((query.title as string) || "");
const hasDraftData = ref(false);
const decorateDisabled = ref(false);
const isDefault = ref(decorateInfo.isDefault);
const modules = ref<ModulesType>({
    // 页面模块
    pageModule: {
        type: "page",
        module: {},
        backgroundRepeat: "",
        backgroundSize: "",
        style: 0
    },
    // 模块列
    moduleList: []
});
// 编辑状态 list|page
const editVisiable = ref<string>("");
// 动态编辑组件
const editComponent = shallowRef();
// 当前编辑的组件index
const editModuleIndex = ref<number | null>(null);
const updateModuleListWithUrls = (moduleList: any = [], moduleTypeList: any = []) => {
    const typeToUrlMap = {};
    // 将 ModuleTypeList 转换为 type 到 url 的映射
    moduleTypeList.forEach(({ type, url }) => {
        typeToUrlMap[type] = url;
    });
    // 遍历 moduleList 更新 url
    moduleList.forEach((module: any) => {
        if (!module.url) {
            // 如果 module.url 为空，通过 type 获取 url
            const correspondingUrl = typeToUrlMap[module.type];
            if (correspondingUrl) {
                module.url = correspondingUrl; // 更新模块的 url
            }
        }
    });
    return moduleList;
};
const decorateChildren = ref<any[]>([]);
const _decorateDetail = async () => {
    try {
        const result = await decorateDetail({
            id: id.value,
            decorateType: props.decorateType,
            localeId: !isDefault.value ? languageId.value : 0,
            parentId: !isDefault.value ? parentId.value : 0
        });
        if (result !== null) {
            let moduleList = (result.data && result.data.moduleList) || [];
            let pageModule = (result.data && result.data.pageModule) || {};
            modules.value.moduleList = updateModuleListWithUrls(moduleList, ModuleTypeList);
            decorateTitle.value = result.decorateTitle || (query.title as any) || "";
            decorateChildren.value = result.children ?? [];
            id.value = result.decorateId || (query.id as any) || 0;
            Object.assign(modules.value.pageModule, pageModule);
            hasDraftData.value = result.draftData ? true : false;
        }
    } catch (error: any) {
        message.error(error.message);
    } finally {
    }
};

_decorateDetail();

const copyDecorate = async (id: any) => {
    try {
        const result = await decorateDetail({
            id: id,
            decorateType: props.decorateType
        });
        let moduleList = (result.data && result.data.moduleList) || [];
        let pageModule = (result.data && result.data.pageModule) || {};
        modules.value.moduleList = updateModuleListWithUrls(moduleList, ModuleTypeList);
        Object.assign(modules.value.pageModule, pageModule);
    } catch (error: any) {
        message.error(error.message);
    } finally {
    }
};

// 组件编辑
const _import = (url: string, path: string) => defineAsyncComponent(() => import(`./src/modules/${url}/${path}/Edit.vue`));
const onEditComponent = (index: number) => {
    editModuleIndex.value = index;
    modules.value.moduleList = modules.value.moduleList.map((item) => ({ ...item }));
    editComponent.value = _import(modules.value.moduleList[index].url, toCamelCase(modules.value.moduleList[index].type));
    editVisiable.value = "list";
};
// 页面编辑
const onEditPage = () => {
    editVisiable.value = "page";
    modules.value.moduleList = modules.value.moduleList.map((item) => ({ ...item }));
};
// 上移
const onModuleUp = (index: number) => {
    if (index == 0) return;
    modules.value.moduleList.splice(index - 1, 0, modules.value.moduleList.splice(index, 1)[0]);
    editModuleIndex.value = index - 1;
};
// 下移
const onModuleDown = (index: number) => {
    if (index + 1 == modules.value.moduleList.length) return;
    modules.value.moduleList.splice(index + 1, 0, modules.value.moduleList.splice(index, 1)[0]);
    editModuleIndex.value = index + 1;
};
// 显示/隐藏
const onModuleShow = (index: number) => {
    modules.value.moduleList[index].isShow = modules.value.moduleList[index].isShow == true ? false : true;
};
// 复制
const onModuleCopy = (index: number) => {
    const copiedItem = cloneDeep({ ...modules.value.moduleList[index] });
    copiedItem.moduleIndex = Date.now();
    // 在目标元素后面插入复制的元素
    modules.value.moduleList.splice(index + 1, 0, copiedItem);
    editModuleIndex.value = index + 1;
};
// 删除
const onModuleDel = (index: number) => {
    modules.value.moduleList.splice(index, 1);
    if (modules.value.moduleList.length === 0) {
        editModuleIndex.value = null;
    } else {
        editModuleIndex.value = index - 1;
    }
    onEditComponent(editModuleIndex.value as number);
};
const onEnd = (e: any) => {
    editModuleIndex.value = e.newIndex;
};
const onAdd = (e: any) => {
    const index = e.newIndex;
    // 根据新添加的模块的 index 设置为选中的状态
    editModuleIndex.value = index; // 将当前编辑模块的索引设置为新添加的模块
    onEditComponent(e.newIndex);
};
const onSavetoDraft = async () => {
    try {
        const result = await saveDraft({
            id: id.value,
            decorateType: props.decorateType,
            localeId: !isDefault.value ? languageId.value : 0,
            parentId: !isDefault.value ? parentId.value : 0,
            data: modules.value
        });
        message.success("操作成功");
        hasDraftData.value = false;
    } catch (error: any) {
        message.error(error.message);
    } finally {
    }
};
const onPublish = async () => {
    request({
        url: "decorate/decorate/publish",
        method: "post",
        data: {
            id: id.value,
            decorateType: props.decorateType,
            data: modules.value,
            localeId: !isDefault.value ? languageId.value : 0,
            parentId: !isDefault.value ? parentId.value : 0
        }
    })
        .then((result) => {
            message.success("操作成功");
            hasDraftData.value = false;
        })
        .catch((error) => {
            message.error(error.message);
        });
};
const format = computed(() => {
    const backgroundRepeat: any = {
        1: "no-repeat",
        2: "repeat",
        3: "repeat-y",
        4: "repeat-x",
        5: "no-repeat"
    };
    const backgroundSize: any = {
        1: "100% auto",
        2: "auto 100%",
        3: "100% 100%",
        4: "100% auto"
    };
    return {
        backgroundColor: modules.value.pageModule.backgroundColor ? "background-color:" + modules.value.pageModule.backgroundColor + ";" : "",
        backgroundImage: modules.value.pageModule.backgroundImage?.picUrl
            ? "background-image: url(" + modules.value.pageModule.backgroundImage?.picUrl + ");"
            : "",
        backgroundRepeat: "background-repeat:" + backgroundRepeat[modules.value.pageModule.backgroundRepeat] + ";",
        backgroundSize: "background-size:" + backgroundSize[modules.value.pageModule.backgroundSize] + ";"
    };
});
const continueEditDraft = async () => {
    try {
        const result = await loadDraftData(id.value);
        modules.value.moduleList.length = 0;
        modules.value.moduleList = result.moduleList ?? [];
        modules.value.pageModule = result.pageModule ?? [];
        hasDraftData.value = false;
        editVisiable.value = "";
        editModuleIndex.value = null;
    } catch (error: any) {
        message.error(error.message);
    } finally {
    }
};
const onPreview = async () => {
    try {
        // 先发布
        const result = await saveDraft({
            id: id.value,
            data: modules.value
        });

        message.success("操作成功");
        hasDraftData.value = false;
        // 1秒后执行
        setTimeout(() => {
            if (props.decorateType == 1) {
                window.open(urlWapFormat("/?previewId=" + id.value));
            } else if (props.decorateType == 2) {
                window.open(urlFormat("/?previewId=" + id.value));
            }
        }, 800);
    } catch (error: any) {
        message.error(error.message);
    } finally {
    }
};
const { VITE_BASE_DIR } = import.meta.env;
const onLogout = () => {
    if (props.decorateType == 1) {
        window.location.href = `${baseDirFormat(VITE_BASE_DIR) ?? ""}/decorate-info/mobile-decorate/list/`;
    } else {
        window.location.href = `${baseDirFormat(VITE_BASE_DIR) ?? ""}/decorate-info/pc-decorate/list/`;
    }
};
const localesList = ref<any[]>([]);
const languageName = computed(() => {
    return localesList.value.find((item) => item.id == languageId.value)?.isDefault
        ? `${localesList.value.find((item) => item.id == languageId.value)?.language}(默认)`
        : localesList.value.find((item) => item.id == languageId.value)?.language || "";
});

const changeLanguage = (localeId: any, isDefault: number) => {
    languageId.value = localeId;
    setLocaleId(localeId);
    if (isDefault == 1) {
        navigateToNewWindow(decorateInfo.decorateId);
        setIsDefault(true);
    } else {
        setIsDefault(false);
        if (decorateChildren.value.length == 0) {
            navigateToNewWindow(0, decorateTitle.value);
        } else {
            decorateChildren.value.map((item: any) => {
                if (item.localeId == localeId) {
                    navigateToNewWindow(item.decorateId);
                } else {
                    navigateToNewWindow(0, decorateTitle.value);
                }
            });
        }
    }
};

const navigateToNewWindow = (id?: number, title?: string) => {
    let fullPath = "";
    if (props.decorateType === 1) {
        fullPath = `${window.location.origin}${baseDirFormat(VITE_BASE_DIR) ?? ""}/decorate/index?id=${id}&title=${title || ""}`;
    } else if (props.decorateType === 2) {
        fullPath = `${window.location.origin}${baseDirFormat(VITE_BASE_DIR) ?? ""}/decorate/pc?id=${id}&title=${title || ""}`;
    }
    window.location.href = fullPath;
};

const _delDecorate = () => {
    Modal.confirm({
        title: "提示",
        content: "删除后将无法恢复，确认删除该模板？",
        onOk: async () => {
            try {
                const result = await delDecorate({ id: id.value });
                message.success("操作成功");
                setTimeout(() => {
                    onLogout();
                }, 300);
            } catch (error: any) {
                message.error(error.message);
            }
        }
    });
};
</script>
<style lang="less" scoped>
.decorate-page-alert {
    margin: 30px auto;
    max-width: 500px;
    font-size: 14px;
}
.lang-item-active {
    color: var(--tig-primary);
}
</style>
