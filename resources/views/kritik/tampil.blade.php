@extends('layout.master')

@section('title')
    Kritik
@endsection

@section('sub-title')
    Detail Kritik
@endsection

@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <h1>Reviews</h1>

    <a href="{{ route('kritik.create') }}" class="btn btn-primary mb-3">Create Review</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Film</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kritiks as $k)
                <tr>
                    <td>{{ $k->id }}</td>
                    <td>{{ $k->user->name }}</td>
                    <td>{{ $k->film->title }}</td>
                    <td>{{ $k->rating }}</td>
                    <td>{{ $k->comment }}</td>
                    <td>
                        <a href="{{ route('kritik.show', $k->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('kritik.edit', $k->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('kritik.destroy', $k->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
