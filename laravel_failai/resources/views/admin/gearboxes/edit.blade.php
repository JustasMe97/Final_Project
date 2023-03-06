@extends('layouts.main')

@section('title', 'Pavarų dėžės tipai')

@section('content')
    <h1>Redagavimas</h1>
    <span>Pavarų dėžės redagavimo forma:</span>
    <form action="{{route('gearbox.update', $gearbox->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name') ?? $gearbox->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Atnaujinti</button>
    </form>
@endsection
