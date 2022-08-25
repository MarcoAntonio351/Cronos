<script setup>
import Sidebar from '@/Components/SideBar.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import FornecedorContent from '../Components/FornecedorContent.vue';
</script>
<template>
  <AppLayout title="Dashboard">

  </AppLayout>
  <div class="w-100 flex">
    <Sidebar/>
    <FornecedorContent class="w-100"/>
  </div>
</template>
