@extends('layouts.app')
@section('title', 'Content | Dashboard')
@section('content')
    <div style="display: flex; flex-wrap: wrap; justify-content:flex-start; width: 90%; margin: auto;">
        @foreach ($post as $posts)
            <div class="card" style="width: 19rem; height: auto; margin-right: 3%; max-width: 19rem; min-width: 18rem; margin-bottom: 3%;">
                <img src="{{ asset('image/' . $posts->image) }}" class="card-img-top"
                    alt="{{ asset('image/' . $posts->image) }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $posts->title }}</h5>
                    <p class="card-text">{{ $posts->description }}</p>
                    <br>
                    <p class="card-text">
                        @php
                            foreach ($category as $cate) {
                                if ($posts->id_category == $cate->id) {
                                    echo 'Category : ' . $cate->category;
                                }
                            }
                        @endphp
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
