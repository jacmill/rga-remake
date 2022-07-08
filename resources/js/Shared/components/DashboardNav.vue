<template>
    <aside class=" w-1/5 h-screen bg-zinc-800">
        <h1>Panel Kapitana</h1>
        <nav class="h-full">
            <div></div>
            <div>
                <Link href="/">Wyjdź</Link>
                <Link href="/logout" method="POST" as="button" type="button" class=" text-red-500">Wyloguj się</Link>
            </div>
        </nav>
    </aside>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>