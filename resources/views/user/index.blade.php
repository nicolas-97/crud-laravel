@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">DNI</th>
                <th scope="col">Email</th>
                <th scope="col">Administrador</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->dni}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->isAdmin() == '1' ? 'Si':'No'}}</td>
                    <td><a href="{{route('user.show',['user' => $user->id])}}" class="btn btn-outline-primary">Ver</a></td>
                    <td><a href="{{route('user.edit',['user' => $user->id])}}" class="btn btn-outline-warning">Editar</a></td>
                    <td>
                        <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
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
