<template>
    <view @click="handleClick">
        <slot />
    </view>
</template>

<script setup lang="ts">
// #ifdef MP-WEIXIN
defineOptions({
    options: { virtualHost: true }
});
// #endif
import { useUserStore } from "@/store/user";
import { useI18n } from "vue-i18n";
import { handleLogin } from "@/utils/request";

const userStore = useUserStore();
const { t } = useI18n();
defineProps({
    productId: {
        type: Number,
        default: 0
    },
    orderId: {
        type: Number,
        default: 0
    },
    phone: {
        type: String,
        default: ""
    }
});

const handleClick = () => {
    const token = uni.getStorageSync("token");
    if (!token) return handleLogin();
    let type = userStore.serviceConfig.serviceType;
    let customUrl = userStore.serviceConfig.url;

    if (type === 0) {
        uni.showToast({
            title: t("暂无客服"),
            icon: "none"
        });
    } else {
        // #ifdef H5
        window.open(customUrl);
        // #endif
        // #ifdef MP-WEIXIN
        if (type === 2 || type === 1) {
            //企业微信客服
            wx.openCustomerServiceChat({
                extInfo: { customUrl },
                corpId: userStore.serviceConfig.corpId,
                success(res: any) {},
                fail(res: any) {
                    uni.showToast({
                        title: res.errMsg,
                        duration: 1500,
                        icon: "none"
                    });
                }
            });
            return;
        }
        // #endif

        // #ifdef MP-WEIXIN || APP-PLUS || MP-ALIPAY
        uni.navigateTo({
            url: `/pages/webviewPage/index?url=${encodeURIComponent(customUrl)}`
        });
        // #endif
    }
};

defineExpose({
    handleClick
});
</script>

<style lang="scss" scoped></style>
