<template>
    <tig-layout :title="navbarTitle">
        <view class="pageMain productSort">
            <view class="header acea-row row-center-wrapper">
                <view class="acea-row row-between-wrapper input" @click.stop="toSearch">
                    <uni-icons type="search" size="18" class="sousuo" />
                    <view class="txt"> {{ $t("请输入搜索内容") }} </view>
                </view>
            </view>

            <view class="tab-box flex align-center justify-between">
                <template v-for="item in tabList" :key="item.value">
                    <view class="item flex align-center" :class="{ active: tabIndex === item.value }" @click="onChangeTab(item)">
                        <text>{{ $t(item.label) }}</text>
                        <view v-show="item.value === 'price'" class="price-ico-box flex flex-column">
                            <uni-icons type="up" size="8" :class="{ order: tabIndex === 'price' && item.order === 'asc' }" />
                            <uni-icons type="down" size="8" :class="{ order: tabIndex === 'price' && item.order === 'desc' }" />
                        </view>
                    </view>
                </template>

                <view class="item flex" @click="showDrawer">
                    <text>{{ $t("筛选") }}</text>
                    <uni-icons type="right" size="12" class="sanjiaoright" />
                </view>
            </view>

            <view class="tag-row">
                <view class="tag-list flex-wrap align-center">
                    <view v-if="filterParams.keyword" class="tag-item mr10 line1" @click="del('keyword')">
                        <text class="line1">{{ $t("搜索关键词") }}"{{ filterParams.keyword }}"</text>
                        <uni-icons type="closeempty" size="10" />
                    </view>
                    <view v-if="filterParams.intro" class="tag-item mr10" @click="del('intro')">
                        <text>{{ introList[filterParams.intro] }}</text>
                        <uni-icons type="closeempty" size="10" />
                    </view>
                    <view v-if="couponInfo && couponInfo.couponName" class="tag-item mr10" @click="del('coupon_info')">
                        <text>{{ $t("优惠券") }}: "{{ couponInfo.couponName }}"</text>
                        <uni-icons type="closeempty" size="10" />
                    </view>
                    <view v-if="brandName" class="tag-item mr10 brand" @click="del('brand')">
                        <text>{{ brandName }}</text>
                        <uni-icons type="closeempty" size="10" />
                    </view>
                    <view v-if="filterParams.max || filterParams.min" class="tag-item mr10" @click="del('price')">
                        <text>{{ filterParams.min || 0 }} - {{ filterParams.max || 0 }}</text>
                        <uni-icons type="closeempty" size="10" />
                    </view>
                    <template v-if="treeList.length > 0">
                        <view v-for="(item, index) in treeList" :key="index" class="flex align-center" @click="delCategory(index)">
                            <view class="tag-item">
                                <text>{{ item.categoryName }}</text>
                                <uni-icons type="closeempty" size="10" />
                            </view>
                            <view v-if="index < treeList.length - 1" class="tag-interval">
                                <uni-icons type="right" size="10" />
                            </view>
                        </view>
                    </template>
                </view>
            </view>

            <!-- 加载商品模块 -->
            <template v-if="!isLoading && total > 0">
                <view class="goods-container">
                    <masonry :commodity-list="productList" :promotion-list="promotionList" />
                </view>
            </template>
            <template v-if="!isLoading && total === 0">
                <empty-box mode="search" background="#f5f5f5" />
            </template>

            <loading-box v-model="isLoadMore" :page="filterParams.page" :length="productList.length" />
            <tig-popup v-model:show="showDrawerRef" position="right" :z-index="900" :show-close="false">
                <scroll-view scroll-y="true" class="search_condition">
                    <view class="search_condition-box">
                        <view v-if="categoryList.length > 0" class="tab_box">
                            <view class="title-box flex justify-between">
                                <view class="txt"> {{ $t("分类") }} </view>
                                <view class="more" @click="categoryShow = !categoryShow">
                                    <uni-icons v-if="categoryShow" type="up" size="16" color="#bfbfbf" />
                                    <uni-icons v-else type="down" size="16" color="#bfbfbf" />
                                </view>
                            </view>

                            <view class="tabs flex-wrap">
                                <view
                                    v-for="(item, index) in getCategoryList"
                                    :key="index"
                                    class="item"
                                    :class="{ active: filterParams.cat == item.categoryId }"
                                    @click="filterParams.cat = item.categoryId"
                                >
                                    <uni-icons v-if="filterParams.cat == item.categoryId" type="checkmarkempty" size="12" />
                                    {{ item.categoryName }}
                                </view>
                            </view>
                        </view>
                        <template v-if="brandList.length > 0">
                            <view class="tab_box">
                                <view class="title-box flex justify-between">
                                    <view class="txt"> {{ $t("品牌") }} </view>
                                    <view class="more" @click="brandShow = !brandShow">
                                        <uni-icons v-if="brandShow" type="up" size="16" color="#bfbfbf" />
                                        <uni-icons v-else type="down" size="16" color="#bfbfbf" />
                                    </view>
                                </view>
                                <view class="tabs flex-wrap">
                                    <template v-for="(item, index) in brandShow ? brandList : brandList.slice(0, 3)" :key="index">
                                        <view class="item" :class="{ active: brandIds.includes(item.brandId) }" @click="onChangeBrand(item)">
                                            <uni-icons v-if="brandIds.includes(item.brandId)" type="checkmarkempty" size="12" />
                                            {{ item.brandName }}
                                        </view>
                                    </template>
                                </view>
                            </view>
                        </template>

                        <view class="tab_box">
                            <view class="title-box flex justify-between">
                                <view class="txt"> {{ $t("价格") }} </view>
                            </view>
                            <view class="tabs flex justify-between align-center">
                                <input v-model="filterParams.min" class="uni-input" type="number" :placeholder="$t('最低价')" />
                                <view class="xian" />
                                <input v-model="filterParams.max" class="uni-input" type="number" :placeholder="$t('最高价')" />
                            </view>
                        </view>
                    </view>

                    <view class="btn-box" :class="{ 'safe-btn': safeBottom > 0 }">
                        <view class="flex btn-flex">
                            <view class="btn" @click="reset">{{ $t("重置") }}</view>
                            <view class="btn submit" @click="submit">{{ $t("确定") }}</view>
                        </view>
                    </view>
                </scroll-view>
            </tig-popup>
        </view>
    </tig-layout>
</template>

<script lang="ts" setup>
import { ref, reactive, computed } from "vue";
import { onLoad } from "@dcloudio/uni-app";
import masonry from "@/components/masonry/masonry.vue";
import type { Brand, filterSeleted, ProductFilterParams } from "@/types/search/search";
import { getCategoryTree, getCategoryProductFilter, getCategoryProduct, getShopCategoryTree } from "@/api/search/search";
import { useList } from "@/hooks";
import { useI18n } from "vue-i18n";
import { useSafeAreaInsets } from "@/hooks";

const { t } = useI18n();

const navbarTitle = ref("商品搜索");

const { safeBottom } = useSafeAreaInsets();

const filterParams = reactive<ProductFilterParams>({
    //初始化用于查询的参数
    page: 1,
    size: 10,
    sort: "",
    order: "asc",
    keyword: "",
    max: "",
    min: "",
    cat: 0,
    couponId: 0,
    brand: [],
    intro: "",
    pageType: "search"
});
const brandList = ref<Brand[]>([]);
const brandIds = ref<number[]>([]);
const brandName = ref("");
const categoryList = ref<filterSeleted[]>([]);
const shopCategoryList = ref<filterSeleted[]>([]);
const introList: { [key: string]: string } = {
    new: t("新品"),
    hot: t("热销"),
    best: t("精品")
};
const categoryTree = ref<filterSeleted[]>([]);

const getCategoryList = computed(() => {
    return categoryList.value.length > 3 && !categoryShow.value ? categoryList.value.slice(0, 3) : categoryList.value;
});

const treeList = computed(() => {
    if (filterParams.cat) {
        return categoryTree.value;
    }
    if (filterParams.shopCategoryId) {
        return shopCategoryList.value;
    }
    return [];
});

const {
    getList,
    total,
    data: productList,
    promotionList,
    isLoadMore,
    isLoading
} = useList(getCategoryProduct, {
    params: filterParams,
    path: {
        dataKey: "records"
    },
    needPromotionList: true
});

// 获取列表的查询结果
const loadFilter = async () => {
    try {
        filterParams.brand = brandIds.value.join(",");
        const productFilter = await getCategoryProductFilter({ ...filterParams });
        brandList.value = productFilter.filter.brand;
        categoryList.value = productFilter.filter.category;
        shopCategoryList.value = productFilter.filter.shopCategory;
        brandName.value = productFilter.filterSelected.brand;
        if (filterParams.cat) {
            const tree = await getCategoryTree(filterParams.cat);
            categoryTree.value = tree;
        }
        if (filterParams.shopCategoryId) {
            const shopTree = await getShopCategoryTree(filterParams.shopCategoryId);
            shopCategoryList.value = shopTree;
        }
    } catch (error: any) {
        uni.showToast({
            title: error.message,
            icon: "none"
        });
    }
};
const tabIndex = ref("default");
const tabList = ref([
    {
        label: "默认",
        value: "default"
    },
    {
        label: "销量",
        value: "sale"
    },
    {
        label: "价格",
        value: "price",
        order: "desc"
    }
]);
const onChangeTab = (item: any) => {
    if (item.value == "price") {
        item.order = item.order === "desc" ? "asc" : "desc";
    } else {
        item.order = "";
    }
    tabIndex.value = item.value;
    filterParams.sort = item.value;
    filterParams.order = item.order;
    loadFilter();
    resetList();
    getList(() => {
        return (filterParams.brand = brandIds.value.join(","));
    });
};

const del = (type: string) => {
    switch (type) {
        case "brand":
            brandIds.value = [];
            brandName.value = "";
            break;
        case "price":
            filterParams.min = "";
            filterParams.max = "";
            break;
        case "keyword":
            filterParams.keyword = "";
            break;
        case "intro":
            filterParams.intro = "";
            break;
        case "couponInfo":
            couponInfo.value = {};
            filterParams.couponId = 0;
            break;
    }
    loadFilter();
    resetList();
    getList(() => {
        return { brand: brandIds.value.join(",") };
    });
};
const delCategory = (index: number) => {
    if (index > 0) {
        if (filterParams.shopCategoryId) {
            filterParams.shopCategoryId = shopCategoryList.value[index - 1].categoryId;
        } else {
            filterParams.cat = categoryTree.value[index - 1].categoryId;
        }
    } else {
        if (filterParams.shopCategoryId) {
            filterParams.shopCategoryId = 0;
        } else {
            filterParams.cat = 0;
        }
    }
    loadFilter();
    resetList();
    getList(() => {
        return { brand: brandIds.value.join(",") };
    });
};

const showDrawerRef = ref<boolean>(false);
// 打开窗口
const showDrawer = () => {
    showDrawerRef.value = true;
};
// 关闭窗口
const closeDrawer = () => {
    showDrawerRef.value = false;
};

const toSearch = () => {
    uni.redirectTo({
        url: "/pages/search/index"
    });
};
const couponInfo = ref<any>({});
onLoad((option: any) => {
    console.log(option, "123123");

    if (option) {
        if (option.keyWords) {
            filterParams.keyword = option.keyWords;
        }
        if (option.intro) {
            filterParams.intro = option.intro;
        }
        if (option.categoryId) {
            filterParams.cat = option.categoryId;
        }
        if (option.brandId) {
            brandIds.value.push(option.brandId);
        }
        if (option.shopCategoryId) {
            filterParams.shopCategoryId = option.shopCategoryId;
        }
        if (option.couponInfo) {
            couponInfo.value = JSON.parse(decodeURIComponent(option.couponInfo));
            filterParams.couponId = couponInfo.value.couponId;
        }
    }
    loadFilter();
    getList(() => {
        return { brand: brandIds.value.join(",") };
    });
});
const categoryShow = ref<boolean>(false);
const brandShow = ref<boolean>(false);

const onChangeBrand = (item: any) => {
    let index = brandIds.value.indexOf(item.brandId);
    if (index !== -1) {
        brandIds.value.splice(index, 1);
    } else {
        brandIds.value.push(item.brandId);
    }
};
const submit = () => {
    if (Number(filterParams.min) > Number(filterParams.max)) {
        uni.showToast({
            title: t("最低价不能大于最高价"),
            icon: "none"
        });
        return;
    }

    loadFilter();
    closeDrawer();
    resetList();
    getList(() => {
        return { brand: brandIds.value.join(",") };
    });
};
const reset = () => {
    filterParams.min = "";
    filterParams.max = "";
    brandIds.value = [];
    filterParams.cat = 0;
};

const resetList = () => {
    total.value = 0;
    filterParams.page = 1;
    filterParams.intro = "";
    productList.value = [];
    promotionList.value = {};
};
</script>

<style lang="scss" scoped>
.productSort .header {
    width: 100%;
    height: 99rpx;
    background-color: #fff;
    position: fixed;
    left: 0;
    right: 0;
    top: var(--nav-height);
    z-index: 11;
    border-bottom: 1rpx solid #f5f5f5;
}
.productSort .header .input {
    width: 700rpx;
    height: 60rpx;
    background-color: #f5f5f5;
    border-radius: 50rpx;
    box-sizing: border-box;
    padding: 0 25rpx;
}
.productSort .header .input .iconfont {
    font-size: 35rpx;
    color: #555;
}
.productSort .header .input .txt {
    color: #999;
    width: 93%;
    font-size: 26rpx;
}
.tab-box {
    padding-top: 99rpx;
    background-color: #fff;
    .item {
        width: 100%;
        margin: 30rpx 0;
        flex: 1;
        color: #333;
        font-size: 24rpx;
        align-items: center;
        justify-content: center;
        .price-ico-box {
            margin-left: 10rpx;
            .uni-icons {
                color: $tig-color-grey !important;
            }
            .order {
                color: var(--general) !important;
            }
        }
        .sanjiaoright {
            color: $tig-color-grey !important;
            margin-left: 10rpx;
        }
    }
    .active {
        color: var(--general);
    }
}
.tag-row {
    background-color: #fff;
    padding: 0rpx 30rpx 0rpx 30rpx;
    .tag-list {
        .tag-item {
            display: flex;
            align-items: center;
            padding: 5rpx 10rpx;
            text-align: center;
            color: #232326;
            background-color: #f0f2f5;
            border-radius: 3px;
            border: solid 1px #f0f2f5;
            font-size: 24rpx;
            border-radius: 27px;
            vertical-align: middle;
            color: #232326;
            background-color: #f7f7f7;
            margin-bottom: 20rpx;
            text {
                margin: 0 5rpx;
            }
        }
        .mr10 {
            margin-right: 10rpx;
        }
        .tag-interval {
            margin: 0 10rpx;
            margin-bottom: 20rpx;
            font-size: 18rpx;
        }
    }
}
.pageMain {
    :deep(.popup-container) {
        border-radius: 15rpx 0 0 0;
    }
    .search_condition {
        width: 88vw;
        height: 100%;

        .search_condition-box {
            position: relative;
            padding-top: var(--safe-top);
            padding-bottom: calc(var(--safe-bottom) + 110rpx);
        }

        .tab_box {
            padding: 20rpx;
            .title-box {
                color: #666;
                padding: 10rpx 0;
                margin-bottom: 10rpx;
            }
            .tabs {
                .item {
                    margin-top: 10px;
                    width: 30%;
                    text-align: center;
                    line-height: 29px;
                    background-color: #f0f2f5;
                    border: 1px solid #f0f2f5;
                    border-radius: 5px;
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    font-size: 20rpx;
                    margin: 10rpx;
                }
                .active {
                    border: 1px solid var(--general);
                    color: var(--general);
                    :deep(.uni-icons) {
                        color: var(--general) !important;
                    }
                }
                .uni-input {
                    width: 42%;
                    background-color: #f0f2f5;
                    padding: 10rpx;
                    font-size: 22rpx;
                    text-align: center;
                    border-radius: 5px;
                }
                .xian {
                    width: 16rpx;
                    margin: 0 10rpx;
                    border-bottom: 2rpx solid #848689;
                }
            }
        }

        .btn-box {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 88vw;
            z-index: 99;
            padding-bottom: 20rpx;
            background-color: #fff;

            &.safe-btn {
                padding-bottom: var(--safe-bottom);
            }

            .btn-flex {
                padding: 0 20rpx;
                column-gap: 20rpx;
                justify-content: center;
            }

            .btn {
                height: 70rpx;
                flex: 1;
                background-color: #f0f2f5;
                box-sizing: content-box;
                border-radius: 8rpx;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0 90rpx;
            }
            .submit {
                background-color: var(--general);
                color: #fff;
            }
        }
    }
}
.goods-container {
    padding: 20rpx;
}
.sousuo {
    color: $tig-color-grey !important;
}
</style>
