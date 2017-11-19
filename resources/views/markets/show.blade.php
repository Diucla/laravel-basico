@extends('layouts.app')
@section('main')
<h3>{{ $market->name }}</h3>
<ul>
 <li>Location City: {{ $market->city }}</li>
 <li>Website: {{ $market->website }}</li>
</ul>
@endsection