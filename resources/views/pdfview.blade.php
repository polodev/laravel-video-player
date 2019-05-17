
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body>
    <div id="app">
      <pdf-view url="{{$pdf_link}}"></pdf-view>
    </div>
    <script src="{{ asset('js/app.js') }}" ></script>
  </body>
</html>
