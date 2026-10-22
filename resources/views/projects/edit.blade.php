@extends("layouts.projects")

@section("title", "Modifica il progetto")

@section("content")
    <form action="{{ route("projects.update", $project) }}" method="POST" class="m-2">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label" for="name">Nome</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ $project->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label" for="category">Categoria</label>
            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @selected($project->type_id == $type->id)>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>

        </div>

        <div class=" container m-2">
            <input class="btn btn-outline-primary" type="submit" value="Salva">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-danger display-on-line">
                Annulla
            </a>
        </div>
    </form>
@endsection