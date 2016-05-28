@include('home._head')
<body>
	<div class="bitrix-admin-panel"></div>
	<div class="page-wrapper">
		<div class="container" style="width: 100%">
		@include('home.header')
		@include('home._main')
		@include('home.footer')
		</div>
	</div>

<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/angular.js')}}" type="text/javascript"></script>
<script src="{{asset('js/controllers.js')}}" type="text/javascript"></script>
<script src="{{asset('js/services.js')}}" type="text/javascript"></script>
<script src="{{asset('js/directives.js')}}" type="text/javascript"></script>
</body>
</html>