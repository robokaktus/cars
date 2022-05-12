<template>
    <div class="container mx-auto min-h-full flex flex-col">
        <Header />

        <main class="shrink grow basis-auto">
            <slot />
        </main>

        <Footer />
    </div>
</template>

<style>
    html, #app {
        height: 100%;
    }
</style>

<script>

import Header from "./Partials/Header"
import Footer from "./Partials/Footer"

export default {
    name: "Layout.vue",
    components: { Header, Footer }
}
</script>
