@extends('pages.layouts.app')

@section('content')
    <div class="dashboard-details dashboard-header padding-spacing">
        <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
            <h1>Inquires</h1>
            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                <li>
                    <a href="#send-new-invite" data-fancybox id="send_new_invite">Send New Invite</a>
                    <div class="edit-popup fancybox-content send-new-invite" id="send-new-invite" style="display: none;">
                        <div class="title-wrap">
                            <h1>Send new inquire invite</h1>
                        </div>
                        <br>
                        <div class="add-client-form">
                            <form id="addnewInquiryForm" method="POST" action="{{ route('addInquiry') }}">
                                @csrf
                                <ul>
                                    <li class="width-50">
                                        <label for="uname"><b>Name</b></label>
                                        <input type="text" placeholder="Enter name" name="name">
                                    </li>
                                    <li class="width-50">
                                        <label for="uname"><b>Email</b></label>
                                        <input type="text" placeholder="Enter email" name="email">
                                    </li>
                                    <li class="width-100 documents-signed">
                                        <label>Required documentation</label>
                                        <div class="switch-documentation">
                                            <label class="switch">
                                                <input type="checkbox" name="smartflyer_agreement" value="1" checked>
                                                <span class="slider round"></span>
                                            </label>
                                            <div>SmartFlyer Agreement</div>
                                        </div>
                                        <div class="switch-documentation">
                                            <label class="switch">
                                                <input type="checkbox" name="elevate_agreement" value="1" checked>
                                                <span class="slider round"></span>
                                            </label>
                                            <div>Elevate Agreement</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-btn">
                                    <button type="button" class="fancybox-close-button" data-fancybox-close>Cancel</button>
                                    <input type="submit" value="Invite">
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clients-tab-section">
            <div class="clients-tab d-flex flex-wrap justify-content-space-between">
                <ul class="tabs to-do-tab d-flex flex-wrap">
                    <li class="active" rel="tab1"><span>Pending ({{ count($pendingInquires) }})</span></li>
                    <li rel="tab2"><span>Approved ({{ count($approvedInquires) }})</span></li>
                    <li rel="tab3"><span>Rejected ({{ count($rejectedInquires) }})</span></li>
                </ul>
            </div>
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <div class="todo-all-tab">
                        <ul>
                            <li class="width-20 table-label">Name</li>
                            <li class="width-20 table-label">Email</li>
                            <li class="width-20 table-label">Business type</li>
                            <li class="width-20 table-label">Date submitted</li>
                        </ul>
                        @if (count($pendingInquires) > 0)
                            @foreach ($pendingInquires as $pendInq)
                                <ul>
                                    <li class="width-20">
                                        @if (!empty($pendInq->inquiry_details))
                                            <a href="{{ route('viewInquireDetail', $pendInq->id) }}"
                                                class="table-content-bold">{{ $pendInq->name }}</a>
                                        @else
                                            {{ $pendInq->name }}
                                        @endif

                                    </li>
                                    <li class="width-20 table-content">{{ $pendInq->email }}</li>
                                    <li class="width-20 table-content">{{ isset($pendInq->inquiry_details) ? App\ModelsExtended\InquiryDetails::TypeOfBusioness[$pendInq->inquiry_details->type_of_business] : '' }}</li>
                                    <li class="width-20 table-content">{{ convertDateFormatMYD($pendInq->created_at) }}</li>
                                </ul>
                            @endforeach
                        @else
                            <ul>
                                <li class="trip-details-wrap d-flex flex-wrap justify-content-center col-12">
                                    No Inquiry Found Yet!
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div id="tab2" class="tab_content">
                    <div class="todo-all-tab">
                        <ul>
                            <li class="width-20 table-label">Name</li>
                            <li class="width-20 table-label">Email</li>
                            <li class="width-20 table-label">Business type</li>
                            <li class="width-20 table-label">Date submitted</li>
                        </ul>
                        @if (count($approvedInquires) > 0)
                            @foreach ($approvedInquires as $apprInq)
                                <ul>
                                    <li class="width-20">{{ $apprInq->name }}</li>
                                    <li class="width-20 table-content">{{ $apprInq->email }}</li>
                                    <li class="width-20 table-content">{{ isset($apprInq->inquiry_details) ? App\ModelsExtended\InquiryDetails::TypeOfBusioness[$apprInq->inquiry_details->type_of_business] : '' }}</li>
                                    <li class="width-20 table-content">{{ convertDateFormatMYD($apprInq->created_at) }}
                                    </li>
                                </ul>
                            @endforeach
                        @else
                            <ul>
                                <li class="trip-details-wrap d-flex flex-wrap justify-content-center col-12">
                                    No Inquiry Found Yet!
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div id="tab3" class="tab_content">
                    <div class="todo-all-tab">
                        <ul>
                            <li class="width-20 table-label">Name</li>
                            <li class="width-20 table-label">Email</li>
                            <li class="width-20 table-label">Business type</li>
                            <li class="width-20 table-label">Date submitted</li>
                        </ul>
                        @if (count($rejectedInquires) > 0)
                            @foreach ($rejectedInquires as $rejInq)
                                <ul>
                                    <li class="width-20">{{ $rejInq->name }}</li>
                                    <li class="width-20 table-content">{{ $rejInq->email }}</li>
                                    <li class="width-20 table-content">{{ isset($rejInq->inquiry_details) ? App\ModelsExtended\InquiryDetails::TypeOfBusioness[$rejInq->inquiry_details->type_of_business] : '' }}</li>
                                    <li class="width-20 table-content">{{ convertDateFormatMYD($rejInq->created_at) }}
                                    </li>
                                </ul>
                            @endforeach
                        @else
                            <ul>
                                <li class="trip-details-wrap d-flex flex-wrap justify-content-center col-12">
                                    No Inquiry Found Yet!
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/js/intlTelInput.min.js"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-tagsinput.min.js') }}"></script>

    <script>
        jQuery(document).ready(function($) {
            if ($("#addnewInquiryForm").length > 0) {
                $("#addnewInquiryForm").validate({
                    rules: {
                        name: {
                            required: true,
                            maxlength: 300
                        },
                        email: {
                            required: true,
                            email: true,
                        },
                    },
                    messages: {
                        name: {
                            required: "Please enter name",
                        },
                        email: {
                            required: "Please enter email",
                        },
                    },
                    highlight: function(element, errorClass) {
                        $(element).removeClass(errorClass);
                    },
                    errorPlacement: function(error, element) {
                        error.insertAfter(element);
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                })
            }
        });
        $("#send_new_invite").on("click", function() {
            $(".error").remove();
        });
    </script>
@endpush
