<template>
    <view class="coupon-info">
        <template v-if="flowType != 3">
            <template v-if="configStore.useCoupon == 1">
                <view class="coupon">
                    <view class="coupon-title">{{ $t("优惠券") }}</view>
                    <view class="coupon-content" @click="handleCoupon">
                        <view class="coupon-text">{{ $t("优惠") + currency + couponAmount }}</view>
                        <image lazy-load class="more-ico" :src="staticResource('common/more.png')" />
                    </view>
                </view>
            </template>
            <template v-if="configStore.usePoints == 1">
                <view class="points">
                    <view class="points-title"
                        >{{ $t(configStore.integralName) }}
                        <view class="points-text"
                            >{{ $t(`当前账户${configStore.integralName}`) }}：<text class="special-text">{{ points }}</text>
                        </view>
                    </view>
                    <view class="points-content" @click="handlePoints">
                        <view v-if="pointsAmount > 0" class="points-text">{{ $t("共抵扣：") }}{{ currency + pointsAmount }}</view>
                        <view v-else-if="points === 0 && pointsAmount === 0" class="points-text">{{ $t(`暂无可用${configStore.integralName}`) }}</view>
                        <view v-else class="points-text">{{ `最多可用${availablePoints}${configStore.integralName}` }}</view>
                        <image lazy-load class="more-ico" :src="staticResource('common/more.png')" />
                    </view>
                </view>
            </template>
        </template>

        <template v-if="configStore.useSurplus == 1">
            <view class="balance">
                <view class="balance-title" @click="handleToBalance"
                    >{{ $t("余额") }}
                    <view class="balance-text"
                        >{{ $t("当前账户余额") }}：<text class="special-text">{{ balance }}</text></view
                    >
                </view>
                <switch :checked="isBalance" color="var(--general)" style="transform: scale(0.8)" @change="handleBalance" />
            </view>
        </template>
    </view>
    <tig-popup v-model:show="show" background-color="#fff">
        <scroll-view scroll-y="true" class="coupon-container">
            <view class="popup-title">{{ $t("优惠券") }}</view>
            <view class="coupon-menu">
                <view class="coupon-menu-item" :class="{ active: tabsActive === '可用优惠券' }" @click="handleTabsActive('可用优惠券')"
                    >{{ $t("可用优惠券") }}({{ couponListData!.enableCoupons.length }})</view
                >
                <view class="coupon-menu-item" :class="{ active: tabsActive === '不可用优惠券' }" @click="handleTabsActive('不可用优惠券')"
                    >{{ $t("不可用优惠券") }}({{ couponListData!.disableCoupons.length }})</view
                >
            </view>

            <view class="coupon-container-content">
                <template v-if="tabsActive === '可用优惠券'">
                    <view class="coupon-box">
                        <template v-for="(item, idx) in couponListData!.enableCoupons" :key="idx">
                            <view class="coupon-item" @click="handleCheck(item)">
                                <view class="coupon-click-area" />
                                <view class="left">
                                    <view class="col-1">
                                        <view class="title">{{ item.couponName }}</view>
                                    </view>
                                    <view v-if="item.couponDesc" class="col-2">
                                        {{ item.couponDesc }}
                                    </view>
                                    <view class="col-3" :class="{ 'special-col': !item.couponDesc }"> {{ $t("有效期：") }}{{ item.endDate }} </view>
                                </view>
                                <view class="right">
                                    <view class="right-1">
                                        <template v-if="item.couponType === 2">
                                            <view class="zhekou"> {{ item.couponDiscount }}</view>
                                            <view class="zhe">{{ $t("折") }}</view>
                                        </template>
                                        <template v-else>
                                            <format-price
                                                :font-style="{ fontSize: '48rpx', lineHeight: 1 }"
                                                :currency-style="{ selfAlign: 'end', fontSize: '24rpx' }"
                                                :price-data="item.couponMoney"
                                            />
                                        </template>
                                    </view>
                                    <view class="right-2">
                                        <!-- <tig-checkbox v-model:checked="item.selected"  @change="handleCheck(item)"/> -->
                                        <tig-checkbox :checked="item.selected" />
                                    </view>
                                </view>
                                <view class="dotted-line" />
                            </view>
                        </template>
                    </view>
                    <template v-if="couponListData!.enableCoupons.length === 0">
                        <view class="coupon-empty">{{ $t("暂无优惠券") }}</view>
                    </template>
                </template>
                <template v-if="tabsActive === '不可用优惠券'">
                    <view class="coupon-box">
                        <view v-for="(item, idx) in couponListData!.disableCoupons" :key="idx" class="coupon-item grayScaleDiv">
                            <view class="left">
                                <view class="col-1">
                                    <view class="title">{{ item.couponName }}</view>
                                </view>
                                <view v-if="item.disableReason" class="col-2">
                                    {{ item.disableReason }}
                                </view>
                                <view class="col-3" :class="{ 'special-col': !item.couponDesc }"> {{ $t("有效期：") }}{{ item.endDate }} </view>
                            </view>
                            <view class="right">
                                <view class="right-1">
                                    <template v-if="item.couponType === 2">
                                        <view class="zhekou"> {{ item.couponDiscount }}</view>
                                        <view class="zhe">{{ $t("折") }}</view>
                                    </template>
                                    <template v-else>
                                        <format-price
                                            :font-style="{ fontSize: '48rpx', lineHeight: 1 }"
                                            :currency-style="{ selfAlign: 'end', fontSize: '24rpx' }"
                                            :price-data="item.couponMoney"
                                        />
                                    </template>
                                </view>
                                <view class="right-2">
                                    <tig-checkbox v-model:checked="item.selected" :disabled="true" />
                                </view>
                            </view>
                            <view class="dotted-line" />
                        </view>
                    </view>
                    <template v-if="couponListData!.disableCoupons.length === 0">
                        <view class="coupon-empty">{{ $t("暂无优惠券") }}</view>
                    </template>
                </template>
            </view>
            <tig-fixed-placeholder background-color="#fff">
                <view class="btn-box">
                    <tig-button @click="handlecConfirm"> {{ $t("确定") }}</tig-button>
                </view>
            </tig-fixed-placeholder>
        </scroll-view>
    </tig-popup>

    <tig-popup v-model:show="showPoints" background-color="#f5f5f5">
        <view class="points-popup">
            <view class="popup-title">{{ $t(configStore.integralName) }}</view>
            <view class="form-usePoints">
                <uni-forms ref="pointsForm" :model-value="formData">
                    <uni-forms-item label-width="80" :label="$t(`使用${configStore.integralName}`)" name="usePoints">
                        <uni-easyinput
                            v-model="formData.usePoints"
                            primary-color="rgb(192, 196, 204)"
                            :input-border="false"
                            type="number"
                            :placeholder="$t(`请输入${configStore.integralName}`)"
                        />
                    </uni-forms-item>
                </uni-forms>
            </view>
            <tig-fixed-placeholder background-color="#fff">
                <view class="btn-box">
                    <tig-button @click="onSubmit"> {{ $t("确定") }}</tig-button>
                </view>
            </tig-fixed-placeholder>
        </view>
    </tig-popup>
</template>

<script lang="ts" setup>
import type { CouponList, EnableCoupon } from "@/types/order/check";
import { reactive, ref, watch } from "vue";
import { useConfigStore } from "@/store/config";
import { staticResource } from "@/utils";
import { useCurrency } from "@/hooks/useCurrency";
import { useI18n } from "vue-i18n";

const { t } = useI18n();

const configStore = useConfigStore();

const { currency } = useCurrency();

interface Props {
    couponList: CouponList;
    useCouponIds: number[];
    selectUserCouponIds: number[];
    couponAmount: number;
    balance: number | string;
    points: number;
    availablePoints: number;
    pointsAmount: number;
    usePoint: number;
    flowType: number;
}
const props = defineProps<Props>();
const emit = defineEmits(["update:useCouponIds", "sendBalanceStatus", "change", "update:usePoint", "update:selectUserCouponIds"]);

const selectedDatas = ref<EnableCoupon[]>([]);
const couponListData = ref<CouponList>({
    enableCoupons: [],
    disableCoupons: []
});
watch(
    () => couponListData,
    (newVal) => {
        selectedDatas.value = newVal.value.enableCoupons.filter((item) => item.selected);
    },
    {
        deep: true,
        immediate: true
    }
);
const show = ref(false);
const isBalance = ref(false); // 是否使余额
const tabsActive = ref("可用优惠券");
const handleTabsActive = (str: string) => {
    tabsActive.value = str;
};
const handleCoupon = () => {
    couponListData.value = JSON.parse(JSON.stringify(props.couponList));
    show.value = true;
};

const handleCheck = (item: any) => {
    item.selected = !item.selected;

    if (item.selected) {
        // 处理选中逻辑
        handleSelectCoupon(item);
    } else {
        // 处理取消选中逻辑
        handleUnselectCoupon(item);
    }
};

/**
 * 处理优惠券选中逻辑
 * @param item 选中的优惠券
 */
const handleSelectCoupon = (item: any) => {
    // 处理同店铺已选中的优惠券
    const sameShopCouponIndex = selectedDatas.value.findIndex((data) => data.shopId === item.shopId);
    if (sameShopCouponIndex > -1) {
        // 移除同店铺已选优惠券
        removeSelectedCouponsByShopId(item.shopId);
        // 取消同店铺其他优惠券的选中状态
        updateCouponSelectionByShopId(item.shopId, item.userCouponId, false);
    }
    // 处理不同店铺但同种优惠券
    else {
        const sameShopCouponIndex = selectedDatas.value.findIndex((data) => data.id === item.id);
        if (sameShopCouponIndex > -1) {
            // 移除同种优惠券
            removeSelectedCouponsById(item.id);
            // 取消同种优惠券的选中状态
            updateCouponSelectionById(item.id, item.userCouponId, false);
        } else {
            // 将当前优惠券添加到选中数组
            selectedDatas.value.push(item);
        }
        selectedDatas.value.push(item);
    }
};

/**
 * 处理优惠券取消选中逻辑
 * @param item 取消选中的优惠券
 */
const handleUnselectCoupon = (item: any) => {
    // 从选中数组中移除当前优惠券
    selectedDatas.value = selectedDatas.value.filter(({ id }) => id !== item.id);
};

/**
 * 根据店铺ID移除已选优惠券
 * @param shopId 店铺ID
 */
const removeSelectedCouponsByShopId = (shopId: any) => {
    selectedDatas.value = selectedDatas.value.filter((data) => data.shopId !== shopId);
};

/**
 * 根据优惠券ID移除已选优惠券
 * @param couponId 优惠券ID
 */
const removeSelectedCouponsById = (couponId: any) => {
    selectedDatas.value = selectedDatas.value.filter((data) => data.id !== couponId);
};

/**
 * 更新同店铺优惠券的选中状态
 * @param shopId 店铺ID
 * @param excludeUserCouponId 排除的用户优惠券ID
 * @param selected 选中状态
 */
const updateCouponSelectionByShopId = (shopId: any, excludeUserCouponId: any, selected: boolean) => {
    couponListData.value!.enableCoupons.forEach((data) => {
        if (data.shopId === shopId && data.userCouponId !== excludeUserCouponId) {
            data.selected = selected;
        }
    });
};

/**
 * 更新同种优惠券的选中状态
 * @param couponId 优惠券ID
 * @param excludeUserCouponId 排除的用户优惠券ID
 * @param selected 选中状态
 */
const updateCouponSelectionById = (couponId: any, excludeUserCouponId: any, selected: boolean) => {
    couponListData.value!.enableCoupons.forEach((data) => {
        if (data.id === couponId && data.userCouponId !== excludeUserCouponId) {
            data.selected = selected;
        }
    });
};

const handlecConfirm = () => {
    let selectedIds: any = [],
        selectedUserCouponIds: any = [];
    if (selectedDatas.value.length > 0) {
        selectedIds = selectedDatas.value.map(({ id }) => id);
        selectedUserCouponIds = selectedDatas.value.map(({ userCouponId }) => userCouponId);
    }
    emit("update:useCouponIds", selectedIds);
    emit("update:selectUserCouponIds", selectedUserCouponIds);
    emit("change");
    show.value = false;
};

const showPoints = ref(false);
const formData = reactive({
    usePoints: 0
});
const pointsForm = ref();
const rules = {
    usePoints: {
        rules: [
            { required: true, errorMessage: t(`请输入${configStore.integralName}`) },
            {
                validateFunction: function (rule: any, value: number, data: any, callback: any) {
                    if (value > props.availablePoints) callback(t(`${configStore.integralName}不能大于可用${configStore.integralName}`));
                    if (value < 0) callback(t(`${configStore.integralName}不能小于0`));
                    return true;
                }
            }
        ]
    }
};
watch(showPoints, (value) => {
    if (value) {
        setTimeout(() => {
            pointsForm.value.setRules(rules);
        }, 1000);
    }
});

const handlePoints = () => {
    if (props.points === 0 && props.pointsAmount === 0) {
        return uni.showToast({
            title: t(`暂无可用${configStore.integralName}`),
            duration: 1500,
            icon: "none"
        });
    }
    showPoints.value = true;
    formData.usePoints = props.usePoint;
};

const onSubmit = () => {
    pointsForm.value
        .validate()
        .then((res: any) => {
            if (!formData.usePoints) {
                formData.usePoints = 0;
            }
            emit("update:usePoint", Number(formData.usePoints));
            emit("change");

            showPoints.value = false;
        })
        .catch((err: any) => {
            console.log("表单错误信息：", err);
        });
};

const handleBalance = () => {
    isBalance.value = !isBalance.value;
    emit("sendBalanceStatus", isBalance.value);
};

const handleToBalance = () => {
    uni.navigateTo({
        url: "/pages/user/account/index"
    });
};

defineExpose({
    isBalance
});
</script>

<style lang="scss" scoped>
.margin {
    margin-top: 20rpx;
}

.btn-box {
    padding: 25rpx;
}

.coupon-info {
    overflow: hidden;
    border-radius: 18rpx;
    margin-top: 20rpx;
    padding: 30rpx 0;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    row-gap: 30rpx;
}

.coupon {
    border-radius: 18rpx 18rpx 0 0;
    padding: 0 32rpx;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;

    .coupon-content {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .more-ico {
        width: 36rpx;
        height: 36rpx;
        padding-left: 10rpx;
    }
}
.points {
    padding: 0 32rpx;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;

    .points-content {
        display: flex;
        align-items: center;
        justify-content: center;

        .points-text {
            font-size: 26rpx;
            max-width: 300rpx;
        }
    }
    .more-ico {
        width: 36rpx;
        height: 36rpx;
        padding-left: 10rpx;
    }
}

.balance {
    border-radius: 0 0 18rpx 18rpx;
    padding: 0 32rpx;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.coupon-list {
    height: 100%;
}

.coupon-btn {
    width: 76rpx;
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
.isZh {
    .points-title {
        .points-text {
            max-width: 150rpx;
        }
    }
}
.points-title {
    display: flex;

    .points-text {
        font-size: 22rpx;
        padding-left: 15rpx;
        display: flex;
        align-items: flex-end;
    }
}
.special-text {
    color: var(--general);
}

.points-popup {
    // padding: 30rpx 0;
    height: 50vh;
    .points-popup-text {
        padding-top: 20rpx;
        margin-left: 40rpx;

        .text-clolor {
            color: #09f;
        }
    }

    .form-usePoints {
        background-color: #fff;
        margin: 20rpx;
        padding: 0 20rpx;
        :deep(.uni-forms-item__label) {
            height: 50px;
        }
        :deep(.uni-easyinput) {
            height: 100%;
            .uni-easyinput__content {
                height: 100%;
            }
        }
    }
}

.coupon-container {
    height: 60vh;
    width: 100%;
    border-radius: 18rpx 18rpx 0 0;
    overflow: hidden;

    .coupon-menu {
        height: 100rpx;
        width: 100%;
        background-color: #fff;
        display: flex;
        align-items: center;
        box-sizing: content-box;
        margin-bottom: 15rpx;

        .coupon-menu-item {
            flex: 1;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28rpx;
            color: #999;
            position: relative;

            &.active {
                color: #333;
                font-weight: bold;

                &:after {
                    content: "";
                    position: absolute;
                    bottom: 0;
                    height: 5rpx;
                    width: 80rpx;
                    background-color: var(--general);
                    border-radius: 10rpx;
                }
            }
        }
    }
}

.coupon-empty {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 300rpx;
}

.coupon-box {
    display: flex;
    flex-direction: column;
    gap: 20rpx;
    padding: 10rpx 30rpx;

    .coupon-item {
        box-shadow: 0px 0px 5px #f5f5f5;
        border-radius: 10rpx;
        box-sizing: border-box;
        background-color: var(--tag-bg);
        color: var(--tag-text);
        position: relative;
        overflow: hidden;
        display: flex;
        justify-content: space-between;

        .coupon-click-area {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1;
        }

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
            gap: 16rpx;
            justify-content: center;

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
}
.grayScaleDiv {
    filter: grayscale(100%); /* 全部转为灰度 */
}
</style>
