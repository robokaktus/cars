<template>
    <h2 class="flex justify-center my-5 text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
        Форма Продажу
    </h2>
    <div class="w-full flex justify-between my-5">
        <div class="w-1/6 text-center relative tabs-line">
                <span
                    class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border border-indigo-600">
                    Основне
                </span>
        </div>
        <div class="w-1/6 text-center relative tabs-line">
                <span
                    class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border border-indigo-600">
                    Характеристики
                </span>
        </div>
        <div class="w-1/6 text-center relative tabs-line">
                <span
                    class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border border-indigo-600">
                    Галерея
                </span>
        </div>
        <div class="w-1/6 text-center relative tabs-line">
                <span
                    class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border">
                    ДТП
                </span>
        </div>
        <div class="w-1/6 text-center">
                <span
                    class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border">
                    Опції
                </span>
        </div>
    </div>
    <div class="w-full shadow-lg bg-white rounded-2xl mb-2">
        <form @submit.prevent="submit(saleId)" class="w-full" enctype="multipart/form-data">
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 p-4">
                <div class="group relative">
                    <div>
                        <file-pond
                            name="frontSideImage"
                            ref="pond"
                            class-name="filepond"
                            label-idle="Front side"
                            allow-multiple="false"
                            accepted-file-types="image/jpeg, image/png"
                            v-bind:files="frontSideImage"
                            v-on:init="handleFilePondInit"
                        />
                    </div>
                </div>
                <div class="group relative">
                    <div>
                        <file-pond
                            name="rightSideImage"
                            ref="pond"
                            class-name="filepond"
                            label-idle="Right side"
                            allow-multiple="false"
                            accepted-file-types="image/jpeg, image/png"
                            v-bind:files="rightSideImage"
                            v-on:init="handleFilePondInit"
                        />
                    </div>
                </div>
                <div class="group relative">
                    <div>
                        <file-pond
                            name="rearSideImage"
                            ref="pond"
                            class-name="filepond"
                            label-idle="Rear side"
                            allow-multiple="false"
                            accepted-file-types="image/jpeg, image/png"
                            v-bind:files="rearSideImage"
                            v-on:init="handleFilePondInit"
                        />
                    </div>
                </div>
                <div class="group relative">
                    <div>
                        <file-pond
                            name="leftSideImage"
                            ref="pond"
                            class-name="filepond"
                            label-idle="Right side"
                            allow-multiple="false"
                            accepted-file-types="image/jpeg, image/png"
                            v-bind:files="leftSideImage"
                            v-on:init="handleFilePondInit"
                        />
                    </div>
                </div>
                <div class="group relative">
                    <div>
                        <file-pond
                            name="interiorImage"
                            v-model="form.interiorImage"
                            ref="pond"
                            class-name="filepond"
                            label-idle="Interior"
                            allow-multiple="false"
                            accepted-file-types="image/jpeg, image/png"
                            v-bind:files="interiorImage"
                            v-on:init="handleFilePondInit"
                        />
                    </div>
                </div>
                <div class="group relative">
                    <div>
                        <file-pond
                            name="additionalImages"
                            ref="pond"
                            class-name="filepond"
                            label-idle="Additional images. Max 10"
                            allow-multiple="true"
                            accepted-file-types="image/jpeg, image/png"
                            v-bind:files="additionalImages"
                            v-on:init="handleFilePondInit"
                        />
                    </div>
                </div>
            </div>

            <div class="w-full mt-8 flex justify-end">
                <div class="flex w-1/5 px-1">
                    <button type="submit"
                            class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full ">
                        Далі
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>
<style>
.tabs-line:after {
    content: '';
    position: absolute;
    width: 36px;
    height: 1px;
    background: black;
    right: -21%;
    top: 50%;
}

input:checked ~ label {
    color: #9333ea;
    border-color: #9333ea;
    outline: #9333ea solid 1px;
}

</style>
<script>

import { router } from '@inertiajs/vue3'
import {useForm} from '@inertiajs/vue3'
// Import FilePond
import vueFilePond from 'vue-filepond';

// Import plugins
import FilePondPluginFileValidateType
    from 'filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.esm.js';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.esm.js';

// Import styles
import 'filepond/dist/filepond.min.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';

// Create FilePond component
const FilePond = vueFilePond(FilePondPluginFileValidateType, FilePondPluginImagePreview);

export default {
    props: {
        saleId: Number
    },
    data: function () {
        return {
            frontSideImage: [],
            rightSideImage: [],
            rearSideImage: [],
            leftSideImage: [],
            interiorImage: [],
            additionalImages: [],
        };
    },
    setup() {
        const form = useForm({
            frontSideImage: null,
            leftSideImage: null,
            rearSideImage: null,
            rightSideImage: null,
            interiorImage: null,
            additionalImages: null,
        })

        function submit(saleId) {
            Inertia.post('/car/sale/' + saleId + '/gallery', form)
        }

        return {form, submit}
    },
    methods: {
        handleFilePondInit: function () {
            this.$refs.pond.getFiles();
        },
        // send: function () {
        //     Inertia.post('/car/sale/' + this.saleId + '/gallery', this.$refs.pond.getFiles());
        //     console.log(222222);
        //     console.log(this.$refs.pond);
        // }
    },
    components: {
        FilePond
    },

}
</script>
