@extends('layouts/main')

@section('content')

<div class="row">

    @foreach($movies as $movie)
    <div class="col-4 p-3 border">
        {{$movie->title}} ({{$movie->original_title}})
    </div>
    @endforeach
</div>



@endsection