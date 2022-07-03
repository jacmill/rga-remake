<template>
    <form @submit.prevent="submit">
        <label class="block">
            <span class="block">Adres e-mail</span>
            <input type="text" v-model="form.email">
        </label>
        <label class="block">
            <span class="block">Hasło</span>
            <input type="password" v-model="form.password">
        </label>
        <label class="block">
            <span>Zapamiętaj mnie</span>
            <input type="checkbox" v-model="form.remember">
        </label>
        <button type="submit" :disabled="form.processing">Zaloguj</button>
    </form>
</template>
<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
  setup () {
    const form = useForm({
      email: null,
      password: null,
      remember: false,
    })

    return { form }
  },
}
</script>