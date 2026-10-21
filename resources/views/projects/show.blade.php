@extends("layouts.projects")

@section("title", $project['name'])

@section("content")

    <h3>{{ $project['category'] }}</h3>
    <p>{{ $project['description'] }}</p>

    <a href="{{ route('projects.index') }}" class="btn btn-primary display-on-line">
        Back
    </a>


@endsection