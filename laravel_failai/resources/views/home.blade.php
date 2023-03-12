@extends('layouts.main')
@section('content')
    <section class="text-center p-5 text-md-left">
        <div class="container">
            <div class="d-md-flex align-items-center">
                <div class="">
                    <div class="h1 text-dark my-3"> Išsinuomok automobilį <span style="color: #7A918D;">jau dabar!</span> Paprasta, <span style="color: #7A918D;">greita,</span> patogu.</div>
                </div>
                <img class="img-fluid w-50 my-3 rounded-circle" src="/img/carrent.webp" alt="rent">
            </div>
        </div>
    </section>

    <section>
        <div class="container rounded py-3" style="background-color: #7A918D;">
        <form action="{{route('category.show')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mx-2 my-2 text-light fs-4 fw-bold d-flex justify-content-center"> Išsirinkite sau tinkamiausią automobilį: </div>
            <div class="row">
                <div class="col-12 col-lg-10 my-2 d-flex justify-content-center">
                    <select class="form-select" name="category_id">
                        <option selected style="background-color: #7A918D;">Pasirinkite automobilio kategoriją: </option>
                        @foreach($categories as $category)
                            <option style="background-color: #7A918D;" value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col col-lg-2 my-2 d-flex justify-content-center"><button type="submit" class="btn text-light fs-5" style="background-color: #3E5142;">Ieškoti</button></div>
            </div>

        </form>
        </div>
    </section>





    <section class="p-5">
        <div class="container">
            <div class="row text-center gy-4">
                <div class="col-12 col-lg">
                    <div class="card text-light my-2 my-lg-0 h-100" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <img class="img-fluid my-3 rounded-circle" src="/img/choose.jpg" alt="choose">
                            <h3 class="card-title mb-3">Išsirinkite automobilį.</h3>
                            <p class="card-text">Išsirinkite automobilį naudodami filtrus arba iš katalogo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="card text-light my-2 my-lg-0 h-100" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <img class="img-fluid my-3 rounded-circle" src="/img/book.svg" alt="choose">
                            <h3 class="card-title mb-3">Rezervuokite norimą automobilį</h3>
                            <p class="card-text">Rezervuokite automobilį ir mes su jumis susisieksime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="card text-light my-2 my-lg-0 h-100" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <img class="img-fluid my-3 rounded-circle" src="/img/keys.png" alt="choose">
                            <h3 class="card-title mb-3">Mėgaukitės automobiliu.</h3>
                            <p class="card-text">Štai ir viskas, automobilis jūsų rankose, laikas mėgautis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container row rounded py-3 d-flex justify-content-center align-items-center" style="background-color: #7A918D;">
            <div class="col-12 mx-2 my-2 text-light fs-4 fw-bold d-flex justify-content-center"> Turi laisvą automobilį ir norėtum jį įdarbinti? Nieko nelauk ir išnuomok savo automobilį! </div>
            @auth
                <div class="col-12 d-flex justify-content-center my-3"><a class="btn btn text-light fs-5" style="background-color: #48bb78" href="{{route('user.rentals.create')}}">Pridėk savo automobilį</a></div>
            @endauth
            @guest
                <div class="my-3 row text-center">
                    <div class="col-12"><a class="btn btn text-light fs-5" style="background-color: #48bb78" href="{{route('login')}}">Prisijunk</a></div>
                    <div class="col-12 text-light my-2">Dar neturi paskyros?</div>
                    <div class="col-12"><a class="btn btn text-light fs-5" style="background-color: #48bb78" href="{{route('register')}}">Registruokis</a></div></div>
            @endguest
        </div>
    </section>


@endsection

