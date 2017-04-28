<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas Website - @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/tugasWeb.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/webs.png') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" type="text/css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
@include('templates.header')

	@yield('content')

@include('templates.footer')
</body>

@yield('js')
<script src="{{asset ('js/footer-tugasWeb.js')}}"></script>

</html>
