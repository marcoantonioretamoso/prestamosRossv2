<template>
  <div class="hidden lg:flex flex-col justify-between p-12 text-white bg-gradient-to-br from-slate-900 to-slate-700">
    <!-- Header -->
    <div>
      <h1 class="text-4xl font-bold mb-4">Gestión financiera inteligente</h1>
      <p class="text-slate-300">
        Control completo de préstamos, pagos, gastos y más.
      </p>

      <div class="mt-8 space-y-4">
        <FeatureItem icon="🔒" text="Seguridad garantizada end-to-end" />
        <FeatureItem icon="📊" text="Reportes financieros en tiempo real" />
        <FeatureItem icon="⏰" text="Acceso 24/7 desde cualquier dispositivo" />
        <FeatureItem icon="💳" text="Gestión simplificada de cobros y pagos" />
      </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-3 gap-4">
      <StatCard title="100%" subtitle="Seguro y confiable" />
      <StatCard title="24/7" subtitle="Soporte disponible" />
      <StatCard title="+1K" subtitle="Usuarios activos" />
    </div>
  </div>
</template>

<script setup>
import FeatureItem from './FeatureItem.vue'
import StatCard from './StatCard.vue'
</script>
