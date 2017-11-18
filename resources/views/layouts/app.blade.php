<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic Laravel</title>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>

	@if(count($errors) > 0)

	<ul>
		@foreach ($errors->all() as $error)
		<li class="laranja-text">{{ $error }}</li>
		@endforeach
	</ul>

	@endif

	@yield('main')
	
</body>
</html>