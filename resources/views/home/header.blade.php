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
				<a href="main.html" class="logo">
					
					<div class="clearfix">&nbsp;</div>
					<img src="{{asset('img/path3013.png')}}" alt="Online Store" style="position: absolute; left: 10px;width: 150px;height: auto">
				</a>
				
				
			</div>
			<div class="delivery col-sm-6 col-xs-12">
				<span class="text">Orders Reception:</span>
				<span class="phone">
					<a href="tel:+2348034309999"><span class="phone-short">08034309999</span></a>
				</span><br>
				<span class="email">
					<a href="mailto:order@naijagro.com">order@naijagro.com</a>
				</span>
			</div><!-- /delivery -->
		</div><!-- /row -->
	</div><!-- /col-sm-8 -->
	<!-- switching between styles via toggling class "not-authorized" -->
	<div class="account-controls col-sm-4 col-xs-6">
		<div class="not-authorized">
			<div class="logged-in">
				<button id="btn-authorized">
					<span class="btn-content">
						<span class="text">Personal Area:</span>
						<span class="authorized-user">John Doe</span>
					</span>
				</button>
				<button id="btn-logout"></button>
			</div>
			<button id="btn-login" data-toggle="modal" data-target="#modal-login"><span class="btn-content"><span class="btn-text">Sign in</span></span></button>
		</div>
		<div class="not-authorized">
			<button id="btn-reg" data-toggle="modal" data-target="#modal-register"><span class="btn-content"><span class="btn-text">Sign up</span></span></button>
		</div>
		
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
			<a href="catalog.html">Crops</a>
			<div class="mobile-link">
				<a href="catalog.html" class="flaticon-thin4"></a>
			</div>
			<div class="submenu-wrapper expand-content clearfix">
				<div class="main-menu-sub expandable xs-only">
					<a href="catalog.html" class="menu-lvl1-link">For kitchen</a>
					<a href="catalog.html" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="catalog.html">Dishwashing<sup class="number-of-items">4</sup></a></li>
						<li><a href="catalog.html">Hob<sup class="number-of-items">4</sup></a></li>
						<li><a href="catalog.html">Windows cleaning<sup class="number-of-items">44</sup></a></li>
						<li><a href="catalog.html">For hood<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">Microwave cleaning<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">For the floor<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">For fridge<sup class="number-of-items">38</sup></a></li>
					</ul>
				</div>
				<div class="main-menu-sub expandable xs-only">
					<a href="catalog.html" class="menu-lvl1-link">For bathroom</a>
					<a href="catalog.html" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="catalog.html">For acrylic baths<sup class="number-of-items">11</sup></a></li>
						<li><a href="catalog.html">For cast iron baths<sup class="number-of-items">23</sup></a></li>
						<li><a href="catalog.html">For mirrors<sup class="number-of-items">55</sup></a></li>
						<li><a href="catalog.html">For washing machines<sup class="number-of-items">8</sup></a></li>
						<li><a href="catalog.html">For floor cleaning<sup class="number-of-items">76</sup></a></li>
						<li><a href="catalog.html">Flavours<sup class="number-of-items">99</sup></a></li>
						<li><a href="catalog.html">For hand wash<sup class="number-of-items">17</sup></a></li>
					</ul>
				</div><!-- /main-menu-sub --><div class="main-menu-sub expandable xs-only">
					<a href="catalog.html" class="menu-lvl1-link">For kitchen</a>
					<a href="catalog.html" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="catalog.html">Dishwashing<sup class="number-of-items">4</sup></a></li>
						<li><a href="catalog.html">Hob<sup class="number-of-items">4</sup></a></li>
						<li><a href="catalog.html">Windows cleaning<sup class="number-of-items">44</sup></a></li>
						<li><a href="catalog.html">For hood<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">Microwave cleaning<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">For the floor<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">For fridge<sup class="number-of-items">38</sup></a></li>
					</ul>
				</div>
				<div class="main-menu-sub expandable xs-only">
					<a href="catalog.html" class="menu-lvl1-link">For bathroom</a>
					<a href="catalog.html" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="catalog.html">For acrylic baths<sup class="number-of-items">11</sup></a></li>
						<li><a href="catalog.html">For cast iron baths<sup class="number-of-items">23</sup></a></li>
						<li><a href="catalog.html">For mirrors<sup class="number-of-items">55</sup></a></li>
						<li><a href="catalog.html">For washing machines<sup class="number-of-items">8</sup></a></li>
						<li><a href="catalog.html">For floor cleaning<sup class="number-of-items">76</sup></a></li>
						<li><a href="catalog.html">Flavours<sup class="number-of-items">99</sup></a></li>
						<li><a href="catalog.html">For hand wash<sup class="number-of-items">17</sup></a></li>
					</ul>
				</div><!-- /main-menu-sub --><div class="main-menu-sub expandable xs-only">
					<a href="catalog.html" class="menu-lvl1-link">For kitchen</a>
					<a href="catalog.html" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="catalog.html">Dishwashing<sup class="number-of-items">4</sup></a></li>
						<li><a href="catalog.html" class="active">Hob<sup class="number-of-items">4</sup></a></li>
						<li><a href="catalog.html">Windows cleaning<sup class="number-of-items">44</sup></a></li>
						<li><a href="catalog.html">For hood<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">Microwave cleaning<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">For the floor<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">For fridge<sup class="number-of-items">38</sup></a></li>
					</ul>
				</div>
				<div class="main-menu-sub expandable xs-only">
					<a href="catalog.html" class="menu-lvl1-link">For bathroom</a>
					<a href="catalog.html" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="catalog.html">For acrylic baths<sup class="number-of-items">11</sup></a></li>
						<li><a href="catalog.html">For cast iron baths<sup class="number-of-items">23</sup></a></li>
						<li><a href="catalog.html">For mirrors<sup class="number-of-items">55</sup></a></li>
						<li><a href="catalog.html">For washing machines<sup class="number-of-items">8</sup></a></li>
						<li><a href="catalog.html">For floor cleaning<sup class="number-of-items">76</sup></a></li>
						<li><a href="catalog.html">Flavours<sup class="number-of-items">99</sup></a></li>
						<li><a href="catalog.html">For hand wash<sup class="number-of-items">17</sup></a></li>
					</ul>
				</div><!-- /main-menu-sub -->
			</div><!-- /submenu-wrapper -->
		</li>
	
	<li class="expandable xs-only pull-left">
			<a href="catalog.html">Livestocks</a>
			<div class="mobile-link">
				<a href="catalog.html" class="flaticon-thin4"></a>
			</div>
			<div class="submenu-wrapper expand-content clearfix">
				<div class="main-menu-sub expandable xs-only">
					<a href="catalog.html" class="menu-lvl1-link">For kitchen</a>
					<a href="catalog.html" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="catalog.html">Dishwashing<sup class="number-of-items">4</sup></a></li>
						<li><a href="catalog.html" class="active">Hob<sup class="number-of-items">4</sup></a></li>
						<li><a href="catalog.html">Windows cleaning<sup class="number-of-items">44</sup></a></li>
						<li><a href="catalog.html">For hood<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">Microwave cleaning<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">For the floor<sup class="number-of-items">24</sup></a></li>
						<li><a href="catalog.html">For fridge<sup class="number-of-items">38</sup></a></li>
					</ul>
				</div>
				<div class="main-menu-sub xs-only">
					<a href="catalog.html" class="menu-lvl1-link">For bathroom</a>
					<a href="catalog.html" class="mobile-link flaticon-thin4"></a>
					<ul class="expand-content">
						<li><a href="catalog.html">For acrylic baths<sup class="number-of-items">11</sup></a></li>
						<li><a href="catalog.html">For cast iron baths<sup class="number-of-items">23</sup></a></li>
						<li><a href="catalog.html">For mirrors<sup class="number-of-items">55</sup></a></li>
						<li><a href="catalog.html">For washing machines<sup class="number-of-items">8</sup></a></li>
						<li><a href="catalog.html">For floor cleaning<sup class="number-of-items">76</sup></a></li>
						<li><a href="catalog.html">Flavours<sup class="number-of-items">99</sup></a></li>
						<li><a href="catalog.html">For hand wash<sup class="number-of-items">17</sup></a></li>
					</ul>
				</div><!-- /main-menu-sub -->
			</div><!-- /submenu-wrapper -->
		</li>
	

	
	</ul><!-- /main-menu -->
		
</nav>
	
	<div class="text-center">
<input type="search" name="search-field" style="width: 600px;height: 40px;z-index: 9999" placeholder="I need...">
	
</div>




<!-- popups and modals-->

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

