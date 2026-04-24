<template>
  <AppLayout>

    <h1 class="text-2xl font-bold mb-6">
      Panel de Control
    </h1>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-6">
      <StatCard title="Préstamos Activos" amount="$125,450.00" />
      <StatCard title="Ingresos del Mes" amount="$45,230.00" />
      <StatCard title="Gastos del Mes" amount="$12,450.00" />
      <StatCard title="Total Clientes" amount="148" />
    </div>

  </AppLayout>
</template>

<script setup>
import AppLayout from '../../../Layouts/Admin/AppLayout.vue'
import StatCard from '../../../Components/Admin/Login/StatCard.vue'
</script>
