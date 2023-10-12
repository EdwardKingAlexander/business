<script setup>

import { ref } from 'vue';
import VueTailwindDatepicker from "vue-tailwind-datepicker";

const selectedDate = ref([]);


</script>

<template>
    <div>
        <vue-tailwind-datepicker v-model="selectedDate" as-single />
    </div>
</template>