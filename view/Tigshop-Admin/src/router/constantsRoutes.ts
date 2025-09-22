export default [
    {
        path: "/login",
        name: "login",
        component: () => import("@/layouts/blank/index.vue"),
        meta: { title: "登录" },
        redirect: "/login/index",
        children: [
            {
                path: "index",
                name: "loginIndex",
                meta: { title: "登录" },
                component: () => import("@/views/login/Login.vue")
            }
        ]
    },
    {
        path: "/print",
        name: "print",
        component: () => import("@/layouts/blank/index.vue"),
        meta: { title: "打印" },
        children: [
            {
                path: "orderPrint",
                name: "orderPrintManage",
                meta: { title: "订单打印" },
                component: () => import("@/views/print/orderPrint/print/Index.vue")
            },
            {
                path: "waybill",
                name: "waybillManage",
                meta: { title: "面单打印" },
                component: () => import("@/views/print/orderPrint/Waybill.vue")
            }
        ]
    },
    {
        path: "/decorate",
        name: "decorateEdit",
        component: () => import("@/layouts/decorate/index.vue"),
        meta: { title: "装修" },
        children: [
            {
                path: "index",
                name: "mobileDecorateEdit",
                meta: { title: "装修" },
                component: () => import("@/views/decorate/decorate/Index.vue")
            },
            {
                path: "pc",
                name: "pcDecorateEdit",
                meta: { title: "PC首页装修" },
                component: () => import("@/views/decorate/decorate/Pc.vue")
            }
        ]
    },
    // {
    //     path: "/:pathMatch(.*)*",
    //     name: "notFound",
    //     meta: { is404: true },
    //     redirect: "/404",
    //     component: () => import("@/layouts/base/index.vue"),
    //     children: [
    //         {
    //             path: "/404",
    //             name: "notFoundIndex",
    //             meta: { title: "404" },
    //             component: () => import("@/layouts/base/404.vue")
    //         }
    //     ]
    // }
];
