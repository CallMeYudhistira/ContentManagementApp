@extends('layouts.app')
@section('title', session()->get('role'))
@section('content')
    <h1 align="center">Hello, {{ session()->get('name') }}</h1>
@endsection