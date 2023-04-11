@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row pt-3">
        @forelse ($movies as $movie)

            <div class="col-3 mb-3">
                <div class="card p-4 h-100 w-100 d-flex flex-column align-items-center justify-content-center text-center">
                    <h2>{{ $movie->title }}</h2>
                    <h4 class="fw-normal">{{ $movie->original_title }}</h4>
                    <h4 class="fw-normal">Voto: {{ $movie->vote }}</h4>
                </div>
            </div>
        
        @empty

        @endforelse
    </div>

</div>