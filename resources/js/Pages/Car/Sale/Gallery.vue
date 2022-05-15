<template>
   <Layout>
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
            <div
                class="lg:flex flex-col lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:pb-16 lg:pt-6 lg:px-8 z-20">
                <div class="w-full">
                    <form @submit.prevent="submit" class="w-full">
                        <div class="w-full mt-4 flex">
                            <div class="w-full">
                                <label
                                    class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                                        <span class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                            <span class="font-medium text-gray-600">
                                                Drop files to Attach, or
                                                <span class="text-blue-600 underline">browse</span>
                                            </span>
                                        </span>
                                    <input @input="form.medias = $event.target.files" type="file" class="hidden" multiple>
                                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                        {{ form.progress.percentage }}%
                                    </progress>
                                </label>
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
            </div>
        </div>
   </Layout>
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

import Layout from "../../../Layouts/Layout"
import Button from "../../../Jetstream/Button";
import {Inertia} from "@inertiajs/inertia";
import { useForm } from '@inertiajs/inertia-vue3'

export default {
    props: {
        saleId: Number
    },
    setup () {
        const form = useForm({
            medias: null
        })

        function submit() {
            Inertia.post('/car/sale/' + 1 + '/gallery', form)
        }

        return { form, submit }
    },
    components: {Button, Layout },
    updated() {
        Object.values(this.$attrs["errors"]).forEach((item) => {
            this.$flashMessage.show({
                type: 'error',
                title: item,
                message: item
            });
        });
    }

}
</script>
