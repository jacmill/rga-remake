<template>
    <header class="flex">
        <h1 v-if="user">Zalogowano jako: {{ team.name }}</h1>
        <Nav/>
    </header>
</template>
<script setup>
    import Nav from './Nav';
    import { computed } from '@vue/reactivity';
    import { usePage } from '@inertiajs/inertia-vue3';

    const user = computed(() => usePage().props.value.auth.team)
</script>