<template>
  <div>
    <div class="card bg-info text-white">
      <div class="card-header">
        <h3>Its a pdf</h3>
      </div>
      <div class="card-body">
        <p> <a class="text-white" target="_blank" :href="pdf_source">Open in new page</a> </p>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['pdf_source']
  }
</script>


