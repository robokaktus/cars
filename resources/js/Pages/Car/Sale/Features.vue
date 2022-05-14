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
                    class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border border-indigo-600">
                    Галерея
                </span>
            </div>
            <div class="w-1/6 text-center relative tabs-line">
                <span
                    class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border border-indigo-600">
                    ДТП
                </span>
            </div>
            <div class="w-1/6 text-center">
                <span
                    class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border border-indigo-600">
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
                            <div class="w-1/3 px-1 flex ">
                                 <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="paw"/>
                                </span>
                                <input type="checkbox" id="skin" hidden name="skin" class="hidden">
                                <label for="skin" class="w-full w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Шкіра</span>
                                </label>
                            </div>
                            <div class="w-1/3 px-1 flex ">
                                 <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="parking"/>
                                </span>
                                <input type="checkbox" id="patron" hidden name="patron" class="hidden">
                                <label for="patron" class="w-full w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Пакртронік</span>
                                </label>
                            </div>
                            <div class="w-1/3 px-1 flex ">
                                 <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="volume-high"/>
                                </span>
                                <input type="checkbox" id="subwoofer" hidden name="subwoofer" class="hidden">
                                <label for="subwoofer" class="w-full w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Сабвуфер</span>
                                </label>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            <div class="w-1/3 px-1 flex ">
                                 <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="car"/>
                                </span>
                                <input type="checkbox" id="new_rubber" hidden name="new_rubber" class="hidden">
                                <label for="new_rubber" class="w-full w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>Нова резина</span>
                                </label>
                            </div>
                            <div class="w-1/12 px-1 flex ">
                                <span class="w-full w-full border text-base font-medium rounded-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                      <font-awesome-icon icon="plus"/>
                                </span>
                            </div>
                        </div>
                        <div class="w-full mt-8 flex justify-end">
                            <div class="flex w-1/5 px-1">
                                <a href="/"
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
