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
                    class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border border-indigo-600">
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
                            <div class="w-2/4 px-1 flex">
                                <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="car-burst"/>
                                </span>
                                    <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    ДТП
                                </span>
                                <input v-model="form.is_crash_exist" type="checkbox" id="dtp" hidden class="hidden">
                                <label for="dtp" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
                                </label>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="w-2/4 px-1 flex">
                                <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Пошкодження cпереду
                                </span>
                                <input v-model="form.is_front_crash" required
                                       type="checkbox" id="front_crash" hidden class="hidden">
                                <label for="front_crash" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
                                </label>
                            </div>
                            <div class="w-2/4 px-1 flex">
                                <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Пошкодження ззаду
                                </span>
                                <input v-model="form.is_rear_crash" required
                                       type="checkbox" id="rear_crash" hidden class="hidden">
                                <label for="rear_crash" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
                                </label>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="w-2/4 px-1 flex">
                                <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Пошкодження з лівого боку
                                </span>
                                <input v-model="form.is_left_crash" required
                                       type="checkbox" id="left_crash" hidden class="hidden">
                                <label for="left_crash" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
                                </label>
                            </div>
                            <div class="w-2/4 px-1 flex">
                                <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Пошкодження з правого боку
                                </span>
                                <input v-model="form.is_right_crash" required
                                       type="checkbox" id="right_crash" hidden class="hidden">
                                <label for="right_crash" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
                                </label>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="w-full px-1 flex">
                                <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Пошкодження даху
                                </span>
                                <input v-model="form.is_top_crash" required
                                       type="checkbox" id="top_crash" hidden class="hidden">
                                <label for="top_crash" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
                                </label>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <label class="text-gray-700 w-full" for="description">
                                <textarea v-model="form.description"
                                    class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    id="description"
                                    placeholder="Опис..."
                                    rows="5"
                                    cols="40"></textarea>
                            </label>
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
import {reactive} from "vue";
import Button from "../../../Jetstream/Button";
import Input from "../../../Jetstream/Input";
import {Inertia} from "@inertiajs/inertia";

export default {
    props: {
        saleId: Number
    },
    data() {
        return {
            form: reactive({
                'is_crash_exist': false,
                'is_front_crash': true,
                'is_rear_crash': true,
                'is_top_crash': true,
                'is_left_crash': true,
                'is_right_crash': true,
                'description': null
            })
        }
    },
    components: {Button, Input, Layout},
    methods: {
        submit: function () {
            Inertia.post('/car/sale/' + this.saleId + '/crash', this.form)
        }
    },
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
