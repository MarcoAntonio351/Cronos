<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
<header>        
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 bg-gray-300">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="" class="flex items-center">
            
                <img src="../../images/ampulheta.png" class="mr-5 h-6 sm:h-9" alt="Cronos Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-black">Cronos</span>
            </a>
            <div class="flex items-center lg:order-2">
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-2/5 lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <div v-if="canLogin" class="self-center absolute z-50 origin-top-right right-5 flex space-x-5">
            <Link v-if="$page.props.user" :href="route('products')" class="float-right py-2 pr-4 pl-5 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-blue-700 lg:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                Inicio
            </Link>

            <template v-else>
                <Link :href="route('login')" class="float-right py-2 pr-4 pl-5 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-blue-700 lg:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                    Entrar
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="float-right block py-4 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-800 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                    Registrar
                </Link>

                
             </template>
        </div>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="py-20 bg-white">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl">Cronos</h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center text-gray-700 intro sm:max-w-3xl">O CRM mais simples e seguro</p>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img src="../../images/marketing.gif" class="rounded-lg shadow-xl" alt="Cronos Logo" />
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-blue-800 uppercase">Pensado para o</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Marketing</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Faça uma lista de seus leads e administre melhor seus futuros clientes.</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                <img src="../../images/clock.gif" class="rounded-lg shadow-xl" alt="Cronos Logo" />
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pl-16">
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Tempo</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Economize seu tempo, liste seus fornecedores e produtos.</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img src="../../images/agenda.gif" class="rounded-lg shadow-xl" alt="Cronos Logo" />
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Agenda</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Marque eventos em nossa agenda e não perca uma reunião importante.</p>
            </div>
        </div>

    </div>
</section>

    <footer class="relative bg-blue-800 pt-8 pb-6">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap justify-center lg:justify-between text-left lg:text-left">
      <!-- ... Conteúdo existente ... -->
      </div>
          <hr class="my-6 border-blueGray-300">
          <div class="flex flex-wrap items-center justify-center">
            <div class="w-full md:w-4/12 px-4 text-center">
              <div class="text-sm text-blueGray-500 font-semibold py-1">
                <a href="https://github.com/MarcoAntonio351" class="text-blue-500 hover:text-blue-700">GitHub</a> | <a href="https://www.linkedin.com/in/marco-acosta-a446b7177/" class="text-blue-500 hover:text-blue-700">LinkedIn</a> | Copyright © <span id="get-current-year">Cronos 2022</span>
              </div>
            </div>
          </div>
        </div>
</footer>

</template>

