export default {
    path: "/decorate-info",
    name: "decorate",
    meta: { title: "装修" },
    component: () => import("@/layouts/base/index.vue"),
    children: [
        {
            path: "/decorate-info",
            name: "themeStyleManage",
            meta: { title: "主题风格" },
            component: () => import("@/views/decorate/themeStyle/Info.vue")
        },
        {
            path: "",
            name: "mobileDecorate",
            meta: { title: "移动端装修" },
            redirect: "/decorate-info/mobile-decorate/list",
            children: [
                {
                    path: "mobile-decorate/list",
                    name: "mobileDecorateManage",
                    meta: { title: "页面管理" },
                    component: () => import("@/views/decorate/mobileDecorate/List.vue")
                },
                {
                    path: "mobile-decorate/nav",
                    name: "mobileNavManage",
                    meta: { title: "主导航栏" },
                    component: () => import("@/views/decorate/mobileDecorate/Nav.vue")
                },
                {
                    path: "mobile-decorate/classify",
                    name: "classifyManage",
                    meta: { title: "分类页" },
                    component: () => import("@/views/decorate/mobileDecorate/Classify.vue")
                },
                {
                    path: "mobile-decorate/user",
                    name: "mobileUserManage",
                    meta: { title: "会员首页" },
                    component: () => import("@/views/decorate/mobileDecorate/user/User.vue")
                },
                {
                    path: "mobile-decorate/user-overseas",
                    name: "mobileuserUserOverseasManage",
                    meta: { title: "会员首页" },
                    component: () => import("@/views/decorate/mobileDecorate/userOverseas/User.vue")
                },
                {
                    path: "mobile-cat-nav/list",
                    name: "mobileCatNavManage",
                    meta: { title: "分类导航" },
                    component: () => import("@/views/decorate/mobileCatNav/List.vue")
                }
            ]
        },
        {
            path: "",
            name: "pcDecorate",
            meta: { title: "PC端装修" },
            redirect: "/decorate-info/pc-decorate/list",
            children: [
                {
                    path: "pc-decorate/list",
                    name: "pcDecorateManage",
                    meta: { title: "首页装修" },
                    component: () => import("@/views/decorate/pcDecorate/List.vue")
                },
                {
                    path: "pc-decorate/other",
                    name: "pcDecorateOtherManage",
                    meta: { title: "其它页面" },
                    component: () => import("@/views/decorate/pcDecorate/Other.vue")
                },
                {
                    path: "pc-navigation/list",
                    name: "pcNavigationManage",
                    meta: { title: "导航栏" },
                    component: () => import("@/views/decorate/pcNavigation/List.vue")
                },
                {
                    path: "pc-cat-floor/list",
                    name: "pcCatFloorManage",
                    meta: { title: "分类抽屉" },
                    component: () => import("@/views/decorate/pcCatFloor/List.vue")
                }
            ]
        }
    ]
};
