@extends('layouts.app')
	@section('content')
		<h1>CONTACT</h1>
		
			<div class="form-group">
			{!! Form::open(['url' => 'contact/submit']) !!}
				{{Form::label('name', 'Name')}}
				{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
			</div>
		
			<div class="form-group">
				{{Form::label('email', 'E-Mail Address')}}
				{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email address'])}}
				{{-- may also try this on placeholder{{Form::text('email', 'example@gmail.com', ['class' => 'form-control'])}} --}}
			</div>
		
			<div class="form-group">
				{{Form::label('message', 'Message')}}
				{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
			</div>

			<div>
				{{Form::submit('submit', ['class'=> 'btn btn-primary'])}}
			</div>
		{!! Form::close() !!}

@endsection