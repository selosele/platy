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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  @vite('resources/js/app.js')
  @stack('js')

</body>
</html>