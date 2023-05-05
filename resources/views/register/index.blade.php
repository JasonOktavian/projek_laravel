@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6 card p-3">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <main class="form-registration w-100 m-auto">
            <img class="mb-4 rounded mx-auto d-block" src="/img/logo.jpg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal text-center">Registrasion Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name')
                        is-invalid
                    @enderror" name="name" id="name" placeholder="Full Name" required value="{{ old('name') }}">
                    <label for="name">Full Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror

                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username')
                    is-invalid
                    @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror
                </div>

              <div class="form-floating">
                <input type="email" class="form-control @error('email')
                is-invalid
                @enderror" name="email" id="email" placeholder="name@example.com" required required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password')
                is-invalid
                @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                    @enderror
              </div>
              <button class="w-100 btn btn-lg btn-outline-dark mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-2">Already Registered? <a href="/login">Click Here!</a></small>
          </main>
    </div>
</div>
@endsection
