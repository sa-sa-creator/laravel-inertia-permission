<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import VueMultiselect from 'vue-multiselect'

const props = defineProps({
    user: Object,
    roles: Array
});

const form = useForm({
    name: props.user?.name,
    email: props.user?.email,
    roles: []
});



const submit = () => {
    form.put(route('users.update',props.user?.id));
};
</script>

<template>
    <AdminLayout>
        <Head title="Register" />
    <div class="px-20 py-10">


        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="block w-full mt-1"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="block w-full mt-1"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <VueMultiselect
                        v-model="form.roles"
                        :options="roles"
                        :multiple="false"
                        :close-on-select="true"
                        placeholder="Pick some"
                        label="name"
                        track-by="id"
                />
            </div>

            <div class="flex items-center justify-end mt-4">


                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Update
                </PrimaryButton>
            </div>
        </form>
    </div>
    </AdminLayout>
</template>

<style src="vue-multiselect/dist/vue-multiselect.css"></style>
