<script setup>
import Sidebar from '@/Components/SideBar.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import ProductContent from '@/Components/ProductContent.vue';
import LeadsContent from '../Components/LeadsContent.vue';
</script>
<template>
  <AppLayout title="Dashboard">

  </AppLayout>
  <div class="w-100 flex">
    <Sidebar/>
    <LeadsContent class="w-100"/>
  </div>
</template>

<!-- Marco assediou o pobre Viners e o cordas... -->