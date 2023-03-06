@extends('layouts.main')

@section('title', 'Vartotojai')

@section('content')
    <h1>Redagavimas</h1>
    <span>Vartotojo redagavimo forma:</span>
    <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name') ?? $user->name}}">
        </div>
        <div class="form-group">
            <input type="email"
                   class="form-control @error('email') is-invalid @enderror"
                   name="email"
                   placeholder="El. paštas.."
                   value="{{old('email') ?? $user->email}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('role') is-invalid @enderror"
                   name="role"
                   placeholder="Rolė.."
                   value="{{old('role') ?? $user->role}}">
        </div>
        <button type="submit" class="btn btn-primary">Atnaujinti</button>
    </form>
@endsection
