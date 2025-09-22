import request from "@/utils/request";
import type { HomeResponse, GetCateProductFilterParams, GetCateProductResponse, SeckillListResponse, CouponResponse } from "@/types/home/home";
import type { MobileCatNavFilterParams, MobileCatNavFilterResult } from "@/types/decorate/mobileCatNav.d";
import type { getProductListFilterState } from "@/types/decorate/mobileProduct";

// 首页
export const getIndex = (id?: number) => {
    const url = id ? `home/home/index?previewId=${id}` : "home/home/index";
    return request<HomeResponse>({
        url,
        method: "get"
    });
};

// 获取首页分类栏
export const getMobileCatNavList = (params: MobileCatNavFilterParams) => {
    return request<MobileCatNavFilterResult>({
        url: "home/home/mobileCatNav",
        method: "get",
        params
    });
};

// 获取首页分类商品列表
export const getCateProduct = (params: AnyObject) => {
    return request<GetCateProductResponse>({
        url: "product/product/list",
        method: "get",
        params
    });
};

// 获取首页商品
export const getProductList = (params: object) => {
    return request<getProductListFilterState>({
        url: "home/home/getRecommend",
        method: "get",
        params
    });
};

// 首页秒杀
export const getHomeSeckill = () => {
    return request<SeckillListResponse>({
        url: "home/home/getSeckill",
        method: "get"
    });
};

// 首页优惠券
export const getHomeCoupon = () => {
    return request<CouponResponse>({
        url: "home/home/getCoupon",
        method: "get"
    });
};

// 用户模块装修
export const getMemberDecorate = () => {
    return request({
        url: "home/home/memberDecorate",
        method: "get"
    });
};

//获取开屏广告
export const getSplashAd = () => {
    return request({
        url: "decorate/discrete/getOpenAdvertising",
        method: "get"
    });
};
