<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Comics</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>

    @include('components.header')
    @yield('content')
    @include('components.footer')

  </body>
</html>
