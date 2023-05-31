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
    <h1>Create Review</h1>

    <form action="{{ route('kritik.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="film_id">Film:</label>
            <select name="film_id" id="film_id" class="form-control">
                @foreach ($film as $films)
                <option value="{{ $films->id }}">{{ $films->judul }}</option>
            @endforeach
       </select>
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="text" id="content" class="form-control" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="poin">Poin:</label>
            <input type="number" name="poin" id="poin" class="form-control">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
