@extends('layout.master')

@section('title')
        Halaman Tampil Data Movie
@endsection

@section('sub-title')
        Halaman Data Cast
@endsection
@section('content')

<a href="/film/create" class="btn btn-primary btn-sm">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Ringkasan</th>
        <th scope="col">Tahun</th>
        <th scope="col">Poster </th>
      </tr>
    </thead>
    <tbody>
        @forelse ($pilm as $p)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                 <td>{{$p->judul}}</td>
                 <td>{{$p->ringkasan}}</td>
                 <td>{{$p->tahun}}</td>
                 <td>{{$p->poster}}</td>
                <td>
                    <form action="/film/{{$p->id}}" method="post">
                    <a href="/film/{{$p->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/film/{{$p->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

                        @csrf
                        @method('delete')
                        <input type="submit" value="delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
        @empty
            <h1>Data Kosong</h1>
        @endforelse

    </tbody>
  </table>
@endsection

