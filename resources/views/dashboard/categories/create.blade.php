@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Categories</h1>
</div>
<div class="col-lg-8 mb-5">
    <form action="/dashboard/categories" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label class="form-label" for="name">Category name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus autocomplete="off" value="{{old('name')}}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Post</button>
            <a href="/dashboard/categories/" class="btn btn-secondary">back</a>
        </div>
    </form>
</div>
@endsection