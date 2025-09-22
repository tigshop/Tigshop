import { defineStore } from "pinia";
import { getAdminBase } from "@/api/setting/config";
import type { AdminConfigState } from "@/types/setting/config";

interface State {
    config: AdminConfigState;
    loaded: boolean;
    isStoreAdmin: boolean;
    domain: string;
}

export const useConfigStore = defineStore("config", {
    state: (): State => ({
        config: {
            pageSize: 15,
            icoDefinedCss: "//at.alicdn.com/t/c/font_400590_7he137t8862",
            dollarSign: "¥",
            amountUnit: "元",
            storageType: 0,
            storageUrl: "",
            pcDomain: "",
            h5Domain: "",
            imDomain: "",
            versionType: "",
            uploadMaxSize: 100,
            shopCompany: 1,
            shopCompanyTxt: "",
            defaultTechSupport: "",
            defaultCopyright: "Copyright © 2024 Tigshop. All Rights Reserved",
            poweredBy: 0,
            poweredByLogo: "",
            poweredByStatus: 0,
            adminLightLogo: null, //  后台LOGO
            versionInfoHidden: 0, //  是否隐藏版本号
            layout: "default", //  导航模式
            navTheme: "light", //   外观
            primaryColor: "blue", //  主题色
            withdrawSettingVO: {}
        },
        loaded: false,
        isStoreAdmin: false,
        domain: ""
    }),
    getters: {
        icoDefinedCss: (state: State): string => {
            return "https:" + state.config.icoDefinedCss + ".css";
        },
        pageSize: (state: State): number => {
            return Number(state.config.get("pageSize"));
        }
    },
    actions: {
        async updateConfig() {
            try {
                const result = await getAdminBase();
                this.config = Object.assign({}, this.config, result);
                localStorage.setItem("config", JSON.stringify(result));
            } catch (error) {
            } finally {
            }
        },
        setConfig(data: Partial<AdminConfigState>) {
            this.config = Object.assign({}, this.config, data);
        },
        getConfig(key: keyof AdminConfigState): AdminConfigState[keyof AdminConfigState] {
            return this.config[key];
        },
        // getConfig的简写方法
        get(key: keyof AdminConfigState): AdminConfigState[keyof AdminConfigState] {
            return this.config[key] as AdminConfigState[keyof AdminConfigState];
        }
    },
    persist: {
        enabled: true,
        strategies: [
            // { storage: sessionStorage, paths: [] }, //用sessionStorage存储
            { storage: localStorage, paths: ["config"] } // 用 localstorage存储（长效）
        ]
    }
});
