<template>
    <DashboardLayout>
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
        <button type="submit">Ustaw</button>
    </form>    
    </DashboardLayout>
</template>
<script setup>
import { useForm, usePage } from "@inertiajs/inertia-vue3";
import DashboardLayout from "../../Shared/DashboardLayout.vue"
import FormError from "../../Shared/components/Forms/FormError.vue";

const props = defineProps({
    teammateId: Number
});
const teammateId = usePage().props.value.teammateId;
const teammate = usePage().props.value.teammate;
console.log(teammate);
const form = useForm({
    name: null,
    last_name: null,
    age: null,
    school: "test"        
});
const submit = () => {
    form.patch(`/dashboard/teammates/${teammateId}`);
}
</script>