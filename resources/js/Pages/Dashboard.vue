<script setup>
import Sidebar from '@/Components/SideBar.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import AllLeads from '../Components/AllLeads.vue';

</script>
<template>
  <AppLayout title="Dashboard">

  </AppLayout>
  <div class="flex m-0 p-0">
    <Sidebar></Sidebar>
    <AllLeads></AllLeads>

  </div>
</template>