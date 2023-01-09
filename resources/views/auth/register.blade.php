@extends('layouts.app')
@push('css')
{{--<link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}" />--}}
<link rel="stylesheet" href="{{ asset('assets/js/intl-tel-input-17.0.19/build/css/intlTelInput.css') }}" />
<style>
.intl-tel-input .country-list, span.iti__country-name {
    color: #000!important;
}
div.iti.iti--allow-dropdown.iti--separate-dial-code{
    width: 100%!important;
}

.intl-tel-input .selected-flag .iti-arrow {

    border-top: 4px solid #ffffff !important;
}




</style>
@endpush
@section('content')
<!-- Login Form  -->
<section class="login-form">
    <div class="login-wrap d-flex flex-wrap align-items-center">
        <div class="form-section white create-account-form">
            <div class="form-section-inner recovery-password">
                <div class="title">
                    <h1>Create account</h1>
                    <p>Welcome to SmartFlyer! Please enter your information below. This will allow you to manage your clients and access the dashboard.</p>
                </div>
                <form method="POST" action="{{ route('registerStepOne') }}" id="registrationFirstStepForm">
                    @csrf
                    <ul>
                        <li>
                            <label for="uname"><b>First Name</b></label>
                            <input type="text" placeholder="Enter your first name" name="first_name" autocomplete="off"
                                value="{{old('first_name')}}">
                        </li>
                        <li>
                            <label for="uname"><b>Last Name</b></label>
                            <input type="text" placeholder="Enter your last name" name="last_name" autocomplete="off"
                                value="{{old('last_name')}}">
                        </li>
                        <li>
                            <label for="email"><b>Email</b></label>
                            <input type="email" placeholder="Enter your Email" name="email" autocomplete="off"
                                value="{{old('email')}}">
                        </li>
                        <li>
                            <label for="psw">Password</label>
                            <div class="input-type-password-register">
                                <input type="password" placeholder="Enter your password" name="password"
                                    autocomplete="off" id="password">
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </div>


                        </li>
                        <li>
                            <label for="Address"><b>Address</b></label>
                            <input type="text" placeholder="Enter your Address" name="address" autocomplete="off"
                                value="{{old('address')}}">
                        </li>
                        <li>
                            <label for="Phone Number"><b>Phone Number</b></label>
                            <input type="tel" maxlength="20" placeholder="e.g. 800001111" name="phone_input" id="phone"
                                value="{{old('phone_input')}}" autocomplete="off" required>
                            <input type="hidden" name="phone"  value="{{old('phone')}}">
                        </li>
                        <li class="submit-btns next-step">
                            <input type="submit" name="next-step" value="CONTINUE">
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

@push('js')
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>
<script src="{{ asset('assets/js/intl-tel-input-17.0.19/build/js/intlTelInput.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/js/intlTelInput.min.js"></script>--}}
<script>
var telInput = null;
jQuery(document).ready(function($) {
    telInput = intlTelInput($("#phone")[0],{
        // utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.8/js/utils.js',
        formatOnDisplay: false,
        nationalMode: false,
        separateDialCode: true,
        // customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
        //     console.log(selectedCountryPlaceholder);
        //     return "e.g. " + selectedCountryPlaceholder + '1234567';
        // }
    });
    if ($("#registrationFirstStepForm").length > 0) {

        jQuery.validator.addMethod("validatePhone",
            function(value, element) {
                var testVal = value.indexOf('+') >= 0 ? value : '+' + telInput.getSelectedCountryData().dialCode + value;
                $('[name="phone"]').val(testVal);
                var valid;
                if ($.trim(testVal).length > 0) {
                    var regx = /[+][0-9]{10,15}/;
                    valid = regx.test(testVal);
                } else {
                    valid = true;
                }
                return this.optional(element) || valid;
            }, "Please enter valid phone number"
        );

        $("#registrationFirstStepForm").validate({
            rules: {
                first_name: {
                    required: true,
                    maxlength: 250
                },
                last_name: {
                    required: true,
                    maxlength: 250
                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 250
                },
                password: {
                    required: true,
                    maxlength: 250
                },
                phone_input: {
                    required: false,
                    validatePhone: true
                },
                address: {
                    required: false,
                    maxlength: 250
                },

            },
            messages: {
                first_name: {
                    required: "Please enter First name",
                },
                last_name: {
                    required: "Please enter Last name",
                },
                email: {
                    required: "Please enter valid email address",
                },
                password: {
                    required: "Please enter password",
                },
                phone_input: {
                    validatePhone: "Please enter valid phone number",
                },
            },
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass); //prevent class to be added to selects
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "password") {
                    error.insertAfter(".input-type-password-register");

                }
                else if (element.attr("name") == "phone_input") {
                    error.insertAfter("div.iti.iti--allow-dropdown");
                }
                else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        })
    }
    $("#password").keyup(function() {
        if ($(this).val()) {
            $("#togglePassword").css("transform", "translateY(-50%)");
        } else {
            $("#togglePassword").css("transform", "translateY(-105%)");
        }

    });
});
</script>
@endpush
