<template>
    <div class="gallery-pic">
        <div :class="'gallery-pic-select ' + (photo ? 'have_image' : '')" v-if="!isMultiple && type == 1">
            <div class="item-img add-photo-btn">
                <Image v-if="photo" class="gallery-img" :src="imageFormat(photo)" />
                <DialogForm type="gallery" class="item-bg" @okCallback="onEdit" :params="{ isMultiple: props.isMultiple }" v-if="!photo">
                    <div
                        class="flex"
                        style="flex-direction: column; height: 80px; width: 80px; align-items: center; justify-content: center; line-height: 22px"
                    >
                        <i class="iconfont icon-tianjiatupian"></i><span>添加图片</span>
                    </div>
                </DialogForm>
                <p class="remove-btn" v-if="photo && !disabled">
                    <i @click="removeGallery" class="iconfont icon-cha"></i>
                </p>
            </div>
            <div class="item-action" v-if="photo && type == 1 && !disabled">
                <DialogForm type="gallery" class="item item-edit" @okCallback="onEdit" :params="{ isMultiple: props.isMultiple }"
                    ><span class="iconfont icon-bianji1"></span>
                </DialogForm>
                <span @click="removeGallery" class="item item-remove iconfont icon-shanchu"></span>
            </div>
        </div>
        <div>
            <DialogForm type="gallery" @okCallback="onEdit" :params="{ isMultiple: props.isMultiple }" v-if="type == 2">
                <div>
                    <slot></slot>
                </div>
            </DialogForm>
        </div>
        <div class="gallery-list-warp" v-if="isMultiple">
            <div>
                <draggable
                    class="gallery-list-ul"
                    item-key="picId"
                    :list="<any>photos"
                    ghost-class="ghost"
                    chosen-class="chosenClass"
                    animation="300"
                    @start=""
                    @end=""
                >
                    <template #item="{ element, index }">
                        <div class="item" data-id="img.imgId">
                            <div class="img flex flex-justify-center">
                                <BusinessImg
                                    v-if="pageType == 'product'"
                                    v-model:modelValue="element.picUrl"
                                    :picThumb="element.picThumb"
                                    :dataId="element.picId"
                                    :dataType="7"
                                    @Edit="onEdit"
                                    @Delete="removePic"
                                >
                                    <a class="lyecs-dialogImage">
                                        <Image class="gallery-img" :big="element.picUrl" :src="imageFormat(element.picThumb)" />
                                    </a>
                                </BusinessImg>
                                <a v-else class="lyecs-dialogImage">
                                    <Image class="gallery-img" :big="element.picUrl" :src="imageFormat(element.picThumb)" />
                                </a>
                                <i v-show="!disabled" @click="removePic(index)" class="btn-del iconfont icon-cha"></i>
                            </div>
                        </div>
                    </template>

                    <template #footer>
                        <div v-if="disabled"></div>
                        <DialogForm v-else type="gallery" class="" @okCallback="onEdit" :params="{ isMultiple: props.isMultiple }">
                            <div class="item gallery-add-item add-gallery-photo-btn" draggable="false">
                                <el-icon size="25"><Plus /></el-icon>
                            </div>
                        </DialogForm>
                    </template>
                </draggable>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { reactive, ref, toRefs } from "vue";
import type { Ref } from "vue";
import { DialogForm } from "@/components/dialog";
import draggable from "vuedraggable";
import { Image } from "@/components/image";
import { imageFormat } from "@/utils/format";
import { Plus } from "@element-plus/icons-vue";
import BusinessImg from "@/components/multilingual/BusinessImg.vue";

const props = defineProps({
    photo: {
        type: String,
        default: ""
    },
    photos: {
        type: Array,
        default: [] // {picId,picThumb,picUrl,picName}
    },
    isMultiple: {
        type: Boolean,
        default: false
    },
    disabled: {
        type: Boolean,
        default: false
    },
    type: {
        type: Number,
        default: 1
    },
    pageType: {
        type: String,
        default: ""
    }
});
// 动态解析props
const { photo, photos, isMultiple, disabled } = toRefs(props);

const emit = defineEmits(["update:photo", "update:photos"]);
const onEdit = (result: any) => {
    if (isMultiple.value == true) {
        let _photos = photos.value || [];
        emit("update:photos", _photos.concat(result));
    } else {
        emit("update:photo", result[0].picUrl);
    }
};

const removePic = (index: number) => {
    let _photos = photos.value;
    _photos.splice(<any>index, 1);
    emit("update:photos", _photos);
};
const removeGallery = () => {
    emit("update:photo", "");
};
// 相册预览功能
const previewVisible = ref(false);
const previewImage = ref("");
const handleCancel = () => {
    previewImage.value = "";
};
const previewPhoto = (v: any) => {
    previewVisible.value = true;
    previewImage.value = v;
};
</script>

<style lang="less" scoped>
// 相册选择
.gallery-pic {
    width: 100%;
}
.gallery-pic-select {
    // margin-bottom: 10px;
    position: relative;
    width: 80px;
    height: 80px;
    border: 1px dashed #ddd;
    vertical-align: middle;
    transition: all 0.3s;
}

.gallery-pic-select.have_image {
    border-style: solid;
}

.gallery-pic-select:hover {
    border-style: dashed;
    border-color: #155bd4;
}

.gallery-pic-select .ant-image-img {
    display: inline-block;
    vertical-align: middle;
    height: auto;
    width: auto;
    max-width: 80px;
    max-height: 80px;
    cursor: pointer;
}

.gallery-pic-select a {
    display: flex;
    vertical-align: middle;
    margin-right: 8px;
    align-items: center;
}

.gallery-pic-select a.add-photo-direct-btn {
    display: none;
}

.gallery-pic-select .add-photo-btn {
    background: #fff;
    border-color: #ddd;
    color: #333;
    // background: rgba(0, 0, 0, 0.2);
    height: 30px;
    display: none;
    .remove-btn {
        display: none;
        position: absolute;
        top: -10px;
        right: -10px;
        background-color: #f5f7fa;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        text-align: center;
        line-height: 18px;
        i {
            font-size: 12px;
        }
    }
}

.gallery-pic-select .item-img {
    display: block;
    width: 100%;
    height: 100%;
    overflow: hidden;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

.gallery-img {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.gallery-pic {
    :deep(.el-image__inner) {
        max-width: 100% !important;
        max-height: 100% !important;
    }
}

.gallery-pic-select .item-action {
    position: absolute;
    right: 0;
    bottom: 0;
    height: 20px;
    line-height: 20px;
    color: #fff;
    align-content: flex-end;
    width: 100%;
    opacity: 0;
    transition: all 0.3s;
    visibility: hidden;
    display: flex;
    background: rgba(0, 0, 0, 0.6);
}
.gallery-pic-select .item-action :deep(.item) {
    display: inline-flex;
    width: 33%;
    align-content: center;
    justify-content: center;
    color: #fff;
    cursor: pointer;

    :first-child {
        margin-left: auto;
    }

    :hover {
        color: #fff;
    }

    .item-edit {
        font-size: 17px;
    }

    .item-remove {
        font-size: 14px;
    }
}

.gallery-pic-select.have_image:hover :deep(.item-action) {
    display: flex;
    opacity: 1;
    visibility: visible;
}

.gallery-pic-select .item-bg span {
    display: block;
    font-size: 12px;
    color: #999;
}

.gallery-pic-select .item-bg i {
    font-size: 20px;
    text-align: center;
    color: #999;
}

.gallery-pic-select .remove-photo-btn {
    display: none;
}

.gallery-pic-select .add-photo-btn:hover {
    background: #fff;
    border-color: var(--tig-primary);
    color: var(--tig-primary);
    .remove-btn {
        display: block;
    }
}

.gallery-pic-select a i {
    margin-right: 5px;
}

/*商品相册*/
.gallery-list-warp {
    padding: 0;
    display: flex;
    flex-wrap: nowrap;
}

.gallery-list-warp ul {
    display: flex;
    flex-wrap: wrap;
}

.gallery-list-warp .item {
    width: 80px;
    height: 80px;
    margin-right: 10px;
    margin-bottom: 10px;
    position: relative;
    // border: 1px solid #eee;
}

.gallery-list-warp .gallery-add-item {
    width: 80px;
    height: 80px;
    //border: 1px dashed #ddd;
    //margin-right: 10px;
    //margin-bottom: 10px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #999;
    background-color: #f5f6f9;
    cursor: pointer;
}

.gallery-list-warp .gallery-add-item :deep(.dialog-link) {
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: center;
}

.gallery-list-warp .gallery-add-item i {
    font-size: 22px;
    color: #969799;
}

.gallery-list-warp .gallery-add-item:hover {
    border-color: #155bd4;
    color: #155bd4;
}

.gallery-list-warp .gallery-list-ul {
    display: flex;
    flex-wrap: wrap;
}

.gallery-list-warp .item.add_photo a {
    background: url("../images/bg-addImage.png") no-repeat center center;
    width: 100%;
    height: 100%;
    display: block;
}

.gallery-list-warp .item.add_photo a:hover {
    background-color: #f2f2f2;
}

.gallery-list-warp .item .img {
    width: 80px;
    height: 80px;
    border: 1px solid #eee;
}

.gallery-list-warp .item .img a {
    display: flex;
    align-items: center;
    justify-content: center;
}

.gallery-list-warp .item .img img {
    width: 100%;
    height: auto;
}

.gallery-list-warp .item .desc {
    line-height: 25px;
    text-align: center;
    height: 25px;
}

.gallery-list-warp .item .desc input {
    width: 90px;
    padding: 0 6px;
    height: 20px;
    line-height: 20px;
    border-color: #eee;
}

.gallery-list-warp .item .btn-del {
    position: absolute;
    cursor: pointer;
    right: -10px;
    top: -10px;
    color: #fff;
    background: #dbdbdb;
    border-radius: 50%;
    z-index: 2;
    width: 18px;
    height: 18px;
    text-align: center;
    line-height: 18px;
    font-size: 12px;
    display: none;
}

.overseas {
    left: -10px !important;
}

.gallery-list-warp .item:hover .img {
    border: 1px dashed #155bd4;
}

.gallery-list-warp .item:hover .btn-del {
    display: block;
}

.gallery-list-warp .item .btn-del:hover {
    background: #333;
}
</style>
