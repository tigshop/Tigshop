<template>
    <div class="multilingual-item-content" :style="style" v-if="modelValue">
        <slot></slot>
    </div>
</template>
<script lang="ts" setup>
import { DialogForm } from "@/components/dialog";
import { ref, defineModel, onMounted, watch } from "vue";
import { message } from "ant-design-vue";
import { imageFormat } from "@/utils/format";
import { CircleCloseFilled } from "@element-plus/icons-vue";
const props = defineProps({
    disabled: {
        type: Boolean,
        default: false
    },
    placeholder: {
        type: String,
        default: ""
    },
    dataType: {
        type: Number,
        default: 2
    },
    dataId: {
        type: Number,
        default: 0
    },
    data: {
        //额外传参，添加相册返回的同时会回传
        type: Object,
        default: {}
    },
    style: {
        type: Object,
        default: {}
    },
    maxlength: {
        type: Number,
        default: 999999
    },
    type: {
        type: String,
        default: "image"
    },
    picThumb: {
        type: String,
        default: ""
    },
    splitString: {
        type: String,
        value: ","
    },
    del: {
        type: Boolean,
        default: true
    },
    edit: {
        type: Boolean,
        default: true
    }
});
const emit = defineEmits(["update:modelValue", "Edit", "Delete"]);
const modelValue = defineModel<string>("modelValue", { type: String, default: "" });
const translationName = ref<string>("");
const isTranslation = ref(false);

const onEdit = (result: any, data: any) => {
    emit("Edit", { result, data });
};
const onAdd = (result: any, data: any) => {
    emit("Edit", { result, data });
};
const onDelete = (index: number) => {
    emit("Delete", index);
};
// 监听modelValue变化
watch(modelValue, (newVal: string) => {
    if (newVal != translationName.value) {
        isTranslation.value = true;
    } else {
        isTranslation.value = false;
    }
});
</script>

<style lang="less" scoped>
.multilingual-item-content {
    width: 100%;
    height: 100%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .multilingual-icon {
        position: absolute;
        top: -7px;
        right: -7px;
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100px;
        background: #fff;
        border-radius: 3px;
        border: 1px solid #cbcbcb;
    }
    .change-image {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 20px;
        line-height: 20px;
        font-size: 12px;
        color: #fff;
        background: rgba(0, 0, 0, 0.5);
        cursor: pointer;
    }
    .close {
        position: absolute;
        top: -7px;
        left: -7px;
        cursor: pointer;
        display: none;
    }
    &:hover {
        .close {
            display: block;
        }
    }
}
</style>
