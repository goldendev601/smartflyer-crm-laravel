@extends('pages.layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/selectize.default.min.css') }}"/>
    <style>
        .image .file-upload-image {
            height: 200px;
            width: 200px;
            border-radius: 100%;
            position: relative;
            overflow: hidden;
            background-color: #f9f9f9;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: contain;
            margin: 0 auto;
            border: 2px solid #14347d;
            object-fit: cover;
        }

        .image .preview-has-default::after {
            content: "";
            background-image: url(/assets/images/image-review.png);
            background-size: 100% 100%;
            display: inline-block;
            height: 100px;
            width: 100px;
            position: relative;
            color: #e6e6e6;
            top: calc(50% - 3rem);
            z-index: 0;
        }

        .selectize-input {
            border: 1px solid #f5f5f500 !important;
            background: rgb(196 196 196 / 10%) !important;
            border: none !important;
            width: 100% !important;
            padding: 21px 23px !important;
        }

        .selectize-input.focus {
            border-color: none !important;
            outline: 0 !important;
            box-shadow: none !important;
        }


        .switch {
            position: relative;
            display: inline-block;
            width: 36px;
            height: 21px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 14px;
            width: 14px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #14347d;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(14px);
            -ms-transform: translateX(14px);
            transform: translateX(14px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .form-switch {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-switch p {
            margin: 4px 0px;
            font-size: 12px;
            font-weight: 500;
            color: #949494;
        }
    </style>
@endpush
@section('content')
    <div class="dashboard-details dashboard-header padding-spacing">
        <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
            <h1>Settings</h1>
            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                <li>
                    <a href="javascript:void(0)" id="openChangePasswordFrom">Change password</a>
                    <div style="display:none">
                        <div class="trip-details-tasks white" id="openChangePasswordFromView">
                            <h1>Change Password</h1>
                            <div class="dashboard-right">
                                <div class="dashboard-right-wrap m-top-23">
                                    <div class="add-client-form">
                                        <form method="POST" action="{{route('changepassword')}}"
                                              id="changePasswordForm">
                                            @csrf
                                            <ul>
                                                <li class="width-100">
                                                    <label for="first_name"><b>Current password</b></label>
                                                    <div class="input-type-password current_password">
                                                        <input type="password" name="current_password"
                                                               id="current_password">
                                                        <i class="bi bi-eye-slash" id="togglePasswordCurrentPass"></i>
                                                    </div>
                                                </li>
                                                <li class="width-100">
                                                    <label for="last_name"><b>New password</b></label>
                                                    <div class="input-type-password new_password">
                                                        <input type="password" name="new_password" id="new_password">
                                                        <i class="bi bi-eye-slash" id="togglePasswordNewPass"></i>
                                                    </div>
                                                </li>
                                                <li class="width-100">
                                                    <label for="email"><b>Confirm New password</b></label>
                                                    <div class="input-type-password confirm_new_password">
                                                        <input type="password" name="confirm_new_password"
                                                               id="confirm_new_password">
                                                        <i class="bi bi-eye-slash"
                                                           id="togglePasswordConfirnNewPass"></i>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="upload-btns d-flex flex-wrap" style="padding: 50px 44px;">
                                                <div class="add-client-btn buttons">
                                                    <input type="submit" value="Update Password">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="settings-main-information">
            <form method="POST" action="{{route('usersettingupdate')}}" enctype="multipart/form-data"
                  id="userSettingFrom">
                @csrf
                <div class="main-information d-flex flex-wrap">
                    <div class="main-information-left">
                        <div class="add-client-form edit-popup">
                            <h3>Main Information</h3>

                            <ul>
                                <li class="width-100">
                                    <label for="first_name"><b>First Name</b></label>
                                    <input type="text" placeholder="Martin Doe" name="first_name"
                                           value="{{$user->first_name}}">
                                </li>
                                <li class="width-100">
                                    <label for="last_name"><b>Last Name</b></label>
                                    <input type="text" placeholder="Martin Doe" name="last_name"
                                           value="{{$user->last_name}}">
                                </li>
                                <li class="width-100">
                                    <label for="email"><b>Email</b></label>
                                    <input type="email" name="email" placeholder="Email" value="{{$user->email}}"
                                           readonly>
                                </li>
                                <li class="width-100">
                                    <label for="phone"><b>Phone number</b></label>
                                    <input type="tel" name="phone" id="phone" maxlength="20"
                                           placeholder="e.g. +1800001111"
                                           value="{{$user->phone}}">
                                </li>

                                {{--                            TODO: Not working --}}
                                {{--                            <li class="date-section width-100">--}}
                                {{--                                <label for="uname"><b>Birthday</b></label>--}}
                                {{--                                <div class="birthday-dropdown">--}}
                                {{--                                    <div class="month">--}}
                                {{--                                        <select class="user-setting-form-select" name="dobM" id="select_month">--}}
                                {{--                                            <option value="">Select Month</option>--}}
                                {{--                                            @foreach (config('global.month') as $key => $month)--}}
                                {{--                                            <option value="{{ $key }}"--}}
                                {{--                                                {{$user->date_of_birth ? convertDateForFrontend($user->date_of_birth)['dobM'] == $month  ? 'selected' : '' : ''}}>--}}
                                {{--                                                {{ $month }}</option>--}}
                                {{--                                            @endforeach--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="date">--}}
                                {{--                                        <select class="user-setting-form-select" name="dobD" id="select_day">--}}
                                {{--                                            <option value="">Select Day</option>--}}
                                {{--                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}"--}}
                                {{--                                                {{$user->date_of_birth ? convertDateForFrontend($user->date_of_birth)['dobD'] == $i  ? 'selected' : '' : ''}}>--}}
                                {{--                                                {{ $i }}</option>--}}
                                {{--                                                @endfor--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="year">--}}
                                {{--                                        <select class="user-setting-form-select" name="dobY" id="select_year">--}}
                                {{--                                            <option value="">Select Year</option>--}}
                                {{--                                            @for ($i = 1920; $i <= now()->year; $i++) <option value="{{ $i }}"--}}
                                {{--                                                    {{$user->date_of_birth ?  convertDateForFrontend($user->date_of_birth)['dobY'] == $i  ? 'selected' : '' : ''}}>--}}
                                {{--                                                    {{ $i }}--}}
                                {{--                                                </option>--}}
                                {{--                                                @endfor--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div id="showDOBErr" style="display:none">--}}
                                {{--                                        <span class="error">Please enter a--}}
                                {{--                                            valid date of birth</span>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                            </li>--}}
                                <li class="width-100">
                                    <label for="address"><b>Address</b></label>
                                    <textarea name="address" placeholder="Enter address here..."
                                              style="height:120px;">{{ $user->address }}</textarea>
                                </li>
                                <!-- <li class="frequency-section currency">
                                    <label>Default currency</label>
                                    <select class="form-select">
                                        <option>USD</option>
                                        <option>UK</option>
                                        <option>Canada</option>
                                    </select>
                                </li>
                                <li class="frequency-section time-zone">
                                    <label>Time zone</label>
                                    <select class="form-select">
                                        <option>Eastern Standard Time (EST)</option>
                                        <option>Eastern Standard Time (EST) 2</option>
                                        <option>Eastern Standard Time (EST) 3</option>
                                    </select>
                                </li> -->

                            </ul>
                            <div class="upload-btns d-flex flex-wrap">
                                <div class="add-client-btn buttons">
                                    <input type="submit" value="Update User Details">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="main-information-right">
                        <div class="main-information-right-inner">
                            <div class="image">
                                <h3>Photo</h3>
                                <div>
                                    <figure>
                                        <div
                                            class="file-upload-image {{ $user->image_url ? 'preview-no-default' : 'preview-has-default' }}"
                                            style="background-image: url({{$user->image_url}});"></div>
                                    </figure>
                                </div>
                                <div class="photo-edit-btn d-flex flex-wrap">
                                    <div class="remove-btn"><a href="javascript:void(0)"
                                                               onclick="removeUpload()">Remove</a>
                                    </div>
                                    <div class="edit-image-btn">
                                        <input type="text" name="remove-profile-photo" value="no"
                                               class="remove-profile-photo" style="display:none">
                                        <input type="file" name="image_relative_url" class="file-upload-input"
                                               onchange="readURL(this);" style="display:none" accept="image/*"/>

                                        <a href="javascript:void(0)" onclick="OpenFileBrowser()">Change Image</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-information-right-inner" style="padding-top: 15px ">
                            <h5 style="text-align: left">Email notifications</h5>
                            <!-- Checked switch -->
                            {{--@dd($user->userNotification[0]->notification);--}}
                            @foreach($user->userNotification as $userNotification)
                                <div class="form-check form-switch">
                                    <p>{{ $userNotification->notification->label }} </p>
                                    <label class="switch">
                                        <input type="checkbox"
                                               class="set-permission"
                                               name="{{ $userNotification->notification->value }}"
                                               permission="{{ $userNotification->permission }}"
                                               notification-id="{{ $userNotification->id }}"
                                               @if($userNotification->permission == 1) checked @endif>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('assets/js/user-setting-script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/js/intlTelInput.min.js"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>
    <script src="{{ asset('assets/js/selectize.min.js') }}"></script>

    <script>


        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        $(document).on('click', '.set-permission', function () {
            let currentPermission = $(this);
            let permission = $(this).attr('permission');
            let notification_id = $(this).attr('notification-id');

            $.ajax({
                url: '/set-notification-permission',
                type: 'get',
                data: {permission: permission, notification_id: notification_id},
                success: function (response) {
                    if (response.status == 200) {
                        currentPermission.attr('permission', response.permission)
                        Toast.fire({
                            icon: 'success',
                            title: response.message
                        })
                    }
                }
            });

        })


        var telInput = null;
        var checkDOBValidation = false;
        jQuery(document).ready(function ($) {
            telInput = $("#phone");
            telInput.intlTelInput({
                // utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.8/js/utils.js',
                formatOnDisplay: false,
                nationalMode: false,
                // customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                //     console.log(selectedCountryPlaceholder);
                //     return "e.g. " + selectedCountryPlaceholder + '1234567';
                // }
            });
            if ($("#userSettingFrom").length > 0) {
                // Suppose that your method is well defined

                jQuery.validator.addMethod("validatePhone",
                    function (value, element) {
                        var valid;
                        if ($.trim(value).length > 0) {
                            var regx = /[+][0-9]{10,15}/;
                            valid = regx.test(value);
                        } else {
                            valid = true;
                        }
                        return this.optional(element) || valid;
                    }, "Please enter valid phone number"
                );


                $("#userSettingFrom").validate({
                    groups: {
                        validateDOB: "dobD dobM dobY"
                    },
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
                        phone: {
                            required: false,
                            validatePhone: true
                        },
                        address: {
                            required: false,
                            maxlength: 250
                        },
                        image_relative_url: {
                            required: false,
                            extension: "jpg|jpeg|png|PNG|gif"
                        }
                    },
                    messages: {
                        first_name: {
                            required: "Please enter First name",
                        },
                        last_name: {
                            required: "Please enter Last name",
                        },
                        email: {
                            required: "Please enter valid email",
                        },
                        phone: {
                            validatePhone: "Please enter valid phone number",
                        },
                    },
                    highlight: function (element, errorClass) {
                        $(element).removeClass(errorClass); //prevent class to be added to selects
                    },
                    errorPlacement: function (error, element) {
                        if (element.attr("name") == "dobM") {
                            $("#showDOBErr").show();
                        } else if (element.attr("name") == "dobD") {
                            $("#showDOBErr").show();
                        } else if (element.attr("name") == "dobY") {
                            $("#showDOBErr").show();
                        } else {
                            error.insertAfter(element);
                        }
                        console.log(error)
                    },
                    submitHandler: function (element) {
                        if (!checkDOBValidation) {
                            form.submit();
                        }
                    }
                })
            }

        });
        $('#select_day').change(function () {
            var day = $('#select_day').val();
            var month = $('#select_month').val();
            var year = $('#select_year').val();

            if (year != "" && month != "" && day != "") {
                $("#showDOBErr").hide();
                checkDOBValidation = false;
            } else {
                checkDOBValidation = true;
                $("#showDOBErr").show();
            }
        })
        $('#select_month').change(function () {
            var day = $('#select_day').val();
            var month = $('#select_month').val();
            var year = $('#select_year').val();

            if (year != "" && month != "" && day != "") {
                $("#showDOBErr").hide();
                checkDOBValidation = false;
            } else {
                checkDOBValidation = true;
                $("#showDOBErr").show();
            }
        })
        $('#select_year').change(function () {
            var day = $('#select_day').val();
            var month = $('#select_month').val();
            var year = $('#select_year').val();

            if (year != "" && month != "" && day != "") {
                $("#showDOBErr").hide();
                checkDOBValidation = false;
            } else {
                checkDOBValidation = true;
                $("#showDOBErr").show();
            }
        })
        // toastr.info('Are you the 6 fingered man?')

        // changePasswordForm

        jQuery(document).ready(function ($) {
            if ($("#changePasswordForm").length > 0) {
                // Suppose that your method is well defined
                $("#changePasswordForm").validate({
                    rules: {
                        current_password: {
                            required: true,
                            maxlength: 25
                        },
                        new_password: {
                            required: false,
                            maxlength: 25,
                        },
                        confirm_new_password: {
                            required: true,
                            maxlength: 25,
                            equalTo: "#new_password"
                        },
                    },
                    messages: {
                        current_password: {
                            required: "Please enter current password",
                        },
                        new_password: {
                            required: "Please enter new password",
                        },
                        confirm_new_password: {
                            required: "Please enter confirm new password",
                            equalTo: "To confirm, type the new password again"
                        },
                    },
                    highlight: function (element, errorClass) {
                        $(element).removeClass(errorClass); //prevent class to be added to selects
                    },
                    errorPlacement: function (error, element) {
                        if (element.attr("name") == "current_password") {
                            error.insertAfter(".current_password");
                        } else if (element.attr("name") ==
                            "new_password") {
                            error.insertAfter(".new_password");
                        } else if (element.attr("name") == "confirm_new_password") {
                            error.insertAfter(".confirm_new_password");
                        } else {
                            error.insertAfter(element);
                        }
                    },
                    submitHandler: function (element) {
                        form.submit();
                    }
                })
            }
            $("#current_password").keyup(function () {
                if ($(this).val()) {
                    $("#togglePasswordCurrentPass").css("transform", "translateY(-50%)");
                } else {
                    $("#togglePasswordCurrentPass").css("transform", "translateY(-105%)");
                }
            });
            $("#new_password").keyup(function () {
                if ($(this).val()) {
                    $("#togglePasswordNewPass").css("transform", "translateY(-50%)");
                } else {
                    $("#togglePasswordNewPass").css("transform", "translateY(-105%)");
                }
            });
            $("#confirm_new_password").keyup(function () {
                if ($(this).val()) {
                    $("#togglePasswordConfirnNewPass").css("transform", "translateY(-50%)");
                } else {
                    $("#togglePasswordConfirnNewPass").css("transform", "translateY(-105%)");
                }
            });
        });
    </script>
@endpush
