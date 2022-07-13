<template>
    <form @submit.prevent="submit">
        <label class="block">
            <span class="block">Imię</span>
            <input type="text" v-model="form.name">
        </label>
        <label class="block">
            <span class="block">Nazwisko</span>
            <input type="text" v-model="form.last_name">
        </label>
        <div class="flex gap-3">
            <label class="block">
                <span class="block">Wiek</span>
                <input type="text" v-model="form.age" class="text-black">
                <FormError :error="form.errors.age"/>
            </label>
            <label class="block">
                <span class="block">Szkoła</span>
                <select v-model="form.school" class="text-black">
                    <option value="test">Test</option>
                </select>
                <FormError :error="form.errors.school"/>
            </label>
        </div>
    </form>    
</template>
<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import FormError from "./components/FormError.vue";
    const form = useForm({
        name: null,
        last_name: null,
        age: null,
        school: "test"        
    });
</script>