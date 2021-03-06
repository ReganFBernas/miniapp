@extends('artists.layout')

@section('content')
    <div class= "row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Add New Artists</h3>
            </div>
                <div class="pull-right">
                <a class="btn btn-success" href="{{ route('artists.index') }}"> Back to Artists</a>
                </div>
        </div>
    </div>

    @if($errors->any())
		<div class="alert alert-danger">
			<strong>Oopps! </strong> Something went wrong.
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif

    <form action="{{ route('artists.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="description" placeholder="Description" class="form-control"></textarea>
                </div>
            </div>

            <div class="col-lg-12">

                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>    

@endsection