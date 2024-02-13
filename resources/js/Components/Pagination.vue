<template>
    <div>
        <Link
            v-for="(link , index) in links"
            :key="index" class="text-blue-800"
            :href="link.url"
            :class="{'text-red-900': link.active}"
            v-html="link.label">

        </Link>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';
defineProps({
    links: Array
})
</script>
