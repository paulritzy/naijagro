// "Hide" and "Show more" buttons under main catalog state handling in 
// mobile version. "Hide" button hides if only first items group opened.
// "Show more" hides if all groups opened.
function processButtons(catalog){
	var itemGroups = catalog.find('.item');
	var activeIndex = itemGroups.siblings('.active').index();
	if (activeIndex == 0) catalog.find('.hide-btn').hide();
	if (activeIndex == itemGroups.length-1) catalog.find('.show-btn').hide();
	if (activeIndex > 0) catalog.find('.hide-btn').show();
	if (activeIndex < itemGroups.length-1) catalog.find('.show-btn').show();
}

// working with categories and brands
$('.flexslider.shown').flexslider({
    animation: "slide",
    animationLoop: false,
    slideshow: false,
   	itemWidth: 190,
    startAt: 0,
    prevText: "",
    nextText: "",
    move: 3,
    minItems: 6,
    maxItems: 6
});

$('#switch-input, .switch-control').on('change', function(){
	var changer = $(this).val();
	var carousels = $(this).parents('.categories')
					.find('.carousel-wrap');

	// remove and destroy everything, like nuclear bomb dropped from above :)
	carousels.filter('.shown').removeClass('shown').flexslider("destroy");

	// but Life cannot be destroyed completely, and something rises from the ashes!
	if (changer == 1) carousels.filter('.brands-carousel').addClass('shown');
	else carousels.filter('.categories-carousel').addClass('shown');
	$('.flexslider.shown').flexslider({
	    animation: "slide",
	    animationLoop: false,
	    slideshow: false,
	   	itemWidth: 190,
	    startAt: 0,
	    prevText: "",
	    nextText: "",
	    move: 3,
	    minItems: 6,
	    maxItems: 6
	});
});

// END OF categories and brands


// dynamic main catalog carousel creation
var showNumber = 8; // amount of products displayed on the page
var mainCatalog = $('#main-catalog');
		
// dynamically create indicators. The idea is that if JS is OFF then will show 
// all catalog items, without carousel, so precreated indicators not needed.
mainCatalog.prepend('<div class="controls-wrapper top"><div class="catalog-controls carousel-indicators"></div></div>')
		.append('<div class="controls-wrapper bottom"><div class="catalog-controls"></div></div>');
// find just created indicators and split catalog into groups
var indicators = mainCatalog.find('.catalog-controls');
if (Modernizr.mq('(max-width: 767px)')){ 
	groupItems(mainCatalog, 4);
	processButtons(mainCatalog);
}
else { 
	groupItems(mainCatalog, showNumber);
	createControls(mainCatalog, indicators);
}


// On screen size change regrouping 
// (catch transition between mobile and other size)
function reGroup(){
	var currentGrouping = mainCatalog.find('.item:first-child').children().length;
	if (Modernizr.mq('(max-width: 767px)') && currentGrouping != 4){
		groupItems(mainCatalog, 4);
		processButtons(mainCatalog);
	} else if (!Modernizr.mq('(max-width: 767px)') && currentGrouping != showNumber) {
		groupItems(mainCatalog, showNumber);
		createControls(mainCatalog, indicators);
	}
}
var doIt;
$(window).resize(function(){
	clearTimeout(doIt);
	doIt = setTimeout(reGroup, 400);
});

// Bootstrap carousel supports ony one indicators kit
// so write second kit functionality manually
$('#main-catalog').on('slid.bs.carousel', function(){
	var index = $('#main-catalog .item.active').index();
	indicators.not('.carousel-indicators')
			.children().removeClass('active');
	indicators.not('.carousel-indicators')
			.children().eq(index).addClass('active');
})


$('.show-btn').on('click', function(){
	$('#main-catalog').find('.item.active')
		.removeClass('active').next('.item').addClass('active');
	processButtons($('#main-catalog'));
})
$('.hide-btn').on('click', function(){
	$('#main-catalog').find('.item.active')
		.removeClass('active').prev('.item').addClass('active');
	processButtons($('#main-catalog'));
})

$(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
