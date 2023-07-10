@extends('layouts.app')

@section('content')
    <section class="xl:mt-20">
        <div class="flex flex-col items-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-orange-500 flex items-center mb-6 text-2xl font-bold">
                        <img class="w-16 h-16 mx-auto" src="image/icon.png" alt="logo">
                    </h1>
                    <h1 class="text-orange-500 text-xl font-bold leading-tight tracking-tight md:text-2xl">
                        Create a account
                    </h1>
                    {{-- FORM HERE --}}
                    <form method="POST" class="space-y-4 md:space-y-6" action="{{ route('register') }}">
                        @csrf

                        {{-- NAME --}}
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="Juan Dela Cruz" value="{{ old('name') }}" required autocomplete="name"
                                autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- END NAME --}}

                        {{-- EMAIL --}}
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="name@email.com" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- END EMAIL --}}


                        {{-- PASSWORD --}}
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="form-control @error('password') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- END PASSWORD --}}

                        {{-- PASSWORD CONFIRM --}}
                        <div>
                            <label for="password-confirm"
                                class="block mb-2 text-sm font-medium text-gray-900">Confirm
                                password</label>
                            <input type="password" name="password_confirmation" id="password-confirm"
                                placeholder="••••••••"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                required autocomplete="new-password">
                        </div>
                        {{-- END PASSWORD CONFIRMATION --}}


                        <button type="submit"
                            class="w-full text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create
                            an account</button>
                        <p class="text-sm font-light text-gray-500">
                            Already have an account? <a href="{{ route('login') }}"
                                class="font-medium text-blue-600 hover:underline">Login here</a>
                        </p>
                    </form>
                    {{-- END FORM --}}
                </div>
            </div>
        </div>
    </section>
@endsection
