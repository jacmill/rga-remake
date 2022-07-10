<template>
    <nav>
        <ul class=" list-none flex gap-4">
            <li class="p-2 bg-blue-500 rounded-lg">
                <Link href="/login">Zaloguj się</Link>
            </li>
            <li class="p-2 bg-green-500 rounded-lg">
                <Link href="/register">Zarejestruj się</Link>
            </li>
        </ul>
    </nav>
</template>
<script setup>
    import { Link } from "@inertiajs/inertia-vue3";
</script>