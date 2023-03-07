@extends('layouts.main')

@section('title', 'Naujo automobilio pridėjimas')

@section('content')
    <h1>Kūrimas</h1>
    <span>Automobilio kūrimo forma:</span>
    <form action="{{route('rentals.store')}}" method="post" enctype="multipart/form-data">
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
                   class="form-control @error('name') is-invalid @enderror"
                   name="brand"
                   placeholder="Markė.."
                   value="{{old('brand')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="model"
                   placeholder="Modelis.."
                   value="{{old('model')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="fuel_type_id"
                   placeholder="Kuro tipo ID.."
                   value="{{old('fuel_type_id')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('category_id') is-invalid @enderror"
                   name="category_id"
                   placeholder="Kategorijos ID.."
                   value="{{old('category_id')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('gearbox_id') is-invalid @enderror"
                   name="gearbox_id"
                   placeholder="Pavarų dėžės ID.."
                   value="{{old('gearbox_id')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('price') is-invalid @enderror"
                   name="price"
                   placeholder="Kaina.."
                   value="{{old('price')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('additional_info') is-invalid @enderror"
                   name="additional_info"
                   placeholder="Papildoma informacija.."
                   value="{{old('additional_info')}}">
        </div>
        <div class="form-group">
            <label for="images"> Pasirinkite nuotrauką(-as)..</label>
            <input type="file" id="images" name="images" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Pridėti</button>
    </form>
@endsection
