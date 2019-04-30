<!-- Stored in resources/views/layouts/app.blade.php -->

<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
	<!-- Meta -->
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="WHY? Record Company" />
	<meta name="description" content="WHY? Record Company homepage." />
	<meta name="keywords" content="why, record, company, music, edm, techno, idm, experimental, whythough" />

	<meta property="og:image" content="/img/meta.jpg">
	<meta property="og:site_name" content="WHY? Record Compnay">
	<meta property="og:title" content="WHY? Record Company">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Title -->
	<title>WHY? Record Company</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Cinzel|Cormorant+SC|Cormorant+Unicase" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

	<!-- Styles -->
	<link rel="stylesheet" href="{{ URL::asset('css/extend.css') }}" type="text/css">
	<link href="/css/app.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/base.css" type="text/css"> -->
	<!-- <link rel="stylesheet" href="https://use.typekit.net/vmz2gfd.css"> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

	<!-- Favicon -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">


	<script>
		document.documentElement.className = "js";
			var supportsCssVars = function() {
				var e,t=document.createElement("style");
				return t.innerHTML="root: { --tmp-var: bold; }", document.head.appendChild(t), e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e
			};
			supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");
	</script>
</head>

<body>

	<div id="app" class="container h-100">
		<div class="h-100 justify-content-center align-items-center">
			<!-- navbar -->
			<nav class="nav" id="header">
				<a class="navbar-brand" href="/">WHY? Record Company</a>
				<a class="nav-link" href="artists">Artists</a>
				<a class="nav-link" href="releases">Releases</a>
				<a class="nav-link" href="comingsoon">Store</a>
				<a class="nav-link" href="comingsoon">Services</a>
				<a class="nav-link" href="comingsoon">Contact Us</a>
			</nav>
			<div class="container">
				@yield('content')
			</div>
		</div>
	</div>

	<!-- <script src="js/imagesloaded.pkgd.min.js"></script> -->
	<!-- <script src="js/charming.min.js"></script> -->
	<!-- <script src="js/TweenMax.min.js"></script> -->
	<!-- <script src="js/demo1.js"></script> -->
	<script src="js/app.js"></script>

	<!-- <script>
            // Preload all the images in the page
            imagesLoaded(document.querySelectorAll('.intro__img, .reel__img'), {background: true}, () => document.body.classList.remove('loading'));
        </script> -->
</body>

</html>
