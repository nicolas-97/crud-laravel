@extends('layouts.app')

@section('content')
    <div style="margin-top: 20%" >
        <div class="row">
            <div class="col-4">
                <div class="text-center">
                    <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                    </svg>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12"><h4><strong>Nombre</strong></h4></div>
                            <div class="col-12">{{$user->name}}</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12"><h4><strong>DNI</strong></h4></div>
                            <div class="col-12">{{$user->dni}}</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12"><h4><strong>Email</strong></h4></div>
                            <div class="col-12">{{$user->email}}</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12"><h4><strong>Rol</strong></h4></div>
                            <div class="col-12">{{$user->isAdmin == 1? 'Administrador':'Usuario'}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
