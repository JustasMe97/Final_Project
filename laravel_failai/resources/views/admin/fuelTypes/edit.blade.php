@extends('layouts.main')

@section('title', 'Kuro tipai')

@section('content')
    <h1>Redagavimas</h1>
    <span>Kuro tipo redagavimo forma:</span>
    <form action="{{route('fuelTypes.update', $fuelType->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name') ?? $fuelType->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Atnaujinti</button>
    </form>
@endsection
