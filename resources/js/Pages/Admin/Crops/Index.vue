<script setup>
import { Head } from '@inertiajs/vue3';

import AdminLayout from '@/Layouts/AdminLayout.vue';
import DashboardMainContent from '@/Components/Admin/Expenses/DashboardMainContent.vue';

const props = defineProps({
    message: {
        type: String,
        required: false,
    }
})


function isItAm() {
  const now = new Date();
  const hours = now.getHours();
  
  if (hours >= 0 && hours < 12) {
    return true;
  } else {
    return false;
  }
}

</script>

<template>
    <Head title="Crops" />
    

    
    <AdminLayout>
        
       
        <template v-slot:main-content>
          <!-- Replace DashboardMainContent with CropsMainContent -->
            <DashboardMainContent />

        </template>

    </AdminLayout>
</template>