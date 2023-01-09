@extends('layouts.app')

@section('content')
    <!-- Login Form  -->
    <section class="login-form login-form-otp">
        <div class="login-wrap d-flex flex-wrap align-items-center">
            <div class="form-section white ">
                <div class="form-section-inner recovery-password recovery-password-validate">
                    <div class="title">
                        <h1>Enter password to view profile</h1>
                    </div>
                    <form>
                        <ul>
                            <li class="validate-code">
                                <input type="text" name="gogle_auth_1" maxlength="1" class="validate-code-input" required>
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
                                <input type="text" name="gogle_auth_7" maxlength="1" class="validate-code-input"
                                    required>
                                <input type="text" name="gogle_auth_8" maxlength="1" class="validate-code-input"
                                    required>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-content white">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
        </div>
        </div>
    </section>
@endsection
