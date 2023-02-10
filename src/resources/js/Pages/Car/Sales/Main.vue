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
                        <div class="mt-6">
                            <Listbox as="div" v-model="filter.brand">
                                <ListboxLabel class="block text-sm font-medium text-gray-700">Brand</ListboxLabel>
                                <div class="relative mt-1">
                                    <ListboxButton
                                        class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                                        <span class="flex items-center">
                                          <span class="ml-3 block truncate">{{ filter.brand }}</span>
                                        </span>
                                        <span
                                            class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                        </span>
                                    </ListboxButton>
                                    <transition leave-active-class="transition ease-in duration-100"
                                                leave-from-class="opacity-100" leave-to-class="opacity-0">
                                        <ListboxOptions
                                            class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                            <ListboxOption as="template" v-for="brand in brands" :key="brand.id"
                                                           :value="brand.id" v-slot="{ active, selected }">
                                                <li :class="[active ? 'text-white bg-indigo-600' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                    <div class="flex items-center">
                                                        <span
                                                            :class="[selected ? 'font-semibold' : 'font-normal', 'ml-3 block truncate']">{{
                                                                brand.title
                                                            }}</span>
                                                    </div>

                                                    <span v-if="selected"
                                                          :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                                        <CheckIcon class="h-5 w-5" aria-hidden="true"/>
                                                    </span>
                                                </li>
                                            </ListboxOption>
                                        </ListboxOptions>
                                    </transition>
                                </div>
                            </Listbox>
                        </div>
                        <div class="mt-6">
                            <Listbox as="div" v-model="filter.model">
                                <ListboxLabel class="block text-sm font-medium text-gray-700">Model</ListboxLabel>
                                <div class="relative mt-1">
                                    <ListboxButton
                                        class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                                        <span class="flex items-center">
                                          <span class="ml-3 block truncate">{{ filter.model }}</span>
                                        </span>
                                        <span
                                            class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                        </span>
                                    </ListboxButton>
                                    <transition leave-active-class="transition ease-in duration-100"
                                                leave-from-class="opacity-100" leave-to-class="opacity-0">
                                        <ListboxOptions
                                            class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                            <ListboxOption as="template" v-for="model in models" :key="model.title"
                                                           :value="model.id" v-slot="{ active, selected }">
                                                <li :class="[active ? 'text-white bg-indigo-600' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                    <div class="flex items-center">
                                                        <span
                                                            :class="[selected ? 'font-semibold' : 'font-normal', 'ml-3 block truncate']">{{
                                                                model.title
                                                            }}</span>
                                                    </div>

                                                    <span v-if="selected"
                                                          :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                                        <CheckIcon class="h-5 w-5" aria-hidden="true"/>
                                                    </span>
                                                </li>
                                            </ListboxOption>
                                        </ListboxOptions>
                                    </transition>
                                </div>
                            </Listbox>
                        </div>
                        <div class="mt-6">
                            <Listbox as="div" v-model="filter.region">
                                <ListboxLabel class="block text-sm font-medium text-gray-700">Region</ListboxLabel>
                                <div class="relative mt-1">
                                    <ListboxButton
                                        class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                                        <span class="flex items-center">
                                          <span class="ml-3 block truncate">{{ filter.region }}</span>
                                        </span>
                                        <span
                                            class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                        </span>
                                    </ListboxButton>
                                    <transition leave-active-class="transition ease-in duration-100"
                                                leave-from-class="opacity-100" leave-to-class="opacity-0">
                                        <ListboxOptions
                                            class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                            <ListboxOption as="template" v-for="region in regions" :key="region.id"
                                                           :value="region.id" v-slot="{ active, selected }">
                                                <li :class="[active ? 'text-white bg-indigo-600' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                    <div class="flex items-center">
                                                        <span
                                                            :class="[selected ? 'font-semibold' : 'font-normal', 'ml-3 block truncate']">
                                                            {{ region.name }}</span>
                                                    </div>

                                                    <span v-if="selected"
                                                          :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                                        <CheckIcon class="h-5 w-5" aria-hidden="true"/>
                                                    </span>
                                                </li>
                                            </ListboxOption>
                                        </ListboxOptions>
                                    </transition>
                                </div>
                            </Listbox>
                        </div>
                        <div class="mt-6">
                            <Listbox as="div" v-model="filter.city">
                                <ListboxLabel class="block text-sm font-medium text-gray-700">City</ListboxLabel>
                                <div class="relative mt-1">
                                    <ListboxButton
                                        class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                                        <span class="flex items-center">
                                          <span class="ml-3 block truncate">{{ filter.city }}</span>
                                        </span>
                                        <span
                                            class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                        </span>
                                    </ListboxButton>
                                    <transition leave-active-class="transition ease-in duration-100"
                                                leave-from-class="opacity-100" leave-to-class="opacity-0">
                                        <ListboxOptions
                                            class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                            <ListboxOption as="template" v-for="city in cities" :key="city.id"
                                                           :value="city.id" v-slot="{ active, selected }">
                                                <li :class="[active ? 'text-white bg-indigo-600' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                    <div class="flex items-center">
                                                        <span
                                                            :class="[selected ? 'font-semibold' : 'font-normal', 'ml-3 block truncate']">
                                                            {{ city.name }}</span>
                                                    </div>

                                                    <span v-if="selected"
                                                          :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                                        <CheckIcon class="h-5 w-5" aria-hidden="true"/>
                                                    </span>
                                                </li>
                                            </ListboxOption>
                                        </ListboxOptions>
                                    </transition>
                                </div>
                            </Listbox>
                        </div>
                        <div class="mt-6">
                            <Listbox as="div" v-model="filter.bodyType">
                                <ListboxLabel class="block text-sm font-medium text-gray-700">Body Type</ListboxLabel>
                                <div class="relative mt-1">
                                    <ListboxButton
                                        class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                                        <span class="flex items-center">
                                          <span class="ml-3 block truncate">{{ filter.bodyType }}</span>
                                        </span>
                                        <span
                                            class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                        </span>
                                    </ListboxButton>
                                    <transition leave-active-class="transition ease-in duration-100"
                                                leave-from-class="opacity-100" leave-to-class="opacity-0">
                                        <ListboxOptions
                                            class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                            <ListboxOption as="template" v-for="bodyType in body_types" :key="bodyType.id"
                                                           :value="bodyType.id" v-slot="{ active, selected }">
                                                <li :class="[active ? 'text-white bg-indigo-600' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                    <div class="flex items-center">
                                                        <span
                                                            :class="[selected ? 'font-semibold' : 'font-normal', 'ml-3 block truncate']">{{
                                                                bodyType.title
                                                            }}</span>
                                                    </div>

                                                    <span v-if="selected"
                                                          :class="[active ? 'text-white' : 'text-indigo-600', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                                        <CheckIcon class="h-5 w-5" aria-hidden="true"/>
                                                    </span>
                                                </li>
                                            </ListboxOption>
                                        </ListboxOptions>
                                    </transition>
                                </div>
                            </Listbox>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <Header/>
                <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    <div class="flex flex-col flex-wrap sm:flex-row ">
                        <swiper v-for="sale in sales.data"
                                :effect="'flip'"
                                :grabCursor="true"
                                :pagination="false"
                                :navigation="false"
                                :modules="modules"
                                class="w-full sm:w-1/2 xl:w-1/4 mb-4" style="padding: 0 10px"
                        >
                            <swiper-slide>
                                <a class="flex w-full flex-col justify-center bg-white rounded-2xl shadow-sm" :href="route('car.sale', sale.id)">
                                    <img class="aspect-video w-full rounded-t-2xl object-cover object-center"
                                         src="https://scuffedentertainment.com/wp-content/uploads/2021/11/what-car-suits-you-best-quiz.jpg"/>
                                    <div class="p-4">
                                        <h1 class="text-2xl font-medium text-slate-600 pb-2">{{ sale.brand.title }}
                                            {{ sale.model.title }} {{ sale.manufactured_at }}</h1>
                                        <p class="text-sm tracking-tight font-light text-slate-400 leading-6">
                                            {{ sale.price }}</p>
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

import {Swiper, SwiperSlide} from "swiper/vue";

import throttle from 'lodash/throttle'
import pickBy from 'lodash/pickBy'
import mapValues from 'lodash/mapValues'

// Import Swiper styles
import "swiper/css";
import "swiper/css/effect-flip";

// import required modules
import {Link} from "@inertiajs/inertia-vue3";
import {EffectFlip, Pagination, Navigation} from "swiper";

import {ref} from 'vue';
import {Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions} from '@headlessui/vue';
import {CheckIcon} from '@vue-hero-icons/solid';

export default {
    props: [
        'sales',
        'brands',
        'models',
        'regions',
        'cities',
        'body_types',
        'filters'
    ],
    components: {
        Swiper,
        SwiperSlide,
        Link,
        Listbox,
        ListboxButton,
        ListboxLabel,
        ListboxOption,
        ListboxOptions,
        CheckIcon,
        Header
    },

    data() {
        return {
            filter: {
                brand: this.filters.brand,
                model: this.filters.model,
                region: this.filters.region,
                city: this.filters.city,
                bodyType: this.filters.bodyType
            }
        }
    },

    watch: {
        filter: {
            handler: throttle(function() {
                this.$inertia.replace(
                    route('car.catalog', pickBy(this.filter)), {
                            only: ['sales'],
                        }
                    )
            }, 500),
            deep: true
        }
    },
};
</script>
