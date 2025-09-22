export default {
    path: "/authority",
    name: "authority",
    component: () => import("@/layouts/base/index.vue"),
    meta: { title: "权限" },
    children: [
        {
            path: "",
            name: "administrator",
            meta: { title: "管理员" },
            redirect: "/authority/admin-user/list",
            children: [
                {
                    path: "admin-user/list",
                    name: "adminUserManage",
                    meta: { title: "管理员列表" },
                    component: () => import("@/views/authority/adminUser/List.vue")
                },
                {
                    path: "admin-account-manage/list",
                    name: "accountManage",
                    meta: { title: "账号管理" },
                    component: () => import("@/views/authority/accountManage/List.vue")
                },
                {
                    path: "admin-role/list",
                    name: "adminRoleManage",
                    meta: { title: "角色列表" },
                    component: () => import("@/views/authority/adminRole/List.vue")
                },
                {
                    path: "admin-log/list",
                    name: "adminLogManage",
                    meta: { title: "操作日志" },
                    component: () => import("@/views/authority/adminLog/List.vue")
                }
            ]
        },

        {
            path: "",
            name: "privilege",
            meta: { title: "系统权限" },
            redirect: "/authority/list",
            children: [
                {
                    path: "list",
                    name: "authorityManage",
                    meta: { title: "权限目录" },
                    component: () => import("@/views/authority/authority/List.vue")
                }
            ]
        },
        {
            path: "account-editing/index",
            name: "accountEditingManage",
            meta: { title: "个人中心" },
            component: () => import("@/views/authority/accountEditing/Index.vue")
        }
    ]
};
