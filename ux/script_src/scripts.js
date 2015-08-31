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

// Detect when animation ends
$('.arrow-spinner').on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
    setTimeout(function(){
        $('.arrow, .arrow-spinner, section.first-slide, section.second-slide').addClass('shrink');
    }, 3000);
});