@extends('layouts.app')

@section('content')
<h1>Event Materials</h1>

<div class="form-group">
	{!!Form::open(['action' => 'EventfilesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
		{{Form::text('name','',['class' => 'form-control', 'placeholder' => 'File Name'])}}
	</div>
		<div class="form-group">
		{{Form::textarea('note','',['class' => 'form-control', 'placeholder' => 'File Note'])}}
	</div>
	<div class="form-group">
		{{Form::file('eventfiles')}}
	</div>
	<div>
		{{Form::submit('submit')}}
	</div>
	<h1>Event Files</h1>
	<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>Title</th>
						<th>Upload Date</th>
						<th>Action</th>
					</thead>

					<tbody>

					@foreach($eventsdownload as $eventdl)
						<tr>
							<td>{{$eventdl->name}}</td>
							<td>{{$eventdl->created_at}}</td>
							<td>
								<a href="/download/{{$eventdl->id}}">
								<button type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-download">
									Download
								</i></button>
							</a>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
@endsection

@section('sidebar')
	<div class="col-md-4 col-lg-4">
				hello
	</div>
@endsection