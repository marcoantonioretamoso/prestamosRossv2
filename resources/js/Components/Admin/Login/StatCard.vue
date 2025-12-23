<template>
  <div class="bg-white/10 rounded-xl p-4 text-center">
    <h3 class="text-2xl font-bold text-green-400">{{ title }}</h3>
    <p class="text-xs text-slate-300">{{ subtitle }}</p>
  </div>
</template>

<script setup>
defineProps({
  title: String,
  subtitle: String
})
</script>
