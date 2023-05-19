@extends('layout.master')

@section('title')
        Halaman Profil
@endsection

@section('sub-title')
        Profil
@endsection
@section('content')

<a href="/profile/create" class="btn btn-primary btn-sm">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Bio</th>
        <th scope="col">Action </th>
      </tr>
    </thead>
    <tbody>
        @forelse ($profill as $key => $item)
            <tr>
                <th scope="row">{{$key +1}}</th>
                 <td>{{$item->umur}}</td>
                 <td>{{$item->bio}}</td>
                 <td>{{$item->alamat}}</td>
                 <td>{{$item->user_id}}</td>
                <td>
                    <form action="/profile/{{$item->id}}" method="post">
                    <a href="/profile/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/profile/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

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
