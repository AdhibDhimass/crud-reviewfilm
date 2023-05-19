@extends('layout.master')

@section('title')
    Detail Genre
@endsection

@section('sub-title')
    Detail Genre
@endsection

@section('content')
    <h2>Nama Genre: {{ $genre->nama }}</h2>
    <!-- Tambahkan informasi detail lainnya yang ingin ditampilkan -->
@endsection
