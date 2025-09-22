<template>
    <link :href="icoDefinedCss" rel="stylesheet"/>
    <div class="container">
        <div class="content_wrapper">
            <div v-if="activeKey!=null" class="lyecs-table-list-warp">
                <div class="list-table-tool lyecs-search-warp">
                    <el-form :model="filterParams" name="form">
                        <div class="list-table-tool-row">
                            <div class="list-table-tool-col">
                                <el-space>
                                    <el-button v-if="filterParams.parentId > 0" @click="backToParentCat"
                                    ><i class="iconfont icon-fanhui" style="font-size: 14px; padding-right: 5px"></i> 返回上一级
                                    </el-button>
                                    <DialogForm
                                        :params="{ act: 'add', parentId: filterParams.parentId, adminType:activeKey }"
                                        isDrawer
                                        path="authority/authority/Info"
                                        title="添加权限"
                                        width="580px"
                                        @okCallback="loadFilter"
                                    >
                                        <el-button type="primary">添加权限</el-button>
                                    </DialogForm>
                                </el-space>
                            </div>
                        </div>
                    </el-form>
                </div>
                <div class="table-container">
                    <a-spin :spinning="loading">
                        <el-table
                            ref="tableRef"
                            :data="filterState"
                            :expand-row-keys="expandIds"
                            :indent="30"
                            :load="loadData"
                            :total="total"
                            :tree-props="{ children: 'children', hasChildren: 'hasChildren' }"
                            lazy
                            row-key="authorityId"
                            @selection-change="onSelectChange"
                            @expand-change="handleExpandChange"
                        >
                            <el-table-column :width="260" label="权限名称">
                                <template #default="{ row }" row-key="authorityId">
                                    <el-space style="height: 30px">
                                        <div style="position: relative">
                                            <PopForm
                                                v-model:org-value="row.authorityName"
                                                :params="{ id: row.authorityId, field: 'authorityName' }"
                                                :requestApi="updateAuthorityFiled"
                                                label="权限名称"
                                                type="textarea"
                                                @callback="onCallback"
                                            >
                                                <a v-if="row.hasChildren" @click="childCat(row.authorityId)">{{ row.authorityName }}</a>
                                                <span v-else>{{ row.authorityName }}</span>
                                            </PopForm>
                                        </div>
                                    </el-space>
                                </template>
                            </el-table-column>
                            <el-table-column :width="100" label="权限图标">
                                <template #default="{ row }">
                                    <em :class="row.authorityIco" class="main_pel_m"></em>
                                </template>
                            </el-table-column>
                            <el-table-column label="唯一编码">
                                <template #default="{ row }">
                                    <PopForm
                                        v-model:org-value="row.authoritySn"
                                        :params="{ id: row.authorityId, field: 'authoritySn' }"
                                        :requestApi="updateAuthorityFiled"
                                        label="唯一编码"
                                        type="textarea"
                                        @callback="onCallback"
                                    >
                                        <div>{{ row.authoritySn || "-" }}</div>
                                    </PopForm>
                                </template>
                            </el-table-column>
                            <!-- <el-table-column label="路由地址">
                                <template #default="{ row }">
                                    <PopForm
                                        v-model:org-value="row.routeLink"
                                        :params="{ id: row.authorityId, field: 'routeLink' }"
                                        :requestApi="updateAuthorityFiled"
                                        label="路由地址"
                                        type="textarea"
                                        @callback="onCallback"
                                    >
                                        <div>{{ row.routeLink || "-" }}</div>
                                    </PopForm>
                                </template>
                            </el-table-column> -->
                            <el-table-column label="细分权限">
                                <template #default="{ row }">
                                    <span v-for="(child, idx) in row.childAuth">{{ idx != 0 ? "," : "" }}{{ child.authName }}</span>
                                </template>
                            </el-table-column>
                            <el-table-column key="isShow" :sorter="true" label="是否显示">
                                <template #default="{ row }">
                                    <Switch
                                        v-model:checked="row.isShow"
                                        :params="{ id: row.authorityId, field: 'isShow' }"
                                        :requestApi="updateAuthorityFiled"
                                        @callback="onCallback"
                                    />
                                </template>
                            </el-table-column>
                            <el-table-column key="sortOrder" :sorter="true" label="排序">
                                <template #default="{ row }">
                                    <PopForm
                                        v-model:org-value="row.sortOrder"
                                        :params="{ id: row.authorityId, field: 'sortOrder' }"
                                        :requestApi="updateAuthorityFiled"
                                        label="排序"
                                        type="integer"
                                        @callback="onCallback"
                                    >
                                        <div>{{ row.sortOrder }}</div>
                                    </PopForm>
                                </template>
                            </el-table-column>
                            <el-table-column :width="220" fixed="right" label="操作">
                                <template #default="{ row }">
                                    <DialogForm
                                        :data="{ parentId: row.parentId }"
                                        :params="{ act: 'detail', id: row.authorityId, adminType:activeKey }"
                                        isDrawer
                                        path="authority/authority/Info"
                                        title="编辑权限"
                                        width="580px"
                                        @okCallback="updateChildFilter"
                                    >
                                        <a class="btn-link">编辑</a>
                                    </DialogForm>
                                    <el-divider direction="vertical"/>
                                    <DialogForm
                                        :data="{ parentId: row.parentId || row.authorityId }"
                                        :params="{ act: 'add', parentId: row.authorityId, adminType:activeKey }"
                                        isDrawer
                                        path="authority/authority/Info"
                                        title="编辑权限"
                                        width="580px"
                                        @okCallback="updateChildFilter"
                                    >
                                        <a class="btn-link">添加子目录</a>
                                    </DialogForm>
                                    <el-divider direction="vertical"/>
                                    <DeleteRecord
                                        v-if="row.parentId"
                                        :params="{ id: row.authorityId }"
                                        :requestApi="delAuthority"
                                        @afterDelete="updateChildFilter({}, { parentId: row.parentId })"
                                    >删除
                                    </DeleteRecord
                                    >
                                    <DeleteRecord
                                        v-if="!row.parentId"
                                        :params="{ id: row.authorityId }"
                                        :requestApi="delAuthority"
                                        @afterDelete="
                                            loadFilter();
                                            onCallback();
                                        "
                                    >删除
                                    </DeleteRecord
                                    >
                                </template>
                            </el-table-column>
                            <template #empty>
                                <div class="empty-warp">
                                    <div v-if="!loading" class="empty-bg">暂无数据</div>
                                </div>
                            </template>
                        </el-table>
                    </a-spin>
                    <div v-if="total > 0" class="pagination-con">
                        <Pagination v-model:page="filterParams.page" v-model:size="filterParams.size" :total="total" @callback="loadFilter"/>
                    </div>
                </div>
                <!-- <div v-if="selectedIds.length > 0" class="selected-action-warp selected-warp-left">
                    <div class="selected-action">
                        <el-space>
                            <span
                            >已选择：<b>{{ selectedIds.length }}</b> 项</span
                            >
                            <el-popconfirm title="您确认要批量删除所选数据吗？" @confirm="onBatchSubmit('del')">
                                <template #reference>
                                    <el-button>批量删除</el-button>
                                </template>
                            </el-popconfirm>
                        </el-space>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>
import "@/style/css/list.less";
import {DialogForm} from "@/components/dialog";
import {onMounted, reactive, ref} from "vue";
import {DeleteRecord, Pagination, Switch} from "@/components/list";
import {message} from "ant-design-vue";
import {useConfigStore} from "@/store/config";
import {PopForm} from "@/components/pop-form";
import {useRoute, useRouter} from "vue-router";
import {useAppStore} from "@/store/app";
import type {AuthorityFilterParams, AuthorityFilterState} from "@/types/authority/authority";
import {batchSubmit, delAuthority, getAuthorityList, updateAuthorityFiled} from "@/api/authority/authority";
import {useMenusStore} from "@/store/menu";
import { updateMenu } from "@/utils/menus";
import type { MainMenu } from "@/types/common/common.d";
const menusStore = useMenusStore();
//获取来自路由的参数
const {currentRoute} = useRouter();
const router = useRouter();
const appStore = useAppStore();
const config: any = useConfigStore();
const icoDefinedCss = ref(config.icoDefinedCss);
const activeKey = ref<string>('admin')
const onTabChange = (val: string) => {
    filterParams.adminType = val
    filterParams.page = 1;
    loadFilter()
}
// 基本参数定义
const filterState = ref<AuthorityFilterState[]>([]);
const loading = ref<boolean>(true);
const total = ref<number>(0);
const selectedIds = ref<number[]>([]);
const expandIds = ref([]);
const filterParams = reactive<AuthorityFilterParams>({
    page: 1,
    size: config.get("pageSize"),
    sortField: "sortOrder",
    sortOrder: "",
    adminType: "admin",
    keyword: "",
    parentId: 0
});
const parentId = ref<Array<number>>([0]);
const parentName = ref<string>();
const route = useRoute();
// const currentParentId = ref(null)
const tableTreeRefreshTool = reactive<any>({});
onMounted(() => {
    const query = <any>currentRoute.value.query;
    if (query.id > 0) {
        filterParams.parentId = query.id;
    }
    route.meta.title = "";
    loadFilter();
});

// 获取列表的查询结果
const loadFilter = async () => {
    loading.value = true;
    try {
        const result = await getAuthorityList({...filterParams});
        filterState.value = result.records;
        total.value = result.total;
        // parentName.value = result.parentName;
        // if (!result.parentName) {
        //     appStore.setHeaderTitle("权限列表");
        // } else {
        //     appStore.setHeaderTitle("权限列表 - " + result.parentName);
        // }
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
const loadData = async (tree: any, treeNode: any, resolve: any) => {
    // 保存父级id，在你需要刷新子级数据的地方可以用到
    // currentParentId.value = tree.authorityId
    // 在之前声明的全局变量中，增加一个key为 本条数据的id，id可替换为你数据中的任意唯一值
    tableTreeRefreshTool[tree.authorityId] = {};
    // 重要！保存resolve方法，以便后续使用
    tableTreeRefreshTool[tree.authorityId].resolve = resolve;
    // 记录展开次数，具体作用后续介绍
    tableTreeRefreshTool[tree.authorityId].expandCount = 0;
    // 请求api接口获取数据
    const result = await getAuthorityList({
        page: 1,
        parentId: tree.authorityId,
        sortField: "sortOrder",
        size: 1000
    });
    // 调用resolve方法，渲染子级数据
    resolve(result.records);
};
const handleExpandChange = async (row: any, expanded: any) => {
    // 获取到之前保存的全局变量
    const curr = tableTreeRefreshTool[row.authorityId];
    // 展开次数 +1
    curr.expandCount++;
    // 如果是展开状态，且展开次数大于1，且上一次的状态为折叠，则请求api数据，更新子菜单
    if (expanded && curr.expandCount > 1 && !curr.prevStatus) {
        // api请求
        const result = await getAuthorityList({
            page: 1,
            parentId: row.authorityId,
            sortField: "sortOrder",
            size: 1000
        });
        // 调用resolve方法，渲染子级数据
        curr.resolve(result.records);
    }
    // 保存本次的展开或折叠状态，用于下次判断
    curr.prevStatus = expanded;
};
const tableRef = ref<any>(null); // 用于引用表格组件
// 更新当前层级的所有子级
const updateChildFilter = async (res: any, data: any) => {
    const curr = tableTreeRefreshTool[data.parentId];
    // console.log(curr)
    if (curr) {
        const result = await getAuthorityList({
            page: 1,
            parentId: data.parentId,
            sortField: "sortOrder",
            size: 1000
        });
        //通过ref获取table的子节点数
        if (tableRef.value.store.states.lazyTreeNodeMap.value[data.parentId].length > 1) {
            //说明该节点下有多个子节点
            tableRef.value.store.states.lazyTreeNodeMap[data.parentId] = [];
        } else {
            //说明该节点只有一个节点
            tableRef.value.store.states.lazyTreeNodeMap.value[data.parentId] = [];
        }
        curr.resolve(result.records);
    } else {
        loadFilter();
    }
};
const onCallback = async () => {
    menusStore.mainMenu = await updateMenu() as MainMenu[];
};
const childCat = (id: number) => {
    parentId.value.push(id);
    filterParams.parentId = id;
    loadFilter();
};
const backToParentCat = () => {
    parentId.value.pop();
    filterParams.parentId = parentId.value[parentId.value.length - 1];
    loadFilter();
};

// 修改排序
// const onSortChange = ({prop, order}: { prop: string; order?: string }) => {
//     filterParams.sortField = prop;
//     filterParams.sortOrder = order == 'ascending' ? 'asc' : order == 'descending' ? 'desc' : '';
//     loadFilter();
// };

// 批量操作
const onBatchSubmit = async (action: string) => {
    try {
        const result = await batchSubmit(action, {ids: selectedIds.value});
        message.success("操作成功");
        window.location.reload();
    } catch (error: any) {
        message.error(error.message);
    }
};

const onSelectChange = (e: AuthorityFilterState[]) => {
    selectedIds.value = e.map((item) => item.authorityId);
};
</script>
<style lang="less">
.el-table__expand-icon {
    top: 2px;
    margin-right: 18px !important;
}

// :deep(.table-container) .el-table__expand-icon {
//     display: none;
// }
.el-table__expand-icon--expanded {
    transform: none;
}

.el-table__expand-icon svg {
    display: none;
}

.el-table__expand-icon .el-icon {
    color: inherit;
    text-decoration: none;
    outline: none;
    cursor: pointer;
    transition: all 0.3s;
    position: relative;
    float: left;
    box-sizing: border-box;
    width: 17px;
    height: 17px;
    padding: 0;
    line-height: 17px;
    background: #ffffff;
    border: 1px solid #f0f0f0;
    border-radius: 6px;
    transform: scale(0.9411764705882353);
    user-select: none;
}

.el-table__expand-icon .el-icon.is-loading {
    animation: none;
}

.el-table__expand-icon .el-icon::before,
.el-table__expand-icon .el-icon::after {
    position: absolute;
    background: currentcolor;
    transition: transform 0.3s ease-out;
    content: "";
}

.el-table__expand-icon .el-icon::before {
    top: 7px;
    inset-inline-end: 3px;
    inset-inline-start: 3px;
    height: 1px;
}

.el-table__expand-icon .el-icon::after {
    top: 3px;
    bottom: 3px;
    inset-inline-start: 7px;
    width: 1px;
    transform: rotate(90deg);
}

.el-table__expand-icon .el-icon::after {
    position: absolute;
    background: currentcolor;
    transition: transform 0.3s ease-out;
    content: "";
}

.el-table__expand-icon .el-icon::before {
    transform: rotate(-180deg);
}

.el-table__expand-icon .el-icon::after {
    transform: rotate(0deg);
}

.el-table__expand-icon--expanded .el-icon::before {
    transform: rotate(0);
}

.el-table__expand-icon--expanded .el-icon::after {
    transform: rotate(90deg);
}
</style>
