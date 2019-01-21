<template>
    <div id="img-preview">
        <h1 class="text-center pb-4">Image Previewer</h1>
        <h3 class="text-center">Drag and drop an image onto the page or paste in a URL to see the image</h3>
        <div id="img-preview-form" class="text-center py-6">
            <input class="p-3 border-gray" v-model="previewUrl" placeholder="https://i.imgur.com/MQHYB.jpg" />
            <button 
                class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded"
                v-on:click="renderImageFromUrl"
            >
                Preview
            </button>
        </div>
        <div id="img-preview-render">
        </div>
    </div>
</template>

<script>
    module.exports = {
        data: function () {
            return {
                previewUrl: '',
            };
        },
        methods: {
            renderImageFromUrl: function (event) {
                console.log(this.$data.previewUrl);
            }
        },
    };
</script>
