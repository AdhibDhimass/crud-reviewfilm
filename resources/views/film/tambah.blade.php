@extends('layout.master')

@section('title')
        Halaman Tambah Cast
@endsection

@section('sub-title')
        Halaman Cast
@endsection

@section('content')
    <h1>Tambah Film</h1>

    <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" required>
        </div>

        <div class="mb-3">
            <label for="ringkasan" class="form-label">Ringkasan</label>
            <textarea name="ringkasan" class="form-control" id="ringkasan" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" name="tahun" class="form-control" id="tahun" required>
        </div>

        <div class="mb-3">
            <label for="poster" class="form-label">Poster</label>
            <input type="file" name="poster" class="form-control" id="poster" required>
        </div>

        <div class="mb-3">
            <label for="genre_id" class="form-label">Genre</label>
            <select name="genre_id" class="form-select" id="genre_id" required>
                @foreach ($genree as $genre)
                <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
