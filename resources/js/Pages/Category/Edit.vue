<template>
    <AdminLayout>
        <form @submit.prevent="update">
            <div class="p-12">
                <div>
                    <label for="form.cate_name">Name: </label>
                    <input v-model="form.cate_name" type="text" />
                    <div v-if="form.errors.cate_name">
                    {{ form.errors.cate_name }}
                    </div>
                </div>
                <div>
                    <label for="form.cate_description">Description: </label>
                    <input v-model="form.cate_description" type="text" />
                    <div v-if="form.errors.cate_description">
                    {{ form.errors.cate_description }}
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
        category: Object
    })
    const form = useForm({
        cate_name: props.category.cate_name,
        cate_description: props.category.cate_description
    })

    const update = ()=> form.put(`/category/${props.category.cate_id}`);
    </script>
