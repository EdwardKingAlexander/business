<script setup>

import AdminLayout from '@/Layouts/AdminLayout.vue';
import DashboardMainContent from '@/Components/Admin/Dashboard/DashboardMainContent.vue';


</script>

<template>
    <AdminLayout>
        <template v-slot:main-content>
            <DashboardMainContent />

            
        </template>
        </AdminLayout>
</template>