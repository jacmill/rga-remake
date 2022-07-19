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
    const displaySeconds = 0;
    const displayMinutes = 0;
    const displayHours = 0;
    const displayDays = 0;

    
</script>