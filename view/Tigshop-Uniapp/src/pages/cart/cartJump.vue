<template>
    <tig-layout @login-success="loginSuccess">
        <template v-if="!showLogin">
            <tig-navbar :show-left="true" title="购物车" />
            <view v-if="!isLoad" class="cart-box shoppingCart">
                <template v-if="cartList.length > 0">
                    <view class="top-text">
                        <view class="fl">
                            {{ $t("已选商品") }}
                            <text class="select-num">{{ total.checkedCount }}</text>
                            {{ $t("件") }}
                        </view>
                        <view class="fr administrate acea-row row-center-wrapper" @click="cartManageFun">
                            <text class="manage-btn">{{ !cartManage ? $t("管理") : $t("完成") }}</text>
                        </view>
                    </view>
                    <view class="cart_list_wrap">
                        <template v-for="(item, index) in cartList" :key="item.cartId">
                            <view class="cart_table">
                                <view class="cart_store_title noborder">
                                    <tig-checkbox v-model:checked="item.isChecked" size="20" @change="onCheckAllItem(index)" />
                                    <view class="store_label">{{ item.shopTitle ? item.shopTitle : $t("自营") }}</view>
                                </view>
                                <view class="goods-list-cart">
                                    <uni-swipe-action>
                                        <template v-for="(goods, index) in item.carts" :key="goods.productId">
                                            <view class="cart_item">
                                                <uni-swipe-action-item :threshold="0" auto-close>
                                                    <view class="cart_list_con" :class="{ cartItemDisabled: goods.isDisabled }">
                                                        <tig-checkbox
                                                            v-model:checked="goods.isChecked"
                                                            size="20"
                                                            class="check-item"
                                                            :disabled="goods.isDisabled"
                                                            @change="onChangeCheck"
                                                        />
                                                        <navigator
                                                            :url="`/pages/product/index?id=${goods.productId}${
                                                                goods.skuId > 0 ? `&sku_id=${goods.skuId}` : ''
                                                            }`"
                                                            class="photo"
                                                        >
                                                            <view class="photo-img">
                                                                <image :src="imageFormat(goods.picThumb)" />
                                                                <view v-if="goods.stock === 0" class="cart-notice-row">{{ $t("已售罄") }}</view>
                                                                <view v-if="goods.productStatus === 0" class="cart-notice-row">{{ $t("已下架") }}</view>
                                                            </view>
                                                        </navigator>
                                                        <view class="cart-row">
                                                            <navigator
                                                                target="_blank"
                                                                :url="`/pages/product/index?id=${goods.productId}${
                                                                    goods.skuId > 0 ? `&sku_id=${goods.skuId}` : ''
                                                                }`"
                                                            >
                                                                <view class="name">
                                                                    {{ goods.productName }}
                                                                </view>
                                                            </navigator>
                                                            <view class="sku-card-box">
                                                                <template v-if="goods.skuData && goods.skuData.length > 0">
                                                                    <view class="sku-card">
                                                                        <template v-for="(skuItem, skuIndex) in goods.skuData" :key="skuItem">
                                                                            <view class="sku-item line1">{{ skuItem.value }}</view>
                                                                        </template>
                                                                    </view>
                                                                </template>
                                                            </view>

                                                            <template v-if="goods.activityInfo">
                                                                <view class="activity-box">
                                                                    <template
                                                                        v-for="subItem in formatActivityList(goods.activityInfo)"
                                                                        :key="subItem.promotionId"
                                                                    >
                                                                        <activityCard :activity-info="subItem" card-type="sub" />
                                                                    </template>
                                                                </view>
                                                            </template>

                                                            <view
                                                                class="cart-price"
                                                                :class="{
                                                                    'cart-price-margin': (!goods.skuData || goods.skuData.length === 0) && !goods.activityInfo
                                                                }"
                                                            >
                                                                <view class="price-one">
                                                                    <format-price
                                                                        :show-text="false"
                                                                        :font-style="{ fontWeight: 'bold' }"
                                                                        :decimals-style="{
                                                                            fontSize: '22rpx',
                                                                            fontWeight: 'bold'
                                                                        }"
                                                                        :currency-style="{
                                                                            fontSize: '23rpx',
                                                                            fontWeight: 'bold'
                                                                        }"
                                                                        :price-data="
                                                                            goods.originPrice && goods.originPrice !== goods.price
                                                                                ? goods.originPrice
                                                                                : goods.price
                                                                        "
                                                                    />
                                                                </view>
                                                                <view class="cart-num-box">
                                                                    <tig-number-box
                                                                        v-model="goods.quantity"
                                                                        :disabled="goods.isDisabled || goods.stock === 0"
                                                                        :min="1"
                                                                        :button-width="30"
                                                                        :max="goods.stock"
                                                                        input-width="30"
                                                                        button-size="30"
                                                                        @change="updateCartItem(goods.cartId, goods.quantity)"
                                                                        @overlimit="handleOverlimit"
                                                                    />
                                                                </view>
                                                            </view>
                                                            <template v-if="goods.price && goods.originPrice !== goods.price">
                                                                <view class="origin-price">
                                                                    {{ $t("每件预计到手") }}
                                                                    <format-price :show-text="false" :is-bottom="false" :price-data="goods.price" />
                                                                </view>
                                                            </template>
                                                            <template v-if="goods.extraSkuData && goods.extraSkuData.length">
                                                                <view class="extraskudata" @click="handleAttr(goods)">
                                                                    <template v-if="goods.extraSkuData.length === 1">
                                                                        <template v-for="attr in goods.extraSkuData" :key="attr">
                                                                            <view class="extraskudata-item">
                                                                                <view class="title line1">{{ attr.attrName }}</view>
                                                                                <view class="line-box">
                                                                                    <view class="line" />
                                                                                </view>
                                                                                <view class="content">
                                                                                    <text class="line1 content-text">{{ attr.attrValue }}</text>
                                                                                    <format-price
                                                                                        :show-text="false"
                                                                                        class="price"
                                                                                        :price-data="attr.totalAttrPrice"
                                                                                    />
                                                                                    <text class="iconfont-h5 icon-xiajiantou1-copy" />
                                                                                </view>
                                                                            </view>
                                                                        </template>
                                                                    </template>
                                                                    <template v-else>
                                                                        <view class="extraskudata-item">
                                                                            <view class="title">{{ $t("附加") }}</view>
                                                                            <view class="line-box">
                                                                                <view class="line" />
                                                                            </view>
                                                                            <view class="content">
                                                                                <text class="line1 content-text"
                                                                                    >{{ `已选${goods.extraSkuData.length}项` }}
                                                                                    <format-price
                                                                                        :show-text="false"
                                                                                        class="price"
                                                                                        :price-data="goods.serviceFee"
                                                                                    />
                                                                                </text>

                                                                                <text class="iconfont-h5 icon-xiajiantou1-copy" />
                                                                            </view>
                                                                        </view>
                                                                    </template>
                                                                </view>
                                                            </template>
                                                        </view>
                                                    </view>
                                                    <template #right>
                                                        <view class="cart-move-box">
                                                            <view class="btn-collect" @click="handleCollect(goods.productId, goods.cartId)">
                                                                <text>{{ $t("移入收藏") }}</text>
                                                            </view>
                                                            <view class="btn-del" @click="handleDel(goods.cartId)"
                                                                ><text>{{ $t("删除") }}</text></view
                                                            >
                                                        </view>
                                                    </template>
                                                </uni-swipe-action-item>
                                            </view>
                                        </template>
                                    </uni-swipe-action>
                                </view>

                                <template v-if="item.gift.length > 0">
                                    <view class="gift-box">
                                        <view class="gift-title">{{ $t("赠品") }}</view>
                                        <view class="gift-content">
                                            <view v-for="subItem in item.gift" :key="subItem.giftId" class="gift-content-item">
                                                <view class="gift-item-left">
                                                    <image :src="imageFormat(subItem.picThumb)" />
                                                </view>
                                                <view class="gift-item-right">
                                                    <view class="gift-item-name line1">{{ subItem.productName }}</view>
                                                    <template v-if="subItem.skuData.length > 0">
                                                        <view class="sku-card">
                                                            <template v-for="(skuItem, skuIndex) in subItem.skuData" :key="skuIndex">
                                                                <view class="sku-item">{{ skuItem.value }}</view>
                                                            </template>
                                                        </view>
                                                    </template>
                                                    <view class="gift-item-num">x{{ subItem.num }}</view>
                                                </view>
                                            </view>
                                        </view>
                                    </view>
                                </template>
                            </view>
                        </template>
                    </view>

                    <view class="checkOutBar" :style="checkOutBarStyle">
                        <view class="bar-check">
                            <view class="checkbox-pad">
                                <tig-checkbox v-model:checked="allChecked" size="20" @change="onCheckAll" />
                                <text class="checkbox-text" @click="onCheckAllText">{{ $t("全选") }}</text>
                            </view>
                        </view>
                        <view v-if="cartManage" class="edit-cart-action">
                            <view class="l_a_tool lt_delete" @click="checkClearCart">{{ $t("清空购物车") }}</view>
                            <view class="l_a_tool" :class="{ ltDisable: cartIds.length === 0 }" @click="delCartItem">{{ $t("删除勾选商品") }}</view>
                        </view>
                        <view v-if="!cartManage" class="cart-total-box">
                            <view class="cart-total">
                                <view :class="'btn-checkout ' + (total.checkedCount == 0 ? 'unable_btn' : '')" @click="handleCheckout">{{ $t("去结算") }}</view>
                                <view class="item-total">
                                    <view class="item-total-amount">
                                        <text class="txt">{{ $t("合计") }}：</text>
                                        <format-price
                                            :show-text="false"
                                            :price-data="total.discountAfter"
                                            :font-style="{ fontWeight: 'bold', fontSize: '30rpx' }"
                                            :currency-style="{
                                                fontSize: '22rpx',
                                                fontWeight: 'bold'
                                            }"
                                            :decimals-style="{
                                                fontSize: '22rpx',
                                                fontWeight: 'bold'
                                            }"
                                        />
                                    </view>
                                    <view class="item-total-desc">
                                        <view class=""
                                            >{{ $t("共优惠") }}：<format-price :show-text="false" :is-bottom="false" :price-data="total.discounts"
                                        /></view>
                                        <view class="discounts-btn" @click="handleShowDiscountInfo">
                                            {{ $t("优惠明细") }}
                                            <text class="iconfont-h5 icon-xiajiantou1-copy" :class="{ 'icon-active': showDiscountInfo }" />
                                        </view>
                                    </view>
                                </view>
                            </view>
                        </view>
                    </view>
                </template>

                <template v-if="cartList.length === 0 && !isLoad">
                    <cartEmpty />
                </template>
                <recommend @callback="getCartList" />
            </view>
        </template>
        <template v-else>
            <toLogin />
        </template>

        <discountInfo v-model="showDiscountInfo" :total="total" />
        <detail v-model="showDetail" :detail="currentDetail" />
    </tig-layout>
</template>

<script lang="ts" setup>
import { ref, computed } from "vue";
import activityCard from "@/components/masonry/activityCard.vue";
import discountInfo from "@/components/product/discountInfo.vue";
import recommend from "@/components/recommend/index.vue";
import detail from "./src/detail.vue";
import toLogin from "./src/toLogin.vue";
import cartEmpty from "./src/cartEmpty.vue";
import { onShow } from "@dcloudio/uni-app";
import { useConfigStore } from "@/store/config";
import { useTabbarStore } from "@/store/tabbar";
import { getCart, updateCartItemData, updateCartCheck, clearCart, removeCartItemData } from "@/api/cart/cart";
import { updateCollectProduct } from "@/api/product/product";
import type { updateCartCheckitem } from "@/types/cart/cart";
import { useI18n } from "vue-i18n";
import { imageFormat } from "@/utils/format";

const { t } = useI18n();

const configStore = useConfigStore();

const tabbarStore = useTabbarStore();

const cartList = ref<any>([]);

const total = ref<any>({
    checkedCount: 0,
    discountAfter: 0,
    discountCouponAmount: 0,
    discountProductPromotionAmount: 0,
    discountSeckillAmount: 0,
    discountTimeDiscountAmount: 0,
    discounts: 0,
    productAmount: 0,
    totalCount: 0
});

const cartManage = ref(false);

const allChecked = ref(false);
const onCheckAll = () => {
    cartList.value.forEach((item: any) => {
        item.carts.forEach((product: any) => {
            if (!product.isDisabled) {
                product.isChecked = allChecked.value;
            }
        });
    });
    updateCheckbox();
    updateCheckData();
};
const onCheckAllText = () => {
    allChecked.value = !allChecked.value;
    onCheckAll();
};

const onCheckAllItem = (index: number) => {
    const item = cartList.value[index];
    item.carts.forEach((product: any) => {
        if (!product.isDisabled) {
            product.isChecked = item.isChecked;
        }
    });
    updateCheckbox();
    updateCheckData();
};

const onChangeCheck = () => {
    updateCheckbox();
    updateCheckData();
};

const updateCheckbox = () => {
    cartList.value.forEach((item: any) => {
        const validItem = item.carts.filter((product: any) => !product.isDisabled);
        item.isChecked = validItem.every((product: any) => product.isChecked === true);
    });
    allChecked.value = cartList.value.every((item: any) => item.isChecked === true);
};
const updateCheckData = async () => {
    const checkData: updateCartCheckitem[] = [];
    cartList.value.forEach((item: any) => {
        item.carts.forEach((product: any) => {
            checkData.push({
                cartId: product.cartId,
                isChecked: product.isChecked ? 1 : 0
            });
        });
    });

    try {
        await updateCartCheck({ data: checkData });
        getCartList();
    } catch (error) {
        console.error(error);
    }
};

const loginSuccess = () => {
    getCartList();
};
onShow(() => {
    uni.hideTabBar();
    getCartList();
});
const isLoad = ref(true);
const showLogin = ref(!uni.getStorageSync("token"));

const getCartList = async () => {
    uni.showLoading({
        title: t("加载中")
    });
    try {
        const result = await getCart();
        console.log(result);
        total.value = result.total;
        cartList.value = result.cartList;
        showLogin.value = false;
        updateCheckbox();
    } catch (error: any) {
        console.error(error);
        if (error.code === 401) {
            showLogin.value = true;
        }
    } finally {
        isLoad.value = false;
        uni.hideLoading();
    }
};

let delayTimer: number | null = null; // 延时定时器
const startDelayTimer = (cartId: number, quantity: number) => {
    if (delayTimer) {
        clearTimeout(delayTimer);
    }
    delayTimer = setTimeout(() => {
        __updateCartItemData(cartId, quantity);
    }, 300);
};
const handleOverlimit = (event: string) => {
    event && event === "minus" && uni.$u.toast(t("商品数量不能小于1"));
    event && event === "plus" && uni.$u.toast(t("库存不足"));
};
const updateCartItem = async (cartId: number, quantity: number) => {
    startDelayTimer(cartId, quantity);
};

const __updateCartItemData = async (cartId: number, quantity: number) => {
    try {
        await updateCartItemData({ cartId, data: { quantity } });

        getCartList();
    } catch (error: any) {
        console.error(error);
        uni.showToast({
            title: error.message,
            icon: "none",
            duration: 800
        });
        setTimeout(() => {
            getCartList();
        }, 800);
    }
};

const cartManageFun = () => {
    cartManage.value = !cartManage.value;
};
const checkClearCart = () => {
    uni.showModal({
        title: t("提示"),
        content: t("确认要清空购物车吗？"),
        success: async (res) => {
            if (res.confirm) {
                await clearCart();
                getCartList();
            }
        }
    });
};

const cartIds = computed(() => {
    const cartiDs: number[] = [];
    cartList.value.forEach((item: any) => {
        item.carts.forEach((product: any) => {
            if (product.isChecked) cartiDs.push(product.cartId);
        });
    });
    return cartiDs || [];
});
const delCartItem = () => {
    if (cartIds.value.length == 0) return uni.$u.toast(t("请选择要删除的商品"));
    uni.showModal({
        title: t("提示"),
        content: t("确认要删除指定的商品吗？"),
        success: async (res) => {
            if (res.confirm) {
                try {
                    await removeCartItemData({ cartIds: cartIds.value });

                    getCartList();
                } catch (error) {
                    console.error(error);
                }
            }
        }
    });
};
const handleCheckout = () => {
    if (total.value.checkedCount == 0) return;
    if (configStore.closeOrder === 1) return uni.$u.toast(t("商城已关闭下单"));
    uni.navigateTo({
        url: "/pages/order/check"
    });
};
const handleCollect = async (productId: number, cartId: number) => {
    try {
        await updateCollectProduct({
            productId
        });
    } catch (error) {
        console.error(error);
    } finally {
        await removeCartItemData({ cartIds: [cartId] });
        getCartList();
    }
};

const handleDel = (cartId: number) => {
    uni.showModal({
        title: t("提示"),
        content: t("确认要删除该的商品吗？"),
        success: async (res) => {
            if (res.confirm) {
                try {
                    const result = await removeCartItemData({ cartIds: [cartId] });

                    getCartList();
                } catch (error) {
                    console.error(error);
                }
            }
        }
    });
};

const formatActivityList = (data: any) => {
    const activityList: any[] = [];
    const couponList = data.filter((item: any) => item.type === 2);
    const promotionList = data.filter((item: any) => item.type !== 2);
    if (promotionList.length > 0) activityList.push(promotionList[0]);
    if (couponList.length > 0) activityList.push(couponList[0]);

    return activityList;
};

const showDetail = ref(false);
const currentDetail = ref<any>({});
const handleAttr = (item: any) => {
    showDetail.value = true;
    currentDetail.value = item;
};

const showDiscountInfo = ref(false);
const handleShowDiscountInfo = () => {
    if (showDetail.value) showDetail.value = false;
    showDiscountInfo.value = !showDiscountInfo.value;
};

const checkOutBarStyle = computed(() => {
    return {
        bottom: tabbarStore.currentActiveValue > -1 ? "var(--tabbar-height)" : "0",
        paddingBottom: tabbarStore.currentActiveValue > -1 ? "0" : "var(--safe-bottom)",
        height: tabbarStore.currentActiveValue > -1 ? "var(--checkOutBar-height)" : "calc(var(--checkOutBar-height) + var(--safe-bottom))"
    };
});
</script>
<style lang="scss" scoped>
.extraskudata {
    background-color: #f7f8fa;
    width: 100%;
    padding: 10rpx 15rpx;
    border-radius: 10rpx;
    margin-top: 20rpx;
    color: #5c5c5c;
    .extraskudata-item {
        overflow: hidden;
        font-size: 22rpx;
        display: flex;
        line-height: 40rpx;

        .title {
            max-width: 150rpx;
        }
        .content {
            flex: 1;
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
            padding-right: 20rpx;
            .price {
                color: #555;
            }
            .content-text {
                flex: 1;
            }
            .icon-xiajiantou1-copy {
                position: absolute;
                right: -10rpx;
                top: 50%;
                transform: translateY(-55%) rotate(-90deg);
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

.gift-box {
    font-size: 26rpx;
    position: relative;
    margin: 0 40rpx;
    padding-top: 15rpx;
    margin-top: 10rpx;

    &::after {
        content: " ";
        position: absolute;
        pointer-events: none;
        box-sizing: border-box;
        -webkit-transform-origin: center;
        transform-origin: center;
        top: 0;
        left: 0;
        width: 100%;
        bottom: auto;
        -webkit-transform: scaleY(0.5);
        transform: scaleY(0.5);
        border-top: 1px solid #ebedf0;
    }

    .gift-content-item {
        width: 100%;
        display: flex;
        font-size: 24rpx;
        padding-top: 35rpx;
        padding-bottom: 15rpx;
        position: relative;

        .gift-item-left {
            width: 80rpx;
            height: 80rpx;
            border-radius: 8rpx;
            overflow: hidden;
            margin-right: 20rpx;

            image {
                width: 100%;
                height: 100%;
            }
        }

        .gift-item-right {
            width: calc(100% - 100rpx);
        }
        .gift-item-num {
            font-size: 22rpx;
            color: #969799;
            position: absolute;
            bottom: 15rpx;
            right: 0;
        }
    }
}

.select-num {
    color: var(--general);
}

.shoppingCart {
    --checkOutBar-height: 100rpx;
    padding-bottom: var(--checkOutBar-height);
}

.shoppingCart .labelNav {
    height: 76rpx;
    padding: 0 30rpx;
    font-size: 22rpx;
    color: #8c8c8c;
    position: fixed;
    left: 0;
    width: 100%;
    box-sizing: border-box;
    background-color: #f5f5f5;
    z-index: 5;
}
.shoppingCart .labelNav .item .iconfont {
    font-size: 25rpx;
    margin-right: 10rpx;
}
.shoppingCart .nav {
    width: 100%;
    height: 80rpx;
    background-color: #fff;
    padding: 0 30rpx;
    box-sizing: border-box;
    font-size: 28rpx;
    color: #282828;
    position: fixed;
    left: 0;
    z-index: 5;
}
.shoppingCart .nav .administrate {
    font-size: 26rpx;
    color: #282828;
    width: 110rpx;
    height: 46rpx;
    border-radius: 6rpx;
    border: 1px solid #868686;
}
.shoppingCart .list {
    margin-top: 171rpx;
}
.shoppingCart .list .item {
    padding: 25rpx 30rpx;
    background-color: #fff;
    margin-bottom: 15rpx;
}
.shoppingCart .list .item .picTxt {
    width: 627rpx;
    position: relative;
}
.shoppingCart .list .item .picTxt .pictrue {
    width: 160rpx;
    height: 160rpx;
}
.shoppingCart .list .item .picTxt .pictrue image {
    width: 100%;
    height: 100%;
    border-radius: 6rpx;
}
.shoppingCart .list .item .picTxt .text {
    width: 444rpx;
    font-size: 28rpx;
    color: #282828;
}
.shoppingCart .list .item .picTxt .text .infor {
    font-size: 24rpx;
    color: #868686;
    margin-top: 16rpx;
}
.shoppingCart .list .item .picTxt .text .money {
    font-size: 32rpx;
    color: #282828;
    margin-top: 28rpx;
}
.shoppingCart .list .item .picTxt .carnum {
    height: 47rpx;
    position: absolute;
    bottom: 7rpx;
    right: 0;
}
.shoppingCart .list .item .picTxt .carnum view {
    border: 1rpx solid #a4a4a4;
    width: 66rpx;
    text-align: center;
    height: 100%;
    line-height: 40rpx;
    font-size: 28rpx;
    color: #a4a4a4;
}
.shoppingCart .list .item .picTxt .carnum .reduce {
    border-right: 0;
    border-radius: 3rpx 0 0 3rpx;
}
.shoppingCart .list .item .picTxt .carnum .reduce.on {
    border-color: #e3e3e3;
    color: #dedede;
}
.shoppingCart .list .item .picTxt .carnum .plus {
    border-left: 0;
    border-radius: 0 3rpx 3rpx 0;
}
.shoppingCart .list .item .picTxt .carnum .num {
    color: #282828;
}
.shoppingCart .invalidGoods {
    background-color: #fff;
}
.shoppingCart .invalidGoods .goodsNav {
    width: 100%;
    height: 66rpx;
    padding: 0 30rpx;
    box-sizing: border-box;
    font-size: 28rpx;
    color: #282828;
}
.shoppingCart .invalidGoods .goodsNav .iconfont {
    color: #424242;
    font-size: 28rpx;
    margin-right: 17rpx;
}
.shoppingCart .invalidGoods .goodsNav .del {
    font-size: 26rpx;
    color: #999;
}
.shoppingCart .invalidGoods .goodsNav .del .icon-shanchu1 {
    color: #999;
    font-size: 33rpx;
    vertical-align: -2rpx;
    margin-right: 8rpx;
}
.shoppingCart .invalidGoods .goodsList .item {
    padding: 20rpx 30rpx;
    border-top: 1rpx solid #f5f5f5;
}
.shoppingCart .invalidGoods .goodsList .item .invalid {
    font-size: 22rpx;
    color: #fff;
    width: 70rpx;
    height: 36rpx;
    background-color: #aaa;
    border-radius: 3rpx;
    text-align: center;
    line-height: 36rpx;
}
.shoppingCart .invalidGoods .goodsList .item .pictrue {
    width: 140rpx;
    height: 140rpx;
}
.shoppingCart .invalidGoods .goodsList .item .pictrue image {
    width: 100%;
    height: 100%;
    border-radius: 6rpx;
}
.shoppingCart .invalidGoods .goodsList .item .text {
    width: 433rpx;
    font-size: 28rpx;
    color: #999;
    height: 140rpx;
}
.shoppingCart .invalidGoods .goodsList .item .text .infor {
    font-size: 24rpx;
}
.shoppingCart .invalidGoods .goodsList .item .text .end {
    font-size: 26rpx;
    color: #bbb;
}
.footer {
    width: 100%;
    height: 96rpx;
    background-color: #fafafa;
    position: fixed;
    bottom: 0;
    padding: 0 30rpx;
    box-sizing: border-box;
    border-top: 1rpx solid #eee;
}
.footer .checkAll {
    font-size: 28rpx;
    color: #282828;
    margin-left: 16rpx;
}
.footer checkbox .wx-checkbox-input {
    background-color: #fafafa;
}
.footer .money {
    font-size: 30rpx;
}
.footer .placeOrder {
    color: #fff;
    font-size: 30rpx;
    width: 226rpx;
    height: 70rpx;
    border-radius: 50rpx;
    text-align: center;
    line-height: 70rpx;
    margin-left: 22rpx;
}
.footer .button .bnt {
    font-size: 28rpx;
    color: #999;
    border-radius: 50rpx;
    border: 1px solid #999;
    width: 160rpx;
    height: 60rpx;
    text-align: center;
    line-height: 60rpx;
}
.footer .button form ~ form {
    margin-left: 17rpx;
}

.cart-box .top-text {
    height: 80rpx;
    background: #fff;
    overflow: hidden;
    padding: 0 20rpx;
}
.cart-box .top-text .fl {
    float: left;
    line-height: 80rpx;
}
.cart-box .top-text .fr {
    float: right;
}
.cart-box .top-text .manage-btn {
    line-height: 80rpx;
}

.cart_list_wrap {
    padding: 20rpx;
}
.cart_list_wrap .cart_table {
    border-radius: 10rpx;
    background: #fff;
    // margin-bottom: 20rpx;
}
.cart_list_wrap .cart_store_title {
    min-height: 90rpx;
    -moz-box-align: center;
    align-items: center;
    box-sizing: border-box;
    display: flex;
    min-height: 90rpx;
    padding: 20rpx 20rpx 0 20rpx;
    position: relative;
    z-index: 1;
}
.cart_list_wrap .cart_store_title::before {
    background-color: #e5e5e5;
    bottom: 0;
    content: "";
    height: 1rpx;
    left: 0;
    pointer-events: none;
    position: absolute;
    right: 0;
    z-index: 1;
}
.cart_list_wrap .cart_store_title.noborder::before {
    display: none;
}
.cart_list_wrap .cart_store_title.free-weight-tit {
    padding: 0 20rpx 15rpx;
    min-height: 80rpx;
    font-size: 24rpx;
}
.cart_list_wrap .cart_store_title.free-weight-tit .tip {
    background-color: #e93b3d;
    border-radius: 2px;
    color: #fff;
    display: inline-block;
    font-size: 22rpx;
    height: 32rpx;
    line-height: 32rpx;
    margin-right: 20rpx;
    padding: 0 8rpx;
    vertical-align: middle;
}

.cart_list_wrap .cart_store_title .store_label {
    display: inline-block;
    font-weight: bold;
    color: #333;
    font-size: 28rpx;
    padding-left: 15rpx;
}

.goods-list-cart .cart_item {
    overflow: hidden;

    // &.cart_item_disabled {
    //     opacity: 0.5;
    // }
}
.goods-list-cart .cart_item .cart_list_con {
    display: flex;
    min-height: 180rpx;
    padding: 24rpx 20rpx 10rpx 80rpx;
    position: relative;
    z-index: 1;
    &.cart_item_disabled {
        opacity: 0.5;
    }
}
.goods-list-cart .cart_item .check-item {
    display: block;
    position: absolute;
    top: 0;
    z-index: 1;
    height: 100%;
    left: 0;
    width: 80rpx;
    padding-left: 20rpx;
    padding-top: 86rpx;
    box-sizing: border-box;
    text-align: center;
}
.goods-list-cart .cart_item .photo {
    display: block;
    width: 180rpx;
    height: 180rpx;
    margin-bottom: 20rpx;
    margin-left: 10rpx;
    box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.04);

    .photo-img {
        width: 180rpx;
        height: 180rpx;
        box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.04);
        position: relative;
        border-radius: 15rpx;
        overflow: hidden;

        image {
            width: 100%;
            height: 100%;
        }
    }
    .cart-notice-row {
        position: absolute;
        width: 180rpx;
        bottom: 0;
    }
}

.goods-list-cart .cart_item .cart-row {
    padding-left: 18rpx;
    width: calc(100% - 200rpx);
    .activity-box {
        display: flex;
    }
}
.goods-list-cart .cart_item .cart-row .name {
    font-size: 27rpx;
    margin-bottom: 10rpx;
    overflow: hidden;
    display: block;
    text-overflow: ellipsis;
    display: -webkit-box;
    display: -moz-box;
    -webkit-line-clamp: 2;
    -moz-line-clamp: 2;
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
    color: #323233;
}

.goods-list-cart .cart_item {
    .sku-card-box {
        height: 48rpx;
        margin: 15rpx 0 8rpx;
        box-sizing: content-box;
    }
    .sku-card {
        display: inline-block;
        background-color: #f7f8fa;
        font-size: 22rpx;
        padding: 8rpx 12rpx;
        border-radius: 5rpx;
        color: #969799;
        margin: 0;

        .sku-item {
            display: inline-block;
            max-width: 130rpx;
        }

        .sku-item::before {
            content: ",";
            padding-left: 5rpx;
        }

        .sku-item:first-child::before {
            content: "";
        }
    }
}
.goods-list-cart .cart_item .cart-price {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10rpx;
    position: relative;

    &.cart-price-margin {
        margin-top: 20rpx;
    }
}
.origin-price {
    font-size: 21rpx;
    color: var(--ump-icon);
    padding-top: 5rpx;
}
.goods-list-cart .cart_item .price-one {
    font-size: 30rpx;
    color: var(--general);
}

.goods-list-cart .cart_item .cart_promotion {
    margin: 10rpx 0 0 0;
    padding-right: 0;
    position: relative;
}
.goods-list-cart .cart_item .cart_promotion .goods_promotion {
    background-color: #fef5f5;
    padding: 20rpx;
    position: relative;
    color: #999;
    font-size: 24rpx;
}
.goods-list-cart .cart_item .cart_promotion .goods_promotion image {
    width: 50rpx;
    height: 50rpx;
    display: inline-block;
}
.goods-list-cart .cart_item .cart_promotion .goods_promotion .dd {
    padding-bottom: 6rpx;
}
.goods-list-cart .cart_item .cart_promotion .goods_promotion .dd:last-child {
    padding-bottom: 0;
}
.goods-list-cart .cart_item .cart_promotion .goods_promotion .g_gift_list navigator,
.goods-list-cart .cart_item .goods_promotion .g_gift_list view {
    display: inline-block;
}
.goods-list-cart .cart_item .cart_promotion .goods_promotion .g_gift_list .g_num {
    padding: 0 4rpx;
}
.goods-list-cart .cart_item .cart_promotion .goods_promotion::before {
    border-color: transparent transparent #fef5f5;
    border-style: solid;
    border-width: 10rpx;
    content: "";
    height: 0;
    left: 66rpx;
    position: absolute;
    top: -20rpx;
    width: 0;
    z-index: 1;
}
.goods-list-cart .cart_item .cart_promotion .goods_promotion .icon_r {
    background: transparent;
    border: 2rpx solid #c9c9c9;
    color: #999;
    font-size: 20rpx;
    line-height: 30rpx;
    border-radius: 6rpx;
    font-weight: normal;
    display: inline-block;
    padding: 0 10rpx;
    margin-right: 10rpx;
    vertical-align: top;
}

.goods-list-cart .cart_item .cart_list_con {
    width: 690rpx;
}
.goods-list-cart .cart_item movable-area {
    width: 690rpx;
    height: auto;
}
.goods-list-cart .cart_item movable-view {
    width: 995rpx;
    height: auto;
    position: relative;
}
.goods-list-cart .cart_item .cart-move-box {
    width: 300rpx;
    height: 100%;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    display: flex;
}
.goods-list-cart .cart_item .cart-move-box text {
    display: block;
    position: absolute;
    top: 50%;
    margin-top: -20rpx;
    font-size: 24rpx;
    text-align: center;
    width: 100%;
}
.goods-list-cart .cart_item .cart-move-box .btn-del {
    width: 150rpx;
    display: inline-block;
    height: 100%;
    vertical-align: middle;
    display: table-cell;
    position: relative;
    background: var(--general);
    color: var(--main-text);
}
.goods-list-cart .cart_item .cart-move-box .btn-collect {
    width: 150rpx;
    background: var(--vice-bg);
    color: var(--vice-text);
    display: inline-block;
    height: 100%;
    vertical-align: middle;
    display: table-cell;
    position: relative;
}

.checkOutBar {
    width: 100%;
    background-color: #fff;
    position: fixed;
    bottom: 0;
    padding: 0;
    border-top: 1rpx solid #eee;
    display: flex;
    border-bottom: 1rpx solid #eee;
    z-index: 88;
}

.bar-check {
    padding-top: 10rpx;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 160rpx;
    .bar-check-text {
        font-size: 26rpx;
        position: relative;
        top: -1px;
    }
    .checkbox-pad {
        text-align: center;
        padding-left: 25rpx;
        width: 100%;
        display: flex;
        align-items: center;
        .checkbox-text {
            font-size: 24rpx;
        }
    }
}
.cart-total-box {
    width: 100%;
}
.cart-total-box .btn-checkout {
    background: var(--general);
    color: #fff;
    display: block;
    float: right;
    font-size: 32rpx;
    font-weight: 700;
    height: 100rpx;
    line-height: 100rpx;
    margin-left: 20rpx;
    text-align: center;
    width: 220rpx;
}
.cart-total-box .btn-checkout.unable_btn {
    background: #d7d7d7;
    color: #999;
}
.cart-total-box .item-total {
    display: flex;
    flex-direction: column;
    align-items: end;
    justify-content: center;
}

.cart-total-box .item-total .item-total-amount {
    padding-top: 10rpx;
    text-align: right;
    color: var(--general);
    font-size: 27rpx;
    .txt {
        font-weight: normal;
        color: #666;
    }

    .explain-text {
        font-size: 22rpx;
    }
}
.cart-total-box .item-total .item-total-desc {
    padding-top: 6rpx;
    color: #888;
    font-size: 22rpx;
    display: flex;
    align-items: center;

    .discounts-btn {
        padding: 2rpx 15rpx;
        background-color: #f2f3f5;
        border-radius: 20rpx;
        overflow: hidden;
        color: rgb(50, 50, 51);
        padding-right: 5rpx;
        margin-left: 10rpx;
        display: flex;
        align-items: center;

        .icon-xiajiantou1-copy {
            display: inline-block;
            transform: rotate(180deg);
            position: relative;
            left: 0rpx;
            transition: all 0.3s;
            &.icon-active {
                transform: rotate(0deg);
            }
        }
    }
}

.edit-cart-action {
    width: 100%;
    text-align: right;
}
.edit-cart-action .l_a_tool {
    display: inline-block;
    text-align: center;
    color: #fff;
    background: var(--general);
    font-size: 24rpx;
    height: 60rpx;
    line-height: 60rpx;
    border-radius: 60rpx;
    margin-top: 20rpx;
    margin-right: 20rpx;
    padding: 0 30rpx;

    &.lt_disable {
        opacity: 0.5;
    }
}
.edit-cart-action .l_a_tool.lt_delete {
    background: #eee;
    color: #666;
}

.cart-notice-row {
    color: white;
    font-weight: 500;
    padding: 0 16rpx;
    height: 36rpx;
    line-height: 36rpx;
    background-color: #333;
    font-size: 20rpx;
    border-radius: 4rpx;
    text-align: center;
    opacity: 0.9;
}
.image_mask_sold_out {
    position: absolute;
    width: 80%;
    height: 80%;
    top: 10%;
    left: 10%;
    z-index: 2;
}
.image_mask_sold_out image {
    width: 100% !important;
    height: 100% !important;
}
</style>
