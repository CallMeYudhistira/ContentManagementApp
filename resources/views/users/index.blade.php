@extends('layouts.app')
@php
    $role = session()->get('role');
    $title = $role . ' | Dashboard';
@endphp
@section('title', ucfirst($title))
@section('content')
    @if (session()->get('error'))
        <p
            style="color: rgb(88, 53, 53); background-color: rgb(244, 228, 228); padding: 15px; border-radius: 12px; margin-bottom: 5%;">
            {{ session()->get('error') }}!</p>
    @endif
    <h1 align="center">Hello, {{ session()->get('name') }}</h1>
@endsection
