<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @if (session()->get('color') == 'Light')
  <link rel="stylesheet" href="{{ url('front/light/checkout.css') }}">
  <link rel="stylesheet" href="{{ url('front/light/theme.css') }}">
  @else
  <link rel="stylesheet" href="{{ url('front/dark/checkout_dark.css') }}">
  <link rel="stylesheet" href="{{ url('front/dark/theme_dark.css') }}">
  @endif
  <link href="{{ asset('storage/' . session()->get('img')) }}" rel="icon">
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="https://kit.fontawesome.com/187117d8c3.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>  @livewireStyles
  <title>{{ session()->get('name') }}</title>
</head>

<body>
  @livewireScripts
<div>
  @livewire('front.front-checkout',['name'=>$name,'id'=>$id])
</div>