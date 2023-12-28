<script setup>
import { ref } from 'vue';
import DatePicker from '@/Components/DatePicker.vue';

const dueDate = ref(null);

function addDueDate() {

    //emit this up....same with the category
//   if(showCategories.value == true) {
//     showCategories.value = !showCategories.value;
//   }
    dueDate.value = !dueDate.value;
}
</script>

<template>
    <div class="flex-shrink-0">
        <label id="listbox-label" class="sr-only">Add a due date</label>
        <DatePicker />
      </div>
      
</template>