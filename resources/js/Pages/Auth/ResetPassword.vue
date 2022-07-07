<template>
    <AuthLayout>
        <form @submit.prevent="submit">
            <label class="block">
                <span class="block">Adres emai.</span>
                <input type="email" v-model="form.email">
            </label>
            <label class="block">
                <span class="block">Nowe hasło</span>
                <input type="password" v-model="form.password">
            </label>
            <label class="block">
                <span class="block">Powtórz hasło</span>
                <input type="password" v-model="form.password_confirmation">
            </label>
            <button type="submit">Zmień hasło</button>
        </form>
    </AuthLayout>
</template>
<script setup>
import AuthLayout from '../../Shared/AuthLayout.vue';
import { useForm, usePage } from '@inertiajs/inertia-vue3';

const form = useForm({
    password: null,
    password_confirmation: null,
    token: usePage().props.value.token,
    email: null
});
const submit = () => form.post("/reset_password"); 
</script>