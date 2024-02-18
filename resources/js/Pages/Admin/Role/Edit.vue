<template>
    <AdminLayout>
        <form @submit.prevent="update">
            <div class="p-12">
                <div>
                    <label for="form.name">Name: </label>
                    <input v-model="form.name" type="text" />
                    <div v-if="form.errors.name">
                    {{ form.errors.name }}
                    </div>
                </div>
                <div>
                    <VueMultiselect
                        v-model="form.permissions"
                        :options="permissions"
                        :multiple="true"
                        :close-on-select="true"
                        placeholder="Pick some"
                        label="name"
                        track-by="name"
                    />
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
    import VueMultiselect from 'vue-multiselect'

    const props = defineProps({
        role: Object,
        permissions: Array
    })

    const form = useForm({
        name: props.role.name,
        permissions: []
    })
    const update = ()=> form.put(`/role/${props.role.id}`);
    </script>


    <style src="vue-multiselect/dist/vue-multiselect.css"></style>
