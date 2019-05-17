<template>
  <div class="pdf-content">
    <VuePdfReader :url="url" loading-text="loading"/>
  </div>
</template>
<script>
import 'vue-pdf-reader/dist/vue-pdf-reader.min.css';
import VuePdfReader from 'vue-pdf-reader';
export default {
  props: ['url'],
  components: {
    VuePdfReader,
  }

}
</script>
<style>
body {
  padding: 0;
  margin: 0;
}
</style>
