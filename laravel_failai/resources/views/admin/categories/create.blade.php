@extends('layouts.main')

@section('title', 'Naujos kategorijos pridėjimas')

@section('content')
    <h1>Kūrimas</h1>
    <span>Kategorijos kūrimo forma:</span>
    <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('slug') is-invalid @enderror"
                   name="slug"
                   placeholder="Slug'as.."
                   value="{{old('slug')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('description') is-invalid @enderror"
                   name="description"
                   placeholder="Aprašymas.."
                   value="{{old('description')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('image') is-invalid @enderror"
                   name="image"
                   placeholder="Paveikslėlis.."
                   value="{{old('image')}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('parent_id') is-invalid @enderror"
                   name="parent_id"
                   placeholder="Kategorijos ID.."
                   value="{{old('parent_id')}}">
        </div>
        <button type="submit" class="btn btn-primary">Pridėti</button>
    </form>
@endsection
