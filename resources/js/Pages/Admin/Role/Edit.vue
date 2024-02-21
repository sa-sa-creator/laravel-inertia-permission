<template>
    <AdminLayout>
        <form @submit.prevent="$event => form.put(route('roles.update',role.id))">
            <div class="px-20 py-10">
                <div>
                    <label for="form.name">Name: </label>
                    <input v-model="form.name" type="text" />
                    <div v-if="form.errors.name">
                        {{ form.errors.name }}
                    </div>
                </div>
                <label for="permissions">Permissions</label>
                <div>
                    <VueMultiselect
                        v-model="form.permissions"
                        :options="permissions"
                        :multiple="true"
                        :close-on-select="true"
                        placeholder="Pick some"
                        label="name"
                        track-by="id"
/>
                </div>
                <div>
                    <button type="submit">Update</button>
                </div>
            </div>
        </form>
        <div v-for="permission in role.permissions" :key="permission.id">
            <label for="permission.id">{{ permission.id }}</label>
            <label for="permission.name">{{ permission.name }}</label>
            <Link
             class="text-red-700">
                Revoke
            </Link>
        </div>
    </AdminLayout>
    </template>

    <script setup>
    import AdminLayout from '@/Layouts/AdminLayout.vue';
    import { useForm, Link } from '@inertiajs/vue3'
    import { onMounted } from 'vue';
    import VueMultiselect from 'vue-multiselect'

    const props = defineProps({
        role: Object,
        permissions: Array
    })
    const form = useForm({
        name: props.role?.name,
        permissions: []
    })

    onMounted(()=>{
        form.permissions = props.role?.permissions;
    });
    //const update = ()=> form.put(route('roles.update',role.id));

    </script>


<style src="vue-multiselect/dist/vue-multiselect.css"></style>
