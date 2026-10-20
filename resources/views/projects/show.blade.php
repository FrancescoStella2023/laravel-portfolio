@extends("layouts.projects")

@section("title", "Post")

@section("content")

    <h1>{{ $project['name'] }}</h1>
    <h3>{{ $project['category'] }}</h3>
    <p>{{ $project['description'] }}</p>



@endsection