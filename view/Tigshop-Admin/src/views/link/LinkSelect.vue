<template>
    <div class="link-style">
        <div class="left box">
            <div v-for="(item, index) in title" :key="index" :class="{ 'active': selectedIndex === index }" class="list-title" @click="selectItem(index)">
                <div>{{ item }}</div>
                <div class="right-ico"><em class="main_pel_m iconfont">&#xe630;</em></div>
            </div>
        </div>

        <div class="right box" :validate-event="false">
            <template v-if="selectedIndex === 0">
                <SelectProduct v-model:linkSelectData="selectData" :isMultiple="false"></SelectProduct>
            </template>
            <template v-if="selectedIndex === 1">
                <LinkCategory v-model:linkSelectData="selectData" :slide="false"></LinkCategory>
            </template>
            <!-- <template v-if="selectedIndex === 2">
                <LinkCategory v-model:linkSelectData="selectData" :slide="true"></LinkCategory>
            </template> -->
            <template v-if="selectedIndex === 2">
                <SelectBrand v-model:linkSelectData="selectData" :isMultiple="false"></SelectBrand>
            </template>
            <!-- <template v-if="selectedIndex === 4">

            </template> -->
            <template v-if="selectedIndex === 3">
                <SelectCoupon v-model:linkSelectData="selectData" :isMultiple="false"></SelectCoupon>
            </template>
            <template v-if="selectedIndex === 4">
                <SelectArticle v-model:linkSelectData="selectData" :isMultiple="false"></SelectArticle>
            </template>
            <template v-if="selectedIndex === 5">
                <LinkCustom v-model:linkSelectData="selectData"></LinkCustom>
            </template>
            <template v-if="selectedIndex === 6" class="div0">
                <LinkBase v-model:linkSelectData="selectData"></LinkBase>
            </template>
            <template v-if="selectedIndex === 8 && type === 'mobile'">
                <LinkDecorate v-model:linkSelectData="selectData" :isMultiple="false"></LinkDecorate>
            </template>
        </div>
    </div>
</template>

<script lang="ts" setup>
import { ref, watch, onMounted } from "vue";
import LinkBase from "@/views/link/src/LinkBase.vue";
import LinkDecorate from "@/views/link/src/LinkDecorate.vue";
import LinkCategory from "@/views/link/src/LinkCategory.vue";
import LinkCustom from "@/views/link/src/LinkCustom.vue";
import SelectProduct from "@/views/product/product/src/SelectProduct.vue";
import SelectBrand from "@/views/product/brand/src/SelectBrand.vue";
import SelectArticle from "@/views/content/article/src/SelectArticle.vue";
import SelectShop from "@/views/shop/shop/src/SelectShop.vue";
import SelectCoupon from "@/views/promotion/coupon/src/SelectCoupon.vue";
import type { LinkType } from "@/types/decorate/decorate"
const adminType = ref(localStorage.getItem("adminType"));
const props = defineProps({
    type: { type: String, default: "" },
});
const emit = defineEmits(["submitCallback", "update:confirmLoading", "close", "okType"]);
emit("okType", false);
const selectData = ref(<LinkType>{})

const title = ref([
    '商品详情页', '分类搜索', '品牌搜索', '优惠券', '文章资讯', '自定义链接', '其它页面'
])
onMounted(() => {
    if (props.type === "mobile") {
        title.value.splice(8, 0, '装修页面')
    }
})
const selectedIndex = ref<number>(0);
const selectItem = (index:number) => {
    if (selectedIndex.value !== index) {
        selectData.value = {}
    }
    selectedIndex.value = index;
};
watch(
    () => selectData.value,
    (newValue) => {
        if (Object.keys(newValue).length !== 0) {
            emit("okType", true);
        }
    }
);
const onSubmit = () => {
    emit('submitCallback', selectData.value);
}
// 表单提交
const onFormSubmit = () => {
    onSubmit()
};

defineExpose({ onFormSubmit });

</script>
<style lang="less" scoped>
.link-style {
    display: flex;
    gap: 10px;
    min-height: 100%;

    .box {
        border: 1px solid #eee;
        border-radius: 3px;
        padding: 0 0 4px 0;
        white-space: nowrap;
    }

    .left {
        min-width: 150px;
        display: flex;
        flex-direction: column;
        gap: 4px;

        .list-title {
            width: 100%;
            height: 40px;
            display: flex;
            box-sizing: border-box;
            padding: 0 15px 5px 15px;
            justify-content: start;
            line-height: 40px;
            cursor: pointer;

            .right-ico {
                flex: 1;
                text-align: right
            }
        }

        .list-title.active {
            background-color: #eef2ff;
            color: #428ce8;
        }
    }

    .right {
        padding: 10px;
        flex: 1;
    }
}
</style>
