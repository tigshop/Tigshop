<template>
    <view>
        <view class="menu-card" :class="{ show: list.length > 0 }">
            <block v-for="(item, index) in list" :key="index">
                <view class="item-li" @click="toPage(item)">
                    <view class="photo">
                        <tig-image :src="item.pic_thumb" mode="widthFix" />
                        <view class="product-status-box">
                            <view v-if="item.product_sku && item.product_sku.length === 0 && item.product_stock == 0" class="outsale">{{ $t("已售罄") }}</view>
                        </view>
                    </view>
                    <view class="info">
                        <view class="detail">
                            {{ item.product_name }}
                        </view>
                        <view v-if="Object.keys(promotionList).length > 0" class="flex activity-box">
                            <block v-if="promotionList[item.product_id] && promotionList[item.product_id].activity_info">
                                <activityCard
                                    v-for="subItem in promotionList[item.product_id].activity_info"
                                    :key="subItem.promotion_id"
                                    :activity-info="subItem"
                                />
                            </block>
                        </view>

                        <view class="action">
                            <view class="pricenum">
                                <block v-if="type === 'exchange'">
                                    <view class="exchange-box">
                                        <format-price
                                            :font-style="{ fontSize: '32rpx' }"
                                            :currency-style="{
                                                fontSize: '22rpx'
                                            }"
                                            :decimals-style="{
                                                fontSize: '25rpx'
                                            }"
                                            :price-data="item.discounts_price"
                                        />
                                        <text class="exchange-icon">+</text>
                                        <image class="exchange-img" :src="staticResource('exchange/exchange.png')" />
                                        <text class="exchange-text">{{ item.exchange_integral }}</text>
                                    </view>
                                </block>
                                <block v-else>
                                    <format-price
                                        :font-style="{ fontSize: '32rpx' }"
                                        :currency-style="{
                                            fontSize: '22rpx'
                                        }"
                                        :decimals-style="{
                                            fontSize: '25rpx'
                                        }"
                                        :price-data="item.product_price"
                                    />
                                </block>
                            </view>

                            <view class="buy_btn" @click.stop="handleBuy(item)">
                                <block v-if="item.is_check">
                                    <up-loading-icon size="22" mode="circle" />
                                </block>
                                <block v-else>
                                    <block v-if="type === 'exchange'">
                                        <!-- <view class="exchange-btn">兑换</view> -->
                                    </block>
                                    <block v-else>
                                        <text class="iconfont-h5 icon-gouwuche3 buy_btn_icon" />
                                    </block>
                                </block>
                            </view>
                        </view>
                    </view>
                </view>
            </block>
        </view>
        <specification ref="specificationRef" v-model="product_id" :type="type" @add-card-succeed="getCallback" @load-end="loadEnd" @close="handleClose" />
    </view>
</template>

<script lang="ts" setup>
import { ref, type PropType, computed } from "vue";
import specification from "@/components/product/specification.vue";
import activityCard from "./activityCard.vue";
import { staticResource } from "@/utils";
const props = defineProps({
    commodityList: {
        type: Array as PropType<any[]>,
        default: ""
    },
    promotionList: {
        type: Object as PropType<any>,
        default: {}
    },
    type: {
        type: String,
        default: ""
    }
});
const emit = defineEmits(["callback"]);
const getCallback = () => {
    emit("callback");
};
const toPage = (item: any) => {
    let promotionItem, sku_id, params;
    promotionItem = props.promotionList[item.product_id];
    if (promotionItem && promotionItem.activity_info && promotionItem.activity_info[0].sku_ids) {
        sku_id = promotionItem.activity_info[0].sku_ids[0];
    }

    switch (props.type) {
        case "exchange":
            params = `id=${item.id}&type=exchange`;
            break;
        default:
            params = `id=${item.product_id}`;
    }

    params = sku_id ? `${params}&sku_id=${sku_id}` : params;

    uni.navigateTo({ url: "/pages/product/index?" + params });
};

const list = computed(() => {
    props.commodityList.forEach((item) => {
        item.is_check = false;
    });
    return props.commodityList;
});

const product_id = ref(0);
const specificationRef = ref();
const currentItem = ref<AnyObject>({});

const handleBuy = (item: any) => {
    if (item.is_check) return;
    switch (props.type) {
        case "exchange":
            product_id.value = item.id;
            break;
        default:
            product_id.value = item.product_id;
    }
    item.is_check = true;
    currentItem.value = item;
};
const loadEnd = () => {
    specificationRef.value.handleShowPopup();
    currentItem.value.is_check = false;
};
const handleClose = () => {
    product_id.value = 0;
};
</script>
<style lang="scss" scoped>
.activity-box {
    height: 55rpx;
}

.menu-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 0 15rpx;
}
.no-data {
    width: 100%;
    text-align: center;
    font-size: 24rpx;
    margin-top: 20rpx;
    color: #c3c0c0;
}

.item-li {
    width: 100%;
    margin-bottom: 15rpx;
    background: #fff;
    border-radius: 12rpx;
    overflow: hidden;
    padding-bottom: 10rpx;
}
.item-li .photo {
    padding: 20rpx;
    text-align: center;
    position: relative;
}
.item-li .photo image {
    width: 100%;
}
.item-li .info {
    background: #ffffff;
}

.item-li .info .detail {
    margin: 0 16rpx 10rpx;
    display: block;
    line-height: 40rpx;
    height: 80rpx;
    overflow: hidden;
    font-size: 26rpx;
    display: block;
    font-weight: bold;
    color: #2a3145;
    text-overflow: ellipsis;
    display: -webkit-box;
    display: -moz-box;
    -webkit-line-clamp: 2;
    -moz-line-clamp: 2;
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
}

.item-li .info .detail .name {
    line-height: 40rpx;
    overflow: hidden;
    font-size: 26rpx;
    display: block;
    font-weight: bold;
    color: #2a3145;
    text-overflow: ellipsis;
    display: -webkit-box;
    display: -moz-box;
    -webkit-line-clamp: 2;
    -moz-line-clamp: 2;
    -webkit-box-orient: vertical;
    -moz-box-orient: vertical;
}
.item-li .info .shop {
    height: 50rpx;
    font-size: 26rpx;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 16rpx 10rpx;

    .shop-name {
        width: 55%;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .shop-btn {
        display: flex;
        align-items: center;
        justify-content: center;

        .icon-youjiantou {
            font-size: 32rpx;
        }
    }
}
.item-li .info .action {
    padding: 0 16rpx 10rpx;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.item-li .info .price {
    font-weight: bold;
    display: inline-block;
    font-size: 30rpx;
}
.item-li .info .price text {
    font-size: 20rpx;
}

.item-li .buy_btn {
    // margin-right: 10rpx;
    // margin-top: 6rpx;
    color: var(--general);
    display: flex;
    align-items: center;
    justify-content: center;
    .buy_btn_icon {
        font-size: 42rpx;
    }

    .exchange-btn {
        font-size: 24rpx;
        background-color: var(--main-bg);
        border-radius: 20rpx;
        padding: 5rpx 10rpx;
        color: var(--main-text);
    }
}
.item-li .buy_btn image {
    width: 100%;
    height: 100%;
}

.list-cart .buy_btn {
    display: none;
}
.list-overseas {
    background: #fff;
    -webkit-box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.05);
    box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.05);
}

.product-status-box {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;

    .outsale {
        width: 50%;
        height: 50%;
        line-height: 180rpx;
        background: rgba(0, 0, 0, 0.4);
        font-size: 38rpx;
        color: #ffffff;
        letter-spacing: 0;
        border-radius: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
}

.pricenum {
    color: var(--general);
    height: inherit;

    .exchange-box {
        display: flex;
        align-items: center;
        .exchange-img {
            width: 30rpx;
            height: 30rpx;
            padding-right: 5rpx;
        }
        .exchange-icon {
            padding: 0 5rpx;
        }
        .exchange-text {
            font-size: 28rpx;
        }
    }
}
</style>
