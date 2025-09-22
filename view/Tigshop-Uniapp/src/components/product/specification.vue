<template>
    <view @click="handleShowPopup">
        <slot />
    </view>
    <tig-popup v-model:show="showPopup" :z-index="999" :show-close="false" @close="handlePopupClose">
        <scroll-view scroll-y="true" class="specification">
            <view class="product-sku-box flex justify-between">
                <view class="product-info">
                    <view class="product-info-img" @click="handlePreviewImg(productImage)">
                        <tig-image :src="productImage" />
                    </view>
                    <view class="info">
                        <view class="price">
                            <template v-if="type === 'exchange'">
                                <view class="exchange-box">
                                    <format-price
                                        :font-style="{ fontSize: '32rpx' }"
                                        :currency-style="{
                                            fontSize: '22rpx'
                                        }"
                                        :decimals-style="{
                                            fontSize: '25rpx'
                                        }"
                                        :price-data="productPrice"
                                    />
                                    <text class="exchange-icon">+</text>
                                    <image class="exchange-img" :src="staticResource('exchange/exchange.png')" />
                                    <text class="exchange-text">{{ exchangeDetail.exchangeIntegral }}</text>
                                </view>
                            </template>
                            <template v-else>
                                <format-price
                                    :font-style="{ fontSize: '32rpx' }"
                                    :currency-style="{
                                        fontSize: '22rpx'
                                    }"
                                    :decimals-style="{
                                        fontSize: '24rpx'
                                    }"
                                    :price-data="productPrice"
                                />
                            </template>
                        </view>
                        <template v-if="isDiscount || isSeckill">
                            <view class="ticket">
                                <view class="ticket-content">{{ isSeckill ? $t("秒杀价") : $t("限时折扣") }}</view>
                            </view>
                        </template>
                        <template v-if="productOriginPrice && Number(productOriginPrice) > Number(productPrice)">
                            <view class="del-box">
                                <format-price :is-bottom="false" :price-data="productOriginPrice" :font-style="{ 'text-decoration': 'line-through' }" />
                            </view>
                        </template>
                        <view class="name line2">
                            {{ productName }}
                        </view>
                    </view>
                </view>
                <view class="popup-close" @click="closePopup">
                    <uni-icons type="closeempty" size="24" style="color: #c8c9cc" />
                </view>
            </view>

            <view>
                <view v-if="specificationList.length > 0" class="product-sku-info">
                    <view v-for="(item, index) in specificationList" :key="index" class="sku-item">
                        <view class="tit">
                            {{ item.attrName }}
                        </view>
                        <view class="sku-tag flex">
                            <template v-for="(value, subIdx) in item.attrList" :key="subIdx">
                                <view
                                    :class="'tag ' + (value.checked ? 'checked ' : '' + (value.skuStock == 0 ? 'disabled' : ''))"
                                    @click="handleChecked(index, subIdx)"
                                >
                                    <view v-if="value.attrPicThumb && index === 0" class="tag-img"><tig-image :src="value.attrPicThumb" /></view>
                                    <view class="tag-text">{{ value.attrValue }}</view>
                                </view>
                            </template>
                        </view>
                    </view>
                </view>
                <view class="product-sku-info">
                    <view class="num-item">
                        <view class="tit">{{ $t("购买数量") }}</view>
                        <view class="sku-num flex align-center">
                            <template v-if="isSeckill && maxProductNumber > 0">
                                <uni-number-box v-model="productNumber" :min="1" :max="maxProductNumber" :width="60" />
                                <view class="stock"
                                    >{{ $t("限购") }}：<text style="color: var(--general)">{{ maxProductNumber }}{{ $t("件") }}</text>
                                </view>
                            </template>
                            <template v-else>
                                <tig-number-box v-model="productNumber" :min="1" :max="productStock" @overlimit="handleOverlimit" />
                                <view class="stock"
                                    >{{ $t("库存") }}：<text v-if="productStock > 50" style="color: var(--general)">{{ $t("充足") }}</text>
                                    <text v-else-if="productStock === 0" style="color: var(--general)">{{ $t("缺货") }}</text>
                                    <text v-else style="color: var(--general)">{{ $t("仅剩") }}{{ productStock }}件</text>
                                </view>
                            </template>
                        </view>
                    </view>
                </view>
            </view>

            <template v-if="additionAttribute.length > 0">
                <view class="product-sku-info attribute">
                    <template v-for="(item, index) in additionAttribute" :key="index">
                        <view class="attribute-item">
                            <view class="item-title">{{ item.attrName }}</view>
                            <view class="item-content">
                                <template v-for="subItem in item.attrList" :key="subItem.attributesId">
                                    <view
                                        class="item-attr"
                                        :class="{ checked: checkedAttrs[index] === subItem.attributesId }"
                                        @click.stop="handleAttrClick(index, subItem.attributesId)"
                                    >
                                        <view class="label">
                                            {{ subItem.attrValue }}
                                        </view>
                                        <format-price class="value" :price-data="subItem.attrPrice" />
                                    </view>
                                </template>
                            </view>
                        </view>
                    </template>
                </view>
            </template>
        </scroll-view>

        <template v-if="!(productType === 4 && productIsBuy === 1)">
            <view class="footer">
                <template v-if="type === 'exchange'">
                    <view class="exchange-btn">
                        <buy
                            :id="exchangeDetail.id"
                            :sku-id="currentSku.skuId"
                            :disabled="productStock == 0"
                            :extra-attr-ids="filterParams.extraAttrIds"
                            :number="productNumber"
                            :is-quick="true"
                            :type="type"
                            @callback="closePopup"
                        >
                            <view class="btn" :class="productStock === 0 ? 'disabled-div' : ''">{{ $t("立即兑换") }}</view>
                        </buy>
                    </view>
                </template>
                <template v-else>
                    <template v-if="productType === 1">
                        <view class="add_cart">
                            <buy
                                :id="Number(modelValue)"
                                :sku-id="currentSku.skuId"
                                :disabled="productStock == 0"
                                :extra-attr-ids="filterParams.extraAttrIds"
                                :number="productNumber"
                                @callback="addCard"
                            >
                                <view class="btn cart" :class="productStock === 0 ? 'disabled-div' : ''">{{ $t("加入购物车") }}</view>
                            </buy>
                            <buy
                                :id="Number(modelValue)"
                                :sku-id="currentSku.skuId"
                                :disabled="productStock == 0"
                                :extra-attr-ids="filterParams.extraAttrIds"
                                :number="productNumber"
                                :is-quick="true"
                                @callback="closePopup"
                            >
                                <view class="btn buy-right" :class="productStock === 0 ? 'disabled-div' : ''">{{ $t("立即购买") }}</view>
                            </buy>
                        </view>
                    </template>
                    <template v-else>
                        <view class="exchange-btn">
                            <buy
                                :id="modelValue"
                                :sku-id="currentSku.skuId"
                                :disabled="productStock == 0"
                                :extra-attr-ids="filterParams.extraAttrIds"
                                :number="productNumber"
                                :is-quick="true"
                                :type="type"
                                @callback="closePopup"
                            >
                                <view class="btn" :class="productStock === 0 ? 'disabled-div' : ''">{{ $t("立即购买") }}</view>
                            </buy>
                        </view>
                    </template>
                </template>
            </view>
        </template>
    </tig-popup>
</template>

<script setup lang="ts">
import { computed, reactive, ref, watch } from "vue";
import type { SkuList, SkuPromotion } from "@/types/product/product";
import { getProductDetail, getProductSkuDetail } from "@/api/product/product";
import { getExchangeDetail } from "@/api/exchange/exchange";
import buy from "@/components/product/buy.vue";
import { staticResource } from "@/utils";
import { imageFormat } from "@/utils/format";
import { useI18n } from "vue-i18n";

const props = defineProps({
    modelValue: {
        type: [Number],
        default: 0
    },
    skuId: {
        type: [Number],
        default: 0
    },
    type: {
        type: [String],
        default: ""
    }
});

const emit = defineEmits(["sendValue", "addCardSucceed", "update:skuId", "loadEnd", "close"]);

const { t } = useI18n();

const showPopup = ref(false);

const closePopup = () => {
    emit("close");
    sendValue();
    showPopup.value = false;
};

const handleShowPopup = () => {
    showPopup.value = true;
};

const handlePreviewImg = (image: string) => {
    if (!image) return;

    let img = imageFormat(image);

    uni.previewImage({
        urls: [img],
        current: img
    });
};

const specificationList = ref<any[]>([]);
const skuList = ref<SkuList[]>([]);
const currentSku = ref<SkuList>({} as SkuList);
const productPrice = ref("0");
const productOriginPrice = ref("0");
const productImage = ref("");
const productStock = ref(0);
const productName = ref("");
const productNumber = ref(1);
const maxProductNumber = ref(0);
const checkedValue = ref<any[]>([]);
const exchangeDetail = ref<any>({});
const productType = ref(1);
const productIsBuy = ref(0);
const additionAttribute = ref<any[]>([]);
const checkedAttrs = ref<any[]>([]);

const handleAttrClick = (index: number, id: number) => {
    if (checkedAttrs.value[index] && checkedAttrs.value[index] === id) {
        checkedAttrs.value[index] = null;
    } else {
        checkedAttrs.value[index] = id;
    }
    loadSkuPrice();
};

const __getProductDetail = async () => {
    try {
        let result: any = {};
        switch (props.type) {
            case "exchange":
                result = await getExchangeDetail(props.modelValue);
                exchangeDetail.value = result.exchangeInfo;
                productStock.value = result.exchangeInfo.productStock;
                productPrice.value = exchangeDetail.value.discountsPrice || "0";
                productImage.value = exchangeDetail.value.picUrl || "";
                break;
            default:
                result = await getProductDetail(props.modelValue);
                productStock.value = result.item.productStock;
                productPrice.value = result.item.productPrice || "0";
                productImage.value = result.item.picUrl || "";
        }
        productType.value = result.item.productType;
        productIsBuy.value = result.item.isBuy;
        productName.value = result.item.productName || "";
        specificationList.value = result.attrList.spe;
        additionAttribute.value = result.attrList.extra;
        skuList.value = result.skuList;

        setDefaultValue();
    } catch (error: any) {
        uni.showToast({
            title: error.message,
            icon: "none"
        });
        emit("loadEnd");
    }
};

const reset = () => {
    productNumber.value = 1;
    checkedValue.value = [];
    currentSku.value = {} as SkuList;
    checkedAttrs.value = [];
};

const firstLoad = ref(false);

watch(
    () => props.modelValue,
    (newValue) => {
        // console.log("newValue", newValue);
        if (newValue && newValue > 0) {
            reset();
            firstLoad.value = true;
            __getProductDetail();
        }
    },
    {
        immediate: true
    }
);

const setDefaultValue = () => {
    if (specificationList.value.length > 0) {
        if (props.skuId > 0) {
            const skuItem = skuList.value.find((item: SkuList) => item.skuId === props.skuId);
            if (skuItem) {
                const skuAttr = skuItem.skuValue.split("|");
                skuAttr.forEach((item: string, index: number) => {
                    checkedValue.value[index] = item;
                });
            }
        }
        if (checkedValue.value.length === 0) {
            // 设置默认选中值
            specificationList.value.forEach((item: any, index) => {
                item.attrList.forEach((subItem: any) => {
                    subItem.checked = false;
                });
                checkedValue.value[index] = item.attrList[0].attrName + ":" + item.attrList[0].attrValue;
                item.attrList[0].checked = true;
            });
            productImage.value = specificationList.value[0].attrList[0].attrPic;
        }
        updateValue();
    } else if (skuList.value.length > 0) {
        currentSku.value = skuList.value[0];
    }
    loadSkuPrice();
};
const handleChecked = (index: number, subIdx: number) => {
    const checkedItem = specificationList.value[index].attrList[subIdx];
    if (index === 0) {
        productImage.value = checkedItem.attrPic;
    }
    checkedValue.value[index] = checkedItem.attrName + ":" + checkedItem.attrValue;
    updateValue();
    loadSkuPrice();
};

const updateValue = () => {
    specificationList.value.forEach((item: any, index: number) => {
        const checkedItem = checkedValue.value[index];
        item.attrList.forEach((value: any) => {
            const attrNameValue = `${value.attrName}:${value.attrValue}`;

            value.checked = checkedItem === attrNameValue;

            const skuValue = [...checkedValue.value];

            skuValue[index] = attrNameValue;

            const result = skuList.value.find((item: any) => item.skuValue === skuValue.join("|"));

            value.skuStock = result ? result.skuStock : 0;
        });
    });

    const selectedItem: any = skuList.value.find((item: any) => item.skuValue == checkedValue.value.join("|"));
    if (selectedItem) {
        currentSku.value = selectedItem;
    }
};

interface FilterParams {
    id: number;
    skuId?: number | null;
    extraAttrIds?: string;
}
const filterParams = reactive<FilterParams>({
    id: 0
});

const skuStr = ref("");
const isSeckill = ref(0);
const promotionList = ref<SkuPromotion[]>([]);

const isDiscount = ref(0);

const loadSkuPrice = async () => {
    if (props.type) {
        firstLoad.value = false;
        emit("loadEnd");
        return;
    }

    if (!props.modelValue) {
        return;
    }

    filterParams.id = props.modelValue;
    filterParams.skuId = currentSku.value.skuId || null;
    filterParams.extraAttrIds = checkedAttrs.value.length > 0 ? checkedAttrs.value.filter((item) => !!item).join(",") : "";
    try {
        const result = await getProductSkuDetail(filterParams);
        productPrice.value = result.price;
        if (result.originPrice) {
            productOriginPrice.value = result.originPrice;
        }
        productStock.value = result.stock;
        if (checkedValue.value.length > 0) {
            skuStr.value = checkedValue.value.map((item: any) => item.split(":")[1]).join(" ");
        }

        // 是否存在营销活动
        if (result.promotion.length > 0) {
            promotionManage(result.promotion);
        }

        if (isSeckill.value && maxProductNumber.value > 0) {
            productNumber.value = productNumber.value > maxProductNumber.value ? maxProductNumber.value : productNumber.value;
        } else if (productStock.value === 0) {
            productNumber.value = 1;
        } else {
            productNumber.value = productNumber.value > productStock.value ? productStock.value : productNumber.value;
        }

        if (firstLoad.value) {
            sendValue();
        }
    } catch (error: any) {
        uni.showToast({
            title: error.message,
            icon: "none"
        });
    } finally {
        firstLoad.value = false;
        emit("loadEnd");
    }
};

const seckillValue = ref({
    seckillEndTime: "",
    seckillSales: 0,
    seckillStock: 0
});
const discountValue = ref({
    discountEndTime: "",
    discountPrice: 0
});

// 营销活动管理
const promotionManage = (promotion: SkuPromotion[]) => {
    // 排除秒杀 & 限时折扣
    promotionList.value = promotion.filter((item: any) => item.type !== 1 && item.type !== 6);

    const seckillData = promotion.find((item: any) => item.type === 1);
    const discountData = promotion.find((item: any) => item.type === 6);

    // 判断限时折扣存在
    if (discountData) {
        isDiscount.value = 1;
        discountValue.value.discountEndTime = discountData.data.item.endTime!;
        discountValue.value.discountPrice = discountData.data.item.discountPrice!;
    } else {
        isDiscount.value = 0;
        discountValue.value = {
            discountEndTime: "",
            discountPrice: 0
        };
    }
    // 判断秒杀存在
    if (seckillData) {
        isSeckill.value = 1;
        seckillValue.value.seckillEndTime = seckillData.data.seckillEndTime!;
        seckillValue.value.seckillSales = seckillData.data.item.seckillSales!;
        seckillValue.value.seckillStock = seckillData.data.item.seckillStock!;
        maxProductNumber.value = seckillData.data.seckillLimitNum!;
        productStock.value = seckillData.data.item.seckillStock;
    } else {
        isSeckill.value = 0;
        seckillValue.value = {
            seckillEndTime: "",
            seckillSales: 0,
            seckillStock: 0
        };
    }
};

const sendValue = () => {
    emit("sendValue", {
        productOriginPrice: productOriginPrice.value,
        productPrice: productPrice.value,
        productStock: productStock.value,
        productNumber: productNumber.value,
        productSkuId: currentSku.value.skuId,
        skuStr: skuStr.value,
        isSeckill: isSeckill.value,
        seckillValue: seckillValue.value,
        promotionList: promotionList.value,
        isDiscount: isDiscount.value,
        discountValue: discountValue.value
    });
};

const handlePopupClose = () => {
    closePopup();
};

const addCard = () => {
    closePopup();
    setTimeout(() => {
        emit("addCardSucceed", true);
    }, 500);
};

const handleOverlimit = (event: string) => {
    if (event === "minus") {
        uni.$u.toast(t("商品数量不能小于1"));
    }
    if (event === "plus") {
        uni.$u.toast(t("库存不足"));
    }
};

const height = computed(() => {
    return "65vh";
});
const paddingBottom = computed(() => {
    return `calc(100rpx + 15px + var(--safe-bottom))`;
});

defineExpose({
    handleShowPopup
});
</script>

<style lang="scss" scoped>
.placeholder {
    background-color: #f7f8fa;
    padding: 10rpx;
}

.tab {
    width: 100%;
    display: flex;
    position: relative;
    .line,
    .subline {
        position: absolute;
        width: 50%;
        height: 2px;
        background-color: var(--general);
    }
    .line {
        top: 0;
    }
    .subline {
        bottom: 0;
        height: 1px;
        background-color: #eee;
    }

    .tab-item {
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80rpx;
        font-size: 26rpx;
        font-weight: 500;
        position: relative;

        .image {
            width: 20rpx;
            height: 100%;
            position: absolute;
            top: 0;
        }
        &.active {
            color: var(--general);
        }
    }
}

.allskulist {
    padding: 0 20rpx;

    .allskulist-item {
        display: flex;
        align-items: center;
        padding-bottom: 25rpx;
        &:first-child {
            padding-top: 20rpx;
        }

        .left {
            font-size: 24rpx;
            flex: 1;
            .title {
                padding-bottom: 6rpx;
                padding-right: 40rpx;
            }

            .desc {
                display: flex;
                font-size: 22rpx;
                color: #c1c1c1;
                align-items: center;
                height: 35rpx;
                .line {
                    width: 1px;
                    height: 100%;
                    background-color: #dadada;
                    margin: 0 12rpx;
                    height: 16rpx;
                }
            }
        }
    }
}

.attribute {
    color: #333;
    .attribute-item {
        margin-bottom: 30rpx;
        .item-title {
            font-size: 28rpx;
            font-weight: 600;
            margin-bottom: 20rpx;
        }
        .item-content {
            display: flex;
            flex-wrap: wrap;
            font-size: 26rpx;
            gap: 20rpx;
            .item-attr {
                background-color: #f7f8fa;
                border-radius: 10rpx;
                overflow: hidden;
                padding: 10rpx 20rpx;
                line-height: 42rpx;
                &:first-child {
                    margin-left: 0;
                }
                &.checked {
                    color: var(--general);
                    background-color: var(--vice-bg);
                }
            }
        }
    }
}

.specification {
    height: v-bind(height);
    padding-bottom: v-bind(paddingBottom);
    box-sizing: border-box;
}

.product-sku-box {
    padding: 30rpx 20rpx;
    .product-info {
        display: flex;
        width: 100%;
        .product-info-img {
            width: 180rpx;
            height: 180rpx;
            border-radius: 20rpx;
            overflow: hidden;
        }
        .info {
            margin-left: 20rpx;
            padding-top: 20rpx;
            width: calc(100% - 180rpx);

            .ticket {
                background-color: var(--tag-bg);
                color: var(--tag-text);
                border-radius: 5rpx;
                white-space: nowrap;
                width: fit-content;
                padding: 5rpx;
                margin: 10rpx 0;
                .ticket-content {
                    font-size: 20rpx;
                }
            }

            .del-box {
                padding: 5rpx 0;
                display: template;
                font-size: 12px;
                color: #969799;
                text-decoration: line-through;
            }

            .price {
                color: var(--general);
                font-weight: bold;
                font-size: 36rpx;
                margin-bottom: 10rpx;
            }
            .name {
                color: #c3c0c0;
                font-size: 24rpx;
            }
        }
    }
}

.product-sku-info {
    padding: 20rpx 20rpx 0 20rpx;
    box-sizing: border-box;
    .sku-item {
        margin-bottom: 30rpx;
        display: flex;
        flex-direction: column;
        gap: 20rpx;
        .tit {
            color: #999;
            height: 33rpx;
            line-height: 32rpx;
            font-size: 24rpx;
        }
        .sku-tag {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            .tag {
                margin: 10rpx 20rpx 10rpx 0;
                background-color: #f7f8fa;
                color: #333;
                height: 55rpx;
                cursor: pointer;
                min-width: 60rpx;
                text-align: center;
                position: relative;
                border-radius: 10rpx;
                font-size: 24rpx;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0 10rpx;
                .tag-img {
                    width: 45rpx;
                    height: 45rpx;
                    box-sizing: content-box;
                    border-radius: 5rpx;
                    overflow: hidden;
                }

                .tag-text {
                    padding: 10rpx;
                }
            }
            .checked {
                color: var(--general);
                background-color: var(--vice-bg);
            }
            .disabled {
                border: 1px dashed #eee;
                color: #c8c9cc;
                cursor: not-allowed;
                background-color: #f7f8fa;
            }
        }
    }

    .num-item {
        display: flex;

        align-items: center;
        justify-content: space-between;
        .tit {
            color: #999;
            height: 33rpx;
            line-height: 32rpx;
            font-size: 24rpx;
        }

        .sku-num {
            :deep(.uni-numbox) {
                border: 1rpx solid #c3c0c0;
                border-radius: 10rpx;
            }
            :deep(.uni-numbox-btns) {
                background-color: #fff !important;
                color: #333;
                border-radius: 10rpx;
            }
            :deep(.uni-numbox--text) {
                font-weight: 500 !important;
            }
            :deep(.uni-numbox__value) {
                background-color: #fff !important;
                color: #333;
                border-left: 1rpx solid #c3c0c0;
                border-right: 1rpx solid #c3c0c0;
            }
            .stock {
                font-size: 22rpx;
                margin-left: 30rpx;
                color: #c3c0c0;
            }
            .green-txt {
                color: var(--general);
            }
            .red-txt {
                color: $tig-color-error;
            }
        }
    }
}

.footer {
    position: fixed;
    bottom: 0;
    left: 0;
    z-index: 88;
    background-color: #ffffff;
    width: 100%;
    padding-bottom: calc(var(--safe-bottom) + 15px);

    &.shadow {
        box-shadow: 0 0 10px rgba(125, 126, 128, 0.16);
    }

    .b2b-btn {
        .desc {
            padding: 0 20rpx;
            display: flex;
            height: 70rpx;
            justify-content: space-between;
            align-items: center;
            font-size: 26rpx;
            .num {
                color: var(--general);
                padding: 5rpx;
            }
            .price {
                display: flex;
                align-items: center;
            }
        }
    }

    .exchange-btn {
        width: 100%;
        padding: 0 20rpx;
        .btn {
            height: 80rpx;
            width: 100%;
            background: var(--general);
            border-radius: 100rpx;
            color: var(--main-text);
            line-height: 80rpx;
            text-align: center;
            color: #fff;
            font-size: 30rpx;
            font-weight: 500;
        }
    }

    .add_cart {
        width: 100%;
        display: flex;
        height: 80rpx;
        justify-content: center;
        .btn {
            width: 47vw;
            height: 80rpx;
            line-height: 80rpx;
            text-align: center;
            color: #fff;
            font-size: 30rpx;
            font-weight: 500;
        }
        .cart {
            background: var(--vice-bg);
            border-radius: 100rpx 0 0 100rpx;
            color: var(--vice-text);
        }
        .buy-right {
            background: var(--general);
            border-radius: 0 100rpx 100rpx 0;
            color: var(--main-text);
        }
    }
}

.disabled-div {
    background-color: #ddd; // 灰色背景
    color: #aaa; // 灰色字体
    opacity: 0.6; // 降低透明度
    pointer-events: none;
}

.exchange-box {
    display: flex;
    align-items: center;
    .exchange-img {
        width: 35rpx;
        height: 35rpx;
        padding-right: 5rpx;
    }
    .exchange-icon {
        padding: 0 5rpx;
    }
    .exchange-text {
        font-size: 34rpx;
    }
}
</style>
