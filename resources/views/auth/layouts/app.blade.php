<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="/img/svg/laptop-house-solid.svg" type="image/x-icon">
  <link rel="stylesheet" href="/css/main/bootstrap.css">
  <link rel="stylesheet" href="/css/main/jquery.fancybox.min.css">
  <link rel="stylesheet" href="/css/auth/header.css">
  @yield('admin-css')

<title>@yield('title-admin')</title>
</head>
<body>
  @include('auth.inc.header')
<section class="page-content p-2 section" id="content">
<button id="sidebarCollapse" type="button" class="btn m-0 mt-3 mb-auto"><div class="animated-icon2 contedside open"><span></span><span></span><span></span><span></span></div></button>

  @yield('content-admin')

<section>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="https://kit.fontawesome.com/534eca2594.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/header.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
@yield('pagesjs')
</body>
</html>
