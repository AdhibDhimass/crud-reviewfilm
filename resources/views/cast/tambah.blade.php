@extends('layout.master')

@section('title')
        Halaman Tambah Cast
@endsection

@section('sub-title')
        Halaman Cast
@endsection
@section('content')


<form action="/cast" method="POST">
    @csrf
    <div class="mb-3">
      <label>Nama</label>
      <input type="varchar" name="nama" class="form-control" >
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label>Umur</label>
        <input type="integer" name="umur" id="umur" class="form-control">
      </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label>Bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection

