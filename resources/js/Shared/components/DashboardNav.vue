<template>
    <aside>
        <h1>Panel Kapitana</h1>
        <nav>
            <div></div>
            <div>
                <Link href="/logout" method="POST" as="button" type="button">Wyloguj się</Link>
            </div>
        </nav>
    </aside>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>