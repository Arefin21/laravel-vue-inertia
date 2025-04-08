<!-- <template>Hello {{ counter }} ! </template>
<script setup>
import {ref} from "vue";
const counter = ref(0)
setInterval(() => counter.value++,1000);
</script> -->

<template>
   <MainLayout>
    <h2>Index!!</h2>
    The message is {{ test }}
    <br>
    <Link href="/show">Show Page</Link>
   </MainLayout>
</template>

<script setup>

import { Link } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue';
defineProps(['message','test'])
</script>
