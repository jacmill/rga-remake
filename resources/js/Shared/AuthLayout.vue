<template>
    <div class=" h-screen text-white bg-zinc-900">
        <header class=" p-4">
            <Link href="/" class=" p-2 rounded-lg bg-green-500">Powrót</Link>
        </header>
        <main class="flex items-center justify-center flex-col">
            <slot />
        </main>
    </div>
</template>
<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>