@extends('layouts.app')

@section('content')
    <!-- Login Form  -->
    <section class="login-form profile-complete">
        <div class="login-wrap d-flex flex-wrap align-items-center">
            <div class="form-section white ">
                <div class="form-section-inner">
                    <h1>Thank You! <br>Your profile is complete.</h1>
                    <div class="content">
                        <p>We will be in touch as soon as we finished reviewing all the information.</p>
                        <p>Here is a summary of your documents uploaded. We will send you a copy if your signed documents to
                            your email.</p>
                    </div>
                    <div class="uploaded-documentation">
                        <div class="documentation pdf-download">
                            <h3>Uploaded documentation</h3>
                            <ul>
                                <li><a href="#">PDF</a>vaccinationcard.pdf</li>
                                <li><a href="#">PDF</a>passport.pdf</li>
                            </ul>
                        </div>
                        <div class="documentation document-file">
                            <h3>Signed</h3>
                            <ul>
                                <li><a href="#">DOC</a>SmartFlyer Agreement</li>
                                <li><a href="#">DOC</a>Personal Liability</li>
                                <li><a href="#">DOC</a>Privacy agreement</li>
                                <li><a href="#">DOC</a>Terms of Service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-image">
                <img src="{{ asset('assets/images/profile-complete.png') }}">
            </div>
        </div>

    </section>
@endsection
