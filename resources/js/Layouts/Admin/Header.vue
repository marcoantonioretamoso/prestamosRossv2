<script setup>
import { Bars3Icon } from '@heroicons/vue/24/outline'
const emit = defineEmits(['toggleSidebar'])
import { BellIcon, ChevronDownIcon } from '@heroicons/vue/24/outline'
import Select from 'primevue/select';
import InputText from 'primevue/inputtext';
import { ref } from "vue";

const selectedCity = ref();
const cities = ref([
  { name: 'New York', code: 'NY' },
  { name: 'Rome', code: 'RM' },
  { name: 'London', code: 'LDN' },
  { name: 'Istanbul', code: 'IST' },
  { name: 'Paris', code: 'PRS' }
]);
const value = ref(null);
</script>

<template>
  <header class="bg-white border-b border-slate-200 px-4 md:px-6 lg:px-8 py-4 flex items-center justify-between">

    <!-- Left -->
    <div class="flex items-center gap-4">

      <!-- Mobile menu button -->
      <button class="lg:hidden" @click="emit('toggleSidebar')">
        <Bars3Icon class="w-6 h-6 text-slate-700" />
      </button>

      <!-- Select hidden on small screens -->
      <div class="hidden md:block">
        <Select v-model="selectedCity" :options="cities" optionLabel="name" placeholder="Ciudad" class="w-48" />
      </div>

      <!-- Search hidden on small screens -->
      <div class="hidden lg:block">
        <InputText class="w-72" type="text" placeholder="Buscar..." v-model="value" />
      </div>

    </div>

    <!-- Right -->
    <div class="flex items-center gap-4 md:gap-6">

      <div class="relative">
        <BellIcon class="w-6 h-6 text-slate-600" />
        <span class="absolute -top-1 -right-1 w-3 h-3 bg-emerald-500 rounded-full"></span>
      </div>

      <div class="flex items-center gap-3 cursor-pointer">
        <div
          class="w-9 h-9 bg-slate-800 text-white rounded-full flex items-center justify-center text-sm font-semibold">
          AR
        </div>
        <span class="font-medium text-slate-700">Admin Ross</span>
        <ChevronDownIcon class="w-4 h-4 text-slate-500" />
      </div>

    </div>

  </header>
</template>