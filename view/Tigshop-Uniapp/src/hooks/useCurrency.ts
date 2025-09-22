import { useConfigStore } from "@/store/config";
import { ref } from "vue";

export const useCurrency = () => {
    const configStore = useConfigStore();
    const currency = ref("");
    const currencyName = ref("");

    const getCurrency = () => {
        currency.value = configStore.dollarSign;
    };

    const getCurrencyName = () => {
        currencyName.value = configStore.dollarSignCn;
    };

    getCurrency();
    getCurrencyName();

    return {
        currency,
        currencyName
    };
};
