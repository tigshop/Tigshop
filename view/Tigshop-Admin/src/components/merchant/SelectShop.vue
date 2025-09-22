<template>
    <LoginSelectShop
        v-if="!isIndex"
        :selectShopFlag="selectShopFlag"
        :myShopList="myShopList"
        :vendorList="vendorList"
        :loading="loading"
        :userinfo="userinfo"
        :adminType="adminType"
        @callBack="toIndex"
    ></LoginSelectShop>
</template>
<script setup lang="ts">
import LoginSelectShop from "./src/LoginSelectShop.vue";
import { onMounted, ref, nextTick } from "vue";
import { useUserStore } from "@/store/user";
import { useConfigStore } from "@/store/config";
import { useMenusStore } from "@/store/menu";
import { useThemeStore } from "@/store/theme";
import { message, notification } from "ant-design-vue";
import { useRouter } from "vue-router";
import { updateMenu, getMenu } from "@/utils/menus";
import dayjs from "dayjs";

const props = defineProps({
    isIndex: {
        type: Boolean,
        default: false
    },
    selectShopFlag: {
        type: Boolean,
        default: false
    }
});
const emit = defineEmits(["closePopup", "update:selectShopFlag"]);
const router = useRouter();
const toIndex = async (e: any) => {
    localStorage.setItem("adminType", e.type);
    const userStore = useUserStore() as any;
    const configStore = useConfigStore();
    const menusStore = useMenusStore();
    const themeStore = useThemeStore();
    // 更新后台设置项
    await Promise.all([userStore.updateUserInfo(), configStore.updateConfig()]);
    themeStore.getThemeInfo();
    notification["success"]({
        message: "登录成功",
        placement: "top",
        duration: 1.5,
        description: "您好，欢迎回来"
    });
    // 切换到商铺选择页面
    menusStore.clearMenus();
    const routers = await getMenu();
    menusStore.setRouters(routers || []);
    if (props.isIndex) {
        emit("closePopup");
        const path = `${router.options.history.base}${routers ? routers[0].path : "/"}`;
        window.history.pushState({ path }, "", path);
        setTimeout(() => {
            location.reload();
        }, 200);
        return;
    }
    localStorage.setItem("lastOpenTime", String(dayjs().unix()));
    router.push(routers ? routers[0].path : "/");
    setTimeout(() => {
        location.reload();
    }, 20);
};

const myShopList = ref<any[]>([]);
const vendorList = ref<any[]>([]);
const loading = ref(true);
const userinfo = ref({
    username: ""
});
const adminType = ref<any>("");

onMounted(() => {
    const accessToken = localStorage.getItem("accessToken");
    adminType.value = localStorage.getItem("adminType");

    loading.value = false;
});
</script>
