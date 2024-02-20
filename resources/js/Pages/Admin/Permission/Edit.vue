<template>
    <AdminLayout>
        <form @submit.prevent="$event => form.put(route('permissions.update',permission.id))">
            <div class="px-20 py-10">
                <div>
                    <label for="form.name">Name: </label>
                    <input v-model="form.name" type="text" />
                    <div v-if="form.errors.name">
                        {{ form.errors.name }}
                    </div>
                </div>
                <div>
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
    </AdminLayout>
    </template>

    <script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import { useForm } from '@inertiajs/vue3'

    const props = defineProps({
        permission: Object,
    })
    const form = useForm({
        name: props.permission?.name,
    })
    //const update = ()=> form.put(route('roles.update',role.id));

    </script>

