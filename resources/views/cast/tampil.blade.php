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
        <th scope="col">First</th>
        <th scope="col">Last</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($casts as $key => $item)
            <tr>
                <th scope="row">{{$key +1}}</th>
                 <td>{{$item->nama}}</td>
                <td>
                    <form action="/cast/{{$item->id}}" method="post">
                    <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

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
