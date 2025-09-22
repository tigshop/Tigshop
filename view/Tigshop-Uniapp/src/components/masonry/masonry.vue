<template>
    <view class="masonry">
        <view id="left-item" class="masonry-item">
            <template v-for="item in leftList" :key="item.id">
                <slot name="left" :item="item">
                    <view class="item-li" @click="toPage(item)">
                        <view class="photo">
                            <tig-lazy-image :src="item.picThumb" mode="widthFix" />
                            <view class="product-status-box">
                                <template v-if="item.isSeckill == 1">
                                    <view v-if="item.seckillStock == 0" class="outsale">{{ $t("已售罄") }}</view>
                                </template>
                                <template v-else>
                                    <view v-if="item.productSku && item.productSku.length === 0 && item.productStock == 0" class="outsale">{{
                                        $t("已售罄")
                                    }}</view>
                                </template>
                            </view>
                        </view>
                        <view class="info">
                            <view class="detail">
                                {{ item.productName }}
                            </view>
                            <template
                                v-if="Object.keys(promotionList).length > 0 && promotionList[item.productId] && promotionList[item.productId].activityInfo"
                            >
                                <view class="flex activity-box">
                                    <activityCard
                                        v-for="subItem in promotionList[item.productId].activityInfo"
                                        :key="subItem.promotionId"
                                        :activity-info="subItem"
                                    />
                                </view>
                            </template>

                            <view class="action">
                                <view class="pricenum">
                                    <template v-if="type === 'exchange'">
                                        <view class="exchange-box">
                                            <format-price
                                                :font-style="{ fontSize: '32rpx' }"
                                                :currency-style="{
                                                    fontSize: '22rpx'
                                                }"
                                                :decimals-style="{
                                                    fontSize: '25rpx'
                                                }"
                                                :price-data="item.discountsPrice"
                                            />
                                            <text class="exchange-icon">+</text>
                                            <image class="exchange-img" :src="staticResource('exchange/exchange.png')" />
                                            <text class="exchange-text">{{ item.exchangeIntegral }}</text>
                                        </view>
                                    </template>
                                    <template v-else>
                                        <format-price
                                            :font-style="{ fontSize: '32rpx' }"
                                            :currency-style="{
                                                fontSize: '22rpx'
                                            }"
                                            :decimals-style="{
                                                fontSize: '25rpx'
                                            }"
                                            :price-data="item.price"
                                        />
                                    </template>
                                </view>

                                <view class="buy_btn" @click.stop="handleBuy(item)">
                                    <template v-if="item.isCheck">
                                        <up-loading-icon size="22" mode="circle" />
                                    </template>
                                    <template v-else>
                                        <template v-if="type === 'exchange'">
                                            <!-- <view class="exchange-btn">兑换</view> -->
                                        </template>
                                        <template v-else>
                                            <text class="iconfont-h5 icon-gouwuche3 buy_btn_icon" />
                                        </template>
                                    </template>
                                </view>
                            </view>
                        </view>
                    </view>
                </slot>
            </template>
        </view>
        <view id="right-item" class="masonry-item">
            <template v-for="item in rightList" :key="item.id">
                <slot name="right" :item="item">
                    <view class="item-li" @click="toPage(item)">
                        <view class="photo">
                            <tig-lazy-image :src="item.picThumb" mode="widthFix" />
                            <view class="product-status-box">
                                <view v-if="item.productSku && item.productSku.length === 0 && item.productStock == 0" class="outsale">{{ $t("已售罄") }}</view>
                            </view>
                        </view>
                        <view class="info">
                            <view class="detail">
                                {{ item.productName }}
                            </view>
                            <view v-if="Object.keys(promotionList).length > 0" class="flex activity-box">
                                <template v-if="promotionList[item.productId] && promotionList[item.productId].activityInfo">
                                    <activityCard
                                        v-for="subItem in promotionList[item.productId].activityInfo"
                                        :key="subItem.promotionId"
                                        :activity-info="subItem"
                                    />
                                </template>
                            </view>

                            <view class="action">
                                <view class="pricenum">
                                    <template v-if="type === 'exchange'">
                                        <view class="exchange-box">
                                            <format-price
                                                :font-style="{ fontSize: '32rpx' }"
                                                :currency-style="{
                                                    fontSize: '22rpx'
                                                }"
                                                :decimals-style="{
                                                    fontSize: '25rpx'
                                                }"
                                                :price-data="item.discountsPrice"
                                            />
                                            <text class="exchange-icon">+</text>
                                            <image class="exchange-img" :src="staticResource('exchange/exchange.png')" />
                                            <text class="exchange-text">{{ item.exchangeIntegral }}</text>
                                        </view>
                                    </template>
                                    <template v-else>
                                        <format-price
                                            :font-style="{ fontSize: '32rpx' }"
                                            :currency-style="{
                                                fontSize: '22rpx'
                                            }"
                                            :decimals-style="{
                                                fontSize: '25rpx'
                                            }"
                                            :price-data="item.price"
                                        />
                                    </template>
                                </view>

                                <view class="buy_btn" @click.stop="handleBuy(item)">
                                    <template v-if="item.isCheck">
                                        <up-loading-icon size="22" mode="circle" />
                                    </template>
                                    <template v-else>
                                        <template v-if="type === 'exchange'">
                                            <!-- <view class="exchange-btn">兑换</view> -->
                                        </template>
                                        <template v-else>
                                            <text class="iconfont-h5 icon-gouwuche3 buy_btn_icon" />
                                        </template>
                                    </template>
                                </view>
                            </view>
                        </view>
                    </view>
                </slot>
            </template>
        </view>
    </view>
    <specification ref="specificationRef" v-model="productId" :type="type" @add-card-succeed="getCallback" @load-end="loadEnd" @close="handleClose" />
</template>

<script lang="ts" setup>
import { ref, type PropType, watch, getCurrentInstance, nextTick } from "vue";
import specification from "@/components/product/specification.vue";
import activityCard from "./activityCard.vue";
import { staticResource, getElementRect } from "@/utils";

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

const instance = getCurrentInstance();
const tempList = ref<any[]>([]);
const leftList = ref<any[]>([]);
const rightList = ref<any[]>([]);
const delay = 50;

const cloneData = (data: any) => {
    return JSON.parse(JSON.stringify(data));
};

const splitData = async () => {
    if (!tempList.value.length) return;
    let item = tempList.value[0];
    if (!item) return;

    // 计算高度添加
    // let leftRect = await getElementRect("#left-item", instance);
    // let rightRect = await getElementRect("#right-item", instance);
    // if (leftRect === null || rightRect === null) return;
    // if (leftRect.height < rightRect.height) {
    //     leftList.value.push(item);
    // } else if (leftRect.height > rightRect.height) {
    //     rightList.value.push(item);
    // } else {
    //     if (leftList.value.length <= rightList.value.length) {
    //         leftList.value.push(item);
    //     } else {
    //         rightList.value.push(item);
    //     }
    // }

    let leftNum = leftList.value.length;
    let rightNum = rightList.value.length;
    if (leftNum < rightNum) {
        leftList.value.push(item);
    } else if (leftNum > rightNum) {
        rightList.value.push(item);
    } else {
        leftList.value.push(item);
    }

    tempList.value.splice(0, 1);

    if (tempList.value.length) {
        setTimeout(() => {
            splitData();
        }, delay);
    }
};

watch(
    () => props.commodityList,
    (newVal, oldval) => {
        console.log("watch commodityList", newVal, oldval);
        let startIndex = Array.isArray(oldval) && oldval.length > 0 ? oldval.length : 0;
        if (newVal) {
            tempList.value = [...tempList.value, ...cloneData(newVal.slice(startIndex))];
            tempList.value.forEach((item) => {
                item.isCheck = false;
            });
            nextTick(() => {
                splitData();
            });
        }
    },
    {
        immediate: true
    }
);

const toPage = (item: any) => {
    let promotionItem, skuId, params;
    promotionItem = props.promotionList[item.productId];
    if (promotionItem && promotionItem.activityInfo && promotionItem.activityInfo.length > 0 && promotionItem.activityInfo[0].skuIds) {
        skuId = promotionItem.activityInfo[0].skuIds[0];
    }

    switch (props.type) {
        case "exchange":
            params = `id=${item.id}&type=exchange`;
            break;
        default:
            params = `id=${item.productId}`;
    }

    params = skuId ? `${params}&skuId=${skuId}` : params;

    uni.navigateTo({ url: "/pages/product/index?" + params });
};

const productId = ref(0);
const specificationRef = ref();
const currentItem = ref<AnyObject>({});

const handleBuy = (item: any) => {
    if (item.isCheck) return;
    switch (props.type) {
        case "exchange":
            productId.value = item.id;
            break;
        default:
            productId.value = item.productId;
    }
    item.isCheck = true;
    currentItem.value = item;
};
const loadEnd = () => {
    specificationRef.value.handleShowPopup();
    currentItem.value.isCheck = false;
};
const handleClose = () => {
    productId.value = 0;
};
</script>
<style lang="scss" scoped>
.masonry {
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 14rpx;
    .masonry-item {
        width: 100%;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }
}

.activity-box {
    height: 55rpx;
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
