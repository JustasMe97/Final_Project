@extends('layouts.main')

@section('title', 'Rezervacijos redagavimas')

@section('content')
    <div class="container col col-md-6">
        <h1 class="my-2 text-center">{{__('Rezervacijos redagavimas')}}</h1>
        <span><b>{{__('Rezervacijos redagavimo forma:')}}</b></span>
        <form action="{{route('reservation.update', $reservation)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="rental_id">{{__('Automobilio ID')}}</label>
                <input type="text"
                       name="rental_id"
                       id="rental_id"
                       class="form-control @error('rental_id') is-invalid @enderror"
                       value="{{old('rental_id')?? $reservation->rental_id}}">
            </div>
            <div class="form-group">
                <label for="start_date">{{__('Pradžios data')}}</label>
                <input type="text"
                       class="form-control @error('start_date') is-invalid @enderror"
                       name="start_date"
                       id="start_date"
                       value="{{old('start_date') ?? $reservation->start_date}}">
            </div>
            <div class="form-group">
                <label for="end_date">{{__('Pabaigos data')}}</label>
                <input type="text"
                       class="form-control @error('end_date') is-invalid @enderror"
                       name="end_date"
                       id="end_date"
                       value="{{old('end_date') ?? $reservation->end_date}}">
            </div>
            <div class="form-group">
                <label for="name_of_renter">{{__('Kliento vardas')}}</label>
                <input type="text"
                       class="form-control @error('name_of_renter') is-invalid @enderror"
                       name="name_of_renter"
                       id="name_of_renter"
                       value="{{old('name_of_renter') ?? $reservation->name_of_renter}}" readonly="true">
            </div>
            <div class="form-group">
                <label for="email_of_renter">{{__('Kliento el. paštas')}}</label>
                <input type="text"
                       class="form-control @error('email_of_renter') is-invalid @enderror"
                       name="email_of_renter"
                       id="email_of_renter"
                       value="{{old('email_of_renter') ?? $reservation->email_of_renter}}" readonly="true">
            </div>
            <div class="form-group">
                <label for="status">{{__('Statusas')}}</label>
                <input type="text"
                       class="form-control @error('status') is-invalid @enderror"
                       name="status"
                       id="status"
                       value="{{old('status') ?? $reservation->status}}">
            </div>

            <button type="submit" class="btn my-1 text-light greentodarkgreen">{{__('Atnaujinti')}}</button>
        </form>
    </div>
@endsection

