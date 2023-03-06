@extends('layouts.main')

@section('title', 'Naujo vartotojo pridėjimas')

@section('content')
    <h1>Kūrimas</h1>
    <span>Vartotojo kūrimo forma:</span>
    <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name')}}">
        </div>
        <div class="form-group">
            <input type="email"
                   class="form-control @error('email') is-invalid @enderror"
                   name="email"
                   placeholder="El. paštas.."
                   value="{{old('email')}}">
        </div>
        <div class="form-group">
            <input type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   name="password"
                   placeholder="Slaptažodis.."
                   value="{{old('password')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('role') is-invalid @enderror"
                   name="role"
                   placeholder="Rolė.."
                   value="{{old('role')}}">
        </div>
        <button type="submit" class="btn btn-primary">Pridėti</button>
    </form>
@endsection
