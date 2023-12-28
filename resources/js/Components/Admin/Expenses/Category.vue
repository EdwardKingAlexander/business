<script setup>
import { ref } from 'vue';
const props = defineProps({
    dueDate: {
        type: Boolean,
    },
});

const selectedCategories = ref(null);

const categories = [
    {
        id: 1,
        name: 'Food',
    },
    {
        id: 2,
        name: 'Utilities',
    },
    {
        id: 3,
        name: 'Rent',
    },
    {
        id: 4,
        name: 'Transportation',
    },
    {
        id: 5,
        name: 'Entertainment',
    },
    {
        id: 6,
        name: 'Health',
    },
    {
        id: 7,
        name: 'Personal',
    },
    {
        id: 8,
        name: 'Miscellaneous',
    },
];

const showCategories = ref(false);


const addExpense = async () => {
    showModal.value = !showModal.value;

    try {
      const response = await axios.post('/admin/expenses', formData.value);
      console.log(response.data);

      // Clear the form data
      formData.value = {
        expense: '',
        description: '',
        amount: '',
      };
    } catch (error) {
      console.log(error);
    }

}


function addCategory() {
    
    showCategories.value = !showCategories.value;
    
    if(false)
    {
        selectedCategories.value = null;

    }
    
}

function selectCategory(category) {
    selectedCategories.value = category;
    console.log(category);
    showCategories.value = !showCategories.value;
}

</script>

<template>
    <div class="flex-shrink-0">
        <label id="listbox-label" class="sr-only">Add a category</label>
        <div class="relative">
          <button @click="addCategory" type="button" class="relative inline-flex items-center whitespace-nowrap rounded-full bg-gray-50 px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100  sm:px-3" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
            <!-- Selected: "text-gray-300", Default: "text-gray-500" -->
            <svg class="h-5 w-5 flex-shrink-0 text-gray-300 sm:-ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.5 3A2.5 2.5 0 003 5.5v2.879a2.5 2.5 0 00.732 1.767l6.5 6.5a2.5 2.5 0 003.536 0l2.878-2.878a2.5 2.5 0 000-3.536l-6.5-6.5A2.5 2.5 0 008.38 3H5.5zM6 7a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
            </svg>
            <!-- Selected: "text-gray-900" -->
            <span class="hidden truncate sm:ml-2 sm:block">{{ selectedCategories ? selectedCategories : 'Category' }}</span>
          </button>

          <ul  v-show="showCategories" class="absolute right-0 z-10 mt-1 max-h-56 w-52 overflow-auto rounded-lg bg-white py-3 text-base shadow ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-0">
            
            <li v-for="category in categories" :key="category" @click="selectCategory(category.name)" class="bg-white relative cursor-default select-none px-3 py-2 hover:bg-gray-100 hover:cursor-pointer" id="listbox-option-0" role="option">
              <div class="flex items-center">
                <span class="block truncate font-medium">{{ category.name }}</span>
              </div>
            </li>
            
            
          </ul>
        </div>
      </div>
</template>