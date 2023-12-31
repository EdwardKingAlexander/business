<script setup>

import { Head, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Category from '@/Components/Admin/Expenses/Category.vue';
import DueDate from '@/Components/Admin/Expenses/DueDate.vue';
import axios from 'axios';
import { createdAt } from '@/Helpers/dates.js';

const user = usePage().props.auth.user;
const showModal = ref(false);

const modalIndigoClasses = `bg-indigo-600 hover:bg-indigo-500 focus:ring-indigo-600 ${modalClasses}`;
const modalRedClasses = `bg-red-600 hover:bg-red-500  focus:ring-red-600 ${modalClasses}`;
const modalClasses = 'rounded-md px-3 m-5 py-2 text-center text-sm font-semibold text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2';


const formData = ref({
  expense: '',
  description: '',
  amount: '',
  entry_date: '2024-12-23',
  user_id: user.id,
  expense_category_id: 1,
});

const props = defineProps({
    expenses: {
        type: Array,
        required: true
    },
    message: {
        type: String,
        required: true
    },
    expenseTotal: {
        type: String,
        required: true
    }
});

const addExpense = async () => {

  // if window.confirm('Are you sure you want to add this expense?') 

        await axios.post('/api/expenses', {
        expense: formData.value.expense,
        description: formData.value.description,
        amount: formData.value.amount,
        entry_date: formData.value.entry_date,
        user_id: formData.value.user_id,
        expense_category_id: 1,
    
    })
    .then(response => {
      updateExpenses();
        console.log(response.data);
        showModal.value = !showModal.value;
        
    })
    .catch(error => {
        console.log(error);
    })
  
}

const updateExpenses =  () => {
     axios.get('/api/expenses')
    .then(console.log('Expenses updated'))
    .catch(error => {
        console.log(error);
    })
}


const toggleModal = () => {
    showModal.value = !showModal.value;
}




</script>

<template>
    
    <Head title="Expenses" />

    <AdminLayout>
        
        <template v-slot:main-content>

          
  <div class="bg-white px-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Total Expenses this Month:<span class="text-red-600"> ${{ expenseTotal }} </span></h2>
      
    </div>
  </div>


  <div 
  class="grid grid-cols-1 gap-4 sm:grid-cols-3 m-3" 
  v-show="!showModal">
  <div 
  v-for="expense in expenses" 
  :key="expense.id" 
  class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
    <div class="flex-shrink-0">
      <img 
      class="h-10 w-10 rounded-full" 
      src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
      alt="">
    </div>
    <div class="min-w-0 flex-1">
      <a 
      href="#" 
      class="focus:outline-none">
        <span 
        class="absolute inset-0" 
        aria-hidden="true"></span>
        <p class="text-sm font-medium text-gray-900">{{ expense.expense }}</p>
        <p class="truncate text-sm text-gray-500">${{ expense.amount }} - {{ expense.description }}</p>
        <p class="text-sm text-gray-500" >{{ createdAt(expense.created_at) }}</p>
      </a>
    </div>
  </div>

  <!-- More expenses... -->
</div>



 <div v-show="showModal" >
  <div class="p-3 sm:w-1/2 lg:w-3/4 mx-auto">

    <form @submit.prevent="addExpense" v-show="showModal" class="relative">
  <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
    
    <label for="expense" class="sr-only">Expense</label>
    <input 
    required
    v-model="formData.expense"
    type="text" 
    name="expense" 
    id="expense" 
    class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0" 
    placeholder="Expense">
    
    <label for="description" class="sr-only">Description</label>
    <textarea 
    required 
    v-model="formData.description" 
    rows="4" 
    name="description" 
    id="description" 
    class="block w-full resize-none border-0 py-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" 
    placeholder="Write a description..."></textarea>

    <!-- Spacer element to match the height of the toolbar -->
    <div aria-hidden="true">
      <div class="py-2">
        <div class="h-9"></div>
      </div>
      <div class="h-px"></div>
      <div class="py-2">
        <div class="py-px">
          <div class="h-9"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="absolute inset-x-px bottom-0">
    <div class="flex flex-nowrap justify-end space-x-2 px-2 py-2 sm:px-3">
     
      <Category  />

      <DueDate 
      v-model="formData.entry_date" />
    </div>

   
    <div class="flex items-center justify-end space-x-3 border-t border-gray-200 px-2 py-2 sm:px-3">

    
      
      <div class="flex-shrink-0">

        <div class="mb-2">
          <input 
          required 
          v-model="formData.amount" 
          type="text" 
          name="amount" 
          id="amount" 
          class="block w-full rounded-md  py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
          placeholder="$0.00">
        </div>
        <button 
        type="submit" 
        class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 m-2">Add Expense</button>

        <button 
        class="inline-flex items-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600 m-2">Add Category</button>
      </div>
    </div>
  </div>
</form>
</div>
 </div>

 <div class="fixed bottom-4 right-4">


<button v-if="!showModal" @click="toggleModal" type="button"
    :class="modalIndigoClasses">
  Add Expense
</button>

<button v-else @click="toggleModal" type="button"
    :class="modalRedClasses">
  Cancel
</button>



</div>

</template>
    


    </AdminLayout>

</template>