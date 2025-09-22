export default {
    path: "/finance",
    name: "finance",
    component: () => import("@/layouts/base/index.vue"),
    meta: { title: "财务" },
    children: [
        {
            path: "",
            name: "userfundsManagement",
            meta: { title: "会员资金管理" },
            redirect: "/finance/account-panel/list",
            children: [
                {
                    path: "account-panel/list",
                    name: "accountPanelManage",
                    meta: { title: "资金总览" },
                    component: () => import("@/views/finance/accountPanel/List.vue")
                },
                {
                    path: "user-withdraw-apply/list",
                    name: "userWithdrawApplyManage",
                    meta: { title: "提现管理" },
                    component: () => import("@/views/finance/userWithdrawApply/List.vue")
                },
                {
                    path: "user-recharge-order/list",
                    name: "userRechargeOrderManage",
                    meta: { title: "充值管理" },
                    component: () => import("@/views/finance/userRechargeOrder/List.vue")
                },
                {
                    path: "integral-log/list",
                    name: "integralLogManage",
                    meta: { title: "积分日志" },
                    component: () => import("@/views/user/integralLog/List.vue")
                }
            ]
        },
        {
            path: "",
            name: "userInvoice",
            meta: { title: "发票管理" },
            redirect: "/finance/user-invoice/list",
            children: [
                {
                    path: "user-invoice/list",
                    name: "userInvoiceManage",
                    meta: { title: "资质审核" },
                    component: () => import("@/views/finance/userInvoice/List.vue")
                },
                {
                    path: "order-invoice/list",
                    name: "orderInvoiceManage",
                    meta: { title: "发票申请" },
                    component: () => import("@/views/finance/orderInvoice/List.vue")
                }
            ]
        },
        {
            path: "",
            name: "refundManagement",
            meta: { title: "退款管理" },
            redirect: "/finance/refund-apply/list",
            children: [
                {
                    path: "refund-apply/list",
                    name: "refundApplyManage",
                    meta: { title: "退款申请" },
                    component: () => import("@/views/finance/refundApply/List.vue")
                },
                {
                    path: "refund-log/list",
                    name: "refundLogManage",
                    meta: { title: "退款日志" },
                    component: () => import("@/views/finance/refundLog/List.vue")
                }
            ]
        },
        {
            path: "",
            name: "transactionManagement",
            meta: { title: "交易管理" },
            redirect: "/finance/paylog/list",
            children: [
                {
                    path: "paylog/list",
                    name: "payLogManage",
                    meta: { title: "交易日志" },
                    component: () => import("@/views/finance/payLog/List.vue")
                },
                {
                    path: "user-balance-log/list",
                    name: "userBalanceLogManage",
                    meta: { title: "余额日志" },
                    component: () => import("@/views/finance/userBalanceLog/List.vue")
                }
            ]
        }
    ]
};
