
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tpl: Hello World!</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Hello World! I'm tpl</h1>
		<p>{{HTML::link('tpl/template', 'See default template')}}</p>
		<h2>Config: tpl::config</h2>
		<pre>{{var_dump(Config::get('tpl::config'))}}</pre>
		<h2>Config: tpl::paths</h2>
		<pre>{{var_dump(Config::get('tpl::paths'))}}</pre>
	</div>
</body>
</html>