<template>
    <tig-layout title="提交订单">
        <addressInfo :data="getAddressInfo" />

        <template v-if="paymentTypeList.length > 0">
            <paymentMode v-model:pay-type-id="formState.payTypeId" :available-payment-type="paymentTypeList" @change="updateOrderCheck" />
        </template>

        <stroeCard
            v-model:shipping-type="formState.shippingType"
            :cart-list="cartListData"
            :shipping-type-list="shippingTypeData"
            @change="updateOrderCheck"
            @change-product-extra="changeProductExtra"
        />

        <remark v-model="formState.buyerNote" />

        <template v-if="configStore.useCoupon == 1 || configStore.usePoints == 1 || configStore.useSurplus == 1">
            <couponInfo
                ref="couponInfoRef"
                v-model:use-coupon-ids="formState.useCouponIds"
                v-model:select-user-coupon-ids="formState.selectUserCouponIds"
                v-model:use-point="formState.usePoint"
                :balance="userStore.userInfo.balance ?? 0"
                :points="userStore.userInfo.points"
                :available-points="availablePoints"
                :points-amount="Number(totalData?.pointsAmount) ?? 0"
                :coupon-amount="Number(totalData?.discountCouponAmount) ?? 0"
                :coupon-list="couponListData"
                :flow-type="flowType"
                @send-balance-status="getBalanceStatus"
                @change="updateCoupon"
            />
        </template>

        <template v-if="configStore.canInvoice === 1">
            <invoiceInfo v-model:invoice-info="formState.invoiceData" :get-address-info="getAddressInfo" />
        </template>

        <totalCard :total="totalData" :cart-list="cartListData" :flow-type="flowType" />

        <tig-fixed-placeholder background-color="#fff">
            <view class="submit-btn-box">
                <view class="submit-btn-price">
                    <view class="price-text">{{ $t("应付") }}:</view>
                    <template v-if="flowType == 3">
                        <view class="points-box">
                            <view class="points-value">
                                {{ totalData?.exchangePoints }}
                                <view class="points-text">{{ $t(configStore.integralName) }} </view>
                            </view>
                            <view class="symbol">+</view>
                        </view>
                    </template>

                    <format-price
                        :font-style="{ fontWeight: 'bold', fontSize: '34rpx' }"
                        :decimals-style="{
                            fontSize: '24rpx',
                            fontWeight: 'bold'
                        }"
                        :currency-style="{
                            fontSize: '23rpx',
                            fontWeight: 'bold'
                        }"
                        :price-data="totalData?.unpaidAmount"
                    />
                </view>
                <view>
                    <tig-button class="btn" :disabled="shippingTypeStaus" @click="submit"> {{ $t("提交订单") }} </tig-button>
                </view>
            </view>
        </tig-fixed-placeholder>
    </tig-layout>
</template>

<script lang="ts" setup>
import { computed, onUnmounted, reactive, ref } from "vue";
import { getOrderCheckData, updateOrderCheckData, orderSubmit, updateCouponData, getPaymentType, getShippingType } from "@/api/order/check";
import type { CartList, Total, PaymentTypeItem, ShippingTypeItem } from "@/types/order/check";
import type { AddressFilterResult } from "@/types/user/address";
import { onLoad, onShow } from "@dcloudio/uni-app";
import { getAddressList } from "@/api/user/address";
import { useConfigStore } from "@/store/config";
import { useUserStore } from "@/store/user";
import { useI18n } from "vue-i18n";
import { redirect } from "@/utils";
import addressInfo from "./src/addressInfo.vue";
import paymentMode from "./src/paymentMode.vue";
import stroeCard from "./src/storeCard.vue";
import couponInfo from "./src/couponInfo.vue";
import invoiceInfo from "./src/invoiceInfo.vue";
import remark from "./src/remark.vue";
import totalCard from "./src/totalCard.vue";

const { t } = useI18n();

const configStore = useConfigStore();

const userStore = useUserStore();

// 当前结算表单数据
interface IformState {
    addressId: number;
    shippingType: {
        [key: string]: {
            typeId: number;
            shopId: number;
            typeName: string;
        };
    };
    productExtra: any;
    payTypeId: number;
    usePoint: number;
    useBalance: number;
    useCouponIds: number[];
    selectUserCouponIds: number[];
    buyerNote: string;
    invoiceData: any;
    useDefaultCouponIds?: number;
}

// 当前结算表单数据
const formState = reactive<IformState>({
    addressId: 0,
    shippingType: {},
    payTypeId: 0,
    usePoint: 0,
    useBalance: 0,
    useCouponIds: [],
    selectUserCouponIds: [],
    buyerNote: "",
    invoiceData: {},
    productExtra: {}
});

const addressList = ref<AddressFilterResult[]>([]);
const getAddressInfo = ref<AddressFilterResult>({} as AddressFilterResult);
const getAddressListData = async () => {
    try {
        const result = await getAddressList({ page: 1, size: 99 });
        const isLink = uni.getStorageSync("link");
        if (result.records.length === 0 && !isLink) {
            return uni.navigateTo({
                url: "/pages/address/list"
            });
        }
        if (result.records.length > 0) {
            getAddressInfo.value = result.records[0];
            formState.addressId = result.records[0].addressId;
            addressList.value = result.records;
        }
    } catch (error) {
        console.error(error);
    }
};

const paymentTypeList = ref<PaymentTypeItem[]>([]);
const getPaymentTypeData = async () => {
    try {
        const result = await getPaymentType();
        formState.payTypeId = result[0].typeId;
        paymentTypeList.value = result;
        // console.log(paymentTypeList.value);
    } catch (e) {
        console.log(e);
    }
};

const shippingTypeData = ref<{ [key: string]: ShippingTypeItem[] }>({});
const getShippingTypeData = async () => {
    try {
        const result = await getShippingType({ flowType: flowType.value });
        shippingTypeData.value = result;
        for (const key in result) {
            if (result[key] && result[key].length > 0) {
                formState.shippingType[key] = {
                    typeId: result[key][0].shippingTypeId,
                    shopId: result[key][0].shopId,
                    typeName: result[key][0].shippingTypeName
                };
            }
        }
    } catch (e) {
        console.log(e);
    }
};

const cartListData = ref<CartList[]>([]);
const totalData = ref<Total>();
const couponListData = ref<any>([]);
const tmplIdsData = ref<any>([]);
const flowType = ref<number>(1);
const availablePoints = ref(0);

const getOrderInfo = async () => {
    try {
        const result = await getOrderCheckData({ flowType: flowType.value, ...formState });
        const { cartList, total, couponList, tmplIds, item, useCouponIds, selectUserCouponIds } = result;
        Object.assign(formState, item);
        cartListData.value = cartList;
        totalData.value = total;
        couponListData.value = couponList;
        tmplIdsData.value = tmplIds;
        availablePoints.value = result.availablePoints;

        if (useCouponIds && useCouponIds.length > 0) {
            formState.useCouponIds = useCouponIds;
        }
        if (selectUserCouponIds && selectUserCouponIds.length > 0) {
            formState.selectUserCouponIds = selectUserCouponIds;
        }
    } catch (error: any) {
        console.error(error);
    }
};

const changeProductExtra = async (data: any) => {
    formState.productExtra = data;
    const result = await updateOrderCheck();
    if (result) {
        cartListData.value = result.cartList;
    }
};

const updateOrderCheck = async () => {
    uni.showLoading({
        title: t("加载中")
    });
    try {
        const result = await updateOrderCheckData({ flowType: flowType.value, ...formState });
        Object.assign(formState, result.item);
        totalData.value = result.total;
        availablePoints.value = result.availablePoints;
        return result;
    } catch (error: any) {
        uni.showToast({
            title: error.message,
            duration: 1500
        });
    } finally {
        uni.hideLoading();
    }
};

const updateCoupon = async () => {
    uni.showLoading({
        title: t("加载中")
    });
    try {
        const result = await updateCouponData(formState);
        couponListData.value = result.couponList;
        totalData.value = result.total;
        cartListData.value = result.cartList;
        formState.useCouponIds = result.useCouponIds;
        formState.selectUserCouponIds = result.selectUserCouponIds;
        return result;
    } catch (error) {
        console.error(error);
    } finally {
        uni.hideLoading();
    }
};

const getBalanceStatus = (status: boolean) => {
    if (status) {
        formState.useBalance = userStore.userInfo.balance;
    } else {
        formState.useBalance = 0;
    }
    updateOrderCheck();
};

const shippingTypeStaus = computed(() => {
    if (!formState.shippingType) {
        return true;
    }

    for (const item of cartListData.value) {
        if (item.noShipping === 0 && !formState.shippingType[item.shopId]) {
            return true;
        }
    }

    return false;
});
const submitLoading = ref(false);
const submit = async () => {
    if (submitLoading.value) return;
    if (formState.payTypeId === 0) {
        return uni.showToast({
            title: t("请选择付款方式"),
            icon: "none"
        });
    }
    if (shippingTypeStaus.value) {
        return;
    }

    if (submitLoading.value) return;

    submitLoading.value = true;
    // #ifdef MP-WEIXIN
    //小程序调用订阅消息需要授权模板
    wx.requestSubscribeMessage({
        tmplIds: tmplIdsData.value,
        complete: () => {
            submitOrder();
        }
    });
    // #endif

    // #ifdef APP-PLUS || H5 || MP-QQ || MP-TOUTIAO || MP-BAIDU || MP-ALIPAY
    submitOrder();
    // #endif
};
/**
 * 提交订单
 */
const submitOrder = async () => {
    try {
        const result = await orderSubmit(formState);
        if (result.returnType === 2) {
            redirect({
                url: `/pages/order/payStatus?id=${result.orderId}`,
                mode: "redirectTo"
            });
        } else {
            redirect({
                url: `/pages/order/pay?orderId=${result.orderId}`,
                mode: "redirectTo"
            });
        }
    } catch (error: any) {
        console.error(error);

        if (configStore.XClientType === "wechat" && error.code === 5002) {
            uni.setStorageSync("bindWechatFlowType", flowType.value);
            return redirect({
                url: `/pages/user/profile/index?bindWechat=true&flowType=${flowType.value}`
            });
        }

        uni.showToast({
            title: error.message,
            icon: "none"
        });
        setTimeout(() => {
            redirect({
                url: `/pages/cart/index`,
                mode: "redirectTo"
            });
        }, 1500);
    } finally {
        submitLoading.value = false;
    }
};

const couponInfoRef = ref();

onShow(async () => {
    initPageData();
    if (couponInfoRef?.value) {
        couponInfoRef.value.isBalance = false;
        formState.useBalance = 0;
    }
});

const initPageData = async () => {
    try {
        uni.showLoading({
            title: t("加载中")
        });
        await Promise.all([getAddressListData(), getPaymentTypeData(), getShippingTypeData(), userStore.getUserInfo()]);
        await getOrderInfo();
    } catch (error: any) {
        console.error(error);
        uni.showToast({
            title: error.message,
            icon: "none"
        });
        setTimeout(() => {
            redirect({
                url: `/pages/cart/index`,
                mode: "redirectTo"
            });
        }, 1500);
    } finally {
        uni.hideLoading();
    }
};

onUnmounted(() => {
    uni.removeStorageSync("link");
});

onLoad((options) => {
    if (options) {
        if (options.flowType) {
            flowType.value = options.flowType;
        }
    }
});
</script>

<style lang="scss" scoped>
.submit-btn-box {
    background-color: #fff;
    width: 100%;
    height: 100%;
    bottom: 0;
    padding: 0 30rpx;
    display: flex;
    align-items: center;
    justify-content: space-between;

    .submit-btn-price {
        color: var(--general);
        font-size: 32rpx;
        font-weight: bold;
        display: flex;
        align-items: center;
        column-gap: 10rpx;

        .price-text {
            font-weight: normal;
            color: #323233;
        }

        .points-box {
            display: flex;
            font-size: 34rpx;
            column-gap: 10rpx;
            .points-value {
                display: flex;
                align-items: flex-end;
                column-gap: 4rpx;
            }

            .points-text {
                font-size: 24rpx;
                position: relative;
                bottom: 4rpx;
            }
        }
    }

    .btn {
        width: 200rpx;
    }
}
</style>
