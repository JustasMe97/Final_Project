@extends('layouts.main')
@section('content')
    <div class="text-dark my-5 d-flex justify-content-start"><h1 class="fw-bold" style="color: #7A918D;">
            {{__('Mano rezervacijos')}}</h1></div>
    <div class="table-responsive">
    <table class="table my-4 table-bordered">
        <thead class="greentodarkgreen  text-light text-center align-middle">
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('Automobilio pavadinimas')}}</th>
            <th scope="col">{{__('Pradžios data')}}</th>
            <th scope="col">{{__('Pabaigos data')}}</th>
            <th scope="col">{{__('Vaikiška kedutė')}}</th>
            <th scope="col">{{__('Antrasis vairuotojas')}}</th>
            <th scope="col">{{__('GPS navigacija')}}</th>
            <th scope="col">{{__('WI-FI')}}</th>
            <th scope="col">{{__('Rezervacijos statusas')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <th scope="row">{{$reservation->id}}</th>
                <th scope="row">{{$reservation->rental->name}}</th>
                <th scope="row">{{$reservation->start_date}}</th>
                <th scope="row">{{$reservation->end_date}}</th>
                <th scope="row">{{$reservation->child_seat}}</th>
                <th scope="row">{{$reservation->second_driver}}</th>
                <th scope="row">{{$reservation->gps}}</th>
                <th scope="row">{{$reservation->wifi}}</th>
                <th scope="row">{{$reservation->status}}</th>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
