<template>
    <tig-layout :title="navbarTitle" :custom-back="true" @back="handleBack">
        <view class="searchGood">
            <view class="search-warp acea-row">
                <view class="search-input acea-row">
                    <text class="iconfont icon-neirongsousuo" />
                    <input
                        v-model="keyWords"
                        :focus="true"
                        type="text"
                        :placeholder="$t('点击搜索商品')"
                        placeholder-class="placeholder"
                        @confirm="searchSubmit"
                    />
                </view>
                <view class="bnt" @click="searchSubmit">{{ $t("搜索") }}</view>
            </view>
            <view v-if="searchHistory.length" class="search_init_box">
                <view class="search_history_box">
                    <view class="title">
                        {{ $t("搜索历史") }}
                        <view class="clear_history" @click.stop="clearHistory"><text class="iconfont-h5 icon-shanchu" /></view>
                    </view>
                    <view class="list acea-row">
                        <template v-for="(item, index) in searchHistory" :key="index">
                            <view class="item line1" @click="handleSearch(item)">{{ item }}</view>
                        </template>
                    </view>
                </view>
            </view>
        </view>
    </tig-layout>
</template>

<script lang="ts" setup>
import { ref } from "vue";
import { onLoad } from "@dcloudio/uni-app";
import { useI18n } from "vue-i18n";
import { redirect } from "@/utils";

const { t } = useI18n();

const navbarTitle = ref("搜索商品");

const keyWords = ref("");

const searchHistory = ref<any[]>([]);

const shopId = ref("");

onLoad(() => {
    if (uni.getStorageSync("searchHistory")) {
        searchHistory.value = uni.getStorageSync("searchHistory");
    }
});
const searchSubmit = () => {
    if (keyWords.value) {
        searchHistory.value.unshift(keyWords.value);
        searchHistory.value = [...new Set(searchHistory.value)];
        if (searchHistory.value.length > 10) {
            searchHistory.value.splice(10, searchHistory.value.length - 10);
        }
        uni.setStorageSync("searchHistory", searchHistory.value);
        handleSearch(keyWords.value);
    } else {
        uni.showToast({
            title: t("请输入搜索内容"),
            icon: "none"
        });
    }
};
const clearHistory = () => {
    searchHistory.value = [];
    uni.removeStorageSync("searchHistory");
};

const handleSearch = (item: any) => {
    let url = `/pages/search/result?keyWords=${item}`;
    redirect({
        url
    });
};

const handleBack = () => {
    uni.switchTab({
        url: "/pages/index/index"
    });
};
</script>
<style>
page {
    background-color: #fff !important;
}
</style>
<style scoped>
.search-warp {
    padding-left: 30rpx;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.search-warp {
    margin-top: 20rpx;
}
.search-warp .search-input {
    width: 598rpx;
    background-color: #f7f7f7;
    border-radius: 33rpx;
    padding: 0 35rpx;
    box-sizing: border-box;
    height: 66rpx;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
.search-warp .search-input input {
    width: 472rpx;
    font-size: 28rpx;
}
.search-warp .search-input .placeholder {
    color: #bbb;
}
.search-warp .search-input .iconfont {
    color: #000;
    font-size: 35rpx;
}
.search-warp .bnt {
    width: 120rpx;
    text-align: center;
    height: 66rpx;
    line-height: 66rpx;
    font-size: 30rpx;
    color: #282828;
}

.search_init_box .title {
    font-size: 24rpx;
    color: #333;
    margin: 50rpx 30rpx 25rpx 30rpx;
    font-weight: bold;
    position: relative;
}
.search_init_box .list {
    padding-left: 10rpx;
}
.search_init_box .list .item {
    font-size: 24rpx;
    color: #666;
    padding: 0 28rpx;
    height: 50rpx;
    border-radius: 30rpx;
    line-height: 50rpx;
    margin: 0 0 20rpx 20rpx;
    background: #f6f6f6;
}

.clear_history {
    position: absolute;
    right: 0;
    top: 0;
    font-weight: normal;
    font-size: 26rpx;
    padding: 20rpx;
    top: -20rpx;
}
</style>
