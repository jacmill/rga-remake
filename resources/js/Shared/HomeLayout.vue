<template>
    <header class="flex gap-3 justify-evenly items-center bg-zinc-800 text-white py-2">
        <Link href="/"><img src="../../images/logo.svg" alt="logo" class=" w-36"></Link>
        <User v-if="team !== null" side="right"/>
        <Nav v-else />
    </header>
    <section class="w-full bg-zinc-700">
        <slot name="landing"></slot>
    </section>
</template>
<script setup>
    import User from './components/User.vue';
    import Nav from './Nav.vue';
    import { Link } from '@inertiajs/inertia-vue3';
    import { computed } from 'vue';
    import { usePage } from '@inertiajs/inertia-vue3';

    const team = computed(() => usePage().props.value.auth.team);
</script>