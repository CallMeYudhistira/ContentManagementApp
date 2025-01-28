@extends('layouts.app')
@section('title', 'Content | Management')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col" style="text-align: center">~</th>
            <th scope="col" style="text-align: center">!</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $index => $posts)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $posts->title }}</td>
                <td>{{ $posts->description }}</td>
                <td><img src="{{ asset('image/' . $posts->image) }}" alt="{{ asset('image/' . $posts->image) }}" width="400px"></td>
                <td style="text-align: center;"><button type="button" class="btn btn-warning"><a href="">Edit</a></button></td>
                <td style="text-align: center;"><form action="" method="POST">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection