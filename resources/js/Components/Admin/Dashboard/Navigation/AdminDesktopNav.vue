<script setup>

import AdminSideBarLink from '@/Components/Admin/Dashboard/Navigation/AdminSideBarLink.vue';
import DashboardIcon from '@/Components/Admin/Dashboard/Navigation/Icons/DashboardIcon.vue';
import BillsTrackerIcon from '@/Components/Admin/Dashboard/Navigation/Icons/BillsTrackerIcon.vue';
import CropsIcon from '@/Components/Admin/Dashboard/Navigation/Icons/CropsIcon.vue';
import InventoryIcon from '@/Components/Admin/Dashboard/Navigation/Icons/InventoryIcon.vue';
import TasksIcon from '@/Components/Admin/Dashboard/Navigation/Icons/TasksIcon.vue';
import CRMIcon from '@/Components/Admin/Dashboard/Navigation/Icons/CRMIcon.vue';
import AssetManagerIcon from '@/Components/Admin/Dashboard/Navigation/Icons/AssetManagerIcon.vue';  
import AIAssistantIcon from '@/Components/Admin/Dashboard/Navigation/Icons/AIAssistantIcon.vue';  
import ReportsIcon from '@/Components/Admin/Dashboard/Navigation/Icons/ReportsIcon.vue';
import BugTrackerIcon from '@/Components/Admin/Dashboard/Navigation/Icons/BugTrackerIcon.vue';
import SettingsIcon from '@/Components/Admin/Dashboard/Navigation/Icons/SettingsIcon.vue';


const props = defineProps({
    isActiveCheck: Function,
});

const emit = defineEmits(['toggle-sidebar']);

const toggleSidebar = () => {
    emit('toggle-sidebar');
};


</script>

<template>
    <nav class="mt-5 flex flex-1 flex-col divide-y divide-red-800 overflow-y-auto" aria-label="Sidebar">
            <div class="space-y-1 px-2">

              <AdminSideBarLink :routeName="'admin.dashboard.index'" :data="{
                'active': isActiveCheck('admin.dashboard.index'),
              }">
                <DashboardIcon />
                Dashboard
              </AdminSideBarLink>


              <AdminSideBarLink :active="isActiveCheck ? true : false" :routeName="'expenses.index'" :data="{
                'active': isActiveCheck('expenses.index'),
              }">
              <BillsTrackerIcon />
                Bills Tracker
              </AdminSideBarLink>

              <AdminSideBarLink :active="isActiveCheck ? true : false" :routeName="'crops.index'" :data="{
                'active': isActiveCheck('crops.index'),
              }">
              <CropsIcon />
                  Crops

              </AdminSideBarLink>



              <AdminSideBarLink :active="isActiveCheck ? true : false" :routeName="'inventory.index'" :data="{
                'active': isActiveCheck('inventory.index'),
              }">
              <InventoryIcon />
                Inventory
              </AdminSideBarLink>

              <AdminSideBarLink :active="isActiveCheck ? true : false" :routeName="'tasks.index'" :data="{
                'active': isActiveCheck('tasks.index'),
              }">
              <TasksIcon />
                Tasks
              </AdminSideBarLink>


              <a href="#"
                class="text-red-100 hover:bg-red-600 hover:text-white group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6">
                <CRMIcon />
                CRM
              </a>

              <a href="#"
                class="text-red-100 hover:bg-red-600 hover:text-white group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6">
                <AssetManagerIcon />
                Asset Manager
              </a>

              <a href="#"
                class="text-red-100 hover:bg-red-600 hover:text-white group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6">
                <AIAssistantIcon />
                
                AI Assistant
              </a>

              <a href="#"
                class="text-red-100 hover:bg-red-600 hover:text-white group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6">
                <ReportsIcon />
                Reports
              </a>


              <a href="#"
                class="text-red-100 hover:bg-red-600 hover:text-white group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6">
                <BugTrackerIcon />

                Bug Tracker
              </a>
            </div>


            <div class="mt-6 pt-6">
              <div class="space-y-1 px-2">
                <a href="#"
                  class="group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6 text-red-100 hover:bg-red-600 hover:text-white">
                  <SettingsIcon />
                  Settings
                </a>
                <a href="#"
                  class="group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6 text-red-100 hover:bg-red-600 hover:text-white">
                  <svg class="mr-4 h-6 w-6 text-red-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                  </svg>
                  Help
                </a>
                <a href="#"
                  class="group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6 text-red-100 hover:bg-red-600 hover:text-white">
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
</template>