<template>
    <SaleForm>
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
                                <v-select :reduce="brand => brand.id"
                                          :class = "{ 'border-red-600': $page.props.errors.brand_id }"
                                          class="custom-select"
                                          placeholder="Марка"
                                          v-model="form.brand_id" :options="brands" label="title">
                                    <template v-slot:option="brand">
                                        <div class="flex">
                                            <div class="mr-2">
                                                <font-awesome-icon icon="volume-low"/>
                                            </div>
                                            <div class="">
                                                <div class="font-bold text-lg leading-5">{{ brand.title }}</div>
                                                <span>Description</span>
                                            </div>
                                        </div>
                                    </template>
                                </v-select>
                            </div>
                            <div class="w-1/4 px-1">
                                <v-select :reduce="model => model.id"
                                          :disabled=brandEmpty
                                          :class = "{ 'border-red-600': $page.props.errors.model_id }"
                                          class="custom-select"
                                          placeholder="Модель"
                                          v-model="form.model_id" :options="newModels" label="title">
                                    <template v-slot:option="model">
                                        <div class="flex">
                                            <div class="mr-2">
                                                <font-awesome-icon icon="volume-low"/>
                                            </div>
                                            <div class="">
                                                <div class="font-bold text-lg leading-5">{{ model.title }}</div>
                                                <span>Description</span>
                                            </div>
                                        </div>
                                    </template>
                                </v-select>
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
                                <v-select :reduce="bodyType => bodyType.id"
                                          :class = "{ 'border-red-600': $page.props.errors.body_type_id }"
                                          class="custom-select"
                                          placeholder="Тип кузову"
                                          v-model="form.body_type_id" :options="bodyTypes" label="title">
                                    <template v-slot:option="bodyType">
                                        <div class="flex">
                                            <div class="mr-2">
                                                <font-awesome-icon icon="volume-low"/>
                                            </div>
                                            <div class="">
                                                <div class="font-bold text-lg leading-5">{{ bodyType.title }}</div>
                                                <span>Description</span>
                                            </div>
                                        </div>
                                    </template>
                                </v-select>
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
                                <v-select :reduce="year => year"
                                          :class = "{ 'border-red-600': $page.props.errors.manufactured_at }"
                                          class="custom-select"
                                          placeholder="Рік випуску"
                                          v-model="form.manufactured_at" :options="years" label="year">
                                    <template v-slot:option="year">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ year.year }}</div>
                                        </div>
                                    </template>
                                </v-select>

                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-1/3 px-1 flex items-center">
                                <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                    <input type="checkbox" id="Purple" v-model="form.is_hide_state_number"
                                           class="checked:bg-purple-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                    <label for="Purple"
                                           class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                                <span class="text-gray-400 font-medium">Приховати номер авто</span>
                            </div>
                            <div class="w-1/3 px-1 flex items-center">
                                <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                    <input type="checkbox"  id="Purple" v-model="form.is_hide_vin_number"
                                           class="checked:bg-purple-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                    <label for="Purple"
                                           class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                                <span class="text-gray-400 font-medium">Приховати VIN-номер</span>
                            </div>
                            <div class="w-1/3 px-1">
                                <v-select :reduce="city => city.id"
                                          :class = "{ 'border-red-600': $page.props.errors.city_id }"
                                          class="custom-select"
                                          placeholder="Місто"
                                          v-model="form.city_id" :options="cities" label="name">
                                    <template v-slot:option="city">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ city.name }}</div>
                                        </div>
                                    </template>
                                </v-select>
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
    </SaleForm>
</template>

<script>

import SaleForm from "../../../Layouts/SaleForms"
import {reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";
import vSelect from 'vue-select';
import 'vue-select/dist/vue-select.css';
import axios from "axios";

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
            brandEmpty: true,
            newModels: this.models,
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
    components: { SaleForm, vSelect },
    methods: {
        submit: function () {
            Inertia.post('/car/sale/', this.form)
        },
    },
    watch: {
        'form.brand_id' (value) {
            if (value == null) {
                return;
            }
            axios.post(`/brands/${value}/load-models`)
                .then((response) => {
                    if (Array.isArray(response.data)) {
                        this.form.model_id = null;
                        this.brandEmpty = false;
                        this.newModels = response.data;
                    }
                })
                .catch((error) => console.log(error))
        }
    },
    // updated() {
    //     Object.values(this.$attrs["errors"]).forEach((item) => {
    //         this.$flashMessage.show({
    //             type: 'error',
    //             title: item,
    //             message: item
    //         });
    //     });
    // }

}
</script>
