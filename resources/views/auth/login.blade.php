@extends('auth.layout')
@section('content')
<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{asset('/assets/backend/img/logo.png')}}" alt="">
                                <span class="d-none d-lg-block">Admin Panel</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your username & password to login</p>
                                </div>

                                <form class="row g-3 needs-validation" novalidate method="POST"
                                      action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12 mb-2">
                                        <label for="yourEmail" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">
                                                <i class="bx bx-user"></i>
                                            </span>
                                            <input type="email" name="email"
                                                   class="form-control"
                                                   id="yourEmail"
                                                   value="{{ old('email') }}"
                                                   required
                                                   autocomplete="email"
                                                   autofocus
                                            >
                                            <div class="invalid-feedback">Please enter your email.
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                    <div class="col-12 mb-2">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword"
                                               required>
                                        <div class="invalid-feedback">Please enter your password!
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-12 mb-2 mt-2">
                                        <button class="btn btn-success w-100" type="submit" name="btnLogin">Login
                                        </button>
                                    </div>
                                        <div class="row mt-3">
                                    <div class="col">
                                            <a class="btn btn-sm btn-outline-primary w-100"  href="/register">Create an
                                                account</a>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div class="col">
                                            <a class="btn btn-sm btn-outline-primary w-100" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    @endif</div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->


@endsection
