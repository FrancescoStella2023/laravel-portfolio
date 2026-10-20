@extends("layouts.projects")

@section("title", $project['name'])

@section("content")

    <h3>{{ $project['category'] }}</h3>
    <p>{{ $project['description'] }}</p>



@endsection