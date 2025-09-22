<template>
    <div>
        <a-spin :spinning="pageLoading">
            <div class="message_center">
                <div class="tab_box tab_box1">
                    <div v-for="(item, index) in msgList">
                        <div class="tab" :class="msgIndex == index ? 'current' : ''" @click="msgChange(index)" v-if="item.catId != 4">
                            <p>{{ item.catName }}</p>
                            <p class="num" v-if="item.unreadCount > 0">{{ item.unreadCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="tab_box tab_box2">
                    <div class="tab" v-for="(item, index) in childList" :class="childIndex == index ? 'current' : ''" @click="childChange(index)">
                        <p>{{ item.name }}</p>
                        <p class="num" v-if="item.unreadCount > 0">{{ item.unreadCount }}</p>
                    </div>
                </div>
                <div class="list_box">
                    <a-spin :spinning="loading && !pageLoading" style="width: 100%">
                        <div style="min-height: 200px">
                            <div class="item" v-if="filterState.length > 0">
                                <Collapse
                                    v-for="item in filterState"
                                    :item="item"
                                    :msgType="item.msgType"
                                    :key="item.msgType"
                                    @setReadedCallback="unsetReaded"
                                    @close="close"
                                ></Collapse>
                            </div>
                            <div class="table-empty" v-if="filterState.length === 0 && !loading && !pageLoading">
                                <img src="/src/style/images/common/empty-bg.png" alt="" />
                                <p>当前暂无消息哟</p>
                            </div>
                        </div>
                    </a-spin>
                    <div v-if="filterState.length > 0 && total > 0" class="pagination-con">
                        <Pagination
                            v-model:page="filterParams.page"
                            v-model:size="filterParams.size"
                            :background="false"
                            :total="total"
                            @callback="loadFilter"
                        />
                    </div>
                </div>
                <div class="btn">
                    <el-button @click="setAllReaded">全部已读</el-button>
                </div>
            </div>
        </a-spin>
    </div>
</template>
<script setup lang="ts">
import { reactive, ref, onMounted } from "vue";
import { useConfigStore } from "@/store/config";
import { Pagination } from "@/components/list";
import { message } from "ant-design-vue";
import Collapse from "./src/Collapse.vue";
import { useUserStore } from "@/store/user";
const useStore = useUserStore();
import type { AdminMsgFilterParams, AdminMsgFilterState, AdminMsgMsgTypeFilterState } from "@/types/panel/adminMsg";
import { getAdminMsgList, getAdminMsgType, getAdminMsgSetAllReaded } from "@/api/panel/adminMsg";
import dayjs from "dayjs";
// 父组件回调
const emit = defineEmits(["callback", "update:confirmLoading", "close"]);
const config: any = useConfigStore();
const msgList = ref<AdminMsgMsgTypeFilterState[]>([]);
interface childFrom {
    msgType: number;
    name: string;
    unreadCount: number;
}
const childList = ref<childFrom[]>([]);
const msgIndex = ref(0);
const childIndex = ref(0);
const pageLoading = ref<boolean>(true);
const loading = ref<boolean>(true);
const filterParams = reactive<AdminMsgFilterParams>({
    //初使化用于查询的参数
    page: 1,
    size: config.get("pageSize"),
    msgType: 11
});
const filterState = ref(<AdminMsgFilterState[]>[]);
const total = ref<number>(0);
// 获取列表的查询结果
const loadFilter = async () => {
    emit("callback");
    loading.value = true;
    try {
        const result = await getAdminMsgList({ ...filterParams });
        const result2 = await getAdminMsgType();
        filterState.value = result.records;
        msgList.value = result2;
        childList.value = toArray(msgList.value[msgIndex.value].child);
        total.value = result.total;
        pageLoading.value = false;
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
const close = () => {
    emit("close");
};
onMounted(() => {
    localStorage.setItem("lastOpenTime", String(dayjs().unix()));
    loadFilter();
});
const setAllReaded = async () => {
    await getAdminMsgSetAllReaded();
    emit("callback", false);
    loadFilter();
};
const msgChange = (index: number) => {
    msgIndex.value = index;
    childIndex.value = 0;
    filterState.value.length = 0;
    filterParams.msgType = toArray(msgList.value[msgIndex.value].child)[0].msgType;
    loadFilter();
};
const childChange = (index: number) => {
    filterParams.page = 1;
    childIndex.value = index;
    filterState.value.length = 0;
    filterParams.msgType = toArray(msgList.value[msgIndex.value].child)[index].msgType;
    loadFilter();
};
const unsetReaded = () => {
    msgList.value[msgIndex.value].unreadCount -= 1;
    childList.value[childIndex.value].unreadCount -= 1;
    useStore.messageCount -= 1;
};
const toArray = (arr: any) => {
    if (typeof arr == "object") {
        var newArr = [];
        for (let i in arr) {
            newArr.push(arr[i]);
        }
        return newArr;
    } else {
        return arr;
    }
};
</script>

<style lang="less" scoped>
.message_center {
    position: relative;
    display: flex;

    .tab_box {
        height: 418px;
        width: 150px;
        padding: 20px 10px;
        border-right: 1px solid #eee;
        display: flex;
        flex-direction: column;
        gap: 6px;
        .tab {
            padding: 7px 20px;
            line-height: 20px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;

            &:hover {
                color: var(--tig-primary);
            }

            .num {
                padding: 0 6px;
                height: 14px;
                line-height: 14px;
                color: #fff;
                font-weight: 400;
                background: #fa4350;
                border-radius: 7px;
                font-size: 12px;
            }
        }

        .current {
            background: rgba(61, 127, 255, 0.06);
            color: var(--tig-primary);
        }
    }

    .list_box {
        flex: 1;
        padding: 10px 20px;
        .item {
            height: 380px;
            overflow: auto;
            overflow-x: hidden;
            &::-webkit-scrollbar-thumb {
                border-radius: 8px;
                box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
                background: #666666;
            }
        }
        .table-empty {
            width: 100%;
            text-align: center;
            font-size: 14px;
            padding: 100px 0 50px;
            color: #999;

            img {
                width: 160px;
            }
        }
    }
    .pagination-con {
        margin-bottom: 0;
    }
    .btn {
        position: absolute;
        left: 20px;
        bottom: 20px;
    }
}
@media only screen and (max-width: 767px) {
    .message_center {
        flex-wrap: wrap;
    }
    .message_center .tab_box {
        padding: 0;
        display: flex;
        height: auto;
        width: 100%;
        flex-wrap: nowrap;
        border-bottom: 1px solid #eee;
        .tab {
            flex: 1;
            padding: 7px 10px;
            box-sizing: border-box;
            p {
                display: block;
                overflow: hidden;
                text-overflow: ellipsis;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 1;
            }
        }
    }
    .message_center .tab_box1 {
        background-color: #f2f2f2;
    }
    .message_center .tab_box2 {
        flex-wrap: wrap;
        .tab {
            width: auto;
            flex: none;
            background-color: #fff;
        }
    }
}
</style>
