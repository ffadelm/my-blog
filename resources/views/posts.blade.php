@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

<!-- kondisi postingan -->
@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com//1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    <div class="card-body text-center">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <p>
            <small class="text-muted">
                By: <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->username }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt}}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class=" text-decoration-none btn btn-primary">Read more</a>
    </div>
</div>
@else
<div class="alert alert-info">
    <p>Tidak ada postingan</p>
</div>
@endif

<!-- perulangan isi db -->
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com//500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title}}</h5>
                    <p>
                        <small class="text-muted">
                            By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection