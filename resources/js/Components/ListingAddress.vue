<template>
    <span>
        {{ listing.name }}
    </span>
</template>

<script setup>
defineProps({
  listing: Object
})
</script>
