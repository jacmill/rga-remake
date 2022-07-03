<template>
    <nav>
        <ul>
            <li>
                <Link href="/login">Zaloguj się</Link>
                <Link href="/register">Zarejestruj się</Link>
            </li>
        </ul>
    </nav>
</template>
<script setup>
    import { Link } from "@inertiajs/inertia-vue3";
</script>