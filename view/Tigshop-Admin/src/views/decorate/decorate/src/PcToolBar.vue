<template>
    <div class="theme-toolbar">
        <div class="theme-menu-con show">
            <div class="theme-con-box" data-id="1">
                <div class="inside">
                    <div class="modules-wrap modules-wrap-current">
                        <div class="modules-head J_ModuleListHead">
                            <span>PC首页模块</span>
                            <b class="dropdown-icon iconfont icon-xia"></b>
                            <b class="dropdown-icon dropdown-icon-up iconfont" style="display: none">&#xe760;</b>
                        </div>
                        <draggable
                            class="module-list"
                            item-key="type"
                            :list="toolList"
                            ghost-class="sortable-ghost"
                            chosen-class="toolChosenClass"
                            animation="300"
                            @start=""
                            @end=""
                            :sort="false"
                            :group="{ name: 'advanced', pull: 'clone', put: false }"
                            :clone="clone"
                        >
                            <template #item="{ element, index }">
                                <div class="list-item tool-list-item" @click="onAdd(index)">
                                    <span v-if="element.label" class="content">{{ element.label }}</span>
                                </div>
                            </template>
                        </draggable>
                    </div>
                    <div style="height: 50px"></div>
                </div>
            </div>
        </div>
    </div>
</template>
<script lang="ts" setup>
import { ref, defineAsyncComponent, onMounted, shallowRef } from "vue";
import draggable from "vuedraggable";
import { cloneDeep } from "lodash";
const props = defineProps({
    modules: {
        type: Object,
        default: () => ({})
    }
});
const emit = defineEmits(["item-added"]);
const modules = ref(props.modules);
const toolList = ref([
    { type: "pcBanner", url: "pc", label: "轮播Banner", content: "", module: {}, isShow: true },
    { type: "pcGroupBanner", url: "pc", label: "分组轮播Banner", content: "", module: {}, isShow: true },
    { type: "pcSeckill", url: "pc", label: "秒杀模块", content: "", module: {}, isShow: true },
    { type: "pcCoupon", url: "pc", label: "优惠券模块", content: "", module: {}, isShow: true },
    { type: "pcCatProductNormal", url: "pc", label: "分类商品-窄", content: "", module: {}, isShow: true },
    { type: "pcCatProductWide", url: "pc", label: "分类商品-宽", content: "", module: {}, isShow: true },
    { type: "pcCatWide", url: "pc", label: "分类模块-宽", content: "", module: {}, isShow: true },
    { type: "pcCatProductSimple", url: "pc", label: "分类商品-简约", content: "", module: {}, isShow: true },
    { type: "pcImageAd", url: "pc", label: "通宽广告图", content: "", module: {}, isShow: true },
    { type: "pcRecommendProduct", url: "pc", label: "推荐商品-瀑布流", content: "", module: {}, isShow: true },
    { type: "pcCustomAd1", url: "pc", label: "自定义模块一", content: "", module: {}, isShow: true },
    { type: "pcCustomAd2", url: "pc", label: "自定义模块二", content: "", module: {}, isShow: true },
    { type: "pcCategoryNav", url: "pc", label: "分类导航", content: "", module: {}, isShow: true },
    { type: "pcCategoryNav3", url: "pc", label: "分类导航3", content: "", module: {}, isShow: true },
]);
const clone = (obj: any) => {
    let newObj = cloneDeep(obj);
    // 增加唯一键值
    newObj.moduleIndex = Date.now();
    // 删除没用的值
    delete newObj.content;
    return newObj;
};
const onAdd = (index: number) => {
    const addItem:any = cloneDeep(toolList.value[index]);
    addItem.moduleIndex = Date.now();
    modules.value.moduleList.push(addItem); // 将模块加入列表
    // Emit 事件以通知父组件新模块已添加
    emit("item-added", { newIndex: modules.value.moduleList.length - 1 });
};
</script>
<style lang="less" scoped>
.theme-con-box .module-list .list-item {
    border: 1px dashed #ebedf0;
    color: #646566;
    background: #f7f8fa;
    box-sizing: border-box;
    font-size: 12px;
    border-radius: 0;
    width: 100%;
    height: 100%;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    cursor: pointer;
    margin-bottom: 10px;
}
.theme-con-box .module-list .list-item:hover {
    background: #edf4ff;
    border-color: #3773da;
    color: #155bd4;
}
</style>
