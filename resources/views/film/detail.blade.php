@extends('layout.master')

@section('title')
    Film
@endsection

@section('sub-title')
    Detail film
@endsection

@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <div class="container">
        <h1>Detail Film</h1>

        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('poster/' . $film->poster) }}" alt="Poster" width="100">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film->judul }}</h5>
                        <p class="card-text">Sinopsis: {{ $film->ringkasan }}</p>
                        <p class="card-text">Tahun: {{ $film->tahun }}</p>
                        <p class="card-text">Genre: {{ $film->genre ? $film->genre->name : 'Data genre tidak tersedia' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('film.edit', $film->id) }}" class="btn btn-primary">Edit Film</a>
    </div>
@endsection
