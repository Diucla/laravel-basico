@extends('layouts.app')
@section('main')
<h1>{{ $market->name }}</h1>
<ul>
 <li>Location City: {{ $market->city }}</li>
 <li>Website: {{ $market->website }}</li>
</ul>
@endsection