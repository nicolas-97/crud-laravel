@extends('layouts.app')

@section('content')
    <h1>Editar un usuario</h1>
    <form action="{{ route('user.update',['user' => $user->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-row">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name"  value="{{ $user->name}}">
        </div>

        <div class="form-row">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" name="dni" required value="{{ $user->dni }}">
        </div>

        <div class="form-row">
            <label for="status">Rol</label>
            <select name="isAdmin" id="" class="custom-select" required>
                <option value="" selected>Seleccione...</option>
                <option {{ $user->isAdmin == '1' ? 'selected' : '' }} value="1">Administrador</option>
                <option {{ $user->isAdmin == '0' ? 'selected' : '' }} value="0">Usuario</option>
            </select>
        </div>

        <div class="form-row">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password" required value="">
        </div>

        <div class="form-row">
            <label for="confirm_password">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="confirm_password" required value="">
        </div>


        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg mt-3">Actualizar usuario</button>
        </div>
    </form>
@endsection
