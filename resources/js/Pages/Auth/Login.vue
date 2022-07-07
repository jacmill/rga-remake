<template>
    <AuthLayout>
    <form @submit.prevent="submit">
        <label class="block">
            <span class="block">Adres e-mail</span>
            <input type="text" v-model="form.email">
            <div v-if="form.errors.email">{{ form.errors.email }}</div>
        </label>
        <label class="block">
            <span class="block">Hasło</span>
            <input type="password" v-model="form.password">
            <div v-if="form.errors.password">{{ form.errors.password }}</div>
        </label>
        <label class="block">
            <span>Zapamiętaj mnie</span>
            <input type="checkbox" v-model="form.remember_me">
        </label>
        <button type="submit" :disabled="form.processing">Zaloguj</button>
    </form>
    <Link href="/forgot_password">Zapomniałeś hasła?</Link>
    </AuthLayout>
</template>
<script setup>
    import { Link } from '@inertiajs/inertia-vue3';
    import { useForm } from '@inertiajs/inertia-vue3'
    import AuthLayout from "../../Shared/AuthLayout.vue";
    const form = useForm({
          email: null,
          password: null,
          remember_me: false,
    });
    const submit = () => {
        form.post('/login')
    };
</script>