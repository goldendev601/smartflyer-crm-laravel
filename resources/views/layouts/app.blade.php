<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Head -->

<head>
    @include('layouts.head')
    <!-- Custom CSS -->
    @stack('css')
</head>

<body class="login">
    <!-- Header -->
    @include('layouts.header')

    <!-- Content -->
    @yield('content')

    <!-- Script -->
    @include('layouts.script')

    <!-- Custom JS -->
    @stack('js')
</body>

</html>