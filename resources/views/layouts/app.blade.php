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
		<meta property="og:image" content="#">
		<meta property="og:title" content="WHY? Record Company">

        <!-- Title -->
        <title>WHY? Record Company</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/base.css') }}" type="text/css">
		<link rel="stylesheet" href="https://use.typekit.net/vmz2gfd.css">

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
    <body class="demo-1 loading">
        @section('sidebar')
            
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>