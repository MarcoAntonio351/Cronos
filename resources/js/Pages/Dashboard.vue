<script setup>
import Sidebar from '@/Components/SideBar.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
</script>
<template>
  <AppLayout title="Dashboard">

  </AppLayout>
  <div class="flex m-0 p-0">
    <Sidebar></Sidebar>

    <div>
    <Head title="Dashboard" />
    <h1 class="mb-8 text-5xl font-sans antialiased ml-32 mt-24">Bem vindo!</h1>
    <p class="mb-8 text-2xl text-gray-700 font-sans antialiased leading-normal ml-32 mt-8">Em que podemos ajudar?
    </p>
  </div>
  </div>
</template>