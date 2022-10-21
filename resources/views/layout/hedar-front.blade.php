<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @if (session()->get('color') == 'Light')
  <link rel="stylesheet" href="{{ url('front/light/theme.css') }}">
  <link rel="stylesheet" href="{{ url('front/light/checkout.css') }}">
  <link rel="stylesheet" href="{{ url('front/light/modal.css') }}">
  @elseif (session()->get('color') == 'Navy')
  <link rel="stylesheet" href="{{ url('front/navy/theme_navy.css') }}">
  <link rel="stylesheet" href="{{ url('front/navy/checkout_navy.css') }}">
  <link rel="stylesheet" href="{{ url('front/navy/modal_navy.css') }}">
  @elseif (session()->get('color') == 'Yellow')
  <link rel="stylesheet" href="{{ url('front/yellow/theme_yellow.css') }}">
  <link rel="stylesheet" href="{{ url('front/yellow/checkout_yellow.css') }}">
  <link rel="stylesheet" href="{{ url('front/yellow/modal_yellow.css') }}">
  @elseif (session()->get('color') == 'Red')
  <link rel="stylesheet" href="{{ url('front/red/theme_red.css') }}">
  <link rel="stylesheet" href="{{ url('front/red/checkout_red.css') }}">
  <link rel="stylesheet" href="{{ url('front/red/modal_red.css') }}">
  @elseif (session()->get('color') == 'Blue')
  <link rel="stylesheet" href="{{ url('front/blue/theme_blue.css') }}">
  <link rel="stylesheet" href="{{ url('front/blue/checkout_blue.css') }}">
  <link rel="stylesheet" href="{{ url('front/blue/modal_blue.css') }}">
  @else
  <link rel="stylesheet" href="{{ url('front/dark/theme_dark.css') }}">
  <link rel="stylesheet" href="{{ url('front/dark/checkout_dark.css') }}">
  <link rel="stylesheet" href="{{ url('front/dark/modal_dark.css') }}">
  @endif
  <link href="{{ asset('storage/' . session()->get('img')) }}" rel="icon">
  <script src="https://kit.fontawesome.com/187117d8c3.js" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>  
  @livewireStyles
  <title>{{ session()->get('name') }}</title>
</head>

<body>
  @livewireScripts
