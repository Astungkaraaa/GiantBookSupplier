@extends('master')

@section('content')

<div class="row">
    <p class="fs-2 bg-secondary text-white">{{ $title }}</p> 
</div>
<div class="row">
    @if($books->count())
        @foreach ($books as $book)
            <div class="col-3">
                <div class="card mb-3" >
                    <img src="{{ $book->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-truncate">{{ $book->title }}</h5>
                    <p class="card-text text-truncate">by <br> {{ $book->author }} </p>
                    <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        Tidak ada data buku
    @endif
</div>

@endsection