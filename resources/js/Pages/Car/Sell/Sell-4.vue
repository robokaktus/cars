<template>
    <div class="container mx-auto min-h-full flex flex-col">
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
                        <div>
                            <a href="#"
                               class="rounded-2xl py-1 px-4 bg-gradient-to-r from-green-400 to-blue-500 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2">
                                Action
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="shrink grow basis-auto">
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
                                <div class="w-2/4 px-1 flex">
                                    <span class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                       <font-awesome-icon icon="car-burst"/>
                                    </span>
                                        <span class="w-6/12 inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-700 shadow-sm text-base justify-center">
                                        ДТП
                                    </span>
                                    <input type="checkbox" id="dtp" hidden name="dtp" class="hidden">
                                    <label for="dtp" class="w-6/12 w-full border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                        <span>Так</span>
                                    </label>
                                </div>
                            </div>
                            <div class="w-full mt-4 flex">
                                <label class="text-gray-700 w-full" for="description">
                                    <textarea
                                        class="flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                        id="description"
                                        placeholder="Опис..."
                                        name="dtp_description"
                                        rows="5"
                                        cols="40"></textarea>
                                </label>
                            </div>
                            <div class="w-full mt-8 flex justify-end">
                                <div class="flex w-1/5 px-1">
                                    <a href="/car/sell-5"
                                       class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-full ">
                                        Далі
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="bg-white shadow-lg dark:bg-gray-800 w-full py-8 rounded-2xl">
            <div class="max-w-screen-xl mx-auto px-4">
                <ul class="max-w-screen-md mx-auto text-lg font-light flex flex-wrap justify-between">
                    <li class="my-2">
                        <a class="text-gray-400 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white transition-colors duration-200"
                           href="#">
                            FAQ
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="text-gray-400 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white transition-colors duration-200"
                           href="#">
                            Configuration
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="text-gray-400 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white transition-colors duration-200"
                           href="#">
                            Github
                        </a>
                    </li>
                    <li class="my-2">
                        <a class="text-gray-400 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white transition-colors duration-200"
                           href="#">
                            LinkedIn
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
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
export default {
    setup() {
        return {}
    },

}
</script>
