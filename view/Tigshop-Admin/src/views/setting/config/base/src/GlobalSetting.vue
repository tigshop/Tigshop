<template>
    <div class="container">
        <a-spin :spinning="loading">
            <el-form ref="formRef" :model="formState" label-width="140px" style="display: flex; gap: 12px; flex-direction: column">
                <div class="content_wrapper" v-if="adminType === 'admin'">
                    <div class="title">后台风格</div>
                    <ThemeTogglePopup v-model:formState="formState"></ThemeTogglePopup>
                </div>
                <div class="content_wrapper">
                    <div class="title">SEO设置</div>
                    <el-form-item label="SEO标题后缀" prop="shopTitleSuffix">
                        <BusinessData v-model:modelValue="formState.shopTitleSuffix" :dataType="5" :dataId="2"></BusinessData>
                        <div class="extra">该后缀将显示在浏览器的标题栏，与SEO有关，建议长度不要超过20字符，效果如：“购物车 - Tig商城”</div>
                    </el-form-item>
                    <el-form-item label="首页SEO标题" prop="shopTitle">
                        <BusinessData v-model:modelValue="formState.shopTitle" :dataType="5" :dataId="3"></BusinessData>
                        <div class="extra">商城首页的完整标题（不带后缀）</div>
                    </el-form-item>
                    <el-form-item label="首页SEO关键词" prop="shopKeywords">
                        <BusinessData type="select" v-if="!loading" v-model:modelValue="formState.shopKeywords" :dataType="5" :dataId="4"></BusinessData>
                        <div class="extra">首页关键词，该设置与SEO有关，建议不要超过10个关键词（输入完请按回车键确认）</div>
                    </el-form-item>
                    <el-form-item label="首页SEO描述" prop="shopDesc">
                        <BusinessData v-model:modelValue="formState.shopDesc" :dataType="5" :dataId="5"></BusinessData>
                        <div class="extra">首页描述，该设置与SEO有关，建议长度不要超过50字符</div>
                    </el-form-item>
                    <el-form-item label="ico图标上传" prop="icoImg">
                        <FormAddGallery v-model:photo="formState.icoImg" style="width: 100%" />
                        <div class="extra">推荐使用高清128*128像素，格式为png或ico</div>
                    </el-form-item>
                    <el-form-item label="会员默认头像" prop="defaultAvatar">
                        <FormAddGallery v-model:photo="formState.defaultAvatar" style="width: 100%" />
                        <div class="extra">请上传1:1的200*200像素以内的图片</div>
                    </el-form-item>
                </div>

                <div class="content_wrapper" id="domain-setting">
                    <div class="title">域名设置</div>
                    <el-form-item label="PC客户端域名" prop="pcDomain" :rules="[{ required: false, validator: validateDomain }]">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.pcDomain" :maxlength="40" placeholder="" />
                            <div class="extra">格式参考：https://www.tigshop.com，填写后查看商城或查看商品默认跳PC端，不填则默认跳转环境解析的域名</div>
                        </div>
                    </el-form-item>
                    <el-form-item label="H5客户端域名" prop="h5Domain" :rules="[{ required: false, validator: validateDomain }]">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.h5Domain" :maxlength="40" placeholder="" />
                            <div class="extra">格式参考：https://m.tigshop.com，填写后查看商城或查看商品默认跳H5端，不填则默认跳转到PC端</div>
                        </div>
                    </el-form-item>
                    <!-- <el-form-item label="客服系统域名" prop="imDomain">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.imDomain" :maxlength="40" placeholder="" />
                            <div class="extra">格式参考：wss://tigshop.com/ws，填写后在线客服功能将使用该域名</div>
                        </div>
                    </el-form-item> -->
                    <el-form-item label="自动跳转H5" prop="autoRedirect">
                        <el-radio-group v-model="formState.autoRedirect" class="itemWidth">
                            <el-radio :value="1">开启</el-radio>
                            <el-radio :value="0">关闭</el-radio>
                        </el-radio-group>
                        <div class="extra">如果开启，且配置了H5端域名，移动设备打开PC客户端则会自动跳转到H5端域名</div>
                    </el-form-item>
                    <el-form-item label="管理员后台域名" prop="adminDomain" :rules="[{ required: false, validator: validateDomain }]">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.adminDomain" :maxlength="40" placeholder="" />
                            <div class="extra">格式参考：https://admin.tigshop.com，填写后默认跳后台管理端，不填则默认跳转环境解析的域名</div>
                        </div>
                    </el-form-item>
                </div>
                <div class="content_wrapper">
                    <div class="title">上传设置</div>
                    <el-form-item label="视频上传大小设置" prop="uploadMaxSize">
                        <div>
                            <TigInput type="integer" width="150px" v-model="formState.uploadMaxSize" placeholder="">
                                <template #append>MB</template>
                            </TigInput>
                            <div class="extra">单位：MB，默认100MB，上传视频大小限制。</div>
                        </div>
                    </el-form-item>
                </div>
                <div class="content_wrapper">
                    <div class="title">搜索设置</div>
                    <el-form-item label="搜索热门关键字" prop="searchKeywords">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.searchKeywords" />
                            <div class="extra">头部搜索框下方显示的搜索关键字,请用半角逗号(,)分隔多个关键字；颜色加亮请用b标签包含</div>
                        </div>
                    </el-form-item>
                    <el-form-item label="搜索敏感词屏蔽" prop="msgHackWord">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.msgHackWord" />
                            <div class="extra">设置后留言中出现的字符会提示非法，请用“,”号隔开，</div>
                        </div>
                    </el-form-item>
                    <el-form-item label="搜索分词" prop="isOpenPscws">
                        <el-radio-group v-model="formState.isOpenPscws" class="itemWidth">
                            <el-radio :value="1">开启</el-radio>
                            <el-radio :value="0">关闭</el-radio>
                        </el-radio-group>
                        <div class="extra">开启后将自动分词，比如：儿童机器人，分拆分为：儿童、机器人（会降低搜索结果精准度）</div>
                    </el-form-item>
                </div>
                <div class="content_wrapper">
                    <div class="title">地区设置</div>
                    <el-form-item label="商城默认地区" prop="shopCountry">
                        <div>
                            <div style="width: 300px">
                                <SelectRegion v-if="!loading" v-model="shopRegions"></SelectRegion>
                            </div>
                            <div class="extra">此地区会在系统未判断出用户IP所在地域时，默认定位地区（仅影响PC端右上角送货地址）</div>
                        </div>
                    </el-form-item>
                    <el-form-item label="默认国家" prop="defaultCountry">
                        <div>
                            <el-select v-model="formState.defaultCountry" style="width: 300px">
                                <el-option :value="0" label="不选择" />
                                <el-option v-for="item in countryList" :key="item.regionId" :value="item.regionId" :label="item.regionName" />
                            </el-select>
                            <div class="extra">
                                如果选择了默认国家，则会员在选择地址时默认会显示该国家下的省份或地区，不再显示国家选择（修改设置对已经添加的会员地址不生效）
                            </div>
                        </div>
                    </el-form-item>
                    <div class="title">ICO图标库</div>
                    <el-form-item label="自定义ico图标库" prop="icoDefinedCss">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.icoDefinedCss" />
                            <div>
                                <div class="extra">
                                    自定义ico图标库，前往http://iconfont.cn添加，按Tigshop教程操作，这里只需填写如：<br />https//at.alicdn.com/t/font_400590_y7t88bzlwhskbj4i.css
                                </div>
                                <div class="extra">您也可以下载至本地服务器，只需填写能访问到iconfont的完整域名和存放路径</div>
                            </div>
                        </div>
                    </el-form-item>
                </div>

                <div class="content_wrapper">
                    <div class="title" id="storageSettings">存储设置</div>
                    <el-form-item label="存储类型" prop="storageType">
                        <el-radio-group v-model="formState.storageType" class="itemWidth">
                            <el-radio :value="0">本地存储</el-radio>
                            <el-radio :value="1">阿里云OSS存储</el-radio>
                            <el-radio :value="2">腾讯云COS存储</el-radio>
                        </el-radio-group>
                        <div class="extra">开启云存储后，图片会直接通过接口上传至指定云存储，不会再保存在本地。</div>
                    </el-form-item>
                    <!-- <el-form-item label="图片是否保存全路径" prop="storageSaveFullPath" v-if="formState.storageType > 0">
                        <el-radio-group v-model="formState.storageSaveFullPath" class="itemWidth">
                            <el-radio :value="1">是</el-radio>
                            <el-radio :value="0">否</el-radio>
                        </el-radio-group>
                        <div class="extra">选择是后上传文件会保存全路径进数据库内。(如https://www.****.com/upload/2022/01/01/1.jpg)</div>
                    </el-form-item> -->
                    <el-form-item label="图片访问域名" prop="storageLocalUrl" v-if="formState.storageType == 0">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.storageLocalUrl" @blur="validateUrl(formState.storageLocalUrl)" />
                            <div>
                                <div class="error" v-if="isErrorText">图片访问域名结尾必须带斜杠 /</div>
                                <div class="extra">参考格式： https://oss.tigshop.com/</div>
                            </div>
                        </div>
                    </el-form-item>
                    <el-form-item label="图片访问域名" prop="storageOssUrl" v-if="formState.storageType == 1">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.storageOssUrl" @blur="validateUrl(formState.storageOssUrl)" />
                            <div>
                                <div class="error" v-if="isErrorText">图片访问域名结尾必须带斜杠 /</div>
                                <div class="extra">参考格式： https://oss.tigshop.com/</div>
                            </div>
                        </div>
                    </el-form-item>
                    <el-form-item label="图片访问域名" prop="storageCosUrl" v-if="formState.storageType == 2">
                        <div>
                            <TigInput classType="tig-form-input" v-model="formState.storageCosUrl" @blur="validateUrl(formState.storageCosUrl)" />
                            <div>
                                <div class="error" v-if="isErrorText">图片访问域名结尾必须带斜杠 /</div>
                                <div class="extra">参考格式： https://oss.tigshop.com/</div>
                            </div>
                        </div>
                    </el-form-item>
                    <template v-if="formState.storageType != 0">
                        <el-form-item label="AccessKeyId" prop="storageOssAccessKeyId" v-if="formState.storageType == 1">
                            <TigInput classType="tig-form-input" v-model="formState.storageOssAccessKeyId" />
                        </el-form-item>
                        <el-form-item label="SecretId" prop="storageCosSecretId" v-if="formState.storageType == 2">
                            <TigInput classType="tig-form-input" v-model="formState.storageCosSecretId" />
                        </el-form-item>
                        <el-form-item label="AccessKeySecret" prop="storageOssAccessKeySecret" v-if="formState.storageType == 1">
                            <div>
                                <div class="flex flex-align-center" style="gap: 10px">
                                    <div class="secret-txt line1" style="max-width: 380px">
                                        {{ formState.storageOssAccessKeySecret }}
                                    </div>
                                    <DialogForm
                                        :maskClose="false"
                                        :isDrawer="false"
                                        :params="{ title: 'AccessKeySecret', content: formState.storageOssAccessKeySecret }"
                                        path="setting/config/src/EditSecret"
                                        title="AccessKeySecret"
                                        width="600px"
                                        @okCallback="formState.storageOssAccessKeySecret = $event"
                                    >
                                        <el-button style="margin-top: 3px" link type="primary"> 编辑 </el-button>
                                    </DialogForm>
                                </div>
                                <div class="extra">编辑完成后，点击下方提交按钮确认修改，请确保填写正确的AccessKeySecret</div>
                            </div>
                        </el-form-item>
                        <el-form-item label="KeySecret" prop="storageCosSecretKey" v-if="formState.storageType == 2">
                            <TigInput classType="tig-form-input" type="textarea" v-model="formState.storageCosSecretKey" />
                        </el-form-item>
                        <el-form-item label="空间名称" prop="storageOssBucket" v-if="formState.storageType == 1">
                            <TigInput classType="tig-form-input" v-model="formState.storageOssBucket" />
                        </el-form-item>
                        <el-form-item label="空间名称" prop="storageCosBucket" v-if="formState.storageType == 2">
                            <TigInput classType="tig-form-input" v-model="formState.storageCosBucket" />
                        </el-form-item>
                        <el-form-item label="空间地域节点" prop="storageOssRegion" v-if="formState.storageType == 1">
                            <TigInput classType="tig-form-input" v-model="formState.storageOssRegion" />
                            <div class="extra"></div>
                        </el-form-item>
                        <el-form-item label="空间地域节点" prop="storageCosRegion" v-if="formState.storageType == 2">
                            <TigInput classType="tig-form-input" v-model="formState.storageCosRegion" />
                            <div class="extra"></div>
                        </el-form-item>
                    </template>
                </div>
            </el-form>
        </a-spin>
    </div>
    <div style="height: 20px"></div>
    <div class="selected-action-warp selected-warp-left" :style="{ left: themeInfo.layout !== 'topMenu' ? '369px' : '270px' }">
        <div class="selected-action">
            <el-button :loading="confirmLoading" class="form-submit-btn" size="large" type="primary" @click="onSubmit">提 交 </el-button>
        </div>
    </div>
</template>

<script lang="ts" setup>
import "@/style/css/list.less";
import { DialogForm } from "@/components/dialog";
import { SelectRegion } from "@/components/select";
import { onMounted, ref, shallowRef } from "vue";
import { FormAddGallery } from "@/components/gallery";
import { message } from "ant-design-vue";
import { GlobalConfig } from "@/types/setting/config";
import { getConfigGlobal, saveConfigGlobal } from "@/api/setting/config";
import { useConfigStore } from "@/store/config";
import BusinessData from "@/components/multilingual/BusinessData.vue";
import { convertNullsToEmptyStrings } from "@/utils/format";
import { ThemeTogglePopup } from "@/components/themetogglepopup";
import {  Regions } from "@/types/setting/config";
import { useThemeStore } from "@/store/theme";
const { themeInfo } = useThemeStore();
const adminType = localStorage.getItem("adminType");
const configStore = useConfigStore();
const themeStore = useThemeStore();
const formRef = shallowRef();
const shopRegions = ref<number[]>([]);
const confirmLoading = ref<boolean>(false);
const countryList = ref<Regions[]>([]);
const formState = ref<Partial<GlobalConfig>>({
    layout: "default",
    navTheme: "light",
    primaryColor: "blue",
    adminLightLogo: "",
    versionInfoHidden: 0,
    pcDomain: "",
    h5Domain: "",
    adminDomain: "",
    // imDomain: "",
    uploadMaxSize: 100,
    autoRedirect: undefined,
    shopTitle: "",
    shopTitleSuffix: "",
    shopKeywords: "",
    shopDesc: "",
    defaultAvatar: "",
    icoImg: "",
    icoDefinedCss: "",
    storageType: undefined,
    storageSaveFullPath: undefined,
    storageLocalUrl: "",
    storageOssUrl: "",
    storageOssAccessKeyId: "",
    storageOssAccessKeySecret: "",
    storageOssBucket: "",
    storageOssRegion: "",
    storageCosUrl: "",
    storageCosSecretId: "",
    storageCosSecretKey: "",
    storageCosBucket: "",
    storageCosRegion: "",
    langOn: undefined,
    langType: undefined,
    defaultCountry: undefined,
    langVolcengineAccessKey: "",
    langVolcengineSecret: "",
    msgHackWord: "",
    isOpenPscws: "",
    shopDefaultRegions: "",
    searchKeywords: ""
});
// 加载列表
onMounted(async () => {
    await loadFilter();
});
const scrollIntoView = () => {
    setTimeout(() => {
        const domainSetting = document.getElementById("domain-setting");
        if (domainSetting) {
            domainSetting.scrollIntoView({ behavior: "smooth" });
        }
    }, 100);
};
const validateDomain = (rule: any, value: any, callback: any) => {
    if (!value) {
        callback();
        return;
    }
    const urlPattern = /^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([/\w .-]*)*\/?$/;
    if (!urlPattern.test(value)) {
        callback(new Error("请输入正确的域名格式"));
        // 页面滚动到domain-setting
        scrollIntoView()
        return;
    }
    // 检查是否以斜杠 / 结尾
    if (value.endsWith("/")) {
        callback(new Error("域名不能以斜杠 / 结尾"));
        // 页面滚动到domain-setting
        scrollIntoView()
        return;
    }
    callback();
};
const isErrorText = ref<boolean>(false);
const validateUrl = (url: string) => {
    if (url.endsWith("/") || url.endsWith("\\")) {
        isErrorText.value = false;
        return;
    }
    isErrorText.value = true;
};
const loading = ref<boolean>(true);
const loadFilter = async () => {
    try {
        const result = await getConfigGlobal();
        if (result.shopDefaultRegions) {
            shopRegions.value = result.shopDefaultRegions.split(",").map(Number);
        }
        Object.assign(formState.value, convertNullsToEmptyStrings(result));
        countryList.value = result.countries || [];
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
    let url =
        formState.value.storageType == 0
            ? formState.value.storageLocalUrl
            : formState.value.storageType == 1
              ? formState.value.storageOssUrl
              : formState.value.storageCosUrl;
    await validateUrl(url);
    if (isErrorText.value) {
        message.error("图片访问域名结尾必须带斜杠 /");
        return;
    }
    if (shopRegions.value.length > 0) {
        formState.value.shopDefaultRegions = shopRegions.value.join(",");
    }
    try {
        const result = await saveConfigGlobal(formState.value);
        message.success("修改成功");
        await configStore.updateConfig();
        themeStore.getThemeInfo();
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
.content {
    padding: 0 20px;
}

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
</style>
