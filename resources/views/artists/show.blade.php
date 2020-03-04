@extends('artists.layout')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<div class="pull-left">
				<h3> Show Artist </h3>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('artists.index') }}"> Back to Artist List </a>
			</div>
		</div>
	</div>

	<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<strong>Name:</strong>
					{{ $artist->name }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<strong>Description:</strong>
					{{ $artist->description }}
				</div>
			</div>
	</div>
@endsection