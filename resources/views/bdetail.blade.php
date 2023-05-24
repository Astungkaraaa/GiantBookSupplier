@extends('master')

@section('content')

<div class="row">
    <p class="fs-2 bg-secondary text-white">{{ $title }}</p> 
</div>
<div class="row d-flex justify-content-center">
    <div class="col-lg-8 ">
        <img src="{{ $book->image }}" alt="" style="width: 100%">
        <p>Title : {{ $book->title }}</p>
        <p>Author : {{ $book->author }}</p>
        {{--  ini publisher didapet dari model book nya  --}}
        <p>Publisher : {{ $book->publisher->name }}</p> 
        <p>Year : {{ $book->year }}</p>
        <p>Description : </p>
        <p>{{ $book->synopsis }}</p>
    </div>

  
</div>


@endsection