<template>
    <MainLayout>
        <div>
      <h1>Index!!</h1>
      <Link href="/">Main Page</Link>
      <Link href="/show">Show Page</Link>
      <Link href="/test">Test Page</Link>
    </div>
    </MainLayout>
  </template>

  <script setup>
import { Link } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue';
</script>
