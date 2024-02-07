<template>
<AdminLayout>
    <div class="p-12">
    <div>Name: {{ category.cate_name }}</div><br>
    <div>Description: {{ category.cate_name }}</div>
    </div>

</AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
defineProps({
    category: Array
})
</script>
