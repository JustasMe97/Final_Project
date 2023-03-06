@extends('layouts.main')

@section('title', 'Naujo adreso pridėjimas')

@section('content')
    <h1>Kūrimas</h1>
    <span>Adreso kūrimo forma:</span>
    <form action="{{route('addresses.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('country') is-invalid @enderror"
                   name="country"
                   placeholder="Šalis.."
                   value="{{old('country')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('city') is-invalid @enderror"
                   name="city"
                   placeholder="Miestas.."
                   value="{{old('city')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('additional_info') is-invalid @enderror"
                   name="additional_info"
                   placeholder="Papildoma informacija.."
                   value="{{old('additional_info')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('user_id') is-invalid @enderror"
                   name="user_id"
                   placeholder="Vartotojo ID.."
                   value="{{old('user_id')}}">
        </div>
        <button type="submit" class="btn btn-primary">Pridėti</button>
    </form>
@endsection
