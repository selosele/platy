<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @if ($__env->hasSection('title'))
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
  @else
    <title>{{ env('APP_NAME') }}</title>
  @endif
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  
  @include('layout.header')
 
  <main class="main">
    <div class="container">
      @if ($__env->hasSection('title'))
        <h1 class="page-title">@yield('title')</h1>
      @endif

      @yield('content')
    </div>
  </main>

  @include('layout.footer')

  @vite('resources/js/app.js')
  @stack('js')

</body>
</html>