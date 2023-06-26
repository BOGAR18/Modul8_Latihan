<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    body{
        background-color: blue
    }
</style>
<body>
<br><br>
<div class="container-sm my-5">
    <form method="POST" action="{{ route('login') }}">
        @csrf
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-4 border">
            <div class="mb-3 text-center">
                <img src="{{ Vite::asset('resources/images/hexagon-fill.svg') }}" width="50px">
                <h4>Employee Data Master</h4>
            </div>
            <br>
            <hr>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="col-md-12 mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <hr>
                        <br><br>
                        <div class="row">
                            <div class="col-md-12 d-grid">
                            <button type="submit" class="btn btn-outline-primary"><i class="bi-check-circle me-2"></i> Login</button>
                            </div>
                        </div>
                    </div>
            </div>
     </div>
</form>
</div>

