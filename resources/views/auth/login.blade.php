@extends('layouts.app')

@section('content')
    <h1>Log in</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" autocomplete="username"
                   name="email"
                   value="{{ old('email') }}"
                   class="form-control" id="email" placeholder="name@example.com">
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" autocomplete="current-password"
                   name="password"
                   class="form-control" id="password" placeholder="Password">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <a class="text-secondary text-decoration-none"
               style="cursor: not-allowed;"
               href="#">Forgot password?</a>
        </div>

        <button type="submit" class="btn btn-primary mb-3">Log in</button>
    </form>
@endsection
