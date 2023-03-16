@extends('layouts.main')
@section('content')
    <div class="text-dark my-5 d-flex justify-content-center"><h1><b>Kategorijos - <span
                    style="color: #7A918D;">{{$category->name}}</span> - automobiliai</b></h1></div>

    <div class="row gy-4 my-3">

        @foreach($rentals as $rental)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card bg-light text-dark h-100">
                    <div class="m-2"><img class="img-fluid rounded" src="/img/{{$rental->image}}" alt="rental"></div>
                    <div class="card-body position-relative pb-5">
                        <h3 class="card-title text-center mx-1">{{$rental->name}}</h3>
                        <hr class="hr"/>
                        <div class="card-content">

                            <div class="row">
                                <div class="col d-flex justify-content-start align-items-start">
                                    <img class="rounded" src="/img/car-top-view-icon.svg" alt="price"
                                         style="height: 30px; width: 30px;">
                                    <p class="d-flex justify-content-start ms-2"> Markė:</p>
                                </div>
                                <div class="col">
                                    <p class="d-flex justify-content-end fw-bold">{{$rental->brand}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col d-flex justify-content-start align-items-start">
                                    <img class="rounded" src="/img/car-document-icon.svg" alt="price"
                                         style="height: 30px; width: 30px;">
                                    <p class="d-flex justify-content-start ms-2">Modelis:</p>
                                </div>
                                <div class="col">
                                    <p class="d-flex justify-content-end fw-bold">{{$rental->model}}</p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col d-flex justify-content-start align-items-start">
                                    <img class="rounded" src="/img/list-view-icon.svg" alt="price"
                                         style="height: 30px; width: 30px;">
                                    <p class="d-flex justify-content-start ms-2">Kategorija:</p>
                                </div>
                                <div class="col">
                                    <p class="d-flex justify-content-end fw-bold">{{$rental->category->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start align-items-start">
                                    <img class="rounded" src="/img/price-tag-euro-icon.svg" alt="price"
                                         style="height: 30px; width: 30px;">
                                    <p class="d-flex justify-content-start ms-2">Kaina:</p>
                                </div>
                                <div class="col">
                                    <p class="d-flex justify-content-end fw-bold">{{$rental->price}}</p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col d-flex justify-content-start align-items-start">
                                    <img class="rounded" src="/img/manual-transmission-icon.svg" alt="gearbox"
                                         style="height: 30px; width: 30px;">
                                    <p class="d-flex justify-content-start ms-2">Pavarų dėžė:</p>
                                </div>
                                <div class="col">
                                    <p class="d-flex justify-content-end fw-bold"> {{$rental->gearbox->name}}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col d-flex justify-content-start align-items-start">
                                    <img class="rounded" src="/img/gas-station-icon.svg" alt="fuel"
                                         style="height: 30px; width: 30px;">
                                    <p class="d-flex justify-content-start ms-2">Kuro tipas:</p>
                                </div>
                                <div class="col">
                                    <p class="d-flex justify-content-end fw-bold">{{$rental->fuelType->name}}</p>
                                </div>
                            </div>


                        </div>
                        <div class="d-flex justify-content-center position-absolute bottom-0 start-50 translate-middle">
                            <a role="button" class="btn text-light ms-1 me-1 greentodarkgreen"
                               href="{{route('rental.show', $rental->id)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                </svg>
                                Peržiūrėti..
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
