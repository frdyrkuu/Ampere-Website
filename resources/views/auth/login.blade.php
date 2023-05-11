@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div
                    class="mx-auto bg-gradient-to-r from-yellow-200 to-orange-300  pb-10 rounded-2xl p-4 shadow-2xl w-full lg:w-3/4">

                    <section class="flex  justify-center flex-row items-center gap-4 sm:mt-20 mt-10 mb-10">

                        <article class="ml-0 lg:ml-20 md:w-full">
                            <h2
                                class="text-2xl font-semibold md:text-4xl text-black text-center md:text-left animate-reveal w-full">
                                <span class="text-orange-500 font-extrabold">ACS PRO-TECH</span> <br> Login Form
                            </h2>
                            <h3
                                class="font-['Poppins'] text-lg font-thin text-gray-600 text-center md:text-left animate-reveal-x">
                                <br>
                                Securely log in to your
                                account
                            </h3>
                            <br>
                        </article>

                        <div class="w-3/4 sm:w-6/12 animate-reveal">
                            <img class="w-11/12 m-auto sm:m-none object-cover" src="image/bulb-login.png" alt="burger">
                        </div>
                    </section>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit"
                                        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-6 rounded">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
