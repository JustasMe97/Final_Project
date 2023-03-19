@extends('layouts.main')
@section('content')
    <section class="text-center p-5 text-md-left">
        <div class="container">
            <div class="d-md-flex align-items-center">
                <div class="">
                    <div class="h1 text-dark my-3"> Išsinuomok automobilį <span
                            style="color: #7A918D;">jau dabar!</span> Paprasta, <span
                            style="color: #7A918D;">greita,</span> patogu.
                    </div>
                </div>
                <img class="img-fluid w-50 my-3 rounded-circle" src="/img/carrent.webp" alt="rent">
            </div>
        </div>
    </section>

    <section>
        <div class="container rounded py-3" style="background-color: #7A918D;">
            <form action="{{route('category.show')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mx-2 my-2 text-light fs-4 fw-bold d-flex justify-content-center"> Išsirinkite sau
                    tinkamiausią automobilį:
                </div>
                <div class="row">
                    <div class="col-12 col-lg-10 my-2 d-flex justify-content-center">
                        <select class="form-select" name="category_id">
                            <option selected style="background-color: #7A918D;">Pasirinkite automobilio kategoriją:
                            </option>
                            @foreach($categories as $category)
                                <option style="background-color: #7A918D;"
                                        value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col col-lg-2 my-2 d-flex justify-content-center">
                        <button type="submit" class="btn text-light fs-5" style="background-color: #3E5142;">Ieškoti
                        </button>
                    </div>

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
                            <div class="card-title mb-3 fs-4 fw-bold">Išsirinkite automobilį.</div>
                            <p class="card-text">Išsirinkite automobilį naudodami filtrus arba iš katalogo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="card text-light my-2 my-lg-0 h-100" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <img class="img-fluid my-3 rounded-circle" src="/img/book.svg" alt="choose">
                            <div class="card-title mb-3 fs-4 fw-bold">Rezervuokite norimą automobilį</div>
                            <p class="card-text">Rezervuokite automobilį ir mes su jumis susisieksime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="card text-light my-2 my-lg-0 h-100" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <img class="img-fluid my-3 rounded-circle" src="/img/keys.png" alt="choose">
                            <div class="card-title mb-3 fs-4 fw-bold">Mėgaukitės automobiliu.</div>
                            <p class="card-text">Štai ir viskas, automobilis jūsų rankose, laikas mėgautis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container rounded py-3 d-flex justify-content-center align-items-center"
             style="background-color: #7A918D;">
            <div class="row">
            <div class="col-12 mx-2 my-2 text-light fs-4 fw-bold d-flex justify-content-center"> Turi laisvą automobilį
                ir norėtum jį įdarbinti? Nieko nelauk ir išnuomok savo automobilį!
            </div>
            @auth
                <div class="col-12 d-flex justify-content-center my-3"><a class="btn btn text-light fs-5"
                                                                          style="background-color: #48bb78"
                                                                          href="{{route('user.rentals.create')}}">Pridėk
                        savo automobilį</a></div>
            @endauth
            @guest
                <div class="my-3 row text-center">
                    <div class="col-12"><a class="btn btn text-light fs-5" style="background-color: #48bb78"
                                           href="{{route('login')}}">Prisijunk</a></div>
                    <div class="col-12 text-light my-2">Dar neturi paskyros?</div>
                    <div class="col-12"><a class="btn btn text-light fs-5" style="background-color: #48bb78"
                                           href="{{route('register')}}">Registruokis</a></div>
                </div>
            @endguest
            </div>
        </div>
    </section>


    <section class="px-5 py-3">
        <div class="container row rounded py-3 ms-1 d-flex justify-content-center align-items-center">
            <div class="col-12 rounded text-center pt-3" style="background-color: #7A918D;">
                <span class="fw-bold fs-5 text-center">TURITE KLAUSIMŲ? SUSISIEKIME!</span>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-12 row ms-1 text-center pt-3">
                        <div class="col-12 col-lg-4 mb-3">
                            <label for="name" class="form-label">Vardas</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col-12 col-lg-4 mb-3">
                            <label for="email" class="form-label">El. paštas</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="col-12 col-lg-4 mb-3">
                            <label for="phone" class="form-label">Telefonas</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="col mb-3">
                            <label for="message" class="form-label">Užduokite savo klausimą</label>
                            <textarea class="w-100" rows="5" name="message" id="message" placeholder="Jūsų klausimas..."></textarea>
                        </div>
                        <div class="col my-1 d-flex justify-content-center">
                            <button type="submit" class="btn text-light d-flex justify-content-center my-2"
                                    style="background-color: #48bb78">Siųsti užklausą
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="container pb-5 pt-3 rounded greentodarkgreentogreen" >
            <div class="text-light fw-bold fs-3 mb-3 text-center">Nemokami priedai</div>
            <div class="row text-center gy-2">
                <div class="col-12 col-lg">
                    <div class="card text-light my-2 my-lg-0 h-100" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <div>
                            <img class="img-fluid my-3 rounded" src="/img/child-seat-icon.svg" alt="seat">
                            </div>
                                <div class="card-title mb-3 fs-4 fw-bold" style="color: #3E5142;">Vaikiška kėdutė</div>
                            <p class="card-text">Nemokamai gaukite vaikišką kėdutę, kad mažieji keliautų saugiai.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="card text-light my-2 my-lg-0 h-100" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <div>
                            <img class="img-fluid my-3 rounded" src="/img/gps-location-icon.svg" alt="gps">
                            </div>
                            <div class="card-title mb-3 fs-4 fw-bold" style="color: #3E5142;">GPS navigacija</div>
                            <p class="card-text">Kad kelionės eitųsi užtikrintai ir sklandžiai.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="card text-light my-2 my-lg-0 h-100" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <div>
                            <img class="img-fluid my-3 rounded" src="/img/two-persons-icon.svg" alt="two">
                            </div>
                                <div class="card-title mb-3 fs-4 fw-bold" style="color: #3E5142;">Antras vairuotojas</div>
                            <p class="card-text">Galimybė automobilį vairuoti antram vairuotojui.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

