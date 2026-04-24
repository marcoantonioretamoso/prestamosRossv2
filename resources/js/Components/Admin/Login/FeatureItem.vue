<template>
  <div class="flex items-center gap-3">
    <div class="w-9 h-9 rounded-full 
                bg-emerald-500/10 
                flex items-center justify-center 
                text-emerald-400">
      <span class="text-xl">{{ icon }}</span>
    </div>
    <span class="text-sm text-slate-200">{{ text }}</span>
  </div>
</template>

<script setup>
defineProps({
  icon: String,
  text: String
})
</script>
