<template>
  <div id="app">
    <ExampleComponent />
  </div>
</template>

<script>
import ExampleComponent from './assets/js/components/LoginComponent.vue';

export default {
  name: 'App',
  components: {
    ExampleComponent
  },
  // Any global component logic can be defined here
}
</script>

<style>
/* Global styles for your application */
</style>
