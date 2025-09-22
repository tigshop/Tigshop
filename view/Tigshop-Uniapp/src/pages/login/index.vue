<template>
    <view>
        <baseLogin v-model:csrf-token="csrfToken" v-model:login-type="loginType" />
    </view>
</template>

<script lang="ts" setup>
import { ref } from "vue";
import { onLoad, onShow } from "@dcloudio/uni-app";
import { csrfCreate } from "@/api/login/login";
import baseLogin from "./src/baseLogin.vue";
import { useUserStore } from "@/store/user";

const userStore = useUserStore();

const loginType = ref("password");

const oauthCallbackData = ref({});

onLoad((options) => {
    if (options) {
        if (options.loginType) {
            loginType.value = options.loginType;
        }
        if (options.url) {
            uni.setStorageSync("URL", options.url);
        }
        if (options.code) {
            oauthCallbackData.value = options;
        }
    }
    getCsrfCreateData();
});

onShow(() => {
    if (uni.getStorageSync("token") || userStore.token) {
        uni.reLaunch({
            url: "/pages/index/index"
        });
    }
});

const csrfToken = ref("");

const getCsrfCreateData = async () => {
    try {
        const result = await csrfCreate();
        csrfToken.value = result;
    } catch (error) {
        console.error("获取CSRF Token失败:", error);
    }
};
</script>

<style>
page {
    background: #fff !important;
}
</style>
