<template>

    <div v-for="listing in listings" :key="listing.id">

        <!-- <Link href="`/listing/${ listing.id }`"> -->
            <Link :href="`/listing/${listing.id}`">

                <!-- {{ listing.name }} -->
                  <ListingAddress :listing="listing" />


        </Link>

    </div>

</template>

<script setup>
import { Link } from '@inertiajs/vue3';

import ListingAddress from '../../Components/ListingAddress.vue';

defineProps({
    listings:Array,
})

</script>
