<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'AutoRent'))</title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Compiled and minified CSS and JS -->

    <link href="{{ URL::asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <script type="module" src="{{asset('/js/mano.js')}}"></script>
</head>
<body>
<div class="main_grid lighttolightgreen">
    @include('layouts.header')
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="message hidden">{{ $error }}</div>
            @endforeach
        @endif
        @yield('content', 'Default content')
    </div>
    <br>
    @include('layouts.footer')
</div>

<script src="{{asset('/js/jquery-3.6.4.min.js')}}"></script>
<script src="{{URL::asset('bootstrap/js/bootstrap.bundle.js')}}"></script>

</body>
</html>
