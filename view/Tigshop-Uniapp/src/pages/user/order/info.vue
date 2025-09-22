<template>
    <tig-layout title="我的订单">
        <view class="order-info">
            <template v-if="Object.keys(orderInfo).length">
                <view class="order-info-steps">
                    <uni-steps active-color="var(--general)" :options="orderInfo.stepStatus.steps" :active="orderInfo.stepStatus.current" />
                </view>

                <view class="order-info-content">
                    <view class="order-card card-space">
                        <view class="order-card-item flex justify-between">
                            <view class="item-left">
                                <text class="order-item-label">{{ $t("订单编号") }}：</text>
                                <text>{{ orderInfo.orderSn }}</text>
                            </view>
                            <view class="item-right">
                                <text class="order-item-label">{{ $t("订单状态") }}：</text>
                                <text>{{ orderInfo.orderStatusName }}</text>
                            </view>
                        </view>
                        <view class="order-card-item">
                            <text class="order-item-label">{{ $t("下单时间") }}：</text>
                            <text>{{ orderInfo.addTime }}</text>
                        </view>
                        <template v-if="orderInfo.autoDeliveryDays">
                            <view class="order-card-item">订单将在{{ orderInfo.autoDeliveryDays }}天后自动收货</view>
                        </template>
                        <template v-else>
                            <view class="order-card-item">{{ oStatusInfo[orderInfo.orderStatus] }}</view>
                        </template>
                    </view>
                    <template v-if="orderInfo.orderId && (orderInfo.orderStatus === 2 || orderInfo.orderStatus === 5)">
                        <view class="expressage-card card-space">
                            <template v-if="shippingInfo.length === 0">
                                <view class="shippingInfo-title"> {{ $t("物流信息") }} </view>
                            </template>

                            <view class="expressage-box">
                                <view class="expressage-info">
                                    <view class="">{{ orderInfo.logisticsName }}</view>
                                    <view class="">{{ orderInfo.trackingNo }}</view>
                                </view>
                                <view class="copy-btn" @click="handleCopy(orderInfo.trackingNo)">{{ $t("复制") }}</view>
                            </view>
                            <template v-if="shippingInfo.length > 0">
                                <view class="shippingInfo-box">
                                    <view class="shippingInfo-box-content" :class="{ dim: !showMore, 'more-height': showMore }">
                                        <up-steps :current="0" dot active-color="var(--general)" direction="column">
                                            <up-steps-item
                                                v-for="(item, index) in shippingInfo"
                                                :key="index"
                                                :title="item.acceptStation"
                                                :desc="item.acceptTime"
                                            />
                                        </up-steps>
                                    </view>
                                    <view class="shippingInfo-btn" @click="showMore = !showMore"
                                        >{{ showMore ? $t("收起") : $t("展开")
                                        }}<uni-icons class="btn-icon" :class="{ rotate: showMore }" type="down" size="18" color="#999"
                                    /></view>
                                </view>
                            </template>
                            <template v-else>
                                <view class="emptyText">
                                    {{ emptyText }}
                                </view>
                            </template>
                        </view>
                    </template>

                    <view class="pay-card card-space">
                        <view class="pay-card-item">
                            <text class="order-item-label">{{ $t("收货信息") }}：</text>
                            <text class="address-text">{{ orderInfo.userAddress + " " + orderInfo.consignee + " " + orderInfo.mobile }}</text>
                        </view>
                        <template v-if="orderInfo.shippingTypeName">
                            <view class="pay-card-item">
                                <text class="order-item-label">{{ $t("配送方式") }}：</text>
                                <text>{{ orderInfo.shippingTypeName }}</text>
                            </view>
                        </template>
                        <view class="pay-card-item">
                            <text class="order-item-label">{{ $t("支付方式") }}：</text>
                            <text>{{ orderInfo.payTypeId === 1 ? $t("在线支付") : orderInfo.payTypeId === 2 ? $t("货到付款") : $t("线下支付") }}</text>
                        </view>
                        <template v-if="showService">
                            <view class="pay-card-item im-btn">
                                <service
                                    ref="serviceRef"
                                    :phone="orderInfo.shop && orderInfo.shop.kefuPhone ? orderInfo.shop.kefuPhone : ''"
                                    :order-id="orderInfo.orderId"
                                    :shop-id="orderInfo.shopId"
                                >
                                    <tig-button :plain="true" color="#333" :custom-style="{ height: '55rpx' }" @click="handleService">
                                        {{ $t("联系客服") }}
                                    </tig-button>
                                </service>
                            </view>
                        </template>
                    </view>

                    <view class="product-card card-space">
                        <template v-for="item in orderInfo.items" :key="item.productId">
                            <view class="item-box">
                                <view v-if="orderInfo.shop" class="shop-info">
                                    <text class="text">
                                        {{ orderInfo.shop?.shopTitle }}
                                    </text>
                                    <text class="iconfont icon-xiangyou" />
                                </view>
                                <view class="product-card-item">
                                    <view class="product-card-item-left" @click="handleLink(item.productId)">
                                        <view class="left-img">
                                            <tig-image :src="item.picThumb" />
                                            <template v-if="item.isGift === 1">
                                                <view class="gift-text">{{ $t("赠品") }}</view>
                                            </template>
                                        </view>
                                    </view>
                                    <view class="product-card-item-right" @click="handleLink(item.productId)">
                                        <view class="right-title line2">
                                            <text>{{ item.productName }}</text>
                                        </view>
                                        <view class="sku-card" :class="{ nodata: !item.skuData || item.skuData.length === 0 }">
                                            <template v-if="item.skuData && item.skuData.length > 0">
                                                <template v-for="(skuItem, skuIndex) in item.skuData" :key="skuIndex">
                                                    <view class="sku-item line1">{{ skuItem.value }}</view>
                                                </template>
                                            </template>
                                        </view>
                                        <template v-if="item.extraSkuData && item.extraSkuData.length">
                                            <view class="extraskudata-box">
                                                <view class="extraskudata">
                                                    <template v-for="attr in item.extraSkuData" :key="attr">
                                                        <view class="extraskudata-item">
                                                            <view class="title">{{ attr.attrName }}</view>
                                                            <view class="line-box">
                                                                <view class="line" />
                                                            </view>
                                                            <view class="content">
                                                                <text class="line1 content-text">{{ attr.attrValue }}</text>
                                                                <format-price :show-text="false" class="price" :price-data="attr.attrPrice" />
                                                                <view class="num">x{{ item.quantity }}</view>
                                                            </view>
                                                        </view>
                                                    </template>
                                                </view>
                                            </view>
                                        </template>
                                        <view class="right-price">
                                            <format-price
                                                :show-text="false"
                                                class="right-price-pricenum"
                                                :decimals-style="{
                                                    fontSize: '23rpx',
                                                    fontWeight: 'bold'
                                                }"
                                                :currency-style="{
                                                    fontSize: '21rpx',
                                                    fontWeight: 'bold'
                                                }"
                                                :price-data="item.price"
                                            />
                                            <view class="right-price-quantity">x {{ item.quantity }}</view>
                                        </view>
                                    </view>
                                    <template v-if="orderInfo.payStatus === 2 && item.isGift === 0">
                                        <view class="item-btn">
                                            <template v-if="item.aftersalesItem">
                                                <tig-button
                                                    :plain="true"
                                                    color="#333"
                                                    :custom-style="{ height: '55rpx' }"
                                                    @click="handleAfterSaleDetail(item.aftersalesItem.aftersaleId)"
                                                >
                                                    {{ $t("售后详情") }}
                                                </tig-button>
                                            </template>
                                            <template v-else-if="orderInfo.availableActions.toAftersales">
                                                <tig-button
                                                    :plain="true"
                                                    color="#333"
                                                    :custom-style="{ height: '55rpx' }"
                                                    @click="handleAfterSale(item.itemId)"
                                                >
                                                    {{ $t("申请售后") }}
                                                </tig-button>
                                            </template>
                                        </view>
                                    </template>
                                </view>
                                <template v-if="orderInfo.orderType === 8 && item.eCard.length > 0">
                                    <view class="virtualsample-box">
                                        <template v-for="subItem in item.eCard" :key="subItem">
                                            <view>
                                                <view class="virtualsample-item">
                                                    <view class="virtualsample-item-con">
                                                        <view class="label">{{ $t("卡号") }}：</view>
                                                        <view class="value"> {{ subItem.cardNumber }}</view>
                                                    </view>
                                                    <view class="virtualsample-item-con">
                                                        <view class="label">{{ $t("卡密") }}：</view>
                                                        <view class="value"> {{ subItem.cardPwd }}</view>
                                                    </view>
                                                </view>
                                                <view class="virtualsample-btn">
                                                    <view>
                                                        <tig-button
                                                            :plain="true"
                                                            color="#333"
                                                            :custom-style="{ height: '55rpx' }"
                                                            @click="handleCopy(`卡号：${subItem.cardNumber}  卡密：${subItem.cardPwd}`)"
                                                        >
                                                            {{ $t("复制") }}
                                                        </tig-button>
                                                    </view>
                                                </view>
                                            </view>
                                        </template>
                                    </view>
                                </template>
                            </view>
                        </template>
                    </view>

                    <template v-if="orderInfo.orderType === 6 && orderInfo.items[0].virtualSample">
                        <view class="virtualsample card-space">
                            <view class="virtualsample-label">{{ $t("虚拟内容") }}：</view>
                            <view class="virtualsample-value">
                                <rich-text class="desc-text-item" :nodes="orderInfo.items[0].virtualSample" />
                            </view>
                        </view>
                    </template>

                    <view class="money-card card-space">
                        <view class="money-card-item">
                            <text class="order-item-label">{{ $t("商品总价") }}：</text>
                            <format-price :show-text="false" :is-bottom="false" :price-data="orderInfo.productAmount" />
                        </view>
                        <view v-if="orderInfo.serviceFee && orderInfo.serviceFee > 0" class="money-card-item">
                            <text class="order-item-label">{{ $t("附加费用") }}：</text>
                            <format-price :show-text="false" :is-bottom="false" :price-data="orderInfo.serviceFee" />
                        </view>
                        <view v-if="orderInfo.shippingFee && orderInfo.shippingFee > 0" class="money-card-item">
                            <text class="order-item-label">{{ $t("运费") }}：</text>
                            <format-price :show-text="false" :is-bottom="false" :price-data="orderInfo.shippingFee" />
                        </view>
                        <view v-if="orderInfo.balance && orderInfo.balance > 0" class="money-card-item">
                            <text class="order-item-label">{{ $t("使用余额") }}：</text>
                            <format-price :show-text="false" :is-bottom="false" :price-data="orderInfo.balance" />
                        </view>
                        <view v-if="orderInfo.pointsAmount && orderInfo.pointsAmount > 0" class="money-card-item">
                            <text class="order-item-label">{{ $t(`使用${configStore.integralName}`) }}：</text>
                            <format-price :show-text="false" :is-bottom="false" :price-data="orderInfo.pointsAmount" />
                        </view>
                        <view v-if="orderInfo.couponAmount && orderInfo.couponAmount > 0" class="money-card-item">
                            <text class="order-item-label">{{ $t("优惠券") }}：</text>
                            <format-price :show-text="false" :is-bottom="false" :price-data="orderInfo.couponAmount" />
                        </view>
                        <view v-if="orderInfo.discountAmount && orderInfo.discountAmount > 0" class="money-card-item">
                            <text class="order-item-label">{{ $t("其他优惠") }}：</text>
                            <format-price :show-text="false" :is-bottom="false" :price-data="orderInfo.discountAmount" />
                        </view>
                        <view v-if="orderInfo.unpaidAmount && orderInfo.unpaidAmount > 0" class="money-card-item">
                            <text class="order-item-label">{{ $t("待支付金额") }}：</text>
                            <format-price :show-text="false" :is-bottom="false" :price-data="orderInfo.unpaidAmount" />
                        </view>
                        <view v-if="orderInfo.payStatus == 2" class="money-card-item">
                            <text class="order-item-label">{{ $t("实付款") }}：</text>
                            <view class="order-item-price">
                                <format-price :show-text="false" :is-bottom="false" :price-data="orderInfo.totalAmount" />
                            </view>
                        </view>
                    </view>
                </view>

                <template
                    v-if="
                        orderInfo.availableActions.cancelOrder ||
                        orderInfo.availableActions.toPay ||
                        orderInfo.availableActions.confirmReceipt ||
                        orderInfo.availableActions.toAftersales
                    "
                >
                    <tig-fixed-placeholder height="100rpx" background-color="#fff">
                        <view class="order-info-btn">
                            <view class="order-info-btn-box">
                                <tig-button
                                    v-if="orderInfo.availableActions.cancelOrder"
                                    class="btn"
                                    color="#333"
                                    :plain="true"
                                    @click="handleCancelOrder(orderInfo.orderId)"
                                >
                                    {{ $t("取消订单") }}
                                </tig-button>
                                <tig-button
                                    v-if="orderInfo.availableActions.toPay"
                                    class="btn"
                                    color="#333"
                                    :plain="true"
                                    @click="handlePay(orderInfo.orderId)"
                                >
                                    {{ $t("去付款") }}
                                </tig-button>
                                <tig-button
                                    v-if="orderInfo.availableActions.confirmReceipt"
                                    color="#333"
                                    class="btn"
                                    :plain="true"
                                    @click="handleConfirmReceipt(orderInfo.orderId)"
                                >
                                    {{ $t("确认已收货") }}
                                </tig-button>
                                <tig-button
                                    v-if="orderInfo.availableActions.toAftersales"
                                    color="#333"
                                    class="btn"
                                    :plain="true"
                                    @click="handleAfterSale(null)"
                                >
                                    {{ $t("整单售后") }}
                                </tig-button>
                            </view>
                        </view>
                    </tig-fixed-placeholder>
                </template>
            </template>
        </view>
    </tig-layout>
</template>

<script setup lang="ts">
import service from "@/components/service/index.vue";
import { onLoad } from "@dcloudio/uni-app";
import { getOrder, cancelOrder, confirmReceipt, getShippingInfo } from "@/api/user/order";
import type { OrderInfoResponseItem, ShippingInfoTrace } from "@/types/user/order";
import { ref, computed } from "vue";
import { useI18n } from "vue-i18n";
import { useUserStore } from "@/store/user";
import { useConfigStore } from "@/store/config";
import { copy } from "@/utils";

const configStore = useConfigStore();

const serviceRef = ref<InstanceType<typeof service> | null>(null);
const handleService = () => {
    if (serviceRef.value) {
        serviceRef.value.handleClick();
    }
};

const userStore = useUserStore();

const { t } = useI18n();

interface IoStatusInfo {
    [key: number]: string;
}

const oStatusInfo = ref<IoStatusInfo>({
    0: t("您的订单已提交成功，请尽快完成付款哦！"),
    1: t("感谢您在本店的购物，您的订单已提交成功，我们会尽快为您发货！"),
    2: t("您的订单已经发货，请注意查收，祝您购物愉快！"),
    3: t('您的订单已被取消，您可以通过"再次购买"，重新购买订单中的商品。'),
    4: t('您的订单被认定为无效订单，订单已被关闭。您可以通过"再次购买"，重新购买订单中的商品。给您造成的不便请多多谅解！'),
    5: t("您的订单已经确认收货，感谢您在本店购物，祝您生活愉快！")
});

const orderInfo = ref<OrderInfoResponseItem>({} as OrderInfoResponseItem);
const showMore = ref(false);

const id = ref<null | number>();
onLoad((option: any) => {
    if (option && option.id) {
        id.value = option.id;
        try {
            uni.showLoading({
                title: t("加载中")
            });
            Promise.all([__getOrder(), __getShippingInfo()]);
        } catch (error) {
            console.error(error);
        } finally {
            // uni.hideLoading();
        }
    }
});

const __getOrder = async () => {
    try {
        const result = await getOrder({ id: id.value });
        orderInfo.value = result;
    } catch (error) {
        console.error(error);
    }
};

const shippingInfo = ref<ShippingInfoTrace[]>([]);
const emptyText = ref<string>("");
const __getShippingInfo = async () => {
    try {
        const result = await getShippingInfo({ id: id.value });
        if (result) {
            if (Array.isArray(result)) {
                shippingInfo.value = result;
            } else {
                shippingInfo.value = result.traces ?? ([] as ShippingInfoTrace[]);
            }
        }
    } catch (error) {
        console.error(error);
    } finally {
        uni.hideLoading();
    }
};

const handleCancelOrder = (id: number) => {
    uni.showModal({
        title: t("提示"),
        content: t("确认要取消该订单吗？"),
        success: async (res) => {
            if (res.confirm) {
                try {
                    await cancelOrder({ id });
                    __getOrder();
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

const handlePay = (id: number) => {
    uni.navigateTo({
        url: `/pages/order/pay?orderId=${id}`
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
                    __getOrder();
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

const handleAfterSale = (itemId: null | number) => {
    if (itemId) {
        uni.navigateTo({
            url: `/pages/user/afterSale/edit?itemId=${itemId}&orderId=${orderInfo.value.orderId}`
        });
    } else {
        uni.navigateTo({
            url: `/pages/user/afterSale/edit?orderId=${orderInfo.value.orderId}`
        });
    }
};

const handleAfterSaleDetail = (id: number) => {
    uni.navigateTo({
        url: `/pages/user/afterSale/info?id=${id}`
    });
};

const handleLink = (id: number) => {
    uni.navigateTo({
        url: `/pages/product/index?id=${id}`
    });
};

const handleCopy = (data: any) => {
    copy(data, () => {
        uni.showToast({
            title: t("复制成功"),
            icon: "none"
        });
    });
};

const showService = computed(() => {
    if (orderInfo.value.shop && Object.keys(orderInfo.value.shop).length > 0) {
        if (orderInfo.value.shop.kefuInlet && orderInfo.value.shop.kefuInlet.length > 0 && orderInfo.value.shop.kefuInlet.includes(2)) {
            return true;
        }
        return false;
    } else {
        return userStore.serviceConfig.show;
    }
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

.item-box {
    padding-bottom: 20rpx;

    &:last-child {
        padding-bottom: 0;
    }
    .shop-info {
        display: flex;
        align-items: center;
        font-size: 26rpx;
        font-weight: bold;
        margin-bottom: 20rpx;
    }
}
.virtualsample-box {
    border-top: 1px solid #f2f2f2;
    margin-top: 20rpx;
    padding-top: 20rpx;

    .virtualsample-item {
        .virtualsample-item-con {
            display: flex;
            font-size: 26rpx;
            line-height: 40rpx;
            .label {
                color: #999;
            }
            .value {
                color: #333;
            }
        }
    }
    .virtualsample-btn {
        display: flex;
        justify-content: flex-end;
        margin-top: 20rpx;
    }
}

.card-space {
    padding: 20rpx;
    border-radius: 20rpx;
    background-color: #fff;
    margin-top: 20rpx;
}
.address-text {
    width: calc(100% - 160rpx);
    text-align: end;
}
.order-item-label {
    color: #999;
    // max-width: 160rpx;
}

.order-info-steps {
    padding: 25rpx;
    background-color: #fff;
    border-radius: 0 0 20rpx 20rpx;
    overflow: hidden;
}

.order-info-content {
    padding: 10rpx 20rpx;
    .order-card {
        .order-card-item {
            align-items: center;
            display: flex;
            font-size: 24rpx;
            padding: 12rpx 0;
        }
    }

    .pay-card {
        font-size: 24rpx;
        .pay-card-item {
            padding: 20rpx 0;
            display: flex;
            justify-content: space-between;

            &.im-btn {
                justify-content: flex-end;
            }

            &:last-child {
                border-bottom: none;
                padding-bottom: 0;
            }
        }
    }

    .product-card {
        .product-card-item {
            display: flex;
            position: relative;
            margin-bottom: 20rpx;
            &:last-child {
                margin-bottom: 0;
            }

            .product-card-item-left {
                .left-img {
                    width: 160rpx;
                    height: 160rpx;
                    border-radius: 10rpx;
                    overflow: hidden;
                    margin-right: 20rpx;
                    box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.04);
                    position: relative;
                }
            }

            .product-card-item-right {
                font-size: 24rpx;
                flex: 1;

                .right-title {
                    font-weight: bold;
                    margin-bottom: 10rpx;
                }

                .right-price {
                    display: flex;
                    font-size: 28rpx;
                    padding-top: 10rpx;
                    .right-price-pricenum {
                        font-weight: bold;
                        color: var(--general);
                        padding-right: 10rpx;
                    }

                    .right-price-quantity {
                        color: #999;
                    }
                }
            }
            .item-btn {
                position: absolute;
                right: 0;
                bottom: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                column-gap: 10rpx;
            }
        }
    }

    .virtualsample {
        display: flex;
        width: 100%;
        column-gap: 20rpx;
        font-size: 24rpx;
        .virtualsample-label {
            color: #999;
        }
        .virtualsample-value {
            flex: 1;
            overflow: hidden;

            img {
                width: 100%;
                height: auto;
            }
        }
    }

    .money-card {
        font-size: 24rpx;
        .money-card-item {
            display: flex;
            justify-content: space-between;
            padding: 20rpx 0;
            &:last-child {
                padding-bottom: 0;
                border-bottom: none;
            }

            .order-item-price {
                font-weight: bold;
                color: var(--general);
                // padding-right: 10rpx;
                font-size: 28rpx;
                :deep(.util) {
                    font-size: 22rpx;
                    font-weight: normal;
                }
            }
        }
    }
}

.order-info-btn {
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: flex-end;
    padding: 20rpx;
    .order-info-btn-box {
        display: flex;
        align-items: center;
        .btn {
            margin-right: 10rpx;
            height: 100%;
            &:last-child {
                margin-right: 0;
            }
        }
    }
}

.shippingInfo-title {
    font-size: 28rpx;
    padding-bottom: 20rpx;
}

.expressage-box {
    display: flex;
    font-size: 26rpx;
    justify-content: space-between;

    .expressage-info {
        display: flex;
        column-gap: 15rpx;
    }

    .copy-btn {
        color: #b8b8b8;
        transition: color 0.2s;

        &:active {
            color: #333;
        }
    }
}

.shippingInfo-box {
    padding: 20rpx 0;
    .shippingInfo-box-content {
        height: 400rpx;
        overflow: hidden;
        position: relative;

        &.dim::after {
            width: 100%;
            height: 200rpx;
            content: "";
            position: absolute;
            left: 0;
            bottom: 0rpx;
            background-image: linear-gradient(-180deg, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 80%);
        }

        &.more-height {
            height: auto;
        }
    }

    .shippingInfo-btn {
        display: flex;
        flex-direction: row;
        justify-content: center;

        .btn-icon {
            &.rotate {
                transition: all 0.3s;
                transform: rotate(180deg);
            }
        }
    }
}

.emptyText {
    padding-top: 15rpx;
    font-size: 24rpx;
}
</style>
