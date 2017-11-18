@extends('layouts.app')
@section('main')

	<ul>
		@foreach($markets as $market)
		
		<li>
			<a href=" {{ route('markets.show', $market) }} ">
				{{ $market->name }}
			</a>
		</li>	

		@endforeach

	</ul>

	<hr>

	{{ $markets->links() }}

	<hr>

	<div style="display: inline;" >
		<a href=" {{ route('markets.create') }} "> Novo</a>
	</div>
	
@endsection