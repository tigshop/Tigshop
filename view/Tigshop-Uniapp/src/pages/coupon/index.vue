<template>
    <view>
        <tig-layout :title="navbarTitle">
            <block v-if="couponList && couponList.length">
                <view class="tmcscoupon-list">
                    <block v-if="pageType == 1">
                        <view class="coupon-box">
                            <view v-for="(item, index) in couponList" :key="index" class="coupon-item">
                                <view class="left">
                                    <view class="col-1">
                                        <view class="title line2">{{ item.couponName }}</view>
                                    </view>
                                    <view v-if="item.couponDesc" class="col-2">
                                        {{ item.couponDesc }}
                                    </view>
                                    <view v-if="item.sendType === 1" class="col-3"> {{ $t("有效期") }}：{{ item.useEndDate }} </view>
                                    <view v-if="item.sendType === 0 && item.delayDay > 0" class="col-3">
                                        {{ `领券${item.delayDay}天后生效，有效期{1}天` }}
                                    </view>
                                    <view v-if="item.sendType === 0 && item.delayDay === 0" class="col-3">
                                        {{ `领券当日起${item.useDay}天内可用` }}
                                    </view>
                                </view>
                                <view class="right">
                                    <view class="right-1">
                                        <block v-if="item.couponType === 2">
                                            <view class="zhekou"> {{ item.couponDiscount }}</view>
                                            <view class="zhe">{{ $t("折") }}</view>
                                        </block>
                                        <block v-else>
                                            <format-price
                                                :show-text="false"
                                                :currency-style="{ 'justify-content': 'flex-end', fontSize: '24rpx', 'padding-bottom': '8rpx' }"
                                                :is-bottom="false"
                                                :font-style="{ fontSize: '48rpx' }"
                                                :price-data="item.couponMoney"
                                            />
                                        </block>
                                    </view>
                                    <view class="right-2">
                                        <view>
                                            <tig-button
                                                :custom-style="{ height: '55rpx' }"
                                                plain-main-color
                                                :disabled="couponStatus(item.isReceive, item.limitNum, item.receiveNum) === '已领取'"
                                                @click="handleReceiveCoupon(item)"
                                            >
                                                {{ $t(couponStatus(item.isReceive, item.limitNum, item.receiveNum)) }}
                                            </tig-button>
                                        </view>
                                    </view>
                                </view>
                                <view class="dotted-line" />
                            </view>
                        </view>
                    </block>
                    <block v-if="pageType == 2">
                        <view class="coupon-box">
                            <view
                                v-for="(item, index) in couponList"
                                :key="index"
                                :class="{
                                    grayScaleDiv: item.status != 1 && item.status != 2 && item.status != 3,
                                    pastDue: item.status === 5,
                                    haveBeenUsed: item.status === 4,
                                    comingIntoEffect: item.status === 3
                                }"
                                class="coupon-item"
                            >
                                <block v-if="item.status != 1 && item.status != 2 && item.status != 3">
                                    <view class="tag-box">
                                        <block v-if="item.status === 5">
                                            <tag />
                                        </block>
                                        <block v-else>
                                            <tag>{{ item.status === 3 ? $t("即将生效") : $t("已使用") }}</tag>
                                        </block>
                                    </view>
                                </block>

                                <view class="left">
                                    <view class="col-1">
                                        <view class="title line2">{{ item.couponName }}</view>
                                    </view>
                                    <view v-if="item.couponDesc" class="col-2">
                                        {{ item.couponDesc }}
                                    </view>
                                    <view class="col-3"> {{ $t("有效期") }}：{{ item.endDate }} </view>
                                </view>
                                <view class="right">
                                    <view class="right-1">
                                        <block v-if="item.couponType === 2">
                                            <view class="zhekou"> {{ item.couponDiscount }}</view>
                                            <view class="zhe">{{ $t("折") }}</view>
                                        </block>
                                        <block v-else>
                                            <format-price
                                                :show-text="false"
                                                :currency-style="{ 'justify-content': 'flex-end', fontSize: '24rpx', 'padding-bottom': '8rpx' }"
                                                :is-bottom="false"
                                                :font-style="{ fontSize: '48rpx' }"
                                                :price-data="item.couponMoney"
                                            />
                                        </block>
                                    </view>
                                    <view class="right-2">
                                        <view>
                                            <tig-button
                                                v-if="item.status === 1 || item.status === 2"
                                                :custom-style="{ height: '55rpx' }"
                                                @click="toPages(item)"
                                                >{{ $t("立即使用") }}</tig-button
                                            >
                                            <tig-button v-if="item.status === 3" :disabled="true" :custom-style="{ height: '55rpx' }">
                                                {{ $t("即将生效") }}
                                            </tig-button>
                                            <tig-button v-if="item.status === 4" :disabled="true" :custom-style="{ height: '55rpx' }">
                                                {{ $t("已使用") }}
                                            </tig-button>
                                            <tig-button v-if="item.status === 5" :disabled="true" :custom-style="{ height: '55rpx' }">
                                                {{ $t("已过期") }}
                                            </tig-button>
                                        </view>
                                    </view>
                                </view>
                                <view class="dotted-line" />
                            </view>
                        </view>
                    </block>
                </view>
            </block>
            <view v-if="!loading && couponList && couponList.length === 0" class="empty-box">
                <view class="pictrue">
                    <image lazy-load :src="staticResource('common/data_empty.png')" />
                </view>
                <view class="txt">{{ $t("暂无优惠券！") }}</view>
            </view>
        </tig-layout>
    </view>
</template>

<script lang="ts" setup>
import tag from "./src/tag.vue";
import { reactive, ref } from "vue";
import { addCoupon, getCouponList, getMyCouponList } from "@/api/coupon/coupon";
import type { CouponFilterParams, CouponFilterResult, CouponData } from "@/types/coupon/coupon";
import { onLoad, onReachBottom, onShow } from "@dcloudio/uni-app";
import { staticResource } from "@/utils";
import { useI18n } from "vue-i18n";

const { t } = useI18n();

const navbarTitle = ref("优惠券");

const filterParams = reactive<CouponFilterParams>({
    page: 1,
    size: 10
});
const pageType = ref<number>(1);
const total = ref(0);
const couponList = ref<CouponFilterResult[]>([]);
const loading = ref(true);
const __getCouponList = async () => {
    uni.showLoading({
        title: t("加载中")
    });
    try {
        let result = {} as CouponData;
        if (pageType.value == 1) {
            result = await getCouponList(filterParams);
        } else {
            result = await getMyCouponList(filterParams);
        }
        couponList.value = [...couponList.value, ...result.records];
        total.value = result.total;
    } catch (error) {
        console.error(error);
    } finally {
        uni.hideLoading();
        loading.value = false;
    }
};

const couponStatus = (isReceive: number, limitNum: number, receiveNum: number) => {
    if (limitNum === 0) {
        if (isReceive === 1) {
            return "已领取";
        } else if (receiveNum > 0) {
            return "再次领取";
        } else {
            return t("马上领");
        }
    } else {
        if (isReceive === 0) {
            return "马上领";
        } else if (receiveNum >= limitNum) {
            return "已领取";
        } else {
            return "再次领取";
        }
    }
};

const handleReceiveCoupon = async (item: CouponFilterResult) => {
    uni.showLoading({
        title: t("加载中")
    });
    if (couponStatus(item.isReceive, item.limitNum, item.receiveNum) === "已领取") {
        uni.showToast({
            title: t("已领取"),
            icon: "none",
            duration: 1500
        });
        return;
    }

    try {
        await addCoupon({ couponId: item.couponId });
        uni.showToast({
            title: t("领取成功"),
            duration: 1500
        });
        setTimeout(() => {
            filterParams.page = 1;
            couponList.value = [];
            __getCouponList();
        }, 100);
    } catch (error: any) {
        console.error(error);
        uni.showToast({
            title: error.message,
            icon: "none",
            duration: 1500
        });
    } finally {
        uni.hideLoading();
    }
};
const toPages = (item: any) => {
    const couponInfo = {
        couponId: item.couponId,
        couponName: item.couponName
    };
    uni.navigateTo({
        url: "/pages/search/result?couponInfo=" + encodeURIComponent(JSON.stringify(couponInfo))
    });
};
onLoad((options) => {
    if (options) {
        if (options.type) {
            pageType.value = options.type;
            options.type == 2 && (navbarTitle.value = "我的优惠券");
        }
    }
});
onShow(() => {
    filterParams.page = 1;
    couponList.value = [];
    __getCouponList();
});

onReachBottom(() => {
    if (filterParams.page < Math.ceil(total.value / filterParams.size)) {
        filterParams.page++;
        __getCouponList();
    }
});
</script>

<style lang="scss" scoped>
/* 优惠券 */
.price {
    font-size: 48rpx;
    color: #666;
    display: flex;

    :deep(.util) {
        font-size: 30rpx;
        padding-left: 5rpx;
        height: 100%;
        position: relative;
        top: 8rpx;
    }

    .tmcscoupon-name {
        font-size: 26rpx;
        padding-left: 20rpx;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        display: inline-block;
        width: 280rpx;
    }
}

.tmcscoupon-list .tmcscoupon-item-1 {
    margin: 20rpx;
    height: 160rpx;
    overflow: hidden;
    background: #fff;
    border-radius: 12rpx;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item {
    flex-shrink: 0;
    width: 100%;
    display: flex;
    position: relative;
    background: #fff5c5;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_m {
    flex: 1;
    height: 160rpx;
    margin-left: 32rpx;
    box-sizing: border-box;
    position: relative;
    min-width: 0;
}

.tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_m:before,
.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_m:after {
    content: "";
    position: absolute;
    border-radius: 50%;
    width: 16rpx;
    height: 16rpx;
    background: #f0f2f5;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_m:before {
    top: -8rpx;
    right: -8rpx;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_m .tmcscoupon-item_m-info {
    display: flex;
    align-items: baseline;
    font-weight: 700;
    height: 70rpx;
    line-height: 80rpx;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_m .tmcscoupon-item_m-rule {
    font-size: 24rpx;
    color: #999;
    margin-top: 6rpx;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_m .tmcscoupon-item_m-date {
    font-size: 20rpx;
    color: #999;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_m:after {
    bottom: -8rpx;
    right: -8rpx;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_r:before {
    content: "";
    height: 130rpx;
    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAABeAgMAAAB5il18AAAACVBMVEVHcEz/xy7/xi4WmQdzAAAAAnRSTlMAtc2YijsAAAAUSURBVAjXY9BggEARBhgQYRgiYgDQigepHfzaGwAAAABJRU5ErkJggg==);
    width: 4rpx;
    margin-left: -2rpx;
    position: absolute;
    top: 35%;
    left: 0;
    margin-top: -40rpx;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    background-size: 100% 100%;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_r {
    width: 208rpx;
    height: 160rpx;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.tmcscoupon-list .tmcscoupon-item-1 .tmcscoupon-item .tmcscoupon-item_r .btn {
    width: 160rpx;
    height: 54rpx;
    background: #ff9400;
    border-radius: 28rpx;
    justify-content: center;
    display: flex;
    align-items: center;
    font-size: 28rpx;
    font-weight: 700;
    color: #fff;
}

.tmcscoupon-list .tmcscoupon-item-2 {
    .coupon-detail {
        box-sizing: border-box;
        margin-top: 20rpx;
        padding: 0 20rpx;

        .coupon-detail-item {
            display: flex;
            height: 200rpx;
            background-color: #fff;

            .coupon-detail-item-left {
                width: 260rpx;
                flex-shrink: 0;
                background-color: #609dde;
                background-image: -webkit-linear-gradient(left, #609dde 20%, #6781da);
                position: relative;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                color: #fff;

                .item-left-discount {
                    font-size: 40rpx;
                }

                .item-left-money {
                    font-size: 48rpx;
                    font-weight: bold;

                    :deep(.util) {
                        font-size: 30rpx;
                        padding-left: 5rpx;
                        line-height: 48rpx;
                    }
                }

                .item-left-desc {
                    color: #fff;
                    font-size: 24rpx;
                    margin-top: 10rpx;
                }

                &::before {
                    content: "";
                    z-index: 88;
                    width: 50rpx;
                    height: 100%;
                    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTQ2MEVGOUEwQUM4MTFFQTgwNkNDRDQzRDE5RjkyMzMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NTQ2MEVGOUIwQUM4MTFFQTgwNkNDRDQzRDE5RjkyMzMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1NDYwRUY5ODBBQzgxMUVBODA2Q0NENDNEMTlGOTIzMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1NDYwRUY5OTBBQzgxMUVBODA2Q0NENDNEMTlGOTIzMyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PrE8tH0AAAGJSURBVHja7Jq/K4VRGMfPq0t5F3U3dRdhMtxBmfwNDBZZDCz+A6SEEqtRCIOSDCw2k0lRkpIfWW7Joqh7FeX1OXnVzeDt3lLn+Xaf+gx3uMOne875Puc5N0qSxClUkxMpGZFcpVKp+8txHAf1ixSgWWFpHcAi9FgWisrl8s+xdQ17sA131pZWtYivT7iEWTiCd0t75PfnImzAFLRbP37zMA3z0GU9R1pgDBagI/gcydpDMJzunQl4tZ7sI+kB0KrQovhlNqQg0gaT0KnQNPr0H1fpfkfTrDEv4kNyUOU+MpDmjHmRXuhXuSH2qYgUVUS6VUQKKiJ5FRGnIvKsIlJSEblVEblQETlVEDmDEwWRQ5cxvLMg8ui+58Xmc2QrtI1ej8gVrFlP9hdYgnvrIuuwb73X2oE5eAtVJGv2699OdmHGBTz3zRLxOeFfr5bhIfQ2PvdHi74Cq2luOGsiNT29hSpS82NoaCLncAybcAMfFq+6XsTPcZ+sClSLlJxARY2/OTVE/qe+BBgAWkdOeDEfg30AAAAASUVORK5CYII=");
                    background-size: 17rpx 17rpx;
                    background-repeat: repeat-y;
                    position: absolute;
                    left: 0;
                    top: 0;
                }
            }

            .coupon-detail-item-right {
                flex: 1;
                display: flex;
                flex-direction: column;
                padding-left: 20rpx;
                color: #333;
                position: relative;

                .item-right-name {
                    font-size: 30rpx;
                    margin-top: 20rpx;
                    padding-bottom: 15rpx;
                }

                .item-right-time {
                    font-size: 24rpx;
                    color: #999;
                }

                .tmcscoupon-item-btn {
                    width: 170rpx;
                    position: absolute;
                    right: 10rpx;
                    bottom: 20rpx;
                }
            }
        }
    }
}

/*通用暂无数据样式*/
.empty-box {
    background-color: #fff;
    padding: 60rpx 0;
}

.empty-box .pictrue {
    width: 200rpx;
    height: 200rpx;
    margin: 0 auto;
}

.empty-box .pictrue image {
    width: 100%;
    height: 100%;
}

.empty-box .txt {
    color: #999;
    text-align: center;
}

.coupon-box {
    display: flex;
    flex-direction: column;
    gap: 20rpx;
    padding: 30rpx;

    .grayScaleDiv {
        filter: grayscale(100%); /* 全部转为灰度 */
    }

    .coupon-item {
        box-shadow: 0px 0px 5px #f5f5f5;
        border-radius: 10rpx;
        box-sizing: border-box;
        background-color: #ffffff;
        position: relative;
        overflow: hidden;
        display: flex;
        justify-content: space-between;

        .left {
            padding: 30rpx;
            display: flex;
            flex-direction: column;
            width: 60%;

            .col-1 {
                display: flex;
                gap: 8px;
                align-items: center;
                width: 100%;
                margin-bottom: 10rpx;

                .tag {
                    background-color: var(--general);
                    color: white;
                    font-size: 18rpx;
                    border-radius: 5rpx;
                    padding: 2rpx 6rpx;
                    min-width: 70rpx;
                }

                .title {
                    font-weight: bold;
                    font-size: 28rpx;
                }
            }

            .col-2 {
                font-size: 24rpx;
                color: #333;
                margin-bottom: 20rpx;
            }

            .col-3 {
                font-size: 22rpx;
            }
        }

        .right {
            padding: 30rpx;
            display: flex;
            flex-direction: column;
            width: 40%;
            gap: 18rpx;
            justify-content: center;

            .right-1 {
                color: var(--general);
                display: flex;
                flex-direction: row;
                font-weight: bold;
                justify-content: center;
                align-items: flex-end;

                .zhekou {
                    font-size: 48rpx;
                    line-height: 1; /* 添加这行 */
                }

                .zhe {
                    margin-left: 8rpx;
                    font-size: 24rpx;
                    self-align: end; /* 添加这行 */
                }
            }

            .right-2 {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        .dotted-line {
            position: absolute;
            top: 20rpx;
            bottom: 20rpx;
            left: 60%;
            border-left: 1px dashed #ddd; /* 设置为虚线 */
            transform: translateX(-50%);
        }
    }

    .coupon-item::before {
        content: "";
        position: absolute;
        top: 0; /* 将圆形定位到元素顶部的60%位置 */
        left: 60%; /* 将圆形定位到元素左侧的50%位置 */
        transform: translate(-50%, -50%); /* 保证圆形正好在这个位置上 */
        width: 30rpx; /* 圆形的宽度，可以根据需要调整 */
        height: 30rpx; /* 圆形的高度，可以根据需要调整 */
        background-color: #f5f5f5; /* 圆形的颜色，可以根据需要调整 */
        border-radius: 50%; /* 使元素成为完美的圆形 */
    }

    .coupon-item::after {
        content: "";
        position: absolute;
        bottom: -30rpx; /* 将圆形定位到元素底部的40%位置 */
        left: 60%; /* 将圆形定位到元素左侧的50%位置 */
        transform: translate(-50%, -50%); /* 保证圆形正好在这个位置上 */
        width: 30rpx; /* 圆形的宽度，可以根据需要调整 */
        height: 30rpx; /* 圆形的高度，可以根据需要调整 */
        background-color: #f5f5f5; /* 圆形的颜色，可以根据需要调整 */
        border-radius: 50%; /* 使元素成为完美的圆形 */
    }

    .grayScaleDiv {
        .tag-box {
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translateX();
        }
    }
}
</style>
