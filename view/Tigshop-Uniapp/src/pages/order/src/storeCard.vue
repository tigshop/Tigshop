<template>
    <view v-for="(item, index) in cartList" :key="index" class="store-card">
        <view class="store-card-item">
            <view class="store-card-item-title">
                <view v-if="item.shopId === 0" class="store-card-item-label">{{ $t("自营") }}</view>
                <view class="store-card-item-name">{{ item.shopId === 0 ? $t("自营") : item.shopTitle }}</view>
            </view>
            <template v-for="(subItem, subIndex) in item.carts" :key="subIndex">
                <view class="store-card-item-content">
                    <view class="content-item" @click="handleLink(`/pages/product/index?id=`, subItem.productId)">
                        <view class="store-card-item-content-left">
                            <tig-image class="store-card-item-img" :src="subItem.picThumb" />
                        </view>
                        <view class="store-card-item-content-right">
                            <view class="store-card-item-content-right-title line2">{{ subItem.productName }}</view>
                            <template v-if="subItem.skuData.length > 0">
                                <view class="sku-card">
                                    <template v-for="(skuItem, skuIndex) in subItem.skuData" :key="skuIndex">
                                        <view class="sku-item">{{ skuItem.value }}</view>
                                    </template>
                                </view>
                            </template>
                            <template v-if="subItem.activityInfo && activityList(subItem.activityInfo).length > 0">
                                <view class="activity-box">
                                    <template v-for="(activityItem, activityIndex) in activityList(subItem.activityInfo)" :key="activityIndex">
                                        <activityCard font-size="22rpx" :activity-info="activityItem" card-type="sub" />
                                    </template>
                                </view>
                            </template>
                            <view class="right-price-box" :style="{ marginTop: getPriceMargin(subItem) + 'rpx' }">
                                <view class="store-card-item-content-right-price">
                                    <format-price
                                        :font-style="{ fontWeight: 'bold' }"
                                        :decimals-style="{
                                            fontSize: '20rpx',
                                            fontWeight: 'bold'
                                        }"
                                        :currency-style="{
                                            fontSize: '20rpx',
                                            fontWeight: 'bold'
                                        }"
                                        :price-data="subItem.price"
                                    />
                                    <template v-if="subItem.originPrice && subItem.originPrice !== subItem.price">
                                        <format-price
                                            :font-style="{
                                                fontWeight: '400',
                                                textDecoration: 'line-through',
                                                fontSize: '19rpx',
                                                color: '#969799',
                                                position: 'relative',
                                                bottom: '-2px',
                                                left: '5px'
                                            }"
                                            :is-bottom="false"
                                            :price-data="subItem.originPrice"
                                        />
                                    </template>
                                </view>
                                <view class="store-card-item-content-right-num"> x{{ subItem.quantity }}</view>
                            </view>
                        </view>
                    </view>
                </view>
                <template v-if="subItem.extraSkuAllData && subItem.extraSkuAllData.extra && subItem.extraSkuAllData.extra.length">
                    <view class="attr-box" @click="handleShowAttr(subItem)">
                        <view class="attr-label">附加</view>
                        <template v-if="subItem.extraSkuData && subItem.extraSkuData.length">
                            <view class="attr-list">
                                <template v-for="(attr, attrIndex) in subItem.extraSkuData" :key="attrIndex">
                                    <view class="attr-item">
                                        <!-- <view class="sub-title">{{ attr.attrName }}</view> -->
                                        <view class="item-content">
                                            <text class="line1 content-text">{{ attr.attrValue }}</text>
                                            <view class="right">
                                                <format-price class="price" :price-data="attr.attrPrice" />
                                                <view class="num">x{{ subItem.quantity }}</view>
                                            </view>
                                        </view>
                                    </view>
                                </template>
                            </view>
                        </template>
                        <template v-else>
                            <view>{{ $t("可选附加规格") }}</view>
                        </template>

                        <text class="iconfont-h5 icon-xiajiantou1-copy" />
                    </view>
                </template>
            </template>
            <template v-if="item.gift && item.gift.length > 0">
                <view class="gift-box">
                    <view class="gift-title">{{ $t("赠品") }}</view>
                    <view class="gift-content">
                        <view v-for="(subItem, giftIndex) in item.gift" :key="giftIndex" class="gift-content-item">
                            <view class="gift-item-left">
                                <tig-image :src="subItem.picThumb" class="gift-img" />
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

            <view class="payment">
                <view class="payment-title">{{ $t("配送方式") }}</view>
                <view class="payment-content" @click="handleDistributionMode(item.shopId, item.noShipping)">
                    <view class="payment-text">{{ getShippingTypeText(item.shopId, item.noShipping) }}</view>
                    <!-- <image lazy-load class="more-ico" :src="staticResource('common/more.png')" /> -->
                </view>
            </view>
        </view>
    </view>

    <tig-popup v-model:show="show">
        <view class="payment-popup">
            <view class="popup-title title">{{ $t("选择配送方式") }}</view>
            <view class="payment-btn">
                <template v-for="(item, index) in shippingTypeList[shippingTypeKey]" :key="index">
                    <view
                        class="payment-btn-item"
                        :class="{ active: getActive(index, item.shippingTypeId) }"
                        @click="handleShippingType(index, item.shippingTypeId)"
                        >{{ $t(item?.shippingTypeName) }}</view
                    >
                </template>
            </view>
            <view class="payment-desc">
                <view class="payment-desc-title">{{ $t(currentShippingType?.shippingTypeName || "") }}</view>
                <view class="payment-desc-text"> {{ $t(currentShippingType?.shippingTimeDesc || "") }} </view>
            </view>

            <tig-fixed-placeholder background-color="#fff">
                <view class="btn-box">
                    <tig-button @click="handlecConfirm"> {{ $t("提交") }}</tig-button>
                </view>
            </tig-fixed-placeholder>
        </view>
    </tig-popup>

    <tig-popup v-model:show="showAttr">
        <view class="attribute">
            <view class="popup-title title">{{ $t("附加") }}</view>
            <view class="attribute-list">
                <template v-for="(item, index) in currentAttr.extraSkuAllData?.extra" :key="index">
                    <view class="attribute-item">
                        <view class="item-title">{{ item.attrName }}</view>
                        <view class="item-content">
                            <template v-for="subItem in item.attrList" :key="subItem.attributesId">
                                <view class="item-attr-box">
                                    <view
                                        class="item-attr"
                                        :class="{ checked: checkedAttrs[index] === subItem.attributesId }"
                                        @click.stop="handleAttrClick(index, subItem.attributesId)"
                                    >
                                        <view class="label">
                                            {{ subItem.attrValue }}
                                        </view>
                                        <view class="line-box" />
                                        <format-price class="value" :price-data="subItem.attrPrice" />
                                    </view>
                                </view>
                            </template>
                        </view>
                    </view>
                </template>
            </view>

            <tig-fixed-placeholder background-color="#fff">
                <view class="attribute-btn">
                    <view class="desc">{{ `已选择${checkedAttrs.length}种` }}</view>
                    <view class="">
                        <tig-button style="width: 400rpx; height: 80rpx" @click="handleAttribute"> {{ $t("确定") }}</tig-button>
                    </view>
                </view>
            </tig-fixed-placeholder>
        </view>
    </tig-popup>
</template>

<script setup lang="ts">
import { computed, ref } from "vue";
import type { CartList, ShippingTypeItem } from "@/types/order/check";
import activityCard from "@/components/masonry/activityCard.vue";
import { useI18n } from "vue-i18n";

const { t } = useI18n();

interface Props {
    cartList: CartList[];
    shippingTypeList: { [key: string]: ShippingTypeItem[] };
    shippingType: {
        [key: string]: {
            typeId: number;
            shopId: number;
            typeName: string;
        };
    };
}
const props = defineProps<Props>();
const emit = defineEmits(["update:shippingType", "change", "changeProductExtra"]);
const show = ref(false);
const shippingTypeKey = ref(0);
const currentShippingType = computed<ShippingTypeItem | null>(() => {
    return props.shippingTypeList && props.shippingTypeList[shippingTypeKey.value] && props.shippingTypeList[shippingTypeKey.value][currentIndex.value]
        ? props.shippingTypeList[shippingTypeKey.value][currentIndex.value]
        : null;
});
const getShippingTypeText = (id: number, noShipping: number) => {
    return noShipping === 1 ? t("无需配送") : (props.shippingType && props.shippingType[id] && props.shippingType[id].typeName) || t("该收货地址不支持配送");
};

const handleDistributionMode = (id: number, noShipping: number) => {
    if (noShipping === 1)
        return uni.showToast({
            title: t("无需配送"),
            duration: 1500,
            icon: "none"
        });

    if (!props.shippingTypeList[id] || props.shippingTypeList[id].length === 0) {
        return uni.showToast({
            title: t("该收货地址不支持配送"),
            duration: 1500,
            icon: "none"
        });
    }
    // show.value = true;
    // shippingTypeKey.value = id;
};

const currentIndex = ref(0);
const getActive = (index: number, id: number) => {
    if (currentTypeID.value) {
        return currentTypeID.value === id;
    } else {
        return props.shippingType[shippingTypeKey.value]?.typeId === id;
    }
};
const currentTypeID = ref<null | number>();
const handleShippingType = (index: number, id: number) => {
    currentIndex.value = index;
    currentTypeID.value = id;
};
const handlecConfirm = () => {
    const list = JSON.parse(JSON.stringify(props.shippingType));
    const { shippingTypeId, shippingTypeName } = props.shippingTypeList[shippingTypeKey.value][currentIndex.value];
    list[shippingTypeKey.value].shopId = shippingTypeKey.value;
    list[shippingTypeKey.value].typeId = shippingTypeId;
    list[shippingTypeKey.value].typeName = shippingTypeName;
    emit("update:shippingType", list);
    emit("change");
    show.value = false;
};

const activityList = (data: any): any[] => {
    return data.filter((item: any) => item.type === 1 || item.type === 6);
};

const getPriceMargin = (data: any) => {
    if (data.skuData.length > 0 && data.activityInfo && activityList(data.activityInfo).length > 0) {
        return 0;
    } else if (data.skuData.length === 0 && (!data.activityInfo || activityList(data.activityInfo).length === 0)) {
        return 55;
    } else {
        return 10;
    }
};
const handleLink = (url: string, id: number) => {
    if (id === 0) return;
    uni.navigateTo({
        url: url + id
    });
};

const showAttr = ref(false);
const currentAttr = ref<any>({});
const checkedAttrs = ref<any[]>([]);
const handleShowAttr = (item: any) => {
    currentAttr.value = item;
    checkedAttrs.value = item.extraSkuData.length ? item.extraSkuData.map((item: any) => item.attributesId) : [];
    showAttr.value = true;
    // console.log("currentAttr.value", currentAttr.value);
};
const handleAttrClick = (index: number, id: number) => {
    if (checkedAttrs.value[index] && checkedAttrs.value[index] === id) {
        checkedAttrs.value[index] = null;
    } else {
        checkedAttrs.value[index] = id;
    }
    // console.log("checkedAttrs.value", checkedAttrs.value);
};
const handleAttribute = () => {
    // console.log("currentAttr", currentAttr.value.cartId);
    // console.log("checkedAttrs.value", checkedAttrs.value.join(","));
    emit("changeProductExtra", {
        cartId: currentAttr.value.cartId,
        extraAttrIds: checkedAttrs.value.filter((item) => !!item).join(",")
    });
    showAttr.value = false;
};
</script>

<style lang="scss" scoped>
.attribute {
    min-height: 50vh;
    padding: 0rpx 40rpx 65px;
    overflow: hidden;
    overflow-y: auto;
    .title {
        padding-left: 0;
        height: 90rpx;
        line-height: 90rpx;
        padding-bottom: 40rpx;
    }
    .attribute-list {
        .attribute-item {
            .item-title {
                font-size: 24rpx;
                font-weight: 600;
                color: #212121;
                padding-bottom: 20rpx;
            }

            .item-content {
                display: flex;
                flex-direction: column;
                gap: 20rpx;
                padding-bottom: 30rpx;
                .item-attr-box {
                    display: flex;
                    .item-attr {
                        display: flex;
                        padding: 10rpx 25rpx;
                        background-color: #f2f2f2;
                        border-radius: 50rpx;
                        font-size: 24rpx;
                        align-items: center;
                        .line-box {
                            padding: 0 15rpx;
                            position: relative;
                            height: 100%;
                            &::after {
                                content: "";
                                display: block;
                                width: 1px;
                                height: 70%;
                                background-color: #bbbbbb;
                                position: absolute;
                                top: 50%;
                                transform: translateY(-50%);
                            }
                        }
                        &.checked {
                            color: var(--general);
                            background-color: var(--vice-bg);
                            .line-box {
                                &::after {
                                    background-color: var(--general);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    .attribute-btn {
        height: 100%;
        width: 100%;
        padding: 20rpx 0;
        padding-left: 70rpx;
        padding-right: 10rpx;
        display: flex;
        justify-content: space-between;
        align-items: center;

        .desc {
            font-size: 30rpx;
        }
    }
}

.attr-box {
    padding-top: 10rpx;
    display: flex;
    justify-content: space-between;
    position: relative;
    padding-right: 30rpx;
    .more-ico {
        width: 36rpx;
        height: 36rpx;
        padding-left: 10rpx;
    }

    .icon-xiajiantou1-copy {
        position: absolute;
        top: 13rpx;
        right: -5rpx;
        transform: rotate(-90deg);
    }
}
.attr-list {
    flex: 1;
    overflow: hidden;
    .attr-item {
        display: flex;
        // justify-content: space-between;
        align-items: center;
        height: 36rpx;
        line-height: 36rpx;
        .sub-title {
            padding-right: 30rpx;
        }
        .item-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            overflow: hidden;

            .content-text {
                flex: 1;
                text-align: end;
            }
            .right {
                display: flex;
                padding-left: 10rpx;
                color: #242424;
                .num {
                    padding-left: 10rpx;
                }
            }
        }
    }
}

.sku-card {
    display: inline-flex;
    font-size: 22rpx;
    border-radius: 5rpx;
    color: #969799;
    margin: 10rpx 0;

    .sku-item {
        width: auto;
        max-width: none;
    }
}

.activity-box {
    margin-bottom: 10rpx;
}

.gift-box {
    margin-top: 10rpx;
    padding-top: 15rpx;
    font-size: 26rpx;
    position: relative;

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

.btn-box {
    padding: 25rpx;
}
.payment {
    border-radius: 18rpx;
    background: #fff;
    padding: 30rpx 0rpx 15rpx;
    display: flex;
    justify-content: space-between;
    align-items: center;

    .payment-content {
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

.payment-popup {
    padding: 40rpx 40rpx 65px;
    height: 50vh;
    .title {
        padding-left: 0;
        height: 90rpx;
        line-height: 50rpx;
        padding-bottom: 40rpx;
    }

    .payment-btn {
        margin-bottom: 40rpx;
        .payment-btn-item {
            background: #f2f2f2;
            color: #282828;
            padding: 13rpx 36rpx;
            border-radius: 50rpx;
            font-size: 25rpx;
            display: inline-block;
            margin-right: 28rpx;
            margin-bottom: 20rpx;

            &.active {
                color: #fff;
                background-color: var(--general);
            }

            &.disabled {
                color: #bbb;
            }
        }
    }

    .payment-desc {
        border-top: 1rpx solid #f2f2f2;
        padding-top: 20rpx;

        .payment-desc-text {
            font-weight: bold;
        }
    }

    .button-position {
        position: fixed;
        bottom: 30rpx;
        left: 0;
        right: 0;
        padding: 0 30rpx;
        padding-bottom: env(safe-area-inset-bottom) !important;
    }
}

.store-card {
    box-sizing: border-box;
    background-color: #fff;
    padding: 20rpx;
    border-radius: 15rpx;
    margin-top: 20rpx;

    .store-card-item-title {
        min-height: 90rpx;
        display: flex;
        align-items: center;

        .store-card-item-label {
            background-color: var(--general);
            border-radius: 4rpx;
            color: #fff;
            font-size: 22rpx;
            height: 32rpx;
            line-height: 32rpx;
            margin-right: 20rpx;
            padding: 0 8rpx;
        }

        .store-card-item-name {
            font-weight: bold;
            color: #333;
            font-size: 28rpx;
        }
    }

    .store-card-item-content {
        padding: 20rpx 0 10rpx;

        .content-item {
            display: flex;
        }

        .store-card-item-content-left {
            width: 165rpx;
            height: 165rpx;
            border-radius: 15rpx;
            overflow: hidden;
            box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.04);
            .store-card-item-img {
                width: inherit;
                height: inherit;
            }
        }

        .store-card-item-content-right {
            width: calc(100% - 165rpx);
            padding-left: 18rpx;
            .store-card-item-content-right-title {
                font-weight: normal;
                font-size: 28rpx;
                width: 100%;
            }

            .right-price-box {
                width: 100%;
                display: flex;
                justify-content: space-between;
                &.special-margin {
                    margin-top: 60rpx;
                }

                &.special-margin2 {
                    margin-top: 40rpx;
                }
            }

            .store-card-item-content-right-price {
                font-size: 28rpx;
                display: inline-block;
                margin-right: 10rpx;
            }

            .store-card-item-content-right-num {
                display: flex;
                align-items: center;
                font-size: 22rpx;
                color: #969799;
            }
        }

        .flex {
            display: flex;

            & :deep(.navigator-wrap) {
                display: flex;
            }
        }
    }
}
</style>
