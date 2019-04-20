<template>
  <div>
    <video class="video-js vjs-default-skin"  ref="videoPlayer"></video>
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
      },
      next_url: {
        type: String,
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

      this.player.on('ended',  () => {
        if (this.next_url) {
          location.href = this.next_url
        } else {
          console.log('Video ended');
        }
      })

      setTimeout( () => {
        this.setInitialPlayback();
      }, 1000)

    },
    methods: {
      setInitialPlayback() {
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