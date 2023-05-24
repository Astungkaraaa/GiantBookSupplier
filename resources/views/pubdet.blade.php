@extends('master')

@section('content')

<div class="row bg-secondary text-white fs-4 mb-2">
    <p >{{ $title }} <br> Address - {{ $address }} <br> Phone - {{ $phone }} <br> Email - {{ $email }}</p> 
</div>
<div class="row">
    @if($books->count())
        @foreach ($books as $book)
            <div class="col-3">
                <div class="card mb-3">
                    <img src="{{ $book->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5>
                    <p class="card-text">by <br> {{ $book->author }} </p>
                    <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        Tidak ada buku dengan publisher ini
    @endif
</div>

@endsection