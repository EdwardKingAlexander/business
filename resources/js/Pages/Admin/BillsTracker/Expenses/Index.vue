<script setup>

import { Head, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';



const expenses = ref([]);
const message = 'Hello World!';
const initialData = usePage().props.initialData;



</script>

<template>
    
    <Head title="Expenses" />

    <AdminLayout />
    

    <div class="p-3">
        Expenses
        
            <p v-for="transaction in initialData.expenses" :key="transaction.id" class="text-lg">
                {{ transaction.expense }}
               <span class="text-md text-red-400">  ${{ transaction.amount }}</span>
            </p>
        
    </div>

</template>