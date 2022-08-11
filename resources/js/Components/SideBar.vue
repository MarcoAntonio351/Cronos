<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
</script>

//sidebar
<template>
    <div
      id="view"
      class="flex flex-row relative left-0" 
      x-data="{ sidenav: true }"

    >
      <button
        @click="sidenav = true"
        class="p-2 border-2 bg-white rounded-md border-gray-200 shadow-lg text-gray-500 focus:bg-teal-500 focus:outline-none focus:text-white absolute top-0 left-0 sm:hidden"
      >
        <svg
          class="w-5 h-5 fill-current"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
      <div
        id="sidebar"
        class="bg-white h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out"
        x-show="sidenav"
        @click.away="sidenav = false"
      >
        <div class="space-y-5 md:space-y-3 mt-10">
          <h1 class="font-bold text-4xl text-center md:hidden">
            <span class="text-teal-600"></span>
          </h1>
          <h1 class="hidden md:block font-bold text-sm md:text-xl text-center">
            <span class="text-rose-900">Olá</span>
            {{ $page.props.user.name }}<span class="text-teal-600"></span>
          </h1>
          <div id="profile" class="space-y-3">
            <img
              class="w-10 md:w-16 rounded-full mx-auto"
            />
          </div>

          <div id="menu" class="flex flex-col space-y-2">
            <a
              href="/dashboard"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-gradient-to-r from-pink-300 via-purple-300 to-indigo-400 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out"
            >
              <img  class="w-8 h-8 fill-current inline-block" src="../../images/inicio.png" alt="">
              <span class="ml-2">Início</span>
            </a>
            <a
              href="/produtos"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
             <img  class="w-8 h-8 fill-current inline-block" src="../../images/produto.png" alt="">
              <span class="ml-2">Produtos</span>
            </a>
            <a
              href=""
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
             
             <img  class="w-7 h-7 fill-current inline-block" src="../../images/calendar.png" alt="">
              <span class="ml-2">Agenda</span>
              </a>
            <a
              href=""
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >

              <img  class="w-8 h-8 fill-current inline-block" src="../../images/add-user.png" alt="">
              <span class="ml-2">Leads</span>
              </a>
            <a
              href=""
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >

              <img  class="w-8 h-8 fill-current inline-block" src="../../images/fornecedor.png" alt="">
              <span class="ml-2">Fornecedor</span>
              </a>
          </div>
        </div>
      </div>
    </div>
</template>
 