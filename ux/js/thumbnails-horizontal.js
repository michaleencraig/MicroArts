/*
Thumbnails Horizontal - InfinitySlider Extension
Version: Alpha 2.0
Author: EPEO
Website: http://demo.epeo.it/infinityslider/
*/
$(document).ready(function() {
	var dotActiveClass = 'iS-Dotactive';
	var slider = $('.iS-SkinThumbnails');
	slider.each(function(){
		var thisSlider = $(this);
		var commands = thisSlider.children('.iS-Commands');
		var dots = commands.children('.iS-Dots');
		var dot = dots.children('.iS-Dot');
		var next = commands.children('.iS-Next');
		var prev = commands.children('.iS-Previous');
		var dotNumber = dot.length;
		if(dotNumber) {
			var limit;
			function iSthumbnails(target){
				if(target<limit) {
					target = 0;
				}
				else if(target==dotNumber-1) {
					target = target-limit;
				}
				else if(target>=limit) {
					target = target-limit+1;
				}
				for(var i=0; i<dotNumber; i++) {
					var translateWidth = (target-i)*-100;
					dot.eq(i).css({webkitTransform: 'translateX('+translateWidth+'%)', transform: 'translateX('+translateWidth+'%)'});
				}
			}
			dot.on('click',function(){
				dotIndex = $(this).index();
				iSthumbnails(dotIndex);
			});
			next.on('click',function(){
				var dotIndex = 0;
				dot.each(function(){
					var thisDot = $(this);
					if(thisDot.hasClass(dotActiveClass)) {
						dotIndex = thisDot.index();
						return false;
					}
				});
				if(dotIndex<dotNumber-1) {
					dotIndex++;
				}
				else {
					dotIndex = 0;
				}
				iSthumbnails(dotIndex);
			});
			prev.on('click',function(){
				var dotIndex = 0;
				dot.each(function(){
					var thisDot = $(this);
					if(thisDot.hasClass(dotActiveClass)) {
						dotIndex = thisDot.index();
						return false;
					}
				});
				if(dotIndex>0) {
					dotIndex--;
				}
				else {
					dotIndex = dotNumber-1;
				}
				iSthumbnails(dotIndex);
			});
			function iSthumbnailsSize() {
				if(dotNumber) {
					var dotsWidth = dots.outerWidth();
					var dotWidth = 0;
					var breakPoint = -1;
					dot.each(function(){
						var thisDot = $(this);
						dotWidth += thisDot.outerWidth();
						if(dotWidth < dotsWidth) {
							breakPoint ++;
						}
					});
					return breakPoint;
				}
			}
			$(window).on('load resize', function() {
				limit = iSthumbnailsSize()
				console.log(limit);
				if(limit == 1) {
					if(dots.css('opacity',1)) {
						dots.css({opacity: 0, zIndex: -1});
						prev.css({width: 50+'%'});
						next.css({width: 50+'%'});
					}
				}
				else {
					if(dots.css('opacity',0)) {
						dots.css({opacity: 1, zIndex: ''});
						prev.css({width: ''});
						next.css({width: ''});
					}
				}
			});
			$(window).on('load', function() {
				iSthumbnails(0);
			});
			$(window).on('resize', function() {
				var dotIndex = 0;
				dot.each(function(){
					var thisDot = $(this);
					if(thisDot.hasClass(dotActiveClass)) {
						dotIndex = thisDot.index();
						return false;
					}
				});
				iSthumbnails(dotIndex);
			});

		}

	});

});