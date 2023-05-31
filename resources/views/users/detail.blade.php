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
    <div class="container">
        <h1>User Details</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $user->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Email: {{ $user->email }}</h6>
                <p class="card-text">Profile: {{ $user->profile ? $user->profile->profile_data : 'N/A' }}</p>
            </div>
        </div>

        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary mt-3">Edit User</a>
    </div>
@endsection
