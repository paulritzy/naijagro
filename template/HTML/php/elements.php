<? include('components/html/_head.html'); ?>
<body>

<div class="modal fade" id="color-switcher" tabindex="-1" role="dialog" aria-labelledby="color-switcher" aria-hidden="true">
	<div class="modal-dialog">
		<h2>Settings panel</h2>
		<p>Choose color scheme:</p>
		<div class="theme-demo aurora" data-theme='aurora'>Aurora</div>
		<div class="theme-demo bluesky" data-theme='bluesky'>Bluesky</div>
		<div class="theme-demo fresh" data-theme='fresh'>Fresh</div>
		<div class="theme-demo honey" data-theme='honey'>Honey</div>
		<div class="theme-demo violet" data-theme='violet'>Violet</div>
	</div>
</div>

<button class="color-switch-toggle"><span class="glyphicon glyphicon-cog"></span></button>
<div class="container elements-page">
	<div class="row">
		<h1>Food Store Project. UI Kit</h1>
		<h2>1. Basic elements</h2>
		<h3>1.1 Buttons</h3>
		<div class="col-sm-2">
			<button class="main-btn">Subscribe</button>
			<button class="to-basket">To cart</button>
		</div>
		<div class="col-sm-2">
			<div class="big-buy-btn">
				<div class="quantity">
					<span class="quantity-plus">+</span>
					<input type="text" name="quantity" value="2">
					<span class="quantity-minus">&ndash;</span>
				</div>
				<button class="to-basket big">To cart</button>
			</div><!-- /big-buy-btn -->
		</div>
	</div><!-- /row -->
	<div class="row">
		<h3>1.2 Links</h3>
		<div class="col-sm-2">
			<div class="link-dropdown"><a href="#">Krasnoyarsk</a></div>
		</div>
		<div class="col-sm-2 delivery">
			<span class="email">
				<a href="mailto:foodstore@mail.ru">foodstore@online.com</a>
			</span>
		</div>
		<div class="col-sm-2 account-controls">
			<button id="btn-login"><span class="btn-content"><span class="btn-text">Sign in</span></span></button>
		</div>
		<div class="col-sm-4 specials">
			<p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, non for <span class="price">$10</span></a></p>
		</div>
		<div class="col-sm-1">
			<a href="#" class="form-close flaticon-close19"></a>
		</div>
	</div><!-- /row -->
	<div class="row">
		<ul class="categories-menu">
		<li class="col-sm-2">
			<a href="#" class="category">
				<span class="flaticon-lightbulb13"></span><span class="flaticon-blender3"></span>
				<span class="text">Home and garden goods</span>
			</a>
		</li>
		<li class="col-sm-2">
			<a href="#" class="category active">
				<span class="flaticon-lightbulb13"></span><span class="flaticon-blender3"></span>
				<span class="text">Home and garden goods</span>
			</a>
		</li>
		</ul>
		<div class="col-sm-2">
			<button class="reset"><span class="text">Reset all parameters</span></button>
		</div>
	</div><!-- /row -->
	<div class="recommendations row">
		<div class="col-sm-3 col-md-2 hidden-xs">
			We Recommend:
		</div>
		<div class="col-sm-2 col-md-2 col-xs-4">
			<p><a href="#" class="active">New<span class="recommendations-sticker new hidden-xs">37</span></a></p>
		</div>
		<div class="col-sm-4 col-md-5 col-xs-4">
			<p><a href="#">Buyer's choice <span class="recommendations-sticker buyer-choice hidden-xs">15</span></a></p>
		</div>
		<div class="col-sm-3 col-md-3 col-xs-4">
			<p><a href="#">Sale<span class="recommendations-sticker sale hidden-xs">134</span></a></p>
		</div>
	</div><!-- /recommendations -->
	<div class="row">
		<div class="col-sm-2">
			<div class="rating">
				<span class="flaticon-little27 star"></span>
				<span class="flaticon-little27 star"></span>
				<span class="flaticon-little27 star"></span>
				<span class="flaticon-little27 star"></span>
				<span class="flaticon-little27 star"></span>
			</div>
		</div>
		<div class="col-sm-2">
			<button class="like pull-right"><span class="text">Excellent product!</span></button>
			<button class="review pull-right"><span class="text">3 reviews</span></button>
		</div>
	</div>
	<div class="row">
		<h3>1.3 Menu</h3>
		<nav class="site-nav">
			<span class="flaticon-menu26 xs-menu-btn toggler"></span>
			<div class="col-sm-9 col-xs-12">
				<ul class="site-nav toggleable">
					<li class="active"><a href="main.php">Main page</a></li>
					<li><a href="catalog.php">Store</a></li>
					<li class='expandable xs-only'><a href="#">Blog</a>
						<ul class="site-nav-submenu expand-content">
							<li><a href="#">How to pay</a></li>
							<li><a href="#" class="active">How to order</a></li>
							<li><a href="#">How to Receive Order</a></li>
							<li><a href="#">Return Policy</a></li>
							<li><a href="#">Promo and Discount Cards</a></li>
						</ul>
					</li>
					<li class="expandable xs-only"><a href="#">Shipping and Payment</a>
						<ul class="site-nav-submenu expand-content">
							<li><a href="#">How to pay</a></li>
							<li><a href="#">How to Order</a></li>
							<li><a href="#" class="active">How to Receive Order</a></li>
							<li><a href="#">Return Policy</a></li>
							<li><a href="#">Promo and Discount Cards</a></li>
						</ul>
					</li>
					<li><a href="#">Contacts</a></li>
					<li><a href="template-page.php">Information</a></li>
				</ul>
			</div>
			<div class="col-sm-3 hidden-xs">
				<ul class="socials">
					<li><a href="#" class="social tw sprite"></a></li>
					<li><a href="#" class="social fb sprite"></a></li>
					<li><a href="#" class="social youtube sprite"></a></li>
					<li><a href="#" class="social skype sprite"></a></li>
					<li><a href="#" class="social vk sprite"></a></li>
				</ul>
			</div>
		</nav><!-- /site-nav -->
	</div>
	<nav class="main row">
		<ul class="main-menu clearfix">
			<li class="expandable xs-only"><a href="#">Items</a>
				<div class="submenu-wrapper expand-content clearfix">
					<div class="main-menu-sub expandable xs-only">
						<h3>For kitchen</h3>
						<ul class="expand-content">
							<li><a href="#">Dishwashing</a></li>
							<li><a href="#" class="active">Hob</a></li>
							<li><a href="#">Windows cleaning</a></li>
							<li><a href="#">For hoods</a></li>
							<li><a href="#">Microwave cleaning</a></li>
							<li><a href="#">For floor</a></li>
							<li><a href="#">For fridge</a></li>
						</ul>
					</div>
					<div class="main-menu-sub expandable xs-only">
						<h3>For bathroom</h3>
						<ul class="expand-content">
							<li><a href="#">For acrylic baths</a></li>
							<li><a href="#">For cast iron baths</a></li>
							<li><a href="#">For mirrors</a></li>
							<li><a href="#">For washing machine</a></li>
							<li><a href="#">For floor cleaning</a></li>
							<li><a href="#">Flavours</a></li>
							<li><a href="#">Hand washing</a></li>
						</ul>
					</div><!-- /main-menu-sub -->
				</div><!-- /submenu-wrapper -->
			</li>
			<li class="expandable xs-only"><a href="#">Children goods</a>
				<div class="submenu-wrapper expand-content clearfix">
					<div class="main-menu-sub expandable xs-only">
						<h3>For kitchen</h3>
						<ul class="expand-content">
							<li><a href="#">Dishwashing</a></li>
							<li><a href="#">Hob</a></li>
							<li><a href="#">Windows cleaning</a></li>
							<li><a href="#">For hoods</a></li>
							<li><a href="#">Microwave cleaning</a></li>
							<li><a href="#">For floor</a></li>
							<li><a href="#">For fridge</a></li>
						</ul>
					</div>
					<div class="main-menu-sub expandable xs-only">
						<h3>For bathroom</h3>
						<ul class="expand-content">
							<li><a href="#">For acrylic baths</a></li>
							<li><a href="#">For cast iron baths</a></li>
							<li><a href="#" class="active">For mirrors</a></li>
							<li><a href="#">For washing machine</a></li>
							<li><a href="#">For floor cleaning</a></li>
							<li><a href="#">Flavours</a></li>
							<li><a href="#">Hand washing</a></li>
						</ul>
					</div><!-- /main-menu-sub -->
				</div><!-- /submenu-wrapper -->
			</li>
			<li class="expandable xs-only"><a href="#">Beauty & Personal Care</a>
				<div class="submenu-wrapper expand-content clearfix">
					<div class="main-menu-sub expandable xs-only">
						<h3>For kitchen</h3>
						<ul class="expand-content">
							<li><a href="#">Dishwashing</a></li>
							<li><a href="#">Hob</a></li>
							<li><a href="#">Windows cleaning</a></li>
							<li><a href="#">For hoods</a></li>
							<li><a href="#">Microwave cleaning</a></li>
							<li><a href="#">For floor</a></li>
							<li><a href="#">For fridge</a></li>
						</ul>
					</div>
					<div class="main-menu-sub expandable xs-only">
						<h3>For bathroom</h3>
						<ul class="expand-content">
							<li><a href="#">For acrylic baths</a></li>
							<li><a href="#">For cast iron baths</a></li>
							<li><a href="#">For mirrors</a></li>
							<li><a href="#" class="active">For washing machine</a></li>
							<li><a href="#">For floor cleaning</a></li>
							<li><a href="#">Flavours</a></li>
							<li><a href="#">Hand washing</a></li>
						</ul>
					</div><!-- /main-menu-sub -->
				</div><!-- /submenu-wrapper -->
			</li>
			<li class="expandable xs-only"><a href="#">Household chemicals</a>
				<div class="submenu-wrapper expand-content clearfix">
					<div class="main-menu-sub expandable xs-only">
						<h3>For kitchen</h3>
						<ul class="expand-content">
							<li><a href="#">Dishwashing</a></li>
							<li><a href="#">Hob</a></li>
							<li><a href="#">Windows cleaning</a></li>
							<li><a href="#">For hoods</a></li>
							<li><a href="#">Microwave cleaning</a></li>
							<li><a href="#">For floor</a></li>
							<li><a href="#">For fridge</a></li>
						</ul>
					</div>
					<div class="main-menu-sub expandable xs-only">
						<h3>For bathroom</h3>
						<ul class="expand-content">
							<li><a href="#">For acrylic baths</a></li>
							<li><a href="#">For cast iron baths</a></li>
							<li><a href="#" class="active">For mirrors</a></li>
							<li><a href="#">For washing machine</a></li>
							<li><a href="#">For floor cleaning</a></li>
							<li><a href="#">Flavours</a></li>
							<li><a href="#">Hand washing</a></li>
						</ul>
					</div><!-- /main-menu-sub --><div class="main-menu-sub expandable xs-only">
						<h3>For kitchen</h3>
						<ul class="expand-content">
							<li><a href="#">Dishwashing</a></li>
							<li><a href="#">Hob</a></li>
							<li><a href="#">Windows cleaning</a></li>
							<li><a href="#">For hoods</a></li>
							<li><a href="#">Microwave cleaning</a></li>
							<li><a href="#">For floor</a></li>
							<li><a href="#">For fridge</a></li>
						</ul>
					</div>
					<div class="main-menu-sub expandable xs-only">
						<h3>For bathroom</h3>
						<ul class="expand-content">
							<li><a href="#">For acrylic baths</a></li>
							<li><a href="#">For cast iron baths</a></li>
							<li><a href="#">For mirrors</a></li>
							<li><a href="#">For washing machine</a></li>
							<li><a href="#">For floor cleaning</a></li>
							<li><a href="#">Flavours</a></li>
							<li><a href="#">Hand washing</a></li>
						</ul>
					</div><!-- /main-menu-sub --><div class="main-menu-sub expandable xs-only">
						<h3>For kitchen</h3>
						<ul class="expand-content">
							<li><a href="#">Dishwashing</a></li>
							<li><a href="#">Hob</a></li>
							<li><a href="#">Windows cleaning</a></li>
							<li><a href="#">For hoods</a></li>
							<li><a href="#">Microwave cleaning</a></li>
							<li><a href="#">For floor</a></li>
							<li><a href="#">For fridge</a></li>
						</ul>
					</div>
					<div class="main-menu-sub expandable xs-only">
						<h3>For bathroom</h3>
						<ul class="expand-content">
							<li><a href="#">For acrylic baths</a></li>
							<li><a href="#">For cast iron baths</a></li>
							<li><a href="#">For mirrors</a></li>
							<li><a href="#">For washing machine</a></li>
							<li><a href="#">For floor cleaning</a></li>
							<li><a href="#">Flavours</a></li>
							<li><a href="#">Hand washing</a></li>
						</ul>
					</div><!-- /main-menu-sub -->
				</div><!-- /submenu-wrapper -->
			</li>
			<li class="expandable xs-only"><a href="#">Home and garden goods</a>
				<div class="submenu-wrapper expand-content clearfix">
					<div class="main-menu-sub expandable xs-only">
						<h3>For kitchen</h3>
						<ul class="expand-content">
							<li><a href="#">Dishwashing</a></li>
							<li><a href="#" class="active">Hob</a></li>
							<li><a href="#">Windows cleaning</a></li>
							<li><a href="#">For hoods</a></li>
							<li><a href="#">Microwave cleaning</a></li>
							<li><a href="#">For floor</a></li>
							<li><a href="#">For fridge</a></li>
						</ul>
					</div>
					<div class="main-menu-sub expandable xs-only">
						<h3>For bathroom</h3>
						<ul class="expand-content">
							<li><a href="#">For acrylic baths</a></li>
							<li><a href="#">For cast iron baths</a></li>
							<li><a href="#">For mirrors</a></li>
							<li><a href="#">For washing machine</a></li>
							<li><a href="#">For floor cleaning</a></li>
							<li><a href="#">Flavours</a></li>
							<li><a href="#">Hand washing</a></li>
						</ul>
					</div><!-- /main-menu-sub --><div class="main-menu-sub expandable xs-only">
						<h3>For kitchen</h3>
						<ul class="expand-content">
							<li><a href="#">Dishwashing</a></li>
							<li><a href="#">Hob</a></li>
							<li><a href="#">Windows cleaning</a></li>
							<li><a href="#">For hoods</a></li>
							<li><a href="#">Microwave cleaning</a></li>
							<li><a href="#">For floor</a></li>
							<li><a href="#">For fridge</a></li>
						</ul>
					</div>
					<div class="main-menu-sub expandable xs-only">
						<h3>For bathroom</h3>
						<ul class="expand-content">
							<li><a href="#">For acrylic baths</a></li>
							<li><a href="#">For cast iron baths</a></li>
							<li><a href="#">For mirrors</a></li>
							<li><a href="#">For washing machine</a></li>
							<li><a href="#">For floor cleaning</a></li>
							<li><a href="#">Flavours</a></li>
							<li><a href="#">Hand washing</a></li>
						</ul>
					</div><!-- /main-menu-sub --><div class="main-menu-sub expandable xs-only">
						<h3>For kitchen</h3>
						<ul class="expand-content">
							<li><a href="#">Dishwashing</a></li>
							<li><a href="#">Hob</a></li>
							<li><a href="#">Windows cleaning</a></li>
							<li><a href="#">For hoods</a></li>
							<li><a href="#">Microwave cleaning</a></li>
							<li><a href="#">For floor</a></li>
							<li><a href="#">For fridge</a></li>
						</ul>
					</div>
					<div class="main-menu-sub expandable xs-only">
						<h3>For bathroom</h3>
						<ul class="expand-content">
							<li><a href="#">For acrylic baths</a></li>
							<li><a href="#">For cast iron baths</a></li>
							<li><a href="#">For mirrors</a></li>
							<li><a href="#">For washing machine</a></li>
							<li><a href="#">For floor cleaning</a></li>
							<li><a href="#">Flavours</a></li>
							<li><a href="#">Hand washing</a></li>
						</ul>
					</div><!-- /main-menu-sub -->
				</div><!-- /submenu-wrapper -->
			</li>
		</ul><!-- /main-menu -->
	</nav><!-- /main -->
	<div class="row">
		<aside class="col-sm-3 col-xs-12">
			<? include('components/html/_catalog-menu.html'); ?>
		</aside>
		<h3>1.4 Breadcrumbs</h3>
		<div class="col-sm-9">
			<div class="bcrumbs-container row">
				<div class="col-sm-12">
					<div class="bcrumbs">
						<a href="main.php" class="home"></a>&rarr;
						<a href="profile-settings.php">Personal Area</a>&rarr;
						<a href="order-history.php" class="active">Checkout</a>
					</div><!-- /bcrumbs -->
				</div><!-- /col-sm-12 -->
			</div><!-- /bcrumbs-container row -->
		</div><!-- /col-sm-9 -->
		<div class="col-sm-3">
			<h3>1.5 Input fields</h3>
			<form action="#" method="#" class="">
				<input type="text" class="textinput-styled" value="Normal field">
			</form>
			<form action="#" method="#" class="submitted">	
				<input type="text" class="textinput-styled" value="Correct data input">
				<input type="email" class="textinput-styled" value="Incorrect data input">
				<input type="text" class="textinput-styled" value="Unavailable field" disabled>
				<input type="submit" hidden>
			</form>
			<form action="#" method="#" class="">
				<input type="email" class="subscribe-email" placeholder="Your e-mail...">
			</form>
		</div>
		<div class="col-sm-6">
			<h3>1.6 Checkboxes, radiobuttons, dropdowns...</h3>
			<div>
				<input type="checkbox" name="remember1" id="remember1" class="checkbox-styled">
				<label for="remember1">Remember me</label>
			</div>
			<div>
				<input type="checkbox" name="remember2" id="remember2" class="checkbox-styled" disabled>
				<label for="remember2">Remember me</label>
			</div>
			<div>
				<input type="radio" name="auto-generation" id="auto-generation1" value="true" class="radio-styled">
				<label for="auto-generation1">Generate login and password</label>
			</div>
			<div>
				<input type="radio" name="auto-generation" id="auto-generation-false1" value="false" class="radio-styled" checked>
				<label for="auto-generation-false1">Set login and password</label>
			</div>
			<div>
				<input type="radio" name="auto-generation" id="auto-generation2" value="true" class="radio-styled" disabled>
				<label for="auto-generation2">Generate login and password</label>
			</div>
			<div class="price-range">
				<div class="price-range-slider"></div>	
				<input type="number" name="min-price" id="min-price" hidden>
				<input type="number" name="max-price" id="max-price" hidden>
			</div>
			<div class="selector long">
				<div class="select">
					<input type="text" class="selector-input" data-list="example-texts" disabled>
					<ul class="selector-list" id="example-texts">
						<li class="active">Text 1</li>
						<li>Text 2</li>
						<li>Text 3</li>
						<li>Text 4</li>
						<li>Text 5</li>
						<li>Text 6</li>
						<li>Text 7</li>
						<li>Text 8</li>
						<li>Text 9</li>
						<li>Text 10</li>
						<li>Text 11</li>
						<li>Text 12</li>
						<li>Text 13</li>
						<li>Text 14</li>
						<li>Text 15</li>
					</ul>
				</div>
			</div>
			<div class="scrollbar-example mCustomScrollbar"><div class="many-content"></div></div>
			<h3>1.7 Stickers</h3>
			<div>
				<div class="sticker new"></div>
				<div class="sticker special-offer"></div>
				<div class="sticker hit"></div>
				<div class="sticker discount">-35%</div>
			</div>
		</div>
	</div><!-- /row -->
	<div class="row">
		<h3>1.8 Tabs, switches</h3>
		<div class="col-sm-1">
			<ol class="slider-controls hidden-xs">
				<li class="control-point active"></li>
				<li class="control-point"></li>
				<li class="control-point"></li>
				<li class="control-point"></li>
			</ol>
		</div>
		<div class="col-sm-4 col-sm-offset-1">
			<div class="switch">
				<div class="switch-control"></div>
				<a href="#" class="left active">Items categories</a>
				<a href="#" class="right">Manufacturers</a>
				<div style="display:none"><input type="number" id="switch-input" hidden="hidden"></div>
			</div>
		</div>
		<div class="col-sm-1 col-sm-offset-1">
			<div class="catalog-controls">
				<i class="control-point active">
				</i><i class="control-point">
				</i><i class="control-point">
				</i><i class="control-point"></i>
			</div>
		</div>
		<div class="col-sm-1">
			<div class="quantity full-view">
				<span class="quantity-plus">+</span>
				<input type="text" name="quantity" value="2">
				<span class="quantity-minus">&ndash;</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-9">
			<div class="sort-by">
				<span class="text">Sort by:</span>
				<button class="sort-by-price active"><span class="text">price</span></button>
				<button class="sort-by-name"><span class="text">name</span></button>
				<button class="sort-by-popularity"><span class="text">popularity</span></button>
				<button class="sort-by-sales"><span class="text">sales </span></button>
				<button class="sort-by-rating"><span class="text">rating</span></button>
			</div><!-- /sort-by -->
		</div>
		<div class="view-options col-sm-9">
			<span class="view-mode">
				<span class="text">View:</span>
				<a href="#" class="v-blocks" title="View: blocks"></a>
				<a href="#" class="v-list" title="View: list"></a>
				<a href="#" class="v-table active" title="View: table"></a>
			</span>
			<div class="selector group-by"><label>Show by:</label>
				<div class="select">
					<input type="text" class="selector-input" disabled>
					<ul class="selector-list">
						<li class="active">12</li>
						<li>24</li>
						<li>36</li>
						<li>48</li>
						<li>60</li>
					</ul>
				</div>
			</div>
			<span class="paginator">
				<a href="#" class="to-start default disabled">Begin</a>
				<a href="#" class="flaticon-arrow133 default disabled"></a>
				<a href="#">1</a>
				<a href="#">2</a>
				<a href="#" class="active">3</a>
				<a href="#">..</a>
				<a href="#">11</a>
				<a href="#">12</a>
				<a href="#" class="flaticon-right20 default"></a>
				<a href="#" class="to-end">End</a>
			</span><!-- /paginator -->
		</div><!-- /view-options -->
		<div class="col-sm-9">
			<input type="radio" name="product-info-switch" id="product-info-description" class="product-info-switch" data-toggle="description" checked>
			<label for="product-info-description" class="product-info-tab">Details</label>
			<input type="radio" name="product-info-switch" id="product-info-reviews" class="product-info-switch" data-toggle="reviews">
			<label for="product-info-reviews" class="product-info-tab">Comments</label>
			<div class="product-info description"></div>
			<div class="product-info reviews"></div>
		</div>
	</div>
	<div class="row">
		<h2>2. Icons</h1>
		<div class="col-sm-12">
			<ul class="socials">
				<li><a href="#" class="social tw sprite"></a></li>
				<li><a href="#" class="social fb sprite"></a></li>
				<li><a href="#" class="social youtube sprite"></a></li>
				<li><a href="#" class="social skype sprite"></a></li>
				<li><a href="#" class="social vk sprite"></a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<h2>3. Tooltips, alerts, comments</h2>
		<div class="col-sm-2">
			<a href="#" title="It's tooltip for all elements with title attribute">Hover cursor to see tooltip</a>
		</div>
		<div class="col-sm-4">
			<div class="form-success">
				<a href="#" class="form-close flaticon-close19" data-toggle="modal" data-target="#success-modal"></a>
				<span class="glyphicon glyphicon-ok"></span>
				Registration is successful
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-fail">
				<a href="#" class="form-close flaticon-close19" data-toggle="modal" data-target="#fail-modal"></a>
				<span class="glyphicon glyphicon-ban-circle"></span>
				Attention! There is a mistake!
			</div>	
		</div>
		
	</div>

</div><!-- /container -->

	<script>
		/*price range slider functionality*/
		var minPriceLimit = 0;
		var maxPriceLimit = 1000;
		var maxInputToolTip = $.Link({
			target: '-tooltip-<div class="ttip"></div>',
			method: function ( value ) {
				$(this).html(
					'<input type="text" id="max-price-new" value="'
					+value+
					'"><span class="price"></span>'
				);
			}
		});
		var minInputToolTip = $.Link({
			target: '-tooltip-<div class="ttip"></div>',
			method: function ( value ) {
				$(this).html(
					'<input type="text" id="min-price-new" value="'
					+value+
					'"><span class="price"></span>'
				);
			}
		});
		$('.price-range-slider').noUiSlider({
			start: [minPriceLimit, maxPriceLimit],
			step: 1,
			behaviour: 'snap',
			connect: true,
			range: {
				'min': [minPriceLimit],
				'max': [maxPriceLimit]
			},
			serialization: {
				lower: [ 	minInputToolTip, $.Link({ target: $('#min-price') })],
				upper: [ 	maxInputToolTip, $.Link({ target: $('#max-price') })],
				format: {decimals: 0}
			}
		});
		
		$('body').on('click tap', 'div.ttip', function(e){
			$(this).find('input').focus().select();
		});
		$('body').on('change', '#max-price-new', function(){
			var newVal = $(this).val();
			var oldVal = $('#max-price').val();
			if (!$.isNumeric(newVal)) {
				$(this).val(oldVal);
				return false;
			}
			$('#max-price').val(newVal);
			$('#max-price').change();
		});
		$('body').on('change', '#min-price-new', function(){
			var newVal = $(this).val();
			var oldVal = $('#min-price').val();
			if (!$.isNumeric(newVal)) {
				$(this).val(oldVal);
				return false;
			}
			$('#min-price').val(newVal);
			$('#min-price').change();
		});
		/* the end of price range slider functionality*/
	</script>
</body>
</html>