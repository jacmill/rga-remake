<template>
    <AuthLayout>
    <form @submit.prevent="submit">
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Imię</span>
            <input type="text" v-model="form.name" class="text-black">
            <FormError :error="form.errors.name"/>
        </label>
        <label class="block">
            <span class="block">Nazwisko</span>
            <input type="text" v-model="form.last_name" class="text-black">
            <FormError :error="form.errors.last_name"/>
        </label>
    </div>
    <label class="block">
        <span class="block">Adres e-mail</span>
        <input type="email" v-model="form.email" class="text-black">
        <FormError :error="form.errors.email"/>
    </label>
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Hasło</span>
            <input type="password" v-model="form.password" class="text-black">
            <FormError :error="form.errors.password"/>
        </label>
        <label class="block">
            <span class="block">Powtórz hasło</span>
            <input type="password" v-model="form.password_confirmation" class="text-black">
            <FormError :error="form.errors.password_confirmation"/>
        </label>
    </div>
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Wiek</span>
            <input type="text" v-model="form.age" class="text-black">
            <FormError :error="form.errors.age"/>
        </label>
        <label class="block">
            <span class="block">Powtórz hasło</span>
            <select v-model="form.school">
                <option value="test">Test</option>
            </select>
            <FormError :error="form.errors.school"/>
        </label>
    </div>
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Nazwa drużyny</span>
            <input type="text" v-model="form.teamname" class="text-black">
            <FormError :error="form.errors.teamname"/>
        </label>
        <label class="block">
            <span class="block">Gra</span>
            <select v-model="form.game">
                <option value="CS">CS:GO</option>
                <option value="LOL">LoL</option>
            </select>
            <FormError :error="form.errors.game"/>
        </label>
    </div>
    <label class="block">
        <span class="block">O drużynie</span>
        <textarea v-model="form.about" cols="30" rows="10" class="text-black"></textarea>
    </label>
    <button type="submit" :disabled="form.processing">Zarejestruj</button>
    </form>
    </AuthLayout>
</template>
<script setup>
    import { useForm } from "@inertiajs/inertia-vue3";
    import AuthLayout from "../../Shared/AuthLayout.vue";
    import FormError from "../../Shared/components/FormError.vue";
    const form = useForm({
        name: null,
        last_name: null,
        email: null,
        password: null,
        password_confirmation: null,
        age: null,
        school: "test",
        teamname: null,
        game: "CS",
        about: null
    });
    const submit = () => {
        form.post('/register');
    }
</script>