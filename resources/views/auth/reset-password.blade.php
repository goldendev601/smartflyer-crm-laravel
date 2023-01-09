@extends('layouts.app')

@section('content')
    <!-- Login Form  -->
    <section class="login-form">
        <div class="login-wrap d-flex flex-wrap align-items-center">
            <div class="form-section white ">
                <div class="form-section-inner recovery-password">
                    <div class="title">
                        <h1>Set new password</h1>
                        <p>We will send you an access code to your registered email so you can change your password.</p>
                    </div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <ul>
                            <li>
                                <label for="uname"><b>Password</b></label>
                                <input type="password" placeholder="Enter your new password" name="password" autocomplete="off"
                                    required id="password">
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </li>
                            <li>
                                <label for="uname"><b>Confirm Password</b></label>
                                <input type="password" placeholder="Re-enter your new password" name="password_confirmation"
                                    autocomplete="off" required id="password-Confirm">
                                <i class="bi bi-eye-slash" id="togglePassword-Confirm"></i>
                            </li>
                            <ul class="password-generator">
                                <li><i class="bi bi-check2"></i> Your password must be at least eight characters</li>
                                <li><i class="bi bi-check2"></i> Must contain at least one digit.</li>
                                <li><i class="bi bi-check2"></i> Must contain at least one symbol.</li>
                            </ul>
                            <li class="submit-btns">
                                <input type="submit" name="login" value="SET NEW PASSWORD">
                            </li>
                        </ul>
                        <input type="hidden" name="token" value="{{ $token }}" />
                        <input type="hidden" name="email" value="{{ $email }}" />
                    </form>
                    @if($errors->any())
                    {!! implode('', $errors->all('<div class="not-open">:message</div>')) !!}
                    @endif
                </div>
            </div>
            <div class="right-image">
                <img src="{{ asset('assets/images/login-form-image.png') }}">
            </div>
        </div>
        <div class="footer-content white">
        </div>
        </div>
    </section>
@endsection
