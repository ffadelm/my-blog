@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new post</h1>
</div>
<div class="col-lg-8 mb-5">
    <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus autocomplete="off" value="{{old('title')}}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="slug">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{old('slug')}}" required>
            @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="image" class="form-label @error('image') is-invalid @enderror">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="body">Body</label>
            @error('body')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{old('body')}}">
            <trix-editor input="body"></trix-editor>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Post</button>
            <a href="/dashboard/posts" class="btn btn-secondary">back</a>
        </div>
    </form>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    //keyup adalah event yang akan dijalankan ketika ada perubahan pada input
    //change adalah event yang akan dijalankan ketika ada perubahan pada input ketika input sudah diisi
    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    //mematikan nambahin file
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>
@endsection