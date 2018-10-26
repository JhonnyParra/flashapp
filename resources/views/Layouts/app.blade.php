<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/app.css" type="text/css" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="js/app.js" type="text/javascript"></script>
  @section('scripts')
  @show
  <title>@yield('page_title')</title>
</head>
<body id="app">
  {{-- loader --}}  
  @component('Components.loader')
  @endcomponent

  {{-- header asset compotent --}}
  @component('Assets.header', ['login' => $login])
  @endcomponent

  {{-- main content of web site :v --}}
  <section class="content no-loaded">
    @section('content')
    @show
  </section>

  {{-- footer asset component --}}
  @component('Assets.footer')
  @endcomponent
</body>
</html>