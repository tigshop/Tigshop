import request from "@/utils/request";
import type {
    GuessLikeDataResponse,
    GuessLikeIdsDataResponse,
    ConfigResponse,
    ThemeResponse,
    LangListResponse,
    DefaultLangResponse,
    CurrencyResponse,
    MobileAreaCodeResponse,
    ProductsListResponse
} from "@/types/common";

//  猜你喜欢
export const getGuessLike = (params: object) => {
    return request<GuessLikeDataResponse>({
        url: "common/recommend/guessLike",
        method: "get",
        params
    });
};

export const getGuessLikeIds = (params: object) => {
    return request<GuessLikeIdsDataResponse>({
        url: "common/recommend/getProductIds",
        method: "get",
        params
    });
};

export const getBaseConfig = () => {
    return request<ConfigResponse>({
        url: "common/config/base",
        method: "get"
    });
};

export const initConfigSettings = (previewId?: number) => {
    return request<ConfigResponse>({
        url: "common/config/initConfigSettings",
        method: "get",
        params: { previewId }
    });
};

export const themeSettings = () => {
    return request<ThemeResponse>({
        url: "common/config/themeSettings",
        method: "get"
    });
};

// 获取二维码
export const getQrCode = (url: string) => {
    return request({
        url: "common/util/qrCode?url=" + url,
        method: "get"
    });
};

export const getMiniCode = (url: string, productId: number) => {
    return request({
        url: "common/util/miniCode?path=" + url + "&id=" + productId,
        method: "get"
    });
};

// 获取客服配置
export const getServiceConfig = () => {
    return request<any>({
        url: "home/home/getCustomerServiceConfig",
        method: "get"
    });
};

// 记录日志
export const commonLog = (params: AnyObject) => {
    return request({
        url: "common/log",
        method: "get",
        params
    });
};

// 获取语言包
export const getLang = (localeCode: string) => {
    return request({
        url: "common/i18n/getLocaleTranslations?localeCode=" + localeCode,
        method: "get"
    });
};

// 获取语言列表
export const getLangList = () => {
    return request<LangListResponse>({
        url: "common/i18n/getLocales",
        method: "get"
    });
};

// 获得默认语言
export const getDefaultLang = (code: string) => {
    return request<DefaultLangResponse>({
        url: "common/i18n/getDefaultLocale?code=" + code,
        method: "get"
    });
};

// 货币列表
export const getCurrencyList = () => {
    return request<CurrencyResponse>({
        url: "common/currency/getCurrency",
        method: "get"
    });
};

// 获取区域code
export const getmobileAreaCode = () => {
    return request<MobileAreaCodeResponse>({
        url: "common/config/mobileAreaCode",
        method: "get"
    });
};

// 通用获取商品列表
export const getProductsList = (params: object) => {
    return request<ProductsListResponse>({
        url: "product/product/list",
        method: "get",
        params
    });
};

export const getAppUpdate = (data: object) => {
    return request<any>({
        url: "appVersion/getAppUpdate",
        method: "post",
        data
    });
};
