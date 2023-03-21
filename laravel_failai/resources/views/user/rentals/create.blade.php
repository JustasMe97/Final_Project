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
            <select class="form-select" name="fuel_type_id" id="fuel_type_id">
                <option selected style="background-color: #7A918D;">Pasirinkite kuro tipą:
                </option>
                @foreach($fuelTypes as $fuelType)
                    <option class="green"
                        value="{{$fuelType->id}}">{{$fuelType->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="category_id">Kategorija</label>
            <select class="form-select" name="category_id" id="category_id">
                <option selected style="background-color: #7A918D;">Pasirinkite automobilio kategoriją:
                </option>
                @foreach($categories as $category)
                    <option class="green"
                            value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="gearbox_id">Pavarų dežės tipas</label>
            <select class="form-select" name="gearbox_id" id="gearbox_id">
                <option selected style="background-color: #7A918D;">Pasirinkite pavarų dėžės tipą:
                </option>
                @foreach($gearboxes as $gearbox)
                    <option class="green"
                        value="{{$gearbox->id}}">{{$gearbox->name}}</option>
                @endforeach
            </select>
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
                   id="year"
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
        <button type="submit" class="btn text-light greentodarkgreentogreen">Pridėti</button>
    </form>
    </div>
@endsection
