@extends('layouts.app')

@section('content')
<!-- Login Form  -->
<section class="login-form">
    <div class="login-wrap d-flex flex-wrap align-items-center">
        <div class="form-section white ">
            <div class="form-section-inner">
                <h1>Welcome!</h1>

                @if($errors->any())
                {!! implode('', $errors->all('<div class="not-open">:message</div>')) !!}
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <ul>
                        <li>
                            <label for="uname"><b>Email</b></label>
                            <input type="email" class="{{ $errors->any() ? 'error-input' : ''  }} login-info" placeholder="Enter your email" name="email" autocomplete="nope"
                                required>
                        </li>
                        <li>
                            <label for="psw">
                                <b>Password</b>
                                <div class=""><a href="{{ route('password.request') }}">Forgot my password</a></div>
                            </label>
                            <div class="input-type-password">
                                <input type="password" class="{{ $errors->any() ? 'error-input' : ''  }}  login-info" placeholder="Enter your password" name="password"
                                    autocomplete="nope" required id="password">
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </div>


                        </li>
                        <li class="submit-btns">
                            @if($errors->any())
                                <input type="submit" name="login" value="login" class="disabled-btn" disabled id="login-button">
                            @else
                                <input type="submit" name="login" value="login"  id="login-button">
                            @endif
                            <span>or</span>
                            <a href="{{ route('register') }}">create account</a>
                        </li>
                    </ul>
                </form>
                @if (\Session::has('status'))
                    <div class="not-open">{{ \Session::get('status') }}</div>
                @endif
            </div>
        </div>
        <div class="right-image">
            <img src="{{ asset('assets/images/login-form-image.png') }}">
        </div>
    </div>
{{--    <div class="footer-content white">--}}
{{--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>--}}
{{--    </div>--}}
    </div>
</section>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        $('.login-info').change(function() {
            $('#login-button').removeClass('disabled-btn');
            $('#login-button').prop('disabled', false);
        });
    });
</script>
@endpush