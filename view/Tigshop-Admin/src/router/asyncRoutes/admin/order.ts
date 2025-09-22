export default {
    path: "/order",
    name: "order",
    component: () => import("@/layouts/base/index.vue"),
    meta: { title: "订单" },
    children: [
        {
            path: "",
            name: "orderManagement",
            meta: { title: "订单管理" },
            redirect: "/order/list",
            children: [
                {
                    path: "list",
                    name: "orderManage",
                    meta: { title: "全部订单" },
                    component: () => import("@/views/order/order/List.vue")
                },
                {
                    path: "deliverlist",
                    name: "deliverManage",
                    meta: { title: "发货管理" },
                    component: () => import("@/views/order/order/Deliverlist.vue")
                },
                {
                    path: "order-export/list",
                    name: "orderExportManage",
                    meta: { title: "订单导出" },
                    component: () => import("@/views/order/orderExport/List.vue")
                }
            ]
        },
        {
            path: "",
            name: "aftersaleManagement",
            meta: { title: "售后管理" },
            redirect: "/order/aftersales/list",
            children: [
                {
                    path: "aftersales/list",
                    name: "aftersalesManage",
                    meta: { title: "售后申请" },
                    component: () => import("@/views/order/aftersales/List.vue")
                }
            ]
        }
    ]
};
