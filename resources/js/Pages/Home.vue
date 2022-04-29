<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
    <div class="container mx-auto">
        <main>
            <header class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40 mb-2">
                <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                    <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                        <div class="container relative left-0 z-50 flex w-3/4 h-auto h-full">
                            <div class="flex items-center">
                                <div class="flex items-center md:w-auto mr-2">
                                    <img class="h-8 w-auto sm:h-10"
                                         src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                                         alt="logo"/>
                                </div>
                                <h1 class="text-2xl">Robocar</h1><br>
                            </div>
                        </div>
                        <div class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                            <div class="mr-4">
                                <a href="#" class="block relative">
                                    <img alt="profil"
                                         src="https://static1.cbrimages.com/wordpress/wp-content/uploads/2022/02/Floch-Forster.png?q=50&fit=crop&w=1400&dpr=1.5"
                                         class="mx-auto object-cover rounded-full h-10 w-10 ">
                                </a>
                            </div>
                            <div >
                                <a href="#"
                                   class="rounded-2xl py-1 px-4 bg-gradient-to-r from-green-400 to-blue-500 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2">
                                    Action
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="w-full shadow-lg bg-white rounded-2xl mb-2">
                <div class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                    <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                        <span class="block">
                            Do you like cars?
                        </span>
                        <span class="block text-indigo-500">
                            Then you are in the right place.
                        </span>
                    </h2>
                    <div class="lg:mt-0 lg:flex-shrink-0">
                        <div class=" inline-flex rounded-md shadow">
                            <button type="button"
                                    class="py-4 px-6  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Let's Goooo
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full shadow-lg bg-white rounded-2xl mb-2 bg-gradient-to-r from-cyan-500 to-pink-500 h-80 px-8 flex">
                <div class="lg:flex lg:items-center lg:justify-between w-full mx-auto">
                    <div class="lg:mt-0 lg:flex-shrink-0">
                        <div class=" inline-flex rounded-md shadow">
                            <button type="button"
                                    class="py-4 px-6  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Купити
                            </button>
                        </div>
                    </div>
                    <div class="lg:mt-0 lg:flex-shrink-0">
                        <div class=" inline-flex rounded-md shadow">
                            <button type="button"
                                    class="py-4 px-6  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Продати
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between flex-wrap" style="margin: 0 -10px;">
                <a v-for="product in products" :key="product.id" :href="product.href" class="w-1/3 mb-2" style="padding: 0 10px">
                    <div class="flex w-full flex-col justify-center bg-white rounded-2xl shadow-sm">
                        <img class="aspect-video w-full rounded-t-2xl object-cover object-center" :src="product.imageSrc" :alt="product.imageAlt" />
                        <div class="p-4">
                            <h1 class="text-2xl font-medium text-slate-600 pb-2">{{ product.name }}</h1>
                            <p class="text-sm tracking-tight font-light text-slate-400 leading-6"> {{ product.price }}</p>
                        </div>
                    </div>
                </a>
            </div>
            <footer class="bg-white shadow-lg dark:bg-gray-800 w-full py-8 rounded-2xl">
                <div class="max-w-screen-xl mx-auto px-4">
                    <ul class="max-w-screen-md mx-auto text-lg font-light flex flex-wrap justify-between">
                        <li class="my-2">
                            <a class="text-gray-400 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white transition-colors duration-200" href="#">
                                FAQ
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="text-gray-400 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white transition-colors duration-200" href="#">
                                Configuration
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="text-gray-400 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white transition-colors duration-200" href="#">
                                Github
                            </a>
                        </li>
                        <li class="my-2">
                            <a class="text-gray-400 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white transition-colors duration-200" href="#">
                                LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </main>
    </div>
</template>

<script>
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
    },
    // More products...
]

import {Popover, PopoverButton, PopoverPanel} from '@headlessui/vue'
import {MenuIcon, XIcon} from '@heroicons/vue/outline'

const navigation = [
    {name: 'Product', href: '#'},
    {name: 'Features', href: '#'},
    {name: 'Marketplace', href: '#'},
    {name: 'Company', href: '#'},
]

export default {
    сomponents: {
        Popover,
        PopoverButton,
        PopoverPanel,
        MenuIcon,
        XIcon,
    },
    setup() {
        return {
            products,
            navigation,
        }
    },

}
</script>
