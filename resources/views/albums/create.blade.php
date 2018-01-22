@extends('layouts.app')

@section('content')
		<h1>Create Album</h1>
	<div class="form-group">
	{!!Form::open(['action' => 'AlbumsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
		{{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Enter the album name'])}}
	</div>
	<div class="form-group">
		{{Form::textarea('description','',['class' => 'form-control', 'placeholder' => 'Album Description'])}}
	</div>
	<div class="form-group">
		{{Form::file('cover_image')}}
	</div>
	<div>
		{{Form::submit('submit')}}
	</div>
	{!!Form::close() !!}
	
@endsection