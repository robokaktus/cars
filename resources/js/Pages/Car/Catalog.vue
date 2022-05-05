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
                    <nav class="mt-6 p-2">
                        <div class="w-64">
                            <div class="mt-1 relative">
                                <button type="button"
                                        class="relative w-full bg-white rounded-md shadow-lg pl-3 pr-10 py-3 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <span class="flex items-center">
                <img src="/images/person/2.jpeg" alt="person" class="flex-shrink-0 h-6 w-6 rounded-full"/>
                <span class="ml-3 block truncate">
                    John Jackson
                </span>
            </span>
                                    <span
                                        class="ml-3 absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                          clip-rule="evenodd">
                    </path>
                </svg>
            </span>
                                </button>
                                <div class="absolute mt-1 w-full z-10 rounded-md bg-white shadow-lg">
                                    <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label"
                                        aria-activedescendant="listbox-item-3"
                                        class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
                                        <li id="listbox-item-0" role="option"
                                            class="text-gray-900 cursor-default hover:bg-indigo-500 hover:text-white select-none relative py-2 pl-3 pr-9">
                                            <div class="flex items-center">
                                                <img src="/images/person/1.jpg" alt="person"
                                                     class="flex-shrink-0 h-6 w-6 rounded-full"/>
                                                <span class="ml-3 block font-normal truncate">
                            Mick Poulaz
                        </span>
                                            </div>
                                            <span class="absolute inset-y-0 right-0 flex items-center pr-4">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                  clip-rule="evenodd">
                            </path>
                        </svg>
                    </span>
                                        </li>
                                        <li id="listbox-item-1" role="option"
                                            class="text-gray-900 cursor-default select-none hover:bg-indigo-500 hover:text-white relative py-2 pl-3 pr-9">
                                            <div class="flex items-center">
                                                <img src="/images/person/1.jpg" alt="person"
                                                     class="flex-shrink-0 h-6 w-6 rounded-full"/>
                                                <span class="ml-3 block font-normal truncate">
                            Julien Schiano
                        </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <header class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40">
                    <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                        <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                            <div class="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                                <div class="relative flex items-center w-full lg:w-64 h-full group">
                                    <div
                                        class="absolute z-50 flex items-center justify-center block w-auto h-10 p-3 pr-2 text-sm text-gray-500 uppercase cursor-pointer sm:hidden">
                                        <svg fill="none" class="relative w-5 h-5" stroke-linecap="round"
                                             stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                             viewBox="0 0 24 24">
                                            <path
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <img
                                        class="absolute left-0 z-20 hidden w-4 h-4 ml-4 text-gray-500 pointer-events-none fill-current group-hover:text-gray-400 sm:block"
                                        src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                        alt="logo"/>
                                </div>
                            </div>
                            <div
                                class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                                <div class="mr-4">
                                    <a href="#"
                                       class="rounded-2xl py-1 px-4 bg-gradient-to-r from-green-400 to-blue-500 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2">
                                        Action
                                    </a>
                                </div>
                                <a href="#" class="block relative">
                                    <img alt="profil"
                                         src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/02/Floch-Forster.png?q=50&fit=crop&w=1400&dpr=1.5"
                                         class="mx-auto object-cover rounded-full h-10 w-10 ">
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    <div class="flex flex-col flex-wrap sm:flex-row ">
                        <a v-for="product in products" :key="product.id" :href="product.href"
                           class="w-full sm:w-1/2 xl:w-1/3 mb-4" style="padding: 0 10px">
                            <div class="flex w-full flex-col justify-center bg-white rounded-2xl shadow-sm">
                                <img class="aspect-video w-full rounded-t-2xl object-cover object-center"
                                     :src="product.imageSrc" :alt="product.imageAlt"/>
                                <div class="p-4">
                                    <h1 class="text-2xl font-medium text-slate-600 pb-2">{{ product.name }}</h1>
                                    <p class="text-sm tracking-tight font-light text-slate-400 leading-6">
                                        {{ product.price }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

</template>
<script>

import {Popover, PopoverButton, PopoverPanel} from "@headlessui/vue";
import {MenuIcon, XIcon} from "@heroicons/vue/outline";

const products = [
    {
        id: 1,
        name: 'Earthen Bottle',
        href: '#',
        price: '$48',
        imageSrc: 'https://scuffedentertainment.com/wp-content/uploads/2021/11/what-car-suits-you-best-quiz.jpg',
        imageAlt: 'Tall slender porcelain bottle with natural clay textured body and cork stopper.',
    },
    {
        id: 2,
        name: 'Nomad Tumbler',
        href: '#',
        price: '$35',
        imageSrc: 'https://scuffedentertainment.com/wp-content/uploads/2021/11/what-car-suits-you-best-quiz.jpg',
        imageAlt: 'Olive drab green insulated bottle with flared screw lid and flat top.',
    },
    {
        id: 3,
        name: 'Focus Paper Refill',
        href: '#',
        price: '$89',
        imageSrc: 'https://scuffedentertainment.com/wp-content/uploads/2021/11/what-car-suits-you-best-quiz.jpg',
        imageAlt: 'Person using a pen to cross a task off a productivity paper card.',
    },
    {
        id: 4,
        name: 'Machined Mechanical Pencil',
        href: '#',
        price: '$35',
        imageSrc: 'https://scuffedentertainment.com/wp-content/uploads/2021/11/what-car-suits-you-best-quiz.jpg',
        imageAlt: 'Hand holding black machined steel mechanical pencil with brass tip and top.',
    }
]
import { ref } from 'vue'
import { Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions } from '@headlessui/vue'
import { CheckIcon, SelectorIcon } from '@heroicons/vue/solid'

export default {
    setup() {
        return {
            products
        }
    }
}
</script>
