@extends('layouts.main')

@section('title', 'Adreso redagavimas')

@section('content')
    <h1>Redagavimas</h1>
    <span>Adreso redagavimo forma:</span>
    <form action="{{route('addresses.update', $address->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name') ?? $address->id}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('country') is-invalid @enderror"
                   name="country"
                   placeholder="Šalis.."
                   value="{{old('country') ?? $address->country}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('city') is-invalid @enderror"
                   name="city"
                   placeholder="Miestas.."
                   value="{{old('city') ?? $address->city}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('additional_info') is-invalid @enderror"
                   name="additional_info"
                   placeholder="Papildoma informacija.."
                   value="{{old('additional_info') ?? $address->additional_info}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('user_id') is-invalid @enderror"
                   name="user_id"
                   placeholder="Vartotojo ID.."
                   value="{{old('user_id') ?? $address->user_id}}">
        </div>
        <button type="submit" class="btn btn-primary">Atnaujinti</button>
    </form>
@endsection
