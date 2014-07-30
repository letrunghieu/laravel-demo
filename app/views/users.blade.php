<!DOCTYPE html>
<html>
	<head>
		<title>Demo: 'active' package - issue #2</title>
	</head>
	<body>
		<p>
			 <a href="https://github.com/letrunghieu/active/issues/2">Original issue</a>
		</p>
		<p>
			All users:
			<ul>
				@foreach($users as $user)
					<li>
						{{$user->username}} {{Active::pattern(Auth::user()->username)}}
					</li>
				@endforeach
			</ul>
		</p>
	</body>
</html>