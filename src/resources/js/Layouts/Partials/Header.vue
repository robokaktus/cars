<script setup>
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue';
import JetDropdown from '@/Jetstream/Dropdown.vue';
import JetDropdownLink from '@/Jetstream/DropdownLink.vue';
import JetNavLink from '@/Jetstream/NavLink.vue';
import {ref} from "vue";
import { router } from '@inertiajs/vue3';
defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    Inertia.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    Inertia.post(route('logout'));
};
</script>
<template>
    <header class="w-full shadow-lg bg-white dark:bg-gray-700 items-center h-16 rounded-2xl z-40 sticky top-1.5">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <Link :href="route('home')">
                        <JetApplicationMark class="block h-9 w-auto"/>
                    </Link>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <JetNavLink :href="route('home')" :active="route().current('home')">
                        Home
                    </JetNavLink>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <JetNavLink :href="route('car.sales')" :active="route().current('car.sales')">
                        Cars
                    </JetNavLink>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <JetNavLink :href="route('car.sale-form')" :active="route().current('car.sale-form')">
                        Sale Car
                    </JetNavLink>
                </div>
            </div>
            <div class="ml-3 mt-4 mr-4 relative" v-if="$page.props.user">
                <JetDropdown align="right" width="48">
                    <template #trigger>
                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                        </button>

                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ $page.props.user.name }}

                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                    </template>

                    <template #content>
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Manage Account
                        </div>

                        <JetDropdownLink :href="route('profile.show')">
                            Profile
                        </JetDropdownLink>

                        <JetDropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                            API Tokens
                        </JetDropdownLink>

                        <div class="border-t border-gray-100" />

                        <!-- Authentication -->
                        <form @submit.prevent="logout">
                            <JetDropdownLink as="button">
                                Log Out
                            </JetDropdownLink>
                        </form>
                    </template>
                </JetDropdown>
            </div>
            <div class="flex" v-else>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <JetNavLink :href="route('login')" :active="route().current('login')">
                        Sign In
                    </JetNavLink>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex mr-10">
                    <JetNavLink :href="route('register')" :active="route().current('register')">
                        Sign Up
                    </JetNavLink>
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

