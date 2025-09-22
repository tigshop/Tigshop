export default {
    path: "/promotion",
    name: "promotion",
    component: () => import("@/layouts/base/index.vue"),
    meta: { title: "营销" },
    children: [
        {
            path: "/promotion",
            name: "promotionManage",
            meta: { title: "营销概览" },
            component: () => import("@/views/promotion/manage/List.vue")
        },
        {
            path: "",
            name: "promotionOverview",
            meta: { title: "营销管理" },
            redirect: "/promotion/coupon/list",
            children: [
                {
                    path: "coupon/list",
                    name: "couponManage",
                    meta: { title: "优惠券" },
                    component: () => import("@/views/promotion/coupon/List.vue")
                },
                {
                    path: "seckill/list",
                    name: "seckillManage",
                    meta: { title: "限时秒杀" },
                    component: () => import("@/views/promotion/seckill/List.vue")
                },
                {
                    path: "recharge-setting/list",
                    name: "rechargeSettingManage",
                    meta: { title: "余额充值" },
                    component: () => import("@/views/promotion/rechargeSetting/List.vue")
                }
            ]
        }
    ]
};
