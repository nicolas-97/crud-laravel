@extends('layouts.app')

@section('content')

<h1>Crear un libro</h1>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <label for="name">Titulo</label>
            <input type="text" class="form-control" name="name"  value="{{ old('name') }}">
        </div>

        <div class="form-row">
            <label for="length">Numero de paginas</label>
            <input type="number" class="form-control" name="length" required value="{{ old('length') }}">
        </div>

        <div class="form-row">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" name="isbn" required value="{{ old('isbn') }}">
        </div>

        <div class="form-row">
            <label for="category_id">Categoria</label>
            <select name="category_id" id="" class="custom-select" required>
                <option value="" selected>Select...</option>
                @foreach ($categories as $category)
                    <option {{ old('category_id') == $category->id ? 'selected' : '' }}
                    value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg mt-3">Crear libro</button>
        </div>
    </form>

@endsection
