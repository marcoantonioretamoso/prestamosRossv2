<template>
  <AppLayout>

    <h1 class="text-2xl font-bold mb-6">
      Panel de Clientes
    </h1>

    <!-- Aquí puedes agregar el contenido específico para la gestión de clientes -->
    <DataTable :value="customers.data" tableStyle="min-width: 50rem">
      <Column field="name" header="Name"></Column>
      <Column field="email" header="Email"></Column>
      <Column field="address" header="Address"></Column>
      <Column field="phone" header="Phone"></Column>
      <Column header="Acciones">
        <template #body="slotProps">
          <div class="flex gap-2">
            <button class="px-3 py-1 bg-blue-500 text-white rounded" @click="editCustomer(slotProps.data)">
              Editar
            </button>

            <button class="px-3 py-1 bg-red-500 text-white rounded" @click="deleteCustomer(slotProps.data)">
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
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
const props = defineProps({
  customers: Object
})

</script>