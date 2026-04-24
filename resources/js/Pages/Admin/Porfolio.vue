<template>
  <div class="min-h-screen bg-[#0B0F19] text-gray-200">

    <!-- NAVBAR -->
    <nav class="flex justify-between items-center px-10 py-6">
      <h1 class="text-lg font-semibold tracking-wide">
        TuNombre
      </h1>

      <div class="space-x-8 text-sm text-gray-400">
        <a href="#projects" class="hover:text-white transition">Proyectos</a>
        <a href="#about" class="hover:text-white transition">Sobre mí</a>
        <a href="#contact" class="hover:text-white transition">Contacto</a>
      </div>
    </nav>

    <!-- HERO -->
    <section class="flex flex-col justify-center items-center text-center px-6 mt-32">
      <h2 class="text-5xl md:text-6xl font-semibold leading-tight max-w-4xl">
        Construyo aplicaciones web
        <span class="text-indigo-500">modernas y escalables</span>
      </h2>

      <p class="mt-8 text-gray-400 max-w-2xl text-lg">
        Desarrollador Full Stack especializado en Laravel y Vue.
        Enfocado en arquitectura limpia, rendimiento y experiencia de usuario.
      </p>

      <div class="mt-10 flex gap-6">
        <a href="#projects" class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-full transition">
          Ver proyectos
        </a>

        <a href="#contact" class="border border-gray-700 px-6 py-3 rounded-full hover:bg-gray-800 transition">
          Contactarme
        </a>
      </div>
    </section>

  </div>
</template>