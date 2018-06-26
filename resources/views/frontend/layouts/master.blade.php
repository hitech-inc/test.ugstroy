<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Юг Строй Инвест</title>
	<link rel="stylesheet" href="/css/owl.css">
	<link rel="stylesheet" href="/css/owl.theme.css">
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="/css/remodal.css">
	<link rel="stylesheet" href="/css/remodal-default-theme.css">
	<link rel="stylesheet" href="/css/jquery.sweet-modal.min.css">
</head>
<body>
	<header>
		@include('frontend.partials._header')
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		@include('frontend.partials._footer')
	</footer>

	<script src="/js/jquery.js"></script>
	<script src="/js/owl.js"></script>
	<script src="/js/ripple.js"></script>
	<script src="/js/jquery.sweet-modal.min.js"></script>
	<script src="/js/remodal.min.js"></script>
	<script src="/js/jquery.maskedinput.js"></script>
	<script src="/js/app.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/image-map-resizer/1.0.7/js/imageMapResizer.min.js"></script>

	@yield('scripts')

</body>
</html>