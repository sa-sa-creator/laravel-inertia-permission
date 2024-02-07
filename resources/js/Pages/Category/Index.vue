<template>
    <AdminLayout>
    <Head title="Create new" />
        <div class="p-12">
            <div
                v-for="category in categorys" :key="category.cate_id">
                {{ category.cate_name }}
                <Link :href="`/category/${category.cate_id}`">Show</Link> |
                <Link :href="`/category/${category.cate_id}/edit`">Edit</Link> |
                <Link :href="`/category/${category.cate_id}`" method="delete" as="button">Delete</Link>
            </div>
        </div>

    </AdminLayout>
</template>

<script setup>

import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Link, Head } from '@inertiajs/vue3';

defineProps({
    categorys: Array
})
</script>
