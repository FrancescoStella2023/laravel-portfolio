@extends("layouts.projects")

@section("title", "Tutti i post")

@section("content")

    <table class="m-4">
        <thead class="border-bottom">
            <tr>
                <th>Titolo</th>
                <th>Descrizion</th>
                <th>Categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->category }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary display-on-line">
                            Dettagli
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection