<script setup>
import { ref } from 'vue';

import AdminMobileNav from '@/Components/Admin/Dashboard/Navigation/AdminMobileNav.vue';
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

const showingNavigationDropdown = ref(false);
const showSidebar = ref(false);


function toggleDropdown() {
  showingNavigationDropdown.value = !showingNavigationDropdown.value;
}

function isActiveCheck(routeName) {
  return route().current(routeName);
}

function toggleSidebar() {
  showSidebar.value = !showSidebar.value;
}





</script>

<template>
  <div>
    <div class="min-h-full">
      <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
      <AdminMobileNav 
      v-show="showSidebar"
      :showSideBar="showSidebar"
       :active="isActiveCheck ? true : false"
      @toggle-sidebar="toggleSidebar">

      </AdminMobileNav>

      <!-- Static sidebar for desktop -->
      <div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-64 lg:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-grow flex-col overflow-y-auto bg-red-700 pb-4 pt-5">
          <div class="flex flex-shrink-0 items-center px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=red&shade=300"
              alt="Easywire logo">
          </div>
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
                <svg class="mr-4 h-6 w-6 flex-shrink-0 text-red-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
</svg>

                Bug Tracker
              </a>
            </div>
            <div class="mt-6 pt-6">
              <div class="space-y-1 px-2">
                <a href="#"
                  class="group flex items-center rounded-md px-2 py-2 text-sm font-medium leading-6 text-red-100 hover:bg-red-600 hover:text-white">
                  <svg class="mr-4 h-6 w-6 text-red-200" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                  </svg>
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
        </div>
      </div>

      <div class="flex flex-1 flex-col lg:pl-64">
        <div class="flex h-16 flex-shrink-0 border-b border-gray-200 bg-white lg:border-none">
          <button @click="toggleSidebar" type="button"
            class="border-r border-gray-200 px-4 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-red-500 lg:hidden">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
            </svg>
          </button>
          <!-- Search bar -->
          <div class="flex flex-1 justify-between px-4 sm:px-6 lg:mx-auto lg:max-w-6xl lg:px-8">
            <div class="flex flex-1">
              <form class="flex w-full md:ml-0" action="#" method="GET">
                <label for="search-field" class="sr-only">Search</label>
                <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                  <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center" aria-hidden="true">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                        clip-rule="evenodd" />
                    </svg>
                  </div>
                  <input id="search-field" name="search-field"
                    class="block h-full w-full border-transparent py-2 pl-8 pr-3 text-gray-900 focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                    placeholder="Search transactions" type="search">
                </div>
              </form>
            </div>
            <div class="ml-4 flex items-center md:ml-6">
              <button @click="toggleDropdown" type="button"
                class="relative rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div v-show="showingNavigationDropdown" class="relative ml-3">
              <div>
                <button @click="toggleDropdown" type="button"
                  class="relative flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 lg:rounded-md lg:p-2 lg:hover:bg-gray-50"
                  id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5 lg:hidden"></span>
                  <img class="h-8 w-8 rounded-full"
                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                  <span class="ml-3 hidden text-sm font-medium text-gray-700 lg:block"><span class="sr-only">Open user
                      menu for </span> {{ $page.props.auth.user.name }} </span>
                  <svg class="ml-1 hidden h-5 w-5 flex-shrink-0 text-gray-400 lg:block" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                      d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </div>

              <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
              <div 
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-2">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <slot name="main-content"></slot>
    </div>
  </div>

</div></template>