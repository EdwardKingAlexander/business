<script setup>
import { onMounted, ref } from 'vue';

const props = defineProps({
    routeName: {
        type: String,
        required: true
    },
    active: {
        type: Boolean,
        required: false,
        default: false
    },
    data: {
        type: Object,
        required: false,
    }
    
});




</script>


<template>
    <!-- Current: "bg-red-800 text-white", Default: "" -->
    <a 
    
    :href="route(routeName)" 
    :class="`group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6 
    ${props.data.active ? 'bg-red-800 text-white' 
    : 
    'text-red-100 hover:bg-red-600 hover:text-white'
    }`" 
    aria-current="page" >
            <slot />
          </a>
</template>
