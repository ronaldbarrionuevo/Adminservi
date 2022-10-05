
 <template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tecnico</h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
          <pre>
            <table class="table w-full table-fixed overflow-scroll">
              <thead>
                <tr>
                  <th class="p-3 w-1/6">Id</th>
                  <th class="p-3 w-1/3">Nombres</th>
                  <th class="p-3 w-1/3">Direccion</th>
                  <th class="p-3 w-1/3">Telefono</th>  
                  <th class="p-3 w-1/3">acciones</th>
                </tr>
              </thead>
            <tbody> 
            <tr v-for="u in tecnicos" :key="u.id">
                <td class="p-2 border" >{{ u.id }}</td>
                <td class="p-3 border" >{{ u.nombre }}</td>
                <td class="p-3 overflow-scroll w-1/3" >{{ u.direccion }}</td>
                <td class="p-3 border" >{{ u.telefono }}</td>
                <td class="p-3 border" >acciones</td>
            </tr>
              </tbody> --> 


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
  tecnicos: Array,
});
</script>