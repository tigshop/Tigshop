<template>
    <tig-popup v-model:show="showCoupon" :z-index="999" :show-close="false" background-color="#fff">
        <view class="coupon-content">
            <view class="coupon-title">{{ $t("优惠") }}</view>
            <scroll-view scroll-y="true" class="promotion-box">
                <view class="promotion-content">
                    <!-- 限时折扣 -->
                    <template v-if="false">
                        <view class="discount-box">
                            <view class="discount-title">
                                {{ $t("使用以下优惠，预计到手") }}
                                <format-price
                                    :show-text="false"
                                    :font-style="{ fontSize: '23rpx', fontWeight: '400', color: 'var(--general)' }"
                                    price-data="18"
                                />
                                <text @click="handleShowOfferDetail"
                                    >，{{ $t("优惠明细") }} <text class="iconfont-h5 icon-xiajiantou1-copy" :class="{ rotate: showOfferDetail }"
                                /></text>
                            </view>
                            <view v-if="showOfferDetail" class="discount-content">
                                <view class="discount-item">
                                    <view class="discount-item-label">{{ $t("限时活动价格共计：") }}</view>
                                    <view class="discount-item-content"
                                        ><format-price :show-text="false" :font-style="{ fontSize: '23rpx', fontWeight: '400' }" price-data="18"
                                    /></view>
                                </view>
                            </view>
                        </view>
                    </template>
                    <template v-if="activityList.length > 0 || giftList.length > 0">
                        <view class="activity-box">
                            <view class="public-title">{{ $t("促销") }}</view>
                            <template v-if="activityList.length > 0">
                                <view v-for="item in activityList" :key="item.promotionId" class="activity-item">
                                    <view class="activity-item-label">{{ activitTextMap[item.type] }}</view>
                                    <view class="activity-item-value">
                                        <view class="activity-item-name">{{ item.data.promotionName }}</view>
                                        <view class="activity-item-time">{{ item?.data?.startTime }}~{{ item.data.endTime }}</view>
                                    </view>
                                </view>
                            </template>
                            <template v-for="giftItem in giftList" v-if="giftList.length > 0" :key="giftItem.promotionId">
                                <view v-for="item in giftItem.data.promotionDesc" :key="item.giftId" class="activity-item">
                                    <view class="activity-item-label">{{ $t("满赠") }}</view>
                                    <view class="activity-product">
                                        <view class="activity-name">
                                            {{ item.desc }}
                                        </view>
                                        <scroll-view class="scroll-x" scroll-x="true">
                                            <view class="activity-product-item" @click="handleLink(item.gift.productInfo.productId)">
                                                <tig-image :src="item.gift.productInfo.picThumb" class="gift-img" />
                                                <view class="gift-price">
                                                    <format-price
                                                        :show-text="false"
                                                        :font-style="{ fontSize: '18rpx', fontWeight: 'bold' }"
                                                        :is-bottom="false"
                                                        :price-data="item.gift.productInfo.productPrice"
                                                    />
                                                </view>
                                            </view>
                                        </scroll-view>
                                    </view>
                                </view>
                            </template>
                        </view>
                    </template>
                    <template v-if="couponList.length > 0">
                        <view class="coupon-box">
                            <view class="public-title">{{ $t("可领优惠券") }}</view>
                            <view v-for="item in couponList" :key="item.couponId" class="coupon-item">
                                <view class="left">
                                    <view class="col-1">
                                        <view class="title">{{ item.couponName }}</view>
                                    </view>
                                    <view v-if="item.couponDesc" class="col-2">
                                        {{ item.couponDesc }}
                                    </view>
                                    <view v-if="item.sendType === 1" class="col-3" :class="{ 'special-col': !item.couponDesc }">
                                        {{ $t("有效期") }}：{{ item.useEndDate }}
                                    </view>
                                    <view v-if="item.sendType === 0 && item.delayDay > 0" class="col-3" :class="{ 'special-col': !item.couponDesc }">
                                        {{ `领券${item.delayDay}天后生效，有效期${item.useDay}天` }}
                                    </view>
                                    <view v-if="item.sendType === 0 && item.delayDay === 0" class="col-3" :class="{ 'special-col': !item.couponDesc }">
                                        {{ `领券当日起${item.useDay}天内可用` }}
                                    </view>
                                </view>
                                <view class="right">
                                    <view class="right-1">
                                        <template v-if="item.couponType === 2">
                                            <view class="zhekou"> {{ item.couponDiscount }}</view>
                                            <view class="zhe">{{ $t("折") }}</view>
                                        </template>
                                        <template v-else>
                                            <format-price
                                                :show-text="false"
                                                :font-style="{ fontSize: '48rpx', lineHeight: 1, fontWeight: '400' }"
                                                :currency-style="{ selfAlign: 'end', fontSize: '28rpx' }"
                                                :price-data="item.couponMoney"
                                            />
                                        </template>
                                    </view>
                                    <template v-if="couponStatus(item.isReceive!, item.limitNum, item.receiveNum) !== '已领取'">
                                        <view class="right-2">
                                            <view
                                                ><tig-button :custom-style="{ height: '55rpx' }" @click="getCoupon(item)">
                                                    {{ couponStatus(item.isReceive!, item.limitNum, item.receiveNum) }}
                                                </tig-button>
                                            </view>
                                        </view>
                                    </template>
                                    <template v-else>
                                        <view class="already-received-box">
                                            <view class="already-received-content">
                                                <view class="already-received-text">{{ couponStatus(item.isReceive!, item.limitNum, item.receiveNum) }}</view>
                                            </view>
                                        </view>
                                    </template>
                                </view>
                                <view class="dotted-line" />
                            </view>
                        </view>
                    </template>
                    <tig-fixed-placeholder background-color="#fff">
                        <view class="btn-box">
                            <tig-button @click="$emit('update:modelValue', false)"> {{ $t("我知道了") }} </tig-button>
                        </view>
                    </tig-fixed-placeholder>
                </view>
            </scroll-view>
        </view>
    </tig-popup>
</template>

<script setup lang="ts">
import { computed, ref, watch } from "vue";
import type { PropType } from "vue";
import type { SkuPromotion } from "@/types/product/product";
import { addCoupon } from "@/api/coupon/coupon";
import type { ProductCouponItem } from "@/types/product/product";
import { getProductCouponList } from "@/api/product/product";
import { useI18n } from "vue-i18n";

const { t } = useI18n();

const props = defineProps({
    modelValue: {
        type: Boolean,
        default: false
    },
    promotionList: {
        type: Array as PropType<SkuPromotion[]>,
        default: () => []
    },
    productId: {
        type: Number,
        default: 0
    }
});
console.log(props.promotionList);
const emit = defineEmits(["update:modelValue"]);
const showCoupon = computed({
    get() {
        return props.modelValue;
    },
    set(value) {
        emit("update:modelValue", value);
    }
});

interface ActivitTextMap {
    [key: number]: string;
}

const activitTextMap: ActivitTextMap = {
    3: t("满减"),
    4: t("满折"),
    5: t("满赠")
};

const activityList = computed(() => {
    return props.promotionList.filter((item) => item.type === 3 || item.type === 4);
});
const giftList = computed(() => {
    return props.promotionList.filter((item) => item.type === 5);
});

const showOfferDetail = ref(false);
const handleShowOfferDetail = () => {
    showOfferDetail.value = !showOfferDetail.value;
};

const getCoupon = async (value: any) => {
    if (value.isReceive === 1 && value.limitNum > 0 && value.receiveNum >= value.limitNum) return;
    try {
        await addCoupon({ couponId: value.couponId });
        uni.showToast({
            title: t("领取成功"),
            duration: 1000
        });
        setTimeout(() => {
            getCouponList();
        }, 500);
    } catch (error: any) {
        console.log("error", error);
        uni.showToast({
            title: error.message,
            icon: "none"
        });
    }
};
const couponStatus = (isReceive: number, limitNum: number, receiveNum: number) => {
    if (limitNum === 0) {
        if (isReceive === 1) {
            return "已领取";
        } else if (receiveNum > 0) {
            return "再次领取";
        } else {
            return "马上领";
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
const couponList = ref<ProductCouponItem[]>([]);
const getCouponList = async () => {
    try {
        const result = await getProductCouponList(Number(props.productId));
        couponList.value = result;
    } catch (error: any) {
        console.error(error.message);
    }
};

const handleLink = (id: number) => {
    uni.navigateTo({
        url: `/pages/product/index?id=${id}`
    });
};

watch(
    () => props.productId,
    (newValue) => {
        if (newValue && newValue > 0) {
            getCouponList();
        }
    }
);
</script>

<style lang="scss" scoped>
.btn-box {
    padding: 25rpx;
}
.coupon-content {
    height: 60vh;
    overflow: hidden;
    overflow-y: auto;

    .public-title {
        font-size: 23rpx;
        padding-bottom: 20rpx;
    }

    .coupon-title {
        height: 84rpx;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28rpx;
    }
    .promotion-box {
        height: calc(100% - 84rpx);

        .promotion-content {
            padding: 0 28rpx;
        }
    }
    .discount-box {
        font-size: 23rpx;
        border-bottom: 1px solid #ebedf0;
        margin-bottom: 20rpx;
        .discount-title {
            margin-bottom: 20rpx;
            .icon-xiajiantou1-copy {
                display: inline-block;
                transform: translate(-7rpx, 6rpx);
                transition: all 0.3s;

                &.rotate {
                    transform: translate(-7rpx, 6rpx) rotate(180deg);
                }
            }
        }

        .discount-content {
            font-size: 23rpx;
            padding-bottom: 20rpx;

            .discount-item {
                display: flex;
                justify-content: space-between;
                margin-bottom: 12rpx;

                .discount-item-label {
                    color: #969799;
                }
            }
        }
    }

    .activity-box {
        padding-bottom: 20rpx;
        .activity-item {
            min-height: 145rpx;
            background-color: var(--tag-bg);
            width: 100%;
            display: flex;
            align-items: center;
            overflow: hidden;
            border-radius: 16rpx;
            margin-bottom: 20rpx;
            .activity-item-label {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 180rpx;
                color: var(--tag-text);
                font-size: 32rpx;
            }

            .activity-item-value {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: start;

                .activity-item-name {
                    font-size: 24rpx;
                    margin-bottom: 20rpx;
                }
                .activity-item-time {
                    font-size: 20rpx;
                    color: #969799;
                }
            }

            .activity-product {
                font-size: 24rpx;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: start;
                width: calc(100% - 180rpx);
                .activity-name {
                    padding: 15rpx 0;
                }

                .scroll-x {
                    width: 100%;
                    display: flex;
                    align-items: center;
                    height: 105rpx;
                    padding-bottom: 20rpx;
                    .activity-product-item {
                        max-width: 105rpx;
                        max-height: 105rpx;
                        width: 14.933vw;
                        height: 14.933vw;
                        border-radius: 8rpx;
                        overflow: hidden;
                        position: relative;
                        .gift-img {
                            height: 100%;
                            width: 100%;
                        }

                        .gift-price {
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            width: 100%;
                            height: 28rpx;
                            background-color: rgba(0, 0, 0, 0.24);
                            color: #fff;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-weight: bold;
                        }
                    }
                }
            }
        }
    }
}

.coupon-box {
    .coupon-item {
        border-radius: 10rpx;
        box-sizing: border-box;
        background-color: var(--tag-bg);
        color: var(--tag-text);
        position: relative;
        overflow: hidden;
        display: flex;
        justify-content: space-between;
        margin-bottom: 20rpx;

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
                    overflow: hidden; /* 隐藏超出 div 元素的内容 */
                    white-space: nowrap; /* 防止文本在 div 內换行 */
                    text-overflow: ellipsis; /* 当内容超出 div 元素时显示省略号 */
                }
            }

            .col-2 {
                font-size: 24rpx;
                color: #333;
                margin-bottom: 20rpx;
            }

            .col-3 {
                font-size: 22rpx;
                color: #969799;

                &.special-col {
                    margin-top: 30rpx;
                }
            }
        }

        .right {
            padding: 30rpx;
            display: flex;
            flex-direction: column;
            width: 40%;
            gap: 18rpx;
            justify-content: center;
            position: relative;

            .right-1 {
                color: var(--tag-text);
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
            }

            .already-received-box {
                position: absolute;
                top: -24rpx;
                right: -14rpx;
                width: 80rpx;
                height: 80rpx;
                font-size: 20rpx;

                .already-received-content {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 100%;
                    height: 100%;
                    border-radius: 50%;
                    border: 0.5px solid;
                    border-color: var(--ump-icon);
                    opacity: 0.5;

                    .already-received-text {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 68rpx;
                        height: 68rpx;
                        border-radius: 50%;
                        background-color: var(--ump-icon);
                        color: #fff;
                        transform: rotate(12deg);
                    }
                }
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
        background-color: #fff; /* 圆形的颜色，可以根据需要调整 */
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
        background-color: #fff; /* 圆形的颜色，可以根据需要调整 */
        border-radius: 50%; /* 使元素成为完美的圆形 */
    }
}
</style>
