<template>
    <div class="flex gap-3 text-white font-bold justify-center">
        <div v-for="[index, value] in display"
             :key="index"
             class="grid justify-items-center"
        >
            <p>{{ value }}</p>
            <p>{{ getDisplayName(index) }}</p>   
        </div>
    </div>
</template>
<script setup>
    import { ref } from '@vue/reactivity';
    import { onMounted } from 'vue';

    const launchDate = new Date("August 5, 2022 09:00:00");
    const display = new Map([
        ["days", ref(0)],
        ["hours", ref(0)],
        ["minutes", ref(0)],
        ["seconds", ref(0)]
    ]);
    const getDisplayName = name => {
        switch(name) {
            case "seconds": return "Sekund"; break;
            case "minutes": return "Minut"; break;
            case "hours": return "Godzin"; break;
            case "days": return "Dni"; break;
        }
    }
    const _seconds = 1000;
    const _minutes = _seconds * 60;
    const _hours = _minutes * 60;
    const _days = _hours * 24
    const showRemaining = setInterval(() => {
        const currentDate = new Date();
        const distance = launchDate.getTime() - currentDate.getTime();
        
        display.get("seconds").value = Math.floor((distance % _minutes) / _seconds);
        display.get("minutes").value = Math.floor((distance  % _hours) / _minutes);
        display.get("hours").value = Math.floor((distance  % _days) / _hours);
        display.get("days").value = Math.floor(distance / _days);
    }, 1000);
    onMounted(() => {
       showRemaining
    });
</script>