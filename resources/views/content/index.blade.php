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
                    <p class="card-text" style="scale: 0.8; margin-left: -10%;">
                        @php
                            foreach ($category as $cate) {
                                if ($posts->id_category == $cate->id) {
                                    echo 'Category : ' . $cate->category;
                                }
                            }
                        @endphp
                    </p>
                    <br>
                    <p class="card-text" style="scale: 0.6; margin-left: -23%;">
                        @php
                            foreach ($users as $user) {
                                if ($posts->id_users == $user->id) {
                                    echo 'Uploader : ' . $user->name;
                                }
                            }
                        @endphp
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="dropdown" style="margin-top: 1%; width: 90%; margin: auto; margin-bottom: 3%;">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cari Berdasarkan Kategori
        </button>
        <ul class="dropdown-menu">
            @foreach ($category as $cate)
                <li><a class="dropdown-item" href="{{ route('content.category', $cate->id) }}">{{ $cate->category }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
