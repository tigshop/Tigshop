<template>
    <div class="container">
        <div class="content_wrapper">
            <div class="lyecs-form-table">
                <a-spin :spinning="loading" style="width: 100%; margin-top: 100px">
                    <el-form ref="formRef" :model="licensedData" label-width="auto">
                        <div class="title">授权信息</div>
                        <el-form-item label="授权码：" prop="license">
                            <div>
                                <div class="textarea-box">
                                    <span class="content">
                                        {{ licensedData.license }}
                                    </span>
                                    <div class="mask-box">
                                        <DialogForm
                                            :maskClose="false"
                                            :isDrawer="false"
                                            path="setting/licensed/Info"
                                            title="授权码"
                                            width="600px"
                                            @okCallback="reenter"
                                        >
                                            <el-button class="form-submit-btn" size="large" type="primary">{{
                                                isAuthorized ? "重新输入授权码" : "输入授权码"
                                            }}</el-button>
                                        </DialogForm>
                                    </div>
                                </div>
                            </div>
                        </el-form-item>
                        <el-form-item label="授权类型：" prop="licensedTypeName">
                            <TigInput classType="tig-form-input" v-model="licensedData.licensedTypeName" disabled></TigInput>
                        </el-form-item>
                        <el-form-item label="授权版本：" prop="isEnterprise">
                            <div class="auth-img">
                                <img :src="isShowAvatar()" style="width: 80px" />
                            </div>
                        </el-form-item>
                        <el-form-item label="是否去版权：" prop="deCopyright">
                            <span class="green" v-if="licensedData.deCopyright == 1">已去版权</span>
                            <span v-else>否</span>
                        </el-form-item>
                        <el-form-item label="授权域名：" prop="authorizedDomain">
                            <div>
                                <div>
                                    <span class="green" v-if="licensedData.authorizedDomain">{{ licensedData.authorizedDomain }}</span>
                                    <span v-else>无</span>
                                </div>
                            </div>
                        </el-form-item>
                    </el-form>
                </a-spin>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
import "@/style/css/list.less";
import { onMounted, ref } from "vue";
import { DialogForm } from "@/components/dialog";
import { message } from "ant-design-vue";
import { licensedSave } from "@/api/setting/licensed";
import { useLicensedStore } from "@/store/licensed";
import { isShowAvatar } from "@/utils/authorize";
const licensedStore = useLicensedStore();
const licensedData = licensedStore.licensedData;
// 父组件回调
const emit = defineEmits(["submitCallback", "update:confirmLoading", "close"]);
const confirmLoading = ref(false);
const loading = ref<boolean>(false);
const license = ref(licensedData.license || "");
//是否授权
const isAuthorized = ref(license.value ? true : false);
const reenter = () => {
    licensedStore._getLicensed();
    setTimeout(() => {
        location.reload();
    }, 500);
};
onMounted(() => {
    licensedStore._getLicensed();
});
// 表单通过验证后提交
const onSubmit = async () => {
    confirmLoading.value = true;
    try {
        const result = await licensedSave({
            adminDarkLogo: licensedData.adminDarkLogo,
            adminLightLogo: licensedData.adminLightLogo,
            shopCompany: licensedData.shopCompany,
            poweredBy: licensedData.poweredBy,
            poweredByStatus: licensedData.deCopyright == 0 ? 0 : licensedData.poweredByStatus,
            versionInfoHidden: licensedData.deCopyright == 0 ? 0 : licensedData.versionInfoHidden
        });
        message.success("操作成功");
        reenter();
    } catch (error: any) {
        message.error(error.message);
    } finally {
        confirmLoading.value = false;
    }
};
// 表单提交
const onFormSubmit = () => {
    onSubmit();
};

defineExpose({ onFormSubmit });
</script>
<style lang="less" scoped>
.textarea-box {
    background-color: #f5f7fa;
    width: 430px;
    color: #999;
    height: 120px;
    overflow: hidden;
    border-radius: 5px;
    padding: 10px;
    overflow-wrap: break-word; /* 当单词过长时换行 */
    white-space: normal; /* 允许文本换行 */
    line-height: 16px;
    position: relative;
    .content {
        color: var(--el-disabled-text-color);
    }
    .mask-box {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 0 1px var(--el-disabled-border-color) inset;
    }
}
@media (max-width: 768px) {
    .textarea-box{
        width: 97%;
    }
}
.img-box {
    position: relative;
    width: 80px;
    height: 80px;
    .mask-box {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        cursor: not-allowed;
    }
}
.title {
    font-weight: bold;
    padding-top: 20px;
    padding-bottom: 20px;
    font-size: 14px;
}
.auth-img {
    display: flex;
    align-items: center;
}
</style>
