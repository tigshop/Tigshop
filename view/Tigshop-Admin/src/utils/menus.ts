import { getAllAuthority, getAllAuthorityData } from "@/api/authority/authority";
import type { MainMenu } from "@/types/common/common.d";
import { adminRouters } from "@/router/asyncRoutes";
import { useMenusStore } from "@/store/menu";

export const updateMenu = async () => {
    try {
        const result = await getAllAuthority();
        return result as MainMenu[];
    } catch (error) {}
};

export const getMenu = async () => {
    try {
        const result = await getAllAuthorityData();
        if (!result || !result.length) {
            return [];
        }
        const menus = useMenusStore();
        let arr: any = result;
        let routers: any = [];
        menus.setLicensed(arr.find((item: any) => item.authoritySn === "licensed" && item.isShow === 1) ? true : false);

        const adminType = localStorage.getItem("adminType");

        if (adminType === "admin") {
            routers = adminRouters;
            arr = [...arr, { authoritySn: "accountEditingManage", authorityName: "个人中心" }];
        }

        return filterRoutesByAuthority(routers, arr) || [];
    } catch (error) {}
};

/**
 * 路由项类型定义
 */
interface RouteItem {
    path: string;
    name: string;
    component?: any;
    redirect?: string;
    meta?: {
        title?: string;
        is404?: boolean;
        isShowInHeader?: boolean;
        queryParam?: string;
        [key: string]: any;
    };
    children?: RouteItem[];
    [key: string]: any;
}

/**
 * 权限项类型定义
 */
interface AuthorityItem {
    authoritySn: string;
    authorityName: string;
    authorityIco: string;
    isShow: boolean;
}

/**
 * 根据 authority 数组匹配路由，并自动修正 redirect 路径
 * @param routes 原始路由配置
 * @param authorities 权限项数组
 * @returns 匹配后的路由列表
 */
function filterRoutesByAuthority(routes: RouteItem[], authorities: AuthorityItem[]): RouteItem[] {
    const routers: RouteItem[] = [];

    // 创建权限映射，方便查找
    const authMap: Record<string, AuthorityItem> = {};
    authorities.forEach((auth) => {
        authMap[auth.authoritySn] = auth;
    });

    // 修正 redirect 路径的辅助函数
    function fixRedirectPath(route: RouteItem, filteredChildren: RouteItem[], parentPath: string = ""): string | undefined {
        if (!filteredChildren.length) {
            return route.redirect;
        }

        // 如果原来没有设置 redirect，自动设置为第一个子路由
        if (!route.redirect) {
            const firstChild = filteredChildren[0];
            if (firstChild) {
                const basePath = parentPath || route.path || "";
                const childPath = firstChild.path;

                if (childPath === "") {
                    return basePath;
                } else if (childPath.startsWith("/")) {
                    return childPath;
                } else {
                    return basePath.endsWith("/") ? `${basePath}${childPath}` : `${basePath}/${childPath}`;
                }
            }
            return undefined;
        }

        // 检查原 redirect 路径是否在过滤后的子路由中存在
        const originalRedirect = route.redirect;

        const redirectExists = filteredChildren.some((child) => {
            const basePath = parentPath || route.path || "";
            let fullPath: string;

            if (child.path === "") {
                fullPath = basePath;
            } else if (child.path.startsWith("/")) {
                fullPath = child.path;
            } else {
                fullPath = basePath.endsWith("/") ? `${basePath}${child.path}` : `${basePath}/${child.path}`;
            }

            return fullPath === originalRedirect;
        });

        if (redirectExists) {
            return originalRedirect;
        }

        // 如果原路径不存在，重定向到第一个可用的子路由
        const firstChild = filteredChildren[0];
        if (firstChild) {
            const basePath = parentPath || route.path || "";
            const childPath = firstChild.path;

            if (childPath === "") {
                return basePath;
            } else if (childPath.startsWith("/")) {
                return childPath;
            } else {
                return basePath.endsWith("/") ? `${basePath}${childPath}` : `${basePath}/${childPath}`;
            }
        }

        return route.redirect;
    }

    // 递归查找匹配的路由
    function findMatchedRoutes(routeList: RouteItem[], parentPath: string = "", resultContainer?: RouteItem[]): void {
        routeList.forEach((route) => {
            const currentFullPath = parentPath ? `${parentPath}/${route.path}`.replace(/\/+/g, "/") : route.path;

            // 检查当前路由是否在权限列表中
            if (authMap[route.name]) {
                const filteredRoute: RouteItem = { ...route };
                filteredRoute.meta = { ...(filteredRoute.meta || {}), ...authMap[route.name], current: true };

                if (route.children && route.children.length) {
                    filteredRoute.children = [];
                    findMatchedRoutes(route.children, currentFullPath, filteredRoute.children);

                    // 修正 redirect 路径，传入完整的父路径
                    filteredRoute.redirect = fixRedirectPath(route, filteredRoute.children, currentFullPath);
                }

                if (resultContainer) {
                    resultContainer.push(filteredRoute);
                } else {
                    routers.push(filteredRoute);
                }
            }
            // 即使当前路由不匹配，仍需检查其子路由
            else if (route.children && route.children.length) {
                const matchedChildren: RouteItem[] = [];
                findMatchedRoutes(route.children, currentFullPath, matchedChildren);

                // 如果有匹配的子路由，则保留父路由
                if (matchedChildren.length > 0) {
                    const filteredRoute: RouteItem = { ...route, children: matchedChildren };

                    // 修正 redirect 路径
                    filteredRoute.redirect = fixRedirectPath(route, matchedChildren, currentFullPath);

                    if (resultContainer) {
                        resultContainer.push(filteredRoute);
                    } else {
                        routers.push(filteredRoute);
                    }
                }
            }
        });
    }

    findMatchedRoutes(routes);

    return routers;
}
