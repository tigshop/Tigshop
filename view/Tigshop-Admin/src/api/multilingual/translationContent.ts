import request from "@/utils/request";
import type { TranslationsFilterResult, TranslationsFilterState } from "@/types/multilingual/translationContent.d";
// 获取翻译内容列表
export const getTranslationsList = (params: object) => {
    return request<TranslationsFilterResult>({
        url: "lang/translations/list",
        method: "get",
        params
    });
};
// 获取翻译内容列表前3条
export const getTranslationsList3 = () => {
    return request<any[]>({
        url: "lang/translations/getLocalesLimit3",
        method: "get"
    });
};
// 获取翻译内容配置项
export const getTranslationsConfig = () => {
    return request<any>({
        url: "lang/translations/config",
        method: "get"
    });
};
// 翻译内容列表页面批量操作
export const batchSubmit = (type: string, data: object) => {
    return request({
        url: "lang/translations/batch",
        method: "post",
        data: {type, ...data}
    });
};
// 翻译内容列表页面删除项
export const delTranslations = (data: object) => {
    return request({
        url: "lang/translations/del",
        method: "post",
        data
    });
};
// 翻译内容列表页面更新项
export const updateTranslationsFiled = (data: object) => {
    return request({
        url: "lang/translations/updateField",
        method: "post",
        data
    });
};
// 获取翻译内容详情
export const getTranslations = (action: string, params: object) => {
    return request<TranslationsFilterState>({
        url: "lang/translations/" + action,
        method: "get",
        params
    });
};
// 更新翻译内容
export const updateTranslations = (operation: "create" | "update" | "batchCreate", data: object) => {
    return request({
        url: "lang/translations/" + operation,
        method: "post",
        data
    });
};
// 翻译接口
export const updateTranslation = (data: object) => {
    return request<any>({
        url: "lang/translations/translation",
        method: "post",
        data
    });
};

// 翻译业务数据
export const updateCreateTranslation = (data: object) => {
    return request({
        url: "lang/translations/createTranslations",
        method: "post",
        data
    });
};

// 一键翻译接口
export const unifiedTranslation = (data: object) => {
    return request<any>({
        url: "lang/translations/multiple",
        method: "post",
        data
    });
};
