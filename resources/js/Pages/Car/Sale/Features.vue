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
                        <div class="w-full flex flex-wrap">
                            <div v-for="activeFeature in activeFeatures" :key="activeFeature.id" :data-feature-id="activeFeature.id" class="w-1/3 px-1 flex mt-4 active-feature">
                                 <span
                                     class="rounded-l-md inline-flex items-center px-3 border-t bg-white border-l border-b border-gray-300 text-gray-500 shadow-sm text-sm">
                                   <font-awesome-icon icon="paw"/>
                                </span>
                                <input type="checkbox" :id="activeFeature.alias" hidden :name="activeFeature.alias" checked class="hidden">
                                <label :for="activeFeature.alias"
                                       class="w-full relative border-t border-b border-r border-l text-base font-medium rounded-r-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <span>{{ activeFeature.title }}</span>
                                    <button class="absolute right-1.5 uppercase rounded-full" @click="deleteFeature($event)">
                                        <font-awesome-icon icon="xmark" />
                                    </button>
                                </label>
                            </div>
                            <div class="relative px-1 w-1/12 mt-4">
                                <button @click="openDropdown($event)" type="button" class="w-full border text-base font-medium rounded-md border-gray-300 hover:bg-gray-100 cursor-pointer text-gray-700 px-4 py-2 text-center">
                                    <font-awesome-icon icon="plus" class="pointer-events-none transition-all rotate-0"/>
                                </button>
                                <div class="absolute mt-1 w-60 z-10 rounded-md bg-white shadow-lg hidden scale">
                                    <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3" class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
                                        <li v-for="feature in features" :key="feature.id" :data-feature-id="feature.id" @click="addFeature($event)" role="option" class="text-gray-900 cursor-default hover:bg-indigo-500 hover:text-white select-none relative py-2 pl-3 pr-9">
                                            <div class="flex items-center">
                                                <span class="ml-3 block font-normal truncate">
                                                    {{ feature.title }}
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
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
.scale {
    animation: pulsing .2s;
}
@-webkit-keyframes pulsing {
    0% {
        -webkit-transform: scale(0.5, 0.5);
        transform: scale(0.5, 0.5)
    }
    100% {
        -webkit-transform: scale(1.0, 1.0);
        transform: scale(1.0, 1.0);
    }
}

@keyframes pulsing {
    0% {
        -webkit-transform: scale(0.5, 0.5);
        transform: scale(0.5, 0.5)
    }
    100% {
        -webkit-transform: scale(1.0, 1.0);
        transform: scale(1.0, 1.0);
    }
}

</style>
<script>

import Layout from "../../../Layouts/Layout"

export default {
    components: { Layout },
    data() {
        return {
            features: [
                {
                    id: 1,
                    title: 'test title',
                    alias: 'test_title'
                },
                {
                    id: 2,
                    title: 'test title2',
                    alias: 'test_title2'
                },
                {
                    id: 3,
                    title: 'test title3',
                    alias: 'test_title3'
                },
            ],
            activeFeatures: []

        }
    },
    methods: {
        openDropdown: function (event) {
            let button = event.target.querySelector('svg');
            let dropdown = event.target.nextSibling;

            button.classList.toggle('rotate-90')
            button.classList.toggle('rotate-0')

            dropdown.classList.toggle('hidden')

        },
        addFeature: function (event) {
            event.target.closest('.scale').classList.add('hidden')
            let selectedId = event.target.closest('li').getAttribute('data-feature-id')

            let selectedFeature = this.features.find(el => el.id == selectedId);
            this.features.splice(this.features.indexOf(selectedFeature), 1)
            this.activeFeatures.push(selectedFeature)
        },
        deleteFeature: function(event) {
            let selectedId = event.target.closest('.active-feature').getAttribute('data-feature-id')

            let selectedFeature = this.activeFeatures.find(el => el.id == selectedId);
            this.activeFeatures.splice(this.activeFeatures.indexOf(selectedFeature), 1)
            this.features.push(selectedFeature)
        }
    }

}
</script>
