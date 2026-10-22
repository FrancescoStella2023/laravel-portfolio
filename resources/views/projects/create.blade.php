@extends("layouts.projects")

@section("title", "Aggiungi un nuovo progetto")

@section("content")
    <form action="{{ route("projects.store") }}" method="POST" class="m-2">
        @csrf

        <div class="form-control mb-3">
            <label class="form-label fw-bold" for="name">Nome</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="form-control mb-3">
            <label class="form-label fw-bold" for="type">Tipo</label>
            <select class="form-select" name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-control mb-3">
            <label class="form-label fw-bold" for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>
        <div class="form-control mb-3 d-flex flex-wrap">
            <label class="form-label fw-bold me-2" for="tecnologie">Tecnologie:</label>
            @foreach ($technologies as $technology)
                <div class="me-5">
                    <input type="checkbox" name="technologies[]" value="{{$technology->id}}"
                        id="technology-{{$technology->id}}">
                    <label class="form-label" for="technology-{{$technology->id}}">{{$technology->name}}</label>
                </div>
            @endforeach
        </div>

        <div class="form-control m-2">
            <input class="btn btn-primary" type="submit" value="Salva">
            <a href="{{ route('projects.index') }}" class="btn btn-danger display-on-line">
                Annulla
            </a>
        </div>
    </form>
@endsection