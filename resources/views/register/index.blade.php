@extends('layouts.main')

@section('container')
{{-- <div class="row justify-content-center">
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
            <small class="d-block text-center mt-2">already Registered? <a href="/login">Click Here!</a></small>
          </main>
    </div>
</div> --}}


<section class="h-screen">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    <div class="h-full">
      <!-- Left column container with background-->
      <div
        class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">
        <div
          class="shrink-1 mb-12 grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12">
          <img
            src="img/logo.png"
            class="w-full"
            alt="img/logovz.png" />
        </div>


        <!-- Right column container -->
        <div class="mb-12 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
          <form action="/register" method="POST">
            @csrf
            {{-- Fullname --}}
            <div class="relative mb-6" data-te-input-wrapper-init>
                <label
                  for="name"
                  class="text-black dark:text-white"
                  >Fullname
                </label>
              <input
                type="text"
                class="peer block min-h-[auto] w-full rounded border-1 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 @error('name')
                is-invalid
                @enderror"
                name="name" id="name" placeholder="Full Name" autofocus required required value="{{ old('name') }}" />
              @error('name')
                <div class="text-red-600">
                    {{ $message }}
                </div>
             @enderror
            </div>
            {{-- Name --}}
            <div class="relative mb-6" data-te-input-wrapper-init>
                <label
                  for="username"
                  class="text-black dark:text-white"
                  >Username
                </label>
              <input
                type="Text"
                class="peer block min-h-[auto] w-full rounded border-1 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 @error('username')
                is-invalid
                @enderror"
                name="username" id="username" placeholder="Username" autofocus required required value="{{ old('username') }}" />
              @error('username')
                <div class="text-red-600">
                    {{ $message }}
                </div>
             @enderror
            </div>
            <!-- Email input -->
            <div class="relative mb-6" data-te-input-wrapper-init>
                <label
                  for="email"
                  class="text-black dark:text-white"
                  >Email address
                </label>
              <input
                type="email"
                class="peer block min-h-[auto] w-full rounded border-1 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 @error('email')
                is-invalid
                @enderror"
                name="email" id="email" placeholder="name@gmail.com" autofocus required required value="{{ old('email') }}" />
              @error('email')
                <div class="text-red-600">
                    {{ $message }}
                </div>
             @enderror
            </div>

            <!-- Password input -->
            <div class="relative mb-6" data-te-input-wrapper-init>
                <label
                  for="password"
                  class="text-black dark:text-white"
                  {{-- class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary" --}}
                  >Password
                </label>
              <input
                type="password"
                class="peer block min-h-[auto] w-full rounded border-1 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0 @error('password')
                is-invalid
                @enderror"
                name="password" id="password" required
                placeholder="Password" />
              @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

             @enderror
            </div>

            <div class="mb-6 flex items-center justify-between">
            </div>

            <!-- Login button -->
            <div class="text-center lg:text-left">
              <button
                type="submit"
                class="inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                data-te-ripple-init
                data-te-ripple-color="light">
                Register
              </button>

              <!-- Register link -->
              <p class="mb-0 mt-2 pt-1 text-sm font-semibold">
                Already Registered?
                <a
                  href="/login"
                  class="text-danger transition duration-150 ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700"
                  >Click Here</a
                >
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
