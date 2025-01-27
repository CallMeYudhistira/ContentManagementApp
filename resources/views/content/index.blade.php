@extends('layouts.app')
@section('title', 'Content | Dashboard')
@section('content')
    <div style="display: flex;">
        @foreach ($post as $posts)
            <div class="card" style="width: 18rem; margin-right: 3%;;">
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
                                    echo $cate->category;
                                }
                            }
                        @endphp
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
