<script setup lang="ts">
import { onLaunch, onExit, onPageNotFound, onLoad } from "@dcloudio/uni-app";
import { useConfigStore } from "@/store/config";
import checkAppUpdate from "@/utils/checkAppUpdate";
import { isDemo } from "@/utils";
import init from "@/utils/init";

// #ifdef H5
const isInIframe = () => {
    try {
        return window.self !== window.top;
    } catch {
        return true;
    }
};

const handlerToPcMobile = () => {
    if (isInIframe()) {
        console.log("检测到在iframe中，停止PC端检测");
        return;
    }

    const userAgent = navigator.userAgent;
    const isPC = !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(userAgent);

    if (isPC) {
        let url = `${useConfigStore().baseInfo.pcDomain ? useConfigStore().baseInfo.pcDomain : window.location.origin}/pcMobile`;
        window.location.href = url;
    }
};
// #endif

onLaunch(async () => {
    // 隐藏原生导航栏 使用自定义底部导航
    uni.hideTabBar({
        fail: () => {}
    });
    useConfigStore().getNavHeight();
    useConfigStore().getWindowInfo();
    useConfigStore().setXClientType();

    // #ifdef MP-WEIXIN
    useConfigStore().getMenuButtonInfo();
    // #endif
    try {
        await init();
    } catch (error) {
        console.error("初始化失败:", error);
    }

    // #ifdef H5
    if (isDemo()) handlerToPcMobile();
    // #endif
});

onLoad(() => {
    // #ifdef APP-PLUS || APP-HARMONY
    checkAppUpdate();
    // #endif
});

onExit(() => {});

onPageNotFound(() => {
    uni.redirectTo({
        url: "/pages/404"
    });
});
</script>
<style lang="scss">
@import "uview-plus/index.scss";
@import "./static/css/style.css";
.uni-swiper-dot-box {
    .uni-swiper__dots-box {
        margin-left: 15rpx;
        padding: 13rpx 10rpx;
        width: 100rpx;
        background-color: rgba($color: #000000, $alpha: 0.3);
        border-radius: 50rpx;
    }
}
page {
    font-size: 28rpx;
    background-color: #f5f5f5;
    color: #333;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    -webkit-tap-highlight-color: transparent;
}
.tig-button {
    margin-right: 10rpx;

    &:last-child {
        margin-right: 0;
    }
}
view {
    box-sizing: border-box;
}
.acea-row {
    display: flex;
    flex-wrap: wrap;
}
.acea-row.row-top {
    align-items: flex-start;
}
.acea-row.row-middle {
    align-items: center;
}
.acea-row.row-bottom {
    align-items: flex-end;
}
.acea-row.row-left {
    justify-content: flex-start;
}
.acea-row.row-center {
    justify-content: center;
}
.acea-row.row-right {
    justify-content: flex-end;
}
.acea-row.row-between {
    justify-content: space-between;
}
.acea-row.row-around {
    justify-content: space-around;
}
.acea-row.row-column {
    flex-direction: column;
}
.acea-row.row-column-between {
    flex-direction: column;
    justify-content: space-between;
}
.acea-row.row-column-around {
    flex-direction: column;
    justify-content: space-around;
}
.acea-row.row-center-wrapper {
    align-items: center;
    justify-content: center;
}
.acea-row.row-between-wrapper {
    align-items: center;
    justify-content: space-between;
}
.font-color {
    color: #fc4141 !important;
}
.bg-color {
    background-color: #e93323 !important;
}
.icon-color {
    color: #ff3c2b;
}
.cart-color {
    color: #ff3700 !important;
    border: 0.0833rem solid #ff3700 !important;
}
.navigator-hover {
    background: none;
    opacity: 1;
}

.line1 {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.line2 {
    word-break: break-all;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.mask {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #000;
    opacity: 0.5;
    z-index: 5;
}
button {
    padding: 0;
    margin: 0;
    line-height: normal;
    background-color: #fff;
}
button::after {
    border: 0;
}
@keyframes load {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
.loadingpic {
    animation: load 3s linear 1s infinite;
}
.loading-list {
    animation: load linear 1s infinite;
    font-size: 40rpx;
    margin-right: 22rpx;
}
.loading {
    width: 100%;
    height: 100rpx;
    line-height: 100rpx;
    align-items: center;
    justify-content: center;
    position: relative;
    text-align: center;
}
.loading .line {
    position: absolute;
    width: 450rpx;
    left: 150rpx;
    top: 50rpx;
    height: 0.0833rem;
    border-top: 0.0833rem solid #eee;
}
.loading .text {
    position: relative;
    display: inline-block;
    padding: 0 20rpx;
    background: #fff;
    z-index: 2;
    color: #777;
}

.loadingicon .loading {
    animation: load linear 1s infinite;
    font-size: 45rpx;
    color: #000;
}
.loadingicon {
    width: 100%;
    height: 80rpx;
}
/* 将toast的z-index设置为最高 */
uni-toast {
    z-index: 9999 !important;
}
/* //通用flex */
.flex {
    display: flex;
}

.flex-column {
    flex-direction: column;
}

.justify-start {
    justify-content: flex-start;
}

.justify-end {
    justify-content: flex-end;
}
.justify-center {
    justify-content: center;
}

.justify-between {
    justify-content: space-between;
}

.justify-around {
    justify-content: space-around;
}

.align-start {
    align-items: flex-start;
}

.align-end {
    align-items: flex-end;
}

.align-center {
    align-items: center;
}

.align-baseline {
    align-items: baseline;
}

.flex-wrap {
    display: flex;
    flex-wrap: wrap;
}

@keyframes fade-in {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

.show {
    animation: fade-in 0.4s ease-in-out both;
}

.sku-card {
    display: inline-block;
    background-color: #f7f8fa;
    font-size: 23rpx;
    padding: 10rpx 15rpx;
    border-radius: 5rpx;
    color: #969799;
    margin: 10rpx 0;

    &.nodata {
        background-color: #fff;
    }

    .sku-item {
        display: inline-block;
        max-width: 130rpx;
    }

    .sku-item::before {
        content: ",";
        padding-left: 5rpx;
    }

    .sku-item:first-child::before {
        content: "";
    }
}
.sticky {
    position: sticky;
    z-index: 50;
    top: 0;
}
.gift-text {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 23rpx;
    padding: 3rpx 8rpx;
    background-color: var(--main-bg);
    color: var(--main-text);
    border-radius: 0 var(--tag-round-border-radius, 83.25rem) var(--tag-round-border-radius, 83.25rem) 0;
}
.popup-title {
    font-size: 32rpx;
    font-weight: bold;
    text-align: left;
    height: 123rpx;
    line-height: 123rpx;
    padding-left: 30rpx;
    background: #fff;
}
</style>
