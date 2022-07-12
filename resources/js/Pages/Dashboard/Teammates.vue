<template>
    <DashboardLayout>
        <h1 class="text-white text-2xl font-bold">Zawodnicy</h1>
        <section>
            <ul class="list-none">
                <li v-for="(item, index) in teammates" :key="index">
                    {{item}} {{index}}
                </li>
            </ul>
        </section>
    </DashboardLayout>
</template>
<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import DashboardLayout from '../../Shared/DashboardLayout.vue';

const teammates = usePage().props.value.teammates;
console.table(teammates);
</script>