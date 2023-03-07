@extends('layouts.main')

@section('title', 'Nuomojami Automobiliai')

@section('content')
    <h1>Redagavimas</h1>
    <span>Automobilio redagavimo forma:</span>
    <form action="{{route('rentals.update', $rental->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text @error('name') is-invalid @enderror"
                   class="form-control"
                   name="name"
                   placeholder="Pavadinimas.."
                   value="{{old('name') ?? $rental->name}}">
        </div>
        <div class="form-group">
            <input type="text @error('brand') is-invalid @enderror"
                   class="form-control"
                   name="brand"
                   placeholder="Markė.."
                   value="{{old('brand') ?? $rental->brand}}">
        </div>
        <div class="form-group">
            <input type="text @error('model') is-invalid @enderror"
                   class="form-control"
                   name="model"
                   placeholder="Modelis.."
                   value="{{old('model') ?? $rental->model}}">
        </div>
        <div class="form-group">
            <input type="text @error('fuel_type_id') is-invalid @enderror"
                   class="form-control"
                   name="fuel_type_id"
                   placeholder="Kuro tipo ID.."
                   value="{{old('fuel_type_id') ?? $rental->fuel_type_id}}">
        </div>
        <div class="form-group">
            <input type="text @error('category_id') is-invalid @enderror"
                   class="form-control"
                   name="category_id"
                   placeholder="Kategorijos ID.."
                   value="{{old('category_id') ?? $rental->category_id}}">
        </div>
        <div class="form-group">
            <input type="text @error('gearbox_id') is-invalid @enderror"
                   class="form-control"
                   name="gearbox_id"
                   placeholder="Pavarų dėžės ID.."
                   value="{{old('gearbox_id') ?? $rental->gearbox_id}}">
        </div>
        <div class="form-group">
            <input type="text @error('price') is-invalid @enderror"
                   class="form-control"
                   name="price"
                   placeholder="Kaina.."
                   value="{{old('price') ?? $rental->price}}">
        </div>
        <div class="form-group">
            <input type="text @error('additional_info') is-invalid @enderror"
                   class="form-control"
                   name="additional_info"
                   placeholder="Papildoma informacija.."
                   value="{{old('additional_info') ?? $rental->additional_info}}">
        </div>
        <div class="form-group">
            <label for="images"> Pasirinkite nuotrauką(-as)..</label>
            <input type="file" id="images" name="images[]" multiple class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Atnaujinti</button>
    </form>
@endsection
