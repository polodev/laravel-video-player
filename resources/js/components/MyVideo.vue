<template>
  <div>
    <video-player :next_url="next_url" :options="videoOptions"/>
  </div>
</template>

<script>
  export default {
    props: {
      video_source: {
        type: String,
        // default: "https://cdn.theguardian.tv/webM/2015/07/20/150716YesMen_synd_768k_vp8.webm"
        // default: "file:///Users/polodev/Documents/tuts_video/jeffreyway/laracast_git/Git-Me-Some-Version-Control-2-What-Does-Git-Add-Actually-Do.mp4"
        default: "http://lplayer.test/video/197"
      },
      next_url: {
        type: String,
        default: null
      },
      video_width: {
        type: Number,
        // default: function() {
        //   return $('#video-player-card').width();
        // }
        default: $('#video-player-card').width(),
      }

    },
    data() {
      return {
        videoOptions: {
          autoplay: true,
          controls: true,
          muted: false,
          language: 'en',
          preload: 'auto',
          // width: $('#video-player-card').width() || 600,
          width: this.video_width,
          playbackRates: [0.7, 1.0, 1.5, 2.0, 2.5, 3.0],
          sources: [
            {
              src: this.video_source,
              type:'video/mp4',
            }
          ]
        },
        hello: "world",
      };
    }
  };
</script>
