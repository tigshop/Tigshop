<template>
    <div class="lyecs-product-select-group">
        <el-space>
            <DialogForm
                v-if="!disabled"
                :params="{ selectedIds: ids, isMultiple: props.isMultiple, isSku: props.isSku, isSelf: props.isSelf }"
                isDrawer
                path="product/product/src/SelectProduct"
                title="选择商品"
                width="600px"
                @okCallback="onOk"
            >
                <el-button :disabled="max > 0 && ids?.length >= max" type="primary">选择商品</el-button>
            </DialogForm>
            <el-button v-else :disabled="max > 0 && ids?.length >= max || disabled" type="primary">选择商品</el-button>
            <span v-if="isMultiple && ids?.length > 0" class="ml10"
                >已选择 <b>{{ ids?.length }}</b> 个商品</span
            >
            <el-button v-if="isMultiple && ids?.length > 0" :disabled="disabled" @click="clear">清空</el-button>
        </el-space>
        <div v-if="productList.length > 0 && !loading" class="lyecs-product-selected-con">
            <div class="product-selected-list">
                <div class="product-selected-list-tr product-selected-list-th">
                    <div class="col col1">商品编号</div>
                    <div class="col col4">商品信息</div>
                    <div class="col col3">商品库存</div>
                    <div class="col col3" v-if="isSku && isGift">赠品库存</div>
                    <div class="col col3">操作</div>
                </div>
                <template v-for="(item, key) in productList" :key="key">
                    <div class="product-selected-list-tr">
                        <div class="col col1">{{ item.productSn }}</div>
                        <div class="col col4 product-info">
                            <div>
                                <img :src="imageFormat(item.picThumb)" height="50" width="50" />
                            </div>
                            <div>
                                <div class="product-name">{{ item.productName }}</div>
                                <div class="product-sku" v-if="isSku && skuId">
                                    <el-button :disabled="disabled" link size="mini" @click="checkSku(item)">+ 已选1个规格</el-button>
                                </div>
                            </div>
                        </div>
                        <div class="col col3" v-if="isSku && skuId && item.productSku !== null">
                            {{item.productSku.find(item => item.skuId == skuId)?.skuStock}}
                        </div>
                        <div class="col col3" v-else>
                            {{item.productStock}}
                        </div>
                        <div class="col col3" v-if="isSku && isGift">
                            <TigInput v-if="item.productSku !== null" :disabled="disabled" :min="0" type="integer" :max="item.productSku.find(item => item.skuId == skuId)?.skuStock" v-model="skuStock" width="100%" />
                            <TigInput v-else :disabled="disabled" :min="0" type="integer" :max="item.productStock" v-model="skuStock" width="100%" />
                        </div>
                        <div class="col col3">
                            <el-button link type="primary" class="del-btn" @click="del(key)" :disabled="disabled">删除</el-button>
                        </div>
                    </div>
                </template>
            </div>
            <div v-if="isMultiple && ids?.length > 0 && total > 0" class="pagination-con">
                <Pagination
                    v-model:page="filterParams.page"
                    v-model:size="filterParams.size"
                    :total="total"
                    @callback="loadList"
                    layout="slot ,prev, pager, next"
                    :background="false"
                />
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
import { onMounted, reactive, ref, defineModel } from "vue";
import { DialogForm } from "@/components/dialog";
import { imageFormat } from "@/utils/format";
import { getProductList } from "@/api/product/product";
import { message } from "ant-design-vue";
import { ProductFilterParams, type ProductFilterState } from "@/types/product/product";
import { useConfigStore } from "@/store/config";
import { Pagination } from "@/components/list";
// 传值
const props = defineProps({
    // 传入需要显示的商品list
    max: { type: Number, default: -1 },
    // 单选还是多选
    isMultiple: {
        type: Boolean,
        default: true
    },
    disabled: { type: Boolean, default: false },
    // 是否选择规格, 默认单选
    isSku: {
        type: Boolean,
        default: false
    },
    // 是否是选择赠品
    isGift: {
        type: Boolean,
        default: false
    },
    //是否自营商品
    isSelf: {
        type: Number,
        default: 0
    }
});

const ids = defineModel<number[]>("ids", { type: Array, default: [] });
const skuId = defineModel("skuId", {type: String, default: ''});
const skuStock = defineModel("skuStock", {type: Number, default: 0});

onMounted(async () => {
    if (ids.value && ids.value.length > 0) {
        await loadList(ids.value);
    }
});
// 商品列表
const productList = ref<ProductFilterState[]>([]);
const total = ref(0);

const config = useConfigStore();
const loading = ref<boolean>(true);
const filterParams = reactive<ProductFilterParams>({
    page: 1,
    size: config.get("pageSize") as number,
    sortField: "",
    sortOrder: "",
    keyword: ""
});
const productIds = ref<string>("");
const loadList = async (id: number[]) => {
    loading.value = true;
    try {
        //id是数组，现在用,号分割成字符串
        productIds.value = Array.isArray(id) ? id.join(",") : "";
        const result = await getProductList({ ids: productIds.value, ...filterParams });
        productList.value = result.records;
        total.value = result.total;
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
const onOk = (e: any) => {
    let _list = ids.value;
    skuId.value = '';
    skuStock.value = 0;
    if (props.isMultiple == false) {
        _list = [];
    }
    if(props.isSku){
        _list.push(e[0].productId);
        if(e[0].skuIds){
            skuId.value = e[0].skuIds[0]
        }
    }else{
        for (let index in e) {
            _list.push(e[index]);
        }
    }
    ids.value = _list;
    loadList(_list);
};
// 清空
const clear = () => {
    productList.value = [];
    ids.value = [];
};
// 删除
const del = (key: number) => {
    let delProductId = productList.value[key].productId;
    ids.value = ids.value.filter((num) => num !== delProductId);
    productList.value.splice(<any>key, 1);
    total.value--;
};
const skuRef: any = ref();
const skuVisible = ref<boolean>(false)
const rowInfo = ref<any>({})
const checkSku = (item: any) => {
    item.skuIds = [skuId.value];
    rowInfo.value = item;
    skuVisible.value = true;
}
const closeSku = () => {
    rowInfo.value = "";
    skuVisible.value = false;
}
const submitSku = () => {
    if(skuRef.value.skuIds.length > 0){
        skuId.value = skuRef.value.skuIds[0]
        rowInfo.value = "";
        skuVisible.value = false;
    }else{
        message.error('请选择规格')
    }
}
defineExpose({
    ids,
    productList
});
</script>

<style lang="less" scoped>
.all_brand {
    padding: 8px;
}

.all_brand ul {
    display: flex;
    flex-wrap: wrap;
    width: 290px;
}

.all_brand li a {
    padding: 2px 7px;
    display: inline-block;
    border-radius: 3px;
    line-height: 20px;
}

.all_brand li a:hover {
    background: #f4f4f4;
}

/*商品选择器*/
.lyecs-product-select-group {
    margin-bottom: 0;
    width: 100%;
}

.lyecs-product-select-group .lyecs-product-selected-con {
    max-width: 710px;
    position: relative;
    padding-top: 50px;
    margin-top: 10px;
}

.lyecs-product-select-group .clear-btn {
    margin-left: 20px;
}

.lyecs-product-select-group .desc {
    margin-left: 20px;
    color: #999;
}

.lyecs-product-select-group .product-selected-list {
    margin-bottom: 20px;
    max-height: 550px;
    overflow-y: auto;
    min-width: 400px;
}

.lyecs-product-select-group .product-selected-list-tr {
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    border-bottom: 1px solid #f0f0f0;
}

.lyecs-product-select-group .product-selected-list-th {
    color: #333;
    font-weight: bold;
    position: absolute;
    top: 0;
    width: 100%;
    background: #fff;
    height: 50px;
}

.lyecs-product-select-group .product-selected-list-tr .col {
    padding: 10px;
}

.lyecs-product-select-group .product-selected-list-tr .col1 {
    width: 100px;
}

.lyecs-product-select-group .product-selected-list-tr .col2 {
    flex: 1;
}

.lyecs-product-select-group .product-selected-list-tr .col3 {
    width: 80px;
}
.lyecs-product-select-group .product-selected-list-tr .col4 {
    width: 200px;
    margin-right: 15px;
}

.lyecs-product-select-group .product-selected-list-tr .product-info {
    width: 200px;
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    margin-right: 15px;
}
.lyecs-product-select-group .product-selected-list-tr .product-name {
    width: 160px;
    margin-right: 20px;
    line-height: 18px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    text-overflow: ellipsis;
}

.lyecs-product-select-group .product-selected-list-tr .product-info img {
    margin-right: 10px;
}
@media only screen and (max-width: 767px) {
    .lyecs-product-selected-con {
        overflow-x: auto;
        max-width: 100% !important;
    }
    .lyecs-product-select-group .product-selected-list {
        min-width: auto;
    }
    .lyecs-product-select-group .product-selected-list-tr .col1 {
        width: 50px;
        word-break: break-all;
    }
    .lyecs-product-select-group .product-selected-list-tr .col3 {
        width: 30px;
    }
    .lyecs-product-select-group .product-selected-list-tr .product-info {
        flex-wrap: wrap;
    }
}
</style>
