@extends('layouts.app')

@section('content')
		<h1>Upload Photos</h1>
	<div class="form-group">
	{!!Form::open(['action' => 'PhotosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
		{{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Photo Title'])}}
	</div>
	<div class="form-group">
		{{Form::textarea('description','',['class' => 'form-control', 'placeholder' => 'Photo Caption'])}}
	</div>
	<div class="form-group">
		{{Form::hidden('album_id', $album_id)}}
	</div>
	<div class="form-group">
		{{Form::file('photo')}}
	</div>
	<div>
		{{Form::submit('submit')}}
	</div>
	{!!Form::close() !!}
	
@endsection