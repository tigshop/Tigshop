import { defineStore } from "pinia";
import { getConfigLayoutThemeSwitch, saveConfigLayoutThemeSwitch } from "@/api/setting/config";
import type { BaseTheme } from "@/types/setting/config";
import { message } from "ant-design-vue";

type layoutType = "default" | "side" | "top" | "mix" | "topMenu" | undefined;
type navThemeType = "light" | "dark" | "realDark" | undefined;
type ColorType = "blue" | "red" | "green" | "orange" | "purple" | undefined;

export interface Theme {
    layout: layoutType;
    navTheme: navThemeType;
    primaryColor: ColorType;
}

const colorType = {
    blue: {
        primary: "#1456f0",
        buttonHoverBg: "#3d7dfc",
        buttonTextHoverBg: "#1456f01c",
        buttonActiveBg: "#1456f0",
        buttonDisabledBg: "#67a6ff",
        itemActiveBg: "#eef2ff"
    },
    red: {
        primary: "#f5222d",
        buttonHoverBg: "#ff4d4f",
        buttonTextHoverBg: "#f5222d1c",
        buttonActiveBg: "#f5222d",
        buttonDisabledBg: "#f86f76",
        itemActiveBg: "#f0a6ab36"
    },
    green: {
        primary: "#52c41a",
        buttonHoverBg: "#73d13d",
        buttonTextHoverBg: "#52c41a1c",
        buttonActiveBg: "#52c41a",
        buttonDisabledBg: "#8ed96a",
        itemActiveBg: "#b8ee9e40"
    },
    orange: {
        primary: "#faad14",
        buttonHoverBg: "#ffc53d",
        buttonTextHoverBg: "#faad141c",
        buttonActiveBg: "#faad14",
        buttonDisabledBg: "#fcca66",
        itemActiveBg: "#fde5b64f"
    },
    purple: {
        primary: "#722ed1",
        buttonHoverBg: "#9254de",
        buttonTextHoverBg: "#722ed11c",
        buttonActiveBg: "#722ed1",
        buttonDisabledBg: "#a377e1",
        itemActiveBg: "#dfcdf740"
    }
};
const navThemeType = {
    light: {
        color: "#000000e0",
        containerBg: "#fff",
        navBg: "#fff",
        menuBg: "#fff",
        menuText: "#000000e0",
        muneActiveBg: ""
    },
    dark: {
        color: "#000000e0",
        containerBg: "#f2f4f7",
        navBg: "#fff",
        menuBg: "#001529",
        menuText: "#ffffff",
        muneActiveBg: ""
    },
    realDark: {
        color: "#e5e0d8e0",
        containerBg: "#292a2a",
        navBg: "#292a2a",
        menuBg: "#0f1c29",
        menuText: "#e5e0d8a6"
    }
};

export const useThemeStore = defineStore("theme", {
    state: () => {
        return {
            themeInfo: <Theme>{
                layout: undefined,
                navTheme: undefined,
                primaryColor: undefined
            }
        };
    },
    actions: {
        getThemeInfo() {
            const configString = localStorage.getItem("config");
            const config = configString ? JSON.parse(configString).config : {};
            this.themeInfo = {
                layout: "default",
                navTheme: "light",
                primaryColor: "blue"
            };
            this.changeThemeColor(this.themeInfo.primaryColor);
        },
        setThemeInfo() {
            saveConfigLayoutThemeSwitch(this.themeInfo);
        },
        changeThemeColor(type: ColorType = "blue") {
            document.documentElement.style.setProperty("--tig-primary", colorType[type].primary);
            document.documentElement.style.setProperty("--tig-button-hover-bg", colorType[type].buttonHoverBg);
            document.documentElement.style.setProperty("--tig-button-text-hover-bg", colorType[type].buttonTextHoverBg);
            document.documentElement.style.setProperty("--tig-button-active-bg", colorType[type].buttonActiveBg);
            document.documentElement.style.setProperty("--tig-button-disabled-bg", colorType[type].buttonDisabledBg);
            document.documentElement.style.setProperty("--tig-item-active-bg", colorType[type].itemActiveBg);
            this.changeThemeNav(this.themeInfo.navTheme);
        },
        changeThemeNav(type: navThemeType = "light") {
            this.themeInfo.navTheme = type;
            document.documentElement.style.setProperty("--tig-nav-theme-color", navThemeType[type].color);
            document.documentElement.style.setProperty("--tig-nav-theme-bg", navThemeType[type].containerBg);
            document.documentElement.style.setProperty("--tig-nav-bg", navThemeType[type].navBg);
            document.documentElement.style.setProperty("--tig-menu-bg", navThemeType[type].menuBg);
            document.documentElement.style.setProperty("--tig-menu-text-color", navThemeType[type].menuText);
            if (type === "dark") {
                document.documentElement.style.setProperty("--tig-menu-active-bg", colorType[this.themeInfo.primaryColor].primary);
            } else {
                document.documentElement.style.setProperty("--tig-menu-active-bg", colorType[this.themeInfo.primaryColor].itemActiveBg);
            }
        }
    },
    persist: {
        enabled: true,
        strategies: [
            { storage: localStorage, paths: ["themeInfo", "loaded"] } // 用 localstorage存储（长效）
        ]
    }
});
