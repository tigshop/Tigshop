<template>
    <!-- <div v-if="showPopup" class="modal-mask" @click="togglePopup"></div> -->
    <div class="drawer-box">
        <!-- <div class="left-btn" :class="{ open: showPopup }" @click="togglePopup">
            <el-icon v-if="!showPopup" size="26"><Tools /></el-icon>
            <el-icon v-else size="26"><Close /></el-icon>
        </div> -->
        <el-form ref="formRef" :model="formState" label-width="140px">
            <el-form-item label="外观">
                <div>
                    <div class="flex">
                        <SelectLayout :options="navTheme" v-model="formState.navTheme"></SelectLayout>
                    </div>
                    <div class="extra">后台系统整体风格切换，点击可切换浅色风格或深色风格。(点击保存后生效)</div>
                </div>
            </el-form-item>
            <el-form-item label="导航模式">
                <div>
                    <div class="flex">
                        <SelectLayout :options="layout" v-model="formState.layout"></SelectLayout>
                    </div>
                    <div class="extra">后台系统导航框架切换，点击可切换侧边菜单或顶部菜单。(点击保存后生效)</div>
                </div>
            </el-form-item>
            <el-form-item label="后台LOGO" prop="adminLightLogo">
                <div>
                    <div class="img-box">
                        <FormAddGallery v-model:photo="formState.adminLightLogo" style="width: 100%" />
                        <div class="mask-box" v-if="licensedStore.licensedData.deCopyright == 0"></div>
                    </div>
                    <div class="extra">
                        <span v-if="licensedStore.licensedData.deCopyright == 0">购买去版权服务后可修改</span>
                        <span class="extra" v-else>建议宽度200px，高度40px，格式为png、jpg、jpeg (点击保存后生效) </span>
                        <el-popover :width="350" placement="top" trigger="click">
                            <template #reference>
                                <a>查看示例</a>
                            </template>
                            <template #default>
                                <img src="@/style/images/light_logo_guide.png" style="width: 330px" />
                            </template>
                        </el-popover>
                    </div>
                </div>
            </el-form-item>
            <el-form-item label="是否隐藏版本号" prop="versionInfoHidden">
                <div>
                    <div>
                        <el-radio-group v-model="formState.versionInfoHidden"
                                        :disabled="licensedStore.licensedData.deCopyright == 0">
                            <el-radio :value="1">是</el-radio>
                            <el-radio :value="0">否</el-radio>
                        </el-radio-group>
                    </div>
                    <div class="extra">
                        <span v-if="licensedStore.licensedData.deCopyright == 0">购买去版权服务后可修改</span>
                        <span v-else>如果选是，则隐藏底部版本号信息。(点击保存后生效)</span>
                        <el-popover :width="450" placement="top" trigger="click">
                            <template #reference>
                                <a>查看示例</a>
                            </template>
                            <template #default>
                                <img src="@/style/images/version_no.png" style="width: 430px" />
                            </template>
                        </el-popover>
                    </div>
                </div>
            </el-form-item>
        </el-form>

        <!-- <div class="drawer-from" :class="{ open: showPopup }"> -->
        <!-- <div class="title">
                <el-icon size="22" @click="togglePopup"><Close /></el-icon>
            </div> -->
        <!-- <div class="theme-info">
                <div class="title-row">整体风格设置</div>
                <div class="info-row flex">
                    <SelectLayout :options="navTheme" v-model="themeInfo.navTheme" :fun="themeStore.changeThemeNav"></SelectLayout>
                </div>
            </div>
            <div class="theme-info">
                <div class="title-row">主题色</div>
                <div class="info-row flex">
                    <div class="color-row" v-for="color in colorList" :style="{ backgroundColor: color.color }" @click="changeColor(color)">
                        <div v-if="color.type == themeInfo.primaryColor">
                            <el-icon><Check /></el-icon>
                        </div>
                    </div>
                </div>
            </div>
            <div class="theme-info" v-if="windowWidth > 768">
                <div class="title-row">导航模式</div>
                <div class="info-row flex">
                    <SelectLayout :options="layout" v-model="themeInfo.layout"></SelectLayout>
                </div>
            </div> -->
        <!-- <div class="theme-info" v-if="windowWidth > 768 && (themeInfo.layout == 'side' || themeInfo.layout == 'mix')">
                <div class="info-row flex flex-justify-between flex-align-center">
                    <div class="label">菜单是否手风琴</div>
                    <div class="value">
                        <el-switch v-model="themeInfo.uniqueOpened" @change="themeStore.setThemeInfo"></el-switch>
                    </div>
                </div>
            </div> -->
        <!-- <div class="theme-info">
                <div class="title-row">其他设置</div>
                <div class="info-row flex flex-justify-between flex-align-center">
                    <div class="label">多标签</div>
                    <div class="value">
                        <el-switch v-model="themeInfo.isMultiLabel" @change="themeStore.setThemeInfo"></el-switch>
                    </div>
                </div>
            </div> -->
        <!-- </div> -->
    </div>
</template>
<script setup lang="ts">
import { Close, Tools, Check, QuestionFilled } from "@element-plus/icons-vue";
import { FormAddGallery } from "@/components/gallery";
import { useThemeStore } from "@/store/theme";
import SelectLayout from "./SelectLayout.vue";
import { ref, PropType } from "vue";
import { useLicensedStore } from "@/store/licensed";

const licensedStore = useLicensedStore();
const licensedData = licensedStore.licensedData;
// const themeStore = useThemeStore();
// const themeInfo: any = themeStore.themeInfo;
// 传值
// const props = defineProps({
//     themeInfo: {
//         type: Object as PropType<any>,
//         default: () => {}
//     }
// })
const formState = defineModel<any>("formState");
// const emit = defineEmits(["update:themeInfo"]);
// const windowWidth = window.innerWidth;
const navTheme = [
    // 主题列表
    {
        label: "浅色风格",
        value: "light"
    },
    // {
    //     label: "暗黑风格",
    //     value: "realDark"
    // }
];
const layout = [
    {
        label: "侧边菜单布局",
        value: "default"
    }
];
const colorList = [
    {
        type: "blue",
        color: "#1456f0"
    },
    {
        type: "red",
        color: "#f5222d"
    },
    {
        type: "orange",
        color: "#faad14"
    },
    {
        type: "green",
        color: "#52c41a"
    },
    {
        type: "purple",
        color: "#722ed1"
    }
];
// 控制弹窗显示
// const showPopup = ref(false);

// const togglePopup = () => {
//     showPopup.value = !showPopup.value;
// };

const changeColor = (color: any) => {
    formState.value.primaryColor = color.type;
    // let data = {
    //     primaryColor: color.type
    // };
    // themeStore.setThemeInfo();
};
</script>
<style lang="less" scoped>
// .modal-mask {
//     position: fixed;
//     top: 0;
//     left: 0;
//     width: 100vw;
//     height: 100vh;
//     background-color: rgba(0, 0, 0, 0.5);
//     z-index: 125;
// }
.drawer-box {
    .extra {
        margin-top: 5px;
    }

    // z-index: 125;
    // .left-btn {
    //     width: 50px;
    //     height: 50px;
    //     border-radius: 10px 0 0 10px;
    //     background-color: var(--tig-primary);
    //     color: #fff;
    //     display: flex;
    //     align-items: center;
    //     justify-content: center;
    //     position: fixed;
    //     right: 0px; /* 初始位置在屏幕外 */
    //     top: 18%;
    //     z-index: 126;
    //     transition: right 0.3s ease; /* 添加过渡效果 */
    //     &.open {
    //         right: 300px; /* 打开时从右侧滑入 */
    //     }
    //     .el-icon {
    //         cursor: pointer;
    //     }
    // }
    .drawer-from {
        // width: 300px;
        // position: fixed;
        // right: -300px; /* 初始位置在屏幕外 */
        // transition: right 0.3s ease; /* 添加过渡效果 */
        // height: 100%;
        // background-color: #fff;
        // z-index: 126;
        // &.open {
        //     right: 0; /* 打开时从右侧滑入 */
        // }
        .title {
            display: flex;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #eee;

            .el-icon {
                color: #333;
                font-size: 20px;
                cursor: pointer;
            }
        }

        .theme-info {
            padding: 10px;

            .title-row {
                font-size: 16px;
                margin-bottom: 15px;
                font-weight: 500;
                -webkit-font-smoothing: initial;
            }

            .info-row {
                .label {
                    font-size: 14px;
                }
            }
        }
    }

    .color-row-wrap {
        gap: 20px;

        .color-row {
            width: 25px;
            height: 25px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;

            .el-icon {
                color: #fff;
                font-size: 16px;
            }
        }
    }
}
</style>
