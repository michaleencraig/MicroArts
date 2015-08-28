//Scripts go in here
//To render a minified version, run cd /Users/seancrater/MicroArts/build then grunt uglify

// Let's start some functions
$(window).scroll(function(){
    var h = $(window).height();
    var y = $(window).scrollTop();
    if( y > (h*.075) ){
        $('div.arrow, div.arrow-spinner').addClass('active');
    }
    else {
        $('div.arrow, div.arrow-spinner').removeClass('active');
    }
});