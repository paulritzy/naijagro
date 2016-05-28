<div class="flexslider" style="margin: -25px -15px">
          <ul class="slides">
            <li>
  	    	    <img src="{{asset('img/banners/slide1.jpg')}}" />
  	    		</li>
  	    		<li>
  	    	    <img src="{{asset('img/banners/slide2.jpg')}}" />
  	    		</li>
  	    		<li>
  	    	    <img src="{{asset('img/crops/2000px-Bananas.svg.png')}}" />
  	    		</li>
  	    		<li>
  	    	    <img src="{{asset('img/crops/watermelon-ogr-2.jpg')}}" />
  	    		</li>
          </ul>
        </div>

<section class="specials row hidden-xs">
	<button class="consultation">Online consultation</button>
	<h2>Discounts and Promotions</h2>
	<div class="col-sm-4">
		<div class="special-offer masl">
			<div class="img-container">
				<img src="{{asset('img/crops/Product-TI2.jpg')}}" alt="Lorem ipsum!" title="Lorem ipsum!">
			</div>
			<p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis and only for <span class="price">$10</span></a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="special-offer cakes">
			<div class="img-container">
				<img src="{{asset('img/crops/Cocoa400_275.jpg')}}" alt="Discount for all sweet goods" title="Discount for all sweet goods">
			</div>
			<p><a href="#">Champion discount &mdash; 30% of all sweet goods, cakes and pastries.</a></p>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="special-offer vitamins">
			<div class="img-container">
				<img src="{{asset('img/crops/Product-TI.jpg')}}" alt="Restore the vitamins supply!" title="Restore the vitamins supply!">
			</div>
			<p><a href="#">Restore the supply of vitamins! Fresh fruits and vegetables for the whole family!</a></p>
		</div>
	</div>
</section><!-- /specials -->
<div class="recommendations row">
	<div class="col-sm-3 col-md-2 hidden-xs">
		<h2>Recommend:</h2>
	</div>
	<div class="col-sm-2 col-md-2 col-xs-4">
		<p><a href="#" id="recommendations-new">New<span class="recommendations-sticker new hidden-xs">37</span></a></p>
	</div>
	<div class="col-sm-4 col-md-5 col-xs-4">
		<p><a href="#" id="recommendations-hit">Buyers choice<span class="recommendations-sticker buyer-choice hidden-xs">15</span></a></p>
	</div>
	<div class="col-sm-3 col-md-3 col-xs-4">
		<p><a href="#" id="recommendations-sales">Sale<span class="recommendations-sticker sale hidden-xs">134</span></a></p>
	</div>
</div><!-- /recommendations -->
<div class="row">
	<div class="col-xs-12 carousel slide" id="main-catalog">
		<div class="carousel-inner catalog-blocks row4">
			@for ($i = 0; $i < 10; $i++)
					@include('home.catalog-items-example1');
			@endfor
		</div>	<!-- /catalog-blocks -->
		<div class="show-hide-wrapper">
			<button class="hide-btn"><span>Hide</span></button>
			<button class="show-btn"><span>Show more</span></button>
		</div>
	</div><!-- /col-xs-12 -->
</div><!-- /row -->
<section class="news row">
	<h2>News</h2>
	<div class="col-sm-4">
		<div class="news-item city">
			<span class="news-date">09/27/2015</span>
			<div class="img-container">
				<img src="{{asset('img/news/news_city.jpg')}}" alt="Skyscrapers air cleaning" title="Skyscrapers air cleaning">
			</div>
			<a href="#" class="news-description">Scientist proposes to clean the city's air by skyscrapers</a>
		</div>
	</div><!-- /news-item -->
	<div class="col-sm-4">
		<div class="news-item iphone">
			<span class="news-date">10/02/2015</span>
			<div class="img-container">
				<img src="{{asset('img/news/news_iphone.jpg')}}" alt="iPhone 6S cost for 1991" title="iPhone 6S cost for 1991">				
			</div>
			<a href="#" class="news-description">Calculated iPhone 6S cost for 1991</a>
		</div>
	</div><!-- /news-item -->
	<div class="col-sm-4">
		<div class="news-item sochy">
			<span class="news-date">10/10/2015</span>
			<div class="img-container">
				<img src="{{asset('img/news/news_yours.jpg')}}" alt="A film about Olympic Games creation released" title="A film about Olympic Games creation released">
			</div>
			<a href="#" class="news-description">ATV has produced a film about creation the Olympic Games</a>
		</div>
	</div><!-- /news-item -->
</section>