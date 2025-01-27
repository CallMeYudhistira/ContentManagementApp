@extends('layouts.app')
@section('title', 'Login Page')
@section('content')
    @if (session()->get('error'))
        <p style="color: red; background-color: #31272785; padding: 15px; border-radius: 12px; margin-bottom: 20px;">{{ session()->get('error') }}</p>
    @endif

    <form action="{{ route('auth.login') }}" method="POST">
        @csrf
        <h1 style="margin-top: -1%;">Login</h1>

        <hr>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password : </label>
            <input type="password" id="password" name="password" class="form-control" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
