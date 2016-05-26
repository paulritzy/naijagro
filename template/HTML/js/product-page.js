// small carousel initialization
$('.flexslider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    startAt: 0,
    itemWidth: 66,
    itemMargin: 8,
    asNavFor: ".medium-image",
    prevText: '',
    nextText: ''
});

// initializing medium carousel
var mediumCarousel = $('.medium-image').flexslider({
	animation: "slide", //String: Select your animation type, "fade" or "slide"
	animationLoop: false, //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
	startAt: 0, //Integer: The slide that the slider should start on. Array notation (0 = first slide)
	slideshow: false, //Boolean: Animate slider automatically
	 
	 
	// Primary Controls
	controlNav: false, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
	directionNav: false, //Boolean: Create navigation for previous/next navigation? (true/false)
	
	// Secondary Navigation
	keyboard: false, //Boolean: Allow slider navigating via keyboard left/right keys
	multipleKeyboard: false, //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
	 
	// Special properties
	sync: ".flexslider", //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
	asNavFor: "", //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider
});

// flexslider: object containing flexslider, obviously ;)
// needed to find number of slide to switch to (based on direction)
// and return image inside it
function getFlexTarget(flexslider, direction){
	var slider = flexslider.data('flexslider');
	var slides = slider.slides;

	var targetNumber; // number of target image in flexslider carousel
	switch (direction){
		case 'next':
			targetNumber = slider.getTarget('next');
			break;
		case 'prev':
			targetNumber = slider.getTarget('prev');
			break;
		default:
			targetNumber = slider.currentSlide;
	}
	return slides.eq(targetNumber).find('img');
}


// // change bigImage (usually inside some modal) to new one,
// // which src is get either from img with data-big-image attribute
// // or via direct path passed as a parameter
// // ------
// // using bufferImage to avoid "flickering" on img change.
// // first loading buffer img with needed src path, and on load
// // changing src on actual bigImg
// // ------
// // srcType: 
// // 'img': source must be jQuery object containing <img> with non-empty data-big-image attribute
// // 'path': source must contain path to new big image
// // default: bigImage doesn't change.
// // ------
// // animate: true if animation is needed (if we switching image, not opening it for the first time)
// // and false if we just open the modal window for the first time
// function setBigImage(bigImage, srcType, source, animate){
// 	var src = '';
// 	var alt = '';
// 	switch (srcType){
// 		case 'img':
// 			if ($(source).is('img') && $(source).attr('data-big-image')){
// 				src = source.attr('data-big-image');
// 				alt = source.attr('alt');
// 			} else return;
// 			break;
// 		case 'path':
// 			src = source;
// 			break;
// 		default: return;
// 	}
	
// 	var bufferImg = new Image();
// 	$(bufferImg).on('load', function(){
// 		// immediately finish all current gallery and image animations
// 		// in case someone try to switch images really quick
// 		source.finish();
// 		bigImage.finish();

// 		// actual image change
// 		if (!animate){
// 			// without animation (if we don't change images,
// 			// just opening big modal for first time)
// 			bigImage.attr({'src': src, 'alt': alt});
// 			delete bufferImg; // we don't need it anymore
// 		} else {
// 			// or with animation (if we actually change images
// 			// inside already opened modal window)
// 			bigImage.fadeOut(300, function(){
// 				$(this).attr({'src': src, 'alt': alt});
// 			}).fadeIn(300, function(){
// 				delete bufferImg; // we don't need it anymore
// 			});
// 		}
// 	});
// 	// starting to load buffer image. When it is fully loaded,
// 	// its onload handler (^ right above ^) will be triggered
// 	$(bufferImg).attr({'src': src, 'alt': alt});
// }

var bigModal = $('#product-big-image-modal');
var modalContent = bigModal.find('.modal-content');
var bigImg = bigModal.find('img');

$('.medium-image, .zoom-controls').on('click', function(){
	setBigImage(bigImg, 'img', getFlexTarget(mediumCarousel, 'cur'), false);
	bigModal.modal('show');
});

bigModal.find('.btn-modal-control').on('click', function(){
	// immediately finish all current gallery animations
	// in case someone clicks this button really quick
	mediumCarousel.finish();
	bigImg.finish();

	var dir;
	if ($(this).hasClass('close')) return;
	if ($(this).hasClass('next')) dir = 'next';
	if ($(this).hasClass('prev')) dir = 'prev';


	//actual change of the image
	setBigImage(bigImg, 'img', getFlexTarget(mediumCarousel, dir), true);
	mediumCarousel.flexslider(dir);
});

bigModal.on('swiperight', function(){
	// immediately finish all current gallery animations
	// in case someone clicks this button really quick
	mediumCarousel.finish();
	bigImg.finish();
	setBigImage(bigImg, 'img', getFlexTarget(mediumCarousel, 'prev'), true);
	mediumCarousel.flexslider('prev');
});
bigModal.on('swipeleft', function(){
	// immediately finish all current gallery animations
	// in case someone clicks this button really quick
	mediumCarousel.finish();
	bigImg.finish();
	setBigImage(bigImg, 'img', getFlexTarget(mediumCarousel, 'next'), true);
	mediumCarousel.flexslider('next');
});

bigModal.on('click', function(){
	if (!Modernizr.mq('(max-width: 767px)')) return;
	$(this).modal('hide');
});

var alsoBuy = $('#also-buy-items');
// dynamically create indicators. Idea is that if JS is OFF then all catalog 
// items will be shown immediately, without carousel and hence precreated 
// indicator are not need now
alsoBuy.append('<div class="controls-wrapper bottom"><div class="catalog-controls carousel-indicators"></div></div>');
// search for just created indicators and split catalog into groups
var indicators = alsoBuy.find('.catalog-controls');
groupItems(alsoBuy, 4);
createControls(alsoBuy, indicators);