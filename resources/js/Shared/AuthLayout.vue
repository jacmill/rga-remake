<template>
    <div class=" h-screen text-white bg-zinc-900">
        <header class=" p-4">
            <Link href="/" class=" p-2 rounded-lg bg-green-500">
               <font-awesome-icon icon="arrow-left"/> Powrót
            </Link>
        </header>
        <main class="flex items-center justify-center flex-col">
            <section class="flex justify-center flex-col gap-y-2 bg-zinc-800 p-5 rounded-xl">
                <slot />
            </section>
        </main>
    </div>
</template>
<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
</script>