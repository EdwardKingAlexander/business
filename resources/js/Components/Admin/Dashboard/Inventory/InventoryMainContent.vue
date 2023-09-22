<script setup>
import Row from '@/Components/Admin/Dashboard/Inventory/InventoryRow.vue';
import Headers from '@/Components/Admin/Dashboard/Inventory/RowHeaders.vue';

const props = defineProps({
    products: {
        type: Array,
        required: true
    }
});

</script>

<template>


<div class="px-4 sm:px-6 lg:px-8">

    
  <div class="sm:flex sm:items-center">
    
    <div class="sm:flex-auto">

        
      <h1 class="text-base font-semibold leading-6 text-gray-900">Inventory Items</h1>
    </div>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
      <button type="button" class="block rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Add Product</button>
    </div>
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <table class="min-w-full divide-y divide-gray-300">
          <thead>
            <tr>
              <Headers />
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            <Row />
            


            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</template>