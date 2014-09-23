<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>paoloumali/tpl</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
@include('tpl::_icons')
@include('tpl::_css')
	<style>
	#main {
		padding-top:20px;
	}
	</style>
</head>
<body>

@include('tpl::_navbar')

@section('#main')
	<div id="main" class="container">
		<div class="jumbotron">
			<h1>H1 Heading</h1>
			<p class="lead">Some leading paragraph. Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
		</div><!-- /.jumbotron -->
@yield('content')
		<h2>H2 heading</h2>
		<p>normal paragraph. Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
	</div><!-- /#main.container -->
@show

@include('tpl::_jsFooter')

</body>
</html>