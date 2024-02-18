<template>
<AdminLayout>
    <form @submit.prevent="create">
        <div class="px-20 py-10">
            <div>
                <label for="form.name">Name: </label>
                <input v-model="form.name" type="text" />
                <div v-if="form.errors.name">
                    {{ form.errors.name }}
                </div>
            </div>
            <div>
                <button type="submit">Save</button>
            </div>
        </div>
    </form>
</AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { useForm } from '@inertiajs/vue3'
const form = useForm({
    name: null,
})
const create = ()=> form.post(route('roles.store', {}));

</script>
