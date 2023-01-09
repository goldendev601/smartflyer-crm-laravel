<header>
    <div class="logo-wrap">
        <div class="logo">
            <a href="{{ route('login') }}"><img src="{{ asset('assets/images/white-logo.svg') }}" alt=""></a>
        </div>
        @if (Route::currentRouteName() != 'login' &&
            Route::currentRouteName() != 'welcome' &&
            Route::currentRouteName() != 'approval' &&
            Route::currentRouteName() != 'viewProfilePassword')
            <div class="back-to-login">
                <a href="{{ route('login') }}">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>Back to login
                </a>
            </div>
        @endif

    </div>
</header>
