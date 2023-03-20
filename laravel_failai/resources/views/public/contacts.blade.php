@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-start rounded my-3 p-4 row" style="background-color: #7A918D;">
        <div class="h4 text-light col-12">Kontaktai</div>
        <div class="text-light col-12">Susisiekite su Auto<span style="color: #48bb78">Rent</span> personalu arba
            užduokite klausimą užklausos formoje.
        </div>
    </div>
    <div class="rounded my-3 p-4 row" style="background-color: #7A918D;">
        <div class="text-light text-center col-12 col-md-6 col-lg-4 d-flex flex-column">
            <span class="fw-bold">BENDRA INFORMACIJA</span>
            <p><br>Tel. nr. +370 (677) 77 777
                <br>El.paštas: info@autorent.lt
                <br>UAB "AutoRent"
                <br>Įmonės kodas: XXXXXXXXX
                <br>PVM mokėjoto kodas: LTXXXXXXXXX
                <br>SEB LTXXXXXXXXXXXXXXXXXX</p>
        </div>
        <div class="text-light text-center col-12 col-md-6 col-lg-4 d-flex flex-column">
            <span class="fw-bold">AUTOMOBILIŲ NUOMA</span>
            <p> <br>Kauno nuomos punktas
                <br>Makevelio pl. 69-43, LT-49500
                <br>Darbo laikas: 9 val - 18 val.</p>
        </div>
        <div class="rounded text-dark bg-light col-12 col-md-6 col-lg-4 d-flex flex-column">
            <span class="fw-bold text-center">TURITE KLAUSIMŲ? SUSISIEKIME!</span>
            <div>
                <form action="{{route('question.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Vardas</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">El. paštas</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefonas</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                    <div class="mb-3">
                        <textarea class="w-100" name="message" placeholder="Jūsų žinutė..."></textarea>
                    </div>
                    <div class="my-1 d-flex justify-content-center">
                        <button type="submit" class="btn text-light d-flex justify-content-center my-2" style="background-color: #48bb78">Siųsti</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

