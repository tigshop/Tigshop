<template>
    <div v-if="!loading">
        <div class="container-card" v-if="!isParent">
            <div class="border-bottom">
                订单编号：{{ formState.orderSn }}
                <el-divider direction="vertical" />
                下单时间：{{ formState.addTime }}
                <template v-if="formState.storeTitle">
                    <el-divider direction="vertical" />
                    <span>下单店铺：{{ formState.storeTitle }}</span>
                </template>
            </div>
            <el-space :size="10" class="button-card">
                <div v-if="formState.isChangeOrderStatus">
                    <DialogForm
                        v-if="formState.availableActions.deliver"
                        :params="{ id: formState.orderId, preOrderStatus: formState.preOrderStatus }"
                        isDrawer
                        path="order/order/src/ChangeStatus"
                        title="取消订单"
                        width="600px"
                        @okCallback="updateDataWithList"
                    >
                        <el-button bg class="buttonColor" size="small" text type="primary"> 取消订单 </el-button>
                    </DialogForm>
                    <DialogForm
                        v-if="formState.availableActions.confirmReceipt"
                        :params="{ id: formState.orderId, preOrderStatus: formState.preOrderStatus }"
                        isDrawer
                        path="order/order/src/ChangeStatus"
                        title="取消发货"
                        width="600px"
                        @okCallback="updateDataWithList"
                    >
                        <el-button bg class="buttonColor" size="small" text type="primary"> 取消发货 </el-button>
                    </DialogForm>
                </div>
                <!--                <el-button v-if="formState.availableActions.setConfirm" bg class="buttonColor" size="small" text type="primary" @click="setConfirm">-->
                <!--                    确认订单<Tooltip ico content="确认订单可允许在未支付的情况下发货" />-->
                <!--                </el-button>-->
                <DialogForm
                    v-if="formState.availableActions.setPaid"
                    :params="{ act: 'setPaid', id: formState.orderId }"
                    isDrawer
                    path="order/order/src/Operation"
                    title="设置为已支付"
                    width="600px"
                    @okCallback="updateDataWithList"
                >
                    <el-button bg class="buttonColor" size="small" text type="primary"> 设置为已支付 </el-button>
                </DialogForm>
                <DialogForm
                    v-if="formState.availableActions.cancelOrder"
                    :params="{ act: 'cancelOrder', id: formState.orderId }"
                    isDrawer
                    path="order/order/src/Operation"
                    title="取消订单"
                    width="600px"
                    @okCallback="updateDataWithList"
                >
                    <el-button bg class="buttonColor" size="small" text type="primary"> 取消订单 </el-button>
                </DialogForm>
                <el-button v-if="formState.availableActions.delOrder" bg size="small" text type="primary" @click="onDelClick"> 删除订单 </el-button>
                <!-- formState.availableActions.deliver -->
                <DialogForm
                    v-if="(formState.availableActions.deliver && adminType == 'admin' && !formState.vendorId) || (formState.availableActions.deliver  && adminType == 'vendor')"
                    :params="{ act: 'detail', id: formState.orderId }"
                    :title="'订单发货 ' + formState.orderSn"
                    isDrawer
                    path="order/order/src/ToShip"
                    width="900px"
                    @okCallback="updateDataWithList"
                >
                    <el-button bg size="small" text type="danger"> 去发货 </el-button>
                </DialogForm>
                <el-button v-if="formState.availableActions.confirmReceipt" bg size="small" text type="primary" @click="onReceiptClick"> 确认已收货 </el-button>
                <el-button v-if="formState.availableActions.splitOrder" bg size="small" text type="danger" @click="onSplitClick">
                    拆分店铺订单<Tooltip ico content="该订单来自多个店铺且还未拆分，在做任何操作前，您需要先拆分该订单" />
                </el-button>
                <!-- <DialogForm
                    :params="{ act: 'detail', id: formState.orderId, valueName: 'adminNote' }"
                    isDrawer
                    path="order/order/src/EditRemark"
                    title="编辑备注"
                    width="600px"
                    @okCallback="updateDataWithList"
                >
                    <el-button bg class="buttonColor" size="small" text type="primary"> 商家备注 </el-button>
                </DialogForm> -->
                <el-button bg size="small" text type="primary" @click="openPage(`/print/orderPrint?ids=${formState.orderId}`, 'order')">
                    打印配送单
                </el-button>
            </el-space>
            <div v-if="formState.mark" style="margin-left: 10px">
                <EditSign title="编辑标记" :item="formState" @callBack="fetchOrder">
                    <el-button link type="primary" style="font-size: 12px">标记订单</el-button>
                    <div class="mt10">
                        <SignTag class="check-box tag" :value="formState.mark"></SignTag>
                        {{ formState.adminNote }}
                    </div>
                </EditSign>
            </div>
            <div class="button-card babyBlue pd20" v-if="formState.stepStatus">
                <Steps :current="formState.stepStatus.current" size="small" :status="formState.stepStatus.status" :items="formState.stepStatus.steps"></Steps>
            </div>
            <!-- <div v-if="formState.adminNote">
                <span class="orange">商家备注：</span>{{ formState.adminNote }}
                <DialogForm
                    :params="{ act: 'detail', id: formState.orderId, valueName: 'adminNote' }"
                    isDrawer
                    path="order/order/src/EditRemark"
                    title="编辑备注"
                    width="600px"
                    @okCallback="updateDataWithList"
                >
                    <el-button bg class="buttonColor" size="small" text type="primary"> 修改 </el-button>
                </DialogForm>
            </div> -->
        </div>
        <div class="container-card">
            <div class="title">订单明细</div>
            <div class="info-card">
                <div class="card-title">
                    <div class="min-title">
                        收货人信息
                        <DialogForm
                            v-if="!isParent"
                            :params="{ act: 'detail', id: formState.orderId, form: formState }"
                            isDrawer
                            path="order/order/src/EditConsignee"
                            title="编辑收货人信息"
                            width="550px"
                            @okCallback="updateDataWithList"
                            :disabled="adminType == 'admin' && formState.vendorId"
                        >
                            <el-button bg class="ml10" size="small" text type="primary" :disabled="adminType == 'admin' && formState.vendorId"> 
                                编辑 
                            </el-button>
                        </DialogForm>
                    </div>
                    <ul>
                        <li class="card-li">
                            会员名称：<span class="li-info">{{ formState.user?.nickname || formState.user?.username || "--" }}</span>
                        </li>
                        <li class="card-li">
                            &nbsp;&nbsp;&nbsp;&nbsp;收货人：<span class="li-info">{{ formState.consignee ? formState.consignee : "--" }}</span>
                        </li>
                        <li class="card-li">
                            联系电话：<span class="li-info"> <MobileCard :mobile="formState.mobile"></MobileCard></span>
                        </li>
                        <li class="card-li" v-if="formState.telephone">
                            手机：<span class="li-info">{{ formState.telephone ? formState.telephone : "--" }}</span>
                        </li>
                        <li class="card-li" v-if="formState.email">
                            电子邮件：<span class="li-info">{{ formState.email }}</span>
                        </li>
                        <li class="card-li" v-if="formState.postcode">
                            邮政编码：<span class="li-info">{{ formState.postcode }}</span>
                        </li>
                        <li class="card-li">
                            收货地址：
                            <span class="li-info">
                                {{ formState.userAddress ? formState.userAddress : "--" }}
                            </span>
                        </li>
                        <li class="card-li">
                            订单备注：
                            <span class="li-info">
                                {{ formState.buyerNote ? formState.buyerNote : "--" }}
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="card-title">
                    <div class="min-title">
                        配送信息
                        <DialogForm
                            v-if="!isParent"
                            :params="{ act: 'detail', id: formState.orderId }"
                            isDrawer
                            path="order/order/src/EditShipping"
                            title="编辑配送方式"
                            width="600px"
                            :disabled="!formState.availableActions.modifyShippingInfo || adminType == 'admin' && formState.vendorId"
                            @okCallback="updateDataWithList"
                        >
                            <el-button :disabled="!formState.availableActions.modifyShippingInfo || adminType == 'admin' && formState.vendorId" bg class="buttonColor" size="small" text type="primary">
                                编辑
                            </el-button>
                        </DialogForm>
                    </div>
                    <ul>
                        <li class="card-li">
                            配送方式：<span class="li-info">{{ formState.shippingTypeName }}</span>
                        </li>
                        <li class="card-li">
                            发货时间：<span class="li-info">{{ formState.shippingTime ? formState.shippingTime : "--" }}</span>
                        </li>
                        <li class="card-li">
                            物流名称：<span class="li-info">{{ formState.logisticsName ? formState.logisticsName : "--" }}</span>
                        </li>
                        <li class="card-li">
                            发货单号：<span class="li-info">{{ formState.trackingNo ? formState.trackingNo : "--" }}</span>
                        </li>
                    </ul>
                </div>
                <div class="card-title">
                    <div class="min-title">付款信息</div>
                    <ul>
                        <li class="card-li">
                            支付方式：<span class="li-info">{{
                                formState.payTypeId === 1 ? "在线支付" : formState.payTypeId === 2 ? "货到付款" : "线下支付"
                            }}</span>

                            <!-- <DialogForm :params="{ act: 'info', id: 0 }" :showClose="false" :showOnOk="false" isDrawer path="order/src/PaymentLog" title="支付日志" width="860px"
                                @okCallback="fetchOrder">
                            </DialogForm> -->
                        </li>
                        <li class="card-li">
                            付款时间：<span class="li-info">{{ formState.payTime ? formState.payTime : "--" }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-card">
            <div class="title">
                商品信息
                <DialogForm
                    v-if="!isParent"
                    :params="{ act: 'detail', id: formState.orderId }"
                    isDrawer
                    path="order/order/src/EditProduct"
                    title="编辑商品信息"
                    width="1050px"
                    :disabled="!formState.availableActions.modifyOrder || adminType == 'admin' && formState.vendorId"
                    @okCallback="updateDataWithList"
                >
                    <el-button :disabled="!formState.availableActions.modifyOrder || adminType == 'admin' && formState.vendorId" bg class="buttonColor" size="small" text type="primary"> 编辑 </el-button>
                </DialogForm>
            </div>
            <el-table :data="formState.items">
                <el-table-column label="商品名称" prop="productId" width="220">
                    <template #default="{ row }">
                        <div class="product-card-tp">
                            <div class="gift" v-if="row.isGift">赠</div>
                            <ProductCard
                                :picThumb="row.picThumb"
                                :productId="row.productId"
                                :productName="row.productName"
                                :productType="row.productType"
                                :url="row.url"
                            >
                            </ProductCard>
                        </div>
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
                <el-table-column label="商品编号" width="150">
                    <template #default="{ row }">
                        {{ row.productSn }}
                    </template>
                </el-table-column>
                <el-table-column label="价格" prop="price">
                    <template #default="{ row }">
                        {{ priceFormat(row.price) }}
                    </template>
                </el-table-column>
                <el-table-column label="数量" prop="quantity"></el-table-column>
                <el-table-column label="库存" prop="stock">
                    <template #default="{ row }">
                        {{ row.stock || "-" }}
                    </template>
                </el-table-column>
                <el-table-column label="小计" prop="subtotal">
                    <template #default="{ row }">
                        {{ priceFormat(row.subtotal) }}
                    </template>
                </el-table-column>
            </el-table>
            <div class="total">
                <span class="gray" style="margin-right: 16px">商品总重量：{{ formState.totalProductWeight }}kg</span>
                <span>合计：{{ priceFormat(Number(formState.productAmount) - Number(formState.couponAmount) - Number(formState.discountAmount)) }}</span>
            </div>
            <div class="title">
                订单金额
                <DialogForm
                    v-if="!isParent"
                    :params="{ act: 'detail', id: formState.orderId }"
                    isDrawer
                    path="order/order/src/EditMoney"
                    title="编辑金额"
                    width="600px"
                    :disabled="!formState.availableActions.modifyOrderMoney || adminType == 'admin' && formState.vendorId"
                    @okCallback="updateDataWithList"
                >
                    <el-button :disabled="!formState.availableActions.modifyOrderMoney || adminType == 'admin' && formState.vendorId" bg class="buttonColor" size="small" text type="primary">
                        编辑
                    </el-button>
                </DialogForm>
            </div>
            <OrderMoney v-model="formState"></OrderMoney>
        </div>
        <!-- <div class="container-card">
            <div class="title">其他信息
                <el-button bg class="ml10" size="small" text type="primary">
                    编辑
                </el-button>
            </div>
            <div class="info-card">
                <div class="card-title">
                    <div class="min-title">发票信息</div>
                    <ul>
                        <li class="card-li">发票类型：<span class="li-info"></span></li>
                        <li class="card-li">发票抬头：<span class="li-info"></span></li>
                        <li class="card-li">发票内容：<span class="li-info"></span></li>
                    </ul>
                </div>
                <div class="card-title">
                    <div class="min-title">备注信息</div>
                    <ul>
                        <li class="card-li">订单备注：<span class="li-info">{{ formState.buyerNote }}</span></li>
                        <li class="card-li">商家备注：<span class="li-info">{{ formState.adminNote }}</span></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <div class="container-card" v-if="formState.orderId && (formState.orderStatus === 2 || formState.orderStatus === 5)">
            <div class="title">物流追踪</div>
            <LogisticsTracking
                :trackingNo="formState.trackingNo"
                :logisticsName="formState.logisticsName"
                :shippingMethod="formState.shippingMethod"
                v-model:id="formState.orderId"
            ></LogisticsTracking>
        </div>
        <OperationLog v-if="!isParent" :orderId="formState.orderId"></OperationLog>
    </div>
    <a-spin :spinning="loading" style="width: 100%; margin-top: 100px" />
</template>
<script lang="ts" setup>
import { onMounted, ref, shallowRef, reactive } from "vue";
import { useRouter } from "vue-router";
import { message, Steps, Modal } from "ant-design-vue";
import { OrderFormState } from "@/types/order/order.d";
import { getOrder, updateOrder, getOrderLogList, setConfirmOrder, splitStoreOrder, operationOrder, getOrderPrint, getOrderPrintBill } from "@/api/order/order";
import { DialogForm } from "@/components/dialog";
import { OrderMoney } from "@/components/order";
import { imageFormat, priceFormat } from "@/utils/format";
import { Tooltip } from "@/components/form";
import { ProductCard, Pagination } from "@/components/list";
import { useConfigStore } from "@/store/config";
import OperationLog from "@/views/order/order/src/OperationLog.vue";
import LogisticsTracking from "@/views/order/order/src/LogisticsTracking.vue";
import MobileCard from "@/components/list/src/MobileCard.vue";
import EditSign from "@/views/order/order/src/EditSign.vue";
import SignTag from "@/views/order/order/src/SignTag.vue";
import { hasEnabledPrint, triggerPrint } from "@/api/setting/receiptPrint";
const config: any = useConfigStore();
const adminType = ref(localStorage.getItem("adminType"));
const emit = defineEmits(["submitCallback", "callback", "update:confirmLoading", "close"]);

const props = defineProps({
    id: {
        type: Number,
        default: 0
    },
    act: {
        type: String,
        default: ""
    },
    isParent: {
        type: Boolean,
        default: false
    },
    isDialog: Boolean
});
const loading = ref<boolean>(true);
const query = useRouter().currentRoute.value.query;
const action = ref<string>(props.isDialog ? props.act : String(query.act));
const id = ref<number>(props.isDialog ? props.id : Number(query.id));
const isParent = ref<boolean>(props.isDialog ? props.isParent : Boolean(query.isParent));
const operation = action.value === "add" ? "create" : "update";
const formRef = shallowRef();
const formState = ref<OrderFormState>({
    balance: 0,
    couponAmount: 0,
    pointsAmount: 0,
    productAmount: 0,
    totalProductWeight: 0,
    orderId: 0,
    items: [],
    payType: 0,
    availableActions: {},
    totalAmount: 0,
    paidAmount: 0,
    updateOrderSn: 0,
    unpaidAmount: 0,
    discountAmount: 0
});
const hasPrint = ref(false);

onMounted(() => {
    // 获取详情数据
    loading.value = true;
    fetchOrder();
    _hasEnabledPrint();
});
const fetchOrder = async () => {
    try {
        const result = await getOrder(action.value, { id: id.value });
        Object.assign(formState.value, result);
    } catch (error: any) {
        message.error(error.message);
        emit("close");
    } finally {
        loading.value = false;
    }
};

const setConfirm = async () => {
    try {
        const result = await setConfirmOrder({ id: id.value });
        fetchOrder();
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
const onSplitClick = () => {
    Modal.confirm({
        title: "确认拆分订单吗？",
        onOk: async () => {
            try {
                const result = await splitStoreOrder({ id: id.value });
                message.success("操作成功");
                updateDataWithList();
            } catch (error: any) {
                message.error(error.message);
            } finally {
                loading.value = false;
            }
        }
    });
};
const onDelClick = () => {
    Modal.confirm({
        title: "确认删除订单吗？",
        content: "被删除的订单可以通过筛选查找并恢复",
        onOk: async () => {
            try {
                const result = await operationOrder("delOrder", { id: id.value });
                message.success("操作成功");
                updateDataWithList();
            } catch (error: any) {
                message.error(error.message);
            } finally {
                loading.value = false;
            }
        }
    });
};
const onReceiptClick = () => {
    Modal.confirm({
        title: "确认订单已收货吗？",
        onOk: async () => {
            try {
                const result = await operationOrder("confirmReceipt", { id: id.value });
                message.success("操作成功");
                updateDataWithList();
            } catch (error: any) {
                message.error(error.message);
            } finally {
                loading.value = false;
            }
        }
    });
};
// 会同时更新列表数据
const updateDataWithList = (result: any = {}) => {
    fetchOrder();
    emit("callback", result);
};

// 表单通过验证后提交
const onSubmit = async () => {
    await formRef.value.validate();
    try {
        emit("update:confirmLoading", true);
        const result = await updateOrder(operation, { id: id.value, ...formState.value });
        emit("submitCallback", result);
        message.success("操作成功");
    } catch (error: any) {
        message.error(error.message);
    } finally {
        emit("update:confirmLoading", false);
    }
};
// 表单提交
const onFormSubmit = () => {
    onSubmit();
};
const router = useRouter();
const openPage = async (href: string, type: string) => {
    let base = location.origin + router.options.history.base + href;
    try {
        if (type === "order") {
            await getOrderPrint({ ids: formState.value.orderId });
        }
        if (type === "waybill") {
            await getOrderPrintBill({ id: formState.value.orderId });
        }
        window.open(base, "_blank");
    } catch (error: any) {
        message.error(error.message);
    }
};

const _hasEnabledPrint = async () => {
    try {
        let res = await hasEnabledPrint();
        hasPrint.value = true;
    } catch (error) {
        console.log(error);
    }
};


defineExpose({ onFormSubmit });
</script>
<style lang="less" scoped>
.container-card {
    border: 1px solid #ececec;
    /* 添加淡淡的边框 */
    box-shadow: 2px 2px 5px rgba(203, 193, 193, 0.2);
    border-radius: 2px;
    padding: 20px;
    background: #fff;
    margin-bottom: 20px;

    .border-bottom {
        border-bottom: 1px solid #ececec;
        padding-bottom: 16px;
        margin-bottom: 16px;
    }

    .button-card {
        margin-bottom: 12px;
        margin-top: 20px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        /* 允许换行 */
        gap: 8px;
    }

    .babyBlue {
        background-color: rgba(61, 127, 255, 0.06);
        border-radius: 6px;
    }

    .pd20 {
        padding: 20px;
    }

    .orange {
        color: #ed6a0c;
    }

    .title {
        font-size: 16px;
        line-height: 25px;
        color: #323233;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .info-card {
        display: flex;
        flex-direction: row;
        gap: 20px;
        white-space: nowrap;

        .card-title {
            flex: 1;
            display: flex;
            flex-direction: column;
            font-size: 14px;
            line-height: 30px;
            font-weight: 500;
            color: #646566;
        }

        .min-title {
            margin-bottom: 10px;
        }

        .card-li {
            font-weight: normal;
            display: flex;
            font-size: 12px;
            line-height: 28px;
            display: flex;
            align-items: flex-start;
        }

        .li-info {
            display: inline-block;
            color: black;
            font-size: 12px;
            white-space: pre-wrap;
            overflow-wrap: break-word;
        }
    }

    .total {
        margin: 24px 0;
        width: 100%;
        text-align: right;
    }
}
.product-card-tp {
    position: relative;
    .gift {
        z-index: 99;
        color: white;
        position: absolute;
        top: 0;
        left: -10px;
        background-color: #ff3838;
        border-radius: 4px;
        padding: 0 5px;
        font-size: 12px;
        box-sizing: border-box;
    }
}

.extraskudata {
    padding-bottom: 5px;
    &:last-child {
        padding-bottom: 0;
    }
}
</style>
