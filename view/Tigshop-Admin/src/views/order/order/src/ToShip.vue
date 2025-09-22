<template>
    <div class="container">
        <div class="content_wrapper">
            <div class="lyecs-form-table">
                <div class="button-card babyBlue pd15">提示：如果订单分开发货，系统会自动将订单拆分为不同订单！</div>
                <el-form v-if="!loading" ref="formRef" :model="formState" label-width="auto">
                    <el-form-item label="配送方式" prop="shippingMethod">
                        <div>
                            <el-radio-group v-model="formState.shippingMethod" :disabled="disabled">
                                <el-radio :value="1">物流配送</el-radio>
                                <el-radio :value="2">商家配送</el-radio>
                                <el-radio :value="3">无需配送</el-radio>
                            </el-radio-group>
                        </div>
                    </el-form-item>
                    <div v-show="formState.shippingMethod === 1">
                        <!-- <el-form-item label="配送类型" prop="shippingTypeId">
                            <ShippingType v-model:id="formState.shippingTypeId" @change="onChangeShippingType"></ShippingType>
                        </el-form-item> -->
                        <el-form-item label="物流公司" prop="logisticsId" :rules="[{ required: false, message: '请选择物流公司' }]">
                            <SelectLogisticsCompany v-model:logisticsId="formState.logisticsId"></SelectLogisticsCompany>
                        </el-form-item>
                        <el-form-item v-if="formState.shippingMethod === 1" label="快递单号" prop="trackingNo">
                            <TigInput width="100%" v-model="formState.trackingNo" />
                        </el-form-item>
                    </div>
                    <el-table :data="formState.items" style="width: 100%" @selection-change="handleSelectionChange">
                        <el-table-column type="selection" width="50" :selectable="selectable" />
                        <el-table-column label="商品名称" prop="productId" width="250">
                            <template #default="{ row }">
                                <ProductCard
                                    :picThumb="row.picThumb"
                                    :productId="row.productId"
                                    :productName="row.productName"
                                    :productType="row.productType"
                                    :url="row.url"
                                ></ProductCard>
                            </template>
                        </el-table-column>
                        <el-table-column label="属性" prop="productAttr">
                            <template #default="{ row }">
                                {{ row.skuValue || "无属性" }}
                            </template>
                        </el-table-column>
                        <el-table-column label="附加规格" prop="extraSkuData">
                            <template #default="{ row }">
                                <div v-if="row.extraSkuData && row.extraSkuData.length > 0" class="extraskudata" v-for="item in row.extraSkuData" :key="item">
                                    {{ item.attrName + item.attrValue + priceFormat(item.totalAttrPrice) }}
                                </div>
                                <div v-else>无附加规格</div>
                            </template>
                        </el-table-column>
                        <el-table-column label="商品编号" prop="productSn" />
                        <el-table-column label="库存" prop="stock"></el-table-column>
                        <el-table-column label="数量" prop="quantity"> </el-table-column>
                        <el-table-column label="待发货数量" prop="toDeliveryQuantity" width="120">
                            <template #default="{ row }">
                                <el-input-number
                                    class="input-number"
                                    controls-position="right"
                                    v-model="row.toDeliveryQuantity"
                                    @change="updateDeliverData"
                                    type="number"
                                    :min="1"
                                    :max="row.allowDeliverNum"
                                />
                            </template>
                        </el-table-column>
                    </el-table>
                    <el-form-item v-show="!props.isDialog" :wrapper-col="{ offset: 4, span: 16 }">
                        <el-button ref="submitBtn" class="form-submit-btn" type="primary" @click="onSubmit">提交 </el-button>
                    </el-form-item>
                </el-form>
                <a-spin :spinning="loading" style="width: 100%; margin-top: 100px" />
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
import { computed, onMounted, ref, shallowRef } from "vue";
import { useRouter } from "vue-router";
import { message, Modal } from "ant-design-vue";
import type { OrderToShipFormState } from "@/types/order/order.d";
import { getOrder, orderDeliver } from "@/api/order/order";
import { ProductCard } from "@/components/list";
import { SelectLogisticsCompany, ShippingType } from "@/components/select";
import { imageFormat, priceFormat } from "@/utils/format";
import { ru } from "element-plus/es/locale";
const emit = defineEmits(["submitCallback", "update:confirmLoading", "close", "okType"]);

emit("okType", false);
const props = defineProps({
    id: { type: Number, default: 0 },
    act: { type: String, default: "" },
    isDialog: Boolean
});
const loading = ref<boolean>(true);
const query = useRouter().currentRoute.value.query;
const action = ref<string>(props.isDialog ? props.act : String(query.act));
const id = ref<number>(props.isDialog ? props.id : Number(query.id));
const operation = action.value === "add" ? "create" : "update";
const formRef = shallowRef();
// 这里不要用OrderFormState
const formState = ref<OrderToShipFormState>({
    items: [],
    shippingMethod: 1,
    shippingTypeId: 1
});
const warnSplitNeed = ref(false);
const selectedRows = ref<OrderToShipFormState["items"]>([]);
const deliverData = ref<{ itemId: number; toDeliveryQuantity: number }[]>();
const disabled = ref(false);
onMounted(() => {
    // 获取详情数据
    fetchOrder();
});
// 动态控制选择功能
const selectable = (row: any, index: number) => {
    // 根据条件返回 true 或 false
    return row.toDeliveryQuantity > 0;
};
const fetchOrder = async () => {
    try {
        loading.value = true;
        const result = await getOrder(action.value, { id: id.value });
        Object.assign(formState.value, result);
        if (formState.value.items) {
            formState.value.items.forEach((item) => {
                item.toDeliveryQuantity = item.allowDeliverNum;
            });
            if (formState.value.items.length === 1 && formState.value.items[0].productType !== 1) {
                formState.value.shippingMethod = 3;
                disabled.value = true;
            }
        }
    } catch (error: any) {
        message.error(error.message);
        emit("close");
    } finally {
        loading.value = false;
    }
};
const updateDeliverData = () => {
    const arr = <{ itemId: number; toDeliveryQuantity: number }[]>[];
    warnSplitNeed.value = false;
    if (selectedRows.value.length > 0) {
        selectedRows.value.forEach((element) => {
            console.log(element);
            if (element.toDeliveryQuantity < element.allowDeliverNum) {
                warnSplitNeed.value = true;
            }
            arr.push({
                itemId: element.itemId,
                toDeliveryQuantity: element.toDeliveryQuantity
            });
        });
    }
    deliverData.value = arr;
    if (warnSplitNeed.value === false) {
        warnSplitNeed.value = selectedRows.value.length < formState.value.items.length;
    }
};
// 表单通过验证后提交
const onSubmit = async () => {
    if (warnSplitNeed.value === false) {
        deliverDo();
    } else {
        Modal.confirm({
            title: "您当前只选择了部份商品发货，系统将会自动将订单进行拆分，是否确认继续发货？",
            onOk: async () => {
                deliverDo();
            }
        });
    }
};
const deliverDo = async () => {
    await formRef.value.validate();
    try {
        emit("update:confirmLoading", true);
        console.log(deliverData.value);
        const result = await orderDeliver({
            id: id.value,
            deliverData: deliverData.value,
            shippingMethod: formState.value.shippingMethod,
            logisticsId: formState.value.logisticsId,
            trackingNo: formState.value.trackingNo
        });
        emit("submitCallback", result);
        message.success("操作成功");
    } catch (error: any) {
        message.error(error.message);
    } finally {
        emit("update:confirmLoading", false);
    }
};
const onChangeShippingType = (defaultLogisticsId: number) => {
    formState.value.logisticsId = defaultLogisticsId;
};

const handleSelectionChange = (val: OrderToShipFormState["items"]) => {
    selectedRows.value = val;
    updateDeliverData();
    emit("okType", selectedRows.value.length > 0);
};

// 表单提交
const onFormSubmit = () => {
    onSubmit();
};

defineExpose({ onFormSubmit });
</script>
<style lang="less" scoped>
.button-card {
    margin-top: 12px;
    margin-bottom: 12px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap; /* 允许换行 */
    gap: 8px;
    line-height: 24px;
}

.babyBlue {
    background-color: rgba(61, 127, 255, 0.06);
    border-radius: 9px;
}

.pd15 {
    padding: 15px;
}
.input-number {
    width: 85px;
}
</style>
