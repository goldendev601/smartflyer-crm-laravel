@extends('pages.layouts.app')

@section('content')
    <div class="partnership-interest-mian-wrap">
        <div class="logo">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('assets/images/logo-blue.png') }}">
            </a>
        </div>
        <div class="dashboard-details dashboard-header padding-spacing partnership-interest-form">

            <div class="partnership-interest-wrap">

                <h1>Elevate Partnership Interest Form</h1>
                <p>Thank you for your interest in SmartFlyer Elevate, our premier partnership program. Please complete this
                    form
                    in order to be considered for membership. Our team will analyze your responses and determine wheter your
                    business is appropriately aligned with the mission/vision of the SmartFlyer Elevate program.</p>
            </div>
            <form action="{{ route('partnershipInterestForm.store', request()->inquiry_id) }}" method="post"
                id="partnershipInterestForm">
                @csrf
                <div class="news-form-section d-flex flex-wrap">
                    <div class="news-form-right">
                        <nav class="navigation" id="mainNav">
                            <a class="navigation__link" id="tab1" href="#main-information" id="main_information">
                                <div class="navigation-wrap">
                                    <div class="number"></div>
                                    <h3>Main Information</h3>
                                </div>
                            </a>
                            <a class="navigation__link" id="tab2" href="#type-of-business">
                                <div class="navigation-wrap">
                                    <div class="number"></div>
                                    <h3>Type of business</h3>
                                </div>
                            </a>
                            <a class="navigation__link" id="tab3" href="#references" id="references">
                                <div class="navigation-wrap">
                                    <div class="number"></div>
                                    <h3>References</h3>
                                </div>
                            </a>
                            <a class="navigation__link" id="tab4" href="#Commission">
                                <div class="navigation-wrap">
                                    <div class="number"></div>
                                    <h3>Commission</h3>
                                </div>
                            </a>
                            <a class="navigation__link" id="tab5" href="#virtuoso">
                                <div class="navigation-wrap">
                                    <div class="number"></div>
                                    <h3>Virtuoso</h3>
                                </div>
                            </a>
                            <a class="navigation__link" id="tab6" href="#marketing">
                                <div class="navigation-wrap">
                                    <div class="number"></div>
                                    <h3>Marketing</h3>
                                </div>
                            </a>
                        </nav>
                    </div>
                    <div class="news-form-left">
                        <div id="first-steps">
                            <div class="page-section hero" id="main-information">
                                <div class="news-form-wrap">
                                    <div class="add-client-form edit-popup ">
                                        <h3>Enter your main info</h3>
                                        <ul>
                                            <li class="width-100">
                                                <label for="name" class="required"><b>Full
                                                        Name</b></label>
                                                <input type="text" placeholder="Enter name" name="name"
                                                    value="{{ $inquiry->name ?? '' }}" id="name" readonly>
                                                <span class="error_client_first_name error"></span>
                                            </li>
                                            <li class="width-100">
                                                <label for="email" class="required"><b>Email</b></label>
                                                <input type="text" placeholder="Enter email" name="email"
                                                    value="{{ $inquiry->email ?? '' }}" id="email" readonly>
                                                <span class="error_client_first_name error"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="page-section" id="type-of-business">
                                <div class="news-form-wrap">
                                    <div class="add-client-form edit-popup ">
                                        <h3>Please select the type of business:</h3>
                                        <div class="radio-btn-wrap">
                                            @foreach ($typeOfBusioness as $tkey => $type)
                                                <div class="radio-btn">
                                                    <input type="radio" name="type_of_business"
                                                        id="type_of_business_{{ $tkey }}"
                                                        value="{{ $tkey }}"
                                                        @if (isset($inquiryDetails) && $inquiryDetails->type_of_business == $tkey) {{ 'checked' }} @endif>
                                                    <label
                                                        for="type_of_business_{{ $tkey }}">{{ $type }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="news-form-wrap">
                                    <div class="add-client-form edit-popup ">
                                        <h3>Have you worked with any of our SmartFlyer advisors in the past? </h3>
                                        <div class="radio-btn-wrap">
                                            @foreach ($workedWithSF as $wkey => $wsf)
                                                <div class="radio-btn">
                                                    <input type="radio" id="worked_with_sf_{{ $wkey }}"
                                                        name="worked_with_sf" value="{{ $wkey }}"
                                                        @if (isset($inquiryDetails) && $inquiryDetails->worked_with_sf == $wkey) {{ 'checked' }} @endif>
                                                    <label
                                                        for="worked_with_sf_{{ $wkey }}">{{ $wsf }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="upload-btns d-flex flex-wrap partnership-interest-btn">
                                <div class="edit-profile buttons">
                                    <a href="javascript:void(0)" id="next_step_btn"> Next Step</a>
                                </div>
                            </div>
                        </div>
                        <div id="second-steps">
                            <div class="page-section hero" id="references">
                                <div class="news-form-wrap">
                                    <div class="add-client-form edit-popup ">
                                        <h3>If you have not worked with a SmartFlyer advisor in the past, please provide
                                            references
                                            of other travel agencies you have worked with:</h3>
                                        <ul style="padding-top: 20px;">
                                            <li class="width-100">
                                                <input type="text" placeholder="Enter name" name="other_travel_agency"
                                                    value="{{ $inquiryDetails->other_travel_agency ?? '' }}"
                                                    id="other_travel_agency">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="page-section hero" id="Commission">
                                <div class="news-form-wrap">
                                    <div class="add-client-form edit-popup ">
                                        <h3>What percentage of commission are you currently offering travel agencies?</h3>
                                        <ul style="padding-top: 20px;">
                                            <li class="width-100">
                                                <input type="text" placeholder="Enter percentage"
                                                    name="commission_percentage_offer" id="commission_percentage_offer"
                                                    value="{{ isset($inquiryDetails) ? $inquiryDetails->commission_percentage_offer . '%' : '' }}">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-form-wrap">
                                    <div class="add-client-form edit-popup ">
                                        <h3>How are commissions handled?</h3>
                                        <div class="radio-btn-wrap notes-form-checkbox">
                                            @php
                                                $commHandled = [];
                                                if (isset($inquiryDetails) && !empty($inquiryDetails->commission_handled)) {
                                                    $commHandled = explode(',', $inquiryDetails->commission_handled);
                                                }
                                            @endphp
                                            @foreach ($commissionHandled as $chkey => $commHa)
                                                <div class="summary-wrap position-relative">
                                                    <input type="checkbox" id="commission_handled_{{ $chkey }}"
                                                        name="commission_handled[]" value="{{ $chkey }}"
                                                        @if (in_array($chkey, $commHandled)) {{ 'checked' }} @endif>
                                                    <label
                                                        for="commission_handled_{{ $chkey }}">{{ $commHa }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="page-section" id="virtuoso">
                                <div class="news-form-wrap">
                                    <div class="add-client-form edit-popup ">
                                        <h3>If you have not worked with a SmartFlyer advisor in the past, please provide
                                            references
                                            of other travel agencies you have worked with:</h3>
                                        <ul style="padding-top: 20px;">
                                            <li class="width-100">
                                                <input type="text" placeholder="Enter name" name="current_booking_way"
                                                    id="current_booking_way"
                                                    value="{{ $inquiryDetails->current_booking_way ?? '' }}">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="news-form-wrap">
                                    <div class="add-client-form edit-popup ">
                                        <h3>Are you a member of Virtuoso?</h3>
                                        <div class="radio-btn-wrap notes-form-checkbox">
                                            @foreach ($memberOfVirtuoso as $mvkey => $memOfVir)
                                                <div class="radio-btn">
                                                    <input type="radio" id="member_of_virtuoso_{{ $mvkey }}"
                                                        name="member_of_virtuoso" value="{{ $mvkey }}"
                                                        @if (isset($inquiryDetails) && $inquiryDetails->member_of_virtuoso == $mvkey) {{ 'checked' }} @endif>
                                                    <label
                                                        for="member_of_virtuoso_{{ $mvkey }}">{{ $memOfVir }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="page-section" id="marketing">
                                <div class="news-form-wrap">
                                    <div class="add-client-form edit-popup ">
                                        <h3>Are you a member of Virtuoso?</h3>
                                        <div class="radio-btn-wrap">
                                            @foreach ($interestedInLearning as $ilkey => $intLear)
                                                <div class="radio-btn">
                                                    <input type="radio" id="interested_in_learning_{{ $ilkey }}"
                                                        name="interested_in_learning" value="{{ $ilkey }}"
                                                        @if (isset($inquiryDetails) && $inquiryDetails->interested_in_learning == $ilkey) {{ 'checked' }} @endif>
                                                    <label
                                                        for="interested_in_learning_{{ $ilkey }}">{{ $intLear }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-submit-btn">
                                <div class="upload-btns d-flex flex-wrap">
                                    <div class="edit-profile buttons" style=""><a href="javascript:void(0)"
                                            id="previous_step_btn">Previous step</a>
                                    </div>
                                    @if (empty($inquiry->inquiry_details))
                                        <div class="add-client-btn buttons">
                                            <input type="submit" value="Submit">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/partnership-interest-form.js') }}"></script>
@endpush
