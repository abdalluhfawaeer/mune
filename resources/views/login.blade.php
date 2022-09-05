<!DOCTYPE html>
<html lang="en">

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
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <style>
            body {
                /* background-image: url('media/bg4.jpg'); */
                background-color: #a8e842;
            }
        </style>
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <div class="d-flex flex-column">
                    <a href="/" class="mb-7">
                        <img alt="Logo" src="{{ url('mf_logo.png') }}" width="500"/>
                    </a>
                </div>
            </div>
            <div class="d-flex flex-center w-lg-50 p-10">
                <div class="card rounded-3 w-md-550px">
                    <div class="card-body p-10 p-lg-20">
                        <form class="form w-100" action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                                <div class="text-gray-500 fw-semibold fs-6">Menu Face</div>
                            </div>
                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Email" name="email" autocomplete="off"
                                    class="form-control bg-transparent" />
                                    @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                            </div>
                            <div class="fv-row mb-3">
                                <input type="password" placeholder="Password" name="password" autocomplete="off"
                                    class="form-control bg-transparent" />
                                    @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                            </div>
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                <a href="/metronic8/demo1/../demo1/authentication/layouts/creative/reset-password.html"
                                    class="link-primary">Forgot Password ?</a>
                            </div>
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <span class="indicator-label">Sign In</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('layout.footer')
