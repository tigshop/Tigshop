import request from "@/utils/request";
import type { AreaCodeFilterResult, AreaCodeFormState } from "@/types/multilingual/areaCode.d";
// 获取区号管理列表
export const getAreaCodeList = (params: object) => {
    return request<AreaCodeFilterResult>({
        url: "setting/areaCode/list",
        method: "get",
        params
    });
};
// 获取区号管理配置项
export const getAreaCodeConfig = () => {
    return request<any>({
        url: "setting/areaCode/config",
        method: "get"
    });
};
// 区号管理列表页面批量操作
export const batchSubmit = (type: string, data: object) => {
    return request({
        url: "setting/areaCode/batch",
        method: "post",
        data: {type, ...data}
    });
};
// 区号管理列表页面删除项
export const delAreaCode = (data: object) => {
    return request({
        url: "setting/areaCode/del",
        method: "post",
        data
    });
};
// 区号管理列表页面更新项
export const updateAreaCodeFiled = (data: object) => {
    return request({
        url: "setting/areaCode/updateField",
        method: "post",
        data
    });
};
// 获取区号管理详情
export const getAreaCode = (action: string, params: object) => {
    return request<AreaCodeFormState[]>({
        url: "setting/areaCode/" + action,
        method: "get",
        params
    });
};
// 更新区号管理
export const updateAreaCode = (operation: "create" | "update", data: object) => {
    return request({
        url: "setting/areaCode/" + operation,
        method: "post",
        data
    });
};
// 翻译接口
export const updateTranslation = (data: object) => {
    return request<any>({
        url: "setting/areaCode/translation",
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

