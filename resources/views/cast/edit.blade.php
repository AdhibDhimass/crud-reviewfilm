@extends('layout.master')

@section('title')
        Halaman Edit Cast
@endsection

@section('sub-title')
        Edit Cast
@endsection
@section('content')


<form action="/cast/{{$kaka->id}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
      <label>Nama</label>
      <input type="varchar" name="nama" value="{{$kaka->nama}}" class="form-control" >
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label>Umur</label>
        <input type="number" name="umur" value="{{$kaka->umur}}" id="umur" class="form-control">
      </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label>Bio</label>
      <textarea name="bio" value="{{$kaka->bio}}" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection
