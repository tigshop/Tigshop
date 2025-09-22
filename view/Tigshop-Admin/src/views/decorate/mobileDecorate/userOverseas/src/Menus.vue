<template>
    <div class="menu-box">
        <div class="tit">我的服务</div>
        <div class="list flex" v-if="module.menuType == 2">
            <div class="item" v-for="item in module.menuList">
                <img :src="imageFormat(item.picUrl)" alt="" />
                <p>{{ item.picTitle }}</p>
            </div>
        </div>
        <div class="list2" v-if="module.menuType == 1">
            <div class="item flex flex-align-center" v-for="item in module.menuList">
                <div class="flex flex-align-center">
                    <img :src="imageFormat(item.picUrl)" alt="" />
                    <p>{{ item.picTitle }}</p>
                </div>
                <div class="more">
                    <el-icon><ArrowRight /></el-icon>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
import "@/views/decorate/decorate/src/css/decorate.less";
import { defineProps, PropType } from "vue";
import { imageFormat } from "@/utils/format";
import { ArrowRight } from "@element-plus/icons-vue";
import { DecorateUserMenu } from "@/types/decorate/decorateDiscrete.d";
const props = defineProps({
    module: {
        type: Object as PropType<DecorateUserMenu>,
        default: () => ({
            menuType: 1,
            menuList: []
        }),
    },
});
</script>
<style lang="less" scoped>
.menu-box {
    margin: 9px 0;
    background-color: #fff;
    position: relative;
    .tit {
        padding: 15px;
        font-size: 14px;
        font-weight: bold;
    }
    .list {
        flex-wrap: wrap;
        padding: 0 5px;
        .item {
            text-align: center;
            width: 25%;
            margin-bottom: 15px;
            img {
                width: 25px;
                margin-bottom: 5px;
            }
        }
    }
    .list2 {
        padding: 0 10px;
        .item {
            justify-content: space-between;
            padding: 15px 0;
            font-size: 13px;
            font-weight: 500;
            border-bottom: 1px solid #eee;
            &:last-child {
                border: none;
            }
            img {
                width: 25px;
                margin-right: 10px;
            }
        }
    }
    &::before {
        content: "";
        height: 100%;
        position: absolute;
        box-sizing: border-box;
        z-index: 99;
        cursor: pointer;
    }
}
</style>
