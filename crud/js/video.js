/* @param  {Element} element The element that contains the video
*/
var stopVideo = function ( element ) {
   var iframe = element.querySelector( 'iframe');
   var video = element.querySelector( 'video' );
   if ( iframe ) {
       var iframeSrc = iframe.src;
       iframe.src = iframeSrc;
   }
   if ( video ) {
       video.pause();
   }
};
