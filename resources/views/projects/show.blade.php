@extends("layouts.projects")

@section("title", $project->name)

@section("content")

    <div class="container-fluid d-flex justify-content-center my-2 gap-4">
        <a href="{{ route('projects.edit', $project) }}" class="btn btn-outline-warning">
            Modifica Progetto
        </a>
        <!-- Corretto: data-bs-toggle="modal" -->
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina Progetto
        </button>
    </div>

    <div class="container-fluid bg-dark text-white rounded p-4 my-3">
        <h3 class="fw-b">{{ $project->type->name }}</h3>
        <p>{{ $project->description }}</p>
    </div>


    <div class="container-fluid d-flex justify-content-center">
        <a href="{{ route('projects.index') }}" class="btn btn-outline-primary">
            Back
        </a>
    </div>


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