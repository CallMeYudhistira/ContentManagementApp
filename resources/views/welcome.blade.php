@extends('layouts.app')
@section('title', 'Login Page')
@section('content')
    <form action="" method="POST">
        @csrf
        <h1 style="margin-top: -1%;">Login</h1>

        <hr>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password : </label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
