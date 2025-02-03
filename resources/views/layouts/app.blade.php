<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('auth.includes.header')
</head>
<body>
  @include('auth.includes.navbar')
  @include('auth.includes.sidebar')

  @yield('content')

  @include('auth.includes.footer')
  @include('auth.includes.script')
</body>
</html>
