<template>
    <view class="module-ad-con module-cat_nav">
        <view class="catNav-warp">
            <view
                class="catNav-con"
                :style="
                    'background-color: ' +
                    module.backgroundColor +
                    ';padding-top:' +
                    module.boxPaddingTop +
                    'rpx' +
                    ';padding-bottom:' +
                    module.boxPaddingBottom +
                    'rpx' +
                    ';background-image: url(' +
                    imageFormat(module.navBackgroundPic.picUrl) +
                    ');background-position: center bottom;background-size: 100% auto;' +
                    (catnavStore.catColor != '' ? 'background:' + catnavStore.catColor : '')
                "
            >
                <view class="catnav-item" :style="'padding-top:' + (configStore.navHeight - 110) + 'rpx;'">
                    <view class="item-content">
                        <div>
                            <image class="catnav-logo" mode="aspectFit" :style="logoFormat.logoHeight" :src="imageFormat(logoFormat.logoPic?.picUrl || '')" />
                            <view class="search-lang-box">
                                <view class="default-search" :style="searchFormat['padding-right'] + searchFormat['padding-left']" @click="handleSkip">
                                    <view class="default-search-config catnav-search" :style="searchFormat['itemBackgroundColor'] + searchFormat['itemRadius']">
                                        <view class="module_ico module-ico-sousuo" />
                                        <view class="catnav-search-text" :style="searchFormat['searchTextColor']">{{ $t(searchFormat.searchText) }}</view>
                                    </view>
                                </view>
                            </view>
                        </div>

                        <scroll-view class="item-cat_nav-con" :scroll-left="catnavStore.navLeft" :scroll-with-animation="true" :scroll-x="true">
                            <view class="cat-nav-list">
                                <view :class="'nav-item ' + (catnavStore.currentCatnavId == 0 ? 'current' : '')" data-id="0">
                                    <view class="tit" :style="'color: ' + module.textColor + ';'" data-id="0" data-categoryid="0" @click="changeCatNav">{{
                                        $t("推荐")
                                    }}</view>
                                </view>
                                <view
                                    v-for="(nav, index) in module.navList"
                                    :key="index"
                                    :class="'nav-item ' + (catnavStore.currentCatnavId == nav.mobileCatNavId ? 'current' : '')"
                                    :data-id="nav.mobileCatNavId"
                                    :data-categoryid="nav.categoryId"
                                    :data-index="index"
                                    :data-catcolor="nav.catColor"
                                    :data-alldata="nav"
                                    @click="changeCatNav"
                                >
                                    <view class="tit" :style="'color: ' + module.textColor + ';'">{{ nav.categoryName }}</view>
                                </view>
                            </view>
                        </scroll-view>
                    </view>
                </view>
            </view>
        </view>
    </view>
</template>

<script setup lang="ts">
import { ref, computed } from "vue";
import { usecatnavStore } from "@/store/catnav";
import { useConfigStore } from "@/store/config";
import { imageFormat } from "@/utils/format";

const catnavStore = usecatnavStore();

const configStore = useConfigStore();

const props = defineProps({
    module: {
        type: Object,
        default: () => ({})
    },
    scrollTop: {
        type: Number,
        default: 0
    }
});
const logoFormat = computed(() => {
    return {
        logoHeight: "height:" + props.module.logoHeight + "px;",
        logoPic: props.module.logoPic
    };
});
const searchFormat = computed(() => {
    return {
        searchText: props.module.searchText ? props.module.searchText : "搜索商品",
        itemBackgroundColor: "background-color:" + props.module.itemBackgroundColor + ";",
        searchTextColor: "color:" + props.module.searchTextColor + ";",
        itemRadius: "border-radius:" + props.module.itemRadius + "px;",
        "padding-right": "padding-right:" + props.module.boxPadding + "px;",
        "padding-left": "padding-left:" + props.module.boxPadding + "px;"
    };
});

const emit = defineEmits(["change-cat-nav", "is-cut"]);

const currentCatNavId = ref(0);
const catColorData = ref("");
const navLeftNum = ref(0);
const showCatNav = ref(0);

const handleSkip = () => {
    uni.navigateTo({
        url: "/pages/search/index"
    });
};

const changeCatNav = (e: any) => {
    emit("is-cut", false);
    const { id, categoryid, catcolor, index } = e.currentTarget.dataset;
    let navLeft = e.currentTarget.offsetLeft - 10;
    navLeft = navLeft - navLeft / (index + 1) + 10;
    catColorData.value = catcolor ?? "";
    catnavStore.setCatColor(catColorData.value);
    navLeftNum.value = navLeft;
    catnavStore.setNavLeft(navLeftNum.value);
    showCatNav.value = 0;
    catnavStore.setShowCatNav(0);
    if (id > 0) {
        showCatNav.value = 1;
        catnavStore.setShowCatNav(1);
    }
    currentCatNavId.value = id;
    catnavStore.setCurrentCatnavId(id);

    const { imgUrl = [], childCatInfo = [], brandInfo = [] } = e.currentTarget.dataset.alldata ?? {};

    emit("change-cat-nav", {
        id,
        imgUrl,
        childCatInfo,
        brandInfo,
        categoryId: categoryid,
        showCatNav: showCatNav.value,
        catColor: catColorData.value
    });
};
</script>
<style lang="scss" scoped>
.search-lang-box {
    display: flex;
    align-items: center;
}

/*分类导航*/
.catNav-warp .item-cat_nav-con {
    width: 100%;
}
.catNav-warp .item-cat_nav-con::-webkit-scrollbar {
    display: none;
}
.catNav-warp .cat-nav-list {
    flex-wrap: nowrap;
    padding-bottom: 10rpx;
    white-space: nowrap;
}
.catNav-warp .cat-nav-list .nav-item {
    margin: 0;
    height: 80rpx;
    line-height: 80rpx;
    position: relative;
    text-align: center;
    padding: 0 20rpx;
    display: inline-block;

    &:last-child {
        margin-right: 20rpx;
    }
}
.catNav-warp .cat-nav-list .nav-item:first-child {
    margin-left: 20rpx;
}
.catNav-warp .cat-nav-list .nav-item .tit {
    font-size: 28rpx;
}
.catNav-warp .cat-nav-list .nav-item.current .tit {
    font-size: 32rpx;
}
.catNav-warp .cat-nav-list .nav-item.current:after {
    content: "";
    position: absolute;
    bottom: 1px;
    left: 20%;
    right: 20%;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 6rpx;
    height: 6rpx;
}
.catNav-warp .item-search-con {
    margin-bottom: 10rpx;
}
.catNav-warp .item-search-con .item-search-form {
    background: #fff;
    height: 70rpx;
    display: flex;
    align-items: center;
    padding: 0;
    color: #555555;
}
.catNav-warp .module_ico {
    margin-left: 20rpx;
}
.catNav-warp .item-search-con .item-search-form .item-search-input {
    margin-left: 10rpx;
    font-size: 24rpx;
}
.catNav-warp .item-logo-con {
    margin-left: 20rpx;
    margin-top: 10rpx;
}
.catNav-warp .item-logo-con .item-logo-img image {
    height: 80rpx;
    margin-bottom: 20rpx;
    margin-left: 10rpx;
}

.catNav-warp.fixed {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 88;
    & .flex {
        display: flex;
        align-items: center;
    }

    &.fixed-top {
        top: 116rpx;
    }
}
.catNav-warp-blank {
    height: 360rpx;
}
.catNav-warp.fixed .item-logo-con {
    display: none;
}
.catNav-warp.fixed .item-search-con {
    margin-right: 200rpx;
}

.catnav-logo {
    margin-left: 10rpx;
    margin-top: 5rpx;
    margin-bottom: 10rpx;
    margin-right: 30rpx;
    max-width: 210rpx;
}
.default-search {
    padding: 0 10px;
    margin-bottom: 5px;
    width: 100%;
}
.default-search-config {
    background-color: #fff;
    border-radius: 3px;
}
.catnav-search {
    display: flex;
    align-items: center;
    height: 35px;
}
.catnav-search-text {
    font-size: 14px;
    margin-left: 5px;
}

.catnav-skeleton {
    height: 80rpx;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
</style>
