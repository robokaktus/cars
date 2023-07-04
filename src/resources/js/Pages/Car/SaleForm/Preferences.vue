<template>
    <SaleForms>
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
                                <v-select :reduce="fuelType => fuelType.id"
                                          :class = "{ 'border-red-600': $page.props.errors.fuel_type_id }"
                                          class="custom-select w-full"
                                          placeholder="Тип палива"
                                          v-model="form.fuel_type_id" :options="fuelTypes" label="title">
                                    <template v-slot:option="fuelType">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ fuelType.title }}</div>
                                        </div>
                                    </template>
                                </v-select>
                            </div>
                            <div class="w-1/3 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="code-branch"/>
                                </span>
                                <v-select :reduce="gearboxType => gearboxType.id"
                                          :class = "{ 'border-red-600': $page.props.errors.gearbox_type_id }"
                                          class="custom-select w-full"
                                          placeholder="Тип коробки"
                                          v-model="form.gearbox_type_id" :options="gearboxTypes" label="title">
                                    <template v-slot:option="gearboxType">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ gearboxType.title }}</div>
                                        </div>
                                    </template>
                                </v-select>
                            </div>
                            <div class="w-1/3 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="truck-pickup"/>
                                </span>
                                <v-select :reduce="driveType => driveType.id"
                                          :class = "{ 'border-red-600': $page.props.errors.drive_type_id }"
                                          class="custom-select w-full"
                                          placeholder="Тип приводу"
                                          v-model="form.drive_type_id" :options="driveTypes" label="title">
                                    <template v-slot:option="driveType">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ driveType.title }}</div>
                                        </div>
                                    </template>
                                </v-select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="palette"/>
                                </span>
                                <v-select :reduce="paint => paint.id"
                                          :class = "{ 'border-red-600': $page.props.errors.paint_id }"
                                          class="custom-select w-full"
                                          placeholder="Колір"
                                          v-model="form.paint_id" :options="paints" label="title">
                                    <template v-slot:option="paint">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ paint.title }}</div>
                                        </div>
                                    </template>
                                </v-select>
                            </div>
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="eye-dropper"/>
                                </span>
                                <v-select :reduce="paintType => paintType.id"
                                          :class = "{ 'border-red-600': $page.props.errors.paint_type_id }"
                                          class="custom-select w-full"
                                          placeholder="Тип покраски"
                                          v-model="form.paint_type_id" :options="paintTypes" label="title">
                                    <template v-slot:option="paintType">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ paintType.title }}</div>
                                        </div>
                                    </template>
                                </v-select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="paint-roller"/>
                                </span>
                                <v-select :reduce="paintCondition => paintCondition.id"
                                          :class = "{ 'border-red-600': $page.props.errors.paint_condition_id }"
                                          class="custom-select w-full"
                                          placeholder="Стан покраски"
                                          v-model="form.paint_condition_id" :options="paintConditions" label="title">
                                    <template v-slot:option="paintCondition">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ paintCondition.title }}</div>
                                        </div>
                                    </template>
                                </v-select>
                            </div>
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="car-on"/>
                                </span>
                                <v-select :reduce="technicalCondition => technicalCondition.id"
                                          :class = "{ 'border-red-600': $page.props.errors.technical_condition_id }"
                                          class="custom-select w-full"
                                          placeholder="Технічний стан"
                                          v-model="form.technical_condition_id" :options="technicalConditions" label="title">
                                    <template v-slot:option="technicalCondition">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ technicalCondition.title }}</div>
                                        </div>
                                    </template>
                                </v-select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="ship"/>
                                </span>
                                <v-select :reduce="country => country.iso2"
                                          :class = "{ 'border-red-600': $page.props.errors.delivered_from_iso }"
                                          class="custom-select w-full"
                                          placeholder="Привезений із"
                                          v-model="form.delivered_from_iso" :options="countries" label="name">
                                    <template v-slot:option="country">
                                        <div class="flex">
                                            <div class="font-bold text-lg leading-5">{{ country.name }}</div>
                                        </div>
                                    </template>
                                </v-select>
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
    </SaleForms>
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

.custom-select .vs__dropdown-toggle {
    border-radius: 0 0.5rem 0.5rem 0;
}
.custom-select.vs--open .vs__dropdown-toggle {
    border-radius: 0 0.5rem 0 0;
}

</style>
<script>

import SaleForms from "../../../Layouts/SaleForms"
import {reactive} from "vue";
import { router } from '@inertiajs/vue3'
import vSelect from 'vue-select';
import 'vue-select/dist/vue-select.css';
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
    components: {Button, Input, SaleForms, vSelect },
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
