@extends('layouts.app')
@section('title', 'Content | Update')
@section('content')
    @if ($errors->any)
        <div style="margin: auto; width: 700px; margin-bottom: 5%;">
            @foreach ($errors->all() as $error)
                <ul style="color : red;">
                    <li>
                        <p>{{ $error }}</p>
                    </li>
                </ul>
            @endforeach
        </div>
    @endif

    <form action="{{ route('content.update', $post->id) }}" method="POST"
        style="margin-top: -3%; background-color: whitesmoke; padding: 25px; border-radius: 12px;"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1>Edit Content</h1>

        <hr>

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Masukan Judul Konten"
                autocomplete="off" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3"
                placeholder="Masukan Deskripsi Tentang Konten Anda">{{ $post->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label> <br>
                <img src="{{ asset('image/' . $post->image) }}" class="rounded" alt="{{ asset('image/' . $post->image) }}"
                    width="400px" style="margin: 12px;">
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" aria-label="category" id="category" name="category">
                @foreach ($category as $cate)
                    <option value="{{ $cate->category }}" @if ($post->id_category == $cate->id) selected @endif>
                        {{ $cate->category }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
