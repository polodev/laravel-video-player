<template>
  <div class="video_wrapper">
    <video class="video-js vjs-default-skin"  ref="videoPlayer"></video>
  </div>
</template>

<script>
import 'video.js/dist/video-js.css'
import "videojs-hotkeys/videojs.hotkeys.min.js"
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
        this.hotkeys({
          volumeStep: 0.1,
          seekStep: 5,
          enableModifiersForNumbers: false
        });
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
        // this.enterFullScreen(); // making problem currently
      }, 1000)

      // $(document).keydown( (e) => {
      //   if (event.keyCode == 37) {
      //     console.log('backward key')
      //     this.rewind();
      //   } else if (event.keyCode == 39) {
      //     console.log('forward key')
      //     this.forward();
      //   }
      //   if (event.keyCode == 32) {
      //     console.log('this is enter key');
      //   }
      // });


    },
    methods: {
      setInitialPlayback() {
        console.log('calling set playback after 1000');
        var user_speed = localStorage.getItem('user_speed');
        user_speed = user_speed ? user_speed : 1.5;
        this.player.playbackRate(user_speed);
      },
      // enterFullScreen() {
      //   $('.vjs-play-control').click();
      //   $('.vjs-fullscreen-control').click();
      //   // this.player.play();
      // },
      // seek(secs) {
      //   let time = this.player.currentTime() + secs;
      //   if (time < 0) {
      //     time = 0;
      //   }

      //   this.player.currentTime(time);
      // },

      // forward() {
      //   this.seek(10);
      // },

      // rewind() {
      //   this.seek(-10);
      // },

    },
    beforeDestroy() {
      if (this.player) {
        this.player.dispose()
      }
    }
  }
</script>