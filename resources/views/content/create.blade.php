@extends('layouts.app')
@section('title', 'Content | Dashboard')
@section('content')
@if ($errors->any)
<div style="margin: auto; width: 700px; margin-bottom: 5%;">
    @foreach ($errors->all() as $error)
    <ul style="color : red;">
        <li><p>{{ $error }}</p></li>
    </ul>
    @endforeach
</div>
@endif

    <form action="{{ route('content.store') }}" method="POST" style="margin-top: -3%; background-color: whitesmoke; padding: 25px; border-radius: 12px;" enctype="multipart/form-data">
        @csrf
        <h1>Upload Content</h1>

        <hr>

        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Masukan Judul Konten"
                autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukan Deskripsi Tentang Konten Anda"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <select class="form-select" aria-label="category" id="category" name="category">
                <option selected>-- Pilih Kategori Konten Anda --</option>
                @foreach ($category as $cate)
                    <option value="{{ $cate->category }}">{{ $cate->category }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
