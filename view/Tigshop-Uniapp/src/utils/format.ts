import { useConfigStore } from "@/store/config";

// 格式化图片地址
export function imageFormat(path: string) {
    const configStore = useConfigStore();
    if (!path) {
        return "";
    }
    return path.includes("http") !== false ? path : configStore.storageUrl + path;
}

// 基础页面列表
const baseList = [
    {
        name: "商城首页",
        link: "/",
        url: "/pages/index/index"
    },
    {
        name: "分类页面（仅分类）",
        link: "list",
        url: "/pages/productCate/index"
    },
    {
        name: "限时秒杀",
        link: "seckill/list",
        url: "/pages/seckill/list"
    },
    {
        name: "购物车",
        link: "cart",
        url: "/pages/cart/index"
    },
    {
        name: "搜索页面",
        link: "search",
        url: "/pages/search/index"
    },
    {
        name: "会员首页",
        link: "member",
        url: "/pages/user/index"
    },
    {
        name: "我的优惠券",
        link: "member/coupon/list",
        url: "/pages/user/coupon?type=2"
    },
    {
        name: "我的订单",
        link: "member/order/list",
        url: "/pages/user/order/list"
    },
    {
        name: "待评价订单",
        link: "member/comment/list",
        url: "/pages/user/order/list?type=await_comment"
    },
    {
        name: "收货地址",
        link: "member/address/list",
        url: "/pages/address/list"
    },
    {
        name: "退换货",
        link: "member/return/list",
        url: "/pages/user/afterSale/list"
    },
    {
        name: "账户余额",
        link: "member/account/detail",
        url: "/pages/user/account/index"
    },
    {
        name: "我的积分",
        link: "member/point/list",
        url: "/pages/user/point/detail"
    },
    {
        name: "收藏商品",
        link: "member/collectProduct/list",
        url: "/pages/user/collectProduct/index"
    },
    {
        name: "站内消息",
        link: "member/userMessage/list",
        url: "/pages/user/messageLog/index"
    },
    {
        name: "发票管理",
        link: "member/orderInvoice/list",
        url: "/pages/user/invoiceManagement/index"
    },
    {
        name: "账号信息",
        link: "member/profile/info",
        url: "/pages/user/profile/index"
    },
    {
        name: "账号信息",
        link: "exchange/list",
        url: "/pages/exchange/list"
    },
    {
        name: "店铺列表",
        link: "shop/list",
        url: "/pages/shop/list"
    }
];

// 链接格式化
export function urlFormat(params: string | { path: string; [key: string]: any }): string {
    if (!params) return "";
    if (typeof params === "string") {
        return params;
    } else if (typeof params === "object" && Object.values(params).length) {
        // 地址栏参数
        let urlParameter;
        Object.keys(params).length && (urlParameter = uni.$u.queryParams(params.data));
        switch (params.path) {
            case "product":
                // 商品
                return `/pages/product/index${urlParameter}`;
            case "list":
                // 分类
                return `/pages/search/result?categoryId=${params.data.id}`;
            case "article":
                // 文章
                return `/pages/article/news/detail?id=${params.data.id}`;
            case "brand":
                // 品牌
                if (params.data.id) {
                    const data = { ...params.data, brand_id: params.data.id };
                    delete data.id;
                    urlParameter = uni.$u.queryParams(data);
                }
                return `/pages/search/result${urlParameter}`;
            case "coupon":
                // 优惠券
                return `/pages/coupon/detail${urlParameter}`;
            case "base":
                // 基础页面
                const { url = "/pages/index/index" } = baseList.find((item) => item.link === params.link)!;
                return url;
            case "custom":
                // 自定义链接
                return params.appLink;
            case "decorate":
                // 自定义装修页面
                return `/pages/customPage/index?id=${params.data.id}`;
            case "default":
                return params.link;
            case "order":
                return `/pages/user/order/info?id=${params.id}`;
            default:
                return params.path;
        }
    }
}

export function formatDate(date: Date, format = "yyyy-MM-dd"): string {
    const map = {
        yyyy: date.getFullYear().toString(),
        MM: ("0" + (date.getMonth() + 1)).slice(-2),
        dd: ("0" + date.getDate()).slice(-2),
        HH: ("0" + date.getHours()).slice(-2),
        mm: ("0" + date.getMinutes()).slice(-2),
        ss: ("0" + date.getSeconds()).slice(-2)
    };
    return format.replace(/yyyy|MM|dd|HH|mm|ss/g, (matched) => map[matched]);
}
/**
 * 格式化时间戳
 * @param {number} timestamp - 时间戳（毫秒）
 * @param {string} format - 格式模板，例如 'YYYY-MM-DD HH:mm:ss'
 * @returns {string} 格式化后的日期时间字符串
 */
export function formatTimestamp(timestamp: string | number, format = "yyyy-MM-dd") {
    if (!timestamp) return "";

    const date = new Date(timestamp);

    const formatDate = {
        Y: date.getFullYear(),
        M: String(date.getMonth() + 1).padStart(2, "0"), // 月份从0开始
        D: String(date.getDate()).padStart(2, "0"),
        H: String(date.getHours()).padStart(2, "0"),
        m: String(date.getMinutes()).padStart(2, "0"),
        s: String(date.getSeconds()).padStart(2, "0")
    };

    return format.replace(/YYYY|MM|DD|HH|mm|ss/g, (match) => formatDate[match[0]]);
}
