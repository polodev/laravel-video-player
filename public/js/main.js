function scroll_video_wrapper() {
  var $video_wrapper = $('.video_wrapper');
  $video_wrapper.each(function () {
    var $video_wrapper_offset = $video_wrapper.offset().top;
    $("html, body").animate({ scrollTop: $video_wrapper_offset }, 1000);
  });
}

jQuery(document).ready(function($) {
	scroll_video_wrapper();
});