<template>
    <view
        v-if="productList?.length > 0"
        :class="
            'module-ad-con module-goods_ad ad-style__' +
            module.style +
            ' ad-buy_btn_style__' +
            module.buyBtnStyle +
            ' ad-goods_style__' +
            module.goodsStyle +
            ' ad-goods_radio_style__' +
            module.goodsRadioStyle +
            ' ad-text_align__' +
            module.textAlign +
            ' ad-text_weight__' +
            module.textWeight +
            ' ad-goods_name_row__' +
            module.goodsNameRow +
            ' ad-goods_name_padding__' +
            module.goodsNamePadding +
            ' ad-goods-title_style__' +
            module.title?.titleStyle
        "
        :style="frameFormat.boxPadding + frameFormat.boxPaddingTop + frameFormat.boxPaddingBottom"
    >
        <view
            :class="'module-ad-content ad-goods-waterfall-' + module.waterfall"
            :style="
                frameFormat.backgroundColor +
                ' ' +
                frameFormat.boxRadius +
                allFormat.backgroundColor +
                allFormat.boxPadding +
                allFormat.boxPaddingBottom +
                allFormat.boxPaddingTop +
                allFormat.boxRadius +
                allFormat.innerPadding
            "
        >
            <commonTitle v-if="module.title.showTitle == 1" :module="module.title" />
            <template v-if="productList.length > 0">
                <template v-if="module.style == 7">
                    <view class="goods-ad-warp">
                        <view class="goods-ad-con">
                            <tig-swiper
                                v-model="swiperList"
                                :class="{ 'uni-swiper-dot-box': module.picPageType == 3 }"
                                mode="default"
                                :color="module.picPageType == 3 ? '#fff' : ''"
                                :select-color="selectColor"
                                :height="480"
                                :bottom="15"
                            >
                                <template #default="{ item }">
                                    <view v-for="(subItem, index) in item" :key="index" class="goods-ad-item">
                                        <view class="item-content" :style="allFormat.goodsPadding">
                                            <view class="item-con">
                                                <view class="item-photo">
                                                    <navigator :url="urlFormat({ path: 'product', data: { id: subItem.productId } })" class="item-image-a">
                                                        <image :src="imageFormat(subItem.picThumb)" mode="widthFix" />
                                                    </navigator>
                                                </view>
                                                <view class="item-info">
                                                    <template v-if="module.showName">
                                                        <view class="item-name">
                                                            <navigator
                                                                :url="urlFormat({ path: 'product', data: { id: subItem.productId } })"
                                                                class="item-name-a"
                                                            >
                                                                {{ subItem.productName ?? "" }}
                                                            </navigator>
                                                            <template v-if="module.showBrief">
                                                                <navigator
                                                                    :url="urlFormat({ path: 'product', data: { id: subItem.productId } })"
                                                                    class="item-brief"
                                                                >
                                                                    {{ subItem.productBrief ?? "商品描述" }}
                                                                </navigator>
                                                            </template>
                                                        </view>
                                                    </template>
                                                    <view v-if="module?.showPrice" class="item-action">
                                                        <view class="item-price">
                                                            <format-price
                                                                :font-style="{ fontSize: '32rpx' }"
                                                                :currency-style="{
                                                                    fontSize: '22rpx'
                                                                }"
                                                                :decimals-style="{
                                                                    fontSize: '24rpx'
                                                                }"
                                                                :price-data="subItem.productPrice"
                                                            />
                                                        </view>
                                                        <view class="item-buy" />
                                                    </view>
                                                </view>
                                            </view>
                                        </view>
                                    </view>
                                </template>
                            </tig-swiper>
                        </view>
                    </view>
                </template>
                <template v-else>
                    <view class="goods-ad-warp">
                        <view class="goods-ad-con">
                            <template v-for="item in productList" :key="item.productId">
                                <view class="goods-ad-item">
                                    <view class="item-content" :style="allFormat.goodsPadding">
                                        <view class="item-con">
                                            <view class="item-photo">
                                                <navigator :url="urlFormat({ path: 'product', data: { id: item.productId } })" class="item-image-a">
                                                    <tig-image :src="item.picThumb" mode="widthFix" />
                                                </navigator>
                                            </view>
                                            <view class="item-info">
                                                <template v-if="module.showName">
                                                    <view class="item-name">
                                                        <navigator :url="urlFormat({ path: 'product', data: { id: item.productId } })" class="item-name-a">
                                                            {{ item.productName ?? "商品名称" }}
                                                        </navigator>
                                                        <!-- <template v-if="module.showBrief">
                                                            <navigator :url="''" class="item-brief">
                                                                {{ item.productBrief ?? "商品描述" }}
                                                            </navigator>
                                                        </template> -->
                                                    </view>
                                                </template>
                                                <template v-if="module.showPrice">
                                                    <view class="item-action">
                                                        <view class="item-price">
                                                            <format-price
                                                                :font-style="{ fontSize: '32rpx' }"
                                                                :currency-style="{ fontSize: '22rpx', position: 'relative', top: '-3rpx' }"
                                                                :price-data="item.productPrice"
                                                            />
                                                        </view>
                                                        <view class="item-buy" @click="redirect({ url: `/pages/product/index?id=${item.productId}` })">
                                                            <view class="buy-btn">
                                                                <template v-if="module.buyBtnStyle == 5 || module.buyBtnStyle == 6">
                                                                    <view>{{ $t("购买") }}</view>
                                                                </template>
                                                                <template v-else-if="module.buyBtnStyle == 7 || module.buyBtnStyle == 8">
                                                                    <view>{{ $t("马上抢") }}</view>
                                                                </template>
                                                                <template v-else>
                                                                    <view class="module_ico" />
                                                                </template>
                                                            </view>
                                                        </view>
                                                    </view>
                                                </template>
                                                <template v-else>
                                                    <view class="blank" style="height: 20rpx" />
                                                </template>
                                            </view>
                                        </view>
                                    </view>
                                </view>
                            </template>
                        </view>
                    </view>
                </template>
            </template>
        </view>
    </view>
</template>

<script lang="ts" setup>
import { ref, computed, watchEffect } from "vue";
import { imageFormat, urlFormat } from "@/utils/format";
import { formatFrame } from "@/components/modules";
import { getProductsList } from "@/api/common";
import commonTitle from "@/components/modules/commonTitle/index.vue";
import { redirect } from "@/utils";

const props = defineProps({
    module: {
        type: Object,
        default: () => ({})
    },
    moduleIndex: {
        type: Number,
        default: 0
    }
});
const { frame } = props.module;
const frameFormat = computed(() => {
    return formatFrame(frame ?? {});
});
const allFormat = computed(() => {
    return {
        backgroundColor: `background-color: ${props.module.backgroundColor};`,
        boxPadding: `margin-left: ${props.module.boxPadding}px;margin-right: ${props.module.boxPadding}px;`,
        boxPaddingBottom: `margin-bottom: ${props.module.boxPaddingBottom}px;`,
        boxPaddingTop: `margin-top: ${props.module.boxPaddingTop}px;`,
        boxRadius: `border-radius: ${props.module.boxRadius}px;`,
        innerPadding: `padding: ${props.module.innerPadding}px;`,
        goodsPadding: `padding: ${props.module.goodsPadding}px;`
    };
});

const paramsValueMap: { [key: number]: string[] } = {
    1: ["productIds"],
    2: ["productCategoryId", "productNumber"],
    3: ["productTag", "productNumber"]
};
const paramsKeyMap: { [key: string]: string } = {
    productIds: "ids",
    productCategoryId: "categoryId",
    productNumber: "size",
    productTag: "introType"
};
const productList = ref<any[]>([]);
const _getproductList = async () => {
    let param: any = {};
    if (typeof props.module.products === "object") {
        if (props.module.products.productSelectType) {
            const type = props.module.products.productSelectType;
            const keys = paramsValueMap[type];
            if (type == 1) {
                param[paramsKeyMap[keys[0]]] = props.module.products.productIds.join(",");
                param.size = props.module.products.productIds.length;
            } else {
                param.page = 1;
                keys.forEach((key) => {
                    param[paramsKeyMap[key]] = props.module.products[key];
                });
            }
        }
    }
    try {
        const result = await getProductsList(param);
        productList.value = result.records;
    } catch (error) {
        console.log(error);
    }
};
_getproductList();

const swiperList = ref<any[]>([]);
const getSwiperList = () => {
    swiperList.value = [];
    if (props.module.style == 7 && productList.value) {
        let swiperListNum = Math.ceil(productList.value.length / 3);
        for (let index = 0; index < swiperListNum; index++) {
            swiperList.value.push(productList.value.slice(index * 3, (index + 1) * 3));
        }
    }
};
watchEffect(() => {
    getSwiperList();
});

const selectColor = computed(() => {
    return props.module.swiperPageColor || "#333";
});
</script>
<style lang="scss" scoped>
/*  */
/*商品类型*/
.module-goods_ad .module-ad-content {
    overflow: hidden;
    z-index: 1;
    position: relative;
}
.goods-ad-warp .goods-ad-item {
    width: 100%;
    position: relative;
    overflow: hidden;
    display: inline-block;
    transition: opacity 0.4s ease-in-out;
}
.goods-ad-warp .goods-ad-con {
    display: flex;
    flex-wrap: wrap;
}

.goods-ad-warp .goods-ad-item .item-photo {
    background: #ffffff;
    text-align: center;
    position: relative;
}
.goods-ad-warp .goods-ad-item .item-photo image {
    height: auto;
    width: 100%;
}
.goods-ad-warp .goods-ad-item .item-info {
    background: #ffffff;
    position: relative;
    padding-top: 20rpx;
}

.goods-ad-warp .goods-ad-item .item-info .count-down {
    font-size: 24rpx;
    font-weight: normal;
    clear: both;
}
.goods-ad-warp .goods-ad-item .item-info .count-down i {
    font-size: 36rpx;
    padding-right: 10rpx;
}
.goods-ad-warp .goods-ad-item .item-info .count-down em {
    font-size: 32rpx;
    font-weight: normal;
    color: var(--general);
    padding: 0 4rpx;
}

.goods-ad-warp .goods-ad-item .item-info .item-name {
    margin: 0 20rpx 0;
    display: block;
}
.goods-ad-warp .goods-ad-item .item-info .item-name .item-name-a {
    line-height: 40rpx;
    height: 80rpx;
    overflow: hidden;
    display: block;
    color: #2a3145;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    display: -moz-box;
    -webkit-line-clamp: 2;
    -moz-line-clamp: 2;
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
}
.goods-ad-warp .goods-ad-item .item-info .item-name .item-brief {
    line-height: 40rpx;
    height: 40rpx;
    overflow: hidden;
    display: block;
    color: #aaa;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    display: -moz-box;
    -webkit-line-clamp: 1;
    -moz-line-clamp: 1;
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
    font-size: 24rpx;
    font-weight: bold;
}
.goods-ad-warp .goods-ad-item .item-info .item-action {
    vertical-align: middle;
    padding: 0 16rpx 4rpx;
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.goods-ad-warp .goods-ad-item .item-info .item-price {
    font-size: 32rpx;
    color: var(--general);
}

.goods-ad-warp .goods-ad-item .item-info .item-buy {
    justify-content: center;
    height: 60rpx;
    display: flex;
    align-items: center;
}
.goods-ad-warp .goods-ad-item .item-info .item-buy .buy-btn view {
    font-size: 24rpx;
}
.goods-ad-warp .goods-ad-item .item-info .item-buy .module_ico {
    width: 48rpx;
    height: 48rpx;
    color: var(--general);
    font-size: 36rpx;
}
.goods-ad-warp .goods-ad-item .item-info .item-buy .module_ico::before {
    content: "\e611";
}

.ad-style__1 .goods-ad-warp .goods-ad-item .item-info .item-name .item-name-a {
    font-weight: bold;
    font-size: 28rpx;
}
.module-goods_ad .goods-ad-warp .goods-ad-item .item-info .item-name .item-name-a {
    font-weight: bold;
}

.module-goods_ad .goods-ad-warp .goods-ad-item .item-info .item-price {
    font-size: 32rpx;
    color: var(--general);
}
.ad-style__2 .goods-ad-warp .goods-ad-item .item-info .item-name .item-name-a,
.ad-style__5 .goods-ad-warp .goods-ad-item .item-info .item-name .item-name-a,
.ad-style__6 .goods-ad-warp .goods-ad-item .item-info .item-name .item-name-a {
    font-size: 24rpx;
}
.ad-style__2 .goods-ad-warp .goods-ad-con {
    display: flex;
    flex-wrap: wrap;
}
.ad-style__2 .goods-ad-warp .goods-ad-con .goods-ad-item {
    width: 50%;
}
.ad-style__3 .goods-ad-warp .goods-ad-con {
    display: flex;
    flex-wrap: wrap;
}
.ad-style__3 .goods-ad-warp .goods-ad-con .goods-ad-item {
    width: 33.3333%;
}
.ad-style__3 .goods-ad-warp .goods-ad-item .item-info .item-buy {
    display: none;
}
.ad-style__4 .goods-ad-warp .goods-ad-con {
    display: flex;
    flex-wrap: wrap;
}
.ad-style__4 .goods-ad-warp .goods-ad-con .goods-ad-item {
    width: 100%;
}
.ad-style__4 .goods-ad-warp .goods-ad-con .goods-ad-item:nth-child(3n + 2) {
    width: 50%;
}
.ad-style__4 .goods-ad-warp .goods-ad-con .goods-ad-item:nth-child(3n + 3) {
    width: 50%;
}
.ad-style__5 .goods-ad-warp .goods-ad-con {
    display: flex;
    flex-wrap: wrap;
}
.ad-style__5 .goods-ad-warp .goods-ad-con .goods-ad-item {
    width: 100%;
}
.ad-style__5 .goods-ad-warp .goods-ad-item .item-content {
    display: flex;
    flex-wrap: nowrap;
}
.ad-style__5 .goods-ad-warp .goods-ad-item .item-content .item-con {
    display: flex;
    flex-wrap: nowrap;
    flex: 1;
}
.ad-style__5 .goods-ad-warp .goods-ad-item .item-photo {
    width: 40%;
}
.ad-style__5 .goods-ad-warp .goods-ad-item .item-info {
    width: 60%;
    text-align: left;
}
.ad-style__5 .goods-ad-warp .goods-ad-item .item-action {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding-bottom: 0;
}
.ad-style__6 .goods-ad-warp {
    overflow: hidden;
}
.ad-style__6 .goods-ad-warp .goods-ad-con {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: scroll;
    margin-bottom: -40rpx;
    padding-bottom: 40rpx !important;
    -webkit-overflow-scrolling: touch;
}
.ad-style__6 .goods-ad-warp .goods-ad-con .goods-ad-item {
    width: 40%;
    flex: none;
}
.ad-style__7 .goods-ad-warp {
    padding-bottom: 5rpx;
}
.ad-style__7 .goods-ad-warp .goods-ad-item .item-info {
    .item-name {
        font-size: 26rpx;
        padding-bottom: 15rpx;
    }
}
.ad-style__7 .goods-ad-warp .goods-ad-con {
    display: flex;
    flex-wrap: nowrap;
}
.ad-style__7 .goods-ad-warp .goods-ad-con {
    display: block;
    flex-wrap: nowrap;
    padding: 0 !important;
    height: 100%;
}
.ad-style__7 .goods-ad-warp swiper {
    height: 400rpx;
    position: relative;
    overflow: hidden;
}
.ad-style__7 .goods-ad-warp .goods-ad-con .goods-ad-item {
    width: 33.333%;
}

.ad-style__7 .goods-ad-warp .goods-ad-item .item-info .item-buy {
    display: none;
}
.ad-style__7 .goods-ad-warp .swiper-pagination-con {
    position: absolute;
    bottom: 30rpx;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}
.ad-style__7 .goods-ad-warp .swiper-pagination {
    display: inline-block;
    width: 24rpx;
    border-radius: 0;
    height: 4rpx;
    margin: 0 2rpx;
    background: #000;
    opacity: 0.2;
}
.ad-style__7 .goods-ad-warp .swiper-pagination.active {
    opacity: 1;
    background-color: #fff;
}
.ad-buy_btn_style__0 .goods-ad-warp .goods-ad-item .item-info .item-buy {
    display: none;
}
.ad-buy_btn_style__1 .goods-ad-warp .goods-ad-item .item-info .item-buy .module_ico::before {
    content: "\e611";
    font-size: 40rpx;
}
.ad-buy_btn_style__2 .goods-ad-warp .goods-ad-item .item-info .item-buy .module_ico::before {
    content: "\e664";
    font-size: 44rpx;
}
.ad-buy_btn_style__3 .goods-ad-warp .goods-ad-item .item-info .item-buy .module_ico::before {
    content: "\e74a";
    font-size: 40rpx;
}
.ad-buy_btn_style__4 .goods-ad-warp .goods-ad-item .item-info .item-buy .module_ico::before {
    content: "\e620";
    font-size: 40rpx;
}
.ad-buy_btn_style__5 .goods-ad-warp .goods-ad-item .item-info .item-buy .buy-btn view {
    color: var(--general);
    height: 44rpx;
    line-height: 44rpx;
    padding: 0 16rpx;
    display: inline-block;
    position: relative;
    border-radius: 4rpx;
    border: 0 solid var(--general);
}
.ad-buy_btn_style__5 .goods-ad-warp .goods-ad-item .item-info .item-buy .buy-btn view:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    width: 200%;
    height: 200%;
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    content: "";
    pointer-events: none;
    border: 2rpx solid #f44;
    border-radius: 4rpx;
}
.ad-buy_btn_style__6 .goods-ad-warp .goods-ad-item .item-info .item-buy .buy-btn view {
    background: var(--general);
    color: #fff;
    height: 44rpx;
    line-height: 44rpx;
    padding: 0 20rpx;
    display: inline-block;
    position: relative;
    border-radius: 44rpx;
}
.ad-buy_btn_style__7 .goods-ad-warp .goods-ad-item .item-info .item-buy .buy-btn view {
    color: var(--general);
    height: 44rpx;
    line-height: 44rpx;
    padding: 0 16rpx;
    display: inline-block;
    position: relative;
    border-radius: 4rpx;
    border: 0 solid var(--general);
}
.ad-buy_btn_style__7 .goods-ad-warp .goods-ad-item .item-info .item-buy .buy-btn view:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: border-box;
    width: 200%;
    height: 200%;
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    content: "";
    pointer-events: none;
    border: 2rpx solid #f44;
    border-radius: 4rpx;
}
.ad-buy_btn_style__8 .goods-ad-warp .goods-ad-item .item-info .item-buy .buy-btn view {
    background: var(--general);
    color: #fff;
    height: 44rpx;
    line-height: 44rpx;
    padding: 0 20rpx;
    display: inline-block;
    position: relative;
    border-radius: 44rpx;
}
.ad-goods_style__2 .goods-ad-warp .goods-ad-con .goods-ad-item .item-con {
    box-shadow: 0 4rpx 8rpx rgba(0, 0, 0, 0.06);
}
.ad-goods_style__3 .goods-ad-warp .goods-ad-con .goods-ad-item .item-con {
    border: 2rpx solid rgba(50, 50, 51, 0.1);
}
.ad-goods_style__4 .goods-ad-warp .goods-ad-item .item-info {
    background: transparent;
}
.ad-goods_radio_style__2 .goods-ad-warp .goods-ad-con .goods-ad-item .item-con {
    border-radius: 12rpx;
}
.ad-goods_radio_style__2 .goods-ad-warp .goods-ad-con .goods-ad-item .item-con .item-photo {
    border-radius: 12rpx 12rpx 0 0;
    overflow: hidden;
}
.ad-goods_radio_style__2 .goods-ad-warp .goods-ad-con .goods-ad-item .item-con .item-info {
    border-radius: 0 0 12rpx 12rpx;
}
.ad-text_align__2 .goods-ad-warp .goods-ad-con .goods-ad-item {
    text-align: center;
}
.ad-text_align__2 .goods-ad-warp .goods-ad-item .item-info .item-buy {
    height: auto;
    padding-bottom: 30rpx;
}
.ad-text_align__2 .goods-ad-warp .goods-ad-item .item-info .item-action {
    flex-wrap: wrap;
    justify-content: normal;
}
.ad-text_align__2 .goods-ad-warp .goods-ad-item .item-info .item-action .item-price {
    width: 100%;
}
.ad-text_align__2 .goods-ad-warp .goods-ad-item .item-info .item-action .item-buy {
    width: 100%;
}

.ad-text_weight__2 .goods-ad-warp .goods-ad-item .item-info .item-name .item-name-a {
    font-weight: bold;
}
.ad-goods_name_row__1 .goods-ad-warp .goods-ad-item .item-info .item-name .item-name-a {
    line-height: 40rpx;
    height: 40rpx;
    text-overflow: ellipsis;
    display: -webkit-box;
    display: -moz-box;
    -webkit-line-clamp: 1;
    -moz-line-clamp: 1;
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
}
.ad-goods_name_padding__0 .goods-ad-warp .goods-ad-item .item-info .item-name {
    margin-left: 0;
    margin-right: 0;
}
.ad-goods_name_padding__0 .goods-ad-warp .goods-ad-item .item-info .item-action {
    padding-left: 0;
    padding-right: 0;
}
.ad-goods-title_style__3 .image-ad-title {
    padding-bottom: 56rpx !important;
}
.ad-goods-title_style__3 .goods-ad-warp {
    border-top-left-radius: 30rpx;
    margin-top: -50rpx !important;
    overflow: hidden;
    background: #fff;
    padding-top: 20rpx;
    position: relative;
}
</style>
