<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('page_title')</title>
</head>
<body>
  {{-- header asset compotent --}}
  @component('Assets.header')
  @endcomponent

  {{-- main content of web site :v --}}
  @section('content')
  @show

  {{-- footer asset component --}}
  @component('Assets.footer')
  @endcomponent
</body>
</html>