<!DOCTYPE html>
<html>
	<head>
		<title>Demo: hieu-le/active#3 - errors template</title>
	</head>
	<body>
		<h1>
			Error: {{$code}}
		</h1>
		<ul class="nav navbar-nav nav-left">
			<li class="{{ Active::pattern('/') }}"><a href="/">{{ trans('Home')}}</a></li>
			<li class="{{ Active::pattern('about') }}"><a href="{{ url('about') }}">{{ trans('About') }}</a></li>
			<li class="{{ Active::pattern('contact') }}"><a href="{{ url('contact') }}">{{ trans('Contact') }}</a></li>
			<li class="{{ Active::pattern('testimoni') }}"><a href="{{ url('testimoni') }}">{{ trans('Testimony') }}</a></li>
		</ul>
	</body>
</html>