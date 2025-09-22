<template>
    <view>
        <tig-layout ref="layoutRef" :immediate-log="false" :product-id="productId" :shop-id="product.shopId">
            <template v-if="!failLoad">
                <view v-show="!loadEndStatus">
                    <productNav v-model="scrollTop" v-model:active-module="activeModule" :event="handleScrollTo" />
                    <productImg class="product-area" :video-list="videoList" :pic-list="picList" :product-info="product" :seckill-value="seckillValue" />
                    <template v-if="isSeckill">
                        <productSeckillTitle
                            :product-info="product"
                            :product-origin-price="productOriginPrice!"
                            :product-price="productPrice"
                            :seckill-value="seckillValue"
                        />
                    </template>
                    <template v-if="isDiscount">
                        <productDiscountTitle
                            :product-info="product"
                            :product-origin-price="productOriginPrice!"
                            :product-price="productPrice"
                            :discount-value="discountValue"
                            :product-stock="productStock"
                        />
                    </template>

                    <view class="productDetail-content" :style="{ 'padding-bottom': `${product.productStatus === 0 || productStock === 0 ? 160 : 100}rpx` }">
                        <productTitleInfo
                            v-model:show-coupon="showCoupon"
                            :is-seckill="isSeckill"
                            :promotion-list="promotionList"
                            :product-info="product"
                            :product-price="productPrice"
                            :is-discount="isDiscount"
                            :type="type"
                            :exchange-integral="exchangeIntegral"
                        />

                        <view class="product-card-row">
                            <view class="cart-item flex align-center justify-between" @click="showSpecification">
                                <view class="flex align-center">
                                    <view class="title"> {{ $t("规格") }} </view>
                                    <view class="label"> {{ $t(skuStr) }} {{ $t(productNumber) }} {{ $t("件") }} </view>
                                </view>
                                <view>
                                    <image class="icon-image" :src="staticResource('common/more.png')" />
                                </view>
                            </view>

                            <template
                                v-if="configStore.showSelledCount || attrList.normal?.length > 0 || product.fixedShippingType === 1 || serviceList.length > 0"
                            >
                                <view class="card-row-flex">
                                    <template v-if="configStore.showSelledCount">
                                        <view class="cart-item flex align-center justify-between">
                                            <view class="flex align-center">
                                                <view class="title"> {{ $t("销量") }} </view>
                                                <view class="label"> {{ product.virtualSales }} {{ $t("件") }} </view>
                                            </view>
                                        </view>
                                    </template>

                                    <template v-if="attrList.normal?.length > 0">
                                        <view class="cart-item flex align-center justify-between" @click="showDrawer">
                                            <view class="flex align-center">
                                                <view class="title"> {{ $t("参数") }} </view>
                                                <view class="label attr_text line1">
                                                    <view class="shuxin">
                                                        {{ $t(shuxinText) }}
                                                    </view>
                                                </view>
                                            </view>
                                            <view>
                                                <image class="icon-image" ::src="staticResource('common/more.png')" />
                                            </view>
                                        </view>
                                    </template>

                                    <template v-if="product.fixedShippingType === 1 && Number(product.fixedShippingFee) == 0">
                                        <view class="cart-item flex align-center justify-between">
                                            <view class="flex align-center">
                                                <view class="title"> {{ $t("运费") }} </view>
                                                <view class="label attr_text line1">
                                                    <view class="shuxin">
                                                        {{ $t("包邮") }}
                                                    </view>
                                                </view>
                                            </view>
                                            <view>
                                                <image class="icon-image" ::src="staticResource('common/more.png')" />
                                            </view>
                                        </view>
                                    </template>

                                    <template v-if="serviceList.length > 0">
                                        <view class="cart-item">
                                            <view class="flex">
                                                <view class="title"> {{ $t("服务") }} </view>
                                                <view class="label flex-wrap align-center servicelist">
                                                    <template v-for="(item, index) in serviceList" :key="index">
                                                        <!-- <template > -->
                                                        <span class="flex align-center service-item"
                                                            ><tig-image v-if="item.icoImg" style="width: 15px; height: 15px" :src="item.icoImg" />{{
                                                                item.productServiceName
                                                            }}</span
                                                        >
                                                        <!-- </template> -->
                                                    </template>
                                                </view>
                                            </view>
                                        </view>
                                    </template>
                                </view>
                            </template>
                        </view>

                        <productComment class="evaluate-area" :product-id="product.productId" />

                        <productContent
                            :is-buy="product.isBuy"
                            :paid-content="product.paidContent"
                            :product-type="product.productType"
                            :desc-arr="descArr"
                            :product-id="product.productId"
                            class="product-detail-area"
                        />
                    </view>

                    <template v-if="!(product.productType === 4 && product.isBuy === 1)">
                        <view :style="{ 'padding-bottom': configStore.safeBottom + 'rpx' }" class="bottom-bar-box">
                            <view class="bottom-bar flex align-center">
                                <view class="icon-box">
                                    <view class="label" @click="handleToHome">
                                        <view>
                                            <image mode="widthFix" :src="staticResource('product/home.png')" class="img" />
                                        </view>
                                        <view class="label-text">
                                            <text>{{ $t("首页") }}</text>
                                        </view>
                                    </view>

                                    <view v-if="showService" class="label">
                                        <service :product-id="productId">
                                            <view>
                                                <image mode="widthFix" :src="staticResource('product/service.png')" class="img" />
                                            </view>
                                            <view class="label-text">
                                                <text>{{ $t("客服") }}</text>
                                            </view>
                                        </service>
                                    </view>
                                    <view class="label cart-position" @click.stop="toPage('/pages/cart/cartJump')">
                                        <view>
                                            <uni-badge class="uni-badge-left-margin badgecolor" :text="cartCount" absolute="rightTop" size="small">
                                                <image mode="widthFix" :src="staticResource('product/cart.png')" class="img" />
                                            </uni-badge>
                                        </view>
                                        <view class="label-text">
                                            <text>{{ $t("购物车") }}</text>
                                        </view>
                                    </view>
                                </view>
                                <view class="btn-box">
                                    <template v-if="product.productStatus === 0 || productStock === 0">
                                        <view class="other-products-btn" @click="handleToProductList">{{ $t("查看其他商品") }}</view>
                                    </template>
                                    <template v-else>
                                        <template v-if="type === 'exchange'">
                                            <view class="other-products-btn" @click="showSpecification">{{ $t("立即兑换") }}</view>
                                        </template>
                                        <template v-else>
                                            <template v-if="product.productType === 1">
                                                <view class="btn cart" @click="showSpecification">{{ $t("加入购物车") }}</view>
                                                <view class="btn buy" @click="showSpecification">{{ $t("立即购买") }} </view>
                                            </template>
                                            <template v-else>
                                                <view class="other-products-btn" @click="showSpecification">{{ $t("立即购买") }}</view>
                                            </template>
                                        </template>
                                    </template>
                                </view>
                                <template v-if="product.productStatus === 0 || productStock === 0">
                                    <view class="product-status">
                                        {{ $t(product.productStatus === 0 ? "商品已下架" : "商品已售罄") }}
                                    </view>
                                </template>
                            </view>
                        </view>
                    </template>

                    <specification
                        ref="specificationRef"
                        v-model="specificationId"
                        v-model:sku-id="skuId"
                        :type="type"
                        @load-end="getLoadStatus"
                        @add-card-succeed="getShowAnimation"
                        @send-value="getValue"
                    />

                    <productCoupon v-model="showCoupon" :product-id="Number(productId)" :promotion-list="promotionList" />
                    <tig-popup v-model:show="showAttrRef">
                        <scroll-view scroll-y="true" class="attr_table-box">
                            <view class="popup-title title">{{ $t("规格参数") }}</view>
                            <view class="attr_table">
                                <view v-for="(item, index) in attrList.normal" :key="index" class="item flex">
                                    <view class="lable">{{ $t(item.attrName) }}</view>
                                    <view v-for="(attr, attrIndex) in item.attrList" :key="attrIndex" class="value"> {{ attr.attrValue }} </view>
                                </view>
                            </view>
                        </scroll-view>
                    </tig-popup>
                    <tig-back-top :scroll-top="scrollTop" />
                    <animation v-model="showAnimation" :style-variable="styleVariable" :animation-position="animationPosition" />
                </view>
            </template>
            <template v-else>
                <error />
                <recommend title-bg="#fff" />
            </template>
        </tig-layout>
        <tig-loadingpage v-model="loadEndStatus" />
    </view>
</template>

<script lang="ts" setup>
import productNav from "./src/productNav.vue";
import productImg from "./src/productImg.vue";
import productTitleInfo from "./src/productTitleInfo.vue";
import productSeckillTitle from "./src/productSeckillTitle.vue";
import productDiscountTitle from "./src/productDiscountTitle.vue";
import productComment from "./src/productComment.vue";
import specification from "@/components/product/specification.vue";
import productCoupon from "./src/productCoupon.vue";
import productContent from "./src/productContent.vue";
import service from "@/components/service/index.vue";
import animation from "./src/animation.vue";
import error from "./src/error.vue";
import recommend from "@/components/recommend/index.vue";
import { imageFormat } from "@/utils/format";
import { nextTick, ref, getCurrentInstance, computed } from "vue";
import { onLoad, onShow, onReady, onUnload, onShareAppMessage, onShareTimeline } from "@dcloudio/uni-app";
import { getProductDetail } from "@/api/product/product";
import { getExchangeDetail } from "@/api/exchange/exchange";
import { useConfigStore } from "@/store/config";
import { asyncGetCartCount } from "@/api/cart/cart";
import type { PicList, ProductItem, AttrList, SkuList, ServiceList, RankDetail, DescArr, SkuPromotion, VideoList } from "@/types/product/product";
import { redirect, getElementRect, staticResource } from "@/utils";
import { useScrollTop } from "@/hooks";
import { useUserStore } from "@/store/user";

const userStore = useUserStore();
const { scrollTop } = useScrollTop();
const productId = ref(0);
const showAttrRef = ref(false);
const configStore = useConfigStore();
const specificationRef = ref();
const specificationId = ref(0);
const animationPosition = ref({
    top: 0,
    left: 0
});
const layoutRef = ref();
const type = ref("");
const exchangeIntegral = ref(0);

const showDrawer = () => {
    showAttrRef.value = true;
};
const showSpecification = () => {
    if (specificationRef.value) {
        specificationRef.value.handleShowPopup();
    }
};

const product = ref<ProductItem>({
    productId: 0,
    productStock: 0
});
const attrList = ref<AttrList>({} as AttrList);
const skuList = ref<SkuList[]>([]);
const picList = ref<PicList[]>([]);
const serviceList = ref<ServiceList[]>([]);
const rankDetail = ref<RankDetail>({});
const descArr = ref<DescArr[]>([]);
const checkedValue = ref<string[]>([]);
const videoList = ref<VideoList[]>([]);
const failLoad = ref(false);

const __getProductDetail = async (id: number) => {
    try {
        let result: any = {};
        switch (type.value) {
            case "exchange":
                result = await getExchangeDetail(id);
                exchangeIntegral.value = result.exchangeInfo.exchangeIntegral;
                productStock.value = result.exchangeInfo.productStock;
                productPrice.value = result.exchangeInfo.discountsPrice || "0";
                specificationId.value = result.exchangeInfo.id;
                break;
            default:
                result = await getProductDetail(id);
                productStock.value = result.item.productStock;
                productPrice.value = result.item.productPrice || "0";
                specificationId.value = result.item.productId;
        }

        productId.value = result.item.productId;
        product.value = result.item;
        attrList.value = result.attrList;
        picList.value = result.picList;
        videoList.value = result.videoList;
        rankDetail.value = result.rankDetail;
        skuList.value = result.skuList;
        checkedValue.value = result.checkedValue;
        descArr.value = result.descArr;
        serviceList.value = result.serviceList;
        uni.setNavigationBarTitle({
            title: result.item.productName
        });
        nextTick(() => {
            layoutRef.value?.handleLog();
        });
    } catch (error: any) {
        console.error(error);
        failLoad.value = true;
        loadEndStatus.value = false;
    }
};

const loadEndStatus = ref(true);
const getLoadStatus = () => {
    loadEndStatus.value = false;
};

const skuStr = ref<string>("");
const productPrice = ref<string>("0");
const productOriginPrice = ref<string | null>("0");
const productStock = ref<number>(0);
const isSeckill = ref<number>(0);
const seckillValue = ref<any>({});
const productNumber = ref<number>(1);
const promotionList = ref<SkuPromotion[]>([]);
const isDiscount = ref<number>(0);
const discountValue = ref<any>({});
const discountEndTime = ref<string>("");

interface Ival {
    productOriginPrice: string | null;
    productPrice: string;
    productStock: number;
    productNumber: number;
    productSkuId?: number;
    skuStr?: string;
    isSeckill: number;
    seckillValue: any;
    isDiscount: number;
    discountValue: any;
    discountEndTime: string;
    promotionList: SkuPromotion[];
}
const getValue = (val: Ival) => {
    if (val.productSkuId && val.skuStr) {
        skuStr.value = val.skuStr;
    }
    productStock.value = val.productStock;
    promotionList.value = val.promotionList;
    productPrice.value = val.productPrice;
    productOriginPrice.value = val.productOriginPrice;
    productNumber.value = val.productNumber;
    isSeckill.value = val.isSeckill;
    seckillValue.value = val.seckillValue;
    isDiscount.value = val.isDiscount;
    discountValue.value = val.discountValue;
    discountEndTime.value = val.discountEndTime;
};
const cartCount = ref<number>(0);
const _getCartCount = async () => {
    try {
        const result = await asyncGetCartCount();
        cartCount.value = result;
    } catch (error) {}
};
const toPage = (url: string) => {
    redirect({ url });
};

const showCoupon = ref(false);

const shuxinText = computed(() => {
    if (attrList.value.normal && attrList.value.normal.length) {
        const names = attrList.value.normal.map((item: any) => item.attrName);
        return names.join("/");
    }
    return "";
});
const handleToHome = () => {
    uni.switchTab({ url: "/pages/index/index" });
};
const handleToProductList = () => {
    uni.navigateTo({ url: "/pages/search/result" });
};

const instance = getCurrentInstance();
const systemInfo = ref<any>(uni.getSystemInfoSync());
const handleScrollTo = (module: string) => {
    const query = uni.createSelectorQuery().in(instance);
    query.select(module).boundingClientRect();
    query.selectViewport().scrollOffset(() => {});
    query.exec((res) => {
        uni.pageScrollTo({
            scrollTop: res[0].top + res[1].scrollTop - 50,
            duration: 0
        });
    });
};
const activeModule = ref(".product-area");
let productObserver: any, evaluateObserver: any, productDetailObserver: any;
const getObserver = (observer: any, module: string) => {
    observer.relativeToViewport({ bottom: -(systemInfo.value.windowHeight - 200) }).observe(module, (res: any) => {
        if (res.intersectionRatio > 0) {
            activeModule.value = module;
        }
    });
};
onReady(() => {
    productObserver = uni.createIntersectionObserver(instance);
    evaluateObserver = uni.createIntersectionObserver(instance);
    productDetailObserver = uni.createIntersectionObserver(instance);
    getObserver(productObserver, ".product-area");
    getObserver(evaluateObserver, ".evaluate-area");
    getObserver(productDetailObserver, ".product-detail-area");
});
onUnload(() => {
    productObserver && productObserver.disconnect(), (productObserver = null);
    evaluateObserver && evaluateObserver.disconnect(), (evaluateObserver = null);
    productDetailObserver && productDetailObserver.disconnect(), (productDetailObserver = null);
    // #ifdef  H5 || APP
    uni.closePreviewImage();
    // #endif
});

const skuId = ref(0);
const saveSalesmanProducts = (salesmanId: string, productId: string) => {
    let salesmanProducts = uni.getStorageSync("salesmanProducts") || [];
    if (salesmanProducts.length > 0) {
        const index = salesmanProducts.findIndex((item: any) => item.productId == productId);
        if (index !== -1) {
            salesmanProducts[index].salesmanId = salesmanId;
        }
    }
    salesmanProducts = [...salesmanProducts, { salesmanId, productId }];
    uni.setStorageSync("salesmanProducts", salesmanProducts);
};

onLoad((option) => {
    if (option) {
        if (option.type) {
            type.value = option.type;
        }
        if (option.id) {
            __getProductDetail(Number(option.id));
        }
        if (option.skuId) {
            skuId.value = Number(option.skuId);
        }
        if (option.salesmanId) {
            saveSalesmanProducts(option.salesmanId, option.id);
        }
    }
});

onShow(() => {
    _getCartCount();
});

const showAnimation = ref(false);
const getShowAnimation = async (val: boolean) => {
    await queryRect(".cart-position");
    await getAnimationPosition(".cart");

    showAnimation.value = val;
    _getCartCount();
};
const getAnimationPosition = async (selector: any) => {
    const data = await getElementRect(selector);
    if (data) {
        const { width, height, top, left } = data;
        animationPosition.value.top = top - height / 2;
        animationPosition.value.left = left + width / 2;
    }
};

const cartRect = ref({
    left: 0,
    top: 0
});

const queryRect = async (selector: any) => {
    const data = await getElementRect(selector);
    if (data) {
        const { width, height, top, left } = data;
        cartRect.value.top = top - height / 2;
        cartRect.value.left = left + width / 2;
    }
};

const styleVariable = computed(() => {
    return {
        "--x": cartRect.value.left - animationPosition.value.left + "px",
        "--y": "8px"
    };
});

onShareAppMessage(() => {
    return {
        title: product.value.productName,
        imageUrl: imageFormat(product.value.picUrl!)
    };
});

onShareTimeline(() => {
    return {
        title: product.value.productName,
        imageUrl: imageFormat(product.value.picUrl!)
    };
});

const showService = computed(() => {
    return userStore.serviceConfig.show;
});
</script>
<style lang="scss" scoped>
.badgecolor {
    :deep(.uni-badge--error) {
        background-color: var(--general);
    }
}

.servicelist {
    flex: 1;
    .service-item {
        margin-right: 5px;
        font-size: 22rpx;
        line-height: 38rpx;
        color: #81838e;
        .base-image {
            padding-right: 5px;
        }
    }
}
.icon-image {
    width: 35rpx;
    height: 35rpx;
}
.productDetail-content {
    padding: 0 20rpx;
    .product-card-row {
        background-color: #fff;
        padding: 20rpx;
        border-radius: 20rpx;
        margin: 20rpx 0;

        display: flex;
        flex-direction: column;
        row-gap: 25rpx;

        .card-row-flex {
            display: flex;
            flex-direction: column;
            row-gap: 25rpx;
            padding-top: 25rpx;
        }

        .cart-item {
            font-size: 26rpx;

            .title {
                min-width: 110rpx;
                color: #81838e;
                padding-right: 10rpx;
            }
            .attr_text {
                display: block;
                width: 66vw;
            }
            .label {
                .tips {
                    color: var(--general);
                    font-size: 24rpx;
                    margin-top: 5rpx;
                }
            }
        }
        .traceability-item {
            padding: 10rpx;
            background-color: #fdf6f0;
            color: #ff9627;
            font-size: 24rpx;
            image {
                width: 115rpx;
                height: 35rpx;
                margin-right: 20rpx;
            }
        }
        .tab-box {
            padding: 10rpx 0 20rpx 0;
            margin-bottom: 20rpx;
            font-size: 24rpx;
            .active {
                color: var(--general);
            }
        }
        .default {
            color: #9b9c9f;
            font-size: 24rpx;
            padding: 10rpx;
            .desc-pic-item {
                .slide-image {
                    display: block;
                    width: 100%;
                }
            }
        }
    }

    .coupon-list {
        background-color: #fff;
        padding: 20rpx;
        border-radius: 20rpx;
        align-items: center;
        .title {
            width: 90rpx;
            color: #81838e;
        }
        .coupon-item {
            position: relative;
            display: inline-block;
            margin-right: 20rpx;
            padding: 0 18rpx 0 24rpx;
            height: 36rpx;
            line-height: 35rpx;
            color: #fff;
            font-size: 20rpx;
            background: var(--general);

            &::before {
                content: "";
                position: absolute;
                left: -3px;
                top: 0;
                bottom: 0;
                width: 6px;
                height: 100%;
                color: var(--general);
                background: var(--general);
                -webkit-mask: radial-gradient(circle at 2px, #0000 2px, var(--general) 0);
                -webkit-mask-position: -3px;
                -webkit-mask-size: 100% 6px;
            }

            &::after {
                content: "";
                content: "";
                position: absolute;
                right: -3px;
                top: 0;
                bottom: 0;
                width: 6px;
                height: 100%;
                color: #fff;
                background: var(--general);
                -webkit-mask: radial-gradient(circle at 2px, #0000 2px, var(--general) 0);
                -webkit-mask-position: 5px;
                -webkit-mask-size: 100% 6px;
            }
        }
    }
}
.bottom-bar-box {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 110rpx;
    background-color: #fff;
    border-top: 1rpx solid #f5f5f5;
    box-sizing: content-box;
    .bottom-bar {
        height: 110rpx;
        padding: 0 20rpx;
        position: relative;
        justify-content: center;

        .product-status {
            position: absolute;
            top: -60rpx;
            left: 0;
            width: 100%;
            height: 60rpx;
            background-color: #fff7cc;
            color: #f85;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24rpx;
        }

        .icon-box {
            display: flex;
            align-items: center;
        }

        .btn-box {
            display: flex;
            padding-left: 20rpx;
            flex: 1;
            .other-products-btn {
                flex: 1;
                font-weight: bold;
                color: var(--main-text);
                background-color: var(--main-bg);
                height: 70rpx;
                border-radius: 100rpx;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 28rpx;
            }
        }
        .label {
            font-size: 20rpx;
            text-align: center;
            width: 80rpx;
            .img {
                width: 35rpx;
                height: 35rpx;
            }
            .label-text {
                padding-top: 5rpx;
                color: #2f2f2f;
                font-weight: 500;
                font-size: 22rpx;
            }
        }
        .btn {
            flex: 1;
            text-align: center;
            line-height: 70rpx;
            height: 70rpx;
            color: #fff;
            font-size: 24rpx;
        }
        .cart {
            background: var(--vice-bg);
            border-radius: 100rpx 0 0 100rpx;
            color: var(--vice-text);
        }
        .buy {
            background: var(--general);
            border-radius: 0 100rpx 100rpx 0;
            color: var(--main-text);
        }
    }
}
.attr_table-box {
    height: 60vh;
}
.attr_table {
    padding: 0 20rpx;
    .item {
        margin-bottom: 5rpx;
        font-size: 22rpx;
        .lable {
            display: inline-block;
            width: 200rpx;
            border: 1px solid #f5f4ef;
            background: #f5f4ef;
            padding: 10rpx 20rpx;
        }
        .value {
            flex: 1;
            border: 1px solid #f5f4ef;
            padding: 10rpx 20rpx;
        }
    }
}

.balance {
    border-radius: 0 0 18rpx 18rpx;
    background: #fff;
    margin-bottom: 20rpx;
    padding: 30rpx 32rpx 25rpx;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.coupon-container-content {
    height: 100%;
    padding-bottom: 30rpx;
}
.button-position {
    position: fixed;
    bottom: 30rpx;
    left: 0;
    right: 0;
    padding: 0 30rpx;
    padding-bottom: env(safe-area-inset-bottom) !important;
}

.coupon-btn-con {
    font-size: 22rpx;
    padding: 10rpx 25rpx;
    border-radius: 40rpx;

    color: #fff;
    background-image: -webkit-linear-gradient(left, #609dde 20%, #6781da);
    &:active {
        opacity: 0.7;
    }
    &.disabled {
        background-image: -webkit-linear-gradient(left, #aaa 20%, #aaa);
    }
}

.balance-title {
    display: flex;

    .balance-text {
        font-size: 22rpx;
        padding-left: 15rpx;
        display: flex;
        align-items: flex-end;
    }
}

.shuxin {
    white-space: nowrap; /* 保持文本在一行内 */
    overflow: hidden; /* 隐藏溢出的文本 */
    text-overflow: ellipsis;
}
</style>
