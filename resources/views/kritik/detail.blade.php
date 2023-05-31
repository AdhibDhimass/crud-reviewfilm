@extends('layout.master')

@section('title')
    Film
@endsection

@section('sub-title')
    Detail film
@endsection

@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <h1>Review Details</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $k->id }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ $k->user->name }}</td>
            </tr>
            <tr>
                <th>Film</th>
                <td>{{ $k->film->judul }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ $k->content }}</td>
            </tr>
            <tr>
                <th>Poin</th>
                <td>{{ $k->poin }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('kritik.index') }}" class="btn btn-primary">Back</a>
@endsection
