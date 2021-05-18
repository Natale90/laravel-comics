<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Comics</title>
    {{-- link to googlefont --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

  </head>
  <body>

    @include('components.header')
    @yield('content')
    @yield('elementDescription')
    @include('components.footer')

  </body>
</html>
