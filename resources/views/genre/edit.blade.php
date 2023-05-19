@extends('layout.master')

@section('title')
    Edit Genre
@endsection

@section('sub-title')
    Edit Genre
@endsection

@section('content')
    <form action="{{ route('genre.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Genre</label>
            <input type="text" name="nama" id="nama" value="{{ $genre->nama }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

