<template>
    <header>
        <Link href="/">Powrót</Link>
    </header>
    <main>
        <slot />
    </main>
</template>
<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>