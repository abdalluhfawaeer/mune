<!DOCTYPE html>
<html lang="en">

	{{-- lang="en" dir="rtl" direction="rtl" style="direction:rtl;" data-theme="light" --}}
    <head>
		<title>mune</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ url('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<script src="https://kit.fontawesome.com/187117d8c3.js" crossorigin="anonymous"></script>
		<script src="{{ url('plugins/global/plugins.bundle.js') }}"></script>
		@livewireStyles
	</head>
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		@include('layout.side')
