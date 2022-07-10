<template>
    <header class="flex gap-3 justify-evenly items-center bg-zinc-800 text-white py-2">
        <Link href="/"><img src="../../images/logo.svg" alt="logo" class=" w-36"></Link>
        <Link v-if="team !== null" href="/dashboard">
            {{ team.name }}
        </Link>
        <Nav v-else />
    </header>
</template>
<script setup>
    import Nav from './Nav';
    import { Link } from '@inertiajs/inertia-vue3';
    import { computed } from 'vue';
    import { usePage } from '@inertiajs/inertia-vue3';

    const team = computed(() => usePage().props.value.auth.team);
</script>