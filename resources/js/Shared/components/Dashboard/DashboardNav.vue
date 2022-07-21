<template>
    <aside class=" w-92 h-screen flex flex-col bg-zinc-800 border-r-zinc-600 border-r-2">
        <header>
            <Link href="/dashboard" class="flex justify-center p-5 bg-zinc-900">
                <img src="../../../../images/logo.svg" alt="logo" class="w-4/6">
            </Link>
        </header>
        <nav class="p-2 h-full grid jus">
            <div>
                <ul class="list-none grid gap-y-2">
                    <li>
                        <DashboardNavItem to="/dashboard/teammates" :active="{'active': $page.component === 'Dashboard/Teammates'}">
                            Zawodnicy
                        </DashboardNavItem>
                    </li>
                    <li>
                        <DashboardNavItem to="/dashboard/team" :active="{'active': $page.component === 'Dashboard/Team'}">
                            Zespół
                        </DashboardNavItem>
                    </li>
                </ul>
            </div>
            <div class=" self-end">
                <User side="left"/>
                <Link href="/">Wyjdź</Link>
            </div>
        </nav>
    </aside>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import DashboardNavItem from './DashboardNavItem.vue';
import User from '../User.vue';
</script>