<script setup>

import { Head, usePage } from '@inertiajs/vue3';
import Content from '@/Components/Admin/Dashboard/Tasks/TasksMainContent.vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
 
const props = defineProps({
    categories: {
        type: Array,
        default: () => [],
    },
});


</script>


<template>

    <Head title="Inventory" />
    <AdminLayout>
        
       
        <template v-slot:main-content>
            <Content :categories="categories" />

        </template>

    </AdminLayout>
</template>