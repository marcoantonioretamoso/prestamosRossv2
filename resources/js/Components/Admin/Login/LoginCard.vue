<template>
  <div class="flex items-center justify-center min-h-screen bg-gray-100 px-6">

    <div class="w-full max-w-md 
                bg-white 
                rounded-2xl 
                shadow-[0_20px_50px_rgba(0,0,0,0.08)]
                border border-gray-100
                p-10">

      <!-- Título -->
      <h2 class="text-2xl font-bold text-gray-900">
        Iniciar sesión
      </h2>

      <p class="text-sm text-gray-500 mt-2 mb-8">
        Ingresa tus credenciales para acceder al sistema
      </p>

      <!-- Form -->
      <form @submit.prevent="handleLogin" class="space-y-6">

        <InputField v-model="email" label="Correo electrónico" placeholder="usuario@ejemplo.com" type="email" />

        <InputField v-model="password" label="Contraseña" placeholder="••••••••" type="password" showForgot />

        <PrimaryButton :loading="loading" text="Ingresar →" class="mt-2" />
        <div v-if="errorMessage"
          class="flex items-start gap-3 bg-red-50 border border-red-200 text-red-600 text-sm rounded-lg p-3 mb-6">
          <!-- Icon -->
          <ExclamationCircleIcon class="w-5 h-5 mt-0.5" />
          <!-- Message -->
          <span>
            {{ errorMessage }}
          </span>
        </div>
      </form>

      <!-- Divider -->
      <div class="border-t border-gray-200 my-6"></div>

      <!-- Footer -->
      <p class="text-xs text-center text-gray-500">
        ¿No tienes una cuenta?
        <span class="text-gray-900 font-semibold cursor-pointer hover:underline">
          Contacta al administrador
        </span>
      </p>

    </div>

  </div>
</template>

<script setup>
import { ref } from 'vue'
import axios from 'axios';
import InputField from './InputField.vue'
import PrimaryButton from './PrimaryButton.vue'
import { ExclamationCircleIcon } from '@heroicons/vue/24/outline'
import { router } from '@inertiajs/vue3'

const email = ref('')
const password = ref('')
const loading = ref(false)
const errorMessage = ref('')

const handleLogin = async () => {
  if (loading.value) return

  loading.value = true
  errorMessage.value = ''

  try {
    const response = await axios.post('/login', {
      email: email.value,
      password: password.value
    })
    // 🔥 Redirigir usando Inertia
    router.visit('/admin')

  } catch (error) {
    errorMessage.value =
      error.response?.data?.message || 'Error inesperado'
    setTimeout(() => {
      errorMessage.value = ''
    }, 3000)
  } finally {
    loading.value = false
  }
}
</script>