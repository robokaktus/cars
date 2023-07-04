<template>
    <main class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
        <div class="flex items-start justify-between">
            <div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
                <div class="bg-white h-full rounded-2xl dark:bg-gray-700">
                    <div class="flex items-center justify-center pt-6">
                        <svg width="35" height="30" viewBox="0 0 256 366" version="1.1" preserveAspectRatio="xMidYMid">
                            <defs>
                                <linearGradient x1="12.5189534%" y1="85.2128611%" x2="88.2282959%" y2="10.0225497%"
                                                id="linearGradient-1">
                                    <stop stop-color="#FF0057" stop-opacity="0.16" offset="0%">
                                    </stop>
                                    <stop stop-color="#FF0057" offset="86.1354%">
                                    </stop>
                                </linearGradient>
                            </defs>
                            <g>
                                <path
                                    d="M0,60.8538006 C0,27.245261 27.245304,0 60.8542121,0 L117.027019,0 L255.996549,0 L255.996549,86.5999776 C255.996549,103.404155 242.374096,117.027222 225.569919,117.027222 L145.80812,117.027222 C130.003299,117.277829 117.242615,130.060011 117.027019,145.872817 L117.027019,335.28252 C117.027019,352.087312 103.404567,365.709764 86.5997749,365.709764 L0,365.709764 L0,117.027222 L0,60.8538006 Z"
                                    fill="#001B38">
                                </path>
                                <circle fill="url(#linearGradient-1)"
                                        transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) "
                                        cx="147.013244" cy="147.014675" r="78.9933938">
                                </circle>
                                <circle fill="url(#linearGradient-1)" opacity="0.5"
                                        transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) "
                                        cx="147.013244" cy="147.014675" r="78.9933938">
                                </circle>
                            </g>
                        </svg>
                    </div>
                    <nav class="p-2">
                        <div class="mt-5">
                            <label>Price</label>
                            <Slider
                                v-model="filter.price"
                                :lazy="true"
                                :min="0"
                                :max="100000"
                                :step="1000"
                            />
                        </div>
                        <div class="mt-5 justify-between">
                            <Toggle v-model="filter.traded"
                                    :classes="{
                                      container: 'inline-block min-w-full rounded-full outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30',
                                      toggle: 'flex min-w-full h-5 rounded-full relative cursor-pointer transition items-center box-content border-2 text-xs leading-none',
                                      toggleOn: 'bg-blue-500 border-blue-500 justify-start text-white',
                                      label: 'text-center mx-5 border-box whitespace-nowrap select-none',
                                    }"
                                    onLabel="Traded"
                                    offLabel="Non Traded"
                            />
                        </div>
                        <div class="mt-5 justify-between">
                            <Toggle v-model="filter.exchanged"
                                    :classes="{
                                      container: 'inline-block min-w-full rounded-full outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30',
                                      toggle: 'flex min-w-full h-5 rounded-full relative cursor-pointer transition items-center box-content border-2 text-xs leading-none',
                                      toggleOn: 'bg-blue-500 border-blue-500 justify-start text-white',
                                      label: 'text-center mx-5 border-box whitespace-nowrap select-none',
                                    }"
                                    onLabel="Exchanged"
                                    offLabel="Non Exchanged"
                            />
                        </div>
                        <div class="mt-5 justify-between">
                            <Toggle v-model="filter.clearedThroughCustoms"
                                    :classes="{
                                      container: 'inline-block min-w-full rounded-full outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30',
                                      toggle: 'flex min-w-full h-5 rounded-full relative cursor-pointer transition items-center box-content border-2 text-xs leading-none',
                                      toggleOn: 'bg-blue-500 border-blue-500 justify-start text-white',
                                      label: 'text-center mx-5 border-box whitespace-nowrap select-none',
                                    }"
                                    onLabel="Cleared"
                                    offLabel="Non Cleared"
                            />
                        </div>
                        <div class="mt-5 justify-between">
                            <Toggle v-model="filter.crashed"
                                    :classes="{
                                      container: 'inline-block min-w-full rounded-full outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-30',
                                      toggle: 'flex min-w-full h-5 rounded-full relative cursor-pointer transition items-center box-content border-2 text-xs leading-none',
                                      toggleOn: 'bg-blue-500 border-blue-500 justify-start text-white',
                                      label: 'text-center mx-5 border-box whitespace-nowrap select-none',
                                    }"
                                    onLabel="Crashed"
                                    offLabel="Non Crashed"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.brand"
                                mode="single"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Brand"
                                :searchable="true"
                                :close-on-select="true"
                                :options="brands"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.model"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Models"
                                :disabled="!models"
                                :searchable="true"
                                :close-on-select="false"
                                :options="models"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.manufacturedAtBegin"
                                mode="single"
                                placeholder="Select Year Begin"
                                :close-on-select="true"
                                :options="yearsBegin"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.manufacturedAtEnd"
                                mode="single"
                                placeholder="Select Year End"
                                :close-on-select="true"
                                :options="yearsEnd"
                            />
                        </div>
                        <div class="mt-8">
                            <label>Mileage</label>
                            <Slider
                                v-model="filter.mileage"
                                :lazy="true"
                                :min="0"
                                :max="1000"
                                :step="1"
                            />
                        </div>
                        <div class="mt-8">
                            <label>Engine Capacity</label>
                            <Slider
                                v-model="filter.engineCapacity"
                                :lazy="true"
                                :min="0.0"
                                :max="10"
                                :step="0.1"
                            />
                        </div>

                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.regions"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="name"
                                placeholder="Select Regions"
                                :searchable="true"
                                :close-on-select="false"
                                :options="regions"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.cities"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="name"
                                placeholder="Select Cities"
                                :disabled="!cities"
                                :searchable="true"
                                :close-on-select="false"
                                :options="cities"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.bodyTypes"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Body Types"
                                :searchable="false"
                                :close-on-select="false"
                                :options="bodyTypes"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.driveTypes"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Drive Types"
                                :searchable="false"
                                :close-on-select="false"
                                :options="driveTypes"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.fuelTypes"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Fuel Types"
                                :searchable="false"
                                :close-on-select="false"
                                :options="fuelTypes"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.gearboxTypes"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Gearbox Types"
                                :searchable="false"
                                :close-on-select="false"
                                :options="gearboxTypes"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.technicalConditions"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Technical Conditions"
                                :searchable="false"
                                :close-on-select="false"
                                :options="technicalConditions"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.paints"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Paints"
                                :searchable="false"
                                :close-on-select="false"
                                :options="paints"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.paintTypes"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Paint Types"
                                :searchable="false"
                                :close-on-select="false"
                                :options="paintTypes"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.paintConditions"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Paint Conditions"
                                :searchable="false"
                                :close-on-select="false"
                                :options="paintConditions"
                            />
                        </div>
                        <div class="mt-5">
                            <Multiselect
                                v-model="filter.features"
                                mode="tags"
                                valueProp="id"
                                trackBy="id"
                                label="title"
                                placeholder="Select Features"
                                :searchable="true"
                                :close-on-select="false"
                                :options="features"
                            />
                        </div>
                    </nav>
                </div>
            </div>
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <Header/>
                <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    <div class="flex flex-col flex-wrap sm:flex-row">
                        <swiper v-for="sale in sales.data"
                                effect="flip"
                                :grabCursor="true"
                                :pagination="false"
                                :navigation="false"
                                :modules="modules"
                                class="w-full sm:w-1/2 xl:w-1/4 mb-4" style="padding: 0 10px"
                        >
                            <swiper-slide>
                                <a class="flex w-full flex-col justify-center bg-white rounded-2xl shadow-sm"
                                   :href="route('car.sale', sale.id)">
                                    <img class="aspect-video w-full rounded-t-2xl object-cover object-center"
                                         src="https://scuffedentertainment.com/wp-content/uploads/2021/11/what-car-suits-you-best-quiz.jpg"/>
                                    <div class="p-4">
                                        <div class="flex justify-between">
                                            <h1 class="text-2xl font-medium text-slate-600 pb-2">{{ sale.brand.title }}
                                                {{ sale.model.title }}</h1>
                                            <h2 class="text-blue-500">{{ sale.price }} UAH</h2>
                                        </div>
                                        <div class="flex justify-between">
                                            <p class="text-sm tracking-tight font-light text-slate-400 leading-6">
                                                <font-awesome-icon icon="road"/>
                                                {{ sale.mileage * 1000 }} km
                                            </p>
                                            <p class="text-sm tracking-tight font-light text-slate-400 leading-6">
                                                <font-awesome-icon icon="droplet"/>
                                                {{ sale.preference.fuel_type.title }}
                                            </p>
                                            <p class="text-sm tracking-tight font-light text-slate-400 leading-6">
                                                <font-awesome-icon icon="gears"/>
                                                {{ sale.preference.gearbox_type.title }}
                                            </p>
                                            <p class="text-sm tracking-tight font-light text-slate-400 leading-6">
                                                <font-awesome-icon icon="map"/> {{ sale.city.name}}
                                            </p>
                                        </div>

                                    </div>
                                </a>
                            </swiper-slide>
                            <swiper-slide>
                                <a class="w-full sm:w-1/2 xl:w-1/3 mb-4" style="padding: 0 10px">
                                    <div class="flex w-full flex-col justify-center bg-white rounded-2xl shadow-sm">
                                        <div class="p-4">
                                            <h1 class="text-2xl font-medium text-slate-600 pb-2">Second slide</h1>
                                            <p class="text-sm tracking-tight font-light text-slate-400 leading-6">
                                                second price</p>
                                        </div>
                                    </div>
                                </a>
                            </swiper-slide>
                        </swiper>
                    </div>
                    <div class="mt-4">
                        <Component
                            :is="link.url ? 'Link' : 'span'"
                            v-for="link in sales.links"
                            :href="link.url"
                            v-html="link.label"
                            class="px-1"
                            :class="link.url ? '' : 'text-gray-500'"
                        />
                    </div>
                </div>
            </div>
        </div>
    </main>

</template>

<script>
import Header from '@/Layouts/Partials/Header.vue';
import Multiselect from '@vueform/multiselect'
import Slider from '@vueform/slider'
import Toggle from '@vueform/toggle'


// import required modules
import {Link} from '@inertiajs/vue3'

import throttle from 'lodash/throttle'
import pickBy from 'lodash/pickBy'

// Import Swiper
import {Swiper, SwiperSlide} from "swiper/vue";
import "swiper/css";
import "swiper/css/effect-flip";

//Import icons
import {CheckIcon} from '@vue-hero-icons/solid';

//Import Jetstream
import Label from "../../../Jetstream/Label.vue";
import {EffectFlip} from "swiper/modules";

export default {
    props: [
        'sales',
        'brands',
        'models',
        'regions',
        'cities',
        'bodyTypes',
        'driveTypes',
        'fuelTypes',
        'gearboxTypes',
        'paints',
        'paintTypes',
        'paintConditions',
        'technicalConditions',
        'features',
        'yearsBegin',
        'yearsEnd',
        'filters',
    ],
    components: {
        Label,
        Swiper,
        SwiperSlide,
        Link,
        CheckIcon,
        Header,
        Multiselect,
        Slider,
        Toggle
    },

    data() {
        return {
            filter: {
                price: !this.filters.price ? [0, 300000] : this.filters.price,
                mileage: !this.filters.mileage ? [0, 1000] : this.filters.mileage,
                engineCapacity: !this.filters.engineCapacity ? [0.0, 10.0] : this.filters.engineCapacity,
                brand: this.filters.brand,
                models: this.filters.models,
                regions: this.filters.regions,
                cities: this.filters.cities,
                bodyTypes: this.filters.bodyTypes,
                driveTypes: this.filters.driveTypes,
                fuelTypes: this.filters.fuelTypes,
                gearboxTypes: this.filters.gearboxTypes,
                paints: this.filters.paints,
                paintTypes: this.filters.paintTypes,
                paintConditions: this.filters.paintConditions,
                technicalConditions: this.filters.technicalConditions,
                features: this.filters.features,
                traded: !this.filters.traded ? false : true,
                exchanged: !this.filters.exchanged ? false : true,
                clearedThroughCustoms: !this.filters.clearedThroughCustoms ? false : true,
                crashed: !this.filters.crashed ? false : true,
                manufacturedAtBegin: this.filters.manufacturedAtBegin,
                manufacturedAtEnd: this.filters.manufacturedAtEnd
            }
        }
    },

    watch: {
        filter: {
            handler: throttle(function () {
                console.log(this.filter)
                this.$inertia.get(
                    route('car.sales', pickBy(this.filter))
                )
            }, 100),
            deep: true
        }
    },

    setup() {
        return {
            modules: [EffectFlip],
        };
    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>
<style src="@vueform/slider/themes/default.css"></style>
<style src="@vueform/toggle/themes/default.css"></style>
