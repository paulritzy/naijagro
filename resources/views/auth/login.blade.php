<!DOCTYPE html>
<html ng-app="wonmy"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App Name - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css">
  
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                
                <form method="POST" action="password/email">
    {!! csrf_field() !!}

    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div>
       <label>
                        Enter the email you signed up with</label>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <input type="submit" class="pass-reset-submit btn btn-success btn-sm" value="Send Password Reset Link"/>
            
        
    </div>
</form>
  <div class="clearfix">&nbsp;</div>
                 <div class="text-center">
                <a href="javascript:void(0)" onclick="$('.pr-wrap').hide();$('.wrap').show()">Login</a>
                </div>
                </div>
               
            </div>
            <div class="wrap">
            <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
         <div class="clearfix">&nbsp;</div>
         <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
                <p class="form-title">
                    Sign In</p>
             <form action="login" method="post" class="login" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
				@if(isset($error)) 
				<div class="alert alert-danger"><small>{{$error}}</small></div>
				@endif	
				{!! csrf_field() !!}
                <input type="email" name="email" placeholder="Email Address" />
                <input type="password" name="password" placeholder="Password" />
                <input type="submit" name="submit" value="Sign In" class="btn btn-success btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                            <a href="javascript:void(0)" onclick="$('.pr-wrap').show();$('.wrap').hide()" class="forgot-pass">Forgot Password</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
  
</div>
						


<script type="text/javascript">
$=function(id){ return document.querySelector(id);};
Object.prototype.hide=function(bool){
	if(bool)
		this.style.visibility='hidden';
	else
		this.style.display='none';
};

Object.prototype.show=function(bool){
	if(bool)
		this.style.visibility='visible';
	else
	 this.style.display='block';
};
 </script>
</body>
</html>


