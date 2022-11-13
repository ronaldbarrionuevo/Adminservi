<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import JetAuthenticationCard from "@/Jetstream/AuthenticationCard.vue";
import JetAuthenticationCardLogo from "@/Jetstream/AuthenticationCardLogo.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetCheckbox from "@/Jetstream/Checkbox.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetValidationErrors from "@/Jetstream/ValidationErrors.vue";

const form = useForm({
  name: "",
  email: "",
  password: "",

  terms: false,
});

const submit = () => {
  form.post(route("User.store"));
};
</script>

<template>
  <AppLayout title="Crear Tecnico">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Tecnico Nuevo
      </h2>
    </template>
    <JetAuthenticationCard>
      <JetValidationErrors class="mb-4" />

      <form @submit.prevent="submit">
        <div>
          <JetLabel for="name" value="Name" />
          <JetInput
            id="name"
            v-model="form.name"
            type="text"
            class="mt-1 block w-full"
            required
            autofocus
            autocomplete="name"
          />
        </div>

        <div class="mt-4">
          <JetLabel for="email" value="Email" />
          <JetInput
            id="email"
            v-model="form.email"
            type="email"
            class="mt-1 block w-full"
            required
          />
        </div>

        <div class="mt-4">
          <JetLabel for="password" value="Password" />
          <JetInput
            id="password"
            v-model="form.password"
            type="password"
            class="mt-1 block w-full"
            required
            autocomplete="new-password"
          />
        </div>

        <div class="flex items-center justify-end mt-4">
          >

          <JetButton
            class="ml-4"
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            Register
          </JetButton>
        </div>
      </form>
    </JetAuthenticationCard>
  </AppLayout>
</template>
