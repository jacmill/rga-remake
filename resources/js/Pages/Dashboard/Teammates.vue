<template>
    <DashboardLayout>
        <h1 class="text-white text-2xl font-bold">Zawodnicy</h1>
        <section>
            <ul class="list-none">
                <li v-for="(teammate, index) in teammates" :key="index" 
                    class="flex">
                    <p v-if="teammate.is_coach == true">Trener</p>
                    <p v-else-if="teammate.is_substitute == true">Zawodnik rezerwowy</p>
                    <p v-else>{{ `Zawodnik ${teammate.id + 1}` }}</p>
                    <Link :href="`/dashboard/teammates/${teammate.id}/edit`">Edytuj</Link>
                </li>
            </ul>
        </section>
    </DashboardLayout>
</template>
<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import DashboardLayout from '../../Shared/DashboardLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
const teammates = usePage().props.value.teammates;
console.table(teammates);
</script>