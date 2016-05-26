@include('home._head')
<body>
	<div class="bitrix-admin-panel"></div>
	<div class="page-wrapper">
		<div class="container main-page">
		@include('home.header')
		@include('home._main')
		@include('home.footer')
		</div>
	</div>

	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>