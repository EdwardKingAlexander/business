<script setup>
import { ref } from 'vue';

import AdminMobileNav from '@/Components/Admin/Dashboard/Navigation/AdminMobileNav.vue';
import AdminDesktopNav from '@/Components/Admin/Dashboard/Navigation/AdminDesktopNav.vue';


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
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=red&shade=200"
              alt="Easywire logo">
          </div>
          
          <AdminDesktopNav 
          :isActiveCheck="isActiveCheck">
          </AdminDesktopNav>


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