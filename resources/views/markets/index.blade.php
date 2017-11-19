@extends('layouts.app')
@section('main')

<ul>
	@foreach($markets as $market)

	<li>
		{{-- <a href=" {{ route('markets.show', $market) }} "> --}}
		<a href=" {{ route('teste', $market) }} ">
			{{ $market->name }}
		</a>
	</li>	

	@endforeach

</ul>

<hr>

<div style="display: inline;" class="verde-text" >

	<ul class="verde-text p-2">
		{{ $markets->links() }}	
	</ul> 

</div>

<hr>

<div style="display: inline;" >
	<a href=" {{ route('markets.create') }} "> Novo</a>
</div>

@endsection