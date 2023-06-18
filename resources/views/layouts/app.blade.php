<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet">
    @stack('extra_style')
<style>
.hidden-block a{
  color: #eee;
  text-decoration: none;
}
.navbar-laravel {
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
}

a {
  color: salmon;
}
</style>
</head>
<body>
    <div id="app">
      @include('layouts.partials.navbar')

        <main class="py-4">
            <div class='{{ config('global.container_class') }} my-2'>
                @include('partials/errors')
                @include('partials/message')
                @yield('content')
            </div>
        </main>
    </div>
<div class="hidden-block">
    <a href="/series-hidden">Series-Hidden</a>
</div>
<script src="{{ asset('js/app.js') }}" ></script>
<script src="{{ asset('js/main.js') }}"></script>
@stack('extra_script')
</body>
</html>
