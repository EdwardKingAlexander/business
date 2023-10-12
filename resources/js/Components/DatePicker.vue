<script setup>

import { ref } from 'vue';
import VueTailwindDatepicker from "vue-tailwind-datepicker";

const selectedDate = ref([]);
const formatter = ref({
    date: 'DD MMM YYYY',
    month: 'MMM',
});

</script>

<template>
    <div class="w-1/3 mx-auto">
        <vue-tailwind-datepicker 
        placeholder="Select a date"
        v-model="selectedDate" 
        :formatter="formatter"
        as-single 
        input-classes=" text-center border-2 border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
        />
    </div>
</template>