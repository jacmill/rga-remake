<template>
    <div class="flex gap-3">
        <div>
            <p>{{ displayDays }}</p>
            <p>Dni</p>
        </div>
        <div>
            <p>{{ displayHours }}</p>
            <p>Godzin</p>
        </div>    
        <div>
            <p>{{ displayMinutes }}</p>
            <p>Minut</p>
        </div>    
        <div>
            <p>{{ displaySeconds }}</p>
            <p>Sekund</p>
        </div>    
    </div>
</template>
<script setup>
    const targetDate = new Date("2022-09-09T09:00:00:00").getTime();

    const displaySeconds = 0;
    const displayMinutes = 0;
    const displayHours = 0;
    const displayDays = 0;
    
    const _seconds = _ => 1000;
    const _minutes = _ => _seconds * 60;
    const _hours = _ => _minutes * 60;
    const _days = _ => _days * 24;

    const formatTime = time => time < 10 && `0${time}`

</script>