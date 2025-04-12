<template>

    <div v-for="listing in listings" :key="listing.id">

        <!-- <Link href="`/listing/${ listing.id }`"> -->
            <Link :href="`/listing/${listing.id}`">

                {{ listing.name }}
        </Link>

    </div>

</template>

<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    listings:Array,
})

</script>
