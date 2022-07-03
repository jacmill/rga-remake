<template>
    <form @submit.prevent="submit">
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Imię</span>
            <input type="text" v-model="form.name">
        </label>
        <label class="block">
            <span class="block">Nazwisko</span>
            <input type="text" v-model="form.last_name">
        </label>
    </div>
    <label class="block">
        <span class="block">Adres e-mail</span>
        <input type="email" v-model="form.email">
    </label>
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Hasło</span>
            <input type="email" v-model="form.password">
        </label>
        <label class="block">
            <span class="block">Powtórz hasło</span>
            <input type="email" v-model="form.password_confirmation">
        </label>
    </div>
    </form>
</template>
<script setup>
    import { useForm } from "@inertiajs/inertia-vue3";

    const form = useForm({
        name: null,
        last_name: null,
        email: null,
        password: null,
        password_confirmation: null
    })
</script>