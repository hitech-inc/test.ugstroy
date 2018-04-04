<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Юг Строй Инвест</title>
	<link rel="stylesheet" href="css/app.css">
	
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



	<script src="js/script.js"></script>
</body>
</html>