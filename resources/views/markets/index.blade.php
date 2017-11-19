@extends('layouts.app')
@section('main')

<div class="col-md-4 sombra-2 p-0">
	@foreach($markets as $market)

	<ul class="list-group">

		<li class="list-group-item">
			<a href="{{ route('markets.show', $market) }}">
			{{-- <a href="{{ route('teste', $market) }}" data-toggle="modal" data-target="#detailsModal"> --}}
				{{ $market->name }}
			</a>
		</li>

	</ul>	

	@include('markets/dialog')

	@endforeach
</div>

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