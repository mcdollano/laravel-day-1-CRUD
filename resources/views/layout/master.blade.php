<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>
	<link rel="stylesheet" type="text/css" href='{{asset("css/bootstrap.css")}}'>
	<link rel="stylesheet" type="text/css" href='{{asset("css/style.css")}}'>

</head>
<body>

	<h1>Heading</h1>
	<hr>
	<div>
		<h2>Navigation goes here</h2>
		<ul>
			<li>Link 1</li>
			<li>Link 2</li>
		</ul>
	</div>

	<div>
		<h2>Contents here</h2>
		@yield("main_content")
	</div>

	<div>
		<h2>Footer</h2>
		@yield("footer")
	</div>

</body>
</html>