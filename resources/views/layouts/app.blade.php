<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="shortcut icon" href="/img/svg/laptop-house-solid.svg" type="image/x-icon">
  <link rel="stylesheet" href="/css/main/bootstrap.css">
  <link rel="stylesheet" href="/css/main/general.css">
  @yield('pagescss')

<title>@yield('title')</title>
</head>
<body>
  @include('inc.header')
  @include('inc.catalog')


  @yield('content')


  @include('inc.adv')

  @include('inc.footer')

<script src="/js/jquery-3.5.1.min.js"></script>
<script src="https://kit.fontawesome.com/534eca2594.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/header.js"></script>
  @yield('pagesjs')
</body>
</html>
