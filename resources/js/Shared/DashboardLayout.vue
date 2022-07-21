<template>
    <div class="flex">
        <DashboardNav />
        <main class="w-full bg-zinc-700">
            <slot />
        </main>
    </div>
</template>
<script setup>
    import DashboardNav from './components/Dashboard/DashboardNav.vue';
</script>