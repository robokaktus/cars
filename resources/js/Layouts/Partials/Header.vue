<template>
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
                        <h1 class="text-2xl " v-on:click="showFlash">Robocar</h1><br>
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
</template>

<script>
export default {
    name: "Header",
    methods: {
        showFlash: function () {
            this.$flashMessage.show({
                type: 'error',
                title: 'Error Message Title',
                message: 'Oh, you broke my heart! Shame on you!'
            });
        }
    },
}
</script>

