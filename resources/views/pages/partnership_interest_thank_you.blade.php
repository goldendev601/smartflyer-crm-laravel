<!DOCTYPE html>
<html>
@extends('pages.layouts.app')

@section('content')

    <head>
        <title>Smartflyer Crm</title>
        <link href="{{ asset('assets/css/thank-you-page.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div class="thankyou-main-wrap">
            <div class="logo">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('assets/images/logo-blue.png') }}">
                </a>
            </div>
            <div class="thank-you-sec">
                <h1>Thank You!<br>Your submission is complete.</h1>
                <div class="content">Thank you for your interest in SmartFlyer Elevate, our premier partnership program.
                    Please complete this form in order to be considered for membership. Our team will analyze your responses
                    and determine wheter your business is appropriately aligned with the mission/vision of the SmartFlyer
                    Elevate program.</div>
                <div class="image-wrap">
                    <img src="{{ asset('assets/images/thankyou-img.png') }}">
                </div>
            </div>
        </div>
    </body>
@endsection

</html>
