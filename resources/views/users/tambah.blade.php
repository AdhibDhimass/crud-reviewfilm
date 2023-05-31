@extends('layout.master')

@section('title')
        Halaman Profil
@endsection

@section('sub-title')
        Profil
@endsection
@section('content')


<form action="/users" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label>Name</label>
        <input name="name" class="form-control" id="">
        </input>
    </div>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
      <label>Email</label>
        <input name="email" class="form-control" id="">
        </input>
    </div>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
      <label>Password</label>
        <input name="password" class="form-control" id="">
        </input>
    </div>
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
