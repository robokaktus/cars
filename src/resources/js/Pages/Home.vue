<template>
    <Layout>
        <div class="w-full shadow-lg bg-white rounded-2xl mb-2 overflow-hidden">
            <div class="banner-image lg:flex lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                    <span class="block">
                        Do you like cars?
                    </span>
                    <span class="block text-indigo-500">
                        Then you are in the right place.
                    </span>
                </h2>
            </div>
        </div>
        <div class="w-full shadow-lg bg-white rounded-2xl mb-2 bg-gradient-to-r from-cyan-500 to-pink-500 h-80 px-8 flex">
            <div class="lg:flex lg:items-center lg:justify-between w-full mx-auto">
                <div class="lg:mt-0 lg:flex-shrink-0">
                    <div class=" inline-flex rounded-md flex flex-col">
                        <div class="mb-4">
                            <h3 class="text-5xl font-semibold mb-2">Text</h3>
                            <span class="text-xl pl-2">Subtext</span>
                        </div>
                        <button type="button"
                                class="py-4 px-6  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                            Купити
                        </button>
                    </div>
                </div>
                <div class="lg:mt-0 lg:flex-shrink-0">
                    <div class="inline-flex rounded-md flex flex-col">
                        <div class="mb-4 text-right ">
                            <h3 class="text-5xl font-semibold mb-2">Text</h3>
                            <span class="text-xl pl-2">Subtext</span>
                        </div>
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
                <div class="flex w-full flex-col justify-center bg-white rounded-2xl shadow-lg">
                    <img class="aspect-video w-full rounded-t-2xl object-cover object-center" :src="product.imageSrc" :alt="product.imageAlt" />
                    <div class="p-4">
                        <h1 class="text-2xl font-medium text-slate-600 pb-2">{{ product.name }}</h1>
                        <p class="text-sm tracking-tight font-light text-slate-400 leading-6"> {{ product.price }}</p>
                    </div>
                </div>
            </a>
        </div>
    </Layout>
</template>

<style>
.banner-image {
    background-image: url('/image/main/banner.jpg');
    background-position: 1284px -1904px;
}
</style>

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
import Layout from "../Layouts/Layout"

const navigation = [
    {name: 'Product', href: '#'},
    {name: 'Features', href: '#'},
    {name: 'Marketplace', href: '#'},
    {name: 'Company', href: '#'},
]

export default {
    props: {
        sales: Array
    },
    components: {
        Popover,
        PopoverButton,
        PopoverPanel,
        MenuIcon,
        XIcon,
        Layout,
    },
    setup() {
        return {
            products,
            navigation,
        }
    },

}
</script>
