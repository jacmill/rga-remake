<template>
    <aside class=" w-64 h-screen bg-zinc-800">
        <header>
            <Link href="/dashboard" class="flex justify-center p-5 bg-zinc-900">
                <img src="../../../images/logo.svg" alt="logo" class="w-4/6">
            </Link>
        </header>
        <nav>
            <div>
                <ul class="list-none">
                    <li><Link href="/dashboard/teammates">Zawodnicy</Link></li>
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
</script>