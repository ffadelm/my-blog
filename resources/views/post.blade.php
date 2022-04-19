@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <article>
                <h2>{{$post->title}}</h2>
                <p>by: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->username }}</a> in <a href="/categories/{{ $post->category->slug }}/" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com//1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </article>
            <a href="/posts" class="text-decoration-none btn btn-danger ">Kembali</a>
        </div>
    </div>
</div>
@endsection