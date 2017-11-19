@extends('layouts.app')
@section('main')


<div class="col-md-6">
	
	<form action= "{{ route('markets.update', $farm) }}" method="post">

		{{ method_field('patch') }}


		@foreach ($markets as $id => $market)

		<div>
			<label for= "{{ $market }}">
				<input type="checkbox" name="markets[]" value="{{ $id }}">

				{{ $farm->markets()
					->allRelatedIds()
					->contains($id) ? "checked" : "" }}>

					{{ $market }}
				</label>

			</div>


			@endforeach

		</form>


	</div>



	@endsection