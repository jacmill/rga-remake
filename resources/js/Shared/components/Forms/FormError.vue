<template>
    <div v-if="props.error" class="text-xs text-red-500">{{ props.error }}</div>
</template>
<script setup>
    const props = defineProps(["error"]);
</script>