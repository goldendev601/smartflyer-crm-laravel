<?php /** @var \App\ModelsExtended\ClientAllergy $clientAllergy * */ ?>
<?php /** @var \App\ModelsExtended\Client $client * */ ?>
<?php /** @var \App\ModelsExtended\ClientContact $client_contact * */ ?>

@extends('pages.layouts.app')
@section('page-title', env('APP_NAME') . ' | '. $client->name )
@section('content')

    <div class="dashboard-details dashboard-header padding-spacing ">
        <div class="d-flex flex-wrap justify-content-space-between client-detail-view-header">
            <div class="breadcrumbs">
                <ul class=" d-flex flex-wrap">
                    <li><a href="{{ route('allClient') }}">Clients</a></li>
                    <li>{{$client->name}}</li>

                </ul>
            </div>
            <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center ">
                <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                    <!-- <li class="client-detail-view-icon chat-icon"><a href="#"><img
                            src="{{ asset('assets/images/chat.png') }}"></a></li> -->
                    <!-- <li class="client-detail-view-icon share-icon">
                    <a href="#" class="share-icon-wrap"><img src="{{ asset('assets/images/share.png') }}"></a>
                    <div class="share-popup" id="share-popup">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <h5>Share via email</h5>
                                </a>

                            </li>
                            <li>
                                <a data-fancybox href="#Share-via-email">
                                    <i class="bi bi-link-45deg"></i>
                                    <h5>Share public link</h5>
                                </a>
                                <div id="Share-via-email" class="add-client-model Share-via-email"
                                    style="display: none;">
                                    <div class="add-client-form">
                                        <div class="title-wrap">
                                            <h1>Share public link</h1>
                                            <span>{{$client->name}}</span>
                                        </div>
                                        <form>
                                            <ul>
                                                <li>
                                                    <label for="uname"><b>Link</b></label>
                                                    <input type="url"
                                                        placeholder="crm.smartflyer.com/clients/martin-doe" name="Link"
                                                        required="">
                                                </li>
                                                <li>
                                                    <label for="Password"><b>Password for link</b></label>
                                                    <input type="password" placeholder="123DA123" name="Password"
                                                        required="">
                                                </li>
                                            </ul>
                                            <div class="form-btn">
                                                <button type="button" class="fancybox-close-button"
                                                    data-fancybox-close>Cancel</button>
                                                <input type="submit" value="Save changes">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> -->
                    <li class="client-detail-view-icon list-icon">
                        <a href="#trip-details-wrap" data-fancybox class="list-icon-wrap">
                            <img src="{{ asset('assets/images/list.png') }}">
                        </a>
                        <div class="trip-details-tasks white" id="trip-details-wrap" style="display: none;">
                            <h1>Here is what’s pending</h1>
                            <div class="received-date">

                            </div>
                            <div class="multigraph">
                                <div class="multigraph-content">
                                    <div class="multigraph-width">
                                        <span>Your progress</span>
                                        <p>890,344 Sales</p>
                                    </div>
                                    <div class="content">Keep up the good job, you are among the top 1% of sellers</div>
                                </div>
                                <span class="graph-div"></span>
                            </div>
                            <div class="dashboard-right">
                                <div class="trip-details-header d-flex flex-wrap align-items-center">
                                    <h2>To-do this week</h2>
                                    <a class="trip-details-header-add-task" href="#">Add task</a>
                                </div>
                                <div class="dashboard-right-wrap">
                                    <div class="summary-wrap">
                                        <div class="week-summary">
                                            <div class="week-summary-in">
                                                <div class="summary-wrap">
                                                    <input type="checkbox" checked="checked">
                                                    <label> Complete information for trip</label>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis
                                                    lobortis tempor.</p>
                                            </div>
                                            <div class="due-date"><a href="#">Due monday</a></div>
                                        </div>
                                        <div class="week-summary">
                                            <div class="week-summary-in">
                                                <div class="summary-wrap">
                                                    <input type="checkbox" checked="checked">
                                                    <label>Submit proposals for new clients</label>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis
                                                    lobortis tempor.</p>
                                            </div>
                                            <div class="due-date"><a href="#">Due monday</a></div>
                                        </div>
                                        <div class="week-summary">
                                            <div class="week-summary-in">
                                                <div class="summary-wrap">
                                                    <input type="checkbox" checked="checked">
                                                    <label>Review revenue numbers for March</label>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis
                                                    lobortis tempor.</p>
                                            </div>
                                            <div class="due-date"><a href="#">Due monday</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li><a href="#">New Trip</a></li>
                <li><a href="#download" data-fancybox>Download...</a>
                    <div class="download edit-popup" id="download" style="display: none;">
                        <div class="title-wrap">
                            <h1>Download as...</h1>
                        </div>
                        <div class="download-option">
                            <ul>
                                <li class="active">
                                    <a href="javascript:void(0);">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/pdf-blue.png') }}" class="blue-image">
                                            <img src="{{ asset('assets/images/pdf-white.png') }}" class="white-image">
                                        </div>
                                        <span>PDF</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/csv-blue.png') }}" class="blue-image">
                                            <img src="{{ asset('assets/images/csv-white.png') }}" class="white-image">
                                        </div>
                                        <span>CSV</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/spreadsheet-blue.png') }}"
                                                class="blue-image">
                                            <img src="{{ asset('assets/images/spreadsheet-white.png') }}"
                                                class="white-image">
                                        </div>
                                        <span>SPREADSHEET</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="include form-section">
                            <ul>
                                <li class="width-100">
                                    <label>Include</label>
                                    <div class="switch-documentation">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                        <div>Dates & Numbers</div>
                                    </div>
                                </li>
                                <li class="checkbox">
                                    <div class="form-group">
                                        <input type="checkbox" id="Important-dates">
                                        <label for="Important-dates">Important dates</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="Important-Numbers">
                                        <label for="Important-Numbers">Important Numbers</label>
                                    </div>
                                </li>
                                <li class="width-100 related-contacts">
                                    <div class="switch-documentation">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                        <div>Related contacts</div>
                                    </div>
                                </li>
                                <li class="width-100">
                                    <div class="switch-documentation">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>
                                        <div>Dates & Numbers</div>
                                    </div>
                                </li>
                                <li class=checkbox>
                                    <div class="form-group">
                                        <input type="checkbox" id="Allergies">
                                        <label for="Allergies">Allergies</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="Food preferences">
                                        <label for="Food preferences">Food preferences</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="Likes">
                                        <label for="Likes">Likes</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="Dislikes">
                                        <label for="Dislikes">Dislikes</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="add-client-form">
                            <form>
                                <div class="form-btn">
                                    <button type="button" class="fancybox-close-button"
                                        data-fancybox-close>Cancel</button>
                                    <input type="submit" value="Save changes">
                                </div>
                            </form>
                        </div>
                    </div>
                </li> -->

                    <li class="sidebar right">
                        {{--                    TODO: Disable this until it is fully working --}}
                        {{--                    <a href="javascript:void(0)" id="sendDelegate" class="indicator-off" client-id="{{ $client->id }}">--}}
                        {{--                        <span class="indicator-label">--}}
                        {{--                            Send delegate--}}
                        {{--                        </span>--}}

                        {{--                        <span class="indicator-progress">--}}
                        {{--                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>--}}
                        {{--                        </span></a>--}}
{{--                        <a href="javascript:void(0)" id="openEditClientFrom">Edit</a>--}}
                        <div class="trip-details-tasks white openEditClientFromView main-edit-window"
                             id="openEditClientFromView">
                            <h1>Update Client Details</h1>
                            <div class="dashboard-right">
                                <div class="dashboard-right-wrap m-top-23">
                                    @include('pages.clients.client_edit_view',array('getdetails'=>$client))
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="client-details d-flex flex-wrap">
            <div class="client-details-name d-flex flex-wrap align-items-center">
                <div class="client-img">
                    @if(strlen($client->profile_picture_relative_url) > 10)
                        <img src="{{$client->profile_picture_url}}">
                    @else
                        <img src="{{ asset('assets/images/Avatar-Profile-Vector-PNG.svg') }}">
                    @endif

                </div>
                <div class="content">
                    <h1>{{$client->name}}</h1>
                    <ul>

                        @if($client->phone)
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                                                                 class="black ">&nbsp;{{$client->phone}}</a>
                            </li>
                        @endif
                        @if($client->phone)
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:{{$client->email}}"
                                                                                    class="black ">&nbsp;{{$client->email}}</a>
                            </li>
                        @endif
                        @if(strlen($client->address) > 4)
                            <li class="black ">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;{{$client->address}}
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="dashboard-chart d-flex flex-wrap all-clients-card">
                <div class="dashboard-chart-wrap col-6">
                    <div class="inner box-hover">
                        <figure>
                            <img src="{{ asset('assets/images/Revenue.png') }}">
                        </figure>
                        <h6>Revenue</h6>
                        <div class="chart-details d-flex flex-wrap align-items-center justify-content-flex-start">
                            <h2>$0</h2>
                            <div class="chart-percentage">
                                <h5>0.0% <img src="{{ asset('assets/images/chart-up.png') }}"></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-chart-wrap col-6">
                    <div class="inner box-hover">
                        <figure>
                            <img src="{{ asset('assets/images/Equalizer.png') }}">
                        </figure>
                        <h6>Milestone Reached</h6>
                        <div class="chart-details d-flex flex-wrap align-items-center justify-content-flex-start">
                            <h2>$0</h2>
                            <div class="chart-percentage down-graph">
                                <h5>0.0% <img src="{{ asset('assets/images/chart-down.png') }}"></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients-tab-section">
            <div class="clients-tab d-flex flex-wrap justify-content-space-between">
                <ul class="tabs client-detail-view-tab d-flex flex-wrap">

                    <li class="client-info-tab" rel="tab1"><span>Main</span></li>
                    <li class="client-info-tab" rel="tab2"><span>Dates & Numbers</span></li>
                    <li class="client-info-tab" rel="tab3"><span>Related contacts </span></li>
                    <li class="client-info-tab" rel="tab4"><span>Food & Allergies</span></li>
                    <li class="client-info-tab" rel="tab5"><span>Notes</span></li>
                    <!-- <li rel="tab6"><span>Marketing</span></li> -->
                </ul>
            </div>
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <div class="d-flex flex-wrap destinations-trip">
                        <div class="upcoming-trips common-background col-6 ">
                            <div class="inner">
                                <div class="title  d-flex flex-wrap">
                                    <h3 class="m-600">Trips</h3>
                                    <div><a href="#" class="trip blue-oblivion-color m-600" style="display: none"> Add
                                            New<i
                                                class="fa fa-plus"
                                                aria-hidden="true"></i></a></div>
                                </div>
                                <div class="upcoming-trips-details">
                                    <div class="inner">
                                        <ul>
                                            <li class="m-600">
                                                <h3 class="m-600 black">Summer in Italy</h3>Amalfi Coast
                                            </li>
                                            <li class="upcomming-trip-date">July 17 to August 1</li>
                                            <li>
                                                <div class="btn"><a href="#" class="m-600">Upcoming</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="inner">
                                        <ul>
                                            <li class="m-600">
                                                <h3 class="m-600 black">Europe 2022</h3>France, Portugal, Spain
                                            </li>
                                            <li class="upcomming-trip-date">July 17 to August 1</li>
                                            <li>
                                                <div class="btn"><a href="#" class="m-600">Upcoming</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="inner">
                                        <ul>
                                            <li class="m-600">
                                                <h3 class="m-600 black">Europe 2022</h3>France, Portugal, Spain
                                            </li>
                                            <li class="upcomming-trip-date">July 17 to August 1</li>
                                            <li>
                                                <div class="btn"><a href="#" class="m-600">Upcoming</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="inner">
                                        <ul>
                                            <li class="m-600">
                                                <h3 class="m-600 black">Europe 2022</h3>France, Portugal, Spain
                                            </li>
                                            <li class="upcomming-trip-date">July 17 to August 1</li>
                                            <li>
                                                <div class="btn"><a href="#" class="m-600">Upcoming</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="view-all justify-content-flex-end flex-wrap d-flex"><a href="#"
                                                                                                   class="blue-oblivion-color m-600">View
                                        all upcoming trips <i
                                            class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                        <div class="common-background favorite-destinations col-6">
                            <h2>Favorite destinations</h2>
                            <div class="favorite-destinations-wrap">
                                <div class="favorite-destinations-inner">
                                    <div class="inner d-flex flex-wrap">
                                        <div class="destinations-img">
                                            <img src="{{ asset('assets/images/destinations-1.png') }}">
                                        </div>
                                        <div class="destinations-content">
                                            <h3>France</h3>
                                            <span>Ramatuelle, France</span>
                                            <span>10 Trips in the last Month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="favorite-destinations-inner">
                                    <div class="inner d-flex flex-wrap">
                                        <div class="destinations-img">
                                            <img src="{{ asset('assets/images/destinations-4.png') }}">
                                        </div>
                                        <div class="destinations-content">
                                            <h3>Palm Springs</h3>
                                            <span>Palm Springs, California</span>
                                            <span>10 Trips in the last Month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="favorite-destinations-inner">
                                    <div class="inner d-flex flex-wrap">
                                        <div class="destinations-img">
                                            <img src="{{ asset('assets/images/destinations-3.png') }}">
                                        </div>
                                        <div class="destinations-content">
                                            <h3>Italy</h3>
                                            <span>Capri, Italy</span>
                                            <span>7 Trips in the last Month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="favorite-destinations-inner">
                                    <div class="inner d-flex flex-wrap">
                                        <div class="destinations-img">
                                            <img src="{{ asset('assets/images/destinations-4.png') }}">
                                        </div>
                                        <div class="destinations-content">
                                            <h3>Bahamas</h3>
                                            <span>Bahamas</span>
                                            <span>6 Trips in the last Month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full-imp-date common-background m-bottom-30 col-12">
                        <div class="title d-flex flex-wrap">
                            <h4 class="m-600">Support documents</h4>
                        </div>
                        <div class="full-imp-date-inner ">
                            @if(count($client->client_documents) > 0)
                                <ul>
                                    @foreach($client->client_documents as $att)

                                        <li><a href="{{$att->document_url}}"
                                               target="_blank"><span>{{getFileExtFromFileName($att->document_name)}}</span>{{$att->document_name}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <div class="text-center">
                                    <h5 class="grey-emtpy-txt">No Support documents Found!</h5>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div id="tab2" class="tab_content">
                    <div class="important-date-wrap">
                        <div class="important-date-main-wrap d-flex flex-wrap destinations-trip">
                            <div class="important-date common-background margin-col-6 ">
                                <div class="title d-flex flex-wrap">
                                    <h4 class="m-600">Important dates</h4>
                                    <div style="display:block">
                                        <a href="#important-dates-add" id="important-dates-add-btn"
                                           class="trip blue-oblivion-color m-600">
                                            Add new<i class="fa fa-plus" aria-hidden="true"></i></a>
                                        <div class="edit-popup important-dates" id="important-dates-add"
                                             style="display: none;">
                                            <div class="title-wrap">
                                                <h1 id="add-new-date-title">Add new date</h1>
                                                <span>{{ $client->name }}</span>
                                            </div>
                                            <div class="add-client-form">
                                                <form action="{{ route('addImportantDate',['id'=> $client->id]) }}"
                                                      method="post" id="add-important-dates">
                                                    @csrf
                                                    <input type="hidden" name="add_important_date_id"
                                                           id="add_important_date_id">
                                                    <ul class="nameEvent" style="display: block">
                                                        <li>
                                                            <label for="uname"><b>Name/Event</b></label>
                                                            <input type="text" placeholder="Enter name"
                                                                   name="imd_eventName" id="imd_eventName"
                                                                   required="required">
                                                            <span class="error_imd_eventName error"></span>
                                                        </li>
                                                        <li class="frequency-section time-zone">
                                                            <label>Frequency</label>
                                                            <select
                                                                class="important-dates-openEditClientFromView-select pop-select2"
                                                                name="impd_frequency" id="impd_frequency"
                                                                required="required">
                                                                <option value="">Select frequency</option>
                                                                @foreach($frequency as $key => $val)
                                                                    <option
                                                                        value="{{$val->id}}">{{$val->description}}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="error_impd_frequency error"></span>
                                                        </li>
                                                        <li style="width: 100% !important;">
                                                            <label for="uname" class="required"><b>Notes</b></label>
                                                            <input type="text" name="impd_notes" id="impd_notes"
                                                                   placeholder="Add notes">
                                                            <span class="error_impd_notes error"></span>
                                                        </li>
                                                        <li class="date-section">
                                                            <label for="uname"><b>Date</b></label>
                                                            <div class="birthday-dropdown">
                                                                <div class="month">
                                                                    <select class="form-select pop-select2"
                                                                            name="impd_dobM"
                                                                            id="impd_dobM">
                                                                        <option value="">Select month</option>
                                                                        @foreach (config('global.month') as $key => $month)
                                                                            <option value="{{ $key }}">
                                                                                {{ $month }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="date">
                                                                    <select class="form-select pop-select2"
                                                                            name="impd_dobD"
                                                                            id="impd_dobD">
                                                                        <option value="">Select day</option>
                                                                        @for ($i = 1; $i <= 31; $i++)
                                                                            <option
                                                                                value="@if($i<10){{ '0'.$i}}@else{{ $i }}@endif">
                                                                                {{ $i }}
                                                                            </option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                                <div class="year">
                                                                    <select class="form-select pop-select2"
                                                                            name="impd_dobY"
                                                                            id="impd_dobY">
                                                                        <option value="">Select year</option>
                                                                        @for ($i = 1988; $i <= 1998; $i++)
                                                                            <option
                                                                                value="{{ $i }}">
                                                                                {{ $i }}
                                                                            </option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="form-btn">
                                                        <button type="button" class="fancybox-close-button cancel-btn"
                                                                data-fancybox-close>Cancel
                                                        </button>
                                                        <input type="submit" value="Save changes">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="important-dates-wrapper">
                                    @if(count($client->client_events) > 0)
                                        @foreach($client->client_events as $ImpKey=>$clientEvent)
                                            <ul class="d-flex flex-wrap">
                                                <li class="date" style="width: 60px">
                                                    <strong>{{$clientEvent->event_date ? convertDateFormatMY($clientEvent->event_date) : 'N/A'}}</strong>

                                                </li>
                                                <li style="width: 170px; display: flex;"><i class="fa fa-birthday-cake"
                                                                                            aria-hidden="true"></i>
                                                    <span> {{$clientEvent->event_frequency ? $clientEvent->event_frequency->description : 'N/A'}}</span>
                                                </li>
                                                <li style="width: 170px">{{ $clientEvent->name }}</li>
                                                <li style="width: 55px">
                                                    <a href="javascript:void(0)" style="font-size: 15px;"
                                                       onclick="papulateImportantDate('{{ $clientEvent->id }}','{{ $clientEvent->name }}','{{ $clientEvent->notes }}', '{{ $clientEvent->event_frequency->id }}','{{ convertDateForFrontend($clientEvent->event_date)['dobM'] }}','{{ convertDateForFrontend($clientEvent->event_date)['dobD'] }}','{{ convertDateForFrontend($clientEvent->event_date)['dobY']  }}')"
                                                       class="edit-important-number">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"
                                                           style="padding-right: 0px"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" style="font-size: 15px;"
                                                       class="delete-important-number delete-item"
                                                       url={{ route('deleteImportantDate',['id'=> $clientEvent->id]) }}>
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        @endforeach
                                    @else
                                        <div class="text-center">
                                            <h5 class="grey-color">No data found!</h5>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="important-date common-background margin-col-6 ">
                                <div class="title d-flex flex-wrap">
                                    <h4 class="m-600">Important numbers</h4>
                                    <div style="display:block">
                                        <a href="#important-number"
                                           class="trip blue-oblivion-color m-600 add-important-number-form">
                                            Add new<i class="fa fa-plus" aria-hidden="true"></i></a>
                                        <div class="edit-popup fancybox-content important-dates" id="important-number"
                                             style="display: none;">
                                            <div class="title-wrap">
                                                <h1 class="important-number-title">Add important number</h1>
                                                <span>{{ $client->name }}</span>
                                            </div>
                                            <div class="add-client-form">
                                                <form id="add-important-number-single" method="post"
                                                      action="{{ route('addImportantNumber',['id'=> $client->id]) }}">
                                                    @csrf
                                                    <input type="hidden" name="important_number_id"
                                                           id="important_number_id">
                                                    <ul>
                                                        <li class="frequency-section time-zone"
                                                            style="width: 100% !important;">
                                                            <label class="required" aria-required="true">Rewards/loyalty
                                                                program</label>
                                                            <input type="text"
                                                                   placeholder="Enter rewards/loyalty program"
                                                                   id="im_loyaltyProgram" name="im_loyaltyProgram"
                                                                   value="">
                                                            <span class="error error_im_loyaltyProgram"></span>
                                                        </li>
                                                        <li style="width: 100% !important;">
                                                            <label for="number" class="required"><b>Enter
                                                                    number</b></label>
                                                            <input type="number" name="im_number"
                                                                   placeholder="Enter number" id="im_number">
                                                            <span class="error error_im_number"></span>
                                                        </li>
                                                    </ul>
                                                    <div class="form-btn">
                                                        <button type="button" class="fancybox-close-button cancel-btn"
                                                                data-fancybox-close>Cancel
                                                        </button>
                                                        <input type="submit" value="Save">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="important-numbers">
                                    @if(count($client->client_loyalty_numbers) > 0)
                                        @foreach($client->client_loyalty_numbers as $ImpNKey=>$ImpNVal)
                                            <div class="inner d-flex flex-wrap align-items-center">
                                                <div class="title">
                                                    <h5>{{$ImpNVal->loyalty_program}}
                                                    </h5>
                                                </div>
                                                <div class="number">
                                                    <a href="JavaScript:copyTextToClipboard('{{$ImpNVal->number}}')"><strong>
                                                            {{$ImpNVal->number}}</strong>
                                                        <img src="{{ asset('assets/images/emp-number.png') }}">
                                                    </a>
                                                </div>
                                                <div class="edit-delete">
                                                    <a href="javascript:void(0)" style="font-size: 15px;"
                                                       onclick="papulateImportantNumber('{{ $ImpNVal->id }}','{{ $ImpNVal->loyalty_program }}', '{{ $ImpNVal->number }}')"
                                                       class="edit-important-number">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" style="font-size: 15px;"
                                                       class="delete-important-number delete-item"
                                                       url={{ route('deleteImportantNumber',['id'=> $ImpNVal->id]) }}>
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="text-center">
                                            <h5 class="grey-color">No data found!</h5>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab3" class="tab_content">
                    <div class=" d-flex flex-wrap destinations-trip">
                        <div class="related-contacts common-background full-width">
                            <div class="title d-flex flex-wrap">
                                <h4 class="m-600">Related contacts</h4>
                                <div style="display:block"><a href="#" class="trip blue-oblivion-color m-600"
                                                              id="add-related-contact-btn">Add related
                                        contact<i class="fa fa-plus" aria-hidden="true"></i></a></div>
                                <div class="edit-popup related-contact" id="related-contact-add"
                                     style="display: none;">
                                    <div class="title-wrap">
                                        <h1 id="add-new-contact-title">Add related contact</h1>
                                        <span>{{ $client->name }}</span>
                                    </div>
                                    <div class="add-client-form">
                                        <form action="{{ route('addRelatedContact',['id'=> $client->id]) }}"
                                              method="post" id="related-contact-form">
                                            @csrf
                                            <input type="hidden" name="related_contact_id"
                                                   id="related_contact_id">
                                            <ul class="nameEvent" style="display: block">
                                                <li>
                                                    <label for="uname" class="required"><b>Name</b></label>
                                                    <input type="text" placeholder="Enter name" name="rc_name"
                                                           id="rc_name"
                                                           required="required">
                                                    <span class="error_rc_name error"></span>
                                                </li>
                                                <li class="frequency-section relationship time-zone">
                                                    <label class="required">Relationship</label>
                                                    <select
                                                        class="related-contacts-openEditClientFromView-select pop-select2"
                                                        name="rc_relationship" id="rc_relationship">
                                                        <option value="">Select relationship</option>
                                                        @foreach($relationship as $key => $val)
                                                            <option value="{{$val->id}}">
                                                                {{$val->description}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="error_rc_relationship error"></span>
                                                </li>
                                                <li style="width: 100% !important;">
                                                    <label for="uname" class="required"><b>Email</b></label>
                                                    <input type="email" name="rc_email" placeholder="Enter email address"
                                                           value="" id="rc_email">
                                                    <span class="error_rc_email error"></span>
                                                </li>
                                                <li class="date-section">
                                                    <label for="uname" class="required"><b>Birthday</b></label>
                                                    <div class="birthday-dropdown">
                                                        <div class="month">
                                                            <select class="form-select2" name="rc_dobM" id="rc_dobM">
                                                                <option value="">Select Month</option>
                                                                @foreach (config('global.month') as $key => $month)
                                                                    <option value="{{ $key }}">
                                                                        {{ $month }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <span class="error_rc_dobM error"></span>
                                                        </div>
                                                        <div class="date">
                                                            <select class="form-select pop-select2" name="rc_dobD"
                                                                    id="rc_dobD">
                                                                <option value="">Select Day</option>
                                                                @for ($i = 1; $i <= 31; $i++)
                                                                    <option
                                                                        value="@if($i<10){{ '0'.$i}}@else{{ $i }}@endif">
                                                                        {{ $i }}
                                                                    </option>
                                                                @endfor
                                                            </select>
                                                            <span class="error_rc_dobD error"></span>
                                                        </div>
                                                        <div class="year">
                                                            <select class="form-select pop-select2" name="rc_dobY"
                                                                    id="rc_dobY">
                                                                <option value="">Select Year</option>
                                                                @for ($i = 1988; $i <= 1998; $i++)
                                                                    <option
                                                                        value="{{ $i }}">
                                                                        {{ $i }}
                                                                    </option>
                                                                @endfor
                                                            </select>
                                                            <span class="error_rc_dobY error"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="form-btn">
                                                <button type="button" class="fancybox-close-button cancel-btn"
                                                        data-fancybox-close>Cancel
                                                </button>
                                                <input type="submit" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="related-contacts-details">
                                <table>
                                    @if(count($client->client_contacts)>0)
                                        @foreach($client->client_contacts as $keyRC=>$valRC)
                                            <tr>
                                                <td><strong>{{$valRC->name}}</strong></td>
                                                <td>{{$valRC->email ? $valRC->email:'N/A' }}</td>
                                                <td>{{$valRC->date_of_birth ? convertDateFormatMYD($valRC->date_of_birth):'N/A' }}</td>
                                                <td>{{$valRC->relationship_type ? $valRC->relationship_type->description : 'N/A'}} </td>
                                                <td>

                                                    <a href="javascript:void(0)" style="font-size: 15px;"
                                                       class="edit-related-contact"
                                                       contact="{{ $valRC->id }}"
                                                       related-name="{{$valRC->name}}"
                                                       email="{{$valRC->email ? $valRC->email:'N/A' }}"
                                                       relationship-type="{{$valRC->relationship_type ? $valRC->relationship_type->id : 'N/A'}}"
                                                       day="{{$valRC->date_of_birth ? convertDateForFrontend($valRC->date_of_birth)['dobD']:'N/A' }}"
                                                       month="{{$valRC->date_of_birth ? convertDateForFrontend($valRC->date_of_birth)['dobM']:'N/A' }}"
                                                       year="{{$valRC->date_of_birth ? convertDateForFrontend($valRC->date_of_birth)['dobY']:'N/A' }}">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="javascript:void(0)" style="font-size: 15px;"
                                                       class="delete-important-number delete-item"
                                                       url={{ route('deleteRelatedContact',['id'=> $valRC->id]) }}>
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                <!-- <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234 (dummy)</td> -->
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td cols="4" class="justify-content-center">
                                                <h4 class="m-600 grey-color">No related contact found!</h4>
                                            </td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab4" class="tab_content">
                    <div class="food-allergies d-flex flex-wrap destinations-trip">
                        <div class="common-background margin-col-6 ">
                            <div class="title d-flex flex-wrap" style="align-items: center;">
                                <h4 class="m-600">Food and allergies</h4>
                                <div style="display:block"><a href="javascript:void(0)"
                                                              class="trip blue-oblivion-color m-600"
                                                              id="add-food-allergies-btn">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="edit-popup food-and-allergies" id="food-and-allergies-add"
                                 style="display: none; width: 750px;">
                                <div class="title-wrap">
                                    <h1 id="add-food-and-allergies-title">Add food and allergies</h1>
                                    <span>{{ $client->name }}</span>
                                </div>
                                <div class="add-client-form">
                                    <form action="{{ route('addFoodAndAllergies',['id'=> $client->id]) }}"
                                          method="post" id="food-and-allergies-form">
                                        @csrf
                                        <input type="hidden" name="food_and_allergies_id"
                                               id="food_and_allergies_id">
                                        <div class="page-section" id="food">
                                            <div class="news-form-wraps">
                                                <div
                                                    class="add-client-form edit-popup title-padding-bottom food-and-allergies">
                                                    <h4>Food & Allergies</h4>
                                                    <div class="food-diet">
                                                        <div class="contact-title ">
                                                            <h4>Diet</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Facilisis lobortis tempor purus, condimentum hac morbi
                                                                sit.</p>
                                                        </div>
                                                        <div class="notes-form-checkbox d-flex flex-wrap">
                                                            @foreach($diet as $key => $val)
                                                                <div class="summary-wrap position-relative"
                                                                     id="food-diet-{{$key}}">
                                                                    <input type="checkbox" name="foodDiet[]"
                                                                           id="diet-{{$key}}" value="{{$val->id}}"
                                                                        {{ in_array($val->id, array_column(json_decode($client->client_diets), 'diet_id')) == 1 ? 'checked' : '' }}>
                                                                    <label>{{$val->description}}</label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="food-allergies-wrap">
                                                        <div class="contact-title ">
                                                            <h4>Allergies</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Facilisis lobortis tempor purus, condimentum hac morbi
                                                                sit.</p>
                                                        </div>
                                                        <div class="notes-form-checkbox d-flex flex-wrap">
                                                            @foreach($allergy as $key => $val)
                                                                <div class="summary-wrap position-relative"
                                                                     id="food-allergies-{{$key}}">
                                                                    <input type="checkbox" name="foodAllergies[]"
                                                                           id="allergies-{{$key}}"
                                                                           value="{{$val->id}}"
                                                                        {{ in_array($val->id, array_column(json_decode($client->client_allergies), 'allergy_id')) == 1 ? 'checked' : '' }}>
                                                                    <label>{{$val->description}}</label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-btn">
                                            <button type="button" class="fancybox-close-button cancel-btn"
                                                    data-fancybox-close>Cancel
                                            </button>
                                            <input type="submit" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="allergies-text">
                                <h3>Allergies</h3>
                                <div class="allergies-wrap d-flex flex-wrap dark-red-color">

                                    @if(count($client->client_allergies) > 0)
                                        @foreach($client->client_allergies as $keyAller=> $clientAllergy )
                                            <div class="inner ">
                                                <a href="#" class="d-flex flex-wrap align-items-center">
                                                    <img width="24px"
                                                         src="{{ asset($clientAllergy->allergy->image_relative_url) }}"
                                                         style="filter: invert(34%) sepia(9%) saturate(3457%) hue-rotate(308deg) brightness(94%) contrast(99%);">
                                                    {{$clientAllergy->allergy->description}}
                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No Data Found Yet!</p>
                                    @endif
                                </div>
                            </div>
                            <div class="allergies-text">
                                <h3>Food preferences</h3>
                                <div class="allergies-wrap d-flex flex-wrap light-blue-color">
                                    @if(count($client->client_diets) > 0)
                                        @foreach($client->client_diets as $keyDiets=>$valDiet)
                                            <div class="inner ">
                                                <a href="#" class="d-flex flex-wrap align-items-center">
                                        <span
                                            class="clientDietIcon">{{getFirstLetterOfEachWord($valDiet->diet->description)}}</span>
                                                    {{$valDiet->diet->description}}
                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No Data Found Yet!</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="common-background margin-col-6 left-side">
                            <div class="title d-flex flex-wrap">
                                <h4 class="m-600">Preferences</h4>
                                <div style="display:block"><a href="javascript:void(0)"
                                                              class="trip blue-oblivion-color m-600"
                                                              id="add-preferences-btn">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="edit-popup preferences" id="preferences-add"
                                 style="display: none; width: 600px;">
                                <div class="title-wrap">
                                    <h1 id="add-food-and-allergies-title"> Add preferences</h1>
                                    <span>{{ $client->name }}</span>
                                </div>
                                <div class="add-client-form">
                                    <form action="{{ route('addPreferences',['id'=> $client->id]) }}"
                                          method="post" id="add-Preferences-form">
                                        @csrf
                                        <div class="page-section" id="preferences">
                                            <div class="news-form-wraps like-deslike">
                                                <div class="add-client-form edit-popup food-and-allergies">
                                                    <div class="like">
                                                        <h4 class="required">Like</h4>
                                                        <div class="food-diet">
                                                            <div class="contact-title ">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Facilisis lobortis tempor purus, condimentum hac
                                                                    morbi sit.
                                                                </p>
                                                            </div>
                                                            <ul style="padding:0px; margin-right: 44px;">
                                                                <li class="width-100" class="likes-text">
                                                                    <textarea name="likes"
                                                                              placeholder="Enter client likes here..."
                                                                              style="height:170px;">{{ old('likes') ? old('likes') : $client->likes }}</textarea>
                                                                    <span class="error error_likes"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="dislikes">
                                                        <h4 class="required">Dislikes</h4>
                                                        <div class="food-diet">
                                                            <div class="contact-title ">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Facilisis lobortis tempor purus, condimentum hac
                                                                    morbi sit.
                                                                </p>
                                                            </div>
                                                            <ul style="padding:0px; margin-right: 44px;">
                                                                <li class="width-100">
                                                                    <textarea name="dislikes"
                                                                              placeholder="Enter client dislikes here..."
                                                                              style="height:170px;">{{ old('dislikes') ? old('dislikes') : $client->dislikes }}</textarea>
                                                                    <span class="error error_dislikes"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-btn">
                                            <button type="button" class="fancybox-close-button cancel-btn"
                                                    data-fancybox-close>Cancel
                                            </button>
                                            <input type="submit" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="allergies-text">
                                <h3>Likes</h3>
                                <div class="content">
                                    @if(strlen($client->likes > 4))
                                        <p style="word-wrap: break-word;">
                                            {{$client->likes}}
                                        </p>
                                    @else
                                        <p class="grey-color">
                                            No data found yet!
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="allergies-text">
                                <h3>Dislikes</h3>
                                <div class="content">
                                    @if(strlen($client->dislikes > 4))
                                        <p style="word-wrap: break-word;">
                                            {{$client->dislikes}}
                                        </p>
                                    @else
                                        <p class="grey-color">
                                            No data found yet!
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab5" class="tab_content">
                    <div class="food-allergies notes d-flex flex-wrap destinations-trip">
                        <div class="common-background margin-col-6 left-side">
                            <div class="title d-flex flex-wrap">
                                <h4 class="m-600">Notes</h4>
                                <div style="display:block"><a href="#notes-add" class="trip blue-oblivion-color m-600"
                                                              id="add-notes-btn" data-fancybox>
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="edit-popup preferences" id="notes-add"
                                 style="display: none; width: 600px !important;">
                                <div class="title-wrap">
                                    <h1 id="notes-add-title"> Add notes</h1>
                                    <span>{{ $client->name }}</span>
                                </div>
                                <div class="add-client-form">
                                    <form action="{{ route('addNotes',['id'=> $client->id]) }}"
                                          method="post" id="add-notes-form">
                                        @csrf
                                        <div class="page-section" id="notes-and-tags">
                                            <div class="news-form-wraps notes-form">
                                                <div class="add-client-form edit-popup title-padding-bottom">
                                                    <h4 class="required">Notes</h4>
                                                    <ul style="padding:0px; margin-right: 44px;">
                                                        <li class="width-100">
                                <textarea name="note" placeholder="Enter client notes here..."
                                          style="height:174px;">{{ old('note') ? old('note') : $client->notes }}</textarea>
                                                        </li>
                                                        <li class="width-100" style="display:none">
                                                            <label></label>
                                                            <input type="text" name="tags" id="clientTags"
                                                                   data-role="tagsinput"
                                                                   placeholder="Add tags separated by a comma"
                                                                   value="{{ old('tags') }}">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-btn">
                                            <button type="button" class="fancybox-close-button cancel-btn"
                                                    data-fancybox-close>Cancel
                                            </button>
                                            <input type="submit" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="allergies-text">
                                <div class="content"
                                     style="word-wrap: break-word;">{!! $client->notes ? $client->notes : '.........' !!}</div>
                            </div>
                        </div>
                        <div class="common-background margin-col-6 left-side" style="display:none">
                            <div class="title ">
                                <h4 class="m-600">Recent Activities</h4>
                                <span>890,344 Sales</span>
                            </div>
                            <div class="recent-activities">
                                <div class="recent-activities-wrap">
                                    <div class="inner">
                                        <div class="date-time">11/02</div>
                                        <div class="dots"></div>
                                        <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <div class="date-time">11/02</div>
                                        <div class="dots"></div>
                                        <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <div class="date-time">11/02</div>
                                        <div class="dots"></div>
                                        <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        </div>
                                    </div>
                                    <div class="inner">
                                        <div class="date-time">11/02</div>
                                        <div class="dots"></div>
                                        <div class="content">Outlines keep you honest. Indulging in poorly driving and
                                            keep
                                            structure
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div id="tab6" class="tab_content">
                    <div class="marketing d-flex flex-wrap destinations-trip">
                        <div class="marketing-left d-flex flex-wrap">
                            <div class="common-background">
                                <div class="title d-flex flex-wrap">
                                    <h4 class="m-600">Marketing opt in</h4>
                                </div>
                                <div class="width-100 documents-signed">
                                    <div class="switch-documentation">
                                        <div>Newsletter</div>
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>

                                    </div>
                                    <div class="switch-documentation">
                                        <div>Travel alerts</div>
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>

                                    </div>
                                    <div class="switch-documentation">
                                        <div>Account updates</div>
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>

                                    </div>
                                    <div class="switch-documentation">
                                        <div>Promotions</div>
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="slider round"></span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <div class="common-background automations-content">
                                <div class="title d-flex flex-wrap">
                                    <h4 class="m-600">Automations</h4>
                                </div>
                                <div class="width-100 documents-signed">
                                    <div class="switch-documentation">
                                        <div>Automation 3</div>
                                        <a href="#">Active</a>
                                    </div>
                                    <div class="switch-documentation">
                                        <div>Clickfunnel Affiliates</div>
                                        <a href="#">Active</a>
                                    </div>
                                    <div class="switch-documentation">
                                        <div>Welcome</div>
                                        <a href="#">Active</a>
                                    </div>
                                </div>
                            </div>
                            <div class="common-background automations-content full-width campaigns-conetnt">
                                <div class="title d-flex flex-wrap">
                                    <h4 class="m-600">Campaigns</h4>
                                </div>
                                <div class="width-100 documents-signed">
                                    <div class="switch-documentation">
                                        <div>SmartFlyer May 2022</div>
                                        <div class="campaigns-left ">Opened on April 22, 2022</div>
                                    </div>
                                    <div class="switch-documentation">
                                        <div>New alert for COVID 19</div>
                                        <div class="campaigns-left not-open">Not opened</div>
                                    </div>
                                    <div class="switch-documentation">
                                        <div>Account updates</div>
                                        <div class="campaigns-left">Opened on April 1, 2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="marketing-right notes ">
                            <div class="common-background left-side">
                                <div class="title ">
                                    <h4 class="m-600">Recent Activities</h4>
                                    <span>890,344 Sales</span>
                                </div>
                                <div class="recent-activities">
                                    <div class="recent-activities-wrap">
                                        <div class="inner">
                                            <div class="date-time">11/02</div>
                                            <div class="dots"></div>
                                            <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="date-time">11/02</div>
                                            <div class="dots"></div>
                                            <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="date-time">11/02</div>
                                            <div class="dots"></div>
                                            <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                            </div>
                                        </div>
                                        <div class="inner">
                                            <div class="date-time">11/02</div>
                                            <div class="dots"></div>
                                            <div class="content">Outlines keep you honest. Indulging in poorly driving and
                                                keep structure</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="{{ asset( 'assets/js/clients/client_detail_view.js?' . rand() ) }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sidebar/3.3.2/jquery.sidebar.min.js"></script>

    <script>
        let fancyBox = $.fancybox;
        let rc_relationship = jQuery(".related-contacts-openEditClientFromView-select").select2();
        let rc_dobM = jQuery("#rc_dobM").select2();
        let rc_dobD = jQuery("#rc_dobD").select2();
        let rc_dobY = jQuery("#rc_dobY").select2();

        let impd_frequency = jQuery("#impd_frequency").select2();
        let impd_dobM = jQuery("#impd_dobM").select2();
        let impd_dobD = jQuery("#impd_dobD").select2();
        let impd_dobY = jQuery("#impd_dobY").select2();

        $('.add-important-number-form').click(function () {
            $('.important-number-title').html('Add important number');
            $('#add-important-number-single')[0].reset();
            $("#important_number_id").val('');
            fancyBox.open($("#important-number"));
        })
        $('#important-dates-add-btn').click(function () {

            $('#add-new-date-title').html('Add new date');
            $('#add-important-dates')[0].reset();
            $('#add_important_date_id').val('');
            impd_dobM.val('').trigger('change');
            impd_dobD.val('').trigger('change');
            impd_dobY.val('').trigger('change');
            fancyBox.open($("#important-dates-add"));

        })
        $('#add-related-contact-btn').click(function () {

            $('#add-new-contact-title').html('Add related contact');
            $('#related-contact-form')[0].reset();
            $('#related_contact_id').val('');
            rc_relationship.val('').trigger('change');
            rc_dobM.val('').trigger('change');
            rc_dobD.val('').trigger('change');
            rc_dobY.val('').trigger('change');
            fancyBox.open($("#related-contact-add"));

        })

        $('#add-food-allergies-btn').click(function () {
            fancyBox.open($("#food-and-allergies-add"));
        });
        $('#add-preferences-btn').click(function () {
            fancyBox.open($("#preferences-add"));
        });

        function papulateImportantNumber(id, im_loyaltyProgram, im_number) {
            $('.important-number-title').html('Edit important number');
            $('#im_number').val(im_number);
            $('#im_loyaltyProgram').val(im_loyaltyProgram);
            $('#important_number_id').val(id);
            fancyBox.open($("#important-number"));

        }

        function papulateImportantDate(id, name, notes, frequency, month, day, year) {

            $('#add-new-date-title').html('Edit new date');
            $('#add_important_date_id').val(id)
            $('#imd_eventName').val(name)
            impd_frequency.val(frequency).trigger('change');
            $('#impd_notes').val(notes)
            impd_dobM.val(month.toLowerCase()).trigger('change');
            impd_dobD.val(day).trigger('change');
            impd_dobY.val(year).trigger('change');
            fancyBox.open($("#important-dates-add"));

        }

        $(document).on('click', '.edit-related-contact', function () {

            $('#add-new-contact-title').html('Edit related contact');
            $('#related_contact_id').val($(this).attr('contact'));
            $('#rc_name').val($(this).attr('related-name'));
            $('#rc_email').val($(this).attr('email'));
            rc_relationship.val($(this).attr('relationship-type')).trigger('change');
            rc_dobM.val($(this).attr('month').toLowerCase()).trigger('change');
            rc_dobD.val($(this).attr('day')).trigger('change');
            rc_dobY.val($(this).attr('year')).trigger('change');
            fancyBox.open($("#related-contact-add"));

        })
        $('.delete-item').on('click', function (e) {
            e.preventDefault();
            var url = $(this).attr('url');
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete it?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'DELETE',
                        url: url,
                        success: function () {
                            window.location.reload();
                        }
                    })

                }
            });
        });
        $('.client-info-tab').click(function () {
            sessionStorage.setItem("tab", $(this).attr('rel'));

        })
        $(function () {
            if (sessionStorage.getItem("tab")) {
                let tab = sessionStorage.getItem("tab");
                $("[rel=" + tab + "]").click()
            }
        });

        $("#add-Preferences-form").validate({
            rules: {
                likes: {
                    required: true,
                    maxlength: 250
                },
                dislikes: {
                    required: true,
                    maxlength: 250
                }
            },
            messages: {
                likes: {
                    required: "Please enter likes",
                },
                dislikes: {
                    required: "Please enter dislikes",
                }
            },
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass); //prevent class to be added to selects
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);

            },
            submitHandler: function (form, event) {
                $.ajax({
                    type: 'post',
                    url: $('#add-Preferences-form').attr('action'),
                    data: $('#add-Preferences-form').serialize(),
                    success: function () {
                        window.location.reload();
                    },
                    error: function (response) {
                        showError(response);
                    }
                })
            }
        })
        $("#add-notes-form").validate({
            rules: {
                note: {
                    required: true,
                    maxlength: 250
                }
            },
            messages: {
                note: {
                    required: "Please enter note",
                }
            },
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass); //prevent class to be added to selects
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);

            },
            submitHandler: function (form, event) {
                form.submit()
            }
        })
        $("#add-important-number-single").validate({
            rules: {
                im_loyaltyProgram: {
                    required: true,
                    maxlength: 250
                },
                im_number: {
                    required: true,
                    number: true,
                    maxlength: 250
                }
            },
            messages: {
                im_loyaltyProgram: {
                    required: "Please enter Rewards/loyalty program.",
                },
                im_number: {
                    required: "Please enter number.",
                }
            },
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass); //prevent class to be added to selects
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element);

            },
            submitHandler: function (form, event) {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: $('#add-important-number-single').attr('action'),
                    data: $('#add-important-number-single').serialize(),
                    success: function () {
                        window.location.reload();
                    },
                    error: function (response) {
                        showError(response);
                    }
                })

            }
        })
        $("#add-important-dates").validate({
            rules: {
                imd_eventName: {
                    required: true,
                    maxlength: 250
                },
                impd_frequency: {
                    required: true,
                    maxlength: 250
                },
                impd_notes: {
                    required: true,
                    maxlength: 250
                },
                impd_dobM: {
                    required: true,
                    maxlength: 250
                },
                impd_dobD: {
                    required: true,
                    maxlength: 250
                },
                impd_dobY: {
                    required: true,
                    maxlength: 250
                }
            },
            messages: {
                imd_eventName: {
                    required: "Please enter Name/Event.",
                },
                impd_notes: {
                    required: "Please enter notes.",
                },
                impd_frequency: {
                    required: "Please select  frequency.",
                },
                impd_dobM: {
                    required: "Please select  month.",
                },
                impd_dobD: {
                    required: "Please select  day.",
                },
                impd_dobY: {
                    required: "Please select  year.",
                }
            },
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass); //prevent class to be added to selects
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") == "impd_dobM") {
                    error.insertAfter("#add-important-dates .month .select2");
                } else if (element.attr("name") == "impd_dobD") {
                    error.insertAfter("#add-important-dates .date .select2");
                } else if (element.attr("name") == "impd_dobY") {
                    error.insertAfter("#add-important-dates .year .select2");
                } else if (element.attr("name") == "impd_frequency") {
                    error.insertAfter("#add-important-dates .frequency-section .select2");
                } else {
                    error.insertAfter(element);
                }

            },
            submitHandler: function (form, event) {

                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: $('#add-important-dates').attr('action'),
                    data: $('#add-important-dates').serialize(),
                    success: function () {
                        window.location.reload();
                    },
                    error: function (response) {
                        showError(response);
                    }
                })
            }
        })
        $("#related-contact-form").validate({
            rules: {
                rc_name: {
                    required: true,
                    maxlength: 250
                },
                rc_relationship: {
                    required: true,
                    maxlength: 250
                },
                rc_email: {
                    required: true,
                    maxlength: 250
                },
                rc_dobM: {
                    required: true,
                    maxlength: 250
                },
                rc_dobD: {
                    required: true,
                    maxlength: 250
                },
                rc_dobY: {
                    required: true,
                    maxlength: 250
                }
            },
            messages: {
                rc_name: {
                    required: "Please enter name.",
                },
                rc_email: {
                    required: "Please enter email.",
                },
                rc_relationship: {
                    required: "Please select relationship.",
                },
                rc_dobM: {
                    required: "Please select month.",
                },
                rc_dobD: {
                    required: "Please select day.",
                },
                rc_dobY: {
                    required: "Please select year",
                },
            },
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass); //prevent class to be added to selects
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") == "rc_dobM") {
                    error.insertAfter("#related-contact-form .month .select2");
                } else if (element.attr("name") == "rc_dobD") {
                    error.insertAfter("#related-contact-form .date .select2");
                } else if (element.attr("name") == "rc_dobY") {
                    error.insertAfter("#related-contact-form .year .select2");
                } else if (element.attr("name") == "rc_relationship") {
                    error.insertAfter("#related-contact-form .relationship .select2");
                } else {
                    error.insertAfter(element);
                }

            },
            submitHandler: function (form, event) {
                event.preventDefault();
                $.ajax({
                    type: 'post',
                    url: $('#related-contact-form').attr('action'),
                    data: $('#related-contact-form').serialize(),
                    success: function () {
                        window.location.reload();
                    },
                    error: function (response) {
                        showError(response);
                    }
                })
            }
        })

    </script>
@endpush
