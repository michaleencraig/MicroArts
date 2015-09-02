//Scripts go in here
//To render a minified version, run cd /Users/seancrater/MicroArts/build then grunt uglify

// Detect window position and change arrow based on it
//$(window).scroll(function(){
//    $('.arrow').addClass('active');
//    var h = $(window).height();
//    var y = $(window).scrollTop();
//    if( y > (h*.075) ){
//        $('div.arrow, div.arrow-spinner').addClass('active');
//    }
//    else {
//        $('div.arrow, div.arrow-spinner').removeClass('active');
//    }
//});
$(document).ready(function(){
// Icebergs
TweenMax.to(".floater.one-left", 18, {scale: 1.5, left: "-30%", yoyo: true, repeat: -1, ease: Power0.easeNone});
TweenMax.to(".floater.two-left", 14, {scale: 1.25, left: "-25%", yoyo: true, repeat: -1, ease: Power0.easeNone});
TweenMax.to(".floater.one-right", 19, {scale: 1.5, right: "-24%", yoyo: true, repeat: -1, ease: Power0.easeNone});
TweenMax.to(".floater.two-right", 15, {scale: 1.25, right: "-24.5%", yoyo: true, repeat: -1, ease: Power0.easeNone});

// Spinner
TweenMax.to(".arrow-spinner > img", 3, {rotation: -720, transformOrigin:"center center", ease: Expo.easeOut, delay: 1});
    
// Shrinking Stage    
TweenMax.to("span.scroll", .5, {opacity: 1, bottom: "-65%", delay: 4});
TweenMax.to(".load", .65, {top: "57.5%", delay: 4}); 
TweenMax.to(".arrow-spinner > img, .arrow > img", .35, {rotation: -900, transformOrigin:"center center", delay: 4}); 
TweenMax.to(".first-slide", .65, {bottom: "auto", top: "15%", delay: 4});
TweenMax.to(".arrow-spinner > img", .35, {top: "50%", delay: 4});
TweenMax.to(".arrow > img", .35, {transformOrigin:"center center", delay: 4});
TweenMax.to(".arrow", .35, {top: "75%", delay: 4});
TweenMax.to(".second-slide", .65, {bottom: "auto", top: "50%", opacity: 1, delay: 4});   

setTimeout(function(){
    $('.arrow-spinner, .arrow').addClass('resize');
}, 4000);

});