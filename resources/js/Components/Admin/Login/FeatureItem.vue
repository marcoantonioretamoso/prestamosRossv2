<template>
  <div class="flex items-center gap-3">
    <span class="text-xl">{{ icon }}</span>
    <span class="text-sm text-slate-200">{{ text }}</span>
  </div>
</template>

<script setup>
defineProps({
  icon: String,
  text: String
})
</script>
