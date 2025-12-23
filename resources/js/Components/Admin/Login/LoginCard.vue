<template>
  <div class="flex items-center justify-center bg-gray-50">
    <div class="w-full max-w-md bg-white rounded-xl shadow p-8">
      <h2 class="text-2xl font-bold mb-2">Iniciar sesión</h2>
      <p class="text-sm text-gray-500 mb-6">
        Ingresa tus credenciales para acceder
      </p>

      <form class="space-y-4">
        <InputField label="Correo electrónico" placeholder="prueba@example.com" type="email" />
        <InputField label="Contraseña" placeholder="prueba123" type="password" />

        <PrimaryButton text="Ingresar" />
      </form>

      <p class="text-xs text-center mt-4">
        ¿No tienes una cuenta?
        <span class="text-blue-600 font-semibold cursor-pointer">
          Contacta al administrador
        </span>
      </p>
    </div>
  </div>
</template>

<script setup>
import InputField from './InputField.vue'
import PrimaryButton from './PrimaryButton.vue'
</script>
