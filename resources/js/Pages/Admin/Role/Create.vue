<template>
<AdminLayout>
    <form @submit.prevent="create">
        <div class="px-20 py-10">
            <div>
                <label for="form.name">Name: </label>
                <input v-model="form.name" type="text" />
                <div v-if="form.errors.name">
                    {{ form.errors.name }}
                </div>
            </div>
            <VueMultiselect
                        v-model="form.permissions"
                        :options="permissions"
                        :multiple="true"
                        :close-on-select="true"
                        placeholder="Pick some"
                        label="name"
                        track-by="id"
            />
            <div>
                <button type="submit">Save</button>
            </div>
        </div>
    </form>
</AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { useForm } from '@inertiajs/vue3';
import VueMultiselect from 'vue-multiselect'

const props = defineProps({
    permissions: Array
})
const form = useForm({
    name: null,
    permissions: []
})
const create = ()=> form.post(route('roles.store', {}));

</script>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
