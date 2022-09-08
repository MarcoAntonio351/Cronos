<script setup>
import Sidebar from '@/Components/SideBar.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import Calendar from '../Components/Calendar.vue';

</script>
<template>
  <AppLayout title="Dashboard">

  </AppLayout>
  <div class="w-100 flex">
    <Sidebar class="w-100"/>
    <Calendar class="w-100"/>
  </div>
</template>