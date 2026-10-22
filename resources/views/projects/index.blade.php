@extends("layouts.projects")

@section("title", "Tutti i post")

@section("content")

    <div class="container-fluid d-flex justify-content-center my-5">
        <a href="{{ route("projects.create") }}" class="btn btn-outline-success btn-lg">Aggiungi progetto</a>
    </div>


    <table class="table table-hover align-middle my-5">
        <thead class="table-dark border-bottom">
            <tr>
                <th class="py-3">Titolo</th>
                <th class="py-3">Descrizion</th>
                <th class="py-3">Categoria</th>
                <th class="py-3"></th>
                <th class="py-3"></th>
                <th class="py-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td class="py-3">{{ $project->name }}</td>
                    <td class="py-3">{{ $project->description }}</td>
                    <td class="py-3">{{ $project->type->name }}</td>
                    <td class="py-3">
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-outline-primary display-on-line">
                            Dettagli
                        </a>
                    </td>
                    <td class="py-3">
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-outline-warning display-on-line">
                            Modifica

                    </td>
                    <td class="py-3">
                        <!-- Corretto: data-bs-toggle="modal" -->
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Elimina
                        </button>
                    </td>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-dark"> <!-- text-dark serve se lo sfondo della pagina è scuro -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Conferma eliminazione elemento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Un proggetto cancellato non puuo essere recuperato. Sicuro di voler <strong>eliminare
                            definitivamente</strong> questo elemento?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-danger" value="ELIMINA DEFINITIVAMENTE">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection