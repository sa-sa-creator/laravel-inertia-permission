<template>
    <AdminLayout>
        <div class="px-20 py-10">
            <Link
            :href="route('roles.create')"
            >
            New Role
            </Link>
            <div v-for="role in roles" :key="role.id">
                <label for="role.id">Id: </label>{{ role.id }}
                <label for="role.name">, Role: </label>{{ role.name }}
                <Link
                :href="route('roles.edit',role.id)"
                class="text-green-600">Edit</Link> |
                <Link
                :href="route('roles.destroy',role.id)"
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
    roles: Array
})
</script>



