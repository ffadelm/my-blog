@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>{{$post->title}}</h2>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-primary"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?')"><span data-feather="trash-2"></span> Delete</button>
                </form>

                @if($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{$post->title}}" class="img-fluid mt-3">
                </div>
                @else
                <img src="https://source.unsplash.com//1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </article>
            <a href="/dashboard/posts" class="text-decoration-none btn btn-danger ">Kembali</a>
        </div>
    </div>
</div>
@endsection