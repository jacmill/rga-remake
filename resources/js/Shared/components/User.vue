<template>
    <div class="flex justify-between">
        <Link  href="/dashboard" 
            class="flex gap-3 items-center hover:bg-zinc-600 transition-all py-1 px-2 rounded-lg"
            :class="{'flex-row-reverse': side === 'left'}"
            >
                {{ team.name }} 
                <img :src="`/team_logos/${team.logo}`" 
                    class="w-10 h-10 object-cover rounded-lg border-blue-500 border-2"/>
        </Link>
        <Link href="/logout" method="POST" as="button" type="button" 
            class=" text-red-500 p-3 rounded-lg hover:bg-red-500 hover:text-white transition-all">
            <font-awesome-icon icon="arrow-right-from-bracket"/>
        </Link>
    </div>
</template>
<script setup>
    import { usePage, Link } from '@inertiajs/inertia-vue3';
    import { defineProps } from 'vue';
    const props = defineProps([
        "side",
        "to",
    ]);
    const side = props.side;
    const team = usePage().props.value.auth.team;
</script>