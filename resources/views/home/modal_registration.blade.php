<div id="modal-register" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" ng-controller="AuthCtrl">
	
	<form action="javascript:void(0)" class="form-registration" name="form_registration" method="post" ng-submit="register()">
   
	{!! csrf_field() !!}
	<a href="#" class="form-close flaticon-close19" data-toggle="modal" data-target="#modal-register"></a>
	<h2>Sign up</h2>
	<div class="form-logo"></div>
	
	
	<div class="textinput-wrapper">
		<label for="first-name">Full Name</label>
		<input type="text" ng-model="name" name="name" id="first-name" placeholder="Name" class="textinput-styled">
	</div>
	
	<div class="textinput-wrapper">
		<label for="email">E-mail</label>
		<input type="email" ng-model="email" name="email" id="email" placeholder="E-mail" class="textinput-styled" required>
	</div>
	
	<div class="textinput-wrapper">
		<label for="phone">Phone NUmber</label>
		<input type="text" ng-model="phone" name="phone" id="phone" placeholder="Phone Number" class="textinput-styled">
	</div>
	
	<div class="textinput-wrapper">
		<label for="reg-password">Password</label>
		<input type="password" ng-model="password" name="password" id="reg-password" placeholder="Password" class="textinput-styled" required>
	</div>
	<div class="textinput-wrapper">
		<label for="reg-password-repeat">Repeat password</label>
		<input type="password" ng-model="password_confirmation" name="password_confirmation" id="reg-password-repeat" placeholder="Repeat password" class="textinput-styled" required>
	</div>
	
	
	<div class="anti-robot clearfix">
		<div class="captcha"><img src="img/captcha.jpg" alt="Captcha"></div>
		<div class="textinput-wrapper">
			<input type="text" name="captcha" id="captcha" placeholder="Captcha" class="textinput-styled" required>
			<label for="captcha">Captcha</label>
		</div>
	</div>
	<div class="required-info"><span>*</span>Fields marked with asterisk are required</div>			
	<div class="form-footer">
		<div class="agreement-checkbox-wrapper">
			<input type="checkbox" name="accept-agreement" id="accept-agreement" class="checkbox-styled">
			<label for="accept-agreement">I agree with <a href="#">Store Terms and Conditions</a></label>
		</div>
		<input type="submit" value="Continue" name="reg-submit" id="reg-submit" class="main-btn">
	</div>
</form>
	
	</div>
</div>