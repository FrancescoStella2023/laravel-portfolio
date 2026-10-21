@extends("layouts.projects")

@section("title", "Aggiungi un un nuovo progetto")

@section("content")
    <form action="{{ route("projects.store") }}" method="POST" class="m-2">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="name">Nome</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label" for="type">Tipo</label>
            <input class="form-control" type="text" id="type" name="type">
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>

        <div class="container m-2">
            <input class="btn btn-primary" type="submit" value="Salva">
            <a href="{{ route('projects.index') }}" class="btn btn-danger display-on-line">
                Annulla
            </a>
        </div>
    </form>
@endsection