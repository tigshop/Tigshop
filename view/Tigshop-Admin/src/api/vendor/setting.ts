import request from "@/utils/request";

//获取登录协议
export const getLoginProtocol = () => {
    return request<any>({
        url: "setting/config/getLoginProtocol",
        method: "get"
    });
};

//获取登录协议内容  termsOfService:服务协议；privacyPolicy:隐私政策；afterSalesService:售后服务
export const getLoginProtocolContent = (params: object) => {
    return request<any>({
        url: "setting/config/getLoginProtocolContent",
        method: "get",
        params
    });
};

// 保存登录协议
export const saveLoginProtocol = (data: object) => {
    return request({
        url: "setting/config/saveLoginProtocol",
        method: "post",
        data
    });
};
