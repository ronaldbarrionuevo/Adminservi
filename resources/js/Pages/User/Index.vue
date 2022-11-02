<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
defineProps({
  Users: Array,
});
</script>

 <template>
  <AppLayout title="Usuario">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Usuario</h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a
          :href="route('User.create')"
          
          class="inline-flex
            items-center
            px-4
            py-2
            bg-gray-800
            border border-transparent
            rounded-md
            font-semibold
            text-xs text-white
            uppercase
            tracking-widest
            hover:bg-gray-700
            active:bg-gray-900
            focus:outline-none
            focus:border-gray-900
            focus:ring
            focus:ring-gray-300
            disabled:opacity-25
            transition"
          >Crear Usuario</a>

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
          
            <table class="table-fixed w-full ">
              <thead>
                <tr>
                  <th class="p-3 w-1/6 border overflow-hidden">Id</th>
                  <th class="p-3 w-1/3 border overflow-hidden">Nombre</th>
                  <th class="p-3 w-1/3 border overflow-hidden">email</th>
                  <th class="p-3 w-1/3 border overflow-hidden">acciones</th>
                </tr>
              </thead>
              <tbody>
            <tr v-for="u in Users" :key="u.id">
                <td class="p-3 border overflow-hidden" >{{ u.id }}</td>
                <td class="p-3 border overflow-hidden" >{{ u.name }}</td>
                <td class="p-3 border overflow-hidden" >{{ u.email }}</td>
                <td class="p-3 border overflow-hidden" >acciones</td>
            </tr>
              </tbody>
            </table>
        </div>    
        </div>
      </div>
    </div>
  </AppLayout>
</template>

