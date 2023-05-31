@extends('layout.master')

@section('title')
        Cast
@endsection

@section('sub-title')
        Cast Table
@endsection

@push('scripts')
<script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <h1>Detail Peran</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $peran->id }}</td>
            </tr>
                <th>Name</th>
                <td>{{ $peran->nama }}</td>
            </tr>
            <tr>
                <th>Film</th>
                <td>{{ $peran->film->judul }}</td>
            </tr>
            <tr>
                <th>Cast</th>
                <td>{{ $peran->cast->nama }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('peran.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
