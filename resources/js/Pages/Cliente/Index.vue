<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
defineProps({
  clientes: Array,
});

</script>

 <template>
  <app-layout>
    <h1>listar clientes</h1>
    <pre>{{clientes}}</pre>
    <p>hol na como estas</p>
  </app-layout>
</template>