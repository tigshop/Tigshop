import request from "@/utils/request";
import type { CurrencyFilterResult, CurrencyFormState } from "@/types/multilingual/currencyManagement.d";
// 获取币种管理列表
export const getCurrencyList = (params: object) => {
    return request<CurrencyFilterResult>({
        url: "lang/currency/list",
        method: "get",
        params
    });
};
// 获取币种管理配置项
export const getCurrencyConfig = () => {
    return request<any>({
        url: "lang/currency/config",
        method: "get"
    });
};
// 币种管理列表页面批量操作
export const batchSubmit = (type: string, data: object) => {
    return request({
        url: "lang/currency/batch",
        method: "post",
        data: {type, ...data}
    });
};
// 币种管理列表页面删除项
export const delCurrency = (data: object) => {
    return request({
        url: "lang/currency/del",
        method: "post",
        data
    });
};
// 币种管理列表页面更新项
export const updateCurrencyFiled = (data: object) => {
    return request({
        url: "lang/currency/updateField",
        method: "post",
        data
    });
};
// 获取币种管理详情
export const getCurrency = (action: string, params: object) => {
    return request<CurrencyFormState>({
        url: "lang/currency/" + action,
        method: "get",
        params
    });
};
// 更新币种管理
export const updateCurrency = (operation: "create" | "update", data: object) => {
    return request({
        url: "lang/currency/" + operation,
        method: "post",
        data
    });
};
// 翻译接口
export const updateTranslation = (data: object) => {
    return request<any>({
        url: "lang/currency/translation",
        method: "post",
        data
    });
};

// 翻译业务数据
export const updateCreateTranslation = (data: object) => {
    return request<any>({
        url: "lang/translations/createTranslations",
        method: "post",
        data
    });
};

