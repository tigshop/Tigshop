export default {
    path: "/user",
    name: "user",
    component: () => import("@/layouts/base/index.vue"),
    meta: { title: "会员" },
    children: [
        {
            path: "",
            name: "userManagement",
            meta: { title: "会员管理" },
            redirect: "/user/list",
            children: [
                {
                    path: "list",
                    name: "userManage",
                    meta: { title: "会员列表" },
                    component: () => import("@/views/user/user/List.vue")
                },
                {
                    path: "level-manage/list",
                    name: "levelManageManage",
                    meta: { title: "会员等级设置" },
                    component: () => import("@/views/user/levelManage/List.vue")
                },
                {
                    path: "feedback/list",
                    name: "feedbackManage",
                    meta: { title: "会员留言" },
                    component: () => import("@/views/user/feedback/List.vue")
                }
            ]
        },

        {
            path: "",
            name: "messagegManage",
            meta: { title: "消息管理" },
            redirect: "/user/message-log/list",
            children: [
                {
                    path: "message-log/list",
                    name: "messageLogManage",
                    meta: { title: "站内信" },
                    component: () => import("@/views/user/messageLog/List.vue")
                }
            ]
        }
    ]
};
