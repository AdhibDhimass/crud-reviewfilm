@extends('layout.master')

@section('title')
        Halaman Profil
@endsection

@section('sub-title')
        Profil
@endsection
@section('content')


<form action="/profile" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label>Umur</label>
        <input name="umur" class="form-control" id="">
        </input>
    </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
      <label>Bio</label>
        <input name="bio" class="form-control" id="">
        </input>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
      <label>Alamat</label>
        <input name="alamat" class="form-control" id="">
        </input>
    </div>
    @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
      <label>Id User</label>
        <input name="user_id" class="form-control" id="">
        </input>
    </div>
    @error('user_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
