
 <template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cliente</h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

          <!-- <Link :href="route('tecnico.create')">Crear cliennte</Link>   -->
          <pre>
            <table class="table w-full table-fixed overflow-scroll">
              <thead>
                <tr>
                  <th class="p-3 w-1/6 overflow-hidden" >Id</th>
                  <th class="p-3 w-1/3 overflow-hidden">descripcion Cliente</th>
                  <th class="p-3 w-1/3 overflow-hidden">Telefono</th>
                  <th class="p-3 w-1/3 overflow-hidden">Direccion</th>    
                  <th class="p-3 w-1/3 overflow-hidden">acciones</th>
                </tr>
              </thead>
            <tbody> 
            <tr v-for="u in clientes" :key="u.id">
                <td class="p-2 border" >{{ u.id }}</td>
                <td class="p-3 border overflow-hidden" >{{ u.descripcion_cliente }}</td>
                <td class="p-3 border overflow-hidden" >{{ u.telefono }}</td>
                <td class="p-3 overflow-hidden w-1/3" >{{ u.direccion }}</td>
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
  clientes: Array,
});
</script>