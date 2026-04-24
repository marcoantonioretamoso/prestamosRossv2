<script setup>
import { Link, usePage } from '@inertiajs/vue3'

const props = defineProps({
  text: String,
  icon: Object,
  href: String,
  collapsed: Boolean
})

const page = usePage()
</script>

<template>
  <Link :href="href" :class="[
    'flex items-center gap-3 px-4 py-3 rounded-xl transition-all',
    page.url.startsWith(href)
      ? 'bg-emerald-600 text-white shadow-lg'
      : 'text-slate-300 hover:bg-slate-700 hover:text-white'
  ]">
    <component :is="icon" class="w-5 h-5" />

    <span v-if="!collapsed">
      {{ text }}
    </span>
  </Link>
</template>