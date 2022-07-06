<template>
    <AuthLayout>
        <form @submit.prevent="submit">
            <label class="block">
                <span class="block">Adres e-mail</span>
                <input type="email" name="email" v-model="form.email">
                <FormError :error="form.errors.email"/>
            </label>
            <button type="submit" :disable="form.processing">Wyślij link</button>   
        </form>
    </AuthLayout>
</template>
<script setup>
import AuthLayout from '../../Shared/AuthLayout.vue';
import FormError from '../../Shared/components/FormError.vue';
import { useForm } from '@inertiajs/inertia-vue3';
const form = useForm({
    email: null
});
const submit = () => form.post('/forgot_password');
</script>