<script setup>

import { Head, usePage } from '@inertiajs/vue3';
import { ref } from 'vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';


const showModal = ref(false);
const showCategories = ref(false);
const dueDate = ref(null);

const props = defineProps({
    expenses: {
        type: Array,
        required: true
    },
    message: {
        type: String,
        required: true
    }
});

function toggleModal() {
    showModal.value = !showModal.value;
}

function addCategory() {
    showCategories.value = !showCategories.value;
}

function addDueDate() {
    dueDate.value = !dueDate.value;
}



</script>

<template>
    
    <Head title="Expenses" />

    <AdminLayout>
        
        <template v-slot:main-content>

          
  <div class="bg-white px-6 sm:py-16 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Expenses</h2>
      <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
    </div>
  </div>



 <div v-show="!showModal">
  <ul role="list" class="divide-y divide-gray-100">
    <li v-for="expense in expenses" :key="expense.id" class="relative py-5 hover:bg-gray-50">
      <div class="px-4 sm:px-6 lg:px-8">
        <div class="mx-auto flex max-w-4xl justify-between gap-x-6">
          <div class="flex min-w-0 gap-x-4">
            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            <div class="min-w-0 flex-auto">
              <p class="text-sm font-semibold leading-6 text-gray-900">
                <a :href="expense.href">
                  <span class="absolute inset-x-0 -top-px bottom-0" />
                  {{ expense.description }}
                </a>
              </p>
              <p class="mt-1 flex text-sm leading-5 text-red-500">
                <a :href="`mailto:${expense.amount}`" class="relative truncate hover:underline">${{ expense.amount }}</a>
              </p>
              <p class="mt-1 flex text-sm leading-5 text-gray-500" >{{expense.created_at}}</p>
            </div>
          </div>
       
        </div>
      </div>
    </li>
  </ul>

  <!-- Add the button from TasksMainContent (extract it into component) to add expenses and income -->

 </div>

 <div v-show="showModal" >
  <div class="p-3 sm:w-1/2 lg:w-3/4 mx-auto">
<form v-show="showModal" action="#" class="relative">
  <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
    <label for="title" class="sr-only">Expense</label>
    <input type="text" name="title" id="title" class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0" placeholder="Expense">
    <label for="description" class="sr-only">Description</label>
    <textarea rows="2" name="description" id="description" class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Write a description..."></textarea>

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
    <!-- Actions: These are just examples to demonstrate the concept, replace/wire these up however makes sense for your project. -->
    <div class="flex flex-nowrap justify-end space-x-2 px-2 py-2 sm:px-3">
     
      <div class="flex-shrink-0">
        <label id="listbox-label" class="sr-only">Add a category</label>
        <div class="relative">
          <button @click="addCategory" type="button" class="relative inline-flex items-center whitespace-nowrap rounded-full bg-gray-50 px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 sm:px-3" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
            <!-- Selected: "text-gray-300", Default: "text-gray-500" -->
            <svg class="h-5 w-5 flex-shrink-0 text-gray-300 sm:-ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.5 3A2.5 2.5 0 003 5.5v2.879a2.5 2.5 0 00.732 1.767l6.5 6.5a2.5 2.5 0 003.536 0l2.878-2.878a2.5 2.5 0 000-3.536l-6.5-6.5A2.5 2.5 0 008.38 3H5.5zM6 7a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
            </svg>
            <!-- Selected: "text-gray-900" -->
            <span class="hidden truncate sm:ml-2 sm:block">Category</span>
          </button>

          <ul v-show="showCategories" class="absolute right-0 z-10 mt-1 max-h-56 w-52 overflow-auto rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">
            <!--
              Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

              Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
            -->
            <li class="bg-white relative cursor-default select-none px-3 py-2" id="listbox-option-0" role="option">
              <div class="flex items-center">
                <span class="block truncate font-medium">Expense</span>
              </div>
            </li>
            <!--
              Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

              Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
            -->
            <li class="bg-white relative cursor-default select-none px-3 py-2" id="listbox-option-1" role="option">
              <div class="flex items-center">
                <span class="block truncate font-medium">Deposit</span>
              </div>
            </li>

            <!-- More items... -->
          </ul>
        </div>
      </div>

      <div class="flex-shrink-0">
        <label id="listbox-label" class="sr-only">Add a due date</label>
        <div class="relative">
          <button @click="addDueDate" type="button" class="relative inline-flex items-center whitespace-nowrap rounded-full bg-gray-50 px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 sm:px-3" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
            <!-- Selected: "text-gray-300", Default: "text-gray-500" -->
            <svg class="h-5 w-5 flex-shrink-0 text-gray-300 sm:-ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
            </svg>
            <!-- Selected: "text-gray-900" -->
            <span class="hidden truncate sm:ml-2 sm:block">Due date</span>
          </button>

          <!--
            Select popover, show/hide based on select state.

            Entering: ""
              From: ""
              To: ""
            Leaving: "transition ease-in duration-100"
              From: "opacity-100"
              To: "opacity-0"
          -->
          <ul v-show="dueDate" class="absolute right-0 z-10 mt-1 max-h-56 w-52 overflow-auto rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">
            <!--
              Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

              Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
            -->
            <li class="bg-white relative cursor-default select-none px-3 py-2" id="listbox-option-0" role="option">
              <div class="flex items-center">
                <span class="block truncate font-medium">No due date</span>
              </div>
            </li>
            <!--
              Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

              Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
            -->
            <li class="bg-white relative cursor-default select-none px-3 py-2" id="listbox-option-1" role="option">
              <div class="flex items-center">
                <span class="block truncate font-medium">Today</span>
              </div>
            </li>

            

            <!-- More items... -->
          </ul>
        </div>
      </div>
      
    </div>

   
    <div class="flex items-center justify-end space-x-3 border-t border-gray-200 px-2 py-2 sm:px-3">

    
      
      <div class="flex-shrink-0">

        <div class="mb-2">
          <input v-model="formattedText" type="text" name="text" id="text" class="block w-full rounded-md  py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="$0.00">
        </div>
        <button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Expense</button>
      </div>
    </div>
  </div>
</form>
</div>
 </div>

 <div class="fixed bottom-4 right-4">


<button v-if="!showModal" @click="toggleModal" type="button"
    class="rounded-md bg-indigo-600 px-3 m-5 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
  Add Task
</button>

<button v-else @click="toggleModal" type="button"
    class="rounded-md bg-red-600 px-3 m-5 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-600">
  Cancel
</button>



</div>

</template>
    


    </AdminLayout>

</template>