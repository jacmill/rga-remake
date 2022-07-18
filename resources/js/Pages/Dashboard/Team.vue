<template>
    <DashboardLayout>
        <h1>Zespół</h1>
        <form @submit.prevent="submit">
            <label class="block">Logo drużyny</label>
            <div class="flex">
                <img :src="'/team_logos/'+logo" alt="logo" class="w-1/2">
                <div>
                    <input type="file" @input="form.logo = $event.target.files[0]" />
                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                      {{ form.progress.percentage }}%
                    </progress>
                </div>
            </div>
            <button type="submit">Ustaw</button>
        </form>
    </DashboardLayout>
</template>
<script setup>
    import { Inertia } from '@inertiajs/inertia';
    import { useForm, usePage } from '@inertiajs/inertia-vue3';
    import DashboardLayout from '../../Shared/DashboardLayout.vue';
    const logo = usePage().props.value.auth.team.logo;
    const form = useForm({
        logo: null
    });
    const submit = () => {
        form.post('/dashboard/team', {
            forceFormData: true,
            onSuccess: () => form.reset()
        });
    }
</script>