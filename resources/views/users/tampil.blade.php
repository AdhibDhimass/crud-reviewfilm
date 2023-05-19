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
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Action </th>
      </tr>
    </thead>
    <tbody>
        @forelse ($profill as $key => $item)
            <tr>
                <th scope="row">{{$key +1}}</th>
                 <td>{{$item->name}}</td>
                 <td>{{$item->email}}</td>
                 <td>{{$item->password}}</td>
                <td>
                    <form action="/users/{{$item->id}}" method="post">
                    <a href="/users/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/users/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>

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
