@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new post</h1>
</div>
<div class="col-lg-8 mb-5">
    <form action="/dashboard/posts" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="body">Body</label>
            <input id="body" type="hidden" name="body">
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