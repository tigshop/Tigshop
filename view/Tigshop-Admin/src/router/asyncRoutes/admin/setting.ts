export default {
    path: "/setting",
    name: "setting",
    component: () => import("@/layouts/base/index.vue"),
    meta: { title: "设置" },
    children: [
        {
            path: "",
            name: "configManage",
            meta: { title: "商城设置" },
            redirect: "/setting/base-basic",
            children: [
                {
                    path: "base-basic",
                    name: "baseBasicManage",
                    meta: { title: "基础信息" },
                    component: () => import("@/views/setting/config/base/src/BasicSettings.vue")
                },
                {
                    path: "base-product",
                    name: "baseProductManage",
                    meta: { title: "商品设置" },
                    component: () => import("@/views/setting/config/base/src/ProductSettings.vue")
                },
                {
                    path: "base-shopping",
                    name: "baseShoppingManage",
                    meta: { title: "交易设置" },
                    component: () => import("@/views/setting/config/base/src/ShoppingSettings.vue")
                },
                {
                    path: "base-order",
                    name: "baseOrderManage",
                    meta: { title: "订单设置" },
                    component: () => import("@/views/setting/config/base/src/OrderSettings.vue")
                },
                {
                    path: "base-receipt",
                    name: "baseReceiptManage",
                    meta: { title: "小票打印" },
                    component: () => import("@/views/setting/config/receiptPrintSetting/List.vue")
                },
                {
                    path: "base-service",
                    name: "baseServiceManage",
                    meta: { title: "客服设置" },
                    component: () => import("@/views/setting/config/base/src/ServiceSettings.vue")
                },
                {
                    path: "after-sales-service",
                    name: "AfterSalesServiceManage",
                    meta: { title: "售后服务设置" },
                    component: () => import("@/views/setting/config/AfterSalesService.vue")
                }
            ]
        },
        {
            path: "",
            name: "shipping",
            meta: { title: "配送设置" },
            redirect: "/setting/logistics",
            children: [
                {
                    path: "logistics",
                    name: "logisticsManage",
                    meta: { title: "配送设置" },
                    component: () => import("@/views/setting/config/logistics/Index.vue")
                },
                {
                    path: "logistics-company/list",
                    name: "logisticsCompanyManage",
                    meta: { title: "物流公司" },
                    component: () => import("@/views/setting/logisticsCompany/List.vue")
                },

                {
                    path: "shipping-tpl/list",
                    name: "shippingTplManage",
                    meta: { title: "运费模板" },
                    component: () => import("@/views/setting/shippingTpl/List.vue")
                }
            ]
        },

        {
            path: "",
            name: "config",
            meta: { title: "系统设置" },
            redirect: "/setting/global-setting",
            children: [
                {
                    path: "global-setting",
                    name: "globalSetting",
                    meta: { title: "全局设置" },
                    component: () => import("@/views/setting/config/base/src/GlobalSetting.vue")
                },
                {
                    path: "login-setting",
                    name: "loginSetting",
                    meta: { title: "登录设置" },
                    component: () => import("@/views/setting/config/base/src/LoginSetting.vue")
                },
                {
                    path: "payment-setting",
                    name: "paymentSetting",
                    meta: { title: "支付设置" },
                    component: () => import("@/views/setting/config/payment/Payment.vue")
                },
                {
                    path: "mail",
                    name: "mailManage",
                    meta: { title: "邮箱服务器" },
                    component: () => import("@/views/setting/config/Mail.vue")
                },
                {
                    path: "mail-template",
                    name: "mailTemplateManage",
                    meta: { title: "邮件模板" },
                    component: () => import("@/views/setting/config/MailTemplate.vue")
                },
                {
                    path: "region/list",
                    name: "regionManage",
                    meta: { title: "地区管理" },
                    component: () => import("@/views/setting/region/List.vue")
                },
                {
                    path: "friend-links/list",
                    name: "friendLinksManage",
                    meta: { title: "友情链接" },
                    component: () => import("@/views/setting/friendLinks/List.vue")
                },
                {
                    path: "app-version/list",
                    name: "appVersionManage",
                    meta: { title: "APP版本" },
                    component: () => import("@/views/setting/appVersion/List.vue")
                }
            ]
        },
        {
            path: "",
            name: "messageSetting",
            meta: { title: "消息设置" },
            redirect: "/setting/base-notice",
            children: [
                {
                    path: "base-notice",
                    name: "baseNoticeManage",
                    meta: { title: "通知设置" },
                    component: () => import("@/views/setting/config/base/src/NoticeSettings.vue")
                },
                {
                    path: "message-type/list",
                    name: "messageTypeManage",
                    meta: { title: "消息管理" },
                    component: () => import("@/views/setting/config/messageType/List.vue")
                }
            ]
        },
        {
            path: "",
            name: "licensedSetting",
            meta: { title: "授权设置" },
            redirect: "/setting/licensed/index",
            children: [
                {
                    path: "licensed/index",
                    name: "licensed",
                    meta: { title: "授权信息" },
                    component: () => import("@/views/setting/licensed/Index.vue")
                }
            ]
        }
    ]
};
