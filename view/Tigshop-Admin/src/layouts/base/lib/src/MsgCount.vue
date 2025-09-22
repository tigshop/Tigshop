<template>
    <div class="top-bar-right flex flex-align-center">
        <div class="top-bar-item top-admin_msg" @click="markAsRead" :class="themeInfo.layout">
            <DialogForm
                v-bind:is-drawer="false"
                path="panel/adminMsg/AdminMsg"
                title="消息中心"
                :showFooter="false"
                width="1000px"
                :bodyStyle="{ padding: 0 }"
                @callback="fetchMessage"
            >
                <a class="top-bar-btn lyecs-dialogPage" :class="themeInfo.navTheme">
                    <i class="iconfont-admin icon-tongzhi-L"></i>
                    <span v-if="themeInfo.layout !== 'topMenu'">消息</span>
                    <span class="admin_msg-order_count" v-if="message?.orderCount > 0 && themeInfo.layout !== 'topMenu'">新订单 {{ message.orderCount }}</span>
                    <em class="admin_msg-count" v-if="useStore.messageCount > 0">{{ useStore.messageCount }}</em>
                </a>
            </DialogForm>
        </div>
        <div class="top-bar-item" :class="themeInfo.layout">
            <a class="top-bar-btn" :class="themeInfo.navTheme" :href="urlFormat('/')" target="_blank"
                ><i class="iconfont icon-guanli"></i><span v-if="themeInfo.layout !== 'topMenu'">查看店铺</span></a
            >
        </div>
        <div class="top-bar-item top-bar-user" id="dropdown-memu" :class="themeInfo.layout">
            <a-dropdown :trigger="['click']">
                <div class="admin-user-warp" v-if="userInfo.username">
                    <a class="top-bar-btn" :class="themeInfo.navTheme" v-if="screenWidth >= 900">
                        <span class="admin-user-photo" v-if="adminType !== 'shop'">
                            <template v-if="extractContent(String(userInfo.avatar)) == 'def'">
                                <img :src="returnAvatar(userInfo.avatar)" />
                            </template>
                            <template v-else>
                                <img :src="imageFormat(userInfo.avatar)" />
                            </template>
                        </span>
                        <div class="admin-user-name" v-if="themeInfo.layout !== 'topMenu'">
                            {{ /^1[3-9]\d{9}$/.test(userInfo.username) ? userInfo.username.replace(/(\d{3})\d{4}/, "$1****") : userInfo.username }}
                        </div>
                        <div class="admin-user-name" v-if="adminType == 'shop'">
                            {{ shopInfo.shopTitle }}
                        </div>
                        <i class="iconfont icon-xiala"></i>
                    </a>
                    <a class="top-bar-btn" v-else>
                        <i class="iconfont icon-xiala"></i>
                    </a>
                </div>
                <template #overlay>
                    <div class="dropdown-memu top-bar-memu">
                        <div class="entrance-list">
                            <router-link :to="{ path: adminType == 'shop' || adminType == 'vendor' ? '/setting/account-editing/index' : '/authority/account-editing/index' }">
                                <p class="entrance lyecs-openPage">
                                    <!-- <i class="iconfont icon-gerenshezhi"></i> -->
                                    <i class="iconfont-tig icon-guanlizhanghao"></i>
                                    <span>管理账号</span>
                                </p>
                            </router-link>
                            <p class="entrance" @click="clearCache">
                                <i class="iconfont-tig icon-qingchuhuancun"></i>
                                <span>清除缓存</span>
                            </p>
                            <p class="entrance" @click="onLogout">
                                <i class="iconfont-tig icon-tuichudenglu"></i>
                                <span>退出登录</span>
                            </p>
                        </div>
                    </div>
                </template>
            </a-dropdown>
        </div>
    </div>
    <div class="dialog-box">
        <el-dialog :z-index="12" v-model="dialogVisible">
            <SelectShop v-if="dialogVisible" @closePopup="closePopup" :isIndex="true" :username="userInfo.username"></SelectShop>
        </el-dialog>
    </div>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted, computed, onBeforeUnmount } from "vue";
import SelectShop from "@/components/merchant/SelectShop.vue";
import { extractContent } from "@/utils/util";
import { returnAvatar } from "@/utils/avatar";
import { getAdminMsgCount } from "@/api/common/common";
import { DialogForm } from "@/components/dialog";
import { useConfigStore } from "@/store/config";
import { useMenusStore } from "@/store/menu";
import { useThemeStore } from "@/store/theme";
import { useUserStore } from "@/store/user";
import { urlFormat, imageFormat } from "@/utils/format";
import { cleanUp } from "@/api/common/common";
import { notification } from "ant-design-vue";
import { updateMenu } from "@/utils/menus";
import type { MainMenu } from "@/types/common/common.d";
const { themeInfo } = useThemeStore();
const adminType = ref(localStorage.getItem("adminType"));
const useStore = useUserStore();
const menusStore = useMenusStore();
const { logout, updateUserInfo } = useUserStore();
const userInfo = computed(() => useUserStore().userInfo);
const shopInfo = computed(() => useUserStore().shopInfo);
import dayjs from "dayjs";
const config: any = useConfigStore();
const message = ref<any>(null);
let pollingInterval: any = null;
const fetchMessage = async () => {
    try {
        const response = await getAdminMsgCount({ startTime: localStorage.getItem("lastOpenTime") }); // 替换为你的API端点
        message.value = response;
        useStore.messageCount = response.unreadMsgCount;
    } catch (error) {
        console.error("请求消息失败:", error);
    }
};

const markAsRead = () => {
    message.value.orderCount = 0;
    localStorage.setItem("lastOpenTime", String(dayjs().unix()));
};
const startPolling = () => {
    pollingInterval = setInterval(fetchMessage, 30000); // 每15秒请求一次
};

const stopPolling = () => {
    if (pollingInterval) {
        clearInterval(pollingInterval);
        pollingInterval = null;
    }
};
// 清除缓存
const clearCache = async () => {
    try {
        const result = await cleanUp();
        const configStore = useConfigStore();
        // 更新后台设置项
        updateUserInfo();
        configStore.updateConfig();
        notification["success"]({
            message: "缓存已清除",
            description: "缓存清除后可刷新页面更新效果"
        });
    } catch (error: any) {}
};
const onLogout = async () => {
    logout();
};
const dialogVisible = ref(false);
const switchShop = () => {
    dialogVisible.value = true;
};
const closePopup = () => {
    dialogVisible.value = false;
};
const screenWidth = ref(window.innerWidth);
const handleResize = () => {
    screenWidth.value = window.innerWidth;
};
onMounted(() => {
    updateUserInfo();
    fetchMessage(); // 组件挂载时立即请求一次
    startPolling(); // 开始轮询
    window.addEventListener("resize", handleResize);
});

onUnmounted(() => {
    stopPolling(); // 组件卸载时停止轮询
});

onBeforeUnmount(() => {
    window.removeEventListener("resize", handleResize);
});
</script>

<style scoped lang="less">
.top-bar-right {
    gap: 10px;
    margin-right: 10px;
}
/* 你的组件样式 */
.top-bar-item {
    position: relative;
    display: flex;
    align-items: center;
}
.default {
    .top-bar-btn {
        display: block;
        height: 40px;
        padding: 0 12px;
        font-size: 14px;
        color: #788d9b;
        text-align: center;
        transition:
            background 0.2s ease 0s,
            color 0.2s ease 0s;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;

        &:hover {
            background: #f7f7f7;
        }
    }
}
.topMenu {
    .top-bar-btn {
        display: block;
        height: 40px;
        padding: 0 10px !important;
        font-size: 14px;
        text-align: center;
        transition:
            background 0.2s ease 0s,
            color 0.2s ease 0s;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        position: relative;
        color: var(--tig-menu-text-color);
    }
    .top-bar-btn:hover {
        background: #9c9c9c2e !important;
    }
    .light {
        color: #788d9b;
    }
    .light:hover {
        background: #f7f7f7 !important;
    }
}

.top-bar-item .top-bar-btn .admin-user-photo img {
    width: 26px;
    height: 26px;
    border-radius: 26px;
    margin-right: 10px;
}

.top-bar-item .top-bar-btn i {
    font-size: 18px;
}

.top-bar-item .top-bar-btn i.fs-18 {
    font-size: 18px;
}

.top-bar-item .top-bar-btn .noc_count {
    background: #ff9900;
    padding: 4px 7px;
    border-radius: 6px;
    vertical-align: top;
    margin-left: 4px;
}

.top-bar-item .top-bar-btn .admin_msg-count {
    position: absolute;
    left: 10px;
    top: 1px;
    font-size: 12px;
    color: #fff;
    background-color: #f33;
    line-height: 14px;
    padding: 0 5px;
    border-radius: 8px;
}
.admin_msg-order_count {
    font-size: 10px;
    color: #fff;
    background-color: #ffb53e;
    line-height: 14px;
    padding: 2px 8px;
    border-radius: 14px;
    margin-left: 5px;
}

.dropdown-memu {
    background-color: #ffffff;
    box-shadow:
        0 6px 16px 0 rgba(0, 0, 0, 0.08),
        0 3px 6px -4px rgba(0, 0, 0, 0.12),
        0 9px 28px 8px rgba(0, 0, 0, 0.05);
    font-size: 12px;
    border-radius: 9px;
    overflow: hidden;
    width: 130px !important;
    .entrance-list {
        display: flex;
        flex-direction: column;

        p {
            border-radius: 2px;
            color: #333;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 6px 0 6px 16px;
            color: #999;
            column-gap: 8px;
            cursor: pointer;

            &:hover {
                background: #f5f5f5;
            }
        }

        span {
            color: #323233;
            font-weight: 700;
            font-size: 14px;
        }

        i {
            font-size: 20px;
            margin-top: 1px;
        }
    }

    .admin_exit {
        border-top: 1px solid #f5f5f5;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;

        a {
            line-height: 40px;
            padding: 0 10px;
            flex: 1;
            text-align: center;
        }
    }
}

@media only screen and (max-width: 767px) {
    .top-bar-item {
        span {
            display: none;
        }
    }
}
</style>
<style scoped lang="less">
.dialog-box {
    :deep(.el-dialog__header) {
        display: none;
    }
    :deep(.el-dialog) {
        width: 760px;
    }
}

@media only screen and (max-width: 767px) {
    .dialog-box {
        :deep(.el-dialog) {
            width: 80%;
        }
    }
}
</style>
