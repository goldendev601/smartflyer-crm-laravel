@extends('pages.layouts.app')

@section('content')
    <div class="dashboard-details dashboard-header padding-spacing">
        <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
            <a href="{{ route('inquires') }}" class="navigation-txt">
                <img src="{{ asset('assets/images/arrow-left.png') }}" class="navigation-icon-img">
                Back
            </a>
            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                <li>
                    <a href="#reject-application" class="detail-page-btn" data-fancybox>Reject</a>
                    <div class="edit-popup fancybox-content send-new-invite" id="reject-application" style="display: none;">
                        <div class="title-wrap">
                            <h1>Reject application?</h1>
                        </div>
                        <br>
                        <div class="add-client-form">
                            <form id="addnewTodoForm" method="post"
                                action="{{ route('approveOrRejectInquiry', ['type' => 'reject', 'id' => $inquiryDetails->inquiry_id]) }}">
                                @csrf
                                <ul>
                                    <li class="width-100 documents-signed">
                                        <label>Please review details before confirming rejection.</label>
                                    </li>
                                </ul>
                                <div class="form-btn">
                                    <button type="button" class="fancybox-close-button" data-fancybox-close>Cancel</button>
                                    <input type="submit" value="Reject">
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#approve-application" class="detail-page-btn" data-fancybox>Approve</a>
                    <div class="edit-popup fancybox-content send-new-invite" id="approve-application"
                        style="display: none;">
                        <div class="title-wrap">
                            <h1>Approve application?</h1>
                        </div>
                        <br>
                        <div class="add-client-form">
                            <form id="addnewTodoForm" method="post"
                                action="{{ route('approveOrRejectInquiry', ['type' => 'approve', 'id' => $inquiryDetails->inquiry_id]) }}">
                                @csrf
                                <ul>
                                    <li class="width-100 documents-signed">
                                        <label>Please review details before confirming approval.</label>
                                    </li>
                                </ul>
                                <div class="form-btn">
                                    <button type="button" class="fancybox-close-button" data-fancybox-close>Cancel</button>
                                    <input type="submit" value="Approve">
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clients-tab-section detail-tab-section">
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <div class="todo-all-tab">
                        <ul>
                            <h2>Application for Elevate Partnership</h2>
                        </ul>
                        <ul>
                            <li class="detail-content-bold">Main Information</li>
                            <li class="detail-content-wrapper">
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Full Name</h3>
                                    <h3 class="detail-info">{{ $inquiryDetails->name }}</h3>
                                </div>
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Email</h3>
                                    <h3 class="detail-info">{{ $inquiryDetails->email }}</h3>
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li class="detail-content-bold">Type of Business</li>
                            <li class="detail-content-wrapper">
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Type of Business</h3>
                                    <h3 class="detail-info">{{ $typeOfBusioness }}</h3>
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li class="detail-content-bold">References</li>
                            <li class="detail-content-wrapper">
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Worked With Smartflyer Advisors?</h3>
                                    <h3 class="detail-info">{{ $workedWithSF }}</h3>
                                </div>
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Outside References</h3>
                                    <h3 class="detail-info">{{ $inquiryDetails->other_travel_agency ?? '' }}</h3>
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li class="detail-content-bold">Commissions</li>
                            <li class="detail-content-wrapper">
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Commission?</h3>
                                    <h3 class="detail-info">{{ isset($inquiryDetails) ? $inquiryDetails->commission_percentage_offer .'%' : '' }}
                                    </h3>
                                </div>
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Commision Methods</h3>
                                    <h3 class="detail-info">
                                        {{ $commissionHandled }}
                                    </h3>
                                </div>
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Property Booking Methods</h3>
                                    <h3 class="detail-info">
                                        {{ $inquiryDetails->current_booking_way ?? '' }}
                                    </h3>
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li class="detail-content-bold">Virtuoso</li>
                            <li class="detail-content-wrapper">
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Member?</h3>
                                    <h3 class="detail-info">{{ $memberOfVirtuoso }}</h3>
                                </div>
                            </li>
                        </ul>
                        <ul>
                            <li class="detail-content-bold">Marketing</li>
                            <li class="detail-content-wrapper">
                                <div class="detail-content-container">
                                    <h3 class="detail-label">Interested?</h3>
                                    <h3 class="detail-info">{{ $interestedInLearning }}</h3>
                                </div>
                            </li>
                        </ul>
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
@endpush
