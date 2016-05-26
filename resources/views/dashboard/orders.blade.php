
@include('home._head')
<body>
	<div class="bitrix-admin-panel"></div>
	<div class="page-wrapper">
		<div class="container">
		@include('home.header')
		@include('dashboard.order-history')
		@include('home.footer')
		</div>
	</div>

	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>