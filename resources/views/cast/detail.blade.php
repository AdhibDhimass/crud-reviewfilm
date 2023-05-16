@extends('layout.master')

@section('title')
        Halaman Detail Cast
@endsection

@section('sub-title')
        Detail Cast
@endsection
@section('content')


<h1> {{$kaka -> nama}} </h1>
<h3> {{$kaka -> umur}} </h3>
<p> {{$kaka -> bio}} </p>


@endsection
