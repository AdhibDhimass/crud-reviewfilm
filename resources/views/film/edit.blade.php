@extends('layout.master')

@section('title')
        Film
@endsection

@section('sub-title')
        Film Table
@endsection

@push('scripts')
<script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <div class="container">
        <h1>Edit Film</h1>

        <form action="{{ route('film.update', $film->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ $film->judul }}">
            </div>

            <div class="form-group">
                <label for="synopsis">Sinopsis</label>
                <textarea class="form-control" id="synopsis" name="synopsis" rows="3" required>{{ $film->ringkasan }}</textarea>
            </div>

            <div class="form-group">
                <label for="year">Tahun</label>
                <input type="number" name="year" class="form-control" value="{{ $film->tahun }}">
            </div>

            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" id="poster" name="poster">
            </div>

            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control" id="genre" name="genre_id" required>
                    <option value="">Pilih Genre</option>
                    @foreach($genree as $genre)
                        <option value="{{ $genre->id }}" @if($film->genre_id == $genre->id) selected @endif>{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
