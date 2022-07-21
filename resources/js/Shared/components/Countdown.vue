<template>
    <div class="flex gap-5 text-white font-bold justify-center">
        <div v-for="[name, currentTime] in display"
             :key="name"
             class="grid justify-items-center"
        >
            <p class="text-4xl">{{ currentTime.value }}</p>
            <p class="text-3xl">{{ getDisplayName(name) }}</p>   
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
    const formatTime = time => time < 10 ? `0${time}` : time; 
    const getDisplayName = name => {
        switch(name) {
            case "seconds": return "Sekund";
            case "minutes": return "Minut";
            case "hours": return "Godzin";
            case "days": return "Dni";
        }
    }
    const _seconds = 1000;
    const _minutes = _seconds * 60;
    const _hours = _minutes * 60;
    const _days = _hours * 24
    const showRemaining = setInterval(() => {
        const currentDate = new Date();
        const distance = launchDate.getTime() - currentDate.getTime();
        if(distance <= 0) {
            clearInterval(showRemaining);
        }
        display.get("seconds").value = formatTime(Math.floor((distance % _minutes) / _seconds));
        display.get("minutes").value = formatTime(Math.floor((distance  % _hours) / _minutes));
        display.get("hours").value = formatTime(Math.floor((distance  % _days) / _hours));
        display.get("days").value = formatTime(Math.floor(distance / _days));
    }, 1000);
    onMounted(() => {
       showRemaining
    });
</script>