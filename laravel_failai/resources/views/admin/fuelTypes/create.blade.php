@extends('layouts.main')

@section('title', 'Naujos pavarų dėžės pridėjimas')

@section('content')
    <h1>Kūrimas</h1>
    <span>Pavarų dėžės kūrimo forma:</span>
    <form action="{{route('gearboxes.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name')}}">
        </div>
        <button type="submit" class="btn btn-primary">Pridėti</button>
    </form>
@endsection
