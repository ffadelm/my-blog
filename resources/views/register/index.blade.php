@extends('layouts.main')
@section('container')

<!-- Pills content -->
<div class="row justify-content-center mt-4">
    <div class="col-lg-4">
        <h1 class="h3 mb-3 fw-bold text-center">Register Your Account</h1>
        <form>
            <div class="text-center mb-3">
                <p>Have Account? <a href="/login">Login</a></p>
                <p>Sign up with:</p>
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

            <p class="text-center">or:</p>

            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" />
            </div>

            <!-- Username input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" />
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" />
            </div>

            <!-- Submit button -->
            <button type="submit" class="w-100 btn btn-primary btn-lg mb-3">Register</button>
        </form>
    </div>
</div>
<!-- Pills content -->


@endsection