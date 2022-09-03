<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @if (session()->get('theme') == 1)
  <link rel="stylesheet" href="{{ url('front/theme.css') }}">
  <script src="https://kit.fontawesome.com/187117d8c3.js" crossorigin="anonymous"></script>
  @else
  <link rel="stylesheet" href="{{ url('front/theme.css') }}">
  <script src="https://kit.fontawesome.com/187117d8c3.js" crossorigin="anonymous"></script>
  @endif
  <link rel="stylesheet" href="{{ url('front/checkout.css') }}">
  <link rel="stylesheet" href="{{ url('front/modal.css') }}">
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>  @livewireStyles
  <title>Document</title>
</head>

<body>
  @livewireScripts
