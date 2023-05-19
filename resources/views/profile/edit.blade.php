@extends('layout.master')

@section('title')
    Edit Profil
@endsection

@section('sub-title')
     Profil
@endsection

@section('content')
    <form action="{{ route('profil.update', $profil->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Genre</label>
            <input type="text" name="nama" id="nama" value="{{ $profil->nama }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
