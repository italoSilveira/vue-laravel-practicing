<template>
	<div class="upload"
        @dragenter="OnDragEnter"
        @dragleave="OnDragLeave"
        @dragover.prevent
        @drop="onDrop"
        :class="{ dragging: isDragging, upload:  !images.length}">
        <div v-if="!images.length">
            <div class="upload-control" v-show="images.length">
                <label for="file">Select a file</label>
            </div>


            <div v-show="!images.length">
                <i class="fa fa-cloud-upload"></i>
                <p>Drag your images here</p>
                <div>OR</div>
                <div class="file-input">
                    <label for="file">Select a file</label>
                    <input type="file" id="file" @change="onInputChange" multiple>
                </div>
            </div>
        </div>
        <div v-if="images.length">
            <div v-for="(images, index) in images" :key="index">
                <img :src="images" alt="Image Uplaoder" :width="width" :height="height">
            </div>
        </div>
    </div>

</template>
<script>
  export default {
  	data: () => ({
        isDragging: false,
        dragCount: 0,
        files: [],
        images: [],
        width: '500px',
        height: '500px'
    }),
    methods: {
        OnDragEnter(e) {
            e.preventDefault();
            
            this.dragCount++;
            this.isDragging = true;
            return false;
        },
        OnDragLeave(e) {
            e.preventDefault();
            this.dragCount--;
            if (this.dragCount <= 0)
                this.isDragging = false;
        },
        onInputChange(e) {
            const files = e.target.files;
            Array.from(files).forEach(file => this.addImage(file));
        },
        onDrop(e) {
            e.preventDefault();
            e.stopPropagation();
            this.isDragging = false;
            const files = e.dataTransfer.files;
            Array.from(files).forEach(file => this.addImage(file));
        },
        addImage(file) {
            if (!file.type.match('image.*')) {
                this.$toastr.e(`${file.name} is not an image`);
                return;
            }
            this.files.push(file);
            const img = new Image(),
                reader = new FileReader();
            reader.onload = (e) => this.images.push(e.target.result);
            reader.readAsDataURL(file);
        },
        getFileSize(size) {
            const fSExt = ['Bytes', 'KB', 'MB', 'GB'];
            let i = 0;
            
            while(size > 900) {
                size /= 1024;
                i++;
            }
            return `${(Math.round(size * 100) / 100)} ${fSExt[i]}`;
        }
    }
  };
</script>

<style scoped>
    .upload {
        width: 100%;
        background: #2196F3;
        color: #fff;
        padding: 40px 15px;
        text-align: center;
        border-radius: 10px;
        border: 3px dashed #fff;
        font-size: 20px;
        position: relative;
    }

    .upload .dragging {
        background: #fff;
        color: #2196F3;
        border: 3px dashed #2196F3;
        
    }

    .upload .file-input label {
        background: #2196F3;
        color: #fff;
    }

    .upload i {
        font-size: 85px;
    }

    .file-input {
        width: 200px;
        margin: auto;
        height: 68px;
        position: relative;
        
    }

    .file-input label,
    input {
        background: #fff;
        color: #2196F3;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        padding: 10px;
        border-radius: 4px;
        margin-top: 7px;
        cursor: pointer;
    }

    .file-input input {
        opacity: 0;
        z-index: -2;
    }

    .images-preview {
        display: flex;
        flex-wrap: wrap;
    }

    .img-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background: #fff;
        box-shadow: 5px 5px 20px #3e3737;
    }

    .details {
        font-size: 12px;
        background: #fff;
        color: #000;
        display: flex;
        flex-direction: column;
        align-items: self-start;
        padding: 3px 6px;
    }

    .name {
        overflow: hidden;
        height: 18px;
    }

    .upload-control {
        position: absolute;
        width: 100%;
        background: #fff;
        top: 0;
        left: 0;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
        padding: 10px;
        padding-bottom: 4px;
        text-align: right;
    }

    .upload-control button, label {
        background: #2196F3;
        border: 2px solid #03A9F4;
        border-radius: 3px;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
    }

    .upload-control label {
        padding: 2px 5px;
        margin-right: 10px;
    }
</style>