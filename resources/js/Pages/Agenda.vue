<script setup>
import Sidebar from '@/Components/SideBar.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import CalendarVue from '../Components/Calendar.vue';

</script>
<template>
  <AppLayout title="Dashboard">

  </AppLayout>
  <div class="w-100 flex">
    <Sidebar/>
    <Calendar class="w-100"/>
  </div>
</template>