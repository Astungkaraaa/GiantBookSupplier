@extends('master')
@section('content')
    
<div class="col-lg">
    <div class="row">
        <p class="fs-2 bg-secondary text-white">Publisher List</p> 
    </div>
</div>
<div class="row">
    @if($publishers->count())
        @foreach ($publishers as $pub)
            <div class="col-3">
                <div class="card mb-3">
                    <img src="{{ $pub->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title text-truncate">{{ $pub->name }}</h5>
                    <p class="card-text text-truncate">{{ $pub->address }} </p>
                    <a href="/pubdet/{{ $pub->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        Tidak ada data publisher
    @endif
</div>


@endsection