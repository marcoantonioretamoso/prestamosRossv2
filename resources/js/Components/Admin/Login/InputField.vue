<template>
  <div>
    <div class="flex items-center justify-between mb-1">
      <label class="text-sm font-medium text-gray-700">
        {{ label }}
      </label>

      <a v-if="showForgot"
         href="#"
         class="text-xs text-gray-500 hover:text-gray-800">
        ¿Olvidaste tu contraseña?
      </a>
    </div>

    <input
      :type="type"
      :placeholder="placeholder"
      :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)"
      class="w-full
             bg-gray-50
             border border-gray-200
             rounded-lg
             px-4 py-2.5
             text-sm
             focus:outline-none
             focus:ring-2
             focus:ring-slate-300
             focus:border-slate-400
             transition"
    />
  </div>
</template>

<script setup>
defineProps({
  label: String,
  type: { type: String, default: 'text' },
  placeholder: { type: String, default: '' },
  showForgot: { type: Boolean, default: false },
  modelValue: String
})
defineEmits(['update:modelValue'])
</script>