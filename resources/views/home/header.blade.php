<div class="row big-header">
<nav class="site-nav">
	<span class="flaticon-menu26 xs-menu-btn toggler"></span>
	<div class="col-sm-9 col-xs-12">
		<ul class="site-nav toggleable">
			<li class='expandable xs-only'><a href="#">I have Farms</a>
				<ul class="site-nav-submenu expand-content">
					<li><a href="#">Crops</a></li>
					<li><a href="#" class="active">Livestocks</a></li>
				</ul>
			</li>
			<li><a href="#">I'm a Buyer</a></li>
			<li><a href="#">Needs For Logistics?</a></li>
			<li><a href="template-page.html">Storages</a></li>
		</ul>
	</div>
	<div class="col-sm-3 hidden-xs">
		<ul class="socials">
			<li><a href="#" class="social tw sprite"></a></li>
			<li><a href="#" class="social fb sprite"></a></li>
			<li><a href="#" class="social youtube sprite"></a></li>
		</ul>
	</div>
</nav><!-- /site-nav -->
<header class="site-header">
	<div class="col-sm-8 col-xs-6">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
			<div class="clearfix">&nbsp;</div>
				<div class="clearfix">&nbsp;</div>
				<a href="{{url('/')}}" class="logo">
					<img src="{{asset('img/path3013.png')}}" alt="Online Store" style="position: absolute; left: 10px;width: 150px;height: auto">
				</a>
				<div class="clearfix"></div>
				<strong style="color:#fff;float:left;margin: -10px 0px 0px 5px">Agriculture-based e-commerce platform</strong>
				
				
			</div>
			<div class="delivery col-sm-6 col-xs-12">
				<span class="text">Orders Reception:</span>
				<span class="phone">
					<a href="tel:+2348034309999"><span class="phone-short">08012345679</span></a>
				</span><br>
				<span class="email">
					<a href="mailto:order@naijagro.com">order@naijagro.com</a>
				</span>
			</div><!-- /delivery -->
		</div><!-- /row -->
	</div><!-- /col-sm-8 -->
	<!-- switching between styles via toggling class "not-authorized" -->
	<div class="account-controls col-sm-4 col-xs-6">
		
		@if(Auth::check())
		<div style="position:relative">
				<button id="btn-authorized">
					<span class="btn-content">
						<span class="text">Personal Area:</span>
						<span class="authorized-user">{{Auth::user()->name}}</span>
					</span>
				</button>
				<a href="{{url('auth/logout')}}" id="btn-logout"></a>
			</div>
		@endif
		
		@if(!Auth::check())
		<div class="not-authorized">
			<button class="logged-in" id="btn-login" data-toggle="modal" data-target="#modal-login"><span class="btn-content"><span class="btn-text">Sign in</span></span></button>
		</div>
		<div class="not-authorized">
			<button id="btn-reg" data-toggle="modal" data-target="#modal-register"><span class="btn-content"><span class="btn-text">Sign up</span></span></button>
		</div>
		@endif
		
		<div class="basket-container">
			<button id="btn-basket" class="main-btn">
				<span class="btn-content">
				<span class="btn-text">Cart:</span>
				<span class="basket-data">
					<span class="goods-number">0</span> items <span class="hidden-xs">-</span> <span class="price price-total">₦0.00</span>
				</span>
				</span>
			</button>
			@include('home.popup_basket')
		</div><!-- /basket-container -->
		
		
	</div>
</header><!-- /site-header -->
</div><!-- /row -->
<button class="main-menu-toggle"><span class="text">Items Catalog</span></button>
<nav class="main row">
	<ul class="main-menu clearfix">
		
		<li class="expandable xs-only pull-left">
			<a href="javascript:void(0)">Crops</a>
			<div class="mobile-link">
				<a href="javascript:void(0)" class="flaticon-thin4"></a>
			</div>
			<div class="submenu-wrapper expand-content clearfix">
				<div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">CASH CROPS</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="javascript:void(0)">Cocoa<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Shell<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Cotton<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Rubber<sup class="number-of-items">4</sup></a></li> 
						<li><a href="javascript:void(0)">Oil palm<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Robusta<sup class="number-of-items">4</sup></a></li> 
						<li><a href="javascript:void(0)">Timber<sup class="number-of-items">4</sup></a></li>
					</ul>
				</div>
				<div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">FRUIT CROPS</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="javascript:void(0)">Grape<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Orange<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Apple<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Water melon<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Mango<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Cashew<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Cherry<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Banana<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Pineapple<sup class="number-of-items">4</sup></a></li>
						<li><a href="javascript:void(0)">Pawpaw<sup class="number-of-items">4</sup></a></li>
					</ul>
				</div><!-- /main-menu-sub --><div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">BEVERAGE CROPS</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="javascript:void(0)">Tea<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Coffee<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Cocoa<sup class="number-of-items">4</sup></a></li>
						</ul>
				</div>
				<div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">FORAGE CROPS</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="javascript:void(0)">Grasses<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Legumes<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Crucifer<sup class="number-of-items">4</sup></a></li>
						</ul>
				</div><!-- /main-menu-sub --><div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">VEGETABLE CROPS</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="javascript:void(0)">Tomatoes<sup class="number-of-items">4</sup></a></li> 
<li><a href="javascript:void(0)">Onions<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Carrot<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Cucumber<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Spinach<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Cabbage<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Broccoli<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Pepper<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Okra<sup class="number-of-items">4</sup></a></li>
						</ul>
				</div>
				<div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">OIL CROPS</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="javascript:void(0)">Flax<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Sunflower<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Sesame<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Castor bean<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Mustard<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Cotton seed<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Corn and grain sorghum<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Safflower<sup class="number-of-items">4</sup></a></li>
						</ul>
				</div>
				
				<div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">LEGUMES</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="javascript:void(0)">Groundnut<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Cowpea<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Soybeans<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Lima beans<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Pigeon peas<sup class="number-of-items">4</sup></a></li>
						</ul>
				</div>
				
				<div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">CEREAL OR GRAIN CROPS</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="javascript:void(0)">Wheat<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Oat<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Barley<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Rice<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Maize<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Sorghum<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Millet<sup class="number-of-items">4</sup></a></li>
						</ul>
				</div>
				
				<div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">ROOT AND TUBER CROPS</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
					<li><a href="javascript:void(0)">Sugar-beets<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Sweet-potatoes<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Yam<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Cassava<sup class="number-of-items">4</sup></a></li>
<li><a href="javascript:void(0)">Cocoyam<sup class="number-of-items">4</sup></a></li>
						</ul>
				</div>
							</div><!-- /submenu-wrapper -->
		</li>
	
	<li class="expandable xs-only pull-left">
			<a href="javascript:void(0)">Livestocks</a>
			<div class="mobile-link">
				<a href="javascript:void(0)" class="flaticon-thin4"></a>
			</div>
			<div class="submenu-wrapper expand-content clearfix">
				<div class="main-menu-sub expandable xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">Domestics</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
				
				<ul class="expand-content">
				<li><a href="javascript:void(0)">Dog<sup class="number-of-items">4</sup></a></li> 
				<li><a href="javascript:void(0)">Cattle<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Cow<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Goat<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Guinea fowl<sup class="number-of-items">4</sup></a></li> 
				<li><a href="javascript:void(0)">Rat<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Chicken<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Bird<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Rabbit<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Pig<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Fish<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Cat<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Monkey<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Snail<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Ram<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Sheep<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Turkey<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Duck<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Pigeon<sup class="number-of-items">4</sup></a></li>
				<li><a href="javascript:void(0)">Horse<sup class="number-of-items">4</sup></a></li>
				</ul>
				</div>
				<div class="main-menu-sub xs-only">
					<a href="javascript:void(0)" class="menu-lvl1-link">Non-Domestics</a>
					<a href="javascript:void(0)" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="javascript:void(0)">Snake<sup class="number-of-items">4</sup></a></li>
				
						</ul>
				</div><!-- /main-menu-sub -->
			</div><!-- /submenu-wrapper -->
		</li>
	

	
	</ul><!-- /main-menu -->
		
</nav>
	
	<!-- 
	
	<div class="text-center">
<input type="search" name="search-field" style="width: 600px;height: 40px;z-index: 9999" placeholder="I need...">
	
</div>
	
	position: absolute;top: 0px;left: 0px;
	 -->
		 

<!-- 

popups and modals-->

@include('home.modal_login')
@include('home.modal_registration')


<div class="modal" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="success-modal" aria-hidden="true">
		<div class="form-success">
			<a href="#" class="form-close flaticon-close19" data-toggle="modal" data-target="#success-modal"></a>
			<span class="glyphicon glyphicon-ok"></span>
			Sign up successful
		</div>
</div>
<div class="modal" id="fail-modal" tabindex="-1" role="dialog" aria-labelledby="fail-modal" aria-hidden="true">
		<div class="form-fail">
			<a href="#" class="form-close flaticon-close19" data-toggle="modal" data-target="#fail-modal"></a>
			<span class="glyphicon glyphicon-ban-circle"></span>
			Attention! There is a mistake!
		</div>
</div>

