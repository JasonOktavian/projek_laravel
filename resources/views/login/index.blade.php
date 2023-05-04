@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6 card p-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            @if (session()->has('success'))
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            @endif
          </div>
        <main class="form-signin w-100 m-auto">
            <img class="mb-4 rounded mx-auto d-block" src="/img/logo.jpg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>
            <form >
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-2">Not Registered? <a href="/register">Click Here!</a></small>
          </main>
    </div>
</div>
@endsection
