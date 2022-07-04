<template>
    <form @submit.prevent="submit">
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Imię</span>
            <input type="text" v-model="form.name">
            <div v-if="form.errors.name">{{ form.errors.name }}</div>
        </label>
        <label class="block">
            <span class="block">Nazwisko</span>
            <input type="text" v-model="form.last_name">
            <div v-if="form.errors.last_name">{{ form.errors.last_name }}</div>
        </label>
    </div>
    <label class="block">
        <span class="block">Adres e-mail</span>
        <input type="email" v-model="form.email">
        <div v-if="form.errors.email">{{ form.errors.email }}</div>
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
        <div v-if="form.errors.password">{{ form.errors.password }}</div>
    </div>
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Wiek</span>
            <input type="text" v-model="form.age">
            <div v-if="form.errors.age">{{ form.errors.age }}</div>
        </label>
        <label class="block">
            <span class="block">Powtórz hasło</span>
            <select v-model="form.school">
                <option value="test">Test</option>
            </select>
            <div v-if="form.errors.school">{{ form.errors.school }}</div>
        </label>
    </div>
    <div class="flex gap-3">
        <label class="block">
            <span class="block">Nazwa drużyny</span>
            <input type="text" v-model="form.teamname">
            <div v-if="form.errors.teamname">{{ form.errors.teamname }}</div>
        </label>
        <label class="block">
            <span class="block">Gra</span>
            <select v-model="form.game">
                <option value="CS">CS:GO</option>
                <option value="LOL">LoL</option>
            </select>
            <div v-if="form.errors.game">{{ form.errors.game }}</div>
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
        school: "test",
        teamname: null,
        game: "CS",
        about: null
    });
    const submit = () => {
        form.post('/register');
    }
</script>