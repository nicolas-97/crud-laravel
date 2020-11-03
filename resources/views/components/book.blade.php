<div class="card">
    <img class="card-img-top" src="https://i.pinimg.com/originals/92/a7/2b/92a72b64c1bfeafb4dffa94f06bc8576.png"
    alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$book->name}}</h5>
        <p class="card-text"><strong>ISBN: </strong>{{$book->isbn}}</p>
        <p class="card-text">{{$book->length}} paginas</p>
        @if ($show !== 0)
            <a href="{{route('book.show',['book' => $book->id])}}" class="btn btn-outline-info">Ver</a>
        @endif
    </div>
</div>
