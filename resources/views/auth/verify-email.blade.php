@extends('layouts.app')

@section('content')
    <!-- Login Form  -->
    <section class="login-form">
        <div class="login-wrap d-flex flex-wrap align-items-center">
            <div class="form-section white ">
                <div class="form-section-inner recovery-password recovery-password-validate">
                    <div class="title">
                        <h1>Validate code</h1>
                        <p>We sent a verification email to mat****@gmail.com. </p>
                    </div>
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <ul>
                            <li class="validate-code">
                                <label for="uname"><b>Enter code</b></label>
                                <input type="text" name="gogle_auth_1" maxlength="1" class="validate-code-input"
                                    required>
                                <input type="text" name="gogle_auth_2" maxlength="1" class="validate-code-input"
                                    required>
                                <input type="text" name="gogle_auth_3" maxlength="1" class="validate-code-input"
                                    required>
                                <input type="text" name="gogle_auth_4" maxlength="1" class="validate-code-input"
                                    required>
                                <input type="text" name="gogle_auth_5" maxlength="1" class="validate-code-input"
                                    required>
                                <input type="text" name="gogle_auth_6" maxlength="1" class="validate-code-input"
                                    required>
                            </li>
                            <div class="resend-text">Resend code (60 seconds)</div>
                            <li class="submit-btns validate-btn">
                                <!-- <input type="submit" name="login" value="VALIDATE"> -->
                                {{-- <a href="{{ route('verification.send') }}">VALIDATE</a> --}}
                                <input type="submit" name="validate" value="VALIDATE">
                            </li>

                        </ul>
                    </form>
                </div>
            </div>
            <div class="right-image">
                <img src="{{ asset('assets/images/login-form-image.png') }}">
            </div>
        </div>
        <div class="footer-content white">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
        </div>
        </div>
    </section>
@endsection
