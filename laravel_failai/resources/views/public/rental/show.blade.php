@extends('layouts.main')
@section('content')
    {{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
    {{--    <ol class="carousel-indicators">--}}
    {{--        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
    {{--        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
    {{--        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
    {{--    </ol>--}}
    {{--    <div class="carousel-inner">--}}
    {{--        @foreach($images as $image)--}}
    {{--        <div class="carousel-item active">--}}
    {{--            <img class="d-block w-100" src="{{"/img/".$image->path}}" alt="First slide">--}}
    {{--        </div>--}}
    {{--        @endforeach--}}
    {{--    </div>--}}
    {{--    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
    {{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--        <span class="sr-only">Previous</span>--}}
    {{--    </a>--}}
    {{--    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
    {{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--        <span class="sr-only">Next</span>--}}
    {{--    </a>--}}
    {{--</div>--}}


    {{--<div id="slider" class="carousel slide" data-bs-ride="carousel">--}}
    {{--    <div class="carousel-indicators">--}}
    {{--        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
    {{--        <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
    {{--        <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
    {{--    </div>--}}
    {{--    <div class="carousel-inner">--}}
    {{--        @foreach($images as $image)--}}
    {{--        <div class="carousel-item active">--}}
    {{--            <img src="{{"/img/".$image->path}}" class="d-block w-100" alt="{{$image->alt}}">--}}
    {{--        </div>--}}
    {{--        @endforeach--}}
    {{--    </div>--}}
    {{--    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">--}}
    {{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--        <span class="visually-hidden">Previous</span>--}}
    {{--    </button>--}}
    {{--    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">--}}
    {{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--        <span class="visually-hidden">Next</span>--}}
    {{--    </button>--}}
    {{--</div>--}}
    <div class="container w-50 d-flex flex-column justify-content-center">
        <div class="h1 my-5 row d-flex justify-content-center">{{$rental->name}}</div>
        <div class="row mb-5">
            <div class="col-12 col-md">
                <div class="d-flex justify-content-center row fw-bold text-center"> Pagaminimo metai:</div>
                <div class="d-flex justify-content-center row text-center">2020</div>
            </div>
            <div class="col-12 col-md">
                <div class="d-flex justify-content-center row fw-bold text-center">Kaina dienai:</div>
                <div class="d-flex justify-content-center row">
                    <div class="d-flex justify-content-center text-center text-light text-wrap rounded fw-5" style="width: 6rem; background-color: #3E5142;">{{$rental->price}} €</div>
                </div>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide my-2 row" data-bs-ride="carousel">
            <div class="carousel-inner">

                        @foreach($images as $image)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img class="d-block w-100 rounded" src="{{"/img/".$image->path}}" alt="{{$image->alt}}">
                        </div>
                        @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="h3 my-2 row">Techniniai duomenys: </div>
        <hr class="hr"/>
        <div class="my-2 row">
            <div class="col-12 col-md">Markė/modelis: </div>
            <div class="col fw-bold">{{$rental->brand}} {{$rental->model}}</div>
        </div>
        <div class="my-2 row">
            <div class="col-12 col-md">Kuro tipas: </div>
            <div class="col fw-bold">{{$rental->fuelType->name}}</div>
        </div>
        <div class="my-2 row">
            <div class="col-12 col-md">Pavarų dėžės tipas: </div>
            <div class="col fw-bold">{{$rental->gearbox->name}} </div>
        </div>
        <div class="my-2 row">
            <div class="col-12 col-md">Kategorija: </div>
            <div class="col fw-bold">{{$rental->category->name}}</div>
        </div>
        <div class="my-2 row">
            <div class="col-12 col-md">Papildoma informacija: </div>
            <div class="col fw-bold">{{$rental->additional_info}}</div>
        </div>
    </div>

@endsection
