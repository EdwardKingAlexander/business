<script setup>

import { onMounted, ref } from 'vue';

const props = defineProps({
  categories: {
    type: Array,
    required: true
  },  
  // tasks: {
  //       type: Array,
  //       required: true
  //   }
});

const showModal = ref(false);
const showCategories = ref(false);
const dueDate = ref(null);
const selectedCategory = ref(null);

function toggleModal() {
    showModal.value = !showModal.value;
}

function addCategory() {
    showCategories.value = !showCategories.value;
}

function selectCategory(categoryId) {
  console.log(categoryId);
}

function addDueDate() {
    dueDate.value = !dueDate.value;
}


</script>

<template>

<!-- Start of Modal -->

<div class="p-3 sm:w-1/2 lg:w-3/4 mx-auto">
<form v-show="showModal" action="#" class="relative">
  <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
    <label for="title" class="sr-only">Title</label>
    <input type="text" name="title" id="title" class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0" placeholder="Title">
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

          <!--
            Select popover, show/hide based on select state.

            Entering: ""
              From: ""
              To: ""
            Leaving: "transition ease-in duration-100"
              From: "opacity-100"
              To: "opacity-0"
          -->
          <ul v-show="showCategories" class="absolute right-0 z-10 mt-1 max-h-56 w-52 overflow-auto rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">
            <!--
              Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

              Highlighted: "bg-gray-100", Not Highlighted: "bg-white"
            -->
            <li v-for="category in categories" :key="category.id" class="bg-white relative cursor-default select-none px-3 py-2" id="listbox-option-0" role="option">
              <div @click="selectCategory(category.id)" class="flex items-center">
                <span class="block truncate font-medium">{{ category.category }}</span>
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
    <div class="flex items-center justify-between space-x-3 border-t border-gray-200 px-2 py-2 sm:px-3">
      <div class="flex">
        <button type="button" class="group -my-2 -ml-2 inline-flex items-center rounded-full px-3 py-2 text-left text-gray-400">
          <svg class="-ml-1 mr-2 h-5 w-5 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
          </svg>
          <span class="text-sm italic text-gray-500 group-hover:text-gray-600">Attach a file</span>
        </button>
      </div>
      <div class="flex-shrink-0">
        <button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
      </div>
    </div>
  </div>
</form>
</div>

<!-- End of modal -->
    <div v-show="!showModal" class="mx-auto px-4 sm:w-1/2 lg:w-3/4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Tasks</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the tasks left to complete.</p>
            </div>
            
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-0">
                                    Task</th>
                            
                                <th scope="col" class="relative py-3 pl-3 pr-4 sm:pr-0">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                    Lindsay Walton Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur recusandae ut qui ex libero facere aspernatur tempora iusto alias corporis labore suscipit quam temporibus omnis, ratione soluta minima ipsam consectetur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi libero voluptatibus amet veniam ullam sint assumenda? Facilis labore iusto sequi hic in voluptatibus doloribus molestiae, et fugiat dicta quo iste! </td>
                            
                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">,
                                            Lindsay Walton</span></a>
                            </td>
                        </tr>

                        <!-- More people... -->
                    </tbody>
                </table>
            </div>
        </div>
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