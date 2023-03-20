@extends('layouts.main')

@section('title', 'Nuomojami Automobiliai')

@section('content')
    <div class="container col col-md-6">
        <h1 class="my-2 text-center">Automobilio redagavimas</h1>
        <span><b>Automobilio redagavimo forma:</b></span>
    <form action="{{route('user.rentals.update', $rental->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Pavadinimas</label>
            <input type="text"
                   name="name"
                   id="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name')?? $rental->name}}">
        </div>
        <div class="form-group">
            <label for="brand">Automobilio markė</label>
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="brand"
                   id="brand"
                   placeholder="Markė.."
                   value="{{old('brand') ?? $rental->brand}}">
        </div>
        <div class="form-group">
            <label for="model">Automobilio modelis</label>
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="model"
                   id="model"
                   placeholder="Modelis.."
                   value="{{old('model') ?? $rental->model}}">
        </div>
        <div class="form-group">
            <label for="power">Galia</label>
            <input type="text"
                   class="form-control @error('power') is-invalid @enderror"
                   name="power"
                   id="power"
                   placeholder="Galia.."
                   value="{{old('power') ?? $rental->power}}">
        </div>
        <div class="form-group">
            <label for="fuel_type_id"> Kuro tipo ID</label>
            <input type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="fuel_type_id"
                   id="fuel_type_id"
                   placeholder="Kuro tipo ID.."
                   value="{{old('fuel_type_id') ?? $rental->fuel_type_id}}">
        </div>
        <div class="form-group">
            <label for="category_id">Kategorijos ID</label>
            <input type="text"
                   class="form-control @error('category_id') is-invalid @enderror"
                   name="category_id"
                   id="category_id"
                   placeholder="Kategorijos ID.."
                   value="{{old('category_id') ?? $rental->category_id}}">
        </div>
        <div class="form-group">
            <label for="gearbox_id"> Pavarų dėžės ID</label>
            <input type="text @error('gearbox_id') is-invalid @enderror"
                   class="form-control"
                   name="gearbox_id"
                   id="gearbox_id"
                   placeholder="Pavarų dėžės ID.."
                   value="{{old('gearbox_id') ?? $rental->gearbox_id}}">
        </div>
        <div class="form-group">
            <label for="price">Kaina dienai</label>
            <input type="text"
                   class="form-control @error('price') is-invalid @enderror"
                   name="price"
                   id="price"
                   placeholder="Kaina.."
                   value="{{old('price') ?? $rental->price}}">
        </div>
        <div class="form-group">
            <label for="year">Pagaminimo metai</label>
            <input type="text"
                   class="form-control @error('year') is-invalid @enderror"
                   name="year"
                   id="year"
                   placeholder="Pagaminimo metai.."
                   value="{{old('year') ?? $rental->year}}">
        </div>
        <div class="form-group">
            <label for="additional_info">Papildoma informacija</label>
            <input type="text"
                   class="form-control @error('additional_info') is-invalid @enderror"
                   name="additional_info"
                   id="additional_info"
                   placeholder="Papildoma informacija.."
                   value="{{old('additional_info') ?? $rental->additional_info}}">
        </div>
        <div class="form-group">
            <label for="images"> Pasirinkite nuotrauką(-as)..</label>
            <input type="file" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">{{__('Atnaujinti')}}</button>
    </form>

        <div class="row my-5">

            @foreach($images as $image)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card bg-light text-dark h-100">
                        <div class="m-2"><img class="img-fluid rounded" src="/img/{{$image->path}}" alt="rental"></div>
                        <div class="card-body pb-1">
                            <div class="text-center mx-1">{{$image->alt}}</div>
                            <hr class="hr"/>
                            <div class="d-flex justify-content-center">
                                <form action="{{route('image.delete', $image->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger ms-1 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                            <path fill-rule="evenodd"
                                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                        </svg>
                                        {{__('Pašalinti')}}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
