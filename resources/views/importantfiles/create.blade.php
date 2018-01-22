@extends('layouts.app')

@section('content')
<h1>Upload File Here</h1>
<div class="form-group">
	{!!Form::open(['action' => 'FilesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
		{{Form::text('name','',['class' => 'form-control', 'placeholder' => 'File Name'])}}
	</div>
		<div class="form-group">
		{{Form::textarea('note','',['class' => 'form-control', 'placeholder' => 'File Note'])}}
	</div>
	{{-- <div class="form-group">
		{{Form::hidden('album_id', $album_id)}}
	</div> --}}
	<div class="form-group">
		{{Form::file('file')}}
	</div>
	<div>
		{{Form::submit('submit')}}
	</div>


<h1>Upload Important Files</h1>
	<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>Title</th>
						<th>Upload Date</th>
						<th>Action</th>
					</thead>

					<tbody>

					@foreach($filedownload as $filedl)
						<tr>
							<td>{{$filedl->name}}</td>
							<td>{{$filedl->created_at}}</td>
							<td>
								<a href="/download/{{$filedl->id}}">
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