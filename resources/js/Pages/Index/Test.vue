<template>
    <div>
        <h1>Test Page</h1>
        <Link href="/test" >Test Link</Link>
        <br>
        <Link href="/">Main Page</Link>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<script>
import { Link } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue'

export default {
    layout: MainLayout
    }
</script>
