//Scripts go in here
//To render a minified version, run cd /Users/seancrater/MicroArts/build then grunt uglify
var scroll_position = window.pageYOffset;

$(document).ready(function(){
    
});

$(window).scroll(function(){
    $('.arrow').addClass('active');
});

// Detect when animation ends
function whichAnimationEvent(){
  var t,
      el = document.createElement("fakeelement");
  var animations = {
    "animation"      : "animationend",
    "OAnimation"     : "oAnimationEnd",
    "MozAnimation"   : "animationend",
    "WebkitAnimation": "webkitAnimationEnd"
  }
  for (t in animations){
    if (el.style[t] !== undefined){
      return animations[t];
    }
  }
}
var animationEvent = whichAnimationEvent();
$(window).scroll(function(){
  $('.arrow-spinner').one(animationEvent,
  function(event) {
    // Do something when the animation ends
  });
});