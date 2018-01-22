@extends('layouts.app')

{{-- @section('content')
	<h1>My Album</h1>
	@foreach($albums as $album)
		<h3>{{$album->name}}</h3>
	@endforeach
@endsection --}}

@section('content')
	@if(count($albums) > 0)

		<div id="albums">
			
			@foreach($albums as $album)
				{{-- @if($i == $colcount) --}}
				<div class="row">
				<h4>{{$album->name}}</h4>
						<div class='medium-4 columns end'>
							<a href="/albums/{{$album->id}}">
								<img class="thumbnail" src="storage/album_covers/{{$album->cover_image}}"
								alt="{{$album->name}}" width="300px" height="300px"> 
							</a>
							
						</div>
				</div>
				{{-- @else --}}
						{{-- <div class='medium-4 columns'>
							<a href="/albums/{{$album->id}}">
								<img class="thumbnail" src="storage/album_covers/{{$album->cover_image}}"
								alt="{{$album->name}}" width="300px" height="300px>
							</a>
							<br>
							<h4>{{$album->name}}</h4> --}}
				{{-- @endif --}}
				{{-- @if($i % 3 == 0) --}}
					{{-- </div></div><div class="row text-center"> --}}
				{{-- @else --}}
					
				{{-- @endif --}}
					
			@endforeach
			
		</div>
				@else
					<p>No albums to display</p>
				@endif
@endsection