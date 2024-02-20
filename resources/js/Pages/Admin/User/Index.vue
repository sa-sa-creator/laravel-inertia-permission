<template>
    <AdminLayout>
        <div class="px-20 py-10">
            <Link :href="route('users.create')">
                New User
            </Link>
            <div v-for="user in users" :key="user.id">
                <label for="user.name">Username: </label>{{ user.name }}
                <label for="user.email">, Email: </label>{{ user.email }}
                <Link
                :href="route('users.edit',user.id)"
                class="text-green-600">Edit</Link> |
                <Link
                :href="route('users.destroy',user.id)"
                method="delete" as="button"
                class="text-red-600">Delete</Link>
            </div>
        </div>

    </AdminLayout>

</template>


<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    users: Array
})
</script>



