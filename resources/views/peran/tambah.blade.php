@extends('layout.master')

@section('title')
        Halaman Peran
@endsection

@section('sub-title')
        Peran
@endsection
@section('content')


<form action="/cast" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label>Nama</label>
      <input type="varchar" name="nama" class="form-control" >
    </div>
    @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label>Ringkasan</label>
        <input type="integer" name="ringkasan" id="umur" class="form-control">
      </div>
    @error('ringkasan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label>Tahun</label>
      <textarea name="tahun" class="form-control"></textarea>
    </div>
    @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label>Poster</label>
      <input type="file" name="poster" class="form-control" cols="30" rows="10"></input>
    </div>
    @error('poster')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label>Genre</label>
        <select name="Genre" class="form-control" id="">
        @forelse ($kaka as $item)
            <dropdown value="{{$item->id}}"> {{$item->nama}} </dropdown>
        @empty
            <dropdown value="">Belum ada Genre</dropdown>
        @endforelse
        </select>
    </div>
    @error('poster')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection
