<template>
    <div class="product-container">
        <div class="anchor">
            <el-anchor :container="containerRef" :offset="10" direction="horizontal" @change="onChange" @click="handleClick">
                <div class="tab-row">
                    <el-anchor-link
                        v-for="(item, index) in tabList"
                        :key="item.id"
                        :class="{ active: partTab === '' && index === 0 ? true : partTab === '#' + item.id }"
                        :href="'#' + item.id"
                    >
                        <template #default>
                            <div :class="{ active: partTab === '' && index === 0 ? true : partTab === '#' + item.id }" class="item">
                                {{ item.title }}
                            </div>
                        </template>
                    </el-anchor-link>
                </div>
            </el-anchor>
        </div>
        <div ref="containerRef" class="form-container">
            <el-form v-if="!loading" ref="formRef" :model="formState" label-width="110px" name="form_in_modal">
                <div id="part1" class="form-warp">
                    <div class="title">
                        <p class="xian"></p>
                        基本信息
                    </div>
                    <BasicInfo
                        :type="type"
                        :id="id"
                        :shopId="shopId"
                        :examine="examine"
                        :loading="loading"
                        :action="action"
                        v-model:form-state="formState"
                    ></BasicInfo>
                </div>
                <div id="part2" class="form-warp">
                    <div class="title">
                        <p class="xian"></p>
                        价格及库存
                    </div>
                    <PriceInfo
                        v-if="type !== 'vendor'"
                        ref="priceInfoRef"
                        :id="id"
                        :shopId="shopId"
                        :act="act"
                        :examine="examine"
                        :attrTplList="attrTplList"
                        v-model:isLimit="isLimit"
                        :loading="loading"
                        v-model:form-state="formState"
                    ></PriceInfo>
                </div>
                <div id="part3" class="form-warp">
                    <div class="title">
                        <p class="xian"></p>
                        物流及配送
                    </div>
                    <LogisticsInfo
                        v-if="type !== 'vendor' || (type == 'vendor' && formState.vendorProductId > 0)"
                        :id="id"
                        :shopId="shopId"
                        :examine="examine"
                        :loading="loading"
                        v-model:form-state="formState"
                    ></LogisticsInfo>
                </div>
                <div id="part4" class="form-warp">
                    <div class="title">
                        <p class="xian"></p>
                        商品详情
                    </div>
                    <DescInfo :type="type" :id="id" :shopId="shopId" :examine="examine" :loading="loading" v-model:form-state="formState"></DescInfo>
                </div>
                <div id="part5" class="form-warp">
                    <div class="title">
                        <p class="xian"></p>
                        高级信息
                    </div>
                    <AdvancedInfo :id="id" :shopId="shopId" :examine="examine" :loading="loading" v-model:form-state="formState"></AdvancedInfo>
                </div>
            </el-form>
        </div>
    </div>
</template>
<script lang="ts" setup>
import { onMounted, ref, shallowRef, nextTick, watch } from "vue";
import { BasicInfo, PriceInfo, LogisticsInfo, DescInfo, AdvancedInfo } from "@/views/product/product/src/components";
import { useRouter } from "vue-router";
import { message } from "ant-design-vue";
import { ProductFormState, ServiceList } from "@/types/product/product.d";
import { getProduct, getProductConfig, updateProduct, AuditAgainProduct } from "@/api/product/product";
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
    act: {
        type: String,
        default: ""
    },
    type: {
        type: String,
        default: ""
    },
    examine: {
        type: Number,
        default: 0
    },
    isDialog: Boolean
});
const tabList = [
    {
        title: "基本信息",
        id: "part1"
    },
    {
        title: "价格及库存",
        id: "part2"
    },
    {
        title: "物流及配送",
        id: "part3"
    },
    {
        title: "商品详情",
        id: "part4"
    },
    {
        title: "高级信息",
        id: "part5"
    }
];
const type = ref<string>(props.type);
const containerRef = ref<HTMLElement | null>(null);
const partTab = ref("");
const handleClick = (e: MouseEvent) => {
    e.preventDefault();
};
const onChange = (e: string) => {
    partTab.value = e;
};
const loading = ref<boolean>(true);
const query = useRouter().currentRoute.value.query;
const action = ref<string>(props.isDialog ? props.act : String(query.act));
const id = ref<number>(props.isDialog ? props.id : Number(query.id));
const operation = action.value === "add" ? "create" : action.value === "copy" ? "copy" : "update";
const formRef = shallowRef();
const isLimit = ref(false);
const formState = ref<ProductFormState>({
    snType: 1,
    productType: 1,
    freeShipping: 0,
    shopCategoryId: 0,
    productStatus: 1,
    giveIntegral: -1,
    rankIntegral: -1,
    integral: 0,
    isSupportCod: 0,
    productVideoInfo: [],
    productDescArr: [],
    productRelated: [],
    serviceList: [],
    eCardList: [],
    productList: [],
    limitNumber: "",
    virtualSample: "",
    paidContent: [],
    noShipping: 0,
    fixedShippingType: 1,
    attrList: {
        normal: [],
        spe: [],
        extra: []
    },
    vendorProductId: 0
});
watch(formState.value, (val) => {
    if (val.productType != 1) {
        formState.value.noShipping = 1;
    }
});
const radioList = ref<any[]>([]);
onMounted(async () => {
    await fetchProductConfig(false);

    radioList.value = [{ key: 1, title: "普通商品" }];

    if (action.value === "detail" || action.value === "copy" || action.value === "again") {
        // 获取详情数据
        await fetchProduct();
    } else {
        loading.value = false;
    }
    setTimeout(() => {
        emit("closeConfirm", true);
    }, 10000);
});
// 属性模板
const attrTplList = ref<Object[]>([]);

const fetchProduct = async () => {
    try {
        const result = await getProduct("detail", { id: id.value });
        if (result.productRelated == null) {
            result.productRelated = [];
        }
        if (result.brandId == 0) {
            result.brandId = "";
        }
        if (result.shippingTplId == 0) {
            result.shippingTplId = "";
        }

        if (result.limitNumber === 0) {
            result.limitNumber = "";
            isLimit.value = false;
        } else {
            isLimit.value = true;
        }
        if (result.vendorId) {
            type.value = "vendor";
        }

        formState.value.serviceList = formState.value.serviceList.map((item: ServiceList) => {
            return {
                ...item,
                check: result.productServiceIds?.includes(item.productServiceId) ? 1 : 0
            };
        });
        Object.assign(formState.value, result, result);
    } catch (error: any) {
        message.error(error.message);
        emit("close");
    } finally {
        loading.value = false;
    }
};

const fetchProductConfig = async (isMsg: boolean = true) => {
    try {
        const result = await getProductConfig({ shopId: props.shopId });
        attrTplList.value = result.attrTplList;
        formState.value.serviceList = result.serviceList;
        formState.value.serviceList = result.serviceList?.map((item: ServiceList) => {
            return {
                ...item,
                check: result.item.productServiceIds?.includes(item.productServiceId) ? 1 : 0
            };
        });
        formState.value.suppliersList = result.suppliersList;
        formState.value.shippingTplList = result.shippingTplList;
        formState.value.eCardList = result.eCardList;
    } catch (error: any) {
        message.error(error.message);
        emit("close");
    } finally {
        loading.value = false;
    }
};

function validateSkus(skus: any) {
    for (let i = 0; i < skus.length; i++) {
        const sku = skus[i];
        if (
            !sku.attrValues ||
            sku.attrValues.length === 0 ||
            sku.attrValues.some((value: string) => value === "") ||
            sku.skuStock === null ||
            sku.skuStock === undefined
        ) {
            console.error("请填写完整的规格信息");
            return false;
        }
    }
    return true;
}

const priceInfoRef = ref<any>();
// 表单通过验证后提交
const onSubmit = async () => {
    try {
        await formRef.value.validate();
        if (formState.value.productType == 4 && formState.value.paidContent.length == 0) {
            message.error("付费内容信息不能为空!");
            await nextTick();
            scrollIntoError(".goods-info-edit-row");
            return;
        }
        if (formState.value.productType !== 3) {
            if (!validateSkus(formState.value.productList) && type.value !== "vendor") {
                message.error("请将商品规格的信息填写完整!");
                priceInfoRef.value.skuErrorText = "请将商品规格的信息填写完整";
                await nextTick();
                scrollIntoError(".sku-error");
            } else {
                priceInfoRef.value.skuErrorText = "";
            }
            await priceInfoRef.value.attrForm.validateProductSku();
        }
        if (formState.value.attrList.spe.length > 0) {
            formState.value.productStock = 0;
        }
        try {
            emit("update:confirmLoading", true);
            formState.value.productServiceIds = formState.value.serviceList.filter((item) => item.check === 1).map((item) => item.productServiceId);
            formState.value.limitNumber = isLimit.value ? formState.value.limitNumber : 0;
            const result = await updateProduct(operation, { ...formState.value });
            if (props.act === "again") {
                await AuditAgainProduct({ id: id.value });
            }
            emit("submitCallback", result);
            message.success(result as any);
        } catch (error: any) {
            message.error(error.message);
        } finally {
            console.log("提交完成");
            emit("update:confirmLoading", false);
        }
    } catch (error) {
        await nextTick();
        scrollIntoError();
        console.error("表单验证失败:", error);
    }
};

const scrollIntoError = (selector = ".el-form-item.is-error") => {
    const errorElement = document.querySelector(selector);
    if (errorElement) {
        errorElement.scrollIntoView({
            behavior: "instant",
            block: "center"
        });
        const inputElement = errorElement.querySelector("input, textarea, select");
        if (inputElement) {
            inputElement?.focus();
        }
    }
};

// 表单提交
const onFormSubmit = () => {
    onSubmit();
};
defineExpose({ onFormSubmit });
</script>
<style lang="less" scoped>
.product-container {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;

    :deep(.el-anchor__marker) {
        display: none !important;
        opacity: 0 !important;
        z-index: -10 !important;
    }

    .inner-item {
        :deep(.el-textarea) {
            width: 450px;
        }

        :deep(.el-select) {
            width: 450px;
        }
    }

    .anchor {
        padding-bottom: 10px;
        background-color: #fff;

        .tab-row {
            display: flex;
            width: 100%;
            height: 38px;
            box-sizing: border-box;

            :deep(.el-anchor__item) {
                height: 100%;
                flex: 1;
                background-color: var(--tig-item-active-bg);
                color: #314f73;
                margin-right: -10px;
                padding-left: 10px;
                clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 50%, calc(100% - 15px) 100%, 0 100%, 15px 50%);

                &:first-child {
                    padding-left: 0;
                    clip-path: polygon(0 0, calc(100% - 15px) 0, 100% 50%, calc(100% - 15px) 100%, 0 100%);
                }

                &:last-child {
                    margin-right: 0 !important;
                    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 15px 50%);
                }
            }

            :deep(.el-anchor__link) {
                height: 100%;
                width: 100%;
            }

            .item {
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
                width: 100%;
            }

            .active {
                color: #fff;
                background-color: var(--tig-primary);
            }
        }
    }

    .form-container {
        flex: 1;
        overflow-y: auto;

        .title {
            background-color: #f5f7fa;
            font-size: 14px;
            font-weight: bold;
            padding: 12px 10px;
            display: flex;
            align-items: center;
            margin-bottom: 20px;

            .xian {
                width: 3px;
                height: 14px;
                background-color: var(--tig-primary);
                margin-right: 5px;
            }
        }

        .form-warp {
            margin-top: 10px;
        }
    }

    /* 隐藏滚动条 */

    .form-container::-webkit-scrollbar {
        display: none; /* 对于 WebKit 浏览器（如 Chrome 和 Safari） */
    }
    .fixed-shipping-type {
        position: relative;
        .extra {
            position: absolute;
        }
        :deep(.el-form-item__error) {
            // padding-top: 22px !important;
        }
    }
}

@media (max-width: 768px) {
    .inner-item {
        :deep(.el-textarea) {
            width: 100% !important;
        }

        :deep(.el-select) {
            min-width: 0 !important;
            width: 100% !important; /* 如果需要宽度100% */
        }
    }
}
</style>
