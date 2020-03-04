@extends('artists.layout')

@section('content')
    <div class= "row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Artist Compilation</h3>
               
            </div>
                <div class="pull-right">
                <a class="btn btn-success" href="{{ route('artists.create') }}"> Create New Artists </a>
                </div>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p> {{ $message }} </p>
        </div>
    @endif
    
    <br>
    <table class="table table-bordered">
        <tr>
            <th> ID </th>
            <th> Name </th>
            <th> Description </th>
            <th> Action </th>
        </tr>
        @foreach($artists as $key => $artist)
            <tr>
                <td> {{ ++$i }} </td>
                <td> {{ $artist->name }} </td>
                <td> {{ $artist->description }} </td>
                <td> 
                    <form action="{{ route('artists.destroy', $artist->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('artists.show', $artist->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('artists.edit', $artist->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection