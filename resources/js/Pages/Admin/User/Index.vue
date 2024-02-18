<template>
    <AdminLayout>
    <Head title="Create new" />
        <div class="p-12">
            <div
                v-for="user in users" :key="user.id">
                <label>Username: </label>{{ user.name }}<br/>
                <label>Email: </label>{{ user.email }}
                <!-- <Link :href="`/user/${user.id}`">Show</Link> |
                <Link :href="`/user/${user.id}/edit`">Edit</Link> |
                <Link :href="`/user/${category.id}`" method="delete" as="button">Delete</Link> -->
            </div>
        </div>

    </AdminLayout>
</template>

<script setup>

import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Link, Head } from '@inertiajs/vue3';

defineProps({
    users: Array
})
</script>
