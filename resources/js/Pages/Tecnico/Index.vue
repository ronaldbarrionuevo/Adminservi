<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
  tecnicos: Array,

  type: {
    type: String,
    default: "submit",
  },
});
</script>

 <template>
  <AppLayout title="Tecnico">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tecnico</h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a
          :href="route('Tecnico.create')"
          :active="route().current('Tecnico.create')"
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
          >Crear Tecnico</a
        >

        
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <table class="table-fixed w-full">
              <thead>
                <tr>
                  <th class="p-2 w-1/6 overflow-hidden">Id</th>
                  <th class="p-3 w-1/3 overflow-hidden">Nombres</th>
                  <th class="p-3 w-1/3 overflow-hidden">Direccion</th>
                  <th class="p-3 w-1/3 overflow-hidden">Telefono</th>
                  <th class="p-3 w-1/3 overflow-hidden">acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="u in tecnicos" :key="u.id">
                  <td class="p-2 border">{{ u.id }}</td>
                  <td class="p-2 border overflow-hidden">{{ u.nombre }}</td>
                  <td class="p-2 h-3 text-ellipsis overflow-hidden">{{ u.direccion }}</td>
                  <td class="p-2 border overflow-hidden">{{ u.telefono }}</td>
                  <td class="p-2 h-3 border overflow-hidden">acciones</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>

