@extends('layouts.app')

@section('content')
		<h1>Photos from Database</h1>
	<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>Title</th>
						<th>Upload Date</th>
						<th>Action</th>
					</thead>

					<tbody>

					@foreach($downloads as $downl)
						<tr>
							<td>{{$downl->title}}</td>
							<td>{{$downl->created_at}}</td>
							<td>
							<a href="/download/{{$downl->id}}">
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

{{-- <!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  		<style type="text/css">
  			.wrapper{
  				margin: 0 auto;
  				width: 75%;
  				margin-top: 10px;
  			}
  		</style>
</head>
<body>
	<div class="wrapper">
		<section class="panel panel-primary">
			<div class="panel-heading">
				Downloadable Files from Database
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>Title</th>
						<th>Upload Date</th>
						<th>Action</th>
					</thead>

					<tbody>

					@foreach($downloads as $downl)
						<tr>
							<td>{{$downl->title}}</td>
							<td>{{$downl->created_at}}</td>
							<td>
							<a href="/download/{{$downl->id}}">
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
		</section>
	</div>
</body>
</html> --}}