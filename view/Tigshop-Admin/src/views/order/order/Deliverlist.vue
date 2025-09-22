<template>
    <div class="container">
        <div class="content_wrapper">
            <div class="lyecs-table-list-warp">
                <div class="list-table-tool lyecs-search-warp">
                    <div class="advanced-search-warp list-table-tool-row">
                        <div class="simple-form-warp">
                            <div class="simple-form-field">
                                <div class="form-group">
                                    <label class="control-label"><span>订单信息：</span></label>
                                    <div class="control-container">
                                        <TigInput
                                            v-model="filterParams.keyword"
                                            name="keyword"
                                            placeholder="订单号/收货人姓名"
                                            @keyup.enter="onSearchSubmit"
                                            clearable
                                            @clear="onSearchSubmit"
                                        >
                                            <template #append>
                                                <el-button @click="onSearchSubmit"><span class="iconfont icon-chakan1"></span></el-button>
                                            </template>
                                        </TigInput>
                                    </div>
                                </div>
                            </div>
                            <div class="simple-form-field">
                                <div class="form-group">
                                    <label class="control-label"><span> 详细地址：</span></label>
                                    <div class="control-container">
                                        <TigInput v-model="filterParams.address" @keyup.enter="onSearchSubmit" clearable @clear="onSearchSubmit" />
                                    </div>
                                </div>
                            </div>
                            <div class="simple-form-field">
                                <div class="form-group">
                                    <label class="control-label"><span>Email：</span></label>
                                    <div class="control-container">
                                        <TigInput v-model="filterParams.email" @keyup.enter="onSearchSubmit" clearable @clear="onSearchSubmit" />
                                    </div>
                                </div>
                            </div>

                            <div class="simple-form-field">
                                <div class="form-group">
                                    <label class="control-label"><span>手机号：</span></label>
                                    <div class="control-container">
                                        <TigInput v-model="filterParams.mobile" @keyup.enter="onSearchSubmit" clearable @clear="onSearchSubmit" />
                                    </div>
                                </div>
                            </div>
                            <div class="simple-form-field" v-if="adminType !== 'vendor'">
                                <div class="form-group">
                                    <label class="control-label"><span>订单标记：</span></label>
                                    <div class="control-container">
                                        <el-select v-model="filterParams.mark" clearable @change="onSearchSubmit">
                                            <template #label>
                                                <template v-if="filterParams.mark !== -1">
                                                    <SignTag :value="filterParams.mark!" />
                                                </template>
                                                <template v-else> 全部标记 </template>
                                            </template>
                                            <template v-for="sign in signList" :key="sign.value">
                                                <template v-if="sign.value !== -1">
                                                    <el-option :value="sign.value">
                                                        <SignTag :value="sign.value" />
                                                    </el-option>
                                                </template>
                                                <template v-else>
                                                    <el-option label="全部标记" :value="-1"></el-option>
                                                </template>
                                            </template>
                                        </el-select>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="simple-form-field">
                                <div class="form-group">
                                    <label class="control-label"><span>配送物流：</span></label>
                                    <div class="control-container">
                                        <SelectLogisticsCompany v-model:id="filterParams.logisticsId" @onChange="onSearchSubmit"></SelectLogisticsCompany>
                                    </div>
                                </div>
                            </div> -->
                            <div class="simple-form-field">
                                <div class="form-group">
                                    <label class="control-label"><span>下单时间：</span></label>
                                    <SelectTimeInterval
                                        v-model:end-date="filterParams.addEndTime"
                                        v-model:start-date="filterParams.addStartTime"
                                        :clearable="false"
                                        type="date"
                                        value-format="YYYY-MM-DD"
                                    ></SelectTimeInterval>
                                </div>
                            </div>
                            <div class="simple-form-warp">
                                <div class="simple-form-field">
                                    <label class="control-label"></label>
                                    <div class="control-container">
                                        <el-button type="primary" plain @click="onSearchSubmit">搜索</el-button>
                                        <el-button plain @click="resetParams">重置</el-button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-table-tool-row">
                    <div class="tabs-box">
                        <el-tabs v-model="filterParams.orderStatus" tab-position="top" @tab-change="onTabChange">
                            <el-tab-pane :name="1" label="待发货"></el-tab-pane>
                            <el-tab-pane :name="2" label="已发货"></el-tab-pane>
                            <el-tab-pane :name="5" label="已完成"></el-tab-pane>
                        </el-tabs>
                    </div>

                    <div class="list-table-tool-col">
                        <el-space>
                            <template v-if="adminType !== 'vendor'">
                                <EditSign v-if="selectedIds.length > 0" title="添加标记" :ids="selectedIds" @callBack="loadFilter">
                                    <el-button> 批量标记 </el-button>
                                </EditSign>
                                <el-button v-else :disabled="true"> 批量标记 </el-button>
                            </template>
                            <DialogForm
                                v-if="selectedIds.length > 0 && filterParams.orderStatus === 1"
                                :params="{ act: 'severalDetail', ids: selectedIds }"
                                title="订单批量发货"
                                isDrawer
                                path="order/order/src/BatchShip"
                                width="880px"
                                @okCallback="loadFilter"
                            >
                                <el-button> 批量发货 </el-button>
                            </DialogForm>
                            <el-button v-else-if="filterParams.orderStatus === 1" :disabled="true"> 批量发货 </el-button>
                            <el-button v-if="selectedIds.length > 0" @click="openPage(`/print/orderPrint?ids=${selectedIds}`)"> 批量打印 </el-button>
                            <el-button v-else :disabled="true"> 批量打印 </el-button>
                            <span v-if="selectedIds.length > 0">
                                已选择：<b>{{ selectedIds.length }}</b> 项
                            </span>
                        </el-space>
                    </div>
                </div>
                <div class="table-container">
                    <a-spin :spinning="loading">
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th>
                                        <el-checkbox
                                            v-model="selectAll"
                                            :indeterminate="isIndeterminate"
                                            class="check-box mr10"
                                            @change="onSelectChangeAll"
                                        ></el-checkbox>
                                        <SortButton
                                            v-model:sortField="filterParams.sortField"
                                            v-model:sortOrder="filterParams.sortOrder"
                                            sortName="orderId"
                                            text="订单信息(下单时间排序)"
                                            @loadData="onSearchSubmit()"
                                        ></SortButton>
                                    </th>
                                    <th>
                                        <SortButton
                                            v-model:sortField="filterParams.sortField"
                                            v-model:sortOrder="filterParams.sortOrder"
                                            sortName="totalAmount"
                                            text="订单金额"
                                            @loadData="onSearchSubmit()"
                                        ></SortButton>
                                    </th>
                                    <th class="textL">会员名称</th>
                                    <th class="textL">收货人信息</th>
                                    <th class="textL">物流/支付信息</th>
                                    <th class="textL">订单状态</th>
                                    <th class="textR">操作</th>
                                </tr>
                            </thead>
                        </table>
                        <table v-for="item in filterState" class="custom-table">
                            <thead>
                                <tr class="data-tr">
                                    <th colspan="6">
                                        <el-checkbox v-model="item.checkBox" class="check-box mr10" @change="onSelectChange(item)"></el-checkbox>
                                        <template v-if="item.mark && adminType !== 'vendor'">
                                            <el-tooltip :disabled="!item.adminNote" :content="item.adminNote" effect="light" placement="top">
                                                <SignTag class="check-box tag" :value="item.mark"></SignTag>
                                            </el-tooltip>
                                        </template>

                                        <span class="check-box">订单编号：{{ item.orderSn }}</span>
                                        <el-divider direction="vertical" />
                                        <span class="check-box">下单时间：{{ item.addTime }}</span>
                                        <DialogForm
                                            v-if="item.parentOrderId > 0"
                                            :params="{ act: 'parentDetail', id: item.orderId, isParent: true }"
                                            :showClose="false"
                                            :showOnOk="false"
                                            :title="'订单详情 ' + item.orderSn"
                                            isDrawer
                                            :style="{ display: 'inline-block' }"
                                            path="order/order/Info"
                                            width="880px"
                                            @callback="loadFilter"
                                        >
                                            <el-tooltip
                                                v-if="item.parentOrderId > 0"
                                                :content="'该订单已拆分，点击可查看父订单' + ''"
                                                effect="light"
                                                placement="top"
                                            >
                                                <Tag text="子订单"></Tag>
                                            </el-tooltip>
                                        </DialogForm>

                                        <el-tooltip v-if="item.shopId > 0" :content="'订单来自店铺：' + item.shop.shopTitle" effect="light" placement="top">
                                            <Tag :transparent="false" text="店铺"></Tag>
                                        </el-tooltip>
                                        <el-tooltip v-if="item.orderSource" :content="'订单来自' + item.orderSource + '下单'" effect="light" placement="top">
                                            <Tag :text="item.orderSource" :transparent="true" style="text-transform: uppercase"></Tag>
                                        </el-tooltip>
                                        <!--<el-tag class="ml10" disable-transitions effect="plain" size="small">-->
                                        <!--团购订单-->
                                        <!--</el-tag>-->
                                        <Tag v-if="item.isExchangeOrder" :transparent="true" color="red" text="积分兑换"></Tag>
                                    </th>
                                    <th class="textR">
                                        <div style="gap: 8px; display: flex; justify-content: right">
                                            <DialogForm
                                                :params="{ act: 'detail', id: item.orderId }"
                                                :showClose="false"
                                                :showOnOk="false"
                                                :title="'订单详情 ' + item.orderSn"
                                                isDrawer
                                                path="order/order/Info"
                                                width="880px"
                                                @callback="loadFilter"
                                            >
                                                <el-button bg class="buttonColor mr10" size="small" text type="primary"> 查看详情</el-button>
                                            </DialogForm>

                                            <!-- <DialogForm
                                                :params="{ act: 'detail', id: item.orderId, valueName: 'adminNote' }"
                                                isDrawer
                                                path="order/order/src/EditRemark"
                                                title="编辑备注"
                                                width="600px"
                                                @okCallback="loadFilter"
                                            >
                                                <el-button bg class="buttonColor" size="small" text type="primary"> 备注 </el-button>
                                            </DialogForm> -->

                                            <EditSign title="添加标记" :item="item" @callBack="loadFilter">
                                                <el-button bg class="buttonColor" size="small" text type="primary"> 标记 </el-button></EditSign
                                            >
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(product, index) in item.items">
                                    <td>
                                        <div class="displayRow flex flex-align-center flex-justify-between">
                                            <ProductCard
                                                :picThumb="product.picThumb"
                                                :productId="product.productId"
                                                :productName="product.productName"
                                                :productType="product.productType"
                                                :url="product.url"
                                            ></ProductCard>
                                            <div class="displayColumn textR whiteSN widthAuto">
                                                <div>{{ priceFormat(product.price) }}</div>
                                                <div>× {{ product.quantity }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td v-if="index == 0" :rowspan="item.items.length">
                                        <div class="displayColumn textR fz14">
                                            <div>{{ priceFormat(item.totalAmount) }}</div>
                                            <div class="gray fz12">(含运费：{{ item.shippingFee }})</div>

                                            <div>
                                                <DialogForm
                                                    v-if="item.status === 6 || item.status === 7"
                                                    :params="{ act: 'detail', id: item.aftersaleId }"
                                                    isDrawer
                                                    path="order/aftersales/Info"
                                                    :title="'售后详情 ' + item.aftersalesSn"
                                                    width="800px"
                                                    @okCallback="loadFilter"
                                                    :showClose="false"
                                                    :showOnOk="false"
                                                >
                                                    <el-button bg class="buttonColor" size="small" text type="primary"> 售后详情 </el-button>
                                                </DialogForm>
                                                <!-- <el-button size="small" text type="primary"> 售后详情 </el-button> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td v-if="index == 0" :rowspan="item.items.length">
                                        <div class="displayColumn fz12 textL">
                                            <div>
                                                <DialogForm
                                                    :params="{ act: 'detail', id: item.userId }"
                                                    isDrawer
                                                    path="user/user/Detail"
                                                    title="用户信息"
                                                    width="800px"
                                                    @okCallback="loadFilter"
                                                    :showOnOk="false"
                                                >
                                                    <a>{{ item.user?.nickname || item.user?.username || "--" }}</a>
                                                </DialogForm>
                                            </div>
                                        </div>
                                    </td>
                                    <td v-if="index == 0" :rowspan="item.items.length">
                                        <div class="displayColumn fz12 textL">
                                            <div class="gray">
                                                收货人：
                                                <span class="black">
                                                    {{ maskString(item.consignee!, 1, 1) }}
                                                </span>
                                            </div>
                                            <div class="gray">
                                                手机号：
                                                <span class="black">
                                                    <span><MobileCard :mobile="item.mobile"></MobileCard></span>
                                                </span>
                                            </div>
                                            <div class="gray user-address">
                                                <span class="label"> 收货地址： </span>
                                                <span class="black line1 value">
                                                    {{ maskString(item.userAddress, 16, 0) }}
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td v-if="index == 0" :rowspan="item.items.length">
                                        <div class="displayColumn fz12 textL">
                                            <div>
                                                <span>{{ item.payTypeId === 1 ? "在线支付" : item.payTypeId === 2 ? "货到付款" : "线下支付" }}</span>
                                            </div>
                                            <div v-if="item.logisticsName">
                                                {{ item.shippingTypeName }}
                                                <span class="gray">{{ "" + item.logisticsName + "" }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td v-if="index == 0" :rowspan="item.items.length">
                                        <span
                                            :class="{
                                                orange: item.orderStatus === 0,
                                                black: item.orderStatus === 1 || item.orderStatus === 2 || item.orderStatus === 4,
                                                gray: item.orderStatus === 3,
                                                green: item.orderStatus === 5
                                            }"
                                        >
                                            {{ item.orderStatusName }}
                                        </span>
                                    </td>
                                    <td v-if="index == 0" :rowspan="item.items.length">
                                        <div class="buttonStyle">
                                            <DialogForm
                                                v-if="item.availableActions.cancelOrder"
                                                :params="{ act: 'cancelOrder', id: item.orderId }"
                                                isDrawer
                                                path="order/order/src/Operation"
                                                title="取消订单"
                                                width="600px"
                                                @okCallback="loadFilter"
                                            >
                                                <el-button bg class="buttonColor" size="small" text type="primary"> 取消订单 </el-button>
                                            </DialogForm>
                                            <el-button
                                                v-if="item.availableActions.delOrder"
                                                bg
                                                size="small"
                                                text
                                                type="primary"
                                                @click="onDelClick(item.orderId)"
                                            >
                                                删除订单
                                            </el-button>

                                            <DialogForm
                                                :params="{ act: 'detail', id: item.orderId }"
                                                :title="'订单发货 ' + item.orderSn"
                                                isDrawer
                                                path="order/order/src/ToShip"
                                                width="900px"
                                                @okCallback="loadFilter"
                                                v-if="item.availableActions.deliver"
                                            >
                                                <el-button bg size="small" text type="danger"> 去发货 </el-button>
                                            </DialogForm>
                                            <el-button
                                                v-if="item.availableActions.confirmReceipt"
                                                bg
                                                size="small"
                                                text
                                                type="danger"
                                                @click="onReceiptClick(item.orderId)"
                                            >
                                                确认收货
                                            </el-button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- <tr v-if="item.adminNote">
                                    <td colspan="6">
                                        <span class="orange">商家备注：</span>{{ item.adminNote }}
                                        <DialogForm
                                            :params="{ act: 'detail', id: item.orderId, valueName: 'adminNote' }"
                                            isDrawer
                                            path="order/order/src/EditRemark"
                                            title="编辑备注"
                                            width="600px"
                                            @okCallback="loadFilter"
                                        >
                                            <el-button bg class="buttonColor" size="small" text type="primary"> 修改 </el-button>
                                        </DialogForm>
                                    </td>
                                </tr> -->
                                <!-- 可以添加更多的行 -->
                            </tbody>
                        </table>
                        <div v-if="total == 0" class="empty-warp">
                            <div v-if="!loading" class="empty-bg">暂无数据</div>
                        </div>
                    </a-spin>
                </div>
                <div v-if="total > 0" class="pagination-con">
                    <Pagination v-model:page="filterParams.page" v-model:size="filterParams.size" :total="total" @callback="loadFilter" />
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>
import "@/style/css/list.less";
import { computed, onMounted, reactive, ref } from "vue";
import { Pagination, ProductCard } from "@/components/list";
import { message, Modal } from "ant-design-vue";
import { useConfigStore } from "@/store/config";
import { OrderFilterParams, OrderFilterState } from "@/types/order/order.d";
import { getOrderList, operationOrder } from "@/api/order/order";
import { SelectShop } from "@/components/select";
import { DialogForm } from "@/components/dialog";
import SortButton from "../../../components/list/src/SortButton.vue";
import { priceFormat } from "@/utils/format";
import { useRoute, useRouter } from "vue-router";
import { Tag } from "@/components/form";
import { SelectTimeInterval } from "@/components/select";
import { maskString } from "@/utils/util";
import MobileCard from "@/components/list/src/MobileCard.vue";
import EditSign from "@/views/order/order/src/EditSign.vue";
import SignTag from "@/views/order/order/src/SignTag.vue";

const adminType = ref(localStorage.getItem("adminType"));
const config: any = useConfigStore();
// 基本参数定义
const orderStatusList = reactive([
    { value: -1, label: "全部", isShow: true },
    { value: 0, label: "待支付", isShow: true },
    { value: 1, label: "待发货", isShow: true },
    { value: 2, label: "已发货", isShow: true },
    { value: 3, label: "已取消", isShow: true },
    { value: 4, label: "无效", isShow: true },
    { value: 5, label: "已完成", isShow: true },
    { value: -2, label: "已删除", isShow: true }
]);

const shippingStatusList = reactive([
    { value: 0, label: "待发货" },
    { value: 1, label: "已发货" },
    { value: 2, label: "已收货" },
    { value: 3, label: "配送中" },
    { value: 4, label: "配送失败" }
]);

const payStatusList = reactive([
    { value: 0, label: "未付款" },
    { value: 1, label: "支付中" },
    { value: 2, label: "已付款" },
    { value: 3, label: "退款中" },
    { value: 4, label: "已退款" }
]);

const signList = [
    {
        value: -1
    },
    {
        value: 1
    },
    {
        value: 2
    },
    {
        value: 3
    },
    {
        value: 4
    },
    {
        value: 5
    }
];

const onTabChange = (value: number) => {
    filterParams.orderStatus = value;
    filterParams.page = 1;
    selectedIds.value = [];
    loadFilter();
};
const filterState = ref<OrderFilterState[]>([]);
const loading = ref<boolean>(true);
const total = ref<number>(0);
const selectedIds = ref<number[]>([]);
const selectAll = ref<boolean>(false);
const filterParams = reactive<OrderFilterParams>({
    page: 1,
    size: config.get("pageSize"),
    sortField: "orderId",
    sortOrder: "desc",
    keyword: "",
    orderStatus: 1,
    mark: -1,
    address: "",
    email: "",
    mobile: "",
    addTime: [],
    addEndTime: "",
    addStartTime: ""
});
const resetParams = () => {
    filterParams.page = 1;
    filterParams.size = config.get("pageSize");
    filterParams.sortField = "orderId";
    filterParams.sortOrder = "desc";
    filterParams.keyword = "";
    filterParams.orderStatus = -1;
    filterParams.mark = -1;
    filterParams.address = "";
    filterParams.email = "";
    filterParams.mobile = "";
    filterParams.addTime = [];
    filterParams.addEndTime = "";
    filterParams.addStartTime = "";
    filterParams.shippingStatus = "";
    filterParams.payStatus = "";
};
// 获取列表的查询结果
const loadFilter = async () => {
    loading.value = true;
    selectedIds.value = [];
    try {
        const result = await getOrderList({ ...filterParams });
        if (result.records !== null) {
            const newArr = result.records.map((item) => ({
                ...item, // 保留原始数据项的属性
                checkBox: false // 添加 check 属性并设置为 false
            }));
            filterState.value = newArr;
        } else {
            filterState.value = [];
        }
        total.value = result.total;
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
const props = defineProps({ id: { type: Number, default: 0 }, act: { type: String, default: "" }, isDialog: Boolean });
const route = useRoute();
const query = useRouter().currentRoute.value.query;
const action = ref<string>(props.isDialog ? props.act : String(query.act));
const id = ref<number>(props.isDialog ? props.id : Number(query.id));
onMounted(() => {
    if (route.path.includes("exchange")) {
        filterParams.isExchangeOrder = 1;
    }
    if (action.value && action.value !== "undefined") {
        filterParams.userId = id.value;
    }
    if (query && query.status) {
        filterParams.orderStatus = Number(query.status);
    }
    loadFilter();
});

// 参数查询
const onSearchSubmit = () => {
    loadFilter();
};
const router = useRouter();
const openPage = (href: string) => {
    let base = location.origin + router.options.history.base + href;
    window.open(base, "_blank");
};
const onDelClick = (id: any) => {
    Modal.confirm({
        title: "确认删除订单吗？",
        content: "被删除的订单可以通过筛选查找并恢复",
        onOk: async () => {
            try {
                const result = await operationOrder("delOrder", { id: id });
                message.success("操作成功");
                loadFilter();
            } catch (error: any) {
                message.error(error.message);
            } finally {
                loading.value = false;
            }
        }
    });
};
const onReceiptClick = (id: any) => {
    Modal.confirm({
        title: "确认订单已收货吗？",
        onOk: async () => {
            try {
                const result = await operationOrder("confirmReceipt", { id: id });
                message.success("操作成功");
                loadFilter();
            } catch (error: any) {
                message.error(error.message);
            } finally {
                loading.value = false;
            }
        }
    });
};

// 多选操作
const isIndeterminate = computed(() => {
    selectAll.value = selectedIds.value.length > 0 && selectedIds.value?.length === filterState.value?.length;
    return selectedIds.value.length > 0 && selectedIds.value.length < filterState.value.length;
});
const onSelectChangeAll = (val: boolean) => {
    if (val) {
        selectedIds.value.length = 0;
        filterState.value?.forEach((item: any) => {
            item.checkBox = true;
            selectedIds.value.push(item.orderId);
        });
    } else {
        filterState.value?.forEach((item) => {
            item.checkBox = false;
            selectedIds.value.length = 0;
        });
    }
};
const onSelectChange = (e: any) => {
    if (e.checkBox) {
        if (selectedIds.value.indexOf(e.orderId) === -1) {
            selectedIds.value.push(e.orderId);
        }
    } else {
        let index = selectedIds.value.indexOf(e.orderId);
        if (index !== -1) {
            selectedIds.value.splice(index, 1);
        }
    }
};
</script>
<style lang="less" scoped>
.table-container {
    .custom-table {
        width: 100%;
        margin-bottom: 20px;
        background-color: #f5f6fa;
        border: 1px solid #f0f0f0;
        border-collapse: collapse;
        height: 60px;

        thead,
        tbody {
            tr {
                height: 45px;
                border-top: 1px solid #f0f0f0; // 垂直分割线
                border-right: 1px solid #f0f0f0; // 垂直分割线
            }

            th,
            td {
                padding: 15px 12px;
                vertical-align: middle;
                border-bottom: 1px solid #f0f0f0; // 水平分割线

                &:first-child {
                    width: 25%; // 多选按钮的宽度
                    min-width: 230px;
                    border-left: 1px solid #f0f0f0; // 左侧分割线
                    text-align: start;
                }

                &:nth-child(2) {
                    //min-width: 90px; // “”列宽度
                    width: 10%; // 多选按钮的宽度
                }

                &:nth-child(3) {
                    //min-width: 230px; // “”列宽度
                    width: 10%; // 多选按钮的宽度
                }

                &:nth-child(4) {
                    //min-width: 230px; // “”列宽度
                    width: 25%; // 多选按钮的宽度
                }

                &:nth-child(5) {
                    //min-width: 140px; // “”列宽度
                    width: 10%; // 多选按钮的宽度
                }

                &:nth-child(6) {
                    //min-width: 110px; // “”列宽度
                    width: 10%; // 多选按钮的宽度
                }

                &:nth-child(7) {
                    //min-width: 140px; // “”列宽度
                    width: 10%; // 多选按钮的宽度
                }
            }

            .data-tr {
                height: 45px;

                th {
                    font-weight: normal;
                    text-align: start;
                }
            }

            td {
                background-color: white;
                border-right: 1px solid #f0f0f0; // 垂直分割线
            }
        }

        .check-box {
            vertical-align: middle;

            &.tag {
                font-size: 14px;
                margin-right: 4px;
            }
        }

        .mr10 {
            margin-right: 10px;
        }

        .ml10 {
            margin-left: 10px;
        }

        .ml5 {
            margin-left: 5px;
        }

        .textR {
            text-align: right;
        }

        .textL {
            text-align: left;
        }

        .buttonColor {
            background-color: rgba(32, 96, 224, 0.03);
        }

        .displayRow {
            display: flex;
            flex-direction: row;
            gap: 8px;
        }

        .displayColumn {
            display: flex;
            flex-direction: column;
        }

        .user-address {
            width: 100%;
            display: flex;

            .value {
                flex: 1;
            }
        }

        .orderImage {
            min-width: 50px;
            min-height: 50px;
            max-width: 50px;
            max-height: 50px;
            border: 1px solid #eee;
        }

        .productName {
            line-height: 1;
            word-wrap: break-word;
            font-size: 12px;
            color: #333333;
        }

        .whiteSN {
            white-space: nowrap;
        }

        .widthAuto {
            width: auto;
        }

        .buttonStyle {
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: nowrap;
            /* 不允许换行 */
            gap: 8px;
        }
    }

    .fz12 {
        font-size: 12px;
    }

    .fz14 {
        font-size: 14px;
    }

    .black {
        color: #333333;
    }

    .orange {
        color: #ed6a0c;
    }

    .gray {
        color: #999999;
    }
}

.tabs-box {
    padding-bottom: 2px;
}

.table-container {
    overflow-x: auto;
    > * {
        min-width: 1000px;
    }
    .table-container-con {
        min-width: 800px;
    }
}

@media only screen and (max-width: 767px) {
    .tabs {
        flex-wrap: wrap;
        gap: 10px !important;
        .item {
            margin: 0 !important;
        }
    }
    .table-container {
        overflow-x: auto;
        > * {
            width: 1000px;
        }
        .table-container-con {
            min-width: 800px;
        }
    }
}
@media only screen and (max-width: 1400px) {
    .list-table-tool-col {
        :deep(.el-space) {
            flex-wrap: wrap;
        }
    }
    .table-container {
        overflow-x: auto;
        > * {
            width: 1000px;
        }
        .table-container-con {
            min-width: 800px;
        }
    }
}
</style>
