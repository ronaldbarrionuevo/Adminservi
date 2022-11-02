<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Inertia } from "@inertiajs/inertia";

defineProps({
  tecnicos: Array,

  type: {
    type: String,
    default: "submit",
  },
  methods: {
    submit() {
      Inertia.post(route("Tecnico.store"),{
        nombre: this.nombre,
        direccion: this.direccion,
        telefono: this.telefono,
      });
    },
  },
  data() {
    return {
      nombre: "ronald",
      direccion: "casa 8",
      Telefono: "4454",
    };
  },
});
</script>
 <template>
  <AppLayout title="Crear Tecnico">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tecnico Nuevo
      </h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <form @submit.prevent="submit">
              <label>nombre</label>
              <input type="text" v-model="nombre" />
              <label>Direccion</label>
              <input type="text" v-model="direccion" />
              <label>Telefono</label>
              <input type="number" v-model="telefono" />

              <button type="submit">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>