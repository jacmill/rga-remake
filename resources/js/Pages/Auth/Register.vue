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
            <input type="password" v-model="form.password">
        </label>
        <label class="block">
            <span class="block">Powtórz hasło</span>
            <input type="password" v-model="form.password_confirmation">
        </label>
    </div>
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Wiek</span>
            <input type="text" v-model="form.age">
        </label>
        <label class="block">
            <span class="block">Powtórz hasło</span>
            <select v-model="form.school">
                <option value="test">Test</option>
            </select>
        </label>
    </div>
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Nazwa drużyny</span>
            <input type="text" v-model="form.teamname">
        </label>
        <label class="block">
            <span class="block">Gra</span>
            <select v-model="form.game">
                <option value="CS">CS:GO</option>
                <option value="LOL">LoL</option>
            </select>
        </label>
    </div>
    <label class="block">
        <span class="block">O drużynie</span>
        <textarea v-model="form.about" cols="30" rows="10"></textarea>
    </label>
    <button type="submit">Zarejestruj</button>
    </form>
</template>
<script setup>
    import { useForm } from "@inertiajs/inertia-vue3";

    const form = useForm({
        name: null,
        last_name: null,
        email: null,
        password: null,
        password_confirmation: null,
        age: null,
        school: null,
        teamname: null,
        game: null,
        about: null
    })
</script>