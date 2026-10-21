@extends("layouts.projects")

@section("title", "Tutti i post")

@section("content")

    <div class="container-fluid d-flex justify-content-end">
        <a href="{{ route("projects.create") }}" class="btn btn-outline-success display-on-line">Aggiungi progetto</a>
    </div>


    <table class="my-4">
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
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->category }}</td>
                    <td>
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-outline-primary display-on-line">
                            Dettagli
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection