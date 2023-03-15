@extends('layouts.main')

@section('title', 'Login')

@section('content')

    {{--<x-guest-layout>--}}
    <!-- Session Status -->
    {{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

    {{--    <form method="POST" action="{{ route('login') }}">--}}
    {{--        @csrf--}}

    {{--        <!-- Email Address -->--}}
    {{--        <div>--}}
    {{--            <x-input-label for="email" :value="__('Email')" />--}}
    {{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
    {{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
    {{--        </div>--}}

    {{--        <!-- Password -->--}}
    {{--        <div class="mt-4">--}}
    {{--            <x-input-label for="password" :value="__('Password')" />--}}

    {{--            <x-text-input id="password" class="block mt-1 w-full"--}}
    {{--                            type="password"--}}
    {{--                            name="password"--}}
    {{--                            required autocomplete="current-password" />--}}

    {{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
    {{--        </div>--}}

    {{--        <!-- Remember Me -->--}}
    {{--        <div class="block mt-4">--}}
    {{--            <label for="remember_me" class="inline-flex items-center">--}}
    {{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
    {{--                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
    {{--            </label>--}}
    {{--        </div>--}}

    {{--        <div class="flex items-center justify-end mt-4">--}}
    {{--            @if (Route::has('password.request'))--}}
    {{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
    {{--                    {{ __('Forgot your password?') }}--}}
    {{--                </a>--}}
    {{--            @endif--}}

    {{--            <x-primary-button class="ml-3">--}}
    {{--                {{ __('Log in') }}--}}
    {{--            </x-primary-button>--}}
    {{--        </div>--}}
    {{--    </form>--}}
    {{--</x-guest-layout>--}}

    <div class="d-flex justify-content-center mt-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">El. paštas</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required
                       autofocus>
                <label for="password" class="form-label">Slaptažodis</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Prisiminti mane</label>
            </div>
            <div class="mb-3">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        Pamiršai slaptažodį?
                    </a>
                @endif
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn text-light" style="background-color: #48bb78">Prisijungti</button>
            </div>
        </form>
    </div>
@endsection
