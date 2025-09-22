<template>
    <view class="price-content" :class="{ bottom: isBottom }">
        <view v-if="props.currencyFormat" :style="hasContent(currencyStyle) ? currencyStyle : fontStyle" class="num util">
            {{ currency }}
        </view>
        <view class="num integer" :style="fontStyle">{{ price.integer }}</view>
        <view v-if="showDecimals" class="num decimal" :style="hasContent(decimalsStyle) ? decimalsStyle : fontStyle">{{ price.decimals }}</view>
    </view>
</template>
<script lang="ts" setup>
import { computed } from "vue";
import { useConfigStore } from "@/store/config";

const configStore = useConfigStore();

const props = defineProps({
    priceData: [String, Number],
    isBottom: { type: Boolean, default: true },
    currencyFormat: { type: Boolean, default: true },
    currencyStyle: {
        type: Object,
        default: {}
    },
    fontStyle: {
        type: Object,
        default: {}
    },
    decimalsStyle: {
        type: Object,
        default: {}
    },
    showDecimals: {
        type: Boolean,
        default: true
    },
    showText: {
        type: Boolean,
        default: true
    }
});
const hasContent = (styleObj: any) => {
    return styleObj && Object.keys(styleObj).length > 0;
};

const currency = computed(() => {
    return configStore.dollarSign;
});
const price = computed(() => {
    let num = typeof props.priceData === "number" ? String(props.priceData) : props.priceData;
    if (!num) {
        return {
            integer: "0",
            decimals: ".00"
        };
    }

    // 检测小数点和后续数字
    const match = num.match(/^(\d+)(\.\d+)?$/);
    if (match) {
        const integerPart = match[1] || "0";
        const decimalPart = match[2] || ".00";
        return {
            integer: integerPart,
            decimals: decimalPart
        };
    } else {
        return {
            integer: "0",
            decimals: ".00"
        };
    }
});
</script>
<style lang="scss" scoped>
.price-content {
    height: auto;
    display: inline-block;
    .util {
        padding-right: 3rpx;
        // #ifdef MP-WEIXIN
        padding-right: 5rpx;
        // #endif
    }

    .num {
        display: inline-flex;
        flex-direction: column;
        justify-content: center;
    }

    .util,
    .decimal {
        height: inherit;
    }

    &.bottom {
        .num {
            justify-content: flex-end;
        }

        .util,
        .decimal {
            padding-bottom: 2rpx;
            // #ifdef MP-WEIXIN
            padding-bottom: 3rpx;
            // #endif
        }
    }

    .b2b-text {
        font-size: 22rpx !important;
        font-weight: normal !important;
    }
}
</style>
