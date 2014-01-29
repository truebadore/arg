$(window).load(function() {
		$('.iosSlider').iosSlider({
			desktopClickDrag: true,
			snapToChildren: true,
			infiniteSlider: true,
			navSlideSelector: '.sliderContainer .slideSelectors .item',
			onSlideComplete: slideComplete,
			onSliderLoaded: sliderLoaded,
			onSlideChange: slideChange,
			autoSlide: true,
			scrollbar: true,
			scrollbarContainer: '.sliderContainer .scrollbarContainer',
			scrollbarMargin: '0',
			scrollbarBorderRadius: '0',
			keyboardControls: true
		});
		
		$('#clients-flexslider').flexslider({
                animation: "slide",
                easing: "swing",
                animationLoop: false,
                itemWidth: 1,
                itemMargin: 1,
                minItems: 2,
                maxItems: 9,
                controlNav: false,
                directionNav: false,
                move: 0,
                slideshow: false
                
		});
});
			




function slideChange(args) {
						
	$('.sliderContainer .slideSelectors .item').removeClass('selected');
	$('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
			
			}
			
			function slideComplete(args) {
				
				if(!args.slideChanged) return false;
				
				$(args.sliderObject).find('.text1, .text2').attr('style', '');
				
				$(args.currentSlideObject).find('.text1').animate({
					right: '100px',
					opacity: '1'
				}, 800, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text2').delay(200).animate({
					right: '50px',
					opacity: '1'
				}, 800, 'easeOutQuint');
				
			}
			
			function sliderLoaded(args) {
					
				$(args.sliderObject).find('.text1, .text2').attr('style', '');
				
				$(args.currentSlideObject).find('.text1').animate({
					right: '100px',
					opacity: '1.0'
				}, 800, 'easeOutQuint');
				
				$(args.currentSlideObject).find('.text2').delay(200).animate({
					right: '50px',
					opacity: '1.0'
				}, 800, 'easeOutQuint');
				
				slideChange(args);
				
			}
