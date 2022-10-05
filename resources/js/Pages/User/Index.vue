
 <template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Usuario</h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
          <pre>
            <table class="table-fixed w-full ">
              <thead>
                <tr>
                  <th class="p-5">Id</th>
                  <th class="p-3">Nombre</th>
                  <th class="p-3">email</th>
                  <th class="p-3">acciones</th>
                </tr>
              </thead>
              <tbody>
            <tr v-for="u in Users" :key="u.id">
                <td class="p-5 border" >{{ u.id }}</td>
                <td class="p-3 border" >{{ u.name }}</td>
                <td class="p-3 border" >{{ u.email }}</td>
                <td class="p-3 border" >acciones</td>
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
  Users: Array,
});
</script>