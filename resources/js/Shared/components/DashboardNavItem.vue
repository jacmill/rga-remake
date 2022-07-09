<template>
    <div class="w-full text-zinc-300 p-2">
        <Link href="{{ to }}"><slot/></Link>
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(["to"]);
</script>