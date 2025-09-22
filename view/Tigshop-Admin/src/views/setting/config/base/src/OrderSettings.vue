<template>
    <div class="container">
        <a-spin :spinning="loading">
            <el-form ref="formRef" :model="formState" label-width="180px" style="display: flex; gap: 12px; flex-direction: column">
                <div class="content_wrapper">
                    <div class="title">基础设置</div>
                    <el-form-item label="发货后自动确认收货时间" prop="autoDeliveryDays">
                        <div>
                            <div class="flex">
                                <p class="mr10">卖家发货后</p>
                                <TigInput type="integer" v-model="formState.autoDeliveryDays" width="110px"></TigInput>
                                <p class="ml10">天，自动确认收货</p>
                            </div>
                            <div class="extra">修改后将对新产生的订单立即生效，已产生的订单自动确认收货时间将以发货时的设置为准。</div>
                        </div>
                    </el-form-item>
                    <el-form-item label="自动同意退货申请" prop="autoReturnGoods">
                        <div>
                            <div>
                                <el-radio-group v-model="formState.autoReturnGoods" class="itemWidth">
                                    <el-radio :value="1">开启</el-radio>
                                    <el-radio :value="0">关闭</el-radio>
                                </el-radio-group>
                            </div>
                            <el-form-item
                                label=""
                                prop="autoReturnGoodsDays"
                                :rules="[{ required: formState.autoReturnGoods == 1, message: '请输入卖家自动同意售后天数' }]"
                            >
                                <div class="flex">
                                    <p class="mr10">买家申请</p>
                                    <TigInput
                                        type="integer"
                                        v-model="formState.autoReturnGoodsDays"
                                        width="110px"
                                        :disabled="formState.autoReturnGoods == 0"
                                    ></TigInput>
                                    <p class="ml10">天后，自动同意客户售后申请</p>
                                </div>
                            </el-form-item>
                        </div>
                    </el-form-item>
                    <el-form-item label="买家申请售后限制" prop="afterSalesLimitDays">
                        <div>
                            <div class="flex">
                                <p class="mr10">买家确认收货</p>
                                <TigInput type="integer" v-model="formState.afterSalesLimitDays" width="110px"></TigInput>
                                <p class="ml10">天后，不支持买家申请售后</p>
                            </div>
                            <div class="extra">注：不适用虚拟商品、卡密商品、付费内容等特殊类型订单。</div>
                        </div>
                    </el-form-item>
                    <el-form-item label="未付款订单" prop="autoCancelOrderMinute">
                        <div class="itemWidth flex">
                            <span class="mr8">订单超</span>
                            <TigInput type="integer" v-model="formState.autoCancelOrderMinute" width="60px" />
                            <span class="ml8">分钟未支付自动取消</span>
                        </div>
                        <div class="extra">未支付的订单会自动取消，请填写分钟，比如10则代表10分钟未付款则取消订单，为0或空则不限制</div>
                    </el-form-item>
                    <!-- <el-form-item label="订单流转设置" prop="isChangeOrderStatus">
                        <div>
                            <div>
                                <el-radio-group v-model="formState.isChangeOrderStatus" class="itemWidth">
                                    <el-radio :value="1">开启</el-radio>
                                    <el-radio :value="0">关闭</el-radio>
                                </el-radio-group>
                            </div>
                            <div class="extra">开启后可对订单状态进行更改，更改完成后请及时关闭此功能，以免数据错乱。</div>
                        </div>
                    </el-form-item> -->
                    <div class="title">平台管理订单流转设置</div>
                    <el-form-item label="已支付订单可取消订单" prop="isPlatformCancelPaidOrder">
                        <div>
                            <div>
                                <el-radio-group v-model="formState.isPlatformCancelPaidOrder" class="itemWidth">
                                    <el-radio :value="1">开启</el-radio>
                                    <el-radio :value="0">关闭</el-radio>
                                </el-radio-group>
                            </div>
                            <div class="extra">
                                开启后，客户已支付的订单（待备货/待发货状态），管理员可以操作取消支付，已付款金额会流转至财务退款售后处理
                                 <el-popover :width="540" placement="right-end" trigger="click">
                                        <template #reference>
                                            <a>查看示例</a>
                                        </template>
                                        <template #default>
                                            <img src="@/style/images/isPlatformCancelPaidOrder.png" style="width: 500px" />
                                        </template>
                                    </el-popover>
                            </div>
                        </div>
                    </el-form-item>
                    <el-form-item label="已发货订单可取消发货" prop="isPlatformCancelDeliverOrder">
                        <div>
                            <div>
                                <el-radio-group v-model="formState.isPlatformCancelDeliverOrder" class="itemWidth">
                                    <el-radio :value="1">开启</el-radio>
                                    <el-radio :value="0">关闭</el-radio>
                                </el-radio-group>
                            </div>
                            <div class="extra">
                                开启后，已发货订单平台管理员可取消发货，已填写的物流信息将会清空
                                 <el-popover :width="540" placement="right-end" trigger="click">
                                        <template #reference>
                                            <a>查看示例</a>
                                        </template>
                                        <template #default>
                                            <img src="@/style/images/isPlatformCancelDeliverOrder.png" style="width: 500px" />
                                        </template>
                                    </el-popover>
                            </div>
                        </div>
                    </el-form-item>
                </div>
            </el-form>
            <div style="height: 20px"></div>
            <div class="selected-action-warp selected-warp-left" :style="{ left: themeInfo.layout !== 'topMenu' ? '369px' : '270px' }">
                <div class="selected-action">
                    <el-button :loading="confirmLoading" class="form-submit-btn" size="large" type="primary" @click="onSubmit">提 交</el-button>
                </div>
            </div>
        </a-spin>
    </div>
</template>
``

<script lang="ts" setup>
import "@/style/css/list.less";
import { onMounted, ref, shallowRef, watch } from "vue";
import { message } from "ant-design-vue";
import { OrderConfig } from "@/types/setting/config";
import { getConfigOrder, saveConfigOrder } from "@/api/setting/config";
import { useConfigStore } from "@/store/config";
import { convertNullsToEmptyStrings } from "@/utils/format";
import { useRoute } from "vue-router";
import { useThemeStore } from "@/store/theme";

const { themeInfo } = useThemeStore();
const route = useRoute();
const configStore = useConfigStore();
const formRef = shallowRef();
const confirmLoading = ref<boolean>(false);
const formState = ref<Partial<OrderConfig>>({
    autoDeliveryDays: undefined,
    autoReturnGoods: undefined,
    autoReturnGoodsDays: undefined,
    afterSalesLimitDays: undefined,
    autoCancelOrderMinute: undefined,
    isPlatformCancelPaidOrder: undefined,
    isPlatformCancelDeliverOrder: undefined,
    isShopCancelDeliverOrder: undefined
});
// 加载列表
onMounted(async () => {
    await loadFilter();
});
const loading = ref<boolean>(true);
const loadFilter = async () => {
    try {
        const result = await getConfigOrder();
        Object.assign(formState.value, convertNullsToEmptyStrings(result));
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
// 表单通过验证后提交
const onSubmit = async () => {
    await formRef.value.validate();
    confirmLoading.value = true;
    try {
        const result = await saveConfigOrder(formState.value);
        message.success("修改成功");
        configStore.updateConfig();
    } catch (error: any) {
        message.error(error.message);
    } finally {
        confirmLoading.value = false;
    }
};
</script>
<style lang="less" scoped>
.title {
    font-weight: bold;
    padding-bottom: 30px;
    font-size: 16px;
    line-height: 24px;
}
.content_wrapper {
    min-height: calc(100vh - 280px);
}

.subtitle {
    color: #999;
    font-weight: normal;
    font-size: 12px;
}

.mr8 {
    margin-right: 8px;
}

.width60 {
    width: 60px;
}

.ml8 {
    margin-left: 8px;
}

.itemWidth {
    width: 100%;
}
.error {
    color: red;
}
</style>
