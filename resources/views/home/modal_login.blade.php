<div id="modal-login" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog login-box" ng-controller="AuthCtrl">
	
	<form action="javascript:void(0)" class="form-login" name="form_login" method="post" ng-submit="login()">
   
	{!! csrf_field() !!}
	<a href="#" class="form-close flaticon-close19" data-toggle="modal" data-target="#modal-login"></a>
	<h2>Authorization</h2>
	<div class="form-logo"></div>
	<div class="textinput-wrapper">
		<label for="login-username" class="adjust">Email Address</label>
		<input type="text" ng-model="email" name="email" id="login-username" placeholder="Email Address" class="textinput-styled" required>
	</div>
	<div class="textinput-wrapper">
		<label for="login-password" class="adjust">Password</label>
		<input type="password" ng-model="password" name="password" id="login-password" placeholder="Password" class="textinput-styled" required>
	</div>
	<div class="remember-container">
		<input type="checkbox" ng-model="remember" name="remember" id="remember" class="checkbox-styled">
		<label for="remember">Remember me</label>
		<br><a href="#" class="forgot-pass">Forgot password?</a>
	</div>
	<div class="form-footer">
		<input type="submit"  value="Continue" name="login-submit" id="login-submit" class="main-btn">
		<ul class="social-list">
			<li><a href="#" class="social tw"><span class="icon-container sprite"></span></a></li>
			<li><a href="#" class="social vk"><span class="icon-container sprite"></span></a></li>
			<li><a href="#" class="social fb"><span class="icon-container sprite"></span></a></li>
		</ul>
	</div>
</form>
	</div>
</div>