@extends('layouts.main')

@section('title', 'Kategorijos')

@section('content')
    <h1>Redagavimas</h1>
    <span>Kategorijos redagavimo forma:</span>
    <form action="{{route('categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <input type="text"
                   name="name"
                   placeholder="Pavadinimas.."
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{old('name') ?? $category->name}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('slug') is-invalid @enderror"
                   name="slug"
                   placeholder="Slug'as.."
                   value="{{old('slug') ?? $category->slug}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('description') is-invalid @enderror"
                   name="description"
                   placeholder="Aprašymas.."
                   value="{{old('description') ?? $category->description}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('image') is-invalid @enderror"
                   name="image"
                   placeholder="Paveikslėlis.."
                   value="{{old('image') ?? $category->image}}">
        </div>
        <div class="form-group">
            <input type="text"
                   class="form-control @error('parent_id') is-invalid @enderror"
                   name="parent_id"
                   placeholder="Kategorijos ID.."
                   value="{{old('parent_id') ?? $category->parent_id}}">
        </div>
        <button type="submit" class="btn btn-primary">Atnaujinti</button>
    </form>
@endsection
