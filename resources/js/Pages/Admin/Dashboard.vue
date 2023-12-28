<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import DashboardMainContent from '@/Components/Admin/Expenses/DashboardMainContent.vue';
import { usePage } from '@inertiajs/vue3';

defineProps({
    transactions: {
        type: Object,
        required: true
    },
});


</script>

<template>
    <AdminLayout>
        <template v-slot:main-content>
            <DashboardMainContent :transactions="transactions" />

            
        </template>
        </AdminLayout>
</template>