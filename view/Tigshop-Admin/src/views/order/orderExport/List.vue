<template>
    <div class="container">
        <div class="content_wrapper">
            <div class="lyecs-table-list-warp">
                <div class="list-table-tool lyecs-search-warp">
                    <div class="notice-warp">
                        <p>提示：</p>
                        <p>1、如果数据量过大导至查询时间过久或者直接显示超时报错，请尝试缩小查询的时间间隔！</p>
                        <p>2、可通过单击可增加项和导出项目来选择需要导出的参数，也可通过拖拽项目来调整参数排序（商品信息栏目默认在单行最后）</p>
                    </div>
                    <el-form :model="filterParams" inline>
                        <div class="advanced-search-warp list-table-tool-row">
                            <div class="simple-form-warp">
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <label class="control-label"><span>订单信息：</span></label>
                                        <div class="control-container">
                                            <TigInput v-model="filterParams.keyword" name="keyword" placeholder="订单号/收货人姓名/订单"> </TigInput>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <label class="control-label"><span>订单状态：</span></label>
                                        <div class="control-container">
                                            <el-select placeholder="请选择支付状态" v-model="filterParams.orderStatus">
                                                <el-option :value="0" label="待付款"></el-option>
                                                <el-option :value="1" label="待发货"></el-option>
                                                <el-option :value="2" label="已发货"></el-option>
                                                <el-option :value="3" label="已取消"></el-option>
                                                <el-option :value="4" label="无效"></el-option>
                                                <el-option :value="5" label="已完成"></el-option>
                                            </el-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <label class="control-label"><span>支付状态：</span></label>
                                        <div class="control-container">
                                            <el-select v-model="filterParams.payStatus" clearable>
                                                <el-option :value="0" label="未付款"></el-option>
                                                <el-option :value="1" label="支付中"></el-option>
                                                <el-option :value="2" label="已付款"></el-option>
                                                <el-option :value="3" label="退货中"></el-option>
                                                <el-option :value="4" label="已退款"></el-option>
                                            </el-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <label class="control-label"><span>发货状态：</span></label>
                                        <div class="control-container">
                                            <el-select v-model="filterParams.shippingStatus" clearable>
                                                <el-option :value="0" label="待发货"></el-option>
                                                <el-option :value="1" label="已发货"></el-option>
                                                <el-option :value="2" label="已收货"></el-option>
                                                <el-option :value="3" label="配送中"></el-option>
                                                <el-option :value="4" label="配送失败"></el-option>
                                            </el-select>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <label class="control-label"><span>详细地址：</span></label>
                                        <div class="control-container">
                                            <TigInput type="text" v-model="filterParams.address"></TigInput>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <label class="control-label"><span>Email：</span></label>
                                        <div class="control-container">
                                            <TigInput type="text" v-model="filterParams.email"></TigInput>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <label class="control-label"><span>手机号：</span></label>
                                        <div class="control-container">
                                            <TigInput type="text" v-model="filterParams.mobile"></TigInput>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <label class="control-label"><span>配送物流：</span></label>
                                        <div class="control-container">
                                            <SelectLogisticsCompany v-model:logisticsId="filterParams.logisticsId"></SelectLogisticsCompany>
                                        </div>
                                    </div>
                                </div>
                                <div class="simple-form-field">
                                    <div class="form-group">
                                        <label class="control-label"><span>下单时间：</span></label>
                                        <SelectTimeInterval
                                            type="date"
                                            v-model:start-date="filterParams.addStartTime"
                                            v-model:end-date="filterParams.addEndTime"
                                        ></SelectTimeInterval>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simple-form-warp">
                            <div class="simple-form-field">
                                <el-button type="primary" @click="orderExport" :loading="Exportloading" :disabled="filterResult.length === 0"
                                    >导出EXCEL</el-button
                                >
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <el-form-item>
                                <template #label>
                                    <span class="item-title-style">导出项目</span>
                                </template>
                                <div style="width: 100%">
                                    <el-tag
                                        size="large"
                                        v-for="(value, key) in filterResult"
                                        :key="key"
                                        class="mx-1"
                                        closable
                                        @close="closeTag(value, key)"
                                        :disable-transitions="true"
                                        type="info"
                                    >
                                        {{ value.value }}
                                    </el-tag>
                                </div>
                                <div style="margin-top: 20px; margin-left: 5px">
                                    <el-button @click="saveTag">保存</el-button>
                                    <el-button @click="emptyTag">清空</el-button>
                                </div>
                            </el-form-item>
                        </div>
                        <div style="margin-top: 20px">
                            <el-form-item>
                                <template #label>
                                    <span class="item-title-style">可增加项</span>
                                </template>
                                <el-tag
                                    size="large"
                                    :disable-transitions="true"
                                    v-for="(value, key) in filterResultNot"
                                    :key="key"
                                    class="mx-1"
                                    type="info"
                                    @click="addTag(value, key)"
                                >
                                    {{ value.value }}
                                </el-tag>
                            </el-form-item>
                        </div>
                    </el-form>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts" setup>
import "@/style/css/list.less";
import { SelectShop, SelectLogisticsCompany } from "@/components/select";
import { onMounted, reactive, ref } from "vue";
import { message } from "ant-design-vue";
import { useConfigStore } from "@/store/config";
import { ExportItemList, ExportItemListFilterParams } from "@/types/order/orderExport";
import { getExportItemInfo, getExportItemList, getOrderExport, saveExportItem } from "@/api/order/orderExport";
import requestExport from "@/utils/export";
import { SelectTimeInterval } from "@/components/select";
import { getDays } from "@/utils/util";
import { formattedDate } from "@/utils/time";
const config = useConfigStore();
const adminType = ref(localStorage.getItem("adminType"));
// 基本参数定义
const filterState = ref<ExportItemList>();
const loading = ref<boolean>(true);
const total = ref<number>(0);
const filterParams = reactive<ExportItemListFilterParams>({
    //初始化用于查询的参数
    exportItem: "",
    addStartTime: formattedDate(getDays(15, "sub"), "YYYY-MM-DD"),
    addEndTime: formattedDate(new Date(), "YYYY-MM-DD")
});
interface ResultNot {
    key: string;
    value: string;
}
const filterResultNot = ref<ResultNot[]>([]);
const filterResult = ref<ResultNot[]>([]);
// 获取列表的查询结果
const loadFilter = async () => {
    loading.value = true;
    try {
        const result = await getExportItemList();
        const info = await getExportItemInfo();
        let arrNot = Object.entries(result).map(([key, value]) => ({ key, value }));
        let arrInfo = Object.entries(info).map(([key, value]) => ({ key, value }));
        filterResultNot.value = arrNot.filter((itemA) => !arrInfo.some((itemB) => itemA.key === itemB.key));
        filterResult.value = arrInfo;
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};

onMounted(async () => {
    await loadFilter();
});
const addTag = (item: ResultNot, index: number) => {
    const isContain = filterResult.value.some((itemB) => {
        return itemB.key === item.key && itemB.value === item.value;
    });
    if (!isContain) {
        filterResult.value.push(item);
        filterResultNot.value.splice(index, 1);
    }
};
const closeTag = (item: ResultNot, index: number) => {
    filterResult.value.splice(index, 1);
    filterResultNot.value.push(item);
};
const emptyTag = () => {
    filterResultNot.value.push(...filterResult.value);
    filterResult.value.length = 0;
};

// 表单通过验证后提交
const saveTag = async () => {
    try {
        if (filterResult.value.length > 0) {
            const exportItem = filterResult.value.map((item) => item.key).join(",");
            const result = await saveExportItem({ exportItem });
            message.success("操作成功");
        }
    } catch (error: any) {
        message.error(error.message);
    }
};
const Exportloading = ref<boolean>(false);
// 导出订单
const orderExport = async () => {
    Exportloading.value = true;
    try {
        filterParams.exportItem = filterResult.value.map((item) => item.key).join(",");
        const result = await getOrderExport(filterParams);
        Exportloading.value = false;
        requestExport(result, "导出订单");
    } catch (error: any) {
        message.error(error.message);
    } finally {
        Exportloading.value = false;
    }
};
</script>

<style lang="less" scoped>
.item-title-style {
    font-weight: bold;
    margin-left: 8px;
}

.mx-1 {
    margin: 5px;
    cursor: pointer;
}

.notice-warp {
    background-color: #eef2ff;
    border-radius: 9px;
    padding: 15px;
    margin-bottom: 20px;
    line-height: 24px;
}
.list-table-tool {
    :deep(.el-tag) {
        border: none !important;
        background-color: #f2f2f2 !important;
        color: #666 !important;
    }
}
</style>
