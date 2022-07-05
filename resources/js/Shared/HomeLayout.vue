<template>
    <header class="flex">
        <h1 v-if="team !== null">Zalogowano jako: {{ team.name }}</h1>
        <Nav/>
    </header>
</template>
<script setup>
    import Nav from './Nav';
    import { computed } from 'vue';
    import { usePage } from '@inertiajs/inertia-vue3';

    const team = computed(() => usePage().props.value.auth.team);
</script>