<template>
    <view class="service-box">
        <view class="service-title">{{ $t("我的服务") }}</view>
        <view class="service-content">
            <template v-if="list.length > 0">
                <view class="service-list" :class="{ grid: menuType == 2, column: menuType == 1 }">
                    <template v-for="(item, index) in list" :key="index">
                        <view class="service-item" @click="handleClick(item)">
                            <view class="service-icon">
                                <tig-image lazy-load :src="staticResource(item.picUrl)" />
                            </view>
                            <view class="service-label">
                                {{ $t(item.picTitle ?? "") }}
                                <template v-if="menuType === 1">
                                    <view class="service-arrow iconfont-h5 icon-youjiantou" />
                                </template>
                            </view>
                        </view>
                    </template>
                </view>
            </template>
        </view>
    </view>
</template>

<script setup lang="ts">
import { computed } from "vue";
import { staticResource, redirect } from "@/utils";
import { urlFormat } from "@/utils/format";

const props = defineProps({
    data: {
        type: Array as any,
        default: () => []
    },
    menuType: {
        type: [Number, String],
        default: 1
    }
});

const list = computed(() => {
    let data = props.data;

    data = data.filter((item) => item.picTitle !== "实名认证");

    data = data.filter((item) => item.picTitle !== "商家入驻");

    return data;
});
const handleClick = (item: any) => {
    redirect({ url: urlFormat(item.picLink) });
};
</script>

<style lang="scss" scoped>
.not-zh {
    .service-box {
        .grid {
            .service-item {
                .service-label {
                    width: 100%;
                    height: 60rpx;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    word-break: break-word;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                }
            }
        }
    }
}
.service-box {
    background: #fff;
    margin: 20rpx 0;
    border-radius: 18rpx;
    overflow: hidden;

    .service-title {
        padding: 20rpx 30rpx 15rpx;
        font-size: 26rpx;
        font-weight: bold;
        display: flex;
        align-items: center;
    }

    .service-list {
        padding: 20rpx 0;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20rpx;
        font-size: 24rpx;

        .service-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;

            .service-icon {
                width: 70rpx;
                height: 70rpx;
                margin-bottom: 16rpx;
            }

            .service-label {
                width: 100%;
                text-align: center;
            }
        }
    }

    .column {
        display: block;
        padding: 0 20rpx 20rpx 25rpx;
        font-size: 26rpx;
        width: 100%;
        .service-item {
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 28rpx 0;
            border-bottom: 1px solid #eee;
            position: relative;
            &:last-child {
                border-bottom: none;
                padding-bottom: 0;
            }
            .service-icon {
                width: 40rpx;
                height: 40rpx;
                margin-right: 20rpx;
            }

            .service-label {
                flex: 1;
                position: relative;

                .service-arrow {
                    position: absolute;
                    right: 0;
                    top: 50%;
                    transform: translateY(-50%);
                    font-size: 36rpx;
                    color: #999;
                }
            }
        }
    }
}
</style>
