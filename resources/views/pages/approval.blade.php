@extends('layouts.app')

@section('content')
    <!-- Login Form  -->
    <section class="login-form">
        <div class="login-wrap d-flex flex-wrap align-items-center">
            <div class="form-section white ">
                <div class="form-section-inner recovery-password approval-content">
                    <div class="title">
                        <h1>Waiting to approval</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis tempor purus,
                            condimentum hac morbi sit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="right-image">
                <img src="{{ asset('assets/images/login-form-image.png') }}">
            </div>
        </div>
        <div class="footer-content white">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco..
            </p>
        </div>
        </div>
    </section>
@endsection
