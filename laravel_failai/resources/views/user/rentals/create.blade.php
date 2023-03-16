@extends('layouts.main')

@section('title', 'Naujo automobilio pridėjimas')

@section('content')
    <div class="container col col-md-6">
    <h1 class="my-2 text-center">Automobilio pridėjimas</h1>
    <span><b>Automobilio kūrimo forma:</b></span>
    <form action="{{route('user.rentals.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Pavadinimas</label>
            <input type="text"
                   name="name"
                   id="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="brand">Automobilio markė</label>
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="brand"
                   id="brand"
                   placeholder="Markė.."
                   value="{{old('brand')}}">
        </div>
        <div class="form-group">
            <label for="model">Automobilio modelis</label>
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="model"
                   id="model"
                   placeholder="Modelis.."
                   value="{{old('model')}}">
        </div>
        <div class="form-group">
            <label for="power">Galia</label>
            <input type="text"
                   class="form-control @error('power') is-invalid @enderror"
                   name="power"
                   id="power"
                   placeholder="Galia.."
                   value="{{old('power')}}">
        </div>
        <div class="form-group">
            <label for="fuel_type_id">Kuro tipas</label>
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="fuel_type_id"
                   id="fuel_type_id"
                   placeholder="Kuro tipo ID.."
                   value="{{old('fuel_type_id')}}">
        </div>
        <div class="form-group">
            <label for="category_id">Kategorija</label>
            <input type="text"
                   class="form-control @error('category_id') is-invalid @enderror"
                   name="category_id"
                   id="category_id"
                   placeholder="Kategorijos ID.."
                   value="{{old('category_id')}}">
        </div>
        <div class="form-group">
            <label for="gearbox_id">Pavarų dežės tipas</label>
            <input type="text"
                   class="form-control @error('gearbox_id') is-invalid @enderror"
                   name="gearbox_id"
                   id="gearbox_id"
                   placeholder="Pavarų dėžės ID.."
                   value="{{old('gearbox_id')}}">
        </div>
        <div class="form-group">
            <input type="hidden"
                   class="form-control @error('user_id') is-invalid @enderror"
                   name="user_id"
                   id="user_id"
                   value="{{Auth::user()?->id}}">
        </div>
        <div class="form-group">
            <label for="price">Kaina dienai</label>
            <input type="text"
                   class="form-control @error('price') is-invalid @enderror"
                   name="price"
                   id="price"
                   placeholder="Kaina.."
                   value="{{old('price')}}">
        </div>
        <div class="form-group">
            <label for="year">Pagaminimo metai</label>
            <input type="text"
                   class="form-control @error('year') is-invalid @enderror"
                   name="year"
                   name="year"
                   placeholder="Pagaminimo metai.."
                   value="{{old('year')}}">
        </div>
        <div class="form-group">
            <label for="additional_info">Papildoma informacija</label>
            <input type="text"
                   class="form-control @error('additional_info') is-invalid @enderror"
                   name="additional_info"
                   id="additional_info"
                   placeholder="Papildoma informacija.."
                   value="{{old('additional_info')}}">
        </div>
        <div class="form-group">
            <label for="images"> Pasirinkite nuotrauką(-as)..</label>
            <input type="file" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Pridėti</button>
    </form>
    </div>
@endsection
