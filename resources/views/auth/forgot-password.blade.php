@extends('layouts.app')

@section('content')
    <!-- Login Form  -->
    <section class="login-form">
        <div class="login-wrap d-flex flex-wrap align-items-center">
            <div class="form-section white ">
                <div class="form-section-inner recovery-password">
                    <div class="title">
                        <h1>Recovery Password</h1>
                        <p>We will send you an access code to your registered email so you can change your password.</p>
                    </div>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <ul>
                            <li>
                                <label for="uname"><b>Email</b></label>
                                <input type="email" placeholder="Enter your email" name="email"
                                    required>
                            </li>
                            <li class="submit-btns">
                                <!-- <input type="submit" name="login" value="RECOVERY"> -->
                                <input type="submit" name="recovery" value="SEND ACCESS CODE">
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
        <div class="footer-content white">
        </div>
        </div>
    </section>
@endsection
