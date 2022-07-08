<template>
    <AuthLayout>
    <form @submit.prevent="submit" class="grid gap-y-2">
        <label class="block gap-y-1">
            <span class="block">Adres e-mail</span>
            <input type="text" v-model="form.email" class="text-black">
            <div v-if="form.errors.email">{{ form.errors.email }}</div>
        </label>
        <label class="block gap-y-1">
            <span class="block">Hasło</span>
            <input type="password" v-model="form.password" class="text-black">
            <div v-if="form.errors.password">{{ form.errors.password }}</div>
        </label>
        <label class="flex gap-x-2 items-center">
            <span>Zapamiętaj mnie</span>
            <input type="checkbox" v-model="form.remember_me">
        </label>
        <button type="submit" :disabled="form.processing" class="p-2 rounded-lg bg-blue-500">Zaloguj</button>
    </form>
    <Link href="/forgot_password" class=" text-center">Zapomniałeś hasła?</Link>
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