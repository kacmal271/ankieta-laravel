<?php

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Layouts parent
 */

?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  @yield('head')
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- favicon -->
  <link rel='icon' href='{{ config('path.url.storage.graphics.graphics') . '/favicon_64x64.ico' }}' />

  {{-- csrf token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  <!-- fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="bi-body">

  @if ( ! session()->exists("localization.isSet"))

    <livewire:language-chooser />

  @endif

  {{-- bi-container: not working with Inertia React --}}

  <div class="bi-overflow-auto bi-vh-100 bi-background-alt bi-background-image {{-- bi-container --}}">

    @yield('content')

  </div>

</body>

</html>
