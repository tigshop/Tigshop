<template>
    <view class="item-li" @click="toPage(item)">
        <view class="photo">
            <tig-image :src="item.picThumb" mode="widthFix" />
            <view class="product-status-box">
                <view v-if="item.productStock == 0 || item.productStatus == 0" class="outsale">{{ item.productStock == 0 ? $t("已售罄") : $t("已下架") }}</view>
            </view>
        </view>
        <view class="info">
            <view class="detail">
                {{ item.productName }}
            </view>
            <view class="action">
                <view class="pricenum">
                    <format-price
                        :font-style="{ fontSize: '32rpx' }"
                        :currency-style="{ fontSize: '22rpx', position: 'relative', top: '3rpx' }"
                        :price-data="item.productPrice"
                    />
                </view>
                <buy :id="item.productId" :disabled="item.productStock == 0" @callback="getCallback">
                    <view class="buy_btn"><text class="iconfont-h5 icon-gouwuche3 buy_btn_icon" /></view>
                </buy>
            </view>
        </view>
    </view>
</template>

<script lang="ts" setup>
import buy from "@/components/product/buy.vue";
const props = defineProps({
    item: {
        type: Object,
        default: () => ({})
    }
});
const emit = defineEmits(["callback"]);
const getCallback = () => {
    emit("callback");
};
const toPage = (item: any) => {
    let id = item.productId;
    uni.navigateTo({ url: "/pages/product/index?id=" + id });
};
</script>
<style lang="scss" scoped>
.item-li {
    width: 100%;
    margin-bottom: 15rpx;
    background: #fff;
    border-radius: 12rpx;
    overflow: hidden;
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
    margin: 0 20rpx 10rpx;
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
        width: 70%;
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
    margin-right: 10rpx;
    margin-top: 6rpx;
    color: var(--general);
    display: flex;
    align-items: center;
    justify-content: center;
    .buy_btn_icon {
        font-size: 46rpx;
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
    line-height: 56rpx;
    color: var(--general);
}
</style>
