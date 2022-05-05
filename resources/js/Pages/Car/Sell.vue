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
            <h2 class="flex justify-center my-5 text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                Форма Продажу
            </h2>
            <div class="w-full flex justify-between my-5">
                <div class="w-1/6 text-center relative tabs-line">
                    <span class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border border-indigo-600">
                        Основне
                    </span>
                </div>
                <div class="w-1/6 text-center relative tabs-line">
                    <span class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border">
                        Характеристики
                    </span>
                </div>
                <div class="w-1/6 text-center relative tabs-line">
                    <span class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border">
                        ВПП
                    </span>
                </div>
                <div class="w-1/6 text-center">
                    <span class="text-sm bg-white w-full font-bold inline-block py-2 px-2 uppercase rounded-full border">
                        Вроді опції
                    </span>
                </div>
            </div>
            <div class="w-full shadow-lg bg-white rounded-2xl mb-2">
                <div class="lg:flex flex-col lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:pb-16 lg:pt-6 lg:px-8 z-20">
                    <div class="w-full">
                        <form action="" method="" class="w-full">
                            <div class="w-full mt-4 flex">
                                <div class="w-1/4 px-1">
                                    <select name="brand" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                        <option>Brand</option>
                                    </select>
                                </div>
                                <div class="w-1/4 px-1">
                                    <select name="model" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                        <option>Model</option>
                                    </select>
                                </div>
                                <div class="w-2/4 px-1">
                                    <input type="text" name="version" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Версія"/>
                                </div>
                            </div>
                            <div class="w-full mt-4 flex">
                                <div class="w-2/4 px-1">
                                    <input type="text" name="price" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Ціна"/>
                                </div>
                                <div class="w-2/4 px-1">
                                    <input type="text" name="old_price" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Стара ціна"/>
                                </div>
                            </div>
                            <div class="w-full mt-4 flex">
                                <div class="w-1/4 px-1">
                                    <select name="body_type" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                        <option>Тип кузова</option>
                                    </select>
                                </div>
                                <div class="flex w-1/4 px-1">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                        <font-awesome-icon icon="volume-low" />
                                    </span>
                                    <input type="text" name="volume" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Обʼєм"/>
                                </div>
                                <div class="flex w-1/4 px-1">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                       <font-awesome-icon icon="chess-knight" />
                                    </span>
                                    <input type="text" name="horse" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Коні"/>
                                </div>
                                <div class="flex w-1/4 px-1">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                       <font-awesome-icon icon="road" />
                                    </span>
                                    <input type="text" name="mileage" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Пробіг коней"/>
                                </div>
                            </div>
                            <div class="w-full mt-4 flex">
                                <div class="flex w-1/3 px-1">
                                    <input type="text" name="auto_number" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Номер авто"/>
                                </div>
                                <div class="flex w-1/3 px-1">
                                    <input type="text" name="vin_number" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="vin-номер"/>
                                </div>
                                <div class="w-1/3 px-1">
                                    <select name="year" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                        <option>Рік випуску</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full mt-4 flex items-center">
                                <div class="w-1/3 px-1">
                                    <select name="city" class="rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                                        <option>Місто</option>
                                    </select>
                                </div>
                                <div class="w-1/3 px-1">
                                    <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                        <input type="checkbox" name="hide_vin" id="Purple" class="checked:bg-purple-500 outline-none focus:outline-none right-4 checked:right-0 duration-200 ease-in absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                                        <label for="Purple" class="block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                                    </div>
                                    <span class="text-gray-400 font-medium">Приховати VIN</span>
                                </div>
                            </div>
                            <div class="w-full mt-4 flex items-center">
                                <div class="flex w-1/3 px-1">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                        <font-awesome-icon icon="mobile-screen-button" />
                                    </span>
                                    <input type="text" name="mobile" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Телефон"/>
                                </div>
                            </div>
                            <div class="w-full mt-4 flex items-center">
                                <div class="flex w-1/3 px-1">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                        <font-awesome-icon icon="paper-plane" />
                                    </span>
                                    <input type="text" name="telegram" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Телеграм"/>
                                </div>
                            </div>
                            <div class="w-full mt-4 flex items-center">
                                <div class="flex w-1/3 px-1">
                                    <span class="rounded-l-md inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                        <font-awesome-icon icon="envelope" />
                                    </span>
                                    <input type="text" name="mail" class="rounded-r-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Пошта"/>
                                </div>
                            </div>
                            <div class="w-full mt-8 flex justify-end">
                                <div class="flex w-1/5 px-1">
                                    <button type="submit" class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full ">
                                        Далі
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
<style>
    .tabs-line:after {
        content: '';
        position: absolute;
        width: 60px;
        height: 1px;
        background: black;
        right: -46%;
        top: 50%;
    }
</style>
<script>
    export default {
        setup() {
            return {
            }
        },

    }
</script>
