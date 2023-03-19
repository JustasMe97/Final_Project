@extends('layouts.main')
@section('content')
    <div class="my-5 d-flex justify-content-center"><h1 class="fw-bold" style="color: #7A918D;">
            {{__('Admin valdymas ')}}</h1></div>
    <div class="text-dark my-5 d-flex justify-content-start"><h1 class="fw-bold" style="color: #7A918D;">
            {{__('Naujausios rezervacijos')}}</h1></div>
    <div class="table-responsive">
        <table class="table my-4 table-bordered">
            <thead class="greentodarkgreen  text-light text-center align-middle">
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{__('Automobilio pavadinimas')}}</th>
                <th scope="col">{{__('Pradžios data')}}</th>
                <th scope="col">{{__('Pabaigos data')}}</th>
                <th scope="col">{{__('Klientas')}}</th>
                <th scope="col">{{__('Rezervacijos statusas')}}</th>
                <th scope="col">{{__('Veiksmai')}}</th>
                {{--            <th scope="col">{{__('Veiksmai')}}</th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <th scope="row">{{$reservation->id}}</th>
                    <th scope="row">{{$reservation->rental->name}}</th>
                    <th scope="row">{{$reservation->start_date}}</th>
                    <th scope="row">{{$reservation->end_date}}</th>
                    <th scope="row">{{$reservation->email_of_renter}}</th>
                    <th scope="row">{{$reservation->status}}</th>
                                    <th>
                                        <div class="d-flex flex-row">
                                            <a role="button" class="btn btn-dark ms-1 me-1"
                                               href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                     class="bi bi-pen" viewBox="0 0 16 16">
                                                    <path
                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                                                </svg>
                                                {{__('Redaguoti')}}
                                            </a>
                                            <form action="" method="post">

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
                                            <a role="button" class="btn btn-secondary ms-1 me-1"
                                               href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                     class="bi bi-search" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                </svg>
                                                {{__('Peržiūra')}}
                                            </a>
                                        </div>
                                    </td>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
