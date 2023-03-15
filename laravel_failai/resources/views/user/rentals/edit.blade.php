@extends('layouts.main')

@section('title', 'Nuomojami Automobiliai')

@section('content')
    <h1>Redagavimas</h1>
    <span>Automobilio redagavimo forma:</span>
    <form action="{{route('user.rentals.update', $rental->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name') ?? $rental->name}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="brand"
                   placeholder="Markė.."
                   value="{{old('brand') ?? $rental->brand}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="model"
                   placeholder="Modelis.."
                   value="{{old('model') ?? $rental->model}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('power') is-invalid @enderror"
                   name="power"
                   placeholder="Galia.."
                   value="{{old('power') ?? $rental->power}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="fuel_type_id"
                   placeholder="Kuro tipo ID.."
                   value="{{old('fuel_type_id') ?? $rental->fuel_type_id}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('category_id') is-invalid @enderror"
                   name="category_id"
                   placeholder="Kategorijos ID.."
                   value="{{old('category_id') ?? $rental->category_id}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('gearbox_id') is-invalid @enderror"
                   name="gearbox_id"
                   placeholder="Pavarų dėžės ID.."
                   value="{{old('gearbox_id') ?? $rental->gearbox_id}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('price') is-invalid @enderror"
                   name="price"
                   placeholder="Kaina.."
                   value="{{old('price') ?? $rental->price}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('year') is-invalid @enderror"
                   name="year"
                   placeholder="Pagaminimo metai.."
                   value="{{old('year') ?? $rental->year}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('additional_info') is-invalid @enderror"
                   name="additional_info"
                   placeholder="Papildoma informacija.."
                   value="{{old('additional_info') ?? $rental->additional_info}}">
        </div>
        <div class="form-group">
            <label for="images"> Pasirinkite nuotrauką(-as)..</label>
            <input type="file" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Atnaujinti</button>
    </form>
@endsection
