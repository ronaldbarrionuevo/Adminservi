<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Descuento</h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <button
          :href="route('Cliente.index')"
          
          class="
            bg-blue-500
            hover:bg-blue-700
            text-white
            font-bold
            py-2
            px-4
            rounded
            my-3
          "
        >
          Create New Post
        </button>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <!-- <Link :href="route('tecnico.create')">Crear Servicio</Link>   -->
            <pre>
            <table class="table w-full table-fixed ">
              <thead>
                <tr>
                  <th class="p-2 w-1/6 overflow-hidden" >Id</th>
                  <th class="p-3 w-1/3 overflow-hidden">Descripcion</th>
                  <th class="p-3 w-1/3 overflow-hidden">acciones</th>
                </tr>
              </thead>
            <tbody> 
            <tr v-for="u in descuentos" :key="u.id">
                <td class="p-2 border" >{{ u.id }}</td>
                <td class="p-3 border overflow-hidden" >{{ u.descripcion }}</td>
                <td class="p-3 border overflow-hidden" >acciones</td>
            </tr>
              </tbody>
              </table>
          </pre>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
defineProps({
  descuentos: Array,
});
</script>