<? include('components/html/popup_order-details.html'); ?>
<div class="bcrumbs-container row">
	<div class="col-sm-12">
		<div class="bcrumbs">
			<a href="main.html" class="home"></a>&rarr;
			<a href="profile-settings.html">Personal Area</a>&rarr;
			<a href="order-history.html" class="active">Orders history</a>
		</div>
	</div>
</div>
<div class="account row">
	<h1>Personal Area</h1>
	<aside class="account-menu col-sm-3 col-xs-12">
		<div class="profile clearfix">
			<div class="avatar"><img src="img/icons/avatar.png" alt="User photo (avatar)" title="User photo (avatar)"></div>
			<span class="name">John Doe</span><br><span class="login">[romza@mail.ru]</span><br>(<a href="main.html">Log out</a>)
		</div><!-- /profile -->
		<ul>
			<li><a href="profile-settings.html">Profile settings</a></li>
			<li><a href="order-history.html" class="active">Orders history</a></li>
			<li><a href="subscribe-settings.html">Subscription settings</a></li>
			<li><a href="favorites.html">Favorites</a></li>
		</ul>
	</aside><!-- /account-menu -->
	<section class="account-content col-sm-7 col-xs-12">
		<h2>Orders history</h2>
		<table class="order-history">
			<tr>
				<th>Date</th>
				<th>Order ID</th>
				<th>Total</th>
				<th>State</th>
			</tr>
			<tr class="order">
				<td class="order-date">2014/11/12</td>
				<td class="order-number">
					<a href="#">14123908</a>
				</td>
				<td class="order-price"><span class="price">$30</span></td>
				<td class="order-status success">Successful</td>
			</tr>
			<tr class="order">
				<td class="order-date">2014/11/12</td>
				<td class="order-number">
					<a href="#">14123908</a>
				</td>
				<td class="order-price"><span class="price">$30</span></td>
				<td class="order-status success">Successful</td>
			</tr>
			<tr class="order">
				<td class="order-date">2014/11/12</td>
				<td class="order-number"><a href="#">14123908</a></td>
				<td class="order-price"><span class="price">$30</span></td>
				<td class="order-status success">Successful</td>
			</tr>
			<tr class="order">
				<td class="order-date">2014/11/12</td>
				<td class="order-number"><a href="#">14123908</a></td>
				<td class="order-price"><span class="price">$30</span></td>
				<td class="order-status pending">Pending</td>
			</tr>
			<tr class="order">
				<td class="order-date">2014/11/12</td>
				<td class="order-number"><a href="#">14123908</a></td>
				<td class="order-price"><span class="price">$30</span></td>
				<td class="order-status cancelled">Canceled</td>
			</tr>
		</table>
	</section><!-- /order-history -->
</div><!-- /row -->