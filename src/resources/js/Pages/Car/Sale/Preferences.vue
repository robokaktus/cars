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
                            <label class="text-gray-700 w-full" for="description">
                                <textarea v-model="form.description"
                                    class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    id="description"
                                    placeholder="Опис..."
                                    rows="5"
                                    cols="40"></textarea>
                            </label>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-1/3 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="droplet"/>
                                </span>
                                <select v-model="form.fuel_type_id" required
                                        v-bind:class = "$page.props.errors.fuel_type_id ? 'border-red-600' : ''"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Тип палива'"></option>
                                    <option v-for="fuelType in fuelTypes" :value="fuelType.id" v-text="fuelType.title"></option>
                                </select>
                            </div>
                            <div class="w-1/3 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="code-branch"/>
                                </span>
                                <select v-model="form.gearbox_type_id" required
                                        v-bind:class = "$page.props.errors.gearbox_type_id ? 'border-red-600' : ''"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Тип коробки'"></option>
                                    <option v-for="gearboxType in gearboxTypes" :value="gearboxType.id" v-text="gearboxType.title"></option>
                                </select>
                            </div>
                            <div class="w-1/3 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="truck-pickup"/>
                                </span>
                                <select v-model="form.drive_type_id" required
                                        v-bind:class = "$page.props.errors.drive_type_id ? 'border-red-600' : ''"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Тип приводу'"></option>
                                    <option v-for="driveType in driveTypes" :value="driveType.id" v-text="driveType.title"></option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="palette"/>
                                </span>
                                <select v-model="form.paint_id" required
                                        v-bind:class = "$page.props.errors.paint_id ? 'border-red-600' : ''"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Колір'"></option>
                                    <option v-for="paint in paints" :value="paint.id" v-text="paint.title"></option>
                                </select>
                            </div>
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="eye-dropper"/>
                                </span>
                                <select v-model="form.paint_type_id" required
                                        v-bind:class = "$page.props.errors.paint_type_id ? 'border-red-600' : ''"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Тип покраски'"></option>
                                    <option v-for="paintType in paintTypes" :value="paintType.id" v-text="paintType.title"></option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="paint-roller"/>
                                </span>
                                <select v-model="form.paint_condition_id" required
                                        v-bind:class = "$page.props.errors.paint_condition_id ? 'border-red-600' : ''"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Стан покраски'"></option>
                                    <option v-for="paintCondition in paintConditions" :value="paintCondition.id" v-text="paintCondition.title"></option>
                                </select>
                            </div>
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="car-on"/>
                                </span>
                                <select v-model="form.technical_condition_id" required
                                        v-bind:class = "$page.props.errors.technical_condition ? 'border-red-600' : ''"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Технічний стан'"></option>
                                    <option v-for="technicalCondition in technicalConditions" :value="technicalCondition.id" v-text="technicalCondition.title"></option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="ship"/>
                                </span>
                                <select v-model="form.delivered_from_iso"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option :value="null" v-text="'Привезений із'"></option>
                                    <option v-for="country in countries" :value="country.iso2" v-text="country.name"></option>
                                </select>
                            </div>
                            <div class="w-2/4 px-1 flex">
                                <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="coins"/>
                                </span>
                                <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Розтаможений
                                </span>
                                <input v-model="form.is_cleared_through_customs" required
                                    type="checkbox" id="cleared" hidden class="hidden">
                                <label for="cleared" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
                                </label>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="w-2/4 px-1 flex">
                                <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="arrow-trend-down"/>
                                </span>
                                <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Торг
                                </span>
                                <input v-model="form.is_traded" required
                                    type="checkbox" id="auction" hidden class="hidden">
                                <label for="auction" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
                                </label>
                            </div>
                            <div class="w-2/4 px-1 flex">
                                <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="dollar-sign"/>
                                </span>
                                <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Обмін
                                </span>
                                <input v-model="form.is_exchanged" required
                                       type="checkbox" id="exchanged" hidden class="hidden">
                                <label for="exchanged" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
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
import {reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";
import Input from "../../../Jetstream/Input";
import Button from "../../../Jetstream/Button";

export default {
    props: {
        saleId: Number,
        paints: Array,
        paintTypes: Array,
        paintConditions: Array,
        technicalConditions: Array,
        fuelTypes: Array,
        gearboxTypes: Array,
        driveTypes: Array,
        countries: Array
    },
    data() {
        return {
            form: reactive({
                'description': null,
                'paint_id': null,
                'paint_type_id': null,
                'paint_condition_id': null,
                'technical_condition_id': null,
                'fuel_type_id': null,
                'gearbox_type_id': null,
                'drive_type_id': null,
                'delivered_from_iso': null,
                'is_cleared_through_customs': false,
                'is_traded': false,
                'is_exchanged': false
            })
        }
    },
    components: {Button, Input, Layout },
    methods: {
        submit: function () {
            Inertia.post('/car/sale/' + this.saleId + '/preferences', this.form)
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
