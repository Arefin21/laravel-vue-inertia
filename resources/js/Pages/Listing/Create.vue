<template>
    <form @submit.prevent="create">
      <div>
        <div>
          <label>Name</label>
          <input v-model="form.name" type="text" />
        </div>

        <!-- <div>
          <label>Baths</label>
          <input type="text" />
        </div>

        <div>
          <label>Area</label>
          <input type="text" />
        </div>

        <div>
          <label>City</label>
          <input type="text" />
        </div>

        <div>
          <label>Post Code</label>
          <input type="text" />
        </div>

        <div>
          <label>Street</label>
          <input type="text" />
        </div>

        <div>
          <label>Street Nr</label>
          <input type="text" />
        </div>

        <div>
          <label>Price</label>
          <input type="text" />
        </div> -->

        <div>
          <button type="submit">Create</button>
        </div>
      </div>
    </form>
  </template>

  <script setup>

//   import { reactive } from 'vue';
  import { useForm } from '@inertiajs/vue3';

  const form=useForm({
    name:null,
  });
const create=()=>form.post('/listing');
  </script>

  <style scoped>
  label {
    margin-right: 2em;
  }

  div {
    padding: 2px
  }
  </style>
