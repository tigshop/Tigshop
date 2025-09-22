<template>
    <view class="product-card-row product-detail-area">
        <view class="tab-box flex align-center justify-around">
            <view class="tab" :class="{ active: tabIndex == 0 }" @click="tabIndex = 0">{{ $t("商品介绍") }}</view>
            <view class="tab" :class="{ active: tabIndex == 1 }" @click="tabIndex = 1">{{ $t("售后服务") }}</view>
        </view>
        <view v-if="tabIndex == 0" class="default">
            <template v-for="(item, index) in descArr" :key="index">
                <view v-if="item.type == 'pic'" class="desc-pic-item">
                    <image lazy-load :src="imageFormat(item?.pic || '')" class="slide-image" mode="widthFix" />
                </view>
                <rich-text v-if="item.type == 'text'" class="desc-text-item" :nodes="formatRichText(item.html)" />
            </template>
        </view>
        <view v-show="tabIndex == 1" class="default">
            <afterSaleService :id="productId" />
        </view>
    </view>
</template>

<script setup lang="ts">
import { ref } from "vue";
import type { PropType } from "vue";
import afterSaleService from "./afterSaleService.vue";
import { imageFormat } from "@/utils/format";
import { formatRichText } from "@/utils";

defineProps({
    descArr: {
        type: Array as PropType<Array<any>>,
        default: () => []
    },
    productId: {
        type: Number,
        default: 0
    },
    productType: {
        type: Number,
        default: 1
    },
    isBuy: {
        type: Number,
        default: 0
    },
    paidContent: {
        type: Array as PropType<Array<any>>,
        default: () => []
    }
});
const tabIndex = ref(0);
</script>

<style lang="scss" scoped>
.product-card-row {
    background-color: #fff;
    padding: 20rpx;
    border-radius: 20rpx;
    margin: 20rpx 0;
    .cart-item {
        font-size: 26rpx;
        margin: 25rpx 0;
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

        .img {
            width: 100%;
        }

        .desc-text-item {
            width: 100%;
            overflow: hidden;
            display: block;
            height: auto;
        }

        .desc-pic-item {
            .slide-image {
                display: block;
                width: 100%;
            }
        }
    }
}
</style>
