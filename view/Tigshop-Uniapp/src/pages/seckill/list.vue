<template>
    <tig-layout ref="layoutRef">
        <view class="seckill-title" />
        <view class="qianggou-list">
            <view v-for="(item, index) in seckillProductList" :key="index" class="qianggou-item" @click="toDetail(item)">
                <view class="qianggou-img-box">
                    <image class="qianggou-img" :src="imageFormat(item.picThumb || '')" mode="aspectFill" />
                    <view v-if="item.seckillStock === 0" class="qianggou-out">
                        <view class="qianggou-out-txt">{{ $t("已抢完") }}</view>
                    </view>
                </view>
                <view class="qianggou-info">
                    <view class="qianggou-tit line2">
                        {{ item.productName }}
                    </view>
                    <view class="line1 pro-txt-small">
                        <text class="line1">{{ $t("限时秒杀 抢先提醒") }}</text>
                    </view>
                    <view class="qianggou-money-box">
                        <view class="qianggou-num">
                            <view class="num"
                                ><format-price
                                    :decimals-style="{
                                        fontSize: '25rpx',
                                        fontWeight: 'bold'
                                    }"
                                    :currency-style="{
                                        fontSize: '23rpx',
                                        fontWeight: 'bold'
                                    }"
                                    :price-data="item.seckillPrice"
                            /></view>
                            <view class="del"
                                ><format-price :font-style="{ 'text-decoration': 'line-through' }" :is-bottom="false" :price-data="item.marketPrice"
                            /></view>
                        </view>
                        <view class="qianggou-btn" :class="{ flex: item.seckillStock === 0, 'align-center': item.seckillStock > 0 }">
                            <view v-if="item.seckillStock === 0" class="btn-txt"> {{ $t("已抢完") }} </view>
                            <view v-else class="btn-txt">
                                <view class="txt">{{ $t("马上抢") }}</view>
                                <view class="progress-box flex align-center">
                                    <view class="progress-bar">
                                        <view
                                            class="progress"
                                            :style="{
                                                width: seckillPercentage(item.seckillSales, item.seckillStock)
                                            }"
                                        />
                                    </view>
                                    <view class="progress-txt">{{ seckillPercentage(item.seckillSales, item.seckillStock) }}</view>
                                </view>
                            </view>
                        </view>
                    </view>
                </view>
            </view>
        </view>
        <loading-box v-model="isLoadMore" color="#fff" :page="filterParams.page" :length="seckillProductList.length" />
    </tig-layout>
</template>

<script lang="ts" setup>
import { ref, reactive, computed } from "vue";
import { imageFormat } from "@/utils/format";
import { getSeckill } from "@/api/seckill/seckill";
import type { SeckillFilterState } from "@/types/seckill/seckill";
import { staticResource } from "@/utils";
import { useList } from "@/hooks";
const layoutRef = ref();
const filterParams = reactive({
    //初始化用于查询的参数
    page: 1,
    size: 20
});
const {
    getList,
    isLoadMore,
    data: seckillProductList
} = useList<SeckillFilterState>(getSeckill, {
    params: filterParams,
    path: {
        dataKey: "records"
    },
    immediate: true
});

const toDetail = (data: SeckillFilterState) => {
    let url = `/pages/product/index?id=${data.productId}${data.skuId > 0 ? `&skuId=${data.skuId}` : ""}`;
    uni.navigateTo({
        url
    });
};

const seckillPercentage = (sales: number, stock: number) => {
    return Math.round((sales / (stock + sales)) * 100) + "%";
};

const titleBg = computed(() => {
    return `url(${staticResource("common/seckillTitle.png")}) no-repeat`;
});
</script>
<style>
page {
    background: linear-gradient(to right, #fd146b 0%, #f52828 100%);
}
</style>
<style scoped lang="scss">
.seckill-title {
    height: 250rpx;
    // background: url("@/static/images/common/overseas-seckillTitle.jpg") no-repeat;
    background: v-bind(titleBg);
    background-size: 100% 100%;

    .seckill-title-text-box {
        width: 100%;
        height: 100%;
        position: relative;
        .seckill-title-text {
            width: 100%;
            position: absolute;
            left: 50%;
            top: 40%;
            color: #fff;
            font-weight: bold;
            font-size: 40rpx;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    }
}
.qianggou-list {
    padding: 20rpx;
    margin-top: -100rpx;
}
.qianggou-item {
    margin-bottom: 15rpx;
    background-color: #fff;
    border-radius: 20rpx;
    padding: 20rpx;
    display: flex;
    align-items: center;

    .qianggou-img-box {
        width: 200rpx;
        height: 200rpx;
        position: relative;

        .qianggou-img,
        .qianggou-out {
            width: 100%;
            height: 100%;
            border-radius: 15rpx;
        }

        .qianggou-out {
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.5);

            .qianggou-out-txt {
                width: 150rpx;
                height: 150rpx;
                line-height: 150rpx;
                background-color: rgba(0, 0, 0, 0.5);
                color: #ffffff;
                font-size: 32rpx;
                text-align: center;
                font-weight: bold;
                border-radius: 100rpx;
            }
        }
    }

    .qianggou-info {
        margin-left: 20rpx;
        flex: 1;
        width: calc(100% - 200rpx);

        .qianggou-tit {
            color: #333333;
            font-size: 30rpx;
            margin-bottom: 10rpx;
            font-family:
                PingFangSC,
                PingFang SC;
            font-weight: 600;
            width: 100%;
        }

        .pro-txt-small {
            font-size: 25rpx;
            color: #666666;
            margin-bottom: 10rpx;
            width: 100%;

            .attr-tag {
                width: 25rpx;
                height: 25rpx;
                margin-right: 8rpx;
                margin-top: 3rpx;
            }
            .text {
                width: 400rpx;
            }
        }

        .qianggou-money-box {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            height: 80rpx;

            .qianggou-num {
                display: flex;
                align-items: flex-end;
                .num {
                    color: var(--general);
                    font-weight: bold;
                    font-size: 36rpx;
                    display: flex;
                    align-items: center;
                }
                .del {
                    display: flex;
                    margin-left: 15rpx;
                    font-size: 21rpx;
                    color: #999;
                }
            }

            .qianggou-btn {
                width: 190rpx;
                height: 75rpx;
                background: linear-gradient(130deg, #ff8853 0%, #f52828 100%);
                border-radius: 38rpx;
                line-height: 60rpx;
                text-align: center;

                .btn-txt {
                    width: 100%;
                    color: #fff;
                    position: relative;
                }

                .progress-box {
                    position: absolute;
                    bottom: -30rpx;
                    left: 50%;
                    margin-left: -60rpx;
                    .progress-bar {
                        width: 80rpx; /* 进度条容器的总宽度 */
                        height: 8rpx; /* 进度条的高度 */
                        background-color: #fcaa9e; /* 进度条背景色 */
                        border-radius: 4rpx; /* 进度条容器的圆角 */
                        box-shadow: inset 0 1rpx 3rpx rgba(0, 0, 0, 0.2); /* 可选：为进度条添加内阴影效果 */
                    }
                    .progress-txt {
                        font-size: 20rpx;
                        margin-left: 5rpx;
                    }

                    .progress {
                        height: 8rpx; /* 进度条的高度 */
                        background-color: #fff; /* 进度条的颜色 */
                        border-radius: 4rpx; /* 进度部分的圆角 */
                        transition: width 0.4s ease; /* 进度变化时的过渡动画效果 */
                    }
                }
            }

            .btn-out {
                background: rgba(178, 178, 178, 1);
            }
        }
    }
}
</style>
