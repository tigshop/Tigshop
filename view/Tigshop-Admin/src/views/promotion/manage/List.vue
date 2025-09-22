<template>
    <div class="container">
        <div class="content_wrapper">
            <div class="row">
                <div class="col activity">
                    <div>
                        <div class="tip">仅统计优惠券、秒杀</div>
                        <div class="tabs flex">
                            <div
                                v-for="item in promotionTypeList"
                                :class="{ active: item.value == filterParams.timeType }"
                                class="item"
                                @click="changeTimeType(item.value)"
                            >
                                <div class="num">{{ item.num }}</div>
                                <div class="txt">{{ item.label }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <h2>商家常用</h2>
                        <el-row :gutter="16" class="app-wrapper cursor-pointer">
                            <el-col :lg="6" :md="8" :sm="12" :xs="12" class="app-wrapper-item" @click="toPage(2)">
                                <div class="item">
                                    <div class="icon-col">
                                        <i class="iconfont-admin icon-youhuiquan"></i>
                                    </div>
                                    <div>
                                        <div class="name">优惠券</div>
                                        <div class="tip">向客户发放店铺优惠券</div>
                                    </div>
                                </div>
                            </el-col>

                            <el-col :lg="6" :md="8" :sm="12" :xs="12" class="app-wrapper-item" @click="toPage(1)">
                                <div class="item">
                                    <div class="icon-col">
                                        <i class="iconfont-admin icon-miaosha"></i>
                                    </div>
                                    <div>
                                        <div class="name">限时秒杀</div>
                                        <div class="tip">快速抢购引导顾客更多消费</div>
                                    </div>
                                </div>
                            </el-col>
                        </el-row>
                    </div>
                </div>
                <div class="col">
                    <h2>活动记录</h2>
                    <el-tabs type="card" @tab-change="onTabChange">
                        <el-tab-pane v-for="item in promotionStatusList" :label="item.label" :value="item.value"></el-tab-pane>
                    </el-tabs>
                    <a-spin :spinning="loading">
                        <el-table :data="filterState" :loading="loading" :total="total" row-key="couponId">
                            <el-table-column label="活动名称" prop="promotionName" width="300">
                                <template #default="{ row }">
                                    <div style="position: relative">
                                        <div>{{ row.promotionName || "--" }}</div>
                                    </div>
                                </template>
                            </el-table-column>
                            <el-table-column label="活动类型" prop="typeText" width="300"></el-table-column>
                            <el-table-column label="活动时间" prop="timeText"></el-table-column>
                            <el-table-column label="操作" width="110">
                                <template #default="{ row }">
                                    <a class="btn-link" @click="toPage(row.type)">查看</a>
                                    <el-divider direction="vertical" />
                                    <DialogForm
                                        v-if="row.type == 1"
                                        :params="{ act: 'detail', id: row.relationId }"
                                        isDrawer
                                        path="promotion/seckill/Info"
                                        title="编辑限时秒杀"
                                        width="800px"
                                        @okCallback="loadFilter"
                                    >
                                        <a class="btn-link">编辑</a>
                                    </DialogForm>
                                    <DialogForm
                                        v-if="row.type == 2"
                                        :params="{ act: 'detail', id: row.relationId }"
                                        isDrawer
                                        path="promotion/coupon/Info"
                                        title="编辑优惠券"
                                        width="800px"
                                        @okCallback="loadFilter"
                                    >
                                        <a class="btn-link">编辑</a>
                                    </DialogForm>
                                    <DialogForm
                                        v-if="row.type == 6"
                                        :params="{ act: 'detail', id: row.relationId }"
                                        isDrawer
                                        path="promotion/productActivity/limitdiscount/Info"
                                        title="编辑限时折扣"
                                        width="900px"
                                        @okCallback="loadFilter"
                                    >
                                        <a class="btn-link">编辑</a>
                                    </DialogForm>
                                    <DialogForm
                                        v-if="row.type == 3 || row.type == 5 || row.type == 4"
                                        :params="{ act: 'detail', id: row.relationId, promotionType: row.type == 4 ? 2 : row.type == 3 ? 1 : 3 }"
                                        isDrawer
                                        path="promotion/productActivity/Info"
                                        title="编辑优惠活动"
                                        width="800px"
                                        @okCallback="loadFilter"
                                    >
                                        <a class="btn-link">编辑</a>
                                    </DialogForm>
                                </template>
                            </el-table-column>
                            <template #empty>
                                <div class="empty-warp">
                                    <div v-if="!loading" class="empty-bg">暂无数据</div>
                                </div>
                            </template>
                        </el-table>
                    </a-spin>
                    <div v-if="total > 0" class="pagination-con">
                        <Pagination v-model:page="filterParams.page" v-model:size="filterParams.size" :total="total" @callback="loadFilter" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
import "@/style/css/list.less";
import { DialogForm } from "@/components/dialog";
import { Pagination } from "@/components/list";
import { ref, reactive, onMounted } from "vue";
import { useConfigStore } from "@/store/config";
import type { PromotionFilterParams, PromotionFilterState } from "@/types/promotion/manage";
import { getPromotionList, getPromotionCount } from "@/api/promotion/manage";
import { message } from "ant-design-vue";
import { useRouter } from "vue-router";
import { getAdminType } from "@/utils/storage";

const adminType = getAdminType();

const router = useRouter();
const config: any = useConfigStore();
// 基本参数定义
const promotionTypeList = reactive([
    { value: 1, label: "进行中的活动", num: "-" },
    { value: 2, label: "7天内到期活动", num: "-" },
    { value: 3, label: "未开始活动", num: "-" }
]);
const promotionStatusList = reactive([
    { value: 0, label: "全部" },
    { value: 1, label: "秒杀" },
    { value: 2, label: "优惠券" },
]);
const filterParams = reactive<PromotionFilterParams>({
    page: 1,
    size: config.get("pageSize"),
    sortField: "",
    sortOrder: "",
    timeType: 1,
    types: 0
});
const filterState = ref<PromotionFilterState[]>([]);
const loading = ref<boolean>(true);
const total = ref<number>(0);
// 获取列表的查询结果
const loadFilter = async () => {
    loading.value = true;
    let type: any[] = [];
    if (filterParams.types === 0) {
        type = [];
    } else if (filterParams.types === 3) {
        type = [3, 4];
    } else {
        type = [filterParams.types];
    }
    try {
        const count = await getPromotionCount();
        (promotionTypeList[0].num as any) = count.timeType1Count;
        (promotionTypeList[1].num as any) = count.timeType2Count;
        (promotionTypeList[2].num as any) = count.timeType3Count;
        const result = await getPromotionList({ ...filterParams, type: type.join(",") });
        filterState.value = result.records;
        total.value = result.total;
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
onMounted(() => {
    loadFilter();
});
const changeTimeType = (e: number) => {
    filterParams.timeType = e;
    loadFilter();
};
const onTabChange = (e: number) => {
    filterParams.types = promotionStatusList[e].value;
    loadFilter();
};
const toPage = (type: number) => {
    switch (type) {
        case 1:
            // 秒杀
            router.push({ path: "/promotion/seckill/list" });
            break;
        case 2:
            // 优惠券
            router.push({ path: "/promotion/coupon/list" });
            break;
    }
};
</script>
<style lang="less" scoped>
.container {
    .content_wrapper {
        .row {
            .tit-box {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #f5f6fa;
                padding: 10px;
                margin-bottom: 20px;

                .tit {
                    border-left: 3px solid #155bd4;
                    padding-left: 10px;
                    font-size: 14px;
                }
            }

            .activity {
                h2 {
                    margin-bottom: 10px;
                }

                .tip {
                    font-size: 14px;
                    color: #999;
                }

                .tabs {
                    margin-top: 20px;

                    .item {
                        padding: 20px;
                        width: 240px;
                        background-color: #f7f7f7;
                        border-bottom: 3px solid #f7f7f7; /* 设置边框 */
                        display: flex;
                        flex-direction: column;
                        justify-content: flex-end;
                        margin-right: 15px;
                        cursor: pointer;

                        .num {
                            font-weight: 900;
                            font-size: 28px;
                            line-height: 28px;
                            font-family: Aviner;
                        }

                        .txt {
                            font-weight: 400;
                            font-size: 14px;
                            line-height: 20px;
                            margin-top: 10px;
                        }
                    }

                    .active {
                        background: var(--tig-item-active-bg);
                        border-bottom: 3px solid var(--tig-primary); /* 设置边框 */
                    }
                }
            }

            .col {
                h2 {
                    margin: 20px 0;
                }
            }

            .app-wrapper {
                display: flex;
                flex-wrap: wrap;
                margin-top: 20px;
                row-gap: 16px;

                .item {
                    display: flex;
                    align-items: center;
                    padding: 16px 20px;
                    background-color: #f7f8fa;
                    border-radius: 2px;
                    transition: background-color 0.2s ease-in-out;

                    &:hover {
                        background: #f2f2f2;
                    }
                }

                .icon-col {
                    background-color: #df4544;
                    color: #fff;
                    width: 40px;
                    height: 40px;
                    border-radius: 5px;
                    text-align: center;
                    margin-right: 10px;
                    line-height: 40px;

                    .iconfont-admin {
                        font-size: 25px;
                    }

                    p {
                        font-size: 20px;
                    }
                }

                .name {
                    font-size: 14px;
                }

                .tip {
                    color: #999;
                    font-size: 12px;
                    line-height: 16px;
                    margin-top: 4px;
                }
            }
        }
    }
}

:deep(.el-tabs--card) {
    .el-tabs__header .el-tabs__item {
        background-color: #f5f6fa;
    }

    .el-tabs__header .el-tabs__item.is-active {
        background-color: #fff;
        color: #333;
    }

    .el-tabs__header .el-tabs__nav {
        overflow: hidden;
    }
}
</style>
