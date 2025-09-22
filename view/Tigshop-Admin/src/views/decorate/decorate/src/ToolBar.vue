<template>
    <div class="theme-toolbar">
        <div class="theme-menu-con show">
            <div class="theme-con-box">
                <el-tabs v-model="activeName" class="demo-tabs">
                    <el-tab-pane label="基础模块" name="toolList"></el-tab-pane>
                </el-tabs>
                <div class="inside">
                    <el-collapse v-model="activeNames">
                        <el-collapse-item title="基础模块" name="tool" v-if="activeName === 'toolList'">
                            <template #title>
                                <div class="modules-head J_ModuleListHead">
                                    <span>基础模块</span>
                                </div>
                            </template>
                            <draggable
                                class="module-list"
                                item-key="type"
                                :list="toolList"
                                ghost-class="sortable-ghost"
                                chosen-class="toolChosenClass"
                                animation="300"
                                @start=""
                                @end=""
                                :sort="false"
                                :group="{ name: 'advanced', pull: 'clone', put: false }"
                                :clone="clone"
                            >
                                <template #item="{ element, index }">
                                    <div class="list-item tool-list-item" @click="onAdd(index, 'toolList', element)">
                                        <span v-if="element.content" class="pic" v-html="element.content"> </span>
                                        <span v-if="element.label" class="content">{{ element.label }}</span>
                                    </div>
                                </template>
                            </draggable>
                        </el-collapse-item>
                        <el-collapse-item title="其它模块" name="other" v-if="activeName === 'toolList'">
                            <template #title>
                                <div class="modules-head J_ModuleListHead">
                                    <span>其它模块</span>
                                </div>
                            </template>
                            <draggable
                                class="module-list"
                                item-key="type"
                                :list="otherList"
                                ghost-class="sortable-ghost"
                                chosen-class="toolChosenClass"
                                animation="300"
                                @start=""
                                @end=""
                                :sort="false"
                                :group="{ name: 'advanced', pull: 'clone', put: false }"
                                :clone="clone"
                            >
                                <template #item="{ element, index }">
                                    <div class="list-item tool-list-item" @click="onAdd(index, 'otherList')">
                                        <span v-if="element.content" class="pic" v-html="element.content"> </span>
                                        <span v-if="element.label" class="content">{{ element.label }}</span>
                                    </div>
                                </template>
                            </draggable>
                        </el-collapse-item>
                    </el-collapse>
                    <div style="height: 50px"></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
import { ref, defineAsyncComponent, onMounted, shallowRef } from "vue";
import draggable from "vuedraggable";
import { cloneDeep } from "lodash";

const adminType = localStorage.getItem("adminType");
const activeNames = ref(["tool", "other", "advanced"]);
const props = defineProps({
    modules: {
        type: Object,
        default: () => ({})
    }
});
const activeName = ref("toolList");

const modules = ref(props.modules);
const toolList = ref([
    { type: "imageAd", url: "mobile", label: "图片广告1", content: '<i class="iconfont-admin icon-image_nav"></i>', module: {}, isShow: true },
    { type: "imageSquareAd", url: "mobile", label: "图片魔方", content: '<i class="iconfont-admin icon-image_square_ad"></i>', module: {}, isShow: true },
    { type: "imageHotarea", url: "mobile", label: "热图绘制", content: '<i class="iconfont-admin icon-image_hotarea"></i>', module: {}, isShow: true },
    { type: "product", url: "mobile", label: "商品", content: '<i class="iconfont-admin icon-product"></i>', module: {}, isShow: true },
    { type: "whiteLine", url: "mobile", label: "分割线", content: '<i class="iconfont-admin icon-white_line"></i>', module: {}, isShow: true },
    { type: "whiteBlank", url: "mobile", label: "空白辅助", content: '<i class="iconfont-admin icon-white_blank"></i>', module: {}, isShow: true },
    { type: "imageNav", url: "mobile", label: "图文导航", content: '<i class="iconfont-admin icon-image_nav"></i>', module: {}, isShow: true },
    { type: "titleAd", url: "mobile", label: "文本标题", content: '<i class="iconfont-admin icon-title_ad"></i>', module: {}, isShow: true },
    { type: "notice", url: "mobile", label: "公告", content: '<i class="iconfont-admin icon-notice"></i>', module: {}, isShow: true }
]);

const otherList = ref([
    { type: "coupon", url: "mobilePromotion", label: "优惠券", content: '<i class="iconfont-admin icon-coupon"></i>', module: {}, isShow: true }
]);
const adminToolList = ref([
    { type: "searchBar", url: "mobile", label: "商品搜索", content: '<i class="iconfont-admin icon-search_bar"></i>', module: {}, isShow: true },
    { type: "catNav", url: "mobile", label: "分类导航", content: '<i class="iconfont-admin icon-cat_nav"></i>', module: {}, isShow: true }
]);
const adminOtherList = ref([
    { type: "seckill", url: "mobilePromotion", label: "秒杀", content: '<i class="iconfont-admin icon-seckill"></i>', module: {}, isShow: true }
]);

const clone = (obj: any) => {
    let newObj = cloneDeep(obj);
    // 增加唯一键值
    newObj.moduleIndex = Date.now();
    // 删除没用的值
    delete newObj.content;
    return newObj;
};
const emit = defineEmits(["item-added"]);
const onAdd = (index: number, type = "toolList", e?: MouseEvent) => {
    const listMap = {
        toolList: toolList.value,
        otherList: otherList.value
    };

    let addItem: any;

    const selectedList = listMap[type as "toolList" | "otherList"];
    if (selectedList && selectedList[index]) {
        addItem = cloneDeep(selectedList[index]);
        addItem.moduleIndex = Date.now();
        modules.value.moduleList.push(addItem); // 将模块加入列表
        // Emit 事件以通知父组件新模块已添加
        emit("item-added", { newIndex: modules.value.moduleList.length - 1 });
    } else {
        throw new Error("无效的类型或索引");
    }
};
onMounted(() => {
    toolList.value = [...toolList.value, ...adminToolList.value];
    otherList.value = [...otherList.value, ...adminOtherList.value];
});
</script>
<style lang="scss" scoped>
.theme-con-box {
    :deep(.el-tabs__item) {
        padding: 0;
        margin: 5px 20px;
    }
    :deep(.el-collapse) {
        border: none !important;
    }
    :deep(.el-collapse-item__header) {
        border: none !important;
    }
    :deep(.el-collapse-item__wrap) {
        border: none !important;
    }
    :deep(.el-collapse-item__content) {
        padding-bottom: 10px;
        line-height: 0.8;
    }
}
</style>
