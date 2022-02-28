@extends('template')
@section('title', 'Login')
@section('content')


    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="col-md-5">
            @if (session('message'))
                <div class="alert alert-danger">{{ session('message') }}</div>
            @endif
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

@endsection
