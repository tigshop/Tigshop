<template>
    <view class="success-box">
        <image class="success-img" mode="heightFix" :src="staticResource('user/success.png')" />
        <view class="success-text">{{ $t("审核已通过") }}</view>
        <view class="success-btn">
            <tig-button
                :custom-style="{ borderColor: '#C1CCDE', color: '#013148', marginRight: '40rpx', height: '70rpx', width: '260rpx' }"
                plain
                @click="handleLink"
                >{{ $t("返回首页") }}</tig-button
            >
            <tig-button :custom-style="{ height: '70rpx', width: '260rpx' }" @click="handleLink('admin')">{{ $t("商家后台") }}</tig-button>
        </view>
        <view v-if="initialUserInfo && initialUserInfo.initialPassword && initialUserInfo.mobile" class="tip">
            {{ `您的账号：${initialUserInfo.mobile ?? ""}，初始密码：${initialUserInfo.initialPassword ?? ""}，为了保障你的账户安全，请尽快修改初始密码` }}
        </view>
    </view>
</template>

<script setup lang="ts">
import { redirect, staticResource } from "@/utils";
import { useConfigStore } from "@/store/config";

const configStore = useConfigStore();

defineProps({
    initialUserInfo: {
        type: Object,
        default: () => ({})
    }
});
const handleLink = (type: string) => {
    if (type === "admin") {
        let url;
        url = configStore.baseInfo.adminDomain ? `${configStore.baseInfo.adminDomain}/admin` : `${window.location.origin}/admin`;
        // #ifndef H5
        redirect({ url });
        // #endif
        // #ifdef H5
        window.open(url);
        // #endif
    } else {
        redirect({ url: "/pages/index/index" });
    }
};
</script>

<style lang="scss" scoped>
.success-box {
    margin-top: 20rpx;
    background-color: #fff;
    padding-top: 124rpx;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 200rpx;

    .success-img {
        height: 192rpx;
    }
    .success-text {
        height: 94rpx;
        font-weight: 500;
        font-size: 40rpx;
        color: #013148;
        line-height: 94rpx;
        text-align: center;
        font-style: normal;
    }
    .success-btn {
        display: flex;
    }
    .tip {
        color: #7c889c;
        padding: 30rpx;
    }
}
</style>
