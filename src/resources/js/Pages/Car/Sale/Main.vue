<style>


swiper-container {
    width: 100%;
    height: 100%;
}

swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}

swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

body {
    background: #000;
    color: #000;
}

swiper-container {
    width: 100%;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
}

swiper-slide {
    background-size: cover;
    background-position: center;
}

.mySwiper {
    height: 60%;
    width: 100%;
}

.mySwiper2 {
    height: 20%;
    box-sizing: border-box;
    padding: 10px 0;
}

.mySwiper2 swiper-slide {
    width: 25%;
    height: 100%;
    opacity: 0.4;
}

.mySwiper2 .swiper-slide-thumb-active {
    opacity: 1;
}

swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
<template>
    <main class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative p-3">
        <Header/>
        <div class="flex items-start flex-auto mt-6">
            <div class="h-screen hidden lg:block relative lg:w-1/4 pr-2">
                <div
                    class="relative flex flex-col items-center rounded-[20px]  mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none justify-center">
                    <div class="mt-6 mb-3 flex gap-14 md:!gap-14">
                        <span class="text-3xl text-navy-700 dark:text-white">
                            {{ sale.price }} <span class="text-lg">UAH</span>
                        </span>

                        <div class="flex flex-col items-center justify-center text-red-400">
                            <p class="text-lg font-bold text-navy-700 dark:text-white">
                                12 000
                            </p>
                            <p class="text-sm font-normal">
                                <font-awesome-icon icon="arrow-trend-up" class="mr-2"/>
                                High
                            </p>
                        </div>
                        <div class="flex flex-col items-center justify-center text-orange-400">
                            <p class="text-lg font-bold text-navy-700 dark:text-white">
                                10 000
                            </p>
                            <p class="text-sm font-normal">
                                <font-awesome-icon icon="arrows-left-right" class="mr-2"/>
                                Middle
                            </p>
                        </div>
                        <div class="flex flex-col items-center justify-center text-green-400">
                            <p class="text-lg font-bold text-navy-700 dark:text-white">
                                9 000
                            </p>
                            <p class="text-sm font-normal">
                                <font-awesome-icon icon="arrow-trend-down" class="mr-2"/>
                                Low
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="rounded-[20px] text-center mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none mt-4 p-4">
                    <span class="text-3xl">{{ sale.brand.title }} {{ sale.model.title }} {{
                            sale.manufactured_at
                        }}</span>

                </div>
                <div class="rounded-[20px] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 mt-4 p-6">
                    <span class="text-lg text-gray-700">{{ sale.preference.description }}</span>
                </div>
                <div class="grid gap-4 grid-cols-2 mt-4">
                    <div v-if="sale.is_hide_vin_number" class="text-center text-gray-600 bg-white border-2 border-red-600/25 rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        VIN hidden
                    </div>
                    <div v-else class="flex justify-between text-gray-600 bg-white border-2 border-blue-400/50 bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <div>VIN:</div>
                        <div>{{ sale.vin_number }}</div>
                    </div>
                    <div v-if="sale.is_hide_state_number" class="text-center text-gray-600 bg-white border-2 border-red-600/25 rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        State Number hidden
                    </div>
                    <div v-else class="flex justify-between text-gray-600 bg-white border-2 border-blue-400/50 bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <div>Number:</div>
                        <div>{{ sale.state_number }}</div>
                    </div>
                </div>
                <div class="grid gap-4 grid-cols-3 mt-4">
                    <div class="text-gray-600 bg-white bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm font-normal text-center">
                            <span
                                class="inline-flex rounded-md bg-gray-100 px-2 py-1 mr-1 text-xs font-medium text-gray-600">
                                <font-awesome-icon icon="droplet"/>
                            </span>
                            Fuel Type
                        </p>
                        <p class="text-xl mt-2 text-center font-bold text-navy-700 dark:text-white">
                            {{ sale.preference.fuel_type.title }}
                        </p>
                    </div>
                    <div class="text-gray-600 bg-white bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm font-normal text-center">
                            <span
                                class="inline-flex rounded-md bg-gray-100 px-2 py-1 mr-1 text-xs font-medium text-gray-600">
                                <font-awesome-icon icon="gear"/>
                            </span>
                            Gearbox Type
                        </p>
                        <p class="text-xl mt-2 text-center font-bold text-navy-700 dark:text-white">
                            {{ sale.preference.gearbox_type.title }}
                        </p>
                    </div>
                    <div class="text-gray-600 bg-white bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm font-normal text-center">
                            <span
                                class="inline-flex rounded-md bg-gray-100 px-2 py-1 mr-1 text-xs font-medium text-gray-600">
                                <font-awesome-icon icon="car-side"/>
                            </span>
                            Drive Type
                        </p>
                        <p class="text-xl mt-2 text-center font-bold text-navy-700 dark:text-white">
                            {{ sale.preference.drive_type.title }}
                        </p>
                    </div>

                    <div class="text-gray-600 bg-white bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm font-normal text-center">
                            <span
                                class="inline-flex rounded-md bg-gray-100 px-2 py-1 mr-1 text-xs font-medium text-gray-600">
                                <font-awesome-icon icon="oil-can"/>
                            </span>
                            Capacity
                        </p>
                        <p class="text-xl mt-2 text-center font-bold text-navy-700 dark:text-white">
                            {{ sale.engine_capacity }}
                        </p>
                    </div>
                    <div class="text-gray-600 bg-white bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm font-normal text-center">
                            <span
                                class="inline-flex rounded-md bg-gray-100 px-2 py-1 mr-1 text-xs font-medium text-gray-600">
                                <font-awesome-icon icon="horse"/>
                            </span>
                            Horsepower
                        </p>
                        <p class="text-xl mt-2 text-center font-bold text-navy-700 dark:text-white">
                            {{ sale.horsepower }}
                        </p>
                    </div>
                    <div class="text-gray-600 bg-white bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm font-normal text-center">
                            <span
                                class="inline-flex rounded-md bg-gray-100 px-2 py-1 mr-1 text-xs font-medium text-gray-600">
                                <font-awesome-icon icon="palette"/>
                            </span>
                            Mileage
                        </p>
                        <p class="text-xl mt-2 text-center font-bold text-navy-700 dark:text-white">
                            {{ sale.preference.paint.title }}
                        </p>
                    </div>
                    <div class="text-gray-600 bg-white bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm font-normal text-center">
                            <span
                                class="inline-flex rounded-md bg-gray-100 px-2 py-1 mr-1 text-xs font-medium text-gray-600">
                                <font-awesome-icon icon="palette"/>
                            </span>
                            Paint Color
                        </p>
                        <p class="text-xl mt-2 text-center font-bold text-navy-700 dark:text-white">
                            {{ sale.preference.paint_type.title }}
                        </p>
                    </div>
                    <div class="text-gray-600 bg-white bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm font-normal text-center">
                            <span
                                class="inline-flex rounded-md bg-gray-100 px-2 py-1 mr-1 text-xs font-medium text-gray-600">
                                <font-awesome-icon icon="palette"/>
                            </span>
                            Paint Type
                        </p>
                        <p class="text-xl mt-2 text-center font-bold text-navy-700 dark:text-white">
                            {{ sale.preference.paint_condition.title }}
                        </p>
                    </div>
                    <div class="text-gray-600 bg-white bg-clip-border rounded-[20px] p-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm font-normal text-center">
                            <span
                                class="inline-flex rounded-md bg-gray-100 px-2 py-1 mr-1 text-xs font-medium text-gray-600">
                                <font-awesome-icon icon="road"/>
                            </span>
                            Paint Condition
                        </p>
                        <p class="text-xl mt-2 text-center font-bold text-navy-700 dark:text-white">
                            {{ sale.mileage }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="h-screen hidden lg:block relative lg:w-2/4 mx-2">
                <div class="bg-white h-full rounded-2xl dark:bg-gray-700 p-4">
                    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                      class="mySwiper"
                                      thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
                        <swiper-slide v-for="image in images">
                            <img class=" rounded-xl" :src="image" alt="">
                        </swiper-slide>

                    </swiper-container>

                    <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
                                      watch-slides-progress="true">
                        <swiper-slide v-for="image in images">
                            <img class="rounded-xl" :src="image" alt="">
                        </swiper-slide>
                    </swiper-container>
                </div>
            </div>

            <div class="h-screen hidden lg:block relative lg:w-1/4 pl-2">
                <div
                    class="relative flex flex-col items-center rounded-[20px]  mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none">
                    <div class="relative flex h-32 w-full justify-center rounded-xl bg-cover">
                        <img
                            src='https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/media/banner.ef572d78f29b0fee0a09.png'
                            class="absolute flex h-32 w-full justify-center rounded-xl bg-cover">
                        <div
                            class="absolute -bottom-12 flex h-[87px] w-[87px] items-center justify-center rounded-full border-[4px] border-white bg-pink-400 dark:!border-navy-700">
                            <img class="h-full w-full rounded-full"
                                 :src="sale.user.profile_photo_url"
                                 alt=""/>
                        </div>
                    </div>
                    <div class="mt-16 flex flex-col items-center">
                        <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                            {{ sale.user.name }}
                        </h4>
                        <p class="text-base font-normal text-gray-600">{{ sale.phone_number }}</p>
                    </div>
                    <div class="mt-6 mb-3 flex gap-14 md:!gap-14">
                        <a
                            :href="'mailto:' + sale.email"
                            class="flex flex-col items-center justify-center">
                            <p class="text-2xl font-bold text-navy-700 dark:text-white">
                                <font-awesome-icon icon="envelope"/>
                            </p>
                            <p class="text-sm font-normal text-gray-600">Email</p>
                        </a>
                        <a :href="'https://t.me/' + sale.telegram"
                           class="flex flex-col items-center justify-center">
                            <p class="text-2xl font-bold text-navy-700 dark:text-white">
                                <font-awesome-icon icon="paper-plane"/>
                            </p>
                            <p class="text-sm font-normal text-gray-600">Telegram</p>
                        </a>
                        <a :href="'tel:' + sale.phone_number"
                           class="flex flex-col items-center justify-center">
                            <p class="text-2xl font-bold text-navy-700 dark:text-white">
                                <font-awesome-icon icon="phone"/>
                            </p>
                            <p class="text-sm font-normal text-gray-600">Phone</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import Header from '@/Layouts/Partials/Header.vue';
import Layout from "@/Layouts/Layout.vue"
import {Link} from "@inertiajs/vue3";
import Label from "../../../Jetstream/Label.vue";

import {register} from 'swiper/element/bundle';

register();

export default {
    props: [
        'sale',
        'images'
    ],
    components: {
        Label,
        Link,
        Layout,
        Header
    },
    setup() {
        const spaceBetween = 10;
        const onProgress = (e) => {
            const [swiper, progress] = e.detail;
            console.log(progress)
        };

        const onSlideChange = (e) => {
            console.log('slide changed')
        }

        return {
            spaceBetween,
            onProgress,
            onSlideChange,
        };
    }
};
</script>
