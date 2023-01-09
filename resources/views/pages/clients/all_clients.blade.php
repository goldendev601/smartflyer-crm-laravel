@extends('pages.layouts.app')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}" />

@endpush
@section('content')
<div class="dashboard-details dashboard-header padding-spacing">
    <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
        <h1>Clients</h1>
        <ul class="d-flex flex-wrap justify-content-flex-end m-600">
{{--            <li><a href="#trip-pending-tasks" class="view-task-btn">Pending tasks</a>--}}
{{--                <div class="trip-pending-tasks ">--}}
{{--                    <div class="trip-details-tasks white" style="">--}}
{{--                        <h1>Here is what’s pending</h1>--}}
{{--                        <div class="multigraph">--}}
{{--                            <div class="multigraph-content">--}}
{{--                                <div class="multigraph-width">--}}
{{--                                    <span>Your progress</span>--}}
{{--                                    <p>890,344 Sales</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span class="graph-div"></span>--}}
{{--                            <div class="content">Keep up the good job, you are among the top 1% of sellers</div>--}}
{{--                        </div>--}}
{{--                        <div class="dashboard-right">--}}
{{--                            <div class="trip-details-header d-flex flex-wrap align-items-center">--}}
{{--                                <h2>To-do this week</h2>--}}
{{--                                <a href="#">Add task</a>--}}
{{--                            </div>--}}
{{--                            <div class="dashboard-right-wrap">--}}
{{--                                <div class="summary-wrap">--}}
{{--                                    <div class="week-summary">--}}
{{--                                        <div class="week-summary-in">--}}
{{--                                            <div class="summary-wrap">--}}
{{--                                                <input type="checkbox" checked="checked">--}}
{{--                                                <label> Complete information for trip</label>--}}
{{--                                            </div>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis--}}
{{--                                                lobortis tempor.</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="due-date"><a href="#">Due monday</a></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="week-summary">--}}
{{--                                        <div class="week-summary-in">--}}
{{--                                            <div class="summary-wrap">--}}
{{--                                                <input type="checkbox" checked="checked">--}}
{{--                                                <label>Submit proposals for new clients</label>--}}
{{--                                            </div>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis--}}
{{--                                                lobortis tempor.</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="due-date"><a href="#">Due monday</a></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="week-summary">--}}
{{--                                        <div class="week-summary-in">--}}
{{--                                            <div class="summary-wrap">--}}
{{--                                                <input type="checkbox" checked="checked">--}}
{{--                                                <label>Review revenue numbers for March</label>--}}
{{--                                            </div>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis--}}
{{--                                                lobortis tempor.</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="due-date"><a href="#">Due monday</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
            {{--            <li><a href="javascript:void(0)">New Report</a>--}}
            {{--            </li>--}}
            <li>
                <a href="#sendDelegateProfile" class="new-client-delegate-popup-one" id="sendDelegate" data-fancybox>Invite client</a>
            </li>
            <li>
                <a href="javascript:void(0)" class="new-client-popup-one" id="newClientPopupOne">Add client</a>
            </li>
        </ul>
    </div>
    <div class="edit-popup add-delegate-client" id="sendDelegateProfile"
         style="display: none;">
        <div class="title-wrap">
            <h1>Invite New Client</h1>
            <span></span>
        </div>
        <div class="add-client-form">
            <form action="{{ route('addNewDelegateClient') }}" method="post" id="store-new-delegate-client">
                @csrf
                <input type="hidden" name="form_type" value="1">
                <ul class="newClient" style="display: block">
                    <li style="width: 100% !important;">
                        <div class="client-names row">
                            <div class="first-name col-md-4">
                                <label for="uname" class="required"><b>First Name</b></label>
                                <input type="text" placeholder="Enter first name" name="client_first_name" required="required">
                                <span class="error_client_first_name error"></span>
                            </div>
                            <div class="middle-name">
                                <label for="uname" class="required"><b>Middle Name</b></label>
                                <input type="text" placeholder="Enter middle name" name="client_middle_name">
                                <span class="error_client_middle_name error"></span>
                            </div>
                            <div class="last-name">
                                <label for="uname" class="required"><b>Last Name</b></label>
                                <input type="text" placeholder="Enter last name" name="client_last_name">
                                <span class="error_client_last_name error"></span>
                            </div>
                            <div class="email">
                                <label for="uname" class="required"><b>Email</b></label>
                                <input type="text" name="client_email" placeholder="Enter email address">
                                <span class="error_client_email error"></span>
                            </div>
                        </div>

                    </li>


                </ul>
                <div class="form-btn">
                    <button type="button" class="fancybox-close-button cancel-btn"
                            data-fancybox-close>Cancel</button>
{{--                    <input type="submit" value="Save">--}}
                    <button type="submit" id="sendDelegateBtn" class="indicator-off fancybox-close-button">
                        <span class="indicator-label">
                            Send invite
                        </span>

                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="dashboard-left all-clients-card">
        <div class="dashboard-chart d-flex flex-wrap margin-15">
            <div class="dashboard-chart-wrap col-4">
                <div class="inner box-hover">
                    <figure>
                        <img src="{{ asset('assets/images/Revenue.png') }}">
                    </figure>
                    <h6>{{ $clientCount }} Clients</h6>
                    <div class="chart-details d-flex flex-wrap align-items-center justify-content-flex-start">
                        <h2>$0</h2>
                        <div class="chart-percentage">
                            <h5>0% <img src="{{ asset('assets/images/chart-up.png') }}"></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-chart-wrap col-4">
                <div class="inner box-hover">
                    <figure>
                        <img src="{{ asset('assets/images/Clients-icon.svg') }}">
                    </figure>
                    <h6>Clients</h6>
                    <div class="chart-details d-flex flex-wrap align-items-center justify-content-flex-start">
                        <h2>{{ $clientCount }}</h2>
                        <div class="chart-percentage">
                            <h5>0% <img src="{{ asset('assets/images/chart-up.png') }}"></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-chart-wrap col-4">
                <div class="inner box-hover">
                    <img src="{{ asset('assets/images/Equalizer.svg') }}">
                    <h6>Milestone Reached</h6>
                    <div class="chart-details d-flex flex-wrap align-items-center justify-content-flex-start">
                        <h2>$0</h2>
                        <div class="chart-percentage down-graph">
                            <h5>0% <img src="{{ asset('assets/images/chart-down.png') }}"></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-chart-wrap col-4">
                <div class="inner box-hover">
                    <img src="{{ asset('assets/images/Group-chat.svg') }}">
                    <h6>Bookings </h6>
                    <div class="chart-details d-flex flex-wrap align-items-center justify-content-space-between">
                        <h2>0</h2>
                        <div class="chart-percentage">
                            <h5>0% <img src="{{ asset('assets/images/chart-up.png') }}"></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients-tab-section">
        <div class="clients-tab d-flex flex-wrap justify-content-space-between">
            <ul class="tabs d-flex flex-wrap all-clinet-tab">
                <li class="active" rel="tab1"><span>All</span></li>
                <li rel="tab2"><span>Recent</span></li>
                <li rel="tab3"><span>Most active</span></li>
            </ul>
            {{--            <div class="search-filetr d-flex flex-wrap">--}}
            {{--                <i class="bi bi-funnel"></i>--}}
            {{--                <div class="trip-view-search">--}}
            {{--                    <a data-fancybox data-src="#search-popup">--}}
            {{--                        <div class="search">--}}
            {{--                            <img src="{{ asset('assets/images/search.png') }}">--}}
            {{--                        </div>--}}
            {{--                    </a>--}}
            {{--                    <div style="display: none;" id="search-popup">--}}
            {{--                        <h1>Search</h1>--}}
            {{--                        <input type="search" id="gsearch" name="gsearch"--}}
            {{--                            placeholder="Search for bookings, clients and suppliers.">--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
        <div class="tab_container">
            <div id="tab1" class="tab_content">
                <div class="trip-details d-flex flex-wrap">
                    @if(count($getAllClients) > 0)
                    @foreach($getAllClients as $key=>$client)
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id' => $client->id]) }}">
                                @if($client->profile_picture_url)
                                <img src="{{$client->profile_picture_url}}">
                                @else
                                <img src="{{ asset('assets/images/Avatar-Profile-Vector-PNG.png') }}">
                                @endif
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a
                                            href="{{ route('clientDetailView',['id' => $client->id]) }}">{{$client->name}}</a>
                                    </h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">{{$client->email}}</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                @if($client->phone)
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">&nbsp;{{$client->phone}}</a></li>
                                @endif
                                @if(strlen($client->address) > 4)
                                <li class="black ">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;{{$client->address}}
                                </li>
                                @endif
                                <!-- <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="trip-details-wrap d-flex flex-wrap justify-content-center col-6">
                        No Client Found Yet!
                    </div>
                    @endif
                </div>
            </div>
            <div id="tab2" class="tab_content">
                <div class="trip-details d-flex flex-wrap">
                    @if(count($getAllClients) > 0)
                    @foreach($getAllClients as $key=>$client)
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            @if(strlen($client->profile_picture_relative_url) > 10)
                            <img src="{{generateS3FileUrl($client->profile_picture_relative_url)}}">
                            @else
                            <img src="{{ asset('assets/images/Avatar-Profile-Vector-PNG.png') }}">
                            @endif
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a
                                            href="{{ route('clientDetailView',['id' => $client->id]) }}">{{$client->name}}</a>
                                    </h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">{{$client->email}}</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                @if($client->phone)
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">&nbsp;{{$client->phone}}</a></li>
                                @endif
                                @if(strlen($client->address) > 4)
                                <li class="black ">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;{{$client->address}}
                                </li>
                                @endif
                                <!-- <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="trip-details-wrap d-flex flex-wrap justify-content-center col-6">
                        No Client Found Yet!
                    </div>
                    @endif
                </div>
            </div>
            <div id="tab3" class="tab_content">
                <div class="trip-details d-flex flex-wrap">
                    @if(count($getAllClients) > 0)
                    @foreach($getAllClients as $key=>$client)
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            @if(strlen($client->profile_picture_relative_url) > 10)
                            <img src="{{generateS3FileUrl($client->profile_picture_relative_url)}}">
                            @else
                            <img src="{{ asset('assets/images/Avatar-Profile-Vector-PNG.png') }}">
                            @endif
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a
                                            href="{{ route('clientDetailView',['id' => $client->id]) }}">{{$client->name}}</a>
                                    </h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">{{$client->email}}</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                @if($client->phone)
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">&nbsp;{{$client->phone}}</a></li>
                                @endif
                                @if(strlen($client->address) > 4)
                                <li class="black ">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;{{$client->address}}
                                </li>
                                @endif
                                <!-- <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="trip-details-wrap d-flex flex-wrap justify-content-center col-6">
                        No Client Found Yet!
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div id="new-client-popup" style="display: none;">
    <div class="my-profile-form">
        <form  action="{{route('addclient')}}" enctype="multipart/form-data" id="form">
            @csrf
            <input type="hidden" name="form_type" value="2">
            <div class="my-profile d-flex flex-wrap justify-content-space-between">
                <div class="d-flex align-items-center ">
                    <div class="close"><img src="{{ asset('assets/images/close.png') }}"></div>
                    <h3>New Client</h3>
                </div>
                <div class="upload-documents">
                    <a href="#" id="OpenImgUpload">Upload documentation</a>
                    <input type="file" id="imgupload" name="documents[]" multiple accept=".jpg,.png,.pdf,.xlsx,.docx"
                        style="display:none" onchange="OnSelectFiles()" />
                </div>
            </div>

            <div class="news-form-section d-flex flex-wrap">
                <div class="news-form-right">
                    <nav class="navigation" id="mainNav">
                        <a class="navigation__link active" href="#main-information">
                            <div class="navigation-wrap">
                                <div class="number"></div>
                                <h3>Main Information</h3>
                            </div>
                        </a>
                        <a class="navigation__link" href="#related-contacts">
                            <div class="navigation-wrap">
                                <div class="number"></div>
                                <h3>Related contacts</h3>
                            </div>
                        </a>
                        <a class="navigation__link" href="#important-dates">
                            <div class="navigation-wrap">
                                <div class="number"></div>
                                <h3>Important dates</h3>
                            </div>
                        </a>
                        <a class="navigation__link" href="#important-numbers">
                            <div class="navigation-wrap">
                                <div class="number"></div>
                                <h3>Important numbers</h3>
                            </div>
                        </a>
                        <a class="navigation__link" href="#notes-and-tags">
                            <div class="navigation-wrap">
                                <div class="number"></div>
                                <h3>Notes</h3>
                            </div>
                        </a>
                        <a class="navigation__link" href="#food">
                            <div class="navigation-wrap">
                                <div class="number"></div>
                                <h3>Food & allergies</h3>
                            </div>
                        </a>
                        <a class="navigation__link" href="#preferences">
                            <div class="navigation-wrap">
                                <div class="number"></div>
                                <h3>Preferences</h3>
                            </div>
                        </a>
                    </nav>
                </div>
                <div class="news-form-left">

                    <div class="page-section hero" id="main-information">
                        <div class="news-form-wrap">
                            <div class="add-client-form edit-popup ">
                                <h3>Main Information</h3>
                                <ul>
                                    <li class="width-100">
                                                <label for="uname" class="required"><b>First name</b></label>
                                                <input type="text" placeholder="Enter first name" name="client_first_name" required="required">
                                                <span class="error_client_first_name error"></span>
                                    </li>
                                    <li>
                                            <div class="row middle-last">
                                                <div class="middle-name col-md-4">
                                                    <label for="uname" class=""><b>Middle name</b></label>
                                                    <input type="text" placeholder="Enter middle name" name="client_middle_name">
                                                    <span class="error_client_middle_name error"></span>
                                                </div>
                                                <div class="last-name col-md-4">
                                                    <label for="uname" class="required"><b>Last name</b></label>
                                                    <input type="text" placeholder="Enter last name" name="client_last_name">
                                                    <span class="error_client_last_name error"></span>
                                                </div>
                                            </div>


                                    </li>
                                    <li class="width-100">
                                        <label for="uname" class="required"><b>Email</b></label>
                                        <input type="email" name="client_email" placeholder="Enter email address"
                                            value="{{ old('client_email') }}">
                                    </li>
                                    <li class="width-100">
                                        <label for="client_phone" class="required"><b>Phone number</b></label>
                                        <input type="tel" name="client_phone" id="client_phone" maxlength="20"
                                            placeholder="e.g.800001111" value="{{ old('client_phone') }}">
                                        <span class="error_client_phone error"></span>
                                    </li>

                                    <li class="date-section width-100">
                                        <label for="uname"><b>Birthday</b></label>
                                        <div class="birthday-dropdown">
                                            <div class="month">
                                                <select class="form-select" name="client_dobM" id="select_clientM">
                                                    <option value="">Month</option>
                                                    @foreach (config('global.month') as $key => $month)
                                                    <option value="{{ $key }}">
                                                        {{ $month }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="date">
                                                <select class="form-select" name="client_dobD" id="select_clientD">
                                                    <option value="">Day</option>
                                                    @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}">
                                                        {{ $i }}</option>
                                                        @endfor
                                                </select>
                                            </div>
                                            <div class="year">
                                                <select class="form-select" name="client_dobY" id="select_clientY">
                                                    <option value="">Year</option>
                                                    @for ($i = 1920; $i <= now()->year; $i++) <option value="{{ $i }}">
                                                        {{ $i }}</option>
                                                        @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="width-100 uploadProfilePic">
                                        <div class="box">
                                            <div class="js-image-preview"></div>
                                            <div class="upload-options">
                                                <label>
                                                    Upload profile photo
                                                    <input type="file" name="profile_picture_relative_url"
                                                        class="image-upload" accept="image/*" />
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="width-100">
                                        <label for="uname"><b>Address</b></label>
                                        <textarea name="address" placeholder="Enter client address here..."
                                            style="height:70%">{{ old('address') }}</textarea>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="page-section" id="related-contacts">
                        <div class="news-form-wrap contact-padding-bottom">
                            <div class="add-client-form edit-popup ">
                                <h3>Related contacts</h3>
                                <div class="contact-form-details related-contacts-form">
                                    <div class="contact-form">
                                        <div
                                            class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                            <h4>Contact #&nbsp;<span class="related-contacts-form-number">1</span></h4>
                                            <div class="icon" style="display: none"><img
                                                    src="{{ asset('assets/images/garbage-can.png') }}"
                                                    onclick="removeContactform($(this))">
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <label for="uname"><b>Name</b></label>
                                                <input type="text" placeholder="Enter name" name="rc_name[]">
                                            </li>
                                            <li class="frequency-section time-zone">
                                                <label>Relationship</label>
                                                <select class="related-contacts-form-select" name="rc_relationship[]">
                                                    @foreach($relationship as $key => $val)
                                                    <option value="{{$val->id}}">{{$val->description}}</option>
                                                    @endforeach
                                                </select>
                                            </li>
                                            <li>
                                                <label for="uname"><b>Email</b></label>
                                                <input type="email" name="rc_email[]" placeholder="Enter email address">
                                            </li>
                                            <li class="date-section">
                                                <label for="uname"><b>Birthday</b></label>
                                                <div class="birthday-dropdown">
                                                    <div class="month">
                                                        <select class="related-contacts-form-select" name="rc_dobM[]">
                                                            <option>Month</option>
                                                            @foreach (config('global.month') as $key => $month)
                                                            <option value="{{ $key }}">
                                                                {{ $month }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="date">
                                                        <select class="related-contacts-form-select" name="rc_dobD[]">
                                                            <option>Day</option>
                                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}">
                                                                {{ $i }}</option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                    <div class="year">
                                                        <select class="related-contacts-form-select" name="rc_dobY[]">
                                                            <option>Year</option>
                                                            @for ($i = 1920; $i <= now()->year; $i++) <option value="
                                                            {{ $i }}">
                                                                {{ $i }}</option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="add-related-contact add-form-div">
                                    <div class="related-contact blue-oblivion-color cp m-600"><i class="fa fa-plus"
                                            aria-hidden="true"></i> Add new related
                                        contact</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-section">
                        <div class="news-form-wrap">
                            <div class="add-client-form social-media">
                                <h3>Social media</h3>
                                <table>
                                    <tr>
                                        <th>Site</th>
                                        <th>Profile link</th>
                                    </tr>
                                    <tr>
                                        <td class="socialLinkTitle">Facebook</td>
                                        <td>
                                            <input type="url" placeholder="For e.g.: www.facebook.com/myprofile"
                                                name="social_facebook_url" value="{{ old('social_facebook_url') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="socialLinkTitle">Instagram</td>
                                        <td>
                                            <input type="url" placeholder="For e.g.: www.instagram.com/myprofile"
                                                name="social_instagram_url" value="{{ old('social_instagram_url') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="socialLinkTitle">Linkedin</td>
                                        <td>
                                            <input type="url" placeholder="For e.g.: www.linkedin.com/myprofile"
                                                name="social_linkedin_url" value="{{ old('social_linkedin_url') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="socialLinkTitle">Twitter</td>
                                        <td>
                                            <input type="url" placeholder="For e.g.: www.twitter.com/myprofile"
                                                name="social_twitter_url" value="{{ old('social_twitter_url') }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="socialLinkTitle">Custom</td>
                                        <td>
                                            <input type="url" placeholder="Enter a custom link" name="social_custom_url"
                                                value="{{ old('social_custom_url') }}">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="page-section" id="important-dates">
                        <div class="news-form-wrap contact-padding-bottom">
                            <div class="add-client-form edit-popup ">
                                <h3>Important dates</h3>
                                <div class="contact-form-details important-dates-form">
                                    <div class="contact-form">
                                        <div
                                            class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                            <h4>Event/Date #<span class="important-dates-form-number">1</span></h4>
                                            <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}"
                                                    onclick="removeImportDateform($(this))">
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <label for="uname"><b>Name/Event</b></label>
                                                <input type="text" placeholder="Enter name or event" name="imd_eventName[]">
                                            </li>
                                            <li class="frequency-section time-zone">
                                                <label>Frequency</label>
                                                <select class="important-dates-form-select" name="impd_frequency[]">
                                                    @foreach($frequency as $key => $val)
                                                    <option value="{{$val->id}}">{{$val->description}}</option>
                                                    @endforeach
                                                </select>
                                            </li>
                                            <li>
                                                <label for="uname"><b>Notes</b></label>
                                                <input type="text" name="impd_notes[]" placeholder="Add notes">
                                            </li>
                                            <li class="date-section">
                                                <label for="uname"><b>Date</b></label>
                                                <div class="birthday-dropdown">
                                                    <div class="month">
                                                        <select class="important-dates-form-select" name="impd_dobM[]">
                                                            <option>Month</option>
                                                            @foreach (config('global.month') as $key => $month)
                                                            <option value="{{ $key }}">
                                                                {{ $month }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="date">
                                                        <select class="important-dates-form-select" name="impd_dobD[]">
                                                            <option>Day</option>
                                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}">
                                                                {{ $i }}</option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                    <div class="year">
                                                        <select class="important-dates-form-select" name="impd_dobY[]">
                                                            <option>Year</option>
                                                            @for ($i = 1920; $i <= now()->year; $i++) <option value="{{ $i }}">
                                                                {{ $i }}</option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-important-dates add-form-div">
                                    <div class="related-contact blue-oblivion-color cp m-600"><i class="fa fa-plus"
                                            aria-hidden="true"></i>Add new date</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-section" id="important-numbers">
                        <div class="news-form-wrap contact-padding-bottom">
                            <div class="add-client-form edit-popup ">
                                <h3>Important numbers</h3>
                                <div class="contact-form-details important-numbers-form">
                                    <div class="contact-form">
                                        <div
                                            class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                            <h4>Reward/loyalty number #<span
                                                    class="important-numbers-form-number">1</span></h4>
                                            <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}"
                                                    onclick="removeImportNumberform($(this))">
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="frequency-section time-zone">
                                                <label>Rewards/loyalty program</label>
                                                <input type="text" placeholder="Enter rewards/loyalty program"
                                                    name="im_loyaltyProgram[]">
                                            </li>
                                            <li>
                                                <label for="uname"><b>Number</b></label>
                                                <input type="text" placeholder="nter rewards/loyalty number" name="im_number[]">
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="add-important-numbers add-form-div">
                                    <div class="related-contact blue-oblivion-color cp m-600"><i class="fa fa-plus"
                                            aria-hidden="true"></i>Add new
                                        number</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-section" id="notes-and-tags">
                        <div class="news-form-wrap notes-form">
                            <div class="add-client-form edit-popup title-padding-bottom">
                                <h3>Notes</h3>
                                <ul>
                                    <li class="width-100">
                                        <textarea name="note" placeholder="Enter client notes here..."
                                            style="height:174px;">{{ old('note') }}</textarea>
                                    </li>
                                    <li class="width-100" style="display:none" ;>
                                        <label></label>
                                        <input type="text" name="tags" id="clientTags" data-role="tagsinput"
                                            placeholder="Add tags separated by a comma" value="{{ old('tags') }}">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="page-section" id="food">
                        <div class="news-form-wrap">
                            <div class="add-client-form edit-popup title-padding-bottom food-and-allergies">
                                <h3>Food & Allergies</h3>
                                <div class="food-diet">
                                    <div class="contact-title ">
                                        <h4>Diet</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Facilisis lobortis tempor purus, condimentum hac morbi sit.</p>
                                    </div>
                                    <div class="notes-form-checkbox d-flex flex-wrap">
                                        @foreach($diet as $key => $val)
                                        <div class="summary-wrap position-relative" id="food-diet-{{$key}}">
                                            <input type="checkbox" name="foodDiet[]" id="diet-{{$key}}"
                                                value="{{$val->id}}"
                                                {{ (is_array(old('foodDiet')) and in_array($val->id, old('foodDiet'))) ? ' checked' : '' }}>
                                            <label>{{$val->description}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="food-allergies-wrap">
                                    <div class="contact-title ">
                                        <h4>Allergies</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Facilisis lobortis tempor purus, condimentum hac morbi sit.</p>
                                    </div>
                                    <div class="notes-form-checkbox d-flex flex-wrap">
                                        @foreach($allergy as $key => $val)
                                        <div class="summary-wrap position-relative" id="food-allergies-{{$key}}">
                                            <input type="checkbox" name="foodAllergies[]" id="allergies-{{$key}}"
                                                value="{{$val->id}}"
                                                {{ (is_array(old('foodAllergies')) and in_array($val->id, old('foodAllergies'))) ? ' checked' : '' }}>
                                            <label>{{$val->description}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-section" id="preferences">
                        <div class="news-form-wrap like-deslike">
                            <div class="add-client-form edit-popup food-and-allergies">
                                <div class="like">
                                    <h3>Likes</h3>
                                    <div class="food-diet">
                                        <div class="contact-title ">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Facilisis lobortis tempor purus, condimentum hac morbi sit.
                                            </p>
                                        </div>
                                        <ul>
                                            <li class="width-100">
                                                <textarea name="likes" placeholder="Enter client likes here..."
                                                    style="height:174px;">{{ old('likes') }}</textarea>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dislikes">
                                    <h3>Dislikes</h3>
                                    <div class="food-diet">
                                        <div class="contact-title ">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Facilisis lobortis tempor purus, condimentum hac morbi sit.
                                            </p>
                                        </div>
                                        <ul>
                                            <li class="width-100">
                                                <textarea name="dislikes" placeholder="Enter client dislikes here..."
                                                    style="height:174px;">{{ old('dislikes') }}</textarea>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upload-btns d-flex flex-wrap">
                        <div class="edit-profile buttons" style="display: none"><a href="{{ route('allClient') }}">Save
                                as draft</a>
                        </div>
                        <div class="add-client-btn buttons">
                            <input type="submit" value="Add client">
                        </div>
                    </div>

                </div>
                <div class="documentation-attached">
                    <div id="totalFilesDiv" style="display:none">
                        <h4>Documents <span id="totalFiles"></span></h4>
                    </div>
                    <div class="d-flex justify-content-center align-items-center text-center"
                        style="width: 100%;height: 500px;">
                        <div class="inner" id="uploadedFileList"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
<script type="text/javascript" src="{{ asset('assets/js/clients/new-client-script.js') }}"></script>
<!-- <script src="{{ asset('assets/js/intlTelInput.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/js/intlTelInput.min.js"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-tagsinput.min.js') }}"></script>

<script>
    $("#store-new-delegate-client").validate({
        rules: {
            client_first_name: {
                required: true,
                maxlength: 250
            },
            client_middle_name: {
                required: false,
                maxlength: 250
            },
            client_last_name: {
                required: true,
                maxlength: 250
            },
            client_email: {
                required: true,
                email:true,
                maxlength: 250
            }
        },
        messages: {
            client_first_name: {
                required: "First name is required.",
            },
            client_last_name: {
                required: "Last name is required.",
            },
            client_email: {
                required: "Please enter valid email",
            }
        },
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass); //prevent class to be added to selects
        },
        errorPlacement: function(error, element) {
                error.insertAfter(element);

        },
        submitHandler: function(form,event) {
            // form.submit();
            let button = $('#sendDelegateBtn')
            buttonIndicator(button,'on')
            event.preventDefault();
            $.ajax({
                type: 'post',
                url: '/add-delegate-client',
                data: new FormData(form),
                processData: false,
                contentType: false,
                success: function (response) {
                    buttonIndicator(button,'off')
                    if(response.status == 200){
                        $('#store-new-delegate-client')[0].reset();
                        $('.fancybox-close-button').click();
                        // toastr.success(response.message)
                        location.reload();
                    }else{
                        toastr.error(response.message)
                    }
                },
                error: function (response){
                    $.each(response.responseJSON.errors, function(index, value) {
                        $('.error_'+index).html(value);
                    });
                }
            });
        }
    })

var telInput = null;
jQuery(document).ready(function($) {
    telInput = $("#client_phone");
    telInput.intlTelInput({
        // utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.8/js/utils.js',
        formatOnDisplay: false,
        nationalMode: false,
        separateDialCode: true,
        // customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
        //     console.log(selectedCountryPlaceholder);
        //     return "e.g. " + selectedCountryPlaceholder + '1234567';
        // }
    });
    if ($("#form").length > 0) {
        // Suppose that your method is well defined

        jQuery.validator.addMethod("validatePhone",
            function(value, element) {

                if(value.length >0) {
                    var testVal = value.indexOf('+') >= 0 ? value : '+' + $("#client_phone").intlTelInput("getSelectedCountryData").dialCode + value;
                    $('[name="client_phone"]').val(testVal);
                    var valid;
                    if ($.trim(testVal).length > 0) {
                        var regx = /[+][0-9]{10,15}/;
                        valid = regx.test(value);
                    } else {
                        valid = true;
                    }
                }else{
                    valid = true;
                }
                    return this.optional(element) || valid;

            }, "Please enter valid phone number"
        );
        $("#form").validate({
            rules: {
                client_first_name: {
                    required: true,
                    maxlength: 250
                },
                client_middle_name: {
                    required: false,
                    maxlength: 250
                },
                client_last_name: {
                    required: true,
                    maxlength: 250
                },
                client_email: {
                    required: true,
                    email: true,
                    maxlength: 250
                },
                client_phone: {
                    required: false,
                    validatePhone: true
                },
                client_dobM: {
                    required: false,
                },
                client_dobD: {
                    required: false,
                },
                client_dobY: {
                    required: false,
                },
                address: {
                    required: false,
                    maxlength: 250
                },
                social_facebook_url: {
                    required: false,
                    url: true,
                    maxlength: 250
                },
                social_instagram_url: {
                    required: false,
                    url: true,
                    maxlength: 250
                },
                social_linkedin_url: {
                    required: false,
                    url: true,
                    maxlength: 250
                },
                social_twitter_url: {
                    required: false,
                    url: true,
                    maxlength: 250
                },
                social_custom_url: {
                    required: false,
                    url: true,
                    maxlength: 250
                },
                social_custom_url: {
                    required: false,
                    url: true
                },
                note: {
                    required: false,
                    maxlength: 250
                },
                likes: {
                    required: false,
                    maxlength: 250
                },
                dislikes: {
                    required: false,
                    maxlength: 250
                },
                // profile_picture_relative_url: {
                //     required: false,
                //     extension: "jpg|jpeg|png|PNG|gif"
                // }
            },
            messages: {
                client_first_name: {
                    required: "First name is required.",
                },
                client_middle_name: {
                    required: "Middle name is required.",
                },
                client_last_name: {
                    required: "Last name is required.",
                },
                client_email: {
                    required: "Email is required.",
                },
                client_phone: {
                    validatePhone: "Please enter valid phone number",
                },
                client_dobM: {
                    required: "Please enter month",
                },
                client_dobD: {
                    required: "Please enter day",
                },
                client_dobY: {
                    required: "Please enter year",
                }
            },
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass); //prevent class to be added to selects
            },
            errorPlacement: function(error, element) {
                if (element.attr("name") == "client_dobM") {
                    error.insertAfter("#main-information .month .select2");
                } else if (element.attr("name") == "client_dobD") {
                    error.insertAfter("#main-information .date .select2");
                } else if (element.attr("name") == "client_dobY") {
                    error.insertAfter("#main-information .year .select2");
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form,event) {
                // form.submit();
                event.preventDefault();
                let url = $('#clientEditForm').attr('action');
                $.ajax({
                    type: 'POST',
                    url: 'add-client',
                    data: new FormData(form),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (response) {

                        window.location.reload();
                    },
                    error: function (response) {
                        //show error message
                        // buttonIndicator(button,'off')
                        $.each(response.responseJSON.errors, function(index, value) {
                            var replace_index= index.replace(".", "_");
                            $('.error_'+replace_index).html(value);
                        });
                    }
                });
            }
        })
    }

});

    function buttonIndicator(button,status)
    {
        if(status == 'on'){
            button.addClass('indicator-on');
            button.removeClass('indicator-off');
        } else{
            button.removeClass('indicator-on');
            button.addClass('indicator-off');
        }
    }

$('#select_clientD').change(function() {
    if ($(this).val() != "") {
        $("#main-information .date label.error").hide();
    } else {
        $("#main-information .date label.error").show();
    }
})
$('#select_clientM').change(function() {
    if ($(this).val() != "") {
        $("#main-information .month label.error").hide();
    } else {
        $("#main-information .month label.error").show();
    }
})
$('#select_clientY').change(function() {
    if ($(this).val() != "") {
        $("#main-information .year label.error").hide();
    } else {
        $("#main-information .year label.error").show();
    }
})
// toastr.info('Are you the 6 fingered man?')
window.onload = function() {
    @if(count($errors) > 0)
    setTimeout(() => {
        document.getElementById("newClientPopupOne").click()
    }, 500);

    @endif
};
</script>
@endpush
