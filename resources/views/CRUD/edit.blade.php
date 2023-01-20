@extends('layouts.app')

@section('main')
<form method="POST" class="w-75 m-auto my-3" action="{{ route('comics.update', $comicTD->id) }}">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input name="title" type="text" class="form-control" value="{{$comicTD->title}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" class="form-control">
            {{$comicTD->description}}
        </textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Immagine</label>
        <input name="thumb" type="text" class="form-control" value="{{$comicTD->thumb}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input name="price" type="text" class="form-control" value="{{$comicTD->price}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Serie</label>
        <input name="series" type="text" class="form-control" value="{{$comicTD->series}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Data di uscita</label>
        <input name="sale_date" type="text" class="form-control" value="{{$comicTD->sale_date}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input name="type" type="text" class="form-control" value="{{$comicTD->type}}">
    </div>

    <button type="submit" class="btn btn-primary">Add changes</button>

</form>
@endsection
