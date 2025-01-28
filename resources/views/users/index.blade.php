@extends('layouts.app')
@php
    $role = session()->get('role');
    $title = $role . " | Dashboard";
@endphp
@section('title', ucfirst($title))
@section('content')
    <h1 align="center">Hello, {{ session()->get('name') }}</h1>
@endsection