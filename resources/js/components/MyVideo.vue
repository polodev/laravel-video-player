<template>
  <div>
    <video-player :options="videoOptions"/>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        videoOptions: {
          autoplay: true,
          controls: true,
          muted: false,
          language: 'en',
          playbackRates: [0.7, 1.0, 1.5, 2.0, 2.5, 3.0],
          sources: [
            {
              src: "https://cdn.theguardian.tv/webM/2015/07/20/150716YesMen_synd_768k_vp8.webm",
            }
          ]
        },
        hello: "world",
      };
    }
  };
</script>