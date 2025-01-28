@extends('layouts.app')
@section('title', 'Content | Management')
@section('content')
    <div style="display: flex;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col" style="text-align: center">~</th>
                    <th scope="col" style="text-align: center">!</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $index => $posts)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td scope="row">{{ $posts->title }}</td>
                        <td scope="row">{{ $posts->description }}</td>
                        <td scope="row">@php
                            foreach ($category as $cate) {
                                if ($posts->id_category == $cate->id) {
                                    echo $cate->category;
                                }
                            }
                        @endphp</td>
                        <td scope="row"><img src="{{ asset('image/' . $posts->image) }}"
                                alt="{{ asset('image/' . $posts->image) }}" width="400px" class="rounded"></td>
                        <td scope="row" style="text-align: center;"><button type="button" class="btn btn-warning"><a
                                    href="{{ route('content.edit', $posts->id) }}">Edit</a></button></td>
                        <td scope="row" style="text-align: center;">
                            <form action="" method="POST">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
