<template>
    <AdminLayout>
        <div class="px-20 py-10">
            <div v-for="user in users" :key="user.id">
                <label for="user.name">Username: </label>{{ user.name }}
                <label for="user.email">, Email: </label>{{ user.email }}

            </div>
        </div>

    </AdminLayout>

</template>


<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';

defineProps({
    users: Array
})
</script>



