<template>
    <div class="flex">
        <DashboardNav />
        <main class="w-full bg-zinc-700">
            <h1 class="text-white text-2xl font-bold">{{ props.title }}</h1>
            <slot />
        </main>
    </div>
</template>
<script setup>
    import { defineProps } from 'vue';
    import DashboardNav from './components/Dashboard/DashboardNav.vue';
    const props = defineProps([
        "title"
    ]);
</script>