@extends("layouts.projects")

@section("title", "Modifica il progetto")

@section("content")
    <form action="{{ route("projects.update", $project) }}" method="POST" class="m-2">
        @csrf
        @method('PUT')

        <div class="form-control mb-3">
            <label class="form-label" for="name">Nome</label>
            <input class="form-control" type="text" id="name" name="name" value="{{ $project->name }}">
        </div>
        <div class="form-control mb-3">
            <label class="form-label" for="category">Categoria</label>
            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" @selected($project->type_id == $type->id)>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-control mb-3">
            <label class="form-label" for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>

        </div>
        <div class="form-control mb-3 d-flex flex-wrap">
            <label class="form-label fw-bold me-2" for="tecnologie">Tecnologie:</label>
            @foreach ($technologies as $technology)
                <div class="me-5">
                    <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}"
                        {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                    <label class="form-label" for="technology-{{$technology->id}}">{{$technology->name}}</label>
                </div>
            @endforeach
        </div>

        <div class="form-controlr m-2">
            <input class="btn btn-outline-primary" type="submit" value="Salva">
            <a href="{{ route('projects.index') }}" class="btn btn-outline-danger display-on-line">
                Annulla
            </a>
        </div>
    </form>
@endsection