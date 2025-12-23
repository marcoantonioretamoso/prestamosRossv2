<template>
  <div>
    <label class="block text-sm font-medium mb-1">{{ label }}</label>
    <input
      :type="type"
      :placeholder="placeholder"
      class="w-full rounded-lg border px-3 py-2 focus:ring focus:ring-blue-200"
    />
  </div>
</template>

<script setup>
defineProps({
  label: String,
  type: {
    type: String,
    default: 'text'
  },
  placeholder: {
    type: String,
    default: ''
  }
})
</script>
