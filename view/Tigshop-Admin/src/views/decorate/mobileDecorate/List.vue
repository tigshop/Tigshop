<template>
    <div class="container">
        <div class="content_wrapper">
            <div class="lyecs-table-list-warp">
                <div class="list-table-tool lyecs-search-warp">
                    <div class="list-table-tool-row">
                        <div class="simple-form-warp">
                            <div class="simple-form-field">
                                <div class="form-group">
                                    <div class="control-container">
                                        <TigInput
                                            v-model="filterParams.keyword"
                                            name="keyword"
                                            placeholder="输入页面名称"
                                            @keyup.enter="onSearchSubmit"
                                            clearable
                                            @clear="onSearchSubmit"
                                        >
                                            <template #append>
                                                <el-button @click="onSearchSubmit"><span class="iconfont icon-chakan1"></span> </el-button>
                                            </template>
                                        </TigInput>
                                    </div>
                                </div>
                            </div>
                            <div class="simple-form-field">
                                <div class="form-group">
                                    <DialogForm
                                        isDrawer
                                        @okCallback="loadFilter"
                                        title="添加页面"
                                        width="600px"
                                        path="decorate/mobileDecorate/Info"
                                        :params="{ act: 'add', decorateType }"
                                    >
                                        <el-button type="primary">添加页面</el-button>
                                    </DialogForm>
                                </div>
                            </div>
                            <div class="simple-form-field">
                                <div class="form-group">
                                    <el-button @click="importDecorate">导入装修模板</el-button>
                                </div>
                            </div>
                            <div class="simple-form-field">
                                <div class="form-group">
                                    <el-space>
                                        <el-popconfirm title="您确认要批量删除所选数据吗？" @confirm="onBatchSubmit('del')">
                                            <template #reference>
                                                <el-button :disabled="selectedIds.length === 0">批量删除</el-button>
                                            </template>
                                        </el-popconfirm>
                                        <span v-if="selectedIds.length > 0">
                                            已选择：<b>{{ selectedIds.length }}</b> 项
                                        </span>
                                    </el-space>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-container">
                    <a-spin :spinning="loading">
                        <el-table :data="filterState" @selection-change="onSelectChange" :total="total" @sort-change="onSortChange" :loading="loading">
                            <el-table-column type="selection" width="32" />
                            <el-table-column label="页面名称" prop="decorateId" sortable="custom" :width="300">
                                <template #default="{ row }">
                                    <div style="position: relative">
                                        <el-space>
                                            <PopForm
                                                label="页面名称"
                                                type="textarea"
                                                :requestApi="updateDecorateFiled"
                                                v-model:org-value="row.decorateTitle"
                                                :params="{ id: row.decorateId, field: 'decorateTitle' }"
                                                :max="50"
                                            >
                                                <div>{{ row.decorateTitle }}</div>
                                            </PopForm>
                                        </el-space>
                                    </div>
                                    <el-tag v-if="row.isHome === 1" type="success" :hit="false" effect="light" size="small" disable-transitions>首页</el-tag>
                                </template>
                            </el-table-column>
                            <el-table-column label="发布状态" prop="status" sortable="custom" :width="150">
                                <template #default="{ row }">
                                    {{ row.status == 1 ? "已发布" : "未发布" }}
                                </template>
                            </el-table-column>
                            <el-table-column label="更新时间" prop="updateTime" sortable="custom">
                                <template #default="{ row }">
                                    {{ row.updateTime }}
                                </template>
                            </el-table-column>
                            <el-table-column label="操作" fixed="right" :width="200">
                                <template #default="{ row }">
                                    <el-space>
                                        <a class="btn-link" @click="toPage(props.decorateType, 0, row.decorateId, 0, true)">编辑</a>
                                        <el-divider direction="vertical" />
                                        <a class="btn-link" @click="setHome(row)">设为首页</a>
                                        <el-divider direction="vertical" />
                                        <el-dropdown trigger="hover" :hide-on-click="false">
                                            <span class="iconfont-admin icon-gengduo1 btn-link"></span>
                                            <template #dropdown>
                                                <el-dropdown-menu>
                                                    <el-dropdown-item>
                                                        <a class="btn-link" @click="onCopy(row)">复制</a>
                                                    </el-dropdown-item>
                                                    <el-dropdown-item v-if="row.isHome == 0">
                                                        <DeleteRecord @afterDelete="loadFilter" :requestApi="delDecorate" :params="{ id: row.decorateId }"
                                                            >删除</DeleteRecord
                                                        >
                                                    </el-dropdown-item>
                                                    <el-dropdown-item>
                                                        <a class="btn-link" @click="onShare(row.decorateId)">分享</a>
                                                    </el-dropdown-item>
                                                </el-dropdown-menu>
                                            </template>
                                        </el-dropdown>
                                    </el-space>
                                </template>
                            </el-table-column>
                            <template #empty>
                                <div class="empty-warp">
                                    <div v-if="!loading" class="empty-bg">暂无数据</div>
                                </div>
                            </template>
                        </el-table>
                    </a-spin>
                    <div class="pagination-con" v-if="total > 0">
                        <Pagination v-model:page="filterParams.page" v-model:size="filterParams.size" :total="total" @callback="loadFilter" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import "@/style/css/list.less";
import { DialogForm } from "@/components/dialog";
import { PopForm } from "@/components/pop-form";
import { DeleteRecord, Pagination } from "@/components/list";
import { message } from "ant-design-vue";
import { useConfigStore } from "@/store/config";
import { useDecorateStore } from "@/store/decorate";
import { FilterState, FilterParams } from "@/types/decorate/mobileDecorate.d";
import {
    getDecorateList,
    batchSubmit,
    updateDecorateFiled,
    delDecorate,
    updateDecorate,
    decorateShare,
    importDecorateLink
} from "@/api/decorate/mobileDecorate";
import { ElMessageBox } from "element-plus";
import { copyDomText } from "@/utils/util";
import { baseDirFormat } from "@/utils/format";
import { useListRequest } from "@/hooks/useListRequest";
const props = defineProps({ decorateType: { type: Number, default: 1 } });
const config: any = useConfigStore();
const { setDecorateId, setLocaleId, setIsDefault, resetDecorateInfo } = useDecorateStore();
const {
    listData: filterState,
    loading,
    total,
    selectedIds,
    filterParams,
    loadData: loadFilter,
    onSearchSubmit,
    onSortChange,
    onSelectChange,
    onBatchAction
} = useListRequest<FilterState, FilterParams>({
    apiFunction: getDecorateList,
    idKey: "decorateId",
    defaultParams: {
        page: 1,
        decorateType: props.decorateType,
        size: config.get("pageSize"),
        sortField: "",
        sortOrder: "",
        keyword: ""
    }
});
// 批量操作
const onBatchSubmit = async (action: string) => {
    await onBatchAction(action, batchSubmit);
};

// 初始化加载
loadFilter();
const onShare = async (id: number) => {
    loading.value = true;
    try {
        const result = await decorateShare({ decorateId: id });
        copyDomText(`${window.location.protocol}//${window.location.host.split(":")[0]}${result.apiUrl}`);
        message.success("分享链接已经复制到剪贴板, 导入时可直接粘贴使用");
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};

const importDecorate = () => {
    ElMessageBox.prompt("请把分享链接粘贴在此处", "导入装修链接", { confirmButtonText: "确定", cancelButtonText: "取消" }).then(({ value }) => {
        _importDecorateLink(value);
    });
};
const _importDecorateLink = async (url: string) => {
    loading.value = true;
    try {
        const urlEncode = decodeURIComponent(url);
        const result = await importDecorateLink({ url: urlEncode });
        message.success("操作成功");
        loadFilter();
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
// 设置为首页
const setHome = async (row: FilterState) => {
    try {
        const result = await updateDecorate("setHome", { id: row.decorateId });
        message.success("操作成功");
        loadFilter();
    } catch (error: any) {
        message.error(error.message);
    } finally {
    }
};
// 复制
const onCopy = async (row: FilterState) => {
    try {
        const result = await updateDecorate("copy", { id: row.decorateId });
        message.success("操作成功");
        loadFilter();
    } catch (error: any) {
        message.error(error.message);
    } finally {
    }
};
const { VITE_BASE_DIR } = import.meta.env;
const toPage = (type: number, parentId: number, id: number, localeId: number, isDefault: boolean) => {
    resetDecorateInfo();
    setDecorateId(parentId || id || 0);
    setLocaleId(localeId);
    setIsDefault(isDefault);
    if (type === 1) {
        window.open(`${baseDirFormat(VITE_BASE_DIR)}/decorate/index?id=${id}`, "_blank");
    } else {
        window.open(`${baseDirFormat(VITE_BASE_DIR)}/decorate/pc?id=${id}`, "_blank");
    }
};
</script>
