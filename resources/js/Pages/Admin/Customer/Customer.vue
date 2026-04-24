<template>
  <AppLayout>

    <h1 class="text-2xl font-bold mb-6">
      Panel de Clientes
    </h1>

    <!-- Buscador -->
    <div class="mb-4">
      <input v-model="search" @input="onSearch" type="text" placeholder="Buscar cliente..."
        class="border px-3 py-2 rounded w-full" />
    </div>

    <DataTable :value="customers.data" :paginator="true" :rows="customers.per_page" :totalRecords="customers.total"
      :first="(customers.current_page - 1) * customers.per_page" @page="onPage" tableStyle="min-width: 50rem">
      <Column field="name" header="Name"></Column>
      <Column field="email" header="Email"></Column>
      <Column field="address" header="Address"></Column>
      <Column field="phone" header="Phone"></Column>

      <Column header="Acciones">
        <template #body="slotProps">
          <div class="flex gap-2">
            <button class="px-3 py-1 bg-blue-500 text-white rounded">
              Editar
            </button>
            <button class="px-3 py-1 bg-red-500 text-white rounded">
              Eliminar
            </button>
          </div>
        </template>
      </Column>

      <template #empty>
        <div class="text-center text-gray-500 py-4">
          No hay clientes disponibles
        </div>
      </template>
    </DataTable>

  </AppLayout>
</template>

<script setup>
import AppLayout from '../../../Layouts/Admin/AppLayout.vue'
import DataTable from 'primevue/datatable'
import Column from 'primevue/column'
import { router } from '@inertiajs/vue3'
import { ref } from 'vue'

const props = defineProps({
  customers: Object
})

const search = ref('')

const onPage = (event) => {
  const page = event.page + 1

  router.get('/admin/customers', {
    page,
    search: search.value
  }, {
    preserveState: true,
    replace: true
  })
}

const onSearch = () => {
  router.get('/customers', {
    search: search.value
  }, {
    preserveState: true,
    replace: true
  })
}
</script>