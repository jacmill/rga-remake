<template>
    <HomeLayout>
        <template v-slot:landing>
            <Countdown />
            <Link v-if="!isLoggedIn" href="/register" class="p-2 bg-green-500 rounded-lg">Zarejestruj się</Link>
        </template>
    </HomeLayout>
</template>
<script setup>
    import { Link, usePage } from "@inertiajs/inertia-vue3";
    import HomeLayout from "../Shared/HomeLayout.vue";
    import Countdown from "../Shared/components/Countdown.vue";
    const isLoggedIn = usePage().props.value.auth.team !== null;
</script>