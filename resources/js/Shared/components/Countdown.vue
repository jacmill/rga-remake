<template>
    <div class="flex gap-3">
        <div>
            <p>{{ display.get("days") }}</p>
            <p>Dni</p>
        </div>
        <div>
            <p>{{ display.get("hours") }}</p>
            <p>Godzin</p>
        </div>    
        <div>
            <p>{{ display.get("minutes") }}</p>
            <p>Minut</p>
        </div>    
        <div>
            <p>{{ display.get("seconds") }}</p>
            <p>Sekund</p>
        </div>    
    </div>
</template>
<script setup>
    import { ref } from '@vue/reactivity';
    import { onMounted } from 'vue';

    const launchDate = new Date("August 5, 2022 09:00:00");
    const display = new Map([
        ["seconds", ref(0)],
        ["minutes", ref(0)],
        ["hours", ref(0)],
        ["days", ref(0)]
    ]);
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