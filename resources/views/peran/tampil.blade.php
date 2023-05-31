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
    <h1>Daftar Peran</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Film</th>
                <th>Cast</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peran as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->film->judul }}</td>
                    <td>{{ $p->cast->nama }}</td>
                    <td>
                        <a href="{{ route('peran.show', $p->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('peran.edit', $p->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('peran.destroy', $p->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus peran ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<br>
    <a href="{{ route('peran.create') }}" class="btn btn-success">Tambah Peran Baru</a>
@endsection
