<script setup>
import Sidebar from '@/Components/SideBar.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import FornecedorVue from '../Components/Fornecedor.vue';
</script>
<template>
  <AppLayout title="Dashboard">

  </AppLayout>
  <div class="w-100 flex">
    <Sidebar/>
    <ForcedorVue class="w-100"/>
  </div>
</template>
