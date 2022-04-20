@extends('layouts.main')
@section('container')

<div class="row justify-content-center mt-4">
    <div class="col-lg-4">
        <h1 class="h3 mb-3 fw-bold text-center">Welcome to The Blog,<br> Please Login</h1>
        <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" id="form2Example1" class="form-control" placeholder="example@mail.com" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label for="form2Example2">Password</label>
                <input type="password" id="form2Example2" class="form-control" placeholder="password123" />
            </div>

            <!-- Submit button -->
            <button type="submit" class="w-100 btn btn-primary btn-lg mb-4">Login</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="/register">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
    </div>
</div>

@endsection