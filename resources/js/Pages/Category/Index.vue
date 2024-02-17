<template>
    <AdminLayout>
    <Head title="Create new" />
        <div class="p-12">
            <div
                v-for="category in categorys.data" :key="category.cate_id">
                {{ category.cate_name }}
                <Link :href="`/category/${category.cate_id}`">Show</Link> |
                <Link :href="`/category/${category.cate_id}/edit`">Edit</Link> |
                <Link :href="`/category/${category.cate_id}`" method="delete" as="button">Delete</Link>
            </div>

            <div
            v-if="categorys.data.length">
            <Pagination :links="categorys.links"></Pagination>
            </div>
        </div>

    </AdminLayout>
</template>

<script setup>

import Pagination from '@/Components/Pagination.vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Link, Head } from '@inertiajs/vue3';

defineProps({
    categorys: Object
})
</script>
