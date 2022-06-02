<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
defineProps({
  tecnicos: Array,
});
</script>

 <template>
  <app-layout>
    <div class="max-w-7xl mx-auto py-10 px-8">

      <div class="grip grip-cols-3 gap-6 ">

        <div class="col-span-1">
          <h1 class="text-3xl text-gray-900 font-bold">listado de Tecnicos</h1>
        </div>

        <div class="cols-span-2"> 
        <pre>{{ tecnicos }}</pre>
        </div>

      </div>
    </div>

  </app-layout>
</template>