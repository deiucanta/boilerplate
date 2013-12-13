<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Boilerplate</title>
	<link href="{{ asset('assets/main.css') }}" rel="stylesheet">
</head>
<body>

	<!-- This triggers the menu module from javascript -->
	<div data-module="menu"></div>

	@yield('content')

	<script src="{{ asset('assets/main.js') }}"></script>

</body>
</html>