<template>
    <header class="flex gap-3 justify-evenly items-center bg-zinc-800 text-white py-2">
        <Link href="/"><img src="../../images/logo.svg" alt="logo" class=" w-36"></Link>
        <Link v-if="team !== null" href="/dashboard" 
                    class="flex items-center gap-3 hover:bg-zinc-600 transition-all py-1 px-2 rounded-lg">
            {{ team.name }} 
            <img :src="`/team_logos/${team.logo}`" 
                class="w-10 h-10 object-cover rounded-lg border-blue-500 border-2"/>
        </Link>
        <Nav v-else />
    </header>
    <section class="max-h-screen w-full bg-zinc-700">
        <slot name="landing"></slot>
    </section>
</template>
<script setup>
    import Nav from './Nav.vue';
    import { Link } from '@inertiajs/inertia-vue3';
    import { computed } from 'vue';
    import { usePage } from '@inertiajs/inertia-vue3';

    const team = computed(() => usePage().props.value.auth.team);
</script>