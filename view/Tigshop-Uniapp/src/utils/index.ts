import pagesJson from "@/pages.json";

export const isDemo = () => {
    return false;
};

/**
 * 判断是否是json字符串
 * @param str
 * @returns boolean
 */
export const isJsonString = (str: string): boolean => {
    if (typeof str !== "string") return false;
    try {
        const result = JSON.parse(str);
        const type = Object.prototype.toString.call(result);
        return type === "[object Object]" || type === "[object Array]";
    } catch (e) {
        return false;
    }
};

/**
 * 判断是否是url
 * @param str
 * @returns
 */
export function isUrl(str: string): boolean {
    return str.indexOf("http://") != -1 || str.indexOf("https://") != -1;
}

/**
 * 获取tabbar
 */
export function getTabbarPages() {
    return pagesJson.tabBar.list.map((item) => {
        return `/${item.pagePath}`;
    });
}

/**
 * 判断是否是数字
 * @param value
 * @returns
 */
export function isNumber(value: any): boolean {
    return typeof value === "number" && !isNaN(value);
}

/**
 * @description 用于获取用户传递值的px值  如果用户传递了"xxpx"或者"xxrpx"，取出其数值部分，如果是"xxxrpx"还需要用过uni.rpx2px进行转换
 * @param {number|string} value 用户传递值的px值
 * @param {boolean} unit 是否返回带单位的字符串
 * @returns {number|string}
 */
export function getPx(value: number | string, unit: boolean = false): number | string {
    if (isNumber(value)) {
        return unit ? `${value}px` : Number(value);
    }
    // 如果带有rpx，先取出其数值部分，再转为px值
    if (typeof value === "string" && /(rpx|upx)$/.test(value)) {
        return unit ? `${uni.upx2px(parseInt(value))}px` : Number(uni.upx2px(parseInt(value)));
    }
    return unit ? `${parseInt(String(value))}px` : parseInt(String(value));
}

/**
 * @param {Number} len uuid的长度
 * @param {Boolean} firstU 将返回的首字母置为"u"
 * @param {Nubmer} radix 生成uuid的基数(意味着返回的字符串都是这个基数),2-二进制,8-八进制,10-十进制,16-十六进制
 */
export function guid(len: number = 32, firstU: boolean = true, radix?: number): string {
    const chars: string[] = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz".split("");
    const uuid: string[] = [];
    const usedRadix = radix || chars.length;

    if (len) {
        // 如果指定uuid长度,只是取随机的字符,0|x为位运算,能去掉x的小数位,返回整数位
        for (let i = 0; i < len; i++) uuid[i] = chars[0 | (Math.random() * usedRadix)];
    } else {
        let r: number;
        // rfc4122标准要求返回的uuid中,某些位为固定的字符
        uuid[8] = uuid[13] = uuid[18] = uuid[23] = "-";
        uuid[14] = "4";

        for (let i = 0; i < 36; i++) {
            if (!uuid[i]) {
                r = 0 | (Math.random() * 16);
                uuid[i] = chars[i == 19 ? (r & 0x3) | 0x8 : r];
            }
        }
    }
    // 移除第一个字符,并用u替代,因为第一个字符为数值时,该guuid不能用作id或者class
    if (firstU) {
        uuid.shift();
        return `u${uuid.join("")}`;
    }
    return uuid.join("");
}

export function addUnit(value: number | string, unit = "px") {
    return isNumber(value) ? `${value}${unit}` : value;
}

/**
 * 跳转页面
 */
interface redirectOptions {
    url: string;
    mode?: "switchTab" | "navigateTo" | "reLaunch" | "redirectTo";
    param?: AnyObject;
    success?: Function;
    fail?: Function;
    complete?: Function;
}
export const redirect = (redirect: redirectOptions) => {
    let { url, mode = "navigateTo", param, success, fail, complete } = redirect;
    if (isUrl(url)) {
        // #ifdef H5
        window.open(url, "_blank");
        return;
        // #endif
        uni.navigateTo({
            url: `/pages/webviewPage/index?url=${url}`
        });
    }
    mode = mode;
    const tabBar = getTabbarPages();
    tabBar.includes(url) && (mode = "switchTab");
    mode != "switchTab" && param && Object.keys(param).length && (url += uni.$u.queryParams(param));
    switch (mode) {
        case "switchTab":
            uni.switchTab({
                url,
                success: () => {
                    success && success();
                },
                fail: () => {
                    fail && fail();
                },
                complete: () => {
                    complete && complete();
                }
            });
            break;
        case "navigateTo":
            uni.navigateTo({
                url,
                success: () => {
                    success && success();
                },
                fail: () => {
                    fail && fail();
                },
                complete: () => {
                    complete && complete();
                }
            });
            break;
        case "reLaunch":
            uni.reLaunch({
                url,
                success: () => {
                    success && success();
                },
                fail: () => {
                    fail && fail();
                },
                complete: () => {
                    complete && complete();
                }
            });
            break;
        case "redirectTo":
            uni.redirectTo({
                url,
                success: () => {
                    success && success();
                },
                fail: () => {
                    fail && fail();
                },
                complete: () => {
                    complete && complete();
                }
            });
            break;
    }
};

/**
 * 复制
 * @param {Object} message
 * @param {Object} callback
 */
export function copy(value: any, callback: any) {
    // #ifdef H5
    const oInput = document.createElement("input"); //创建一个隐藏input（重要！）
    oInput.value = value; //赋值
    oInput.setAttribute("readonly", "readonly");
    document.body.appendChild(oInput);
    oInput.select(); // 选择对象
    document.execCommand("Copy"); // 执行浏览器复制命令
    oInput.className = "oInput";
    oInput.style.display = "none";
    uni.hideKeyboard();

    typeof callback == "function" && callback();
    // #endif

    // #ifdef MP || APP-PLUS
    uni.setClipboardData({
        data: value,
        success: () => {
            typeof callback == "function" && callback();
        },
        fail: (res) => {
            // 在隐私协议中没有声明chooseLocation:fail api作用域
            if (res.errMsg && res.errno) {
                if (res.errno == 104) {
                    uni.showToast({ title: res.errMsg, icon: "none" });
                } else if (res.errno == 112) {
                    uni.showToast({ title: res.errMsg, icon: "none" });
                } else {
                    uni.showToast({ title: res.errMsg, icon: "none" });
                }
            }
        }
    });
    // #endif
}

/**
 * 手机号隐藏
 */
export function mobileConceal(mobile: string): string {
    return mobile.substring(0, 3) + "****" + mobile.substr(mobile.length - 4);
}

/**
 * 判断是否是微信浏览器
 */
export function isWeixinBrowser(): boolean {
    // #ifndef H5
    return false;
    // #endif
    const ua = navigator.userAgent.toLowerCase();
    return /micromessenger/.test(ua) ? true : false;
}

/**
 * 获取当前路由
 */
export const currRoute = () => {
    const pages = getCurrentPages();
    const route = pages[pages.length - 1];
    return route ? route.route : "";
};
/**
 * 获取当前所有路径
 */
export const currFullPath = () => {
    const pages = getCurrentPages();
    const route = pages[pages.length - 1];
    return route ? route.$page.fullPath : "";
};

/**
 *
 * @param data
 * @returns  {AnyObject}
 */
export const formatArguments = (data: AnyObject) => {
    const result: AnyObject = {};
    if (typeof data === "object") {
        const dataKeys = Object.keys(data);
        for (const key of dataKeys) {
            const value = data[key];
            // 检查值是否为 null 或 undefined
            if (value === null || value === undefined || value === "") {
                continue;
            }
            if (typeof value === "object") {
                // 如果值是数组，检查其长度是否为 0
                if (Array.isArray(value) && value.length === 0) {
                    continue;
                } else if (Object.keys(value).length === 0) {
                    continue;
                }
            }
            result[key] = value;
        }
    }
    return result;
};

/* 获取元素布局信息 */
interface Rect {
    top: number;
    left: number;
    width: number;
    height: number;
    bottom: number;
    right: number;
    dataset: object;
    id: string;
}
export function getElementRect(selector: string, instance?: any): Promise<Rect | null> {
    return new Promise((resolve) => {
        // 创建选择器查询对象
        const query = instance ? uni.createSelectorQuery().in(instance) : uni.createSelectorQuery();
        // 选择需要查询的元素
        const elementQuery = query.select(selector);
        // 使用boundingClientRect获取元素布局信息
        elementQuery
            .boundingClientRect((data: any) => {
                if (data) {
                    resolve(data);
                } else {
                    resolve(null);
                }
            })
            .exec();
    });
}

export function getImageInfo(src: string): Promise<UniApp.GetImageInfoSuccessData> {
    return new Promise((resolve, reject) => {
        uni.getImageInfo({
            src,
            success: (res) => {
                resolve(res);
            },
            fail: (err) => {
                reject(err);
            }
        });
    });
}

export function getDownloadFileInfo(url: string): Promise<UniApp.DownloadSuccessData> {
    return new Promise((resolve, reject) => {
        uni.downloadFile({
            url,
            success: (res: UniApp.DownloadSuccessData) => {
                resolve(res);
            },
            fail: (err) => {
                reject(err);
            }
        });
    });
}

/**
 * 静态资源输出
 * @param path
 * @returns
 */
export function staticResource(path: string, type = "images"): string {
    if (isUrl(path)) {
        return path;
    } else if (isUrl(import.meta.env.VITE_STATIC_RESOURCE)) {
        return `${import.meta.env.VITE_STATIC_RESOURCE}/${type}/${path}`;
    } else {
        return `${import.meta.env.VITE_API_URL || location.origin}/${import.meta.env.VITE_STATIC_RESOURCE}/${type}/${path}`;
    }
}

export const maskNumber = (num: number | string) => {
    const data = num.toString();
    if (data.length < 4) {
        return data;
    } else {
        return data.slice(0, 2) + "********" + data.slice(-2);
    }
};

export const saveImageToAlbum = (filePath: string) => {
    // #ifdef MP
    return saveImageToMp(filePath);
    // #endif
    // #ifdef APP-PLUS
    return saveImageToApp(filePath);
    // #endif
};
export const saveImageToMp = (filePath: string) => {
    return new Promise((resolve, reject) => {
        uni.getSetting({
            success(res) {
                if (!res.authSetting["scope.writePhotosAlbum"]) {
                    // 请求授权写入相册
                    uni.authorize({
                        scope: "scope.writePhotosAlbum",
                        success() {
                            // 用户已同意授权
                            uni.saveImageToPhotosAlbum({
                                filePath,
                                success: (res) => {
                                    resolve(res);
                                },
                                fail: (err) => {
                                    reject(err);
                                }
                            });
                        },
                        fail() {
                            // 用户不同意授权
                            uni.showModal({
                                title: "需要权限",
                                content: "需要您授权保存图片到相册",
                                showCancel: false,
                                confirmText: "去设置",
                                success(modalRes) {
                                    if (modalRes.confirm) {
                                        // 引导用户去开启授权
                                        uni.openSetting({
                                            success(settingRes) {
                                                if (settingRes.authSetting["scope.writePhotosAlbum"]) {
                                                    // 用户开启了授权，现在可以保存图片
                                                    uni.saveImageToPhotosAlbum({
                                                        filePath,
                                                        success: (res) => {
                                                            resolve(res);
                                                        },
                                                        fail: (err) => {
                                                            reject(err);
                                                        }
                                                    });
                                                }
                                            }
                                        });
                                    }
                                }
                            });
                        }
                    });
                } else {
                    uni.saveImageToPhotosAlbum({
                        filePath,
                        success: (res) => {
                            resolve(res);
                        },
                        fail: (err) => {
                            reject(err);
                        }
                    });
                }
            }
        });
    });
};

export const saveImageToApp = (filePath: string) => {
    return new Promise((resolve, reject) => {
        uni.saveImageToPhotosAlbum({
            filePath,
            success: (res) => {
                resolve(res);
            },
            fail: (err) => {
                reject(err);
            }
        });
    });
};

export const moneyFormat = (money: string): string => {
    return isNaN(parseFloat(money)) ? money : parseFloat(money).toFixed(2);
};

export const formatRichText = (html: string) => {
    let newContent = html.replace(/<img[^>]*>/gi, function (match, capture) {
        match = match.replace(/style="[^"]+"/gi, "").replace(/style='[^']+'/gi, "");
        match = match.replace(/width="[^"]+"/gi, "").replace(/width='[^']+'/gi, "");
        match = match.replace(/height="[^"]+"/gi, "").replace(/height='[^']+'/gi, "");
        return match;
    });
    newContent = newContent.replace(/style="[^"]+"/gi, function (match, capture) {
        match = match.replace(/width:[^;]+;/gi, "max-width:100%;").replace(/width:[^;]+;/gi, "max-width:100%;");
        return match;
    });
    newContent = newContent.replace(/<br[^>]*\/>/gi, "");
    newContent = newContent.replace(/\<img/gi, '<img style="max-width: 100%;height: auto;display: block;margin-top: 0;margin-bottom: 0;"');
    return newContent;
};

export const trim = (str: string): string => {
    return str.replace(/^\s+|\s+$/g, "");
};

export function downloadImage(url: string) {
    return new Promise((resolve, reject) => {
        // 获取当前平台
        const platform = uni.getSystemInfoSync().platform;
        console.log(platform);

        // 小程序或APP
        uni.downloadFile({
            url: url, // 图片文件的URL
            success: (res) => {
                if (res.statusCode === 200) {
                    //#ifdef MP-WEIXIN
                    saveImageToMp(res.tempFilePath);
                    //#endif

                    //#ifdef APP-PLUS
                    resolve("图片下载成功");
                    saveImageToApp(res.tempFilePath);
                    //#endif
                } else {
                    reject("下载失败，状态码：" + res.statusCode);
                }
            },
            fail: (err) => {
                reject(err);
            }
        });

        // #ifdef H5
        const a = document.createElement("a");
        a.href = url;
        console.log(url);

        a.download = "发票.png"; // 获取文件名
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        resolve("图片下载成功");
        //#endif
    });
}
