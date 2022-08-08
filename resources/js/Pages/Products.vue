<script setup>
import Sidebar from '@/Components/SideBar.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import ProductContent from '@/Components/ProductContent.vue';
</script>
<template>
  <AppLayout title="Dashboard">

  </AppLayout>
  <div class="w-screen flex">
    <Sidebar></Sidebar>
    <ProductContent class="w-full"></ProductContent>
    
  </div>
</template>