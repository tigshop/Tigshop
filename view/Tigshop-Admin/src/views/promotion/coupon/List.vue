<template>
    <div class="container">
        <div class="content_wrapper">
            <div class="bonus-wrap">
                <p class="subtitle">按使用场景快速创建</p>
                <div class="card-wrap">
                    <div class="card-wrap__container">
                        <div class="item-bg coupon-cards-item">
                            <div>
                                <div class="title">满减券</div>
                                <div class="desc">
                                    <p>例：满100元减20元<br />便于合理控制活动成本</p>
                                </div>
                            </div>
                            <DialogForm
                                isDrawer
                                @okCallback="loadFilter"
                                title="添加满减券"
                                width="800px"
                                path="promotion/coupon/Info"
                                :params="{ act: 'add', couponType: 1 }"
                            >
                                <el-button type="primary">立即新建</el-button>
                            </DialogForm>
                        </div>
                        <div class="item-bg coupon-cards-item">
                            <div>
                                <div class="title">折扣券</div>
                                <div class="desc">
                                    <p>例：满100元打9折<br />提高店铺销量和客单价</p>
                                </div>
                            </div>
                            <DialogForm
                                isDrawer
                                @okCallback="loadFilter"
                                title="添加折扣券"
                                width="800px"
                                path="promotion/coupon/Info"
                                :params="{ act: 'add', couponType: 2 }"
                            >
                                <el-button type="primary">立即新建</el-button>
                            </DialogForm>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lyecs-table-list-warp">
                <div class="list-table-tool lyecs-search-warp">
                    <el-form :model="filterParams" @submit.native.prevent="onSearchSubmit">
                        <div class="list-table-tool-row">
                            <div class="simple-form-warp">
                                <div v-if="filterParams.shopId == -1" class="simple-form-field">
                                    <div class="form-group">
                                        <div class="control-container">
                                            <SelectShop v-model:shopId="filterParams.shopId"></SelectShop>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <div class="control-container">
                                            <TigInput
                                                v-model="filterParams.keyword"
                                                name="keyword"
                                                placeholder="输入优惠券名称"
                                                clearable
                                                @clear="onSearchSubmit"
                                            >
                                                <template #append>
                                                    <el-button @click="onSearchSubmit"><span class="iconfont icon-chakan1"></span></el-button>
                                                </template>
                                            </TigInput>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <el-space>
                                            <el-popconfirm title="您确认要批量删除所选数据吗？" @confirm="onBatchSubmit('del')">
                                                <template #reference>
                                                    <el-button :disabled="selectedIds.length === 0">批量删除</el-button>
                                                </template>
                                            </el-popconfirm>
                                            <span v-if="selectedIds.length > 0">
                                                已选择：<b>{{ selectedIds.length }}</b> 项
                                            </span>
                                        </el-space>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="list-table-tool-row">
                            <div class="list-table-tool-col">
                                <el-space>
                                    <el-popconfirm title="您确认要批量删除所选数据吗？" @confirm="onBatchSubmit('del')">
                                        <template #reference>
                                            <el-button :disabled="selectedIds.length === 0">批量删除</el-button>
                                        </template>
                                    </el-popconfirm>
                                    <span v-if="selectedIds.length > 0">
                                        已选择：<b>{{ selectedIds.length }}</b> 项
                                    </span>
                                </el-space>
                            </div>
                        </div> -->
                    </el-form>
                </div>
                <div class="table-container">
                    <a-spin :spinning="loading">
                        <el-table
                            :data="filterState"
                            row-key="couponId"
                            @selection-change="onSelectChange"
                            :total="total"
                            @sort-change="onSortChange"
                            :loading="loading"
                        >
                            <el-table-column type="selection" width="32" />
                            <el-table-column label="优惠券名称" prop="couponId" :width="200">
                                <template #default="{ row }">
                                    <div style="position: relative">
                                        <PopForm
                                            label="优惠券名称"
                                            type="textarea"
                                            :requestApi="updateCouponFiled"
                                            v-model:org-value="row.couponName"
                                            :params="{ id: row.couponId, field: 'couponName' }"
                                        >
                                            <div>{{ row.couponName }}</div>
                                        </PopForm>
                                    </div>
                                </template>
                            </el-table-column>
                            <el-table-column label="发放类型">
                                <template #default="{ row }">
                                    {{ row.couponType == 1 ? "满减券" : "折扣券" }}
                                    <span v-if="row.isNewUser == 1" class="green">(新人专享)</span>
                                    <span v-if="row.limitUserRank.length" class="green">(会员专享)</span>
                                </template>
                            </el-table-column>
                            <el-table-column label="优惠券金额(折扣)" prop="couponMoney" sortable="custom">
                                <template #default="{ row }">
                                    <PopForm
                                        v-if="row.couponType == 1"
                                        label="优惠券金额"
                                        type="decimal"
                                        :requestApi="updateCouponFiled"
                                        v-model:org-value="row.couponMoney"
                                        :params="{ id: row.couponId, field: 'couponMoney' }"
                                    >
                                        <div>{{ row.couponMoney || "0" }}</div>
                                    </PopForm>
                                    <PopForm
                                        v-if="row.couponType == 2"
                                        label="优惠券折扣"
                                        type="decimal"
                                        :requestApi="updateCouponFiled"
                                        v-model:org-value="row.couponDiscount"
                                        :params="{ id: row.couponId, field: 'couponDiscount' }"
                                    >
                                        <div>{{ row.couponDiscount || "0" }}折</div>
                                    </PopForm>
                                </template>
                            </el-table-column>
                            <el-table-column label="优惠门槛" prop="minOrderAmount" sortable="custom">
                                <template #default="{ row }">
                                    <PopForm
                                        v-if="row.reduceType == 1"
                                        label="优惠门槛"
                                        :type="row.couponUnit == 1 ? 'decimal' : 'integer'"
                                        :requestApi="updateCouponFiled"
                                        v-model:org-value="row.minOrderAmount"
                                        :params="{ id: row.couponId, field: 'minOrderAmount' }"
                                    >
                                        <div>{{ row.minOrderAmount || "0" }}{{ row.couponUnit == 1 ? "元" : "件" }}</div>
                                    </PopForm>
                                    <div v-else>无门槛券</div>
                                </template>
                            </el-table-column>
                            <el-table-column label="是否展示" prop="isShow" sortable="custom">
                                <template #default="{ row }">
                                    <Switch v-model:checked="row.isShow" :requestApi="updateCouponFiled" :params="{ id: row.couponId, field: 'isShow' }" />
                                </template>
                            </el-table-column>
                            <el-table-column label="活动时间" prop="time">
                                <template #default="{ row }">
                                    {{ row.useStartDate }}  - {{ row.useEndDate }}
                                </template>
                            </el-table-column>
                            <el-table-column label="操作" fixed="right">
                                <template #default="{ row }">
                                    <DialogForm
                                        isDrawer
                                        @okCallback="loadFilter"
                                        title="编辑优惠券"
                                        width="800px"
                                        path="promotion/coupon/Info"
                                        :params="{ act: 'detail', id: row.couponId }"
                                    >
                                        <a class="btn-link">编辑</a>
                                    </DialogForm>
                                    <el-divider direction="vertical" />
                                    <DeleteRecord @afterDelete="loadFilter" :requestApi="delCoupon" :params="{ id: row.couponId }">删除</DeleteRecord>
                                </template>
                            </el-table-column>
                            <!-- <el-table-column label="操作" fixed="right" :width="150">
                                <template #default="{ row }">
                                    <DialogForm isDrawer @okCallback="loadFilter" title="编辑示例模板" width="800px" path="product/example/Info"
                                        :params="{ act: 'edit', id: row.exampleId }">
                                        <a class="btn-link">编辑</a>
                                    </DialogForm>
                                    <el-divider direction="vertical" />
                                    <DeleteRecord @afterDelete="loadFilter" :requestApi="delCoupon" :params="{ id: row.exampleId }">删除</DeleteRecord>
                                </template>
                            </el-table-column> -->
                            <template #empty>
                                <div class="empty-warp">
                                    <div v-if="!loading" class="empty-bg">暂无数据</div>
                                </div>
                            </template>
                        </el-table>
                    </a-spin>
                    <div class="pagination-con" v-if="total > 0">
                        <Pagination v-model:page="filterParams.page" v-model:size="filterParams.size" :total="total" @callback="loadFilter" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import "@/style/css/list.less";
import { DialogForm } from "@/components/dialog";
import { PopForm } from "@/components/pop-form";
import { DeleteRecord, Switch, Pagination } from "@/components/list";
import { useConfigStore } from "@/store/config";
import { CouponFilterState, CouponFilterParams } from "@/types/promotion/coupon.d";
import { getCouponList, batchSubmit, updateCouponFiled, delCoupon } from "@/api/promotion/coupon";
import { SelectShop } from "@/components/select";
const config: any = useConfigStore();
import { useListRequest } from "@/hooks/useListRequest";
const {
    listData: filterState,
    loading,
    total,
    selectedIds,
    filterParams,
    loadData: loadFilter,
    onSearchSubmit,
    onSortChange,
    onSelectChange,
    onBatchAction,
    resetParams
} = useListRequest<CouponFilterState, CouponFilterParams>({
    apiFunction: getCouponList,
    idKey: "couponId",
    defaultParams: {
        sortField: "",
        sortOrder: "",
        keyword: "",
        isShow: -1,
        shopId: 0,
        page: 1,
        size: config.get("pageSize")
    }
});
// 批量操作
const onBatchSubmit = async (action: string) => {
    await onBatchAction(action, batchSubmit);
};

// 初始化加载
loadFilter();
</script>
<style>
/*优惠券列表类型选择*/
.bonus-wrap .card-wrap {
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 24px;
    -ms-flex-pack: start;
    justify-content: flex-start;
    overflow: hidden;
    z-index: -1;
}

.bonus-wrap .card-wrap__container {
    transition: transform 0.6s ease-in-out;
    display: -ms-flexbox;
    display: flex;
}

.bonus-wrap .item-bg {
    position: relative;
    white-space: nowrap;
    padding: 20px 27px 17px;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    background: var(--tig-item-active-bg);
    margin-right: 15px;
    text-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.bonus-wrap .coupon-cards-item {
    min-width: 166px;
    width: 170px;
}

.bonus-wrap .coupon-cards-item .title {
    font-size: 16px;
    color: #333;
}

.bonus-wrap .coupon-cards-item .desc {
    padding-top: 10px;
    line-height: 18px;
    font-size: 12px;
    color: #666;
}

.bonus-wrap .coupon-cards-item button {
    margin-top: 15px;
    padding: 0 16px;
}

.bonus-wrap .subtitle {
    font-weight: 500;
    font-size: 14px;
    color: #323233;
    line-height: 20px;
    margin-bottom: 16px;
}

.bonus-wrap .item-bg2 {
    background: #fff;
    border: 1px solid #ebedf0;
    box-sizing: border-box;
    width: 223px !important;
}

@media only screen and (max-width: 767px) {
    .bonus-wrap .card-wrap__container {
        flex-wrap: wrap;
    }
    .bonus-wrap .item-bg {
        width: 47% !important;
        box-sizing: border-box;
        margin: 0;
        margin-top: 10px;
    }
    .bonus-wrap .item-bg:nth-child(2n) {
        margin-left: 3%;
    }
}
</style>
