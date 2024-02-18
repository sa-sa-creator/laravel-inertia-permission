<template>
    <AdminLayout>
    <Head title="Create new" />
        <div class="p-12">
            <Link
            :href="route('role.create')">
                New Role
            </Link>
            <div
                v-for="role in roles.data" :key="role.id">
                <label>Id: </label>{{ role.id }}
                <label>Name: </label>{{ role.name }}
                <!-- <Link :href="`/user/${user.id}`">Show</Link> | -->
                <Link :href="`/role/${role.id}/edit`" class="text-green-500">Edit</Link>|
                <Link :href="`/role/${role.id}`" method="delete" as="button" class="text-red-600">Delete</Link>
            </div>
        </div>

    </AdminLayout>
</template>

<script setup>

import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Link, Head } from '@inertiajs/vue3';

defineProps({
    roles: Array
})
</script>
