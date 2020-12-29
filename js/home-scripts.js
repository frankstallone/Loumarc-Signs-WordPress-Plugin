// Deferred loading of Vimeo player scripts until user interacts
jQuery('#vimeo-video-player img').click(function() {
  jQuery('#vimeo-video-player').html('<iframe src="https://player.vimeo.com/video/172224129?color=D32F2F&title=0&byline=0&portrait=0&wmode=opaque&autoplay=1" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
});
