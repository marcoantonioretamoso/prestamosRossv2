<template>
  <button type="submit" class="w-full
         h-11
         flex items-center justify-center gap-2
         bg-slate-900 hover:bg-slate-800
         text-white text-sm font-semibold
         rounded-lg
         transition
         focus:outline-none focus:ring-2 focus:ring-slate-400" :disabled="loading">
    <span v-if="!loading">
      {{ text }}
    </span>

    <span v-else class="flex items-center gap-2">
      <i class="pi pi-spin pi-spinner"></i>
      Procesando...
    </span>
  </button>
</template>

<script setup>
defineProps({
  text: {
    type: String,
    default: 'Enviar'
  },
  loading: {
    type: Boolean,
    default: false
  }
})
</script>
