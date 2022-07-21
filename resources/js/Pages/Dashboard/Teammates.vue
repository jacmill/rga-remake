<template>
    <DashboardLayout title="Zawodnicy">
        <section>
            <ul class="list-none w-1/2 grid gap-y-2 text-white">
                <li v-for="(teammate, index) in teammates" :key="index" >
                    <div class="flex justify-between items-center bg-zinc-600 rounded-lg p-3">
                        <p v-if="teammate.is_coach == true">Trener</p>
                        <p v-else-if="teammate.is_substitute == true">Zawodnik rezerwowy</p>
                        <p v-else>{{ `Zawodnik ${teammate.id + 1}` }}</p>
                        <Link :href="`/dashboard/teammates/${teammate.id}/edit`" 
                            class="bg-blue-500 p-2 rounded-lg"
                        >
                            {{ teammate.is_empty ? "Ustaw" : "Edytuj" }}
                        </Link>
                    </div>
                    <div v-if="!teammate.is_empty" class="bg-zinc-500">
                        <ul class="list-none flex justify-around">
                            <li><span class="block">Imię:</span> {{ teammate.name }}</li>
                            <li><span class="block">Nazwisko:</span> {{ teammate.last_name }}</li>
                            <li><span class="block">Wiek:</span> {{ teammate.age }}</li>
                            <li><span class="block">Szkoła:</span> {{ teammate.school }}</li>
                        </ul>
                    </div>
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
</script>