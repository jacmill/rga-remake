<template>
        <Link v-bind:href="props.to">   
            <div class="w-full px-4 py-2 text-zinc-500 text-lg rounded-lg hover:text-zinc-300 hover:bg-zinc-700 transition-all"
                :class="{'bg-zinc-600': props.active}">
                <slot/>
            </div>
        </Link>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(["to", "active"]);

</script>