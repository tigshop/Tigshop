<template>
    <div class="container" style="position: relative; height: 100%">
        <div class="content_wrapper">
            <div class="" style="display: flex; flex-direction: column; width: 100%; height: 100%; position: absolute">
                <div class="list-table-tool lyecs-search-warp" style="flex: 0">
                    <el-form :model="filterParams" name="form" @finish="searchSubmit">
                        <div class="list-table-tool-row" style="margin-bottom: 5px">
                            <div class="list-table-tool-col">
                                <el-space>
                                    <SelectCategory v-model:categoryId="filterParams.categoryId" style="width: 150px"></SelectCategory>
                                    <!-- <SelectBrand v-model:brandId="filterParams.brandId"></SelectBrand> -->
                                    <TigInput width="230px" v-model="filterParams.keyword" placeholder="商品名称/货号" />
                                    <el-button @click="searchSubmit">搜索</el-button>
                                </el-space>
                            </div>
                            <div class="list-table-tool-col"></div>
                        </div>
                    </el-form>
                </div>
                <perfect-scrollbar class="table-container" style="flex: 1">
                    <a-spin :spinning="loading">
                        <div style="padding-right: 15px; box-sizing: border-box">
                            <el-table
                                ref="tableRef"
                                :class="isMultiple ? '' : 'hide-checkbox'"
                                :data="filterState"
                                :loading="loading"
                                :total="total"
                                class="result-table"
                                row-key="productId"
                                @select="selectRow"
                                @select-all="handleSelectAll"
                                @selection-change="onSelectChange"
                            >
                                <el-table-column :selectable="isSelectable" type="selection" width="32" />
                                <el-table-column label="商品信息" prop="productId">
                                    <template #default="{ row }">
                                        <div class="flex">
                                            <div v-if="row.picThumb" class="span-pic">
                                                <a :href="row.url" target="_blank"><img :src="imageFormat(row.picThumb)" height="40" width="40" /></a>
                                            </div>
                                            <div>
                                                <p>{{ row.productName }}</p>
                                                <p class="gray">货号：{{ row.productSn }}</p>
                                            </div>
                                        </div>
                                    </template>
                                </el-table-column>
                                <el-table-column label="规格" prop="skuId" v-if="isSku">
                                    <template #default="{ row }">
                                        <div class="flex">
                                            <p v-if="row.skuIds && row.skuIds.length > 0">
                                                已选：{{ row.skuIds.length }}个规格
                                                <!-- <a @click="row.skuIds.length = 0">清空</a> -->
                                            </p>
                                            <p v-else>--</p>
                                        </div>
                                    </template>
                                </el-table-column>
                                <template #empty>
                                    <div class="empty-warp">
                                        <div v-if="!loading" class="empty-bg">暂无数据</div>
                                    </div>
                                </template>
                            </el-table>
                        </div>
                    </a-spin>
                </perfect-scrollbar>
                <div v-if="total > 0" class="pagination-con" style="flex-shrink: 0">
                    <Pagination
                        v-model:page="filterParams.page"
                        v-model:size="filterParams.size"
                        :total="total"
                        @callback="loadFilter"
                        layout="slot ,prev, pager, next"
                        :background="false"
                    />
                </div>
            </div>
        </div>
    </div>
    <el-dialog v-model="skuVisible" title="选择规格" width="500" :before-close="closeSku" :close-on-click-modal="false">
        <SelectSku v-if="skuVisible" ref="skuRef" :productInfo="rowInfo" :isMultiple="isMultiple"></SelectSku>
        <template #footer>
            <div class="dialog-footer">
                <el-button @click="closeSku">取消</el-button>
                <el-button type="primary" @click="submitSku">保存</el-button>
            </div>
        </template>
    </el-dialog>
</template>

<script lang="ts" setup>
import "@/style/css/list.less";
import { SelectBrand, SelectCategory } from "@/components/select";
import { onMounted, reactive, ref } from "vue";
import { message } from "ant-design-vue";
import { imageFormat } from "@/utils/format";
import { Pagination } from "@/components/list";
import { ProductFilterParams, ProductFilterState } from "@/types/product/product";
import { useConfigStore } from "@/store/config";
import { getProductList } from "@/api/product/product";

const props = defineProps({
    // 已选择的项，用于排除重复，禁止选择
    selectedIds: { type: Array, default: [] },
    modelValue: {
        type: Object,
        default: {}
    },
    isMultiple: {
        type: Boolean,
        default: true
    },
    // 是否选择规格, 默认单选
    isSku: {
        type: Boolean,
        default: false
    },
    //是否自营商品
    isSelf: {
        type: Number,
        default: 0
    }
});
const linkSelectData = defineModel("linkSelectData");
const emit = defineEmits(["submitCallback", "okType", "update:modelValue"]);
emit("okType", false);
const selectedIds = ref<number[]>([]);
const loading = ref(true); //列表加载中
const total = ref<number>(0);
const config = useConfigStore();
const filterState = ref<ProductFilterState[]>([]);
const filterParams = reactive<ProductFilterParams>({
    page: 1,
    size: (config as any).get("pageSize"),
    sortField: "",
    sortOrder: "",
    keyword: "",
    isDelete: 0,
    productStatus: 1,
    checkStatus: 1,
    shopId: props.isSelf ? 0 : -1,
});

// 获取列表的查询结果
const loadFilter = async () => {
    loading.value = true;
    if(props.isSku){
        selectedIds.value = [];
    }
    try {
        const result = await getProductList({ ...filterParams });
        filterState.value = result.records;
        total.value = result.total;
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
onMounted(() => {
    loadFilter();
});
// 参数查询
const searchSubmit = () => {
    loadFilter();
};
const tableRef: any = ref();
const skuRef: any = ref();

const onSelectChange = (e: any) => {
    if (props.isMultiple) {
        let idsSet:any = []
        e.forEach((item: any) => {
            idsSet.push(item.productId);
        });
        selectedIds.value = idsSet;
        emit("okType", selectedIds.value.length > 0);
    }
};
const rowInfo = ref<any>({})
const skuVisible = ref<boolean>(false)
const selectRow = (selection: any, val: any) => {
    //手动触发该事件
    if (selection.includes(val)) {
        if (props.isSku && val.productSku !== null && val.productSku.length > 1) {
            rowInfo.value = val;
            skuVisible.value = true;
        }
    }else{
        val.skuIds = [];
    }
    if (!props.isMultiple) {
        // 单选
        tableRef.value.clearSelection();
        if (selection.length == 0) {
            selectedIds.value = []; // 清空data中绑定的selectedRow
            return;
        }
        tableRef.value.toggleRowSelection(val, true);
        selectedIds.value.length = 0;
        selectedIds.value.push(val.productId);
        emit("okType", selectedIds.value.length > 0);
    }
    linkSelectData.value = {
        path: "product",
        label: "商品",
        name: val.productName,
        id: val.productId,
        sn: val.productSn,
        data: {
            id: val.productId,
            sn: val.productSn,
        }
    };
    emit("update:modelValue", val);
};
//监听权选
const handleSelectAll = (selection:any) => {
    //需要选择规格
    if (props.isSku) {
        if (selection.length != 0) {
            filterState.value.map((item:any) => {
                let skuIds = [];
                if(item.productSku.length > 1){
                    skuIds = item.productSku.map((v:any) => v.skuId);
                }
                item.skuIds = skuIds;
            })
        }else{
            filterState.value.map((item:any) => {
                item.skuIds = [];
            })
        }
    }
}
const isSelectable = (row: any, index: number) => {
    // 排除重复项
    return !props.selectedIds?.includes(row.productId); // Column configuration not to be checked
};
const closeSku = () => {
    tableRef.value.toggleRowSelection(rowInfo.value, false);
    selectedIds.value = [];
    rowInfo.value = "";
    skuVisible.value = false;
}
const submitSku = () => {
    console.log(skuRef.value.skuIds);
    filterState.value.forEach(item => {
        if (item.productId == rowInfo.value.productId) {
            item.skuIds = skuRef.value.skuIds;
        }
    })
    rowInfo.value = "";
    skuVisible.value = false;
}
// 弹窗回调
const onFormSubmit = () => {
    // 弹窗确认按钮提交
    if (props.isSku) {
        const selectes = filterState.value.filter(item => selectedIds.value.includes(item.productId)).map(item => {
            const result:any = { productId: item.productId };
            if (item.skuIds) {
                result.skuIds = item.skuIds;
            }
            return result;
        });
        emit("submitCallback", selectes);
    }else{
        emit("submitCallback", selectedIds.value);
    }
};

// 修改排序

defineExpose({
    onFormSubmit
});
</script>
<style lang="less" scoped>
.pagination-con {
    background: #fff;
}

:deep .hide-checkbox .el-table__header-wrapper .el-table__header .el-checkbox {
    display: none;
}
</style>
