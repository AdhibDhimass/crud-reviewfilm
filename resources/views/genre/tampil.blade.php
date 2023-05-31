@extends('layout.master')

@section('title')
        Halaman Tampil Genre
@endsection

@section('sub-title')
        Halaman Data Genre
@endsection
@section('content')

<a href="/genre/create" class="btn btn-primary btn-sm">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($genree as $key => $item)
            <tr>

                <th scope="row">{{$key +1}}</th>
                 <td>{{$item->nama}}</td>
                 <td>
                    <form action="{{ route('genre.destroy', $item->id) }}" method="POST">
                        <a href="{{ route('genre.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/genre/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <h1>Data Kosong</h1>
        @endforelse

    </tbody>
  </table>
@endsection
