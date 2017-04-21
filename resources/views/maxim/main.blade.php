<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Maxim - Modern One Page Bootstrap Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="maxim/css/bootstrap-responsive.css" rel="stylesheet">
<link href="maxim/css/style.css" rel="stylesheet">
<link href="maxim/color/default.css" rel="stylesheet">
<link rel="shortcut icon" href="maxim/img/favicon.ico">
<!-- =======================================================
    Theme Name: Maxim
    Theme URL: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
======================================================= -->
</head>
<body class="col-lg-offset-1 col-lg-10">
	 	@include('maxim.partials._navigation')
    
        @include('maxim.partials._header')
    
        @yield('content')
    
        @include('maxim.partials._footer')
</body>
</html>