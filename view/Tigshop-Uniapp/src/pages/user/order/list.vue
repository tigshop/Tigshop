<template>
    <tig-layout title="我的订单">
        <view class="order">
            <view class="order-menu badgecolor">
                <up-tabs
                    v-model:current="currentIndex"
                    line-color="var(--general)"
                    :list="menuTypeList"
                    :active-style="{ padding: '0 10rpx' }"
                    :inactive-style="{ padding: '0 10rpx' }"
                    :scrollable="true"
                    key-name="value"
                    @change="changeMenu"
                />
            </view>
            <view class="placeholder" />
            <view class="order-list">
                <template v-for="item in orderList" :key="item.orderId">
                    <view class="order-list-item">
                        <view class="order-list-item-header">
                            <text v-if="item.shop" class="special-text">
                                <text class="iconfont icon-dianpu" />
                                {{ item.shop?.shopTitle }}
                                <text class="iconfont icon-xiangyou" />
                            </text>
                            <text v-else class="order-special-text"
                                >{{ $t("订单编号") }}：<text class="special-color">{{ item.orderSn }}</text>
                            </text>
                            <text>{{ item.orderStatusName }}</text>
                        </view>
                        <view class="order-list-item-content">
                            <view class="item-content-text">
                                <view> {{ $t("收件人") }}：{{ item.consignee }} </view>
                                <view class="special-color">{{ item.addTime }}</view>
                            </view>
                            <view class="item-content-product">
                                <template v-for="subItem in item.items" :key="subItem.itemId">
                                    <navigator :url="'/pages/user/order/info?id=' + subItem.orderId" hover-class="navigator-hover">
                                        <view class="item-content-product-item">
                                            <view class="item-content-product-img">
                                                <tig-image :src="subItem.picThumb" />
                                                <template v-if="subItem.isGift === 1">
                                                    <view class="gift-text">{{ $t("赠品") }}</view>
                                                </template>
                                            </view>
                                            <view class="item-content-product-info">
                                                <view class="product-item-title">
                                                    {{ subItem.productName }}
                                                </view>

                                                <view class="sku-card" :class="{ nodata: !subItem.skuData || subItem.skuData.length === 0 }">
                                                    <template v-if="subItem.skuData && subItem.skuData.length > 0">
                                                        <view v-for="(skuItem, skuIndex) in subItem.skuData" :key="skuIndex" class="sku-item line1">{{
                                                            skuItem.value
                                                        }}</view>
                                                    </template>
                                                </view>
                                                <template v-if="subItem.extraSkuData && subItem.extraSkuData.length">
                                                    <view class="extraskudata-box">
                                                        <view class="extraskudata">
                                                            <template v-for="attr in subItem.extraSkuData" :key="attr">
                                                                <view class="extraskudata-item">
                                                                    <view class="title">{{ attr.attrName }}</view>
                                                                    <view class="line-box">
                                                                        <view class="line" />
                                                                    </view>
                                                                    <view class="content">
                                                                        <text class="line1 content-text">{{ attr.attrValue }}</text>
                                                                        <format-price :show-text="false" class="price" :price-data="attr.attrPrice" />
                                                                        <view class="num">x{{ subItem.quantity }}</view>
                                                                    </view>
                                                                </view>
                                                            </template>
                                                        </view>
                                                    </view>
                                                </template>
                                                <view class="product-item-price">
                                                    <format-price
                                                        :show-text="false"
                                                        class="product-item-pricenum"
                                                        :decimals-style="{
                                                            fontSize: '25rpx'
                                                        }"
                                                        :currency-style="{
                                                            fontSize: '23rpx'
                                                        }"
                                                        :price-data="subItem.price"
                                                    />
                                                    <view class="product-item-quantity">x {{ subItem.quantity }}</view>
                                                </view>
                                            </view>
                                        </view>
                                        <!-- <template v-if="subItem.extraSkuData && subItem.extraSkuData.length">
                                            <view class="attr-list">
                                                <template v-for="attr in subItem.extraSkuData" :key="attr">
                                                    <view class="attr-item">
                                                        <view class="sub-title">{{ attr.attrName }}</view>
                                                        <view class="item-content">
                                                            <text class="line1 content-text">{{ attr.attrValue }}</text>
                                                            <view class="right">
                                                                <format-price class="price" :priceData="attr.attrPrice"></format-price>
                                                                <view class="num">x{{ subItem.quantity }}</view>
                                                            </view>
                                                        </view>
                                                    </view>
                                                </template>
                                            </view>
                                        </template> -->
                                    </navigator>
                                </template>
                            </view>

                            <view class="item-content-pay">
                                <view class="item-content-pay-box">
                                    <view class="pay-item pay-type">
                                        {{ item.payTypeId === 1 ? $t("在线支付") : item.payTypeId === 2 ? $t("货到付款") : t("线下支付") }}</view
                                    >
                                    <view class="pay-item total-money"
                                        >{{ $t("总额") }}：<format-price :show-text="false" :is-bottom="false" :price-data="item.totalAmount"
                                    /></view>
                                    <view v-if="item.orderStatus === 0 && Number(item.unpaidAmount) > 0" class="pay-item">
                                        {{ $t("应付") }}：<format-price :show-text="false" :is-bottom="false" :price-data="item.unpaidAmount" />
                                    </view>
                                </view>
                            </view>
                        </view>
                        <view class="order-list-item-btn">
                            <view class="autodeliverydays">
                                <template v-if="item.autoDeliveryDays">
                                    <view class="autodeliverydays-text line1">订单将在{{ item.autoDeliveryDays }}天后自动收货</view>
                                </template>
                            </view>
                            <view class="item-btn-box">
                                <tig-button
                                    class="btn-margin"
                                    :custom-style="{ height: '55rpx' }"
                                    :plain="true"
                                    :plain-main-color="true"
                                    @click="handleOrederDetail(item.orderId)"
                                >
                                    {{ $t("订单详情") }}
                                </tig-button>
                                <tig-button
                                    v-if="item.availableActions.toPay"
                                    class="btn-margin"
                                    color="#333"
                                    :custom-style="{ height: '55rpx' }"
                                    :plain="true"
                                    @click="handlePay(item.orderId)"
                                >
                                    {{ $t("去付款") }}
                                </tig-button>
                                <tig-button
                                    v-if="item.availableActions.cancelOrder"
                                    color="#333"
                                    class="btn-margin"
                                    :custom-style="{ height: '55rpx' }"
                                    :plain="true"
                                    @click="handleCancelOrder(item.orderId)"
                                >
                                    {{ $t("取消订单") }}
                                </tig-button>
                                <tig-button
                                    v-if="item.availableActions.delOrder"
                                    color="#333"
                                    class="btn-margin"
                                    :custom-style="{ height: '55rpx' }"
                                    :plain="true"
                                    @click="handleDelOrder(item.orderId)"
                                >
                                    {{ $t("删除订单") }}
                                </tig-button>
                                <tig-button
                                    v-if="item.availableActions.rebuy"
                                    color="#333"
                                    class="btn-margin"
                                    :custom-style="{ height: '55rpx' }"
                                    :plain="true"
                                    @click="handleBuyAgain(item.orderId)"
                                >
                                    {{ $t("再次购买") }}
                                </tig-button>
                                <tig-button
                                    v-if="item.availableActions.toComment"
                                    color="#333"
                                    class="btn-margin"
                                    :custom-style="{ height: '55rpx' }"
                                    :plain="true"
                                    @click="handleEvaluate(item.orderId)"
                                >
                                    {{ $t("去评价") }}
                                </tig-button>
                                <tig-button
                                    v-if="item.availableActions.confirmReceipt"
                                    color="#333"
                                    class="btn-margin"
                                    :custom-style="{ height: '55rpx' }"
                                    :plain="true"
                                    @click="handleConfirmReceipt(item.orderId)"
                                >
                                    {{ $t("确认收货") }}
                                </tig-button>
                            </view>
                        </view>
                    </view>
                </template>
            </view>
            <loading-box v-model="isLoadMore" :page="filterParams.page" :length="orderList.length" />
            <emptyBox v-if="!isLoading && total === 0" mode="list" background="#f5f5f5" :text="$t('暂无订单')" />
        </view>
        <tig-loadingpage v-model="isLoading" />
    </tig-layout>
</template>

<script setup lang="ts">
import emptyBox from "@/components/empty-box/empty-box.vue";
import { reactive, ref } from "vue";
import { getOrderList, cancelOrder, delOrder, orderBuyAgain, confirmReceipt } from "@/api/user/order";
import type { OrderListFilterParams, OrderListFilterResult } from "@/types/user/order";
import { onLoad } from "@dcloudio/uni-app";
import { redirect } from "@/utils";
import { useList } from "@/hooks";
import { useI18n } from "vue-i18n";

const { t } = useI18n();

interface MenuType {
    type: string;
    value: string;
    badge: AnyObject;
}
const menuTypeList = reactive<MenuType[]>([
    { type: "all", value: t("全部订单"), badge: { value: 0 } },
    { type: "awaitPay", value: t("待支付"), badge: { value: 0 } },
    { type: "awaitShipping", value: t("待发货"), badge: { value: 0 } },
    { type: "awaitReceived", value: t("待收货"), badge: { value: 0 } },
    { type: "awaitComment", value: t("待评价"), badge: { value: 0 } }
]);
const currentType = ref<string>("all");
const filterParams = reactive<OrderListFilterParams>({
    page: 1,
    size: 10,
    orderStatus: -1,
    commentStatus: -1
});

const currentIndex = ref(0);
const changeMenu = (data: any) => {
    if (currentType.value === data.type) return;
    currentType.value = data.type;
    filterParams.page = 1;
    orderList.value = [];
    if (data.type === "awaitComment") {
        filterParams.commentStatus = 0;
        filterParams.orderStatus = -1;
    } else {
        filterParams.orderStatus = formatOrderStatus(data.type);
        filterParams.commentStatus = -1;
    }
    getList();
};

const {
    getList,
    data: orderList,
    isLoadMore,
    isLoading,
    total
} = useList<OrderListFilterResult>(getOrderList, {
    params: filterParams,
    path: {
        dataKey: "records"
    }
});

const handleCancelOrder = async (id: number) => {
    uni.showModal({
        title: t("提示"),
        content: t("确认要取消该订单吗？"),
        success: async (res) => {
            if (res.confirm) {
                try {
                    await cancelOrder({ id });
                    filterParams.page = 1;
                    orderList.value = [];
                    getList();
                } catch (error: any) {
                    uni.showToast({
                        title: error.message,
                        icon: "none"
                    });
                }
            }
        }
    });
};

const handleDelOrder = async (id: number) => {
    uni.showModal({
        title: t("提示"),
        content: t("确认要删除该订单吗？"),
        success: async (res) => {
            if (res.confirm) {
                try {
                    await delOrder({ id });
                    filterParams.page = 1;
                    orderList.value = [];
                    getList();
                } catch (error: any) {
                    uni.showToast({
                        title: error.message,
                        icon: "none"
                    });
                }
            }
        }
    });
};

const handleBuyAgain = async (id: number) => {
    try {
        await orderBuyAgain({ id });
        redirect({ url: "/pages/cart/index" });
    } catch (error: any) {
        uni.showToast({
            title: error.message,
            icon: "none"
        });
    }
};

const handlePay = (id: number) => {
    uni.navigateTo({
        url: `/pages/order/pay?orderId=${id}`
    });
};

const handleOrederDetail = (id: number) => {
    uni.navigateTo({
        url: `/pages/user/order/info?id=${id}`
    });
};
const handleEvaluate = (id: number) => {
    uni.navigateTo({
        url: `/pages/user/comment/info?id=${id}`
    });
};
const handleConfirmReceipt = (id: number) => {
    uni.showModal({
        title: t("提示"),
        content: t("确认收货吗？"),
        success: async (res) => {
            if (res.confirm) {
                try {
                    await confirmReceipt({ id });
                    uni.redirectTo({
                        url: "/pages/user/order/list?type=awaitComment"
                    });
                } catch (error: any) {
                    uni.showToast({
                        title: error.message,
                        icon: "none"
                    });
                }
            }
        }
    });
};

const formatOrderStatus = (status: string) => {
    switch (status) {
        case "all":
            return -1;
        case "awaitPay":
            return 0;
        case "awaitShipping":
            return 1;
        case "awaitReceived":
            return 2;
        default:
            return -1;
    }
};

onLoad((options) => {
    if (options && options.type) {
        currentIndex.value = menuTypeList.findIndex((item) => item.type === options.type);

        if (options.type === "awaitComment") {
            filterParams.commentStatus = 0;
        } else {
            filterParams.orderStatus = formatOrderStatus(options.type);
        }
        currentType.value = options.type;
    }
    getList();
});
</script>

<style lang="scss" scoped>
.extraskudata-box {
    display: flex;
    .extraskudata {
        background-color: #f7f8fa;
        padding: 10rpx 15rpx;
        border-radius: 10rpx;
        margin-top: 5rpx;
        color: #969799;
        display: flex;
        flex-direction: column;
        .extraskudata-item {
            overflow: hidden;
            font-size: 22rpx;
            display: flex;
            line-height: 40rpx;
            .content {
                flex: 1;
                display: flex;
                align-items: center;
                overflow: hidden;
                .price {
                    color: #555;
                    padding-left: 10rpx;
                }
                .content-text {
                    flex: 1;
                }
                .num {
                    padding-left: 10rpx;
                }
            }

            .line-box {
                width: 25rpx;
                position: relative;
                .line {
                    width: 1rpx;
                    height: 15rpx;
                    background-color: #c0c0c0;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
            }
        }
    }
}

.attr-list {
    padding-bottom: 10rpx;
    .attr-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 45rpx;
        line-height: 45rpx;
        .sub-title {
            padding-right: 30rpx;
        }
        .item-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            overflow: hidden;

            .content-text {
                flex: 1;
                text-align: end;
            }
            .right {
                display: flex;
                padding-left: 10rpx;
                color: #242424;
                .num {
                    padding-left: 10rpx;
                }
            }
        }
    }
}

.placeholder {
    height: 88rpx;
}

.badgecolor {
    :deep(.u-badge--error) {
        background-color: var(--general);
    }
}

.order-menu {
    background-color: #fff;
    margin-bottom: 30rpx;
    position: fixed;
    width: 100%;
    z-index: 88;

    .order-menu-item {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 88rpx;
        position: relative;

        .order-menu-item-text {
            padding: 0 10rpx 0 0;
        }
        &.active {
            color: #333;
            font-weight: bold;

            &:after {
                content: "";
                position: absolute;
                bottom: 0;
                height: 5rpx;
                width: 60rpx;
                background-color: var(--general);
                border-radius: 10rpx;
            }
        }
    }
}

.order-list {
    padding: 10rpx 20rpx;

    .order-list-item {
        background-color: #fff;
        border-radius: 10rpx;
        margin-bottom: 20rpx;
        padding: 20rpx;
        font-size: 24rpx;

        &:last-child {
            margin-bottom: 0;
        }

        .order-list-item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20rpx;
            .special-text {
                font-size: 26rpx;
                font-weight: bold;
            }
            .order-special-text {
                font-size: 26rpx;
            }
            .special-color {
                color: #999;
                font-weight: normal;
            }
        }

        .order-list-item-content {
            .item-content-text {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-bottom: 10rpx;

                .special-color {
                    color: #999;
                }
            }

            .item-content-product-item {
                padding-bottom: 15rpx;
                display: flex;
                &:first-child {
                    padding-top: 15rpx;
                }

                .item-content-product-img {
                    width: 140rpx;
                    height: 140rpx;
                    // border-radius: 10rpx;
                    overflow: hidden;
                    position: relative;

                    .gift-text {
                        position: absolute;
                        top: 0;
                        left: 0;
                        font-size: 23rpx;
                        padding: 3rpx 8rpx;
                        background-color: var(--main-bg);
                        color: var(--main-text);
                        border-radius: 0 var(--tag-round-border-radius, 999px) var(--tag-round-border-radius, 999px) 0;
                    }
                }
                .item-content-product-info {
                    flex: 1;
                    padding-left: 25rpx;
                    overflow: hidden;

                    .product-item-title {
                        font-weight: bold;
                        overflow: hidden;
                        white-space: nowrap;
                        text-overflow: ellipsis;
                        padding-bottom: 10rpx;
                    }

                    .product-item-price {
                        display: flex;
                        padding-top: 5rpx;
                        .product-item-pricenum {
                            font-size: 30rpx;
                        }

                        .product-item-quantity {
                            font-size: 28rpx;
                            color: #999;
                            padding-left: 15rpx;
                        }
                    }
                }
            }

            .item-content-pay {
                display: flex;
                justify-content: flex-end;

                .item-content-pay-box {
                    display: flex;
                    .pay-item {
                        padding: 0 10rpx;

                        &.pay-type {
                            color: #999;
                        }

                        &.total-money {
                            .price-content {
                                color: var(--general);
                            }
                        }
                    }
                }
            }
        }

        .order-list-item-btn {
            display: flex;
            justify-content: flex-end;
            padding-top: 25rpx;

            .autodeliverydays {
                flex: 1;
                display: flex;
                align-items: center;
                overflow: hidden;

                .autodeliverydays-text {
                    width: 100%;
                    color: var(--main-bg);
                }
            }

            .item-btn-box {
                display: flex;

                .btn-margin {
                    margin-right: 10rpx;

                    &:last-child {
                        margin-right: 0;
                    }
                }
            }
        }
    }
}
</style>
