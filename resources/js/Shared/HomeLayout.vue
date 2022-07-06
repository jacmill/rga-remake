<template>
    <header class="flex gap-3">
        <Link v-if="team !== null" href="/dashboard">{{ team.name }}</Link>
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