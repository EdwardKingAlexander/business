<script setup>

import AdminMobileSideBarLink from './AdminMobileSideBarLink.vue';
import DashboardIcon from '@/Components/Admin/Dashboard/Navigation/Icons/DashboardIcon.vue';
import BillsIcon from '@/Components/Admin/Dashboard/Navigation/Icons/BillsTrackerIcon.vue';
import CropsIcon from '@/Components/Admin/Dashboard/Navigation/Icons/CropsIcon.vue';
import InventoryIcon from '@/Components/Admin/Dashboard/Navigation/Icons/InventoryIcon.vue';
import TasksIcon from '@/Components/Admin/Dashboard/Navigation/Icons/TasksIcon.vue';
import CRMIcon from '@/Components/Admin/Dashboard/Navigation/Icons/CRMIcon.vue';
import ReportsIcon from '@/Components/Admin/Dashboard/Navigation/Icons/ReportsIcon.vue';

const props = defineProps({
    showSidebar: Boolean,
    toggleSidebar: Function,
});

const emit = defineEmits(['toggle-sidebar']);

const toggleSidebar = () => {
    emit('toggle-sidebar');
};

</script>


<template>
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

        <div class="fixed inset-0 z-40 flex">
            <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
            <div class="relative flex w-full max-w-xs flex-1 flex-col bg-red-700 pb-4 pt-5">
                <!--
          Close button, show/hide based on off-canvas menu state.

          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
                <div class="absolute right-0 top-0 -mr-12 pt-2">
                    <button @click="toggleSidebar" type="button"
                        class="relative ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-shrink-0 items-center px-4">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=red&shade=300"
                        alt="Easywire logo">
                </div>
                <nav class="mt-5 h-full flex-shrink-0 divide-y divide-red-800 overflow-y-auto" aria-label="Sidebar">
                    <div class="space-y-1 px-2">
                        <!-- Current: "bg-red-800 text-white", Default: "text-red-100 hover:bg-red-600 hover:text-white" -->

                        <AdminMobileSideBarLink :routeName="'admin.dashboard.index'">
                            <DashboardIcon />
                            Dashboard
                        </AdminMobileSideBarLink>

                        <AdminMobileSideBarLink :routeName="'expenses.index'">
                            <BillsIcon />
                            Bills Tracker
                        </AdminMobileSideBarLink>

                        <AdminMobileSideBarLink :routeName="'expenses.index'">
                            <CropsIcon />
                            Crops
                        </AdminMobileSideBarLink>
                        
                        <AdminMobileSideBarLink :routeName="'expenses.index'">
                            <InventoryIcon />
                            Inventory
                        </AdminMobileSideBarLink>

                        <AdminMobileSideBarLink :routeName="'expenses.index'">
                            <TasksIcon />
                            Tasks
                        </AdminMobileSideBarLink>


                        <AdminMobileSideBarLink :routeName="'expenses.index'">
                            <CRMIcon />
                            CRM
                        </AdminMobileSideBarLink>


                        <AdminMobileSideBarLink :routeName="'expenses.index'">
                            <ReportsIcon />
                            Reports
                        </AdminMobileSideBarLink>


                    </div>
                    <div class="mt-6 pt-6">
                        <div class="space-y-1 px-2">
                            <a href="#"
                                class="group flex items-center rounded-md px-2 py-2 text-base font-medium text-red-100 hover:bg-red-600 hover:text-white">
                                
                                Settings
                            </a>
                            <a href="#"
                                class="group flex items-center rounded-md px-2 py-2 text-base font-medium text-red-100 hover:bg-red-600 hover:text-white">
                                <svg class="mr-4 h-6 w-6 text-red-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                </svg>
                                Help
                            </a>
                            <a href="#"
                                class="group flex items-center rounded-md px-2 py-2 text-base font-medium text-red-100 hover:bg-red-600 hover:text-white">
                                <svg class="mr-4 h-6 w-6 text-red-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                </svg>
                                Privacy
                            </a>


                        </div>
                    </div>
                </nav>
            </div>

            <div class="w-14 flex-shrink-0" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>
</template>