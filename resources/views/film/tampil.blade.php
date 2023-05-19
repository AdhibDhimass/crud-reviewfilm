@extends('layout.master')

@section('title')
        Halaman Tampil Data Cast
@endsection

@section('sub-title')
        Halaman Data Cast
@endsection
@section('content')

<a href="/cast/create" class="btn btn-primary btn-sm">Tambah</a>
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
        @forelse ($pilm as $key => $item)
            <tr>
                <th scope="row">{{$key +1}}</th>
                 <td>{{$item->Judul}}</td>
                 <td>{{$item->Ringkasan}}</td>
                 <td>{{$item->Tahun}}</td>
                 <td>{{$item->Poster}}</td>
                <td>
                    <form action="/film/{{$item->id}}" method="post">
                    <a href="/film/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/film/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

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

