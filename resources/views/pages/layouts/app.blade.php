<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- pre loader -->
<div class="pre-loader d-none"></div>
<!-- Head -->

<head>
    @include('pages.layouts.head')

    <!-- Custom CSS -->
    @stack('css')
</head>

<body>
    <div class="dashboard d-flex flex-wrap">
        @if(Route::current()->getName() != 'partnershipInterestForm')
            <!-- Sidebar -->
            @include('pages.layouts.sidebar')
        @endif

        <!-- Content -->
        @yield('content')
    </div>
    <!-- Footer -->
    @include('pages.layouts.script')

    <!-- Custom JS -->
    @stack('js')
</body>

</html>
