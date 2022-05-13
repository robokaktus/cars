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
                class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border">
                Характеристики
            </span>
            </div>
            <div class="w-1/6 text-center relative tabs-line">
            <span
                class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border">
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
                            <div class="w-1/4 px-1">
                                <select required v-model="form.brand_id"
                                        v-bind:class = "$page.props.errors.brand_id ? 'border-red-600' : ''"
                                        class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Марка'"></option>
                                    <option v-for="brand in brands" :value="brand.id" v-text="brand.title"></option>
                                </select>

                            </div>
                            <div class="w-1/4 px-1">
                                <select required v-model="form.model_id"
                                        v-bind:class = "$page.props.errors.model_id ? 'border-red-600' : ''"
                                        class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Модель'"></option>
                                    <option v-for="model in models" :value="model.id" v-text="model.title"></option>
                                </select>
                            </div>
                            <div class="w-2/4 px-1">
                                <input v-model="form.version" type="text"
                                       class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Версія"/>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-2/4 px-1">
                                <input required v-model="form.price" type="number" step="1"
                                       v-bind:class = "$page.props.errors.price ? 'border-red-600' : ''"
                                       class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Ціна"/>
                            </div>
                            <div class="w-2/4 px-1">
                                <input v-model="form.old_price" type="number" step="1"
                                       class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Стара ціна"/>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-1/4 px-1">
                                <select required v-model="form.body_type_id"
                                        v-bind:class = "$page.props.errors.body_type_id ? 'border-red-600' : ''"
                                        class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Тип кузову'"></option>
                                    <option v-for="bodyType in bodyTypes" :value="bodyType.id"
                                            v-text="bodyType.title"></option>
                                </select>
                            </div>
                            <div class="flex w-1/4 px-1">
                            <span
                                class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <font-awesome-icon icon="volume-low"/>
                            </span>
                                <input required v-model="form.engine_capacity" type="number" step="0.1"
                                       v-bind:class = "$page.props.errors.engine_capacity ? 'border-red-600' : ''"
                                       class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Обʼєм"/>
                            </div>
                            <div class="flex w-1/4 px-1">
                            <span
                                class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                               <font-awesome-icon icon="chess-knight"/>
                            </span>
                                <input required v-model="form.horsepower" type="number" step="1"
                                       v-bind:class = "$page.props.errors.horsepower ? 'border-red-600' : ''"
                                       class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Коні"/>
                            </div>
                            <div class="flex w-1/4 px-1">
                            <span
                                class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                               <font-awesome-icon icon="road"/>
                            </span>
                                <input required v-model="form.mileage" type="number" step="1"
                                       v-bind:class = "$page.props.errors.mileage ? 'border-red-600' : ''"
                                       class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Пробіг коней"/>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="flex w-1/3 px-1">
                                <input required v-model="form.state_number" type="text"
                                       v-bind:class = "$page.props.errors.state_number ? 'border-red-600' : ''"
                                       class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Номер авто"/>
                            </div>
                            <div class="flex w-1/3 px-1">
                                <input required v-model="form.vin_number" type="text"
                                       v-bind:class = "$page.props.errors.vin_number ? 'border-red-600' : ''"
                                       class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="VIN-номер"/>
                            </div>
                            <div class="w-1/3 px-1">
                                <select required v-model="form.manufactured_at" name="year"
                                        v-bind:class = "$page.props.errors.manufactured_at ? 'border-red-600' : ''"
                                        class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Рік випуску'"></option>
                                    <option v-for="year in years" :value="year" v-text="year"></option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="w-1/3 px-1">
                                <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                    <input type="checkbox" id="Purple" v-model="form.is_hide_state_number"
                                           class="checked:bg-purple-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                    <label for="Purple"
                                           class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                                <span class="text-gray-400 font-medium">Приховати номер авто</span>
                            </div>
                            <div class="w-1/3 px-1">
                                <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                    <input type="checkbox"  id="Purple" v-model="form.is_hide_vin_number"
                                           class="checked:bg-purple-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                    <label for="Purple"
                                           class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                                <span class="text-gray-400 font-medium">Приховати VIN-номер</span>
                            </div>
                            <div class="w-1/3 px-1">
                                <select required v-model="form.city_id"
                                        v-bind:class = "$page.props.errors.city_id ? 'border-red-600' : ''"
                                        class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Місто'"></option>
                                    <option v-for="city in cities" :value="city.id" v-text="city.name"></option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="flex w-1/3 px-1">
                            <span
                                class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <font-awesome-icon icon="mobile-screen-button"/>
                            </span>
                                <input required v-model="form.phone_number" type="text"
                                       v-bind:class = "$page.props.errors.phone_number ? 'border-red-600' : ''"
                                       class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Телефон"/>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="flex w-1/3 px-1">
                            <span
                                class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <font-awesome-icon icon="paper-plane"/>
                            </span>
                                <input v-model="form.telegram"
                                       type="text" name="telegram"
                                       class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Телеграм"/>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="flex w-1/3 px-1">
                            <span
                                class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <font-awesome-icon icon="envelope"/>
                            </span>
                                <input v-model="form.email"
                                       type="text" name="mail"
                                       class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Пошта"/>
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
</style>

<script>

import Layout from "../../../Layouts/Layout"
import {reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";

export default {
    props: {
        brands: Array,
        models: Array,
        cities: Array,
        years: Array,
        bodyTypes: Array,
    },
    data() {
        return {
            form: reactive({
                'brand_id': null,
                'model_id': null,
                'version': null,
                'price': null,
                'old_price': null,
                'body_type_id': null,
                'engine_capacity': null,
                'horsepower': null,
                'mileage': null,
                'city_id': null,
                'state_number': null,
                'is_hide_state_number': false,
                'vin_number': null,
                'is_hide_vin_number': false,
                'manufactured_at': null,
                'phone_number': null,
                'telegram': null,
                'email': null
            })
        }
    },
    components: { Layout },
    methods: {
        submit: function () {
            Inertia.post('/car/sell/', this.form)
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
