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
                    <form action="" method="" class="w-full">
                        <div class="w-full mt-4 flex">
                            <label class="text-gray-700 w-full" for="description">
                                <textarea
                                    class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                    id="description"
                                    placeholder="Опис..."
                                    name="description"
                                    rows="5"
                                    cols="40"></textarea>
                            </label>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-1/3 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="droplet"/>
                                </span>
                                <select name="fuel_type"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option>Тип палива</option>
                                </select>
                            </div>
                            <div class="w-1/3 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="code-branch"/>
                                </span>
                                <select name="transmission"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option>Тип коробки</option>
                                </select>
                            </div>
                            <div class="w-1/3 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="truck-pickup"/>
                                </span>
                                <select name="drive"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option>Тип приводу</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="palette"/>
                                </span>
                                <select name="color"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option>Колір</option>
                                </select>
                            </div>
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="eye-dropper"/>
                                </span>
                                <select name="color_type"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option>Тип покраски</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="paint-roller"/>
                                </span>
                                <select name="color_state"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option>Стан покраски</option>
                                </select>
                            </div>
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="car-on"/>
                                </span>
                                <select name="car_condition"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option>Стан авто</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex items-center">
                            <div class="w-2/4 px-1 flex ">
                                <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="ship"/>
                                </span>
                                <select name="brought_from"
                                        class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                    <option>Привезений з</option>
                                </select>
                            </div>
                            <div class="w-2/4 px-1 flex">
                                <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="coins"/>
                                </span>
                                <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Розтаможений
                                </span>
                                <input type="checkbox" id="cleared" hidden name="cleared" class="hidden">
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
                                <input type="checkbox" id="auction" hidden name="auction" class="hidden">
                                <label for="auction" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Так</span>
                                </label>
                            </div>
                            <div class="w-2/4 px-1 flex">
                                <select id="Currency" name="swap_currency" class="w-1/12 focus:ring-indigo-500 focus:border-indigo-500 rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base cursor-pointer pl-2">
                                    <option selected>
                                        $
                                    </option>
                                </select>
                                <span class="w-5/12 inline-flex items-center px-3 border-t bg-white border-b border-l border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                    Обмін
                                </span>
                                <div class="w-3/12 flex">
                                    <input type="radio" id="swap_true" hidden name="swap" value="true" class="hidden">
                                    <label for="swap_true" class="w-full border-t border-b border-r border-l text-base font-medium border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                        <span>Так</span>
                                    </label>
                                </div>
                                <div class="w-3/12 flex">
                                    <input type="radio" id="swap_false" hidden name="swap" value="false" class="hidden">
                                    <label for="swap_false" class="w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                        <span>Ні</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="w-full mt-8 flex justify-end">
                            <div class="flex w-1/5 px-1">
                                <a href="/car/sell-3"
                                   class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full ">
                                    Далі
                                </a>
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

export default {
    setup() {
        return {}
    },
    components: { Layout }

}
</script>
