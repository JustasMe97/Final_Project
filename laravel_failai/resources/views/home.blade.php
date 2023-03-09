@extends('layouts.main')
@section('content')
    <section class="text-center p-5 text-md-left">
        <div class="container">
            <div class="d-md-flex align-items-center">
                <div class="">
                    <div class="h1 text-dark my-3"> Išsinuomok automobilį <span class="text-primary">jau dabar!</span> Paprasta, <span class="text-primary">greita,</span> patogu.</div>
                </div>
                <img class="img-fluid w-50 my-3 rounded-circle" src="/img/nuoma.jpg" alt="rent">
            </div>
        </div>
    </section>

    {{--    <section class="d-flex flex-column flex-lg-row justify-content-center my-5">--}}
    {{--        <div class="col-3 d-inline-flex flex-column justify-content-center align-items-center">--}}
    {{--            <div>--}}
    {{--                <img class="img-fluid my-3 rounded-circle" src="/img/choose.jpg" alt="choose">--}}
    {{--            </div>--}}
    {{--            <div class="d-flex flex-column justify-content-center align-items-center">--}}
    {{--            <h2 class="d-flex justify-content-center align-items-center">Išrisinkite automobilį.</h2>--}}
    {{--            <span >Išsirinkite automobilį naudodami filtrus arba iš katalogo.</span>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="col-3 d-flex flex-column justify-content-center align-items-center">--}}
    {{--            <div>--}}
    {{--                <img class="img-fluid my-3 rounded-circle" src="/img/book.svg" alt="book">--}}
    {{--            </div>--}}
    {{--            <div class=" d-flex flex-column justify-content-center align-items-center">--}}
    {{--            <h2 class="d-flex justify-content-center align-items-center">Rezervuokite norimą automobilį</h2>--}}
    {{--            <span>Poto, kai išsirinkote automobilį, rezervuokite jį.</span>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="col-3 d-flex flex-column justify-content-center align-items-center">--}}
    {{--            <div>--}}
    {{--                <img class="img-fluid my-3 rounded-circle" src="/img/contact.png" alt="contact">--}}
    {{--            </div>--}}
    {{--            <div class=" d-flex flex-column justify-content-center align-items-center">--}}
    {{--            <h2 class="d-flex justify-content-center align-items-center">Greitai susisieksime</h2>--}}
    {{--            <span>Po automobilio rezervacijos, su jumis susieks mūsų atstova, ir suderins tolesnius veiksmus.</span>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="col-3 d-flex flex-column justify-content-center align-items-center">--}}
    {{--            <div>--}}
    {{--                <img class="img-fluid my-3 rounded-circle" src="/img/keys.png" alt="keys">--}}
    {{--            </div>--}}
    {{--            <div class=" d-flex flex-column justify-content-center align-items-center">--}}
    {{--            <h2 class="d-flex justify-content-center align-items-center">Mėgaukitės automobiliu</h2>--}}
    {{--            <span>Štai ir viskas, automobilis jūsų rankose, laikas mėgautis.</span>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <section class="p-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md">
                    <div class="card text-light" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <img class="img-fluid my-3 rounded-circle" src="/img/choose.jpg" alt="choose">
                            <h3 class="card-title mb-3">Išsirinkite automobilį.</h3>
                            <p class="card-text">Išsirinkite automobilį naudodami filtrus arba iš katalogo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-light" style="background-color: #7A918D">
                        <div class="card-body text-center">
                            <img class="img-fluid my-3 rounded-circle" src="/img/book.svg" alt="choose">
                            <h3 class="card-title mb-3">Rezervuokite norimą automobilį</h3>
                            <p class="card-text">Rezervuokite automobilį ir mes su jumis susisieksime.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-light" style="background-color: #7A918D">
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

@endsection

