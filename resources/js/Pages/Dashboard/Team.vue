<template>
    <DashboardLayout title="Zespół">
        <form @submit.prevent="submit">
            <ImagePreview />
            <button type="submit">Ustaw</button>
        </form>
    </DashboardLayout>
</template>
<script setup>
    import ImagePreview from '../../Shared/components/Forms/ImagePreview.vue';
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