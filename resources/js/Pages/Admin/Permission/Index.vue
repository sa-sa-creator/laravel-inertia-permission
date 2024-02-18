<template>
    <AdminLayout>
        <div class="px-20 py-10">
            <div v-for="permission in permissions" :key="permission.id">
                <label for="permission.id">Id: </label>{{ permission.id }}
                <label for="permission.name">, Permission: </label>{{ permission.name }}

            </div>
        </div>

    </AdminLayout>

</template>


<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
defineProps({
    permissions: Array
})
</script>



