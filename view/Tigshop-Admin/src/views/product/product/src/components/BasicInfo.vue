<template>
    <el-form-item :rules="[{ required: true }]" label="商品类型" prop="productType">
        <div>
            <div class="extra mb10" style="margin-top: 3px">不同商品类型可编辑的字段内容不同，商品类型一旦发布后将不可更改</div>
            <RadioType v-model:modelValue="formState.productType" :disabled="action == 'detail'" :radioList="radioList"></RadioType>
            <div v-if="formState.productType != 1" class="extra mt10">该类型商品同样需要客户填写收货地址</div>
        </div>
    </el-form-item>
    <el-form-item :rules="[{ required: true, validator: validateImg }]" label="商品图片" prop="imgList">
        <FormAddGallery v-if="!loading" v-model:photos="formState.imgList" :disabled="examine == 1 || type !== ''" :isMultiple="true"></FormAddGallery>
        <div class="extra">您可以通过拖拽来调整相册图片顺序，第一张图将作为商品主图展示</div>
    </el-form-item>
    <el-form-item label="商品视频" prop="productVideoInfo">
        <FormAddGalleryVideo v-if="!loading" v-model:video="formState.productVideoInfo" :disabled="examine == 1 || type !== ''"></FormAddGalleryVideo>
        <div class="extra">如有商品视频则商品视频作为商品主图展示</div>
    </el-form-item>
    <el-form-item
        v-if="formState.productType == 3"
        :rules="[{ required: true, validator: validateCardGroup }]"
        class="inner-item"
        label="电子卡券分组"
        prop="cardGroupId"
    >
        <div class="flex flex-justify-between">
            <el-select v-model="formState.cardGroupId" :disabled="examine == 1 || type !== ''" placeholder="请选择" style="width: 200px">
                <el-option v-for="item in formState.eCardList" :key="item.groupId" :label="item.groupName" :value="item.groupId" />
            </el-select>
        </div>
    </el-form-item>
    <el-form-item :rules="[{ required: true, validator: validateName }]" class="inner-item" label="商品名称" prop="productName">
        <BusinessData
            v-model:modelValue="formState.productName"
            :dataId="id"
            :dataType="2"
            :disabled="examine == 1 || type !== ''"
            :maxlength="100"
            placeholder="请输入商品名称"
        ></BusinessData>
    </el-form-item>
    <el-form-item class="inner-item" label="商品品牌" prop="brandId">
        <SelectBrand v-if="!loading" v-model:brandId="formState.brandId" :disabled="examine == 1 || type !== ''" style="width: 200px"></SelectBrand>
    </el-form-item>
    <el-form-item :rules="[{ required: true, message: '请选择商品类目!', validator: validateCate }]" class="inner-item" label="商品类目" prop="categoryId">
        <div class="flex flex-justify-between">
            <SelectCategory
                v-if="!loading"
                ref="selectCategory"
                v-model:categoryId="formState.categoryId"
                :disabled="examine == 1 || type !== ''"
                :multiple="false"
                style="width: 200px"
            ></SelectCategory>
            <div v-if="examine != 1" class="con-btn">
                <template v-if="adminType === 'admin'">
                    <DialogForm
                        :params="{ act: 'add', parentId: 0 }"
                        isDrawer
                        path="product/category/Info"
                        title="添加分类"
                        width="600px"
                        @okCallback="refreshCategory"
                    >
                        <el-button link type="primary">新建</el-button>
                    </DialogForm>
                    <p class="ml10 mr10" style="margin-bottom: 3px">|</p>
                </template>
                <el-button :loading="configLoading" link type="primary" @click="refreshCategory">刷新 </el-button>
            </div>
        </div>
    </el-form-item>
    <el-form-item v-if="adminType == 'shop'" class="inner-item" label="店铺商品分类" prop="shopCategoryId">
        <SelectShopProductCategory v-model:categoryId="formState.shopCategoryId" :disabled="examine == 1"></SelectShopProductCategory>
    </el-form-item>
    <el-form-item class="inner-item" label="商品重量" prop="decimal" v-if="type == ''">
        <TigInput
            v-model="formState.productWeight"
            :decimalPlaces="3"
            :disabled="examine == 1"
            class="InputBox"
            placeholder="请输入"
            type="decimal"
            width="200px"
        >
            <template #append>Kg</template>
        </TigInput>
    </el-form-item>
    <el-form-item class="inner-item" label="商品条码" prop="productTsn" v-if="type == ''">
        <div>
            <TigInput v-model="formState.productTsn" :disabled="examine == 1" classType="tig-form-input" />
            <div class="extra">用于快速识商品所标记的编码，比如：69开头的13位标准码</div>
        </div>
    </el-form-item>
    <el-form-item class="inner-item" label="商品编码" prop="productSn" v-if="type == ''">
        <div>
            <TigInput v-model="formState.productSn" :disabled="examine == 1" classType="tig-form-input" />
            <div class="extra">如果您不输入商品编码，系统将自动生成一个唯一的编码</div>
        </div>
    </el-form-item>
    <el-form-item class="inner-item" label="搜索关键词" prop="keywords">
        <div class="keywords">
            <TigInput
                v-model="formState.keywords"
                :disabled="examine == 1 || type !== ''"
                class="InputBox"
                classType="tig-form-input"
                placeholder="例如：牙刷 自动 清洁"
            />
            <el-button :disabled="examine == 1" @click="onGetParticiple" style="margin-top: 2px">更新关键词</el-button>
        </div>
        <div class="extra">用空格分隔，为空时会自动根据商品名称分词</div>
    </el-form-item>
    <el-form-item class="inner-item" extra="" label="商品描述" prop="productBrief">
        <div>
            <TigInput
                v-model="formState.productBrief"
                :disabled="examine == 1 || type !== ''"
                :rows="2"
                classType="tig-form-input"
                placeholder="例如：顺丰快递 又快又好"
                type="textarea"
            ></TigInput>
            <div class="extra">
                该描述可作为“商品卖点”的概述及促销信息补充
                <el-popover :width="400" placement="right-end" trigger="click">
                    <template #reference>
                        <a>查看示例</a>
                    </template>
                    <template #default>
                        <img src="@/style/images/productBrief.png" style="width: 380px" />
                    </template>
                </el-popover>
            </div>
        </div>
    </el-form-item>
    <el-form-item class="inner-item" label="是否上架" prop="productStatus">
        <el-radio-group v-model="formState.productStatus" :disabled="examine == 1" style="width: 100%">
            <el-radio :value="1">上架</el-radio>
            <el-radio :value="0">下架</el-radio>
        </el-radio-group>
        <div class="extra">上架则允许销售（未审核的商品无法手动上架）</div>
    </el-form-item>
</template>
<script lang="ts" setup>
import { onMounted, ref } from "vue";
import { message } from "ant-design-vue";
import { FormAddGallery, FormAddGalleryVideo } from "@/components/gallery";
import { ProductFormState } from "@/types/product/product.d";
import { getParticiple } from "@/api/product/product";
import { RadioType } from "@/components/radio";
import { SelectBrand, SelectCategory, SelectShopProductCategory } from "@/components/select";
import { DialogForm } from "@/components/dialog";
import BusinessData from "@/components/multilingual/BusinessData.vue";
import { getAdminType } from "@/utils/storage";
const adminType = getAdminType();
const emit = defineEmits(["submitCallback", "update:confirmLoading", "close", "closeConfirm"]);
const props = defineProps({
    id: {
        type: Number,
        default: 0
    },
    shopId: {
        type: Number,
        default: 0
    },
    examine: {
        type: Number,
        default: 0
    },
    loading: {
        type: Boolean,
        default: false
    },
    type: {
        type: String,
        default: ""
    },
    action: {
        type: String,
        default: ""
    }
});
const formState = defineModel<ProductFormState>("formState", { default: {} });
const radioList = ref<any[]>([]);
onMounted(async () => {
    radioList.value = [{ key: 1, title: "普通商品" }];
});
// 会员名称
const validateName = (rule: any, value: any, callback: any) => {
    if (!value) {
        callback(new Error("商品名称不能为空"));
        return;
    } else {
        callback();
    }
};
const validateImg = (rule: any, value: any, callback: any) => {
    if (!value) {
        callback(new Error("请选择商品图片"));
        return;
    } else {
        callback();
    }
};
const validateCate = (rule: any, value: any, callback: any) => {
    if (!value) {
        callback(new Error("请选择商品类目"));
        return;
    } else {
        callback();
    }
};
const validateCardGroup = (rule: any, value: any, callback: any) => {
    if (!value) {
        callback(new Error("请选择电子卡券组"));
        return;
    } else {
        callback();
    }
};

const configLoading = ref(false);
const selectCategory = ref<any>();
const refreshCategory = async () => {
    configLoading.value = true;
    try {
        selectCategory.value.loaded = false;
        await selectCategory.value.loadCategory();
    } catch (error: any) {
        message.error(error.message);
    } finally {
        setTimeout(() => {
            configLoading.value = false;
        }, 200);
    }
};

const onGetParticiple = async () => {
    try {
        const result = await getParticiple({ productName: formState.value.productName });
        formState.value.keywords = result;
    } catch (error: any) {
        message.error(error.message);
    }
};
</script>
<style lang="less" scoped>
.con-btn {
    display: flex;
    align-content: center;
    padding-left: 10px;

    span {
        color: #999;
    }

    a {
        display: block;
        word-break: keep-all;
        padding: 0 5px;
    }
}

.rank {
    display: flex;
    width: 100%;
    flex-wrap: wrap; /* 允许项目换行 */
    justify-content: flex-start; /* 项目在主轴上的对齐方式 */
}

.keywords {
    display: flex;
    align-items: center;
    width: 100%;
    gap: 8px;
}
</style>
