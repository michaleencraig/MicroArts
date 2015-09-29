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
TweenMax.to(".floater.one-left", 18, {scale: 1.75, left: "-40%", yoyo: true, repeat: -1, ease: Power0.easeNone});
TweenMax.to(".floater.two-left", 14, {scale: 1.5, left: "-35%", yoyo: true, repeat: -1, ease: Power0.easeNone});
TweenMax.to(".floater.one-right", 19, {scale: 1.75, right: "-29%", yoyo: true, repeat: -1, ease: Power0.easeNone});
TweenMax.to(".floater.two-right", 15, {scale: 1.25, right: "-28.5%", yoyo: true, repeat: -1, ease: Power0.easeNone});
});

var spinner = new TimelineMax()
.add(TweenMax.to(".one-third.first > img", 7.5, {rotation: -180, opacity: 1, transformOrigin:"center center", ease: Expo.easeOut, delay: .25}))
.add(TweenMax.to(".one-third.second > img", 7.5, {rotation: -180, opacity: 1, transformOrigin:"center center", ease: Expo.easeOut, delay: .35}))
.add(TweenMax.to(".one-third.third > img", 7.5, {rotation: -180, opacity: 1, transformOrigin:"center center", ease: Expo.easeOut, delay: .45}));

var spinner_text = new TimelineMax()
.add(TweenMax.to(".floater", 18, {opacity: 1, ease: Power0.easeNone}))
.add(TweenMax.to(".middle-animation .one-third.first .title", 3.75, {opacity: 1, ease: Expo.easeOut, delay: .15}))
.add(TweenMax.to(".middle-animation .one-third.first p", 3.75, {opacity: 1, ease: Expo.easeOut, delay: .15}))
.add(TweenMax.to(".middle-animation .one-third.second .title", 3.75, {opacity: 1, ease: Expo.easeOut, delay: .15}))
.add(TweenMax.to(".middle-animation .one-third.second p", 3.75, {opacity: 1, ease: Expo.easeOut, delay: .15}))
.add(TweenMax.to(".middle-animation .one-third.third .title", 3.75, {opacity: 1, ease: Expo.easeOut, delay: .15}))
.add(TweenMax.to(".middle-animation .one-third.third p", 3.75, {opacity: 1, ease: Expo.easeOut, delay: .15}))

var controller = new ScrollMagic.Controller();
		
var spin_animation = new ScrollMagic.Scene ({
        triggerElement: ".middle-animation",
        reverse: true,
        offset: 150,
        duration: 500
    })
    .setTween(spinner)
    .addTo(controller);

var spin_text = new ScrollMagic.Scene ({
        triggerElement: ".middle-animation",
        reverse: true,
        offset: 130,
        duration: 400
    })
    .setTween(spinner_text)
    .addTo(controller);

