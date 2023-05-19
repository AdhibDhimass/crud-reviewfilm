@extends('layout.master')

@section('title')
        Halaman Genre
@endsection

@section('sub-title')
        Genre
@endsection
@section('content')


<form action="/genre" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label>Nama</label>
        <input name="nama" class="form-control" id="">
        </input>
    </div>
    @error('genre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
