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
    <div class="container col col-lg-8 col-xl-6 mx-auto d-flex flex-column justify-content-center">
        <div class="h1 my-5 row d-flex justify-content-center">{{$rental->name}}</div>
        <div class="row mb-5">
            <div class="col-12 col-md">
                <div class="d-flex justify-content-center row fw-bold text-center"> Pagaminimo metai:</div>
                <div class="d-flex justify-content-center row text-center">{{$rental->year}}</div>
            </div>
            <div class="col-12 col-md">
                <div class="d-flex justify-content-center row fw-bold text-center">Kaina dienai:</div>
                <div class="d-flex justify-content-center row">
                    <div class="d-flex justify-content-center text-center text-light text-wrap rounded fw-5"
                         style="width: 6rem; background-color: #3E5142;">{{$rental->price}} ???
                    </div>
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
        <div class="h3 my-2 row">Techniniai duomenys:</div>
        <hr class="hr"/>
        <div class="my-2 row">
            <div class="col-12 col-md">
                <img class="rounded me-1" src="/img/car-top-view-icon.svg" alt="price"
                     style="height: 30px; width: 30px;">
                Mark??/modelis:
            </div>
            <div class="col fw-bold">{{$rental->brand}} {{$rental->model}}</div>
        </div>
        <div class="my-2 row">
            <div class="col-12 col-md">
                <img class="rounded me-1" src="/img/gas-station-icon.svg" alt="fuel"
                     style="height: 30px; width: 30px;">
                Kuro tipas:
            </div>
            <div class="col fw-bold">{{$rental->fuelType->name}}</div>
        </div>
        <div class="my-2 row">
            <div class="col-12 col-md">
                <img class="rounded me-1" src="/img/manual-transmission-icon.svg" alt="gearbox"
                     style="height: 30px; width: 30px;">
                Pavar?? d??????s tipas:
            </div>
            <div class="col fw-bold">{{$rental->gearbox->name}} </div>
        </div>
        <div class="my-2 row">
            <div class="col-12 col-md">
                <img class="rounded me-1" src="/img/list-view-icon.svg" alt="price"
                     style="height: 30px; width: 30px;">
                Kategorija:
            </div>
            <div class="col fw-bold">{{$rental->category->name}}</div>
        </div>
        <div class="my-2 row">
            <div class="col-12 col-md">
                <img class="rounded me-1" src="/img/engine-motor-icon.svg" alt="price"
                     style="height: 30px; width: 30px;">
                Galia(kW):
            </div>
            <div class="col fw-bold">{{$rental->power}}</div>
        </div>
        <div class="my-2 row">
            <div class="col-12 col-md">
                <img class="rounded me-1" src="/img/list-view-icon.svg" alt="price"
                     style="height: 30px; width: 30px;">
                Kategorija:
            </div>
            <div class="col fw-bold">{{$rental->category->name}}</div>
        </div>

        <div class="my-2 row">
            <div class="col-12 col-md">
                <img class="rounded me-1" src="/img/more-info-icon.svg" alt="price"
                     style="height: 30px; width: 30px;">
                Papildoma informacija:
            </div>
            <div class="col fw-bold">{{$rental->additional_info}}</div>
        </div>
        <div class="my-2 row">
            <div class="col-12 d-flex justify-content-center fs-5 fw-bold my-3">
                <b>Rezervuoti <span style="color: #7A918D;">automobil??</span></b>
            </div>
        </div>

        <form action="{{route('reservation.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="my-2 row">
                <div class="col-12 col-md-6">
                    <label for="startDate">Prad??ios data:</label>
                </div>
                <div class="col col-md-6">
                    <input id="startDate" name="startDate" class="form-control" type="date"/>
                </div>
            </div>
            <div class="my-2 row">
                <div class="col-12 col-md-6">
                    <label for="endDate">Pabaigos data:</label>
                </div>
                <div class="col col-md-6">
                    <input id="startDate" name="endDate" class="form-control" type="date"/>
                </div>
            </div>
            <div class="my-2 row d-flex flex-column">
                <div class="col-12 d-flex justify-content-start fw-bold my-2">
                    Pasirinkite priedus:
                </div>
                <div class="col-12 d-flex justify-content-start">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" name="childSeat" id="childseat">
                        <label class="form-check-label" for="childseat">
                            Vaiki??ka k??dut?? <span class="rounded mx-1 px-1 align-middle" style="color: white; background-color: #5a6268">nemokama</span>
                        </label>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-start">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" name="secondDriver" id="seconddriver">
                        <label class="form-check-label" for="seconddriver">
                            Antro vairuotojo galimyb?? <span class="rounded mx-1 px-1 align-middle" style="color: white; background-color: #5a6268">nemokama</span>
                        </label>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-start">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" name="gps" id="gps">
                        <label class="form-check-label" for="gps">
                            GPS navigacija <span class="rounded mx-1 px-1 align-middle" style="color: white; background-color: #5a6268">nemokama</span>
                        </label>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-start">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" name="wifi" id="wifi">
                        <label class="form-check-label" for="wifi">
                            Neribotas Wi-Fi internetas <span class="rounded mx-1 px-1 align-middle" style="color: white; background-color: #5a6268">3???/dienai</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="my-2 row">
                <div class="col-12 col-md d-flex justify-content-center">
                    <button type="submit" class="btn text-light fs-5 my-2" style="background-color: #3E5142;">Pateikti rezervacijos u??klaus??
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
