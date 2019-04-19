<template>
  <div>
    <video ref="videoPlayer" class="video-js"></video>
  </div>
</template>

<script>
import 'video.js/dist/video-js.css'
import videojs from 'video.js';

  export default {
    name: "VideoPlayer",
    props: {
      options: {
        type: Object,
        default() {
          return {};
        }
      }
    },
    data() {
      return {
        player: null
      }
    },
    mounted() {
      this.player = videojs(this.$refs.videoPlayer, this.options, function onPlayerReady() {
        console.log('onPlayerReady', this);
      })
      
      this.player.on('ratechange', function () {
        localStorage.setItem('user_speed', this.playbackRate());
      });

      this.player.on('ended', function () {
        console.log('ended');
      })

      setTimeout( () => {
        this.setPlayback();
      }, 1000)

    },
    methods: {
      setPlayback() {
        console.log('calling set playback after 1000');
        var user_speed = localStorage.getItem('user_speed');
        user_speed = user_speed ? user_speed : 2;
        this.player.playbackRate(user_speed);
      }


    },
    beforeDestroy() {
      if (this.player) {
        this.player.dispose()
      }
    }
  }
</script>