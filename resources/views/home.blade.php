@extends('layouts.app')

@section('content')

    <div class="row">
        @foreach ($books as $book)
            <div class="col-3">
                @include('components.book')
            </div>
        @endforeach
    </div>

@endsection
