<template>
    <view class="box">
        <tig-button v-if="btnType === 'button'" :plain="true" :disabled="btnDisabled" class="btn-verify" @click="handBtn"> {{ btnText }} </tig-button>
        <view v-if="btnType === 'text'" :plain="true" :disabled="btnDisabled" class="verify-btn" @click="handBtn"> {{ btnText }} </view>
        <up-code
            ref="uCodeRef"
            :seconds="60"
            :start-text="$t('获取验证码')"
            :end-text="$t('重新获取')"
            :change-text="$t('X秒重新获取')"
            @end="codeEnd"
            @start="codeStart"
            @change="codeChange"
        />
        <Verify ref="verifyRef" mode="pop" captcha-type="blockPuzzle" :img-size="{ width: '310px', height: '155px' }" @ok-callback="okCallback" />
    </view>
</template>

<script setup lang="ts">
import { ref, toRefs } from "vue";
import Verify from "@/components/verifition/Verify.vue";
import { useI18n } from "vue-i18n";
import { useConfigStore } from "@/store/config";

const configStore = useConfigStore();
const { t } = useI18n();
const props = defineProps({
    email: { type: String, default: "" },
    mobile: { type: String, default: "" },
    requestApi: { type: Function, required: true },
    isChecked: { type: Boolean, default: false },
    verifyTokenData: { type: String, default: null },
    event: { type: String, default: "login" },
    btnType: { type: String, default: "button" }
});
const emit = defineEmits(["mobileErrorCallback", "update:isChecked", "update:verifyTokenData"]);
const { mobile } = toRefs(props);
const uCodeRef = ref<any>();
const btnText = ref("");
const btnDisabled = ref(false);
const verifyToken = ref(null);
const verifyRef = ref();

const codeEnd = () => {
    btnDisabled.value = false;
};

const codeStart = () => {
    btnDisabled.value = true;
};

const handBtn = async () => {
    if (props.isChecked === false) return emit("mobileErrorCallback", t("请阅读并同意协议！"));
    if (btnDisabled.value) return;

    if (!props.email) {
        if (mobile.value == "") {
            emit("mobileErrorCallback", t("手机号不能为空！"));
            return;
        }
        if (!validatePhoneNumber(mobile.value)) {
            emit("mobileErrorCallback", t("手机号格式错误"));
            return;
        }
    } else {
        if (props.email == "") {
            emit("mobileErrorCallback", t("邮箱不能为空！"));
            return;
        }
        if (!validateEmail(props.email)) {
            emit("mobileErrorCallback", t("邮箱格式错误"));
            return;
        }
    }

    if (!verifyToken.value) {
        verifyRef.value.show();
        return;
    }

    H5GetCode();
};

const H5GetCode = async () => {
    try {
        await props.requestApi({
            mobile: mobile.value,
            email: props.email,
            verifyToken: verifyToken.value,
            event: props.event
        });
        emit("update:verifyTokenData", verifyToken.value);
        uni.showToast({
            title: t("验证码已发送"),
            duration: 1500
        });
        if (uCodeRef.value.canGetCode) {
            uCodeRef.value.start();
        }
    } catch (error: any) {
        emit("mobileErrorCallback", error.message);
        emit("update:verifyTokenData", "");
    } finally {
        verifyToken.value = null;
    }
};

const codeChange = (text: string) => {
    btnText.value = text;
};

const validatePhoneNumber = (phoneNumber: string) => {
    const regex = configStore.isOpenMobileAreaCode ? /^[1-9]\d{10,14}$/ : /^(?:(?:\+|00)86)?1\d{10}$/;
    // 判断是否符合国际手机号格式
    if (regex.test(phoneNumber)) {
        return true;
    } else {
        return false;
    }
};

const validateEmail = (email: string) => {
    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return regex.test(email);
};

const okCallback = (e: any) => {
    verifyToken.value = e.verifyToken;
    handBtn();
};
</script>

<style lang="scss" scoped>
.box {
    height: inherit;
    display: flex;
    align-items: center;
}

:deep(.btn-verify) {
    color: #333;
    min-width: 200rpx;
    padding: 0 5rpx;
    height: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
}
.verify-btn {
    color: var(--general);
    font-size: 28rpx;
}
</style>
