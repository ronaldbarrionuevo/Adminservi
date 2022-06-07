<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
defineProps({
  tecnicos: Array,
});
</script>

 <template>
  <app-layout>
    <div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div>
          <div class="md:grip md:grip-cols-3 md:gap-6">
            <div class="md:col-span-1 flex justify-between">
              <div class="px-4 sm:px-0">
                <h1 class="text-3xl text-gray-900 font-bold">
                  listado de Tecnicos
                </h1>
                <p class="mt-1 text-sm text-gray-600">
                  abhdiadilabsxcilbnxlixilbx
                </p>
              </div>
              <div class="px-4 sm:px-0"></div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
              hoalandjand
              <!-- <pre>{{ tecnicos }}</pre> -->
            </div>
          </div>
          <div class="hidden sm:block">
            <div class="py-8">
              <div class="border-t border-gray-900"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>