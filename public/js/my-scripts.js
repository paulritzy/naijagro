// items kit filtration by specified type:
// new, hit – popular item (buyer's choice);
// special-offer – promotion; discount.
// types are passed as a ARRAY!
// items that don't meet the selected type get class .hidden and move to the end of kit
// catalog – jQuery object link, containing items list inside itself

function filterByType(catalog, itemsType){
	if (itemsType === undefined) itemsType = ['all'];
	var items = catalog.find('.item-container');
	if (items.hasClass('hidden')) items.removeClass('hidden'); // open all hidden items before new filtration
	if (itemsType[0] == 'all') return items;
	
	var filteredOut;
	for (var i = 0; i < itemsType.length; i++){
		filteredOut = items.not(function(){
			return ($(this).find('.sticker.'+itemsType[i]).length > 0);
		}).addClass('hidden').detach();
		items = items.filter(function(){
			return ($(this).find('.sticker.'+itemsType[i]).length > 0);
		});
		items.parent().append(filteredOut);
	}
	return items;
}

// Split catalog into groups
// catalog - jQuery object link, containing items list inside itself
// itemsInGroup - neccessary any group items amount
// itemsType - filtration items type (see related function)
// send 'all' or igrnor this parameter if filtering is not needed
// function result: any group is wrapped in div.item, first - with .active class
function groupItems(catalog, itemsInGroup, itemsType){
	var items = catalog.find('.item-container').not('.hidden');
	if (catalog.find('.item').length > 0) items.unwrap(); // if items already grouped - remove old grouping
	items = filterByType(catalog, itemsType);
	for (var i = 0; i < items.length; i += itemsInGroup){
		if ( (i+itemsInGroup) >= items.length){
			items.slice(i).wrapAll('<div class="item" />');
			break;
		}
		items.slice(i, i+itemsInGroup).wrapAll('<div class="item" />');
	}
	catalog.find('.item:first-child').addClass('active');
}

// control elements creation
function createControls(catalog, controls){
	controls.empty();
	var itemsNumber = catalog.find('.item').length;
	if (itemsNumber == 1) return;
	for (var i = 0; i < itemsNumber; i++){
		controls.append('<i class="control-point" data-target="#'+
		catalog.attr('id')+'" data-slide-to="'+i+'"></i>');
	}
	controls.children(":first-child").addClass('active');
}

// active link in switcher switching function
function toggle( value ){
	var links = $(this).parent().find('a');
	links.removeClass('active');
	$(links[value]).addClass('active');
}

// setting position of main menu submenu. It doesn't have width set, and will
// adjust it automatically to stay inside its positioned container.
// also, initially it has left: auto, so it will automatically position 
// itself right under menu item it belongs to.
// what we need to do: check if all its content fits in one line. If not,
// reposition submenu to right: 0 to stick to the right side of the container
// Important! Submenus must have fixed width set in CSS!
function processSubmenus(menuItem, menuContainer){
	if (!menuItem) return false;
	
	// looking for submenus big wrapper and quit if not found
	var wrapper = menuItem.find('.submenu-wrapper');
	if (wrapper.length == 0 || !wrapper) return false;
	
	var subElements = wrapper.find('.main-menu-sub');
	var subElemWidth = parseFloat(subElements.css('width'));
	//^ since Bootstrap uses border-box model, css('width') will give width
	// with paddings and borders
	// console.log('subElemWidth: '+subElemWidth);

	// all submenus must have fixed width in CSS, so we can
	// calculate total width like this:
	var maxWidth = subElements.length * subElemWidth;
	// console.log('maxWidth: '+maxWidth);
	
	// reset wrapper position in case it was moved earlier
	wrapper.css({
		'right': '',
	});
	
	var wrapperLeft = wrapper.offset().left;
	var wrapperWidth = wrapper.outerWidth();
	//^ current width of wrapper. If it is less than maxWidth, it means that
	// all submenus not fit into one row, and we need to change position
	// of wrapper
	// console.log('wrapperWidth: '+wrapperWidth);
	
	/* rare case, but happens: when last menu item contains only
	one submenu, then wrapperWidth always will be >= maxWidth,
	even if it crosses right limit of container. So we must check
	this too */
	var rightLimit = menuContainer.offset().left + menuContainer.outerWidth();
	var wrapperRight = wrapperLeft + wrapperWidth;

	if (wrapperWidth < maxWidth || wrapperRight >= rightLimit){
		wrapper.css('right', '0px');
	}

	// moving arrow to where it should be
	wrapperLeft = wrapper.offset().left;
	var itemLeft = menuItem.offset().left;
	var diff = itemLeft - wrapperLeft + 20;
	wrapper.find('.arrow').css('left', diff);

	/*
	Of course, algorithm could be better and smarter, but I wanted it to be as
	simple as possible.
	KISS = "Keep It Simple, Stupid" - good principle ;)
	*/
}

function setMenuItemWidth(menu){
	var items = menu.children('li');
	var number = items.length;
	
	if ( Modernizr.mq('(max-width: 767px)') ){
		items.css('max-width', '');
	} else {
		items.css('max-width', 100/number + '%');
	}
	
}

$( document ).ready(function() {
	var mainMenu = $('.main-menu');
	var basket = $('.basket-open-popup');
	var btnBasket = $('#btn-basket');
	var basketContainer = $('.basket-container');
	var initialTop = basketContainer.offset().top;
	var basketOuterContainer = $('.account-controls');
	var initialWidth = basketOuterContainer.width();

	var ajaxSearch = $('#popup_ajax-search');
	var searchField = $('#search-field');
	searchField.on('focus keyup change', function(){
		if ( $(this).val() ){
			ajaxSearch.addClass('shown');
		} else {
			ajaxSearch.removeClass('shown');
		}
	})
	setMenuItemWidth( mainMenu );
	var isFixed = false;
	function basketFixed(container, outerBasket, initialTop){
		if ($(window).scrollTop() > initialTop){
			if (!isFixed){
				outerBasket.css({
					'left': 'auto',
					'right': 'auto',
					'width': initialWidth
				});
				outerBasket.addClass('fixed');
				outerBasket.find('.order-details').css('max-height', $(window).height()-132);
				isFixed = true;
			} 
		} else {
			if (isFixed){
				outerBasket.css({
					'left': '',
					'right': '',
					'width': ''
				});
				outerBasket.removeClass('fixed');
				outerBasket.find('.order-details').css('max-height', '');
				isFixed = false;
			} 
		}
	}
	function onResizeComplete(){
		if (initialWidth !== basketOuterContainer.width()){
			initialWidth = basketOuterContainer.width();
			console.log('changed');
			if (isFixed){
				basketContainer.css('width', initialWidth);
			}
		}
		
		basketFixed(basketOuterContainer, basketContainer, initialTop);

		setMenuItemWidth( mainMenu );
		
		$('.main-menu > li').each(function(){
			processSubmenus($(this), mainMenu);
		});
	}
	basketFixed(basketOuterContainer, basketContainer, initialTop);
	$(window).on('scroll', function(e){
		basketFixed(basketOuterContainer, basketContainer, initialTop);
	});

	var doResize;
	// opened popups size changing + closing disclosed menu when resizing windows
	$(window).resize(function(){
		if (!Modernizr.mq('(max-width: 767px)')){
			$('.expanded.xs-only').removeClass('expanded')
			.find('.expand-content').hide();
			$('.items-popup .order-details').mCustomScrollbar();
			mainMenu.css('margin-bottom', '');
		}

		if (orderLinks.hasClass('active')){
			orderDetailsReposition(orderPopup, orderLinks.filter('.active'));
		}

		clearTimeout(doResize);
		doResize = setTimeout(onResizeComplete, 300);
	});

	var formLogin = $('.form-login');
	var formReg = $('.form-registration');
	var formSearch = $('.form-search');
		
	var orderLinks = $('.order-number > a');
	var orderPopup = $( document ).find('.order-details-popup');

	var selectorLists = $('.selector-list');
	
	// mobile version main menu functionality
	// calculate menu height through the (number of points)*55px (every point height)
	var mainMenuHeight = mainMenu.find('>li').length*55;
	if (Modernizr.mq('(max-width: 767px)')){
		mainMenu.removeClass('open').css('margin-bottom', -1*mainMenuHeight);
	}
	$('.main-menu-toggle').on('click', function(){
		if (mainMenu.hasClass('open')){
			mainMenu.removeClass('open').css('margin-bottom', -1*mainMenuHeight);
			$(this).removeClass('open');
		} else {
			mainMenu.addClass('open').css('margin-bottom', '25px');
			$(this).addClass('open');
		};
		
	});


	var body = document.body,
	    timer,
	    hover_disabled = false;

	window.addEventListener('scroll', function() {
	  clearTimeout(timer);
	  if( !hover_disabled && !body.classList.contains('disable-hover')) {
	    body.classList.add('disable-hover');
	    hover_disabled = true;
	  }
	  
	  timer = setTimeout(function(){
	    body.classList.remove('disable-hover');
	    hover_disabled = false;
	  }, 500);
	}, false);

	var waiting;
	$('.catalog-item').hover(function(){
		var _ = $(this);
		clearInterval(waiting);
		waiting = setTimeout(function(){
			_.addClass('enable-overflow');
		}, 500);
	}, function(){
		var _ = $(this);
		clearInterval(waiting);
		_.removeClass('enable-overflow');
	});

	// switch functionality
	if ($('.switch-control').length !== 0){
		$('.switch-control').noUiSlider({
			start: 0,
			behaviour: 'extend-tap',
			range: {
				'min': [0, 1],
				'max': 1
			},
			serialization: {
				lower: [ $.Link({ target: toggle }),
						 $.Link({ target: $('#switch-input')})
				],
				format: { decimals: 0 }
			}
		});

		$('.switch a').on('click tap', function(e){
			e.preventDefault();
			var links = $(this).parent().find('a');
			$('#switch-input').val($.inArray(this, links));
			$('#switch-input').change();
		});
	};
	// the end of switch functionality

	// big cart active section switching
	$('.basket-section').on('click', function(){
		if ($(this).hasClass('active')) return;
		$(this).addClass('active').siblings().removeClass('active');
	});

	// active city switching
	$('#city-switcher li > span').on('click', function(){
		if ($(this).parent().hasClass('active')) return;
		$(this).parent().addClass('active').siblings().removeClass('active');
		var city = $(this).html();
		$(this).parents('#city-switcher').find('.current-city').html(city);
	});

	// custom kit initialization
	$('.items-popup .order-details, .selector-list').mCustomScrollbar();
		
	// tooltop initialization
	$('[title]').tipTip({ defaultPosition: "top"});

	// checkout page customer information opening and hiding
	$('.buyer-info-toggle').click(function (e) {
		e.preventDefault();
		$('.buyer-info').slideToggle(400);
		if ($(this).html() == "Open") {
			$(this).html("Close");
		} else { $(this).html("Open"); }
	});

	// slider :active duplication, because it doesn't works in firefox a priori
	$('.switch-control, .price-range-slider').on({
		slide: function(){
			$(this).addClass('clicked');
		},
		change: function(){
			$(this).removeClass('clicked');
		}
	});
	$('div[class*="noUi-"]').on({
		mousedown: function(){
			$(this).closest('.noUi-target').addClass('clicked');
		},
		mouseup: function(){
			$('.noUi-target').removeClass('clicked');
		}
	});
	
	// adding arrows to submenu
	$('.submenu-wrapper').append('<div class="arrow"></div>');

	// comparison page opening modal window with big image
	$('.compare-page .zoom-controls, .compare-page .img-container').on('click', function(e){
		var image = $(this).parents('.compare-item').find('img');
		var src = image.attr('data-big-image');
		var alt = image.attr('alt');
		$('.compare-page #product-big-image-modal img').attr({'src': src, 'alt': alt});
		$('.compare-page #product-big-image-modal').modal('show');
	});

	// "compare" buttom functionality
	$('button.compare').on('click', function(e){
		window.location.href = 'compare.php';
	});

	// active catalog group switching (for not handling by Bootstrap indicators)
	$('.catalog-controls .control-point').on('click', function(){
		$(this).addClass('active').siblings().removeClass('active');
	})

	// rating stars click handling
	$('.rating .star').on('click', function(e){
		$(this).nextAll().removeClass('active');
		$(this).prevAll().addBack().addClass('active');
		return false;
	});
	// rating star hover handling
	$('.rating .star').hover(function(e){
		$(this).nextAll().removeClass('hovered');
		$(this).prevAll().addBack().addClass('hovered');
	}, function(e){
		$(this).siblings().addBack().removeClass('hovered');
	});
	$('.rating .star').on({
		mousedown: function(){
			$(this).nextAll().removeClass('clicked');
			$(this).prevAll().addBack().addClass('clicked');
		}, 
		mouseup: function(e){
			$(this).siblings().addBack().removeClass('clicked');
		}
	});

	// flying to the cart side animation
	$('.to-basket').on('click', function(e){
		e.preventDefault();
		e.stopPropagation();
		if ($(this).parent().hasClass('recommended-items-price')) return false;
		var img = $(this).parents('.catalog-item').find('.img-container>img');
		var startWidth = img.width();
		if ($(this).hasClass('big')){
			img = $(this).parents('.product').find('.img-container>img.photo');
			startWidth = img.width()/1.5;
		}
		var startWidth = img.width();
		var basketCoords = $('#btn-basket').offset();
		var origCoords = img.offset();
		img.clone().css(
			{
				"position": "absolute",
				"z-index": 100,
				"left": origCoords.left,
				"top": origCoords.top,
				"width": startWidth,
				"border": "1px solid silver"
			}).appendTo('body')
		.velocity({ 
			left: basketCoords.left, 
			top: basketCoords.top,
			width: 10,
			height: 10 }, 
			600, "linear", 
			function(){
				$(this).remove();
			});
	});

	// color scheme loading from localStorage, if possible
	var theme = localStorage.getItem('theme');
	if (theme){
		$('link.current-theme').attr('href','css/themes/theme_'+theme+'.css');
		$('.theme-demo.'+theme).addClass('active').siblings().removeClass('active');
	}
	else $('link.current-theme').attr('href','css/themes/theme_aurora.css');
	// color scheme switching
	$('.theme-demo').on('click', function(){
		var newTheme = $(this).attr('data-theme');
		if (theme != newTheme){
			theme = newTheme;
			$('link.current-theme').attr('href','css/themes/theme_'+theme+'.css');
			localStorage.setItem('theme', theme);
			$(this).addClass('active').siblings().removeClass('active');
		} else return;
	});

	// stylized select functionality
	$('.selector').each(function(){
		$(this).find('input').val($(this).find('li.active').html());
	});
	$('.selector li').on('click', function(e){
		e.stopPropagation();
		var $li = $(this);
		$li.closest('.selector-list').fadeOut('fast').removeClass('open');
		
		if($li.hasClass('active')) return;
		
		var value = false;
		var $input = $li.addClass('active')
			.siblings().removeClass('active')
			.eq(0)
			.closest('.selector')
			.find('input').val($li.html()).trigger('change');
		
		if (value = $li.attr('data-value')) {
			$input.attr('data-value', value);
		}
	});
	$('.selector').on('click', function(){
		var list = $(this).find('.selector-list');
		if (list.hasClass('open')) list.fadeOut('fast').removeClass('open');
		else list.fadeIn('fast').addClass('open');
	});

	// big slider active point switching
	$('.slider-controls .control-point').on('click', function(){
		$(this).addClass('active').siblings().removeClass('active');
	});

	// scrollbar click event spread blocking
	// (otherwise some popups close wherein)
	$('.mCSB_scrollTools').on('click', function() {return false;})

	// catalog view active type switching
	$(document).on('click', '.v-blocks, .v-list, .v-table', function(e){
		e.preventDefault();
		$('.viewer').removeClass('catalog-list catalog-table catalog-blocks');
		if ($(this).hasClass('v-blocks')) $('.viewer').addClass('catalog-blocks');
		if ($(this).hasClass('v-list')) $('.viewer').addClass('catalog-list');
		if ($(this).hasClass('v-table')) $('.viewer').addClass('catalog-table');
		$(this).addClass('active').siblings('.active').removeClass('active');
	});
	
	$('.account-menu a.active').on('click', function(e){
		e.preventDefault();
	});

	// Convert all catalog elements into product page links
	$('.catalog-item, .recommended-item, .favorite-item').click(function(e){
		if ($(this).hasClass('out-of-stock')) return false;
		if (selectorLists.hasClass('open')){
			selectorLists.fadeOut('fast').removeClass('open');
			console.log('closed');
			return false;
		}
		window.location.href = $(this).find('a').attr('href');
	});
	// don't forget to abort <a> action
	// when inner links and buttons click
	$('.catalog-item button, .catalog-item .quantity, .selector, td.item-delete, td.item-lay-aside, .favorite-item .item-delete').click(function(e){
		e.stopPropagation();
	});
	// catalog elements to links converting finished 

	// catalog element to unactive converting
	$('.out-of-stock a').on('click', function(e){
		e.preventDefault();
	});

	// active sorting switching
	$('.sort-by button').click(function(e){
		if (!$(this).hasClass('active')){
			$(this).addClass('active').siblings('.active').removeClass('active');
		}
	});

	// all opened popups closing
	function closeToggles(){
		if($('.toggleable').is(':visible')){ 
			$('.toggleable').slideUp(300);
		}
	}

	// locating opened details of order window depending upon coordinates
	// and distance to browser window borders
	function orderDetailsReposition(popup, toggleBtn){
		var offset = toggleBtn.offset();
		var linkWidth = toggleBtn.width();
		var linkHeight = toggleBtn.outerHeight();
		var width = popup.outerWidth();
		var popupLeft = popup.offset().left;
		var newLeft = offset.left + linkWidth + 12;
		var newTop = offset.top + linkHeight - 55;
		if ( (newLeft+width) > $(window).width() ){
			newTop = offset.top + linkHeight + 12;
			newLeft = offset.left - 20;
			popup.removeClass('arrow-left arrow-top-middle').addClass('arrow-top');
			if ( (newLeft+width) > $(window).width() ){
				newLeft = 0;
				popup.addClass('arrow-top-middle');
			}
			popup.css({ left: newLeft, top: newTop });
		} else {
			popup.css({ left: newLeft, top: newTop});
			popup.removeClass('arrow-top arrow-top-middle').addClass('arrow-left');
		}
	}

	

	$('.categories-menu .category').click(function(e){
		e.preventDefault();
		$(this).parent().parent().find('a.active')
			.not($(this)).removeClass('active');
		$(this).addClass('active');
	});


	// submenu work logics
	$('.expandable').on('click', function(e){
		if (!Modernizr.mq('(max-width: 767px)') && $(this).hasClass('xs-only'))
			return;
		if ($(e.target).is('.mobile-link>a, .mobile-link')) return true;
		e.preventDefault();
		e.stopPropagation();
		$(this).parent().find('.expanded')
			.not($(this))
			.removeClass('expanded')
			.find('.expand-content').slideUp('fast');
		$(this).toggleClass('expanded')
			.children('.expand-content').slideToggle('fast');
	});

	$('.expandable li').on('click', function(e){
		e.stopPropagation();
	});

	$('.menu-lvl1-link').on('click', function(e){
		var $this = $(this);
		if (!$this.parent().is('.expandable')){
			if(e.stopPropagation) {
			    e.stopPropagation();
			} else {
			    e.returnValue = false;
			}
			return true;
		}
	})

	
	$('.main-menu > li').each(function(){
		processSubmenus($(this), mainMenu);
	});

	// $('.site-nav>li, .main-menu > li').hover(function(e){
	// 	if (Modernizr.mq('(max-width: 767px)')){
	// 		processSubmenus($(this));
	// 		return false;
	// 	} 
		
	// 	//$(this).children('.expand-content').stop(true,true).fadeIn(500);
	// 	processSubmenus($(this));
				
	// }, function(e){
	// 	// if (Modernizr.mq('(max-width: 767px)') ||
	// 	// 	!$(this).hasClass('xs-only')) return false;
	// 	// $(this).children('.expand-content').stop(true,true).delay(300).fadeOut(200);
	// });

	// end of submenu working logics
	$('.flex-disabled').click(function(){
		return false;
	})
	// menu active points switching
	$('.catalog-menu .sub2 a').click(function(e){
		e.preventDefault();
		$(this).parent().parent().find('a.active')
			.not($(this)).removeClass('active');
		$(this).addClass('active');
	});
	$('.main-menu-sub a').click(function(e){
		$(this).parents('.submenu-wrapper').find('a.active')
			.not($(this)).removeClass('active');
		$(this).addClass('active');
	});

	$('.site-nav-submenu a').on('click', function(e){
		e.preventDefault();
		$(this).parents('.site-nav-submenu').find('.active').removeClass('active');
		$(this).addClass('active');
	});
	
	var mainCatalog = $('#main-catalog');
	var indicators = mainCatalog.find('.catalog-controls');
	$('.recommendations a').click(function(e){
		e.preventDefault();
		if (!$(this).hasClass('active')){
			$('.recommendations a').removeClass('active');
			$(this).addClass('active');
			var filter = ['all'];
			switch ($(this).attr('id')){
				case 'recommendations-new':
					filter = ['new'];
					break;
				case 'recommendations-hit':
					filter = ['hit'];
					break;
				case 'recommendations-sales':
					filter = ['discount', 'special-offer'];
					break;
				default:
					filter = ['all'];
			}
			groupItems(mainCatalog, 8, filter);
			createControls(mainCatalog, indicators);
		}
	});

	// mobile version: site menu opening/hiding
	$('.xs-menu-btn').click(function(e){
		var siteMenu = $('ul.site-nav');
		if (siteMenu.is(':visible')){
			closeToggles();
		} else {
			closeToggles(); // don't forget to close other windows!
			siteMenu.slideToggle(300);	
		}
	});

	// mobile version: search field opening/hiding
	var searchWrap = formSearch.find('.search-wrap');
	$('.toggle-search').click(function(){
		if (searchWrap.hasClass('open')){
			searchWrap.removeClass('open');
		} else {
			closeToggles(); // don't forget to close other windows!
			searchWrap.addClass('open');
			$('#search-field').focus();	
		}
	});


	// digit input field work logics
	var timer;
	$('.quantity-plus, .quantity-minus').on('mousedown', function(){
		var quanInput = $(this).parent().find('input');
		var curValue = parseInt(quanInput.val(), 10);
		if (isNaN(curValue) || curValue<1) curValue = 1;
		if ($(this).hasClass('quantity-plus')) {
			curValue += 1;
			quanInput.val(curValue);
			timer = setInterval(function(){
				curValue += 1;
				quanInput.val(curValue);
			}, 100);
		} else {
			curValue -= 1;
			if (curValue < 1) curValue = 1;
			quanInput.val(curValue);
			timer = setInterval(function(){
				curValue -= 1;
				if (curValue < 1) curValue = 1;
				quanInput.val(curValue);
			}, 100);
		}
	}).on('mouseup mouseleave', function(){
		clearInterval(timer);
	});
	$('.quantity input').change(function(){
		var newValue = $(this).val();
		if (isNaN(newValue) || newValue < 1) $(this).val(1);
	});
	
	// working with forms -----------------------------------------------------
	// Arrange stylized labels instead of placeholders (because its stylization
	// doesn't support well)
	var fields = $('.form-login .textinput-wrapper, .form-registration .textinput-wrapper').find('input').attr('placeholder', '');
	fields.siblings('label').addClass('positioned');

	fields.each(function(){
		if ($(this).is('[required]')){
			$(this).siblings('label').append('<span class="required">*</span>');
		}
		if ($(this).val()) $(this).siblings('label').hide();
	});
	
	// text select when field get focus
	var focusedElement;
	$('input').on('focus', function(){
		if (focusedElement == $(this)) return;
		// ^ if you edit this field now, don't select it fully
		// otherwise pu cursor to necessary place will become impossible
		focusedElement = $(this);
		setTimeout(function () { focusedElement.select(); }, 100); 
		// ^ timeout – Chrome hack, otherwise selecting disappears

		if ($(this).is(fields)) $(this).siblings('label').hide();
	});
	$('.textinput-styled').on('blur change', function(){
		if (!$(this).val() && $(this).is(fields)) $(this).siblings('label').show();
	});


	$('.order-making-form').submit(function(e){
		e.preventDefault();
		if($(this).checkValidity()) window.location.href="order-making-2.php";
	});

	formLogin.submit(function(e){
		e.preventDefault();
		$(this).addClass('submitted');
		var login = formLogin.find('#login-username');
		var pwd = formLogin.find('#login-password');
		if (!login.val() || !pwd.val()){
			//check result will be here
		}
		else {
			window.location.href = "profile-settings.php";
		}
	});
	
	formReg.submit(function(e){
		e.preventDefault();
		$(this).addClass('submitted');
		var login = formReg.find('#reg-username');
		var pwd = formReg.find('#reg-password');
		if (!login.val() || !pwd.val()){
			//check result will be here
		}
		else {
			window.location.href = "profile-settings.php";
		}
	});


	formSearch.submit(function(e){
		e.preventDefault();
		var searchText = formSearch.find('#search-field').val()
		console.log('You searched: '+searchText);
	});

	// Show selected file name when loading photo
	var avatarInput = $('#avatar');
	avatarInput.change(function(e){
		var fileName = $(this).val().replace(/.*(\/|\\)/, '');
		if (!fileName) {
			$('#chosen-file').html('*file is not selected');	
		} else { 
			$('#chosen-file').html(fileName);
		}
	});
	// end of work with forms ------------------------------------------------

	// tabs switching
	var tab = $('.product-info-switch:checked').attr('data-toggle');
	$('.product-info').hide();
	$('.product-info.'+tab).show();

	$('.product-info-switch').on('change propertychange',function(){
		var tab = $(this).attr('data-toggle');
		$(this).siblings('.product-info').hide();
		$(this).siblings('.product-info.'+tab).show();

	})
	
	//----------------------- windows opening -------------------------
	$('.color-switch-toggle').on('click', function(){
		$('#color-switcher').modal('toggle');
	});

	// cart opening
	btnBasket.click(function(e){
		e.preventDefault();
		basket.stop(true,true).fadeToggle().toggleClass('show');
		$(this).toggleClass('open'); //change arrow direction to opposite
		$(this).siblings('.basket-open-popup').find('.order-details').mCustomScrollbar('update');
	});

	// login form modal opening
	$('#btn-login').click(function(e){
		e.preventDefault();
		var username = $('#login-username');
		
		username.focus();
	});

	// sign up form modal opening
	$('#btn-reg').click(function(e){
		e.preventDefault();
		var username = $('#reg-username');
		username.focus();
	});

		
	// order details popup opening
	orderLinks.click(function(e){
		e.preventDefault();
		
		if ($(this).hasClass('active')){
			$(this).removeClass('active');
			orderPopup.fadeOut();
			return;
		}

		// don't forget to close old popups before opening new
		if (orderLinks.hasClass('active')){
			orderLinks.removeClass('active');
			orderPopup.hide();
		}

		orderDetailsReposition(orderPopup, $(this));
		
		orderPopup.fadeToggle();
		$(this).addClass('active');
	});

	//--------------------- windows closing --------------------------
	// closing when press on X
	$('a.form-close').click(function(e){
		e.preventDefault();
	});

	// closing on press ESC
	$( window ).keydown(function(event){
		if ( 27 == event.keyCode ) {
			if (basket.hasClass('show')) {
				basket.fadeToggle().removeClass('show');
				btnBasket.toggleClass('open'); // change button right part arrow direction
			}
			if(orderLinks.hasClass('active')){
				orderLinks.removeClass('active');
				orderPopup.fadeOut();
			}
			if (selectorLists.hasClass('open')){
				selectorLists.css('display', 'none').removeClass('open');
			}
			$('#product-big-image-modal').modal('hide');
			if (Modernizr.mq('(max-width: 767px)')){
				closeToggles();
				$('.search-wrap').removeClass('opened');
			}
		}
	});

	// closing when click outside of window
	$( document ).mouseup(function(e){
		if (basket.hasClass('show')){ 
			if(	!basket.is(e.target) 	&& basket.has(e.target).length === 0 &&
				!btnBasket.is(e.target)	&& btnBasket.has(e.target).length === 0){
				basket.fadeOut().removeClass('show');
				btnBasket.toggleClass('open'); // change button right part arrow direction
	    	}
	    }

	    if(orderLinks.hasClass('active')){
	    	if(	!orderPopup.is(e.target) && orderPopup.has(e.target).length === 0 &&
	    		!orderLinks.is(e.target)){
	    		orderLinks.removeClass('active');
	    		orderPopup.fadeOut();
	    	}
	    }

	    if (selectorLists.hasClass('open')){
	    	if( !selectorLists.is(e.target) && selectorLists.has(e.target).length === 0 &&
	    		!$('.selector').is(e.target) && !$('.catalog-item').is(e.target) && 
	    		$('.catalog-item').has(e.target).length === 0){
					selectorLists.fadeOut('fast').removeClass('open');
					return false;
			}
		}

	    if (Modernizr.mq('(max-width: 767px)')){
			if($('.toggleable').is(':visible')){
				var toggleable = $('.toggleable');
				var toggler = $('.toggler');
				if( !toggleable.is(e.target) && toggleable.has(e.target).length === 0 &&
					!toggler.is(e.target) && toggler.has(e.target).length ===0){
					toggleable.slideUp(300);
				}
			}
			$('.search-wrap').removeClass('opened');
		}

		
	});
});