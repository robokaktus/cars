<template>
    <Layout>
        <h2 class="flex justify-center my-5 text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
            Форма Продажу
        </h2>
        <slot />
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
.custom-select {
    min-height: 42px;
    height: 100%;
}
.custom-select .vs__search::placeholder {
    border: none;
    color: #000000;
    background: #ffffff;
}

.custom-select .vs__search:disabled::placeholder {
    background: rgb(248 248 248);
}

.custom-select.border-red-600 .vs__dropdown-toggle {
    border-color: rgb(220 38 38);
}

.custom-select .vs__dropdown-toggle {
    background: #ffffff;
    border: 1px solid rgb(209 213 219);
    border-radius: 0.5rem;
    color: #000000;
}
.custom-select .vs__dropdown-menu {
    background: #ffffff;
    border: 1px solid rgb(209 213 219);
    border-radius: 0 0 0.5rem 0.5rem;
    color: #000000;
    padding-bottom: 0;
}
.custom-select.vs--open .vs__dropdown-menu {
    outline: 2px solid rgb(147 51 234);
    border: none;
}
.custom-select.vs--open .vs__dropdown-toggle {
    outline: 2px solid rgb(147 51 234);
    border-radius: 0.5rem 0.5rem 0 0;
    border: none;
}
.custom-select .vs__dropdown-option--highlight {
    background: rgb(147 51 234);
}
.custom-select .vs__dropdown-toggle {
    height: 100%;
    box-shadow: 0 1px 2px -1px rgb(0 0 0 / 0.1);
}

.custom-select .vs__clear,
.custom-select .vs__open-indicator {
    fill: rgb(107 114 128);;
}
</style>

<script>

import Layout from "./Layout"

export default {
    name: "SaleForms.vue",
    components: { Layout }
}
</script>
