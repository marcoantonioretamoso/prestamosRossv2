<script setup>
import { ref } from 'vue'
import SidebarLink from '../../Components/Admin/Dashboard/SidebarLink.vue'

import {
  Squares2X2Icon,
  BanknotesIcon,
  UsersIcon,
  CurrencyDollarIcon,
  ArrowTrendingDownIcon,
  ArrowTrendingUpIcon,
  WalletIcon,
  DocumentChartBarIcon,
  Cog6ToothIcon,
  ChevronLeftIcon
} from '@heroicons/vue/24/outline'

const collapsed = ref(false)

const toggleSidebar = () => {
  collapsed.value = !collapsed.value
}
</script>

<template>
  <aside :class="[
    'bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white min-h-screen shadow-2xl transition-all duration-300',
    collapsed ? 'w-20 p-4' : 'w-72 p-8'
  ]">

    <!-- Logo + Collapse Button -->
    <div class="flex items-center justify-between mb-12">
      <div v-if="!collapsed" class="flex items-center gap-3">
        <div class="w-10 h-10 bg-emerald-600 rounded-xl flex items-center justify-center">
          🏦
        </div>
        <div>
          <h2 class="font-semibold text-lg">Préstamos Ross</h2>
          <p class="text-xs text-slate-400">Sistema de gestión</p>
        </div>
      </div>

      <button @click="toggleSidebar" class="text-slate-400 hover:text-white">
        <ChevronLeftIcon class="w-5 h-5 transition-transform" :class="{ 'rotate-180': collapsed }" />
      </button>
    </div>

    <nav class="space-y-2 text-sm">
      <SidebarLink :icon="Squares2X2Icon" text="Dashboard" href="/admin" :collapsed="collapsed" />
      <SidebarLink :icon="BanknotesIcon" text="Préstamos" href="/loans" :collapsed="collapsed" />
      <SidebarLink :icon="UsersIcon" text="Clientes" href="/customers" :collapsed="collapsed" />
      <SidebarLink :icon="CurrencyDollarIcon" text="Pagos" href="/admin/pagos" :collapsed="collapsed" />
      <SidebarLink :icon="ArrowTrendingDownIcon" text="Gastos" href="/admin/gastos" :collapsed="collapsed" />
      <SidebarLink :icon="ArrowTrendingUpIcon" text="Ingresos" href="/admin/ingresos" :collapsed="collapsed" />
      <SidebarLink :icon="WalletIcon" text="Cuentas" href="/admin/cuentas" :collapsed="collapsed" />
      <SidebarLink :icon="DocumentChartBarIcon" text="Reportes" href="/admin/reportes" :collapsed="collapsed" />
      <SidebarLink :icon="Cog6ToothIcon" text="Configuración" href="/admin/configuracion" :collapsed="collapsed" />
    </nav>

  </aside>
</template>