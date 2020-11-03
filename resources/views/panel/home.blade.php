@extends('layouts.app')

@section('content')

    <div class="mb-3 mt-3">
        <a href="{{route('book.create')}}" class="btn btn-outline-secondary">Crear libro</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Categoria</th>
                <th scope="col"># Paginas</th>
                <th scope="col">ISBN</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->category->name}}</td>
                    <td>{{$book->length}}</td>
                    <td>{{$book->isbn}}</td>
                    <td><a href="{{route('book.show',['book' => $book->id])}}" class="btn btn-outline-primary">Ver</a></td>
                    <td><a href="{{route('book.edit',['book' => $book->id])}}" class="btn btn-outline-warning">Editar</a></td>
                    <td>
                        <form method="POST" action="{{ route('book.destroy', ['book' => $book->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
