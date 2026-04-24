<template>
  <div class="hidden lg:flex flex-col justify-between 
              px-16 py-14 
              text-white 
              bg-gradient-to-br 
              from-slate-900 
              via-slate-800 
              to-slate-700">

    <div class="max-w-xl">
      
      <!-- Logo -->
      <div class="flex items-center gap-3 mb-12">
        <div class="w-10 h-10 bg-emerald-600 rounded-lg flex items-center justify-center">
          <span class="text-xl">🏦</span>
        </div>
        <div>
          <h2 class="font-semibold text-lg">Prestamos Ross</h2>
          <p class="text-xs text-slate-400">Sistema de gestión financiera</p>
        </div>
      </div>

      <!-- Hero -->
      <h1 class="text-5xl font-bold leading-tight mb-6">
        Gestión financiera <br />
        inteligente
      </h1>

      <p class="text-slate-300 text-lg mb-10">
        Control completo de préstamos, pagos, gastos e ingresos
        en una plataforma segura y profesional.
      </p>

      <!-- Features -->
      <div class="mt-8 space-y-4">
        <FeatureItem icon="🔒" text="Seguridad garantizada end-to-end" />
        <FeatureItem icon="📊" text="Reportes financieros en tiempo real" />
        <FeatureItem icon="⏰" text="Acceso 24/7 desde cualquier dispositivo" />
        <FeatureItem icon="💳" text="Gestión simplificada de cobros y pagos" />
      </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-3 gap-6 mt-16 max-w-3xl">
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
