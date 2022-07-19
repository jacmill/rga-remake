<template>
    <HomeLayout>
        <template v-slot:landing>
            <Countdown />
        </template>
    </HomeLayout>
</template>
<script setup>
    import HomeLayout from "../Shared/HomeLayout.vue";
    import Countdown from "../Shared/components/Countdown.vue";
</script>