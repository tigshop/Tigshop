<template>
    <div class="container">
        <a-spin :spinning="loading">
            <el-form ref="formRef" :model="formState" label-width="150px" style="display: flex; gap: 12px; flex-direction: column">
                <div class="content_wrapper">
                    <div class="title">商城信息</div>

                    <el-form-item label="商城LOGO" prop="shopLogo">
                        <FormAddGallery v-model:photo="formState.shopLogo" style="width: 100%" />
                        <div class="extra">
                            请根据页面设置对应大小的LOGO，高清需要上传双倍大小
                            <el-popover :width="400" placement="right-end" trigger="click">
                                <template #reference>
                                    <a>查看示例</a>
                                </template>
                                <template #default>
                                    <img src="@/style/images/shopLogo_demo.png" style="width: 380px" />
                                </template>
                            </el-popover>
                        </div>
                    </el-form-item>

                    <el-form-item label="商城名称" prop="shopName">
                        <BusinessData v-model:modelValue="formState.shopName" :dataId="1" :dataType="5"></BusinessData>
                    </el-form-item>
                    <el-form-item label="版权信息" prop="shopCompany">
                        <div>
                            <el-radio-group v-model="formState.shopCompany">
                                <el-radio :value="1">系统默认</el-radio>
                                <el-radio :value="0">自定义</el-radio>
                            </el-radio-group>
                            <div class="wechat-config">
                                <el-form ref="formRef" :model="formState">
                                    <el-form-item label="">
                                        <div class="flex flex-align-center" style="gap: 10px">
                                            <TigInput
                                                v-if="formState.shopCompany == 1"
                                                v-model="formState.defaultCopyright"
                                                classType="tig-form-input"
                                                disabled
                                            />
                                            <TigInput v-if="formState.shopCompany == 0" v-model="formState.shopCompanyTxt" classType="tig-form-input" />
                                            <el-button
                                                v-if="formState.shopCompany == 0"
                                                @click="changDefaultCopyright"
                                                link
                                                type="primary"
                                                style="margin-top: 3px"
                                            >
                                                设为默认
                                            </el-button>
                                        </div>
                                    </el-form-item>
                                </el-form>
                                <div class="extra">
                                    版权信息将会显示在 商城页面底部，如需自定义或隐藏，请购买去版权服务。
                                    <el-popover :width="400" placement="right-end" trigger="click">
                                        <template #reference>
                                            <a>查看示例</a>
                                        </template>
                                        <template #default>
                                            <img src="@/style/images/copyright.png" style="width: 380px" />
                                        </template>
                                    </el-popover>
                                </div>
                            </div>
                        </div>
                    </el-form-item>
                    <el-form-item label="技术支持标识" prop="poweredBy">
                        <div>
                            <el-radio-group v-model="formState.poweredBy">
                                <el-radio :value="1">系统默认</el-radio>
                                <el-radio :value="0">自定义</el-radio>
                            </el-radio-group>
                            <div class="wechat-config mt10">
                                <el-form ref="formRef" :model="formState">
                                    <el-form-item label="">
                                        <div class="flex" style="gap: 10px">
                                            <FormAddGallery v-if="formState.poweredBy == 0" v-model:photo="formState.poweredByLogo" style="width: 100%" />
                                            <Image
                                                v-if="formState.poweredBy == 1"
                                                :src="defaultLogoFormat(formState.defaultTechSupport)"
                                                style="max-width: 200px"
                                            ></Image>
                                            <el-button v-if="formState.poweredBy == 0" @click="changDefaultTechSupport" link type="primary">
                                                设为默认
                                            </el-button>
                                        </div>
                                    </el-form-item>
                                </el-form>
                                <div class="extra">
                                    技术标识将会显示在 商城页面底部，如需自定义或隐藏，请购买去版权服务。
                                    <el-popover :width="540" placement="right-end" trigger="click">
                                        <template #reference>
                                            <a>查看示例</a>
                                        </template>
                                        <template #default>
                                            <img src="@/style/images/default_tech_support.png" style="width: 500px" />
                                        </template>
                                    </el-popover>
                                </div>
                            </div>
                        </div>
                    </el-form-item>
                    <el-form-item label="标题栏版权隐藏" prop="poweredByStatus">
                        <div>
                            <div>
                                <el-radio-group v-model="formState.poweredByStatus" :disabled="licensedStore.licensedData.deCopyright == 0">
                                    <el-radio :value="1">是</el-radio>
                                    <el-radio :value="0">否</el-radio>
                                </el-radio-group>
                            </div>
                            <div class="extra">
                                <span v-if="licensedStore.licensedData.deCopyright == 0">购买去版权服务后可修改</span>
                                <span v-if="licensedStore.licensedData.deCopyright == 1" class="extra">如果选是，则隐藏浏览器标题栏版权信息 </span>
                                <el-popover :width="350" placement="right-end" trigger="click">
                                    <template #reference>
                                        <a>查看示例</a>
                                    </template>
                                    <template #default>
                                        <img src="@/style/images/powered_guide.png" style="width: 330px" />
                                    </template>
                                </el-popover>
                            </div>
                        </div>
                    </el-form-item>
                    <el-form-item label="地址展示" prop="kefuAddress">
                        <BusinessData v-model:modelValue="formState.kefuAddress" :dataId="6" :dataType="5"></BusinessData>
                        <div class="extra">企业地址会展示在商城PC端底部，为空则不显示</div>
                    </el-form-item>
                </div>
                <div class="content_wrapper">
                    <div class="title">备案信息</div>
                    <el-form-item label="ICP备案号" prop="shopIcpNo">
                        <BusinessData v-model:modelValue="formState.shopIcpNo" :dataId="7" :dataType="5"></BusinessData>
                    </el-form-item>
                    <el-form-item label="ICP备案链接" prop="shopIcpNoUrl">
                        <TigInput v-model="formState.shopIcpNoUrl" classType="tig-form-input" placeholder="不填则默认为：https://beian.miit.gov.cn" />
                    </el-form-item>
                    <el-form-item label="公安备案号" prop="shop110No">
                        <TigInput v-model="formState.shop110No" classType="tig-form-input" placeholder="不填则不显示" />
                    </el-form-item>
                    <el-form-item label="公安备案链接" prop="shop110Link">
                        <TigInput
                            v-model="formState.shop110Link"
                            classType="tig-form-input"
                            placeholder="不填则默认为：https://beian.mps.gov.cn/#/query/webSearch"
                        />
                    </el-form-item>
                </div>
                <div class="content_wrapper">
                    <div id="globalSettings" class="title">商城状态</div>
                    <el-form-item label="关闭注册" prop="shopRegClosed">
                        <el-radio-group v-model="formState.shopRegClosed" class="itemWidth">
                            <el-radio :value="1">是</el-radio>
                            <el-radio :value="0">否</el-radio>
                        </el-radio-group>
                    </el-form-item>
                    <el-form-item label="关闭下单" prop="closeShop">
                        <el-radio-group v-model="formState.closeOrder" class="itemWidth">
                            <el-radio :value="1">是</el-radio>
                            <el-radio :value="0">否</el-radio>
                        </el-radio-group>
                    </el-form-item>
                </div>
            </el-form>
            <div style="height: 30px"></div>
            <div class="selected-action-warp selected-warp-left" :style="{ left: themeInfo.layout !== 'topMenu' ? '369px' : '270px' }">
                <div class="selected-action">
                    <el-button :loading="confirmLoading" class="form-submit-btn" size="large" type="primary" @click="onSubmit">提 交 </el-button>
                </div>
            </div>
        </a-spin>
    </div>
</template>

<script lang="ts" setup>
import "@/style/css/list.less";
import { Image } from "@/components/image";
import { QuestionFilled } from "@element-plus/icons-vue";
import { onMounted, ref, shallowRef, watch } from "vue";
import { message } from "ant-design-vue";
import { BaseConfig } from "@/types/setting/config";
import { getConfigBasic, saveConfigBasic } from "@/api/setting/config";
import { useConfigStore } from "@/store/config";
import BusinessData from "@/components/multilingual/BusinessData.vue";
import { useScrollToElement } from "@/utils/util";
import { convertNullsToEmptyStrings } from "@/utils/format";
import { FormAddGallery } from "@/components/gallery";
import { useRoute } from "vue-router";
import { useThemeStore } from "@/store/theme";
const { themeInfo } = useThemeStore();
const route = useRoute();
import { useLicensedStore } from "@/store/licensed";

const licensedStore = useLicensedStore();
const origin = window.location.origin + "/";
const defaultLogoFormat = (path: string) => {
    return path.includes("http") ? path : origin + path;
};
// 监听路由变化
watch(
    () => route.query.point,
    () => {
        // 基本参数定义
        const { scrollToElement } = useScrollToElement((route.query.point as string) || "storeInformation", "scrollContainer", "storeInformation");
        scrollToElement();
    },
    { immediate: true }
);
const configStore = useConfigStore();
const config = configStore.config;
const formRef = shallowRef();
const confirmLoading = ref<boolean>(false);
const formState = ref<Partial<BaseConfig>>({
    shopCompany: undefined,
    shopCompanyTxt: "",
    defaultTechSupport: "",
    defaultCopyright: "Copyright © 2024 Tigshop. All Rights Reserved",
    poweredBy: undefined,
    poweredByLogo: "",
    poweredByStatus: undefined,
    shopName: "",
    kefuAddress: "",
    shopLogo: "",
    shopIcpNo: "",
    shopIcpNoUrl: "",
    shop110No: "",
    shop110Link: "",
    shopRegClosed: 0,
    closeOrder: 0
});
const changDefaultCopyright = () => {
    formState.value.defaultCopyright = formState.value.shopCompanyTxt;
    onSubmit();
};
const changDefaultTechSupport = () => {
    formState.value.defaultTechSupport = formState.value.poweredByLogo;
    onSubmit();
};
// 加载列表
onMounted(async () => {
    await loadFilter();
});
const loading = ref<boolean>(true);
const loadFilter = async () => {
    try {
        const result = await getConfigBasic();
        Object.assign(formState.value, convertNullsToEmptyStrings(result));
    } catch (error: any) {
        message.error(error.message);
    } finally {
        loading.value = false;
    }
};
const rules = ref({
    pcDomain: [
        { required: false, message: "", trigger: "blur" },
        {
            pattern: /^https?:\/\//i,
            message: "PC端域名必须以http或https开头",
            trigger: "blur"
        }
    ]
});

// 表单通过验证后提交
const onSubmit = async () => {
    await formRef.value.validate();
    confirmLoading.value = true;
    try {
        const result = await saveConfigBasic(formState.value);
        message.success("修改成功");
        // 更新后台设置项
        await configStore.updateConfig();
        await licensedStore._getLicensed();
        setTimeout(() => {
            location.reload();
        }, 500);
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
    width: 600px;
    padding: 20px;
    .extra {
        margin: 0px 0 0px 0;
    }
}
@media (max-width: 768px) {
    .wechat-config {
        width: 90% !important;
    }
}
</style>
