<template>
  <div class="min-h-screen bg-slate-100 flex">

    <!-- Sidebar Desktop -->
    <Sidebar class="hidden lg:block" />

    <div class="flex-1 flex flex-col">

      <Header @toggleSidebar="mobileOpen = true" />

      <main class="p-4 md:p-6 lg:p-8">
        <slot />
      </main>

    </div>

    <!-- Sidebar Mobile -->
    <div v-if="mobileOpen" class="fixed inset-0 bg-black/50 z-40 lg:hidden" @click="mobileOpen = false" />

    <div v-if="mobileOpen" class="fixed left-0 top-0 z-50 h-full lg:hidden">
      <Sidebar />
    </div>

  </div>
</template>

<script setup>
import { ref } from 'vue'
import Sidebar from './Sidebar.vue'
import Header from './Header.vue'

const mobileOpen = ref(false)
</script>