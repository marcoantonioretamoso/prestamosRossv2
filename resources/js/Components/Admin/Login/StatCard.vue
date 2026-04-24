<template>
  <div class="bg-white/5 
              backdrop-blur-sm 
              border border-white/10
              rounded-xl 
              p-6 
              shadow-lg">

    <h3 class="text-3xl font-bold text-emerald-400">
      {{ title }}
    </h3>

    <p class="text-sm text-slate-400 mt-2">
      {{ subtitle }}
    </p>
  </div>
</template>

<script setup>
defineProps({
  title: String,
  subtitle: String
})
</script>
