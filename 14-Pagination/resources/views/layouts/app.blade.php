<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body>
    @yield('content')
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>