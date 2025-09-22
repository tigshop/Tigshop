<template>
    <tig-layout ref="layoutRef" @login-success="loginSuccess">
        <tig-navbar :show-left="false" title="会员中心" background="linear-gradient(90deg, #fcf6fc, #f3f3fe)" />
        <view class="user">
            <view class="user_header user_bg_color">
                <view class="picTxt">
                    <template v-if="!hasToken">
                        <view class="pictrue" @click="handleLogin">
                            <image class="pic-btn" :src="staticResource('common/empty-img-bg3.png')" />
                        </view>
                    </template>
                    <template v-else>
                        <tig-upload class="pictrue" request-url="user/user/modifyAvatar" @change="userStore.getUserInfo()">
                            <tig-image class="pic-btn" :src="imageFormat(member!.avatar)" />
                        </tig-upload>
                    </template>
                    <view class="text">
                        <template v-if="!hasToken">
                            <view class="name" @click="handleLogin">{{ $t("登录/注册") }}</view>
                        </template>
                        <template v-else>
                            <view class="acea-row row-middle info">
                                <view class="name line1">{{ member.nickname || member.username }}</view>
                                <view class="iconfont icon-shezhi" @click="goPages('/pages/user/profile/index')" />
                            </view>
                        </template>
                    </view>
                </view>
                <view class="user_top_group">
                    <view class="item" @click="goPages('/pages/user/collectProduct/index')">
                        <view class="tit">
                            {{ $t("商品收藏") }}
                            <text class="txt">{{ orderNum.productCollect >= 0 ? orderNum.productCollect : "--" }}</text>
                        </view>
                    </view>
                    <view class="item" @click="goPages('/pages/user/comment/list')">
                        <view class="tit">
                            {{ $t("待评价") }}
                            <text class="txt">{{ orderNum.awaitComment >= 0 ? orderNum.awaitComment : "--" }}</text>
                        </view>
                    </view>
                    <view class="item" @click="goPages('/pages/user/historyProduct/index')">
                        <view class="tit">{{ $t("浏览记录") }} </view>
                    </view>
                </view>
                <!-- <view class="member-info__level-wrapper" v-if="false">
                            <view class="member-info__level-1" @click="goPages('/pages/user/ranks/index')">
                                <view class="name">{{ $t("去看看我的VIP特权") }}</view>
                                <view class="level"><text class="iconfont icon-xiangyou"></text></view>
                            </view>
                        </view> -->
            </view>
            <view class="user_wrapper">
                <view class="list-group my-order">
                    <view class="title acea-row row-between-wrapper">
                        <view class="">{{ $t("我的订单") }}</view>
                        <view class="more" @click="goPages('/pages/user/order/list')">
                            <view>{{ $t("全部订单") }}</view>
                            <view class="iconfont icon-xiangyou" />
                        </view>
                    </view>
                    <view class="wrap">
                        <view class="li" @click="goPages('/pages/user/order/list?type=awaitPay')">
                            <template v-if="orderNum.awaitPay > 0">
                                <uni-badge class="badgecolor" :text="orderNum.awaitPay" absolute="rightTop" size="small">
                                    <text class="iconfont-h5 icon-daifukuan" />
                                </uni-badge>
                                <view class="txt">{{ $t("待付款") }}</view>
                            </template>

                            <template v-else>
                                <text class="iconfont-h5 icon-daifukuan" />
                                <view class="txt">{{ $t("待付款") }}</view>
                            </template>
                        </view>
                        <view class="li" @click="goPages('/pages/user/order/list?type=awaitShipping')">
                            <template v-if="orderNum.awaitShipping > 0">
                                <uni-badge class="badgecolor" :text="orderNum.awaitShipping" absolute="rightTop" size="small">
                                    <text class="iconfont-h5 icon-daifahuo" />
                                </uni-badge>
                                <view class="txt">{{ $t("待发货") }}</view>
                            </template>
                            <template v-else>
                                <text class="iconfont-h5 icon-daifahuo" />
                                <view class="txt">{{ $t("待发货") }}</view>
                            </template>
                        </view>
                        <view class="li" @click="goPages('/pages/user/order/list?type=awaitReceived')">
                            <template v-if="orderNum.awaitReceived > 0">
                                <uni-badge class="badgecolor" :text="orderNum.awaitReceived" absolute="rightTop" size="small">
                                    <text class="iconfont-h5 icon-daishouhuo" />
                                </uni-badge>
                                <view class="txt">{{ $t("待收货") }}</view>
                            </template>
                            <template v-else>
                                <text class="iconfont-h5 icon-daishouhuo" />
                                <view class="txt">{{ $t("待收货") }}</view>
                            </template>
                        </view>
                        <view class="li" @click="goPages('/pages/user/order/list?type=awaitComment')">
                            <template v-if="orderNum.awaitComment > 0">
                                <uni-badge class="badgecolor" :text="orderNum.awaitComment" absolute="rightTop" size="small">
                                    <text class="iconfont-h5 icon-daipingjia" />
                                </uni-badge>
                                <view class="txt">{{ $t("待评价") }}</view>
                            </template>
                            <template v-else>
                                <text class="iconfont-h5 icon-daipingjia" />
                                <view class="txt">{{ $t("待评价") }}</view>
                            </template>
                        </view>
                        <view class="li" @click="goPages('/pages/user/afterSale/list')">
                            <text class="iconfont-h5 icon-tuikuanshouhou" />
                            <view class="txt line1">{{ $t("退换 / 售后") }}</view>
                            <text v-if="count.returnCount > 0" class="counts">{{ count.returnCount }}</text>
                        </view>
                    </view>
                </view>
                <view class="list-group my-wallet">
                    <view class="title acea-row row-between-wrapper">
                        <view class="">{{ $t("我的钱包") }}</view>
                        <view class="more" @click="goPages('/pages/user/account/index')">
                            <view>{{ $t("进入钱包") }}</view>
                            <view class="iconfont icon-xiangyou" />
                        </view>
                    </view>
                    <view class="wrap">
                        <view class="li" @click="goPages('/pages/user/account/index')">
                            <text class="num">{{ Number(member.totalBalance) >= 0 ? member.totalBalance : 0 }}</text>
                            <view class="txt">{{ $t("余额") }}</view>
                        </view>
                        <view class="li" @click="goPages('/pages/coupon/index?type=2')">
                            <text class="num">{{ member.coupon >= 0 ? member.coupon : 0 }}</text>
                            <view class="txt">{{ $t("优惠券") }}</view>
                        </view>
                        <view class="li" @click="goPages('/pages/user/point/detail')">
                            <text class="num">{{ member.points >= 0 ? member.points : 0 }}</text>
                            <view class="txt">{{ $t(configStore.integralName) }}</view>
                        </view>
                    </view>
                </view>
                <decorate :modules="modules" />
            </view>
        </view>
        <recommend />
        <tig-copyright />
    </tig-layout>
    <tig-back-top :scroll-top="scrollTop" />
</template>

<script lang="ts" setup>
import recommend from "@/components/recommend/index.vue";
import decorate from "./src/decorate/index.vue";
import { useUserStore } from "@/store/user";
import { computed, ref } from "vue";
import { onLoad, onShow } from "@dcloudio/uni-app";
import type { UserItem } from "@/types/user/user";
import type { OrderNumItem } from "@/types/user/order";
import { getOrderNum } from "@/api/user/order";
import { getMemberDecorate } from "@/api/home/home";
import { staticResource } from "@/utils";
import { handleLogin } from "@/utils/request";
import { useScrollTop } from "@/hooks";
import { imageFormat } from "@/utils/format";
import { useConfigStore } from "@/store/config";

const { scrollTop } = useScrollTop();

const configStore = useConfigStore();

const userStore = useUserStore();

const layoutRef = ref();

const member = computed({
    get() {
        return userStore.userInfo;
    },
    set(val) {
        return userStore.setUserInfo(val);
    }
});

const count = ref({
    collectCount: 0,
    collectStoreCount: 0,
    stayCommentOrder: 0,
    rePay: 0,
    reReceive: 0,
    returnCount: 0,
    bonus: 0
});

const orderNum = ref<OrderNumItem>({} as OrderNumItem);
const __getOrderNum = async () => {
    try {
        const result = await getOrderNum();
        orderNum.value = result;
    } catch (error) {
        console.error(error);
    }
};

const goPages = (url: string) => {
    uni.navigateTo({
        url
    });
};

const resetUser = () => {
    member.value = {} as UserItem;
    count.value = {
        collectCount: 0,
        collectStoreCount: 0,
        stayCommentOrder: 0,
        rePay: 0,
        reReceive: 0,
        returnCount: 0,
        bonus: 0
    };
    orderNum.value = {} as OrderNumItem;
};

const loginSuccess = () => {
    __getMemberDecorate();
    __getOrderNum();
};

const hasToken = computed(() => {
    return userStore.token || uni.getStorageSync("token");
});

const unverifiedBg = computed(() => {
    return `url(${staticResource("product/unverified.png")});`;
});

const modules = ref<any[]>([]);

const __getMemberDecorate = async () => {
    try {
        const result = await getMemberDecorate();
        modules.value = result.data;
    } catch (error) {
        console.error(error);
    }
};

onLoad(() => {
    __getMemberDecorate();
});

onShow(() => {
    if (!hasToken.value) {
        resetUser();
        return;
    }
    userStore.getUserInfo();
    __getOrderNum();
});
</script>
<style>
page {
    /* #ifdef MP-WEIXIN */
    background: linear-gradient(90deg, #fcf6fc, #f3f3fe);
    /* #endif */
}
</style>
<style scoped lang="scss">
page {
    background: linear-gradient(90deg, #fcf6fc, #f3f3fe);
}

.user_bg_color {
    background: linear-gradient(90deg, #fcf6fc, #f3f3fe);
}
.user .user_header {
    _height: 280rpx;
    position: relative;
}
.user .user_header .picTxt {
    display: flex;
    padding: 0 20rpx;
    align-items: center;
}
.user .user_header .picTxt .pic-btn {
    width: 110rpx;
    height: 110rpx;
    overflow: hidden;
    border-radius: 50%;
}
.user .user_header .picTxt .pictrue {
    overflow: hidden;
    width: 110rpx;
    height: 110rpx;
    box-sizing: border-box;
    border: 1rpx solid #f5f5f5;
}
.user .user_header .picTxt .text {
    // width: 530rpx;
    width: 80%;
    margin-left: 24rpx;
}
.user .user_header .picTxt .text .name {
    font-size: 28rpx;
    width: 240rpx;
}
.user .user_header .picTxt .text .member {
    padding: 0 20rpx;
    height: 32rpx;
    // background-color: #a6a2a6;
    // color: #fff;
    color: #333;
    font-size: 20rpx;
    border-radius: 30rpx;
    line-height: 32rpx;
    display: inline-block;
    margin-top: 10rpx;
}
.user .user_header .picTxt .text .logo {
    display: flex;
    align-items: center;
    // padding: 0 20rpx;
    height: 32rpx;
    color: #333;
    font-size: 20rpx;
    border-radius: 30rpx;
    line-height: 32rpx;
    margin-top: 20rpx;
}
.user .user_header .picTxt .text .vip_logo {
    margin-right: 5rpx;
    width: 30rpx;
    height: 22rpx;
}

.info {
    margin-bottom: 10rpx;
}
.user .user_header .picTxt .text .auth {
    margin-right: 10rpx;
    display: flex;
    align-items: center;
    width: 100rpx;
    height: 36rpx;
    .unverified {
        width: 100rpx;
        height: 105rpx;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }
    image {
        width: 100rpx;
        height: 36rpx;
    }
}
.user .user_header .picTxt .text .member image {
    width: 28rpx;
    height: 28rpx;
    font-size: 20rpx;
    margin-right: 8rpx;
}
.user .user_header .picTxt .text .id {
    color: rgba(255, 255, 255, 0.6);
    font-size: 26rpx;
    margin-top: 15rpx;
}
.user .user_header .picTxt .text .id .iconfont {
    font-size: 30rpx;
    margin-left: 12rpx;
}
.user .user_header .picTxt .text .shanghu {
    color: rgba(255, 255, 255, 0.9);
    display: inline-block;
    padding: 0 20rpx;
    height: 36rpx;
    background-color: rgba(0, 0, 0, 0.2);
    font-size: 20rpx;
    border-radius: 30rpx;
    margin-left: 17rpx;
    line-height: 36rpx;
    position: absolute;
    top: 19rpx;
    right: 100rpx;
}
.user .user_header .picTxt .text .shanghu .iconfont {
    font-size: 24rpx;
    margin-right: 10rpx;
}
.user .user_header .icon-shezhi {
    flex: 1;
    display: inline-flex;
    justify-content: flex-end;
    margin-left: 10rpx;
    font-size: 36rpx;
    color: #333;
}

.user .user_header .qiandao {
    display: flex;
    align-items: center;
    font-size: 24rpx;
    // margin-left: 10rpx;
    margin-left: 20px;
}
.user .user_header .icon-qiandao {
    font-size: 24rpx;
    color: #333;
    padding-top: 3rpx;
    margin-right: 6rpx;
}

.user_top_group {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 30rpx;
}
.user_top_group .item {
    text-align: center;
    flex: 1;
    position: relative;
}
.user_top_group .item::after {
    content: "";
    position: absolute;
    top: 4rpx;
    right: 0;
    width: 2rpx;
    height: 26rpx;
    background: #dbd1dc;
}
.user_top_group .item:last-child::after {
    width: 0;
}
.user_top_group .item .tit {
    font-size: 24rpx;
}
.user_top_group .item .tit .txt {
    margin-left: 6rpx;
}

.member-info__level-wrapper {
    padding: 0 10px;
}
.member-info__level-wrapper .member-info__level-1 {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    width: 100%;
    height: 100rpx;
    color: #fff;
    background-image: url(data:image/png;base64,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);
    background-size: cover;
    border-top-left-radius: 15rpx;
    border-top-right-radius: 15rpx;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    border-radius: 15rpx;
    box-shadow: rgba(0, 0, 0, 0.2) 0 -4rpx 16rpx 0;
}
.member-info__level-wrapper .member-info__level-1 .name {
    display: block;
    -webkit-box-flex: 1;
    flex-grow: 1;
    flex-shrink: 1;
    flex-basis: 0%;
    align-self: flex-start;
    padding-left: 20rpx;
    overflow-x: hidden;
    overflow-y: hidden;
    line-height: 100rpx;
    white-space: nowrap;
    text-overflow: ellipsis;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    color: #ffdea0;
}
.member-info__level-wrapper .member-info__level-1 .name {
    font-size: 24rpx;
}
.member-info__level-wrapper .member-info__level-1 .name::before {
    display: inline-block;
    width: 36rpx;
    height: 36rpx;
    margin-right: 10rpx;
    vertical-align: -10rpx;
    background-size: cover;
    content: " ";
}
.member-info__level-wrapper .member-info__level-1 .name::before {
    background-image: url(data:image/png;base64,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);
}
.member-info__level-wrapper .member-info__level-1 .level {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    margin-right: 20rpx;
    font-size: 24rpx;
    line-height: 24rpx;
}
.member-info__level-wrapper .member-info__level-1 .level .iconfont {
    color: #ffdea0;
}

.user .user_wrapper {
    padding: 0 10px;
}
.user .user_wrapper .title {
    height: 88rpx;
    padding: 0 30rpx;
    font-size: 26rpx;
    font-weight: bold;
}
.user .user_wrapper .title .more {
    display: flex;
    align-items: center;
    font-size: 22rpx;
    color: #999999;
    font-weight: normal;
}
.user .user_wrapper .title .more .iconfont {
    font-size: 24rpx;
    padding-top: 4rpx;
}
.user .list-group {
    background: #fff;
    margin: 20rpx 0;
    border-radius: 18rpx;
    overflow: hidden;
}
.user .list-group .wrap .iconfont {
    font-size: 60rpx;
}
.user .list-group .wrap {
    display: -webkit-box;
    display: -webkit-flex;
    display: flex;
    position: relative;
    flex-flow: row nowrap;
    padding-bottom: 30rpx;
}
.user .list-group .wrap .li {
    position: relative;
    flex: 1;
    text-align: center;

    .iconfont-h5 {
        color: #333;
        font-size: 60rpx;
    }
}
.user .list-group .wrap .li .txt {
    color: #333;
    font-size: 24rpx;
    position: relative;
    padding: 0 20rpx;
}
.user .list-group.my-wallet .wrap {
    height: 120rpx;
}
.user .list-group.my-wallet .wrap .li .txt {
    top: 12rpx;
}
.user .list-group.my-wallet .wrap .li .num {
    font-weight: 700;
}
.user .list-group.my-order {
    position: relative;
}
.user .list-group.my-order .counts {
    border-radius: 20rpx;
    font-size: 20rpx;
    line-height: 27rpx;
    min-width: 28rpx;
    height: 28rpx;
    position: absolute;
    text-align: center;
    top: 30rpx;
    color: #f15353;
    border: 1rpx solid;
    padding: 0 3rpx;
    right: 55rpx;
    background: #fff;
}

/*商户中心*/
.user .merchant_header {
    background: linear-gradient(90deg, #dd9b4c, #ffd787);
    border-radius: 0 0 300px 300px/0 0 20px 20px;
    box-shadow: 0 2px 5px #f8e3c6;
    height: 190rpx;
}
.user .merchant_header .picTxt .text .shanghu-info .notice {
    font-size: 20rpx;
    color: #fff;
    background: #c8483f;
    border-radius: 20rpx;
    text-align: center;
    height: 32rpx;
    line-height: 32rpx;
    padding: 0 16rpx;
    max-width: 300rpx;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.user .merchant_header .picTxt .text .shanghu-info .goto_arrow::after {
    display: block;
    content: "";
    width: 8rpx;
    height: 8rpx;
    border-top: 2rpx solid hsla(0, 0%, 100%, 0.7);
    border-left: 2rpx solid hsla(0, 0%, 100%, 0.7);
    -webkit-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
    position: absolute;
    right: 12rpx;
    top: 10rpx;
}
.user .merchant_header .picTxt .text .shanghu-info .goto_arrow {
    position: relative;
    padding-right: 28rpx;
    background-color: rgba(180, 116, 15, 0.3);
    display: inline-block;
    margin-right: 20rpx;
    vertical-align: middle;
}

.user .merchant_header .picTxt .text .member image {
    width: 28rpx;
    height: 28rpx;
    font-size: 20rpx;
    margin-right: 8rpx;
}
.user .merchant_header .picTxt .text .shanghu {
    display: inline-block;
    color: rgba(255, 255, 255, 0.9);
    font-size: 20rpx;
    font-weight: normal;
}

.badgecolor {
    :deep(.uni-badge--error) {
        background-color: var(--general);
    }
}

.wrap {
    :deep(.uni-badge) {
        z-index: 50;
    }
}
</style>
