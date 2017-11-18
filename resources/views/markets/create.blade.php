@extends('layouts.app')
@section('main')

<div class="offset-md-4 col-md-4 card card-default mt-3 p-2">
	
	<form action="{{ route('markets.store') }}" method="post">

		{{ csrf_field() }}

		<div class="input-group p-1">

			<label class="input-group-addon" for="name">Market Name</label>

			<input class="form-control" type="text" name="name">

		</div>

		<div class="input-group p-1">

			<label class="input-group-addon" for="city">Market City</label>
			<input class="form-control" type="text" name="city">
		</div>

		<div class="input-group p-1">

			<label class="input-group-addon" for="website">Market WebSite</label>
			<input class="form-control" type="text" name="website">

		</div>
		<button class="btn verde pull-right" type="submit">Create</button>

	</form>


</div>


@endsection