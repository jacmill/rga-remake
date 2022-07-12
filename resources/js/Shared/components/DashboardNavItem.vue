<template>
    <div class="w-full p-2 text-zinc-500 text-lg rounded-lg hover:text-zinc-300 hover:bg-zinc-700 transition-all">
        <Link v-bind:href="props.to">
            <slot/>
        </Link>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(["to"]);
</script>