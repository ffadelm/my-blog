@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>{{$post->title}}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all</a>
                <a href="" class="btn btn-primary"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="trash"></span> Delete</a>

                <img src="https://source.unsplash.com//1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </article>
            <a href="/posts" class="text-decoration-none btn btn-danger ">Kembali</a>
        </div>
    </div>
</div>
@endsection