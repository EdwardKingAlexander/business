<script setup>

import { Head, usePage } from '@inertiajs/vue3';
import Content from '@/Components/Admin/Dashboard/Inventory/InventoryMainContent.vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
 
// const  = usePage().props.message;
const products = defineProps({
    products: {
        type: Array,
        required: true
    }
});


</script>


<template>

    <Head title="Inventory" />
    <AdminLayout>
        
       
        <template v-slot:main-content>
            <Content />

        </template>

    </AdminLayout>
</template>