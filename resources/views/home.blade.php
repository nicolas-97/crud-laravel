@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Categoria</th>
                <th scope="col"># Paginas</th>
                <th scope="col">ISBN</th>
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
                    <td>ver</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
