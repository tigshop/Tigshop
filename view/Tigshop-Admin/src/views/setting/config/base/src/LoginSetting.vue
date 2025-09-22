<template>
    <div class="container">
        <a-spin :spinning="loading">
            <el-form ref="formRef" :model="formState" label-width="160px" style="display: flex; gap: 12px; flex-direction: column">
                <div class="content_wrapper">
                    <div class="title">微信登录</div>
                    <el-form-item label="开启公众号授权登录" prop="openWechatOauth" class="WidthMax">
                        <el-radio-group v-model="formState.openWechatOauth" class="itemWidth" @change="changeopenWechatOauth">
                            <el-radio :value="1">是</el-radio>
                            <el-radio :value="0">否</el-radio>
                        </el-radio-group>
                        <div class="extra">此项设置控制是否开启微信注册及注册绑定手机，若为否将不支持开启微信注册及注册绑定手机</div>
                    </el-form-item>
                    <div class="web-content" v-if="formState.openWechatOauth == 1">
                        <el-form-item label="" prop="">
                            <div class="wechat-config">
                                <el-form :model="formState" label-width="130px">
                                    <el-form-item label="微信APPID" prop="wechatAppId">
                                        <div>
                                            <TigInput classType="tig-form-input" v-model="formState.wechatAppId" placeholder="请输入微信APPID" />
                                            <div class="extra">请从微信公众号后台获取，链接：https://mp.weixin.qq.com</div>
                                        </div>
                                    </el-form-item>
                                    <el-form-item label="微信AppSecret" prop="wechatAppSecret">
                                        <div>
                                            <div class="flex flex-align-center" style="gap: 10px">
                                                <div class="secret-txt line1" style="max-width: 380px">
                                                    {{ formState.wechatAppSecret }}
                                                </div>
                                                <DialogForm
                                                    :maskClose="false"
                                                    :isDrawer="false"
                                                    :params="{ title: '微信AppSecret', content: formState.wechatAppSecret }"
                                                    path="setting/config/src/EditSecret"
                                                    title="微信AppSecret"
                                                    width="600px"
                                                    @okCallback="formState.wechatAppSecret = $event"
                                                >
                                                    <el-button style="margin-top: 3px" link type="primary"> 编辑 </el-button>
                                                </DialogForm>
                                            </div>
                                            <div class="extra">请从微信公众号后台获取，编辑完成后，点击下方提交按钮确认修改，请确保填写正确的微信AppSecret</div>
                                        </div>
                                    </el-form-item>
                                    <el-form-item label="微信服务器Token" prop="wechatServerToken">
                                        <div>
                                            <TigInput classType="tig-form-input" v-model="formState.wechatServerToken" placeholder="请输入微信服务器Token" />
                                            <div class="extra">请从微信公众号后台获取</div>
                                        </div>
                                    </el-form-item>
                                    <el-form-item label="微信服务器Secret" prop="wechatServerSecret">
                                        <div>
                                            <div class="flex flex-align-center" style="gap: 10px">
                                                <div class="secret-txt line1" style="max-width: 380px">
                                                    {{ formState.wechatServerSecret }}
                                                </div>
                                                <DialogForm
                                                    :maskClose="false"
                                                    :isDrawer="false"
                                                    :params="{ title: '微信服务器Secret', content: formState.wechatServerSecret }"
                                                    path="setting/config/src/EditSecret"
                                                    title="微信服务器Secret"
                                                    width="600px"
                                                    @okCallback="formState.wechatServerSecret = $event"
                                                >
                                                    <el-button style="margin-top: 3px" link type="primary"> 编辑 </el-button>
                                                </DialogForm>
                                            </div>
                                            <div class="extra">
                                                请从微信公众号后台获取，编辑完成后，点击下方提交按钮确认修改，请确保填写正确的微信服务器Secret
                                            </div>
                                        </div>
                                    </el-form-item>
                                </el-form>
                            </div>
                        </el-form-item>
                    </div>

                    <el-form-item label="PC微信扫码登录" prop="openWechatRegister" class="WidthMax">
                        <el-radio-group
                            v-model="formState.openWechatRegister"
                            class="itemWidth"
                            @change="changeWechatRegister"
                            :disabled="formState.openWechatOauth == 0"
                        >
                            <el-radio :value="1">是</el-radio>
                            <el-radio :value="0">否</el-radio>
                        </el-radio-group>
                        <div class="extra">如果选是，PC端将显示微信扫码登录，小程序端将显示一键登录</div>
                    </el-form-item>
                    <el-form-item label="是否需要绑定手机号" prop="wechatRegisterBindPhone" class="WidthMax">
                        <el-radio-group
                            v-model="formState.wechatRegisterBindPhone"
                            class="itemWidth"
                            :disabled="formState.openWechatOauth == 0 || formState.openWechatRegister == 0"
                        >
                            <el-radio :value="1">是</el-radio>
                            <el-radio :value="0">否</el-radio>
                        </el-radio-group>
                        <div class="extra">
                            如果选是在微信登录时需绑定手机号方可注册，便于全站统一账号；若选择否，则不需要绑定手机，直接注册但不利于账号管理
                        </div>
                    </el-form-item>
                </div>

                <div class="content_wrapper">
                    <div class="title">邮箱登录</div>
                    <el-form-item label="是否开启邮箱注册" prop="openEmailRegister" class="WidthMax">
                        <el-radio-group v-model="formState.openEmailRegister" class="itemWidth">
                            <el-radio :value="1">开启</el-radio>
                            <el-radio :value="0">关闭</el-radio>
                        </el-radio-group>
                        <div class="extra">开启邮箱注册后，账号登录时可使用邮箱。</div>
                    </el-form-item>
                </div>
                <div class="content_wrapper">
                    <div class="title">基础设置</div>
                    <el-form-item label="手机是否选择区号" prop="isOpenMobileAreaCode" class="WidthMax">
                        <el-radio-group v-model="formState.isOpenMobileAreaCode" class="itemWidth">
                            <el-radio :value="1">开启</el-radio>
                            <el-radio :value="0">关闭</el-radio>
                        </el-radio-group>
                        <div class="extra">如果开启则会将区号存入数据库，请谨慎选择（开启后不建议关闭）。</div>
                    </el-form-item>
                    <el-form-item label="用户名前缀" prop="usernamePrefix ">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.usernamePrefix" placeholder="可不填" />
                            <div class="extra">仅用在自动注册生成username时有效，参考格式：Tigshop_</div>
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

<script lang="ts" setup>
import "@/style/css/list.less";
import { DialogForm } from "@/components/dialog";
import { onMounted, ref, shallowRef } from "vue";
import { message } from "ant-design-vue";
import { LoginConfig } from "@/types/setting/config";
import { getConfigLogin, saveConfigLogin } from "@/api/setting/config";
import { useConfigStore } from "@/store/config";
import { convertNullsToEmptyStrings } from "@/utils/format";
import { useRoute } from "vue-router";
import { useThemeStore } from "@/store/theme";
const { themeInfo } = useThemeStore();
const route = useRoute();
const configStore = useConfigStore();
const formRef = shallowRef();
const confirmLoading = ref<boolean>(false);
const formState = ref<Partial<LoginConfig>>({
    openEmailRegister: undefined,
    isOpenMobileAreaCode: undefined,
    usernamePrefix: "",
    openWechatRegister: undefined,
    wechatRegisterBindPhone: undefined,
    openWechatOauth: undefined,
    googleLoginOn: undefined,
    googleClientId: "",
    googleClientSecret: "",
    facebookLoginOn: undefined,
    facebookClientId: "",
    facebookClientSecret: "",
    wechatAppId: "",
    wechatAppSecret: "",
    wechatServerUrl: "",
    wechatServerToken: "",
    wechatServerSecret: ""
});
const changeopenWechatOauth = (e: number) => {
    formState.value.openWechatRegister = e;
    formState.value.wechatRegisterBindPhone = e;
};
const changeWechatRegister = (e: number) => {
    formState.value.wechatRegisterBindPhone = e;
};
// 加载列表
onMounted(async () => {
    await loadFilter();
});
const validateDomain = (rule: any, value: any, callback: any) => {
    if (!value) {
        callback();
        return;
    }
    const urlPattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
    if (!urlPattern.test(value)) {
        callback(new Error("请输入正确的域名格式"));
        return;
    }
    // 检查是否以斜杠 / 结尾
    if (value.endsWith("/")) {
        callback(new Error("域名不能以斜杠 / 结尾"));
        return;
    }
    callback();
};
const loading = ref<boolean>(true);
const loadFilter = async () => {
    try {
        const result = await getConfigLogin();
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
        const result = await saveConfigLogin(formState.value);
        message.success("修改成功");
        // configStore.updateConfig();
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
.wechat-config {
    background: #f5f7fa;
    width: 90%;
    padding: 20px 0px 10px 10px;
    .extra {
        margin: 0px 0 10px 0;
    }
}
@media (max-width: 768px) {
    .web-content {
        :deep(.el-form-item__content) {
            margin-left: 0 !important;
        }
        .wechat-config {
            width: 100%;
            padding-right: 10px;
        }
    }
}
</style>
