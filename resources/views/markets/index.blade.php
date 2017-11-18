<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic Laravel</title>
</head>
<body>


	<ul>
		@foreach($markets as $market)
		
		<li>
			<a href=" {{ route('markets.show', $market) }} ">
				{{ $market->name }}
			</a>
		</li>

		@endforeach

	</ul>
	
</body>
</html>