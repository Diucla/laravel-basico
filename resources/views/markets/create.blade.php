@extends('layouts.app')
@section('main')

<form action="{{ route('markets.store') }}" method="post">

	{{ csrf_field() }}

	<label for="name">Market Name</label>
	<input type="text" name="name"><br>
	<label for="city">Market City</label>
	<input type="text" name="city"><br>
	<label for="website">Market WebSite</label>
	<input type="text" name="website"><br>
	<button type="submit">Create</button>

</form>


@endsection