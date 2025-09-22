import { useConfigStore } from "@/store/config";
import { useTabbarStore } from "@/store/tabbar";
import { useThemeStore } from "@/store/theme";
import { useUserStore } from "@/store/user";
import { setIsInit } from "@/utils/request";

export default async function init() {
    const arr = [
        useConfigStore().getBaseConfigData(),
        useTabbarStore().getTabbarList(),
        useThemeStore().getThemeSettings(),
        useUserStore().getServiceConfigData()
    ];

    try {
        await Promise.all(arr);
    } catch (error) {
        console.error("Initialization failed:", error);
    } finally {
        setIsInit(false);
    }
}
