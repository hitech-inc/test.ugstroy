<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Юг Строй Инвест</title>
	<link rel="stylesheet" href="/css/owl.css">
	<link rel="stylesheet" href="/css/owl.theme.css">
	<link rel="stylesheet" href="/css/app.css">
	
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
	<script src="/js/app.js"></script>
</body>
</html>