<script setup>
import Sidebar from '@/Components/SideBar.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import ProductContent from '@/Components/ProductContent.vue';
</script>
<template>
  <AppLayout title="Dashboard">

  </AppLayout>
  <div class="w-100 flex overflow-y-hidden">
    <Sidebar class="h-[48rem]"/>
    <ProductContent class="w-100"/>
  </div>
</template>