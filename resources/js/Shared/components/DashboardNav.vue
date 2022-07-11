<template>
    <aside class=" w-102 h-screen bg-zinc-800 border-r-zinc-600 border-r-2">
        <header>
            <Link href="/dashboard" class="flex justify-center p-5 bg-zinc-900">
                <img src="../../../images/logo.svg" alt="logo" class="w-4/6">
            </Link>
        </header>
        <nav class="p-2">
            <div>
                <ul class="list-none">
                    <li><DashboardNavItem to="/dashboard/teammates">Zawodnicy</DashboardNavItem></li>
                </ul>
            </div>
            <div>
                <Link href="/">Wyjdź</Link>
                <Link href="/logout" method="POST" as="button" type="button" class=" text-red-500">Wyloguj się</Link>
            </div>
        </nav>
    </aside>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import DashboardNavItem from './DashboardNavItem.vue';
</script>