<template>
    <div>
      <h1>{{ listing.name }}</h1>
    </div>
  </template>

  <script setup>
  defineProps({
    listing: Object
  })
  </script>
  