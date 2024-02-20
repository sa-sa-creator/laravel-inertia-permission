<template>
    <AdminLayout>
        <div class="px-20 py-10">
            <Link
            :href="route('permissions.create')"
            >
            New Permission
            </Link>
            <div v-for="permission in permissions" :key="permission.id">
                <label for="permission.id">Id: </label>{{ permission.id }}
                <label for="permission.name">, Permission: </label>{{ permission.name }}
                <Link
                :href="route('permissions.edit',permission.id)"
                class="text-green-600">Edit</Link> |
                <Link
                :href="route('permissions.destroy',permission.id)"
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
    permissions: Array
})
</script>



