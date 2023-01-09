<?php /** @var \App\ModelsExtended\Client $client  */ ?>
@extends('pages.layouts.app')

@section('content')
    <div class="dashboard-details">
        <div class="dashboard-wrap">
            <div class="inner">
                <div class="dashboard-header d-flex flex-wrap">
                    <h1>Welcome, {{ auth()->user() ? auth()->user()->name : '' }}!</h1>
                    <div class="dashboard-time d-flex flex-wrap align-items-center ">
                        <ul>
                            <li class="d-flex align-items-center"><img src="{{ asset('assets/images/cloud.png') }}"> 22°F -
                                New York City, NY</li>
                            <li class="clock d-flex align-items-center"><img src="{{ asset('assets/images/clock.png') }}">
                                10:30 AM </li>
                        </ul>
                        <div class="search-icon">
                            {{--                        <div class="search-filetr d-flex flex-wrap"> --}}
                            {{--                            <div class="trip-view-search"> --}}
                            {{--                                <a data-fancybox data-src="#search-popup"> --}}
                            {{--                                    <div class="search"> --}}
                            {{--                                        <img src="{{ asset('assets/images/search.png') }}"> --}}
                            {{--                                    </div> --}}
                            {{--                                </a> --}}
                            {{--                                <div style="display: none;" id="search-popup"> --}}
                            {{--                                    <h1>Search</h1> --}}
                            {{--                                    <input type="search" id="gsearch" name="gsearch" --}}
                            {{--                                        placeholder="Search for bookings, clients and suppliers."> --}}
                            {{--                                </div> --}}
                            {{--                            </div> --}}
                            {{--                        </div> --}}
                            {{-- <div class="search-toggle "> <img src="{{ asset('assets/images/search.png') }}">
                    </div> --}}
                            <div class="clock-toggle-content ">
                                <div class="top-client">
                                    <h3>World Clock</h3>
                                </div>
                                <div class="world-clock-time d-flex flex-wrap">
                                    <div class="world-clock-time-wrap">
                                        <ul class="d-flex flex-wrap ">
                                            <li class="image"><img src="{{ asset('assets/images/World-Clock.png') }}">
                                            </li>
                                            <li class="time-wrap">
                                                <h3 class="m-600 black">New york</h3>
                                                <h4 class="m-600 black">10:30 AM</h4>
                                            </li>
                                            <li class="utc-time">
                                                <h5 class="black">UTC−04:00</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="world-clock-time-wrap">
                                        <ul class="d-flex flex-wrap ">
                                            <li class="image"><img src="{{ asset('assets/images/World-Clock-2.png') }}">
                                            </li>
                                            <li class="time-wrap">
                                                <h3 class="m-600 black">Los Angeles</h3>
                                                <h4 class="m-600 black">7:30 AM</h4>
                                            </li>
                                            <li class="utc-time">
                                                <h5 class="black">UTC−07:00</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="world-clock-time-wrap">
                                        <ul class="d-flex flex-wrap ">
                                            <li class="image"><img src="{{ asset('assets/images/World-Clock-3.png') }}">
                                            </li>
                                            <li class="time-wrap">
                                                <h3 class="m-600 black">London</h3>
                                                <h4 class="m-600 black">3:30 PM</h4>
                                            </li>
                                            <li class="utc-time">
                                                <h5 class="black">GMT+01:00</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="view-all justify-content-flex-end flex-wrap d-flex">
                                    <a href="#" class="blue-oblivion-color m-600">Add/Edit regions <i
                                            class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-content d-flex flex-wrap ">

                    <div class="dashboard-left">
                        <div class="complete-profile common-background">
                            <div class="complete-profile-wrap-in">
                                @php
                                    $completeProfile = 0;
                                    $number = 0;
                                    if(!empty(auth()->user()->image_relative_url) && !empty(auth()->user()->address) && !empty(auth()->user()->phone)){
                                        $completeProfile = 25;
                                        $number = 1;

                                        if($userClients > 0){
                                        $completeProfile += 25;
                                        $number += 1;
                                        }
                                        if ($userClients > 0 && $userTodo > 0) {
                                            $completeProfile += 25;
                                            $number += 1;
                                        }
                                        if ($userTodo > 0 && $userClients >= 10) {
                                            $completeProfile += 25;
                                            $number += 1;
                                        }
                                    }
                                @endphp
                                <div class="title  d-flex flex-wrap">
                                    <h3 class="m-600">Complete Your Profile ({{ $number }}/4)</h3>
                                    <div class="hide-all-profile justify-content-flex-end flex-wrap d-flex"><a
                                            href="#" class="blue-oblivion-color m-600">Hide <i class="fa fa-angle-up"
                                                aria-hidden="true"></i></a>
                                    </div>
                                    <div class="view-all-profile justify-content-flex-end flex-wrap d-flex"
                                        style="display: none"><a href="#" class="blue-oblivion-color m-600">Show <i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="complete-profile-bar-chart d-flex flex-wrap">
                                    <div class="complete-profile-bar-chart-filled d-flex flex-wrap" style="width:{{ $completeProfile }}%">
                                    </div>
                                </div>
                                <div class="complete-profile-details news-form-section">
                                    <div class="complete-profile-details-container news-form-right">
                                        <nav class="navigation" id="mainNav">
                                            <a class="navigation__link @if($completeProfile >= 25){{ 'active' }} @endif" href="{{ route('settings') }}">
                                                <div class="profile-navigation-wrap">
                                                    <div class="number"></div>
                                                    <div class="complete-profile-text-container">
                                                        <h4 class="@if($completeProfile >= 25){{'profile-step-active' }} @endif">
                                                            Main Information
                                                        </h4>
                                                        <h5 class="profile-step-description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Facilisis lobortis tempor.
                                                        </h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="navigation__link @if ($completeProfile >= 50) {{ 'active' }} @endif" href="{{ route('allClient') }}">
                                                <div class="navigation-wrap">
                                                    <div class="number"></div>
                                                    <div class="complete-profile-text-container">
                                                        <h4 class="@if($completeProfile >= 50){{ 'profile-step-active' }} @endif">
                                                            Add your first client
                                                        </h4>
                                                        <h5 class="profile-step-description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Facilisis lobortis tempor.
                                                        </h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="navigation__link @if ($completeProfile >= 75) {{ 'active' }} @endif" href="{{ route('toDO') }}">
                                                <div class="navigation-wrap">
                                                    <div class="number"></div>
                                                    <div class="complete-profile-text-container">
                                                        <h4 class="profile-step @if($completeProfile >= 75){{ 'profile-step-active' }} @endif">
                                                            Add your to-do
                                                        </h4>
                                                        <h5 class="profile-step-description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Facilisis lobortis tempor.
                                                        </h5>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="navigation__link @if ($completeProfile >= 100) {{ 'active' }} @endif" href="{{ route('allClient') }}">
                                                <div class="navigation-wrap">
                                                    <div class="number"></div>
                                                    <div class="complete-profile-text-container">
                                                        <h4 class="@if($completeProfile >= 100){{ 'profile-step-active' }} @endif">
                                                            Add 10 clients
                                                        </h4>
                                                        <h5 class="profile-step-description">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Facilisis lobortis tempor.
                                                        </h5>
                                                    </div>
                                                </div>
                                            </a>

                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-chart d-flex flex-wrap margin-15">
                            <div class="dashboard-chart-wrap col-3">
                                <div class="inner box-hover">
                                    <h3>New submissions sent</h3>
                                    <h2>10</h2>
                                    <div class="chart-details d-flex  align-items-center justify-content-space-between">
                                        <div class="chart-percentage">
                                            <h5>20% <img src="{{ asset('assets/images/chart-up.png') }}"></h5>
                                            <a href="#" class="dashboard-metric-btn">View submissions <img
                                                    src="{{ asset('assets/images/to-right.svg') }}"></a>
                                        </div>
                                        <div class="graph">
                                            <img src="{{ asset('assets/images/graph.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-chart-wrap col-3">
                                <div class="inner box-hover">
                                    <h3>Pending</h3>
                                    <h2>1</h2>
                                    <div class="chart-details d-flex align-items-center justify-content-space-between">
                                        <div class="chart-percentage up-graph">
                                            <h5>14% <img src="{{ asset('assets/images/chart-down.png') }}"></h5>
                                            <a href="#" class="dashboard-metric-btn">View production <img
                                                    src="{{ asset('assets/images/to-right.svg') }}"></a>
                                        </div>
                                        <div class="graph">
                                            <img src="{{ asset('assets/images/graph.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-chart-wrap col-3">
                                <div class="inner box-hover">
                                    <h3>Active bookings</h3>
                                    <h2>10</h2>
                                    <div class="chart-details d-flex align-items-center justify-content-space-between">
                                        <div class="chart-percentage up-graph">
                                            <h5>14% <img src="{{ asset('assets/images/chart-down.png') }}"></h5>
                                            <a href="#" class="dashboard-metric-btn">View bookings <img
                                                    src="{{ asset('assets/images/to-right.svg') }}"></a>
                                            <!-- <h6>{{ $clientCount }} Clients</h6> -->
                                        </div>
                                        <div class="graph">
                                            <img src="{{ asset('assets/images/graph.png') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (Auth::check() && auth()->user()->role_id != App\ModelsExtended\Role::Super_Admin)
                            <div class="common-background dashboard-chart">
                                <div class="sidebar-title">
                                    <h4>Company Communications</h4>
                                </div>
                                <div class="company_communications">
                                    @if ($topCompCommuni->count() > 0)
                                        @foreach ($topCompCommuni as $comCommu)
                                            <div class="company_communications_inner d-flex flex-wrap">
                                                <div class="image">
                                                    <img
                                                        src="{{ $comCommu->user->image_url ?? asset('assets/images/Avatar-Profile-Vector-PNG.png') }}">
                                                </div>
                                                <div class="left-content">
                                                    <h3>{{ $comCommu->title ?? '' }} <span
                                                            class="date">{{ date('h:i A', strtotime($comCommu->created_at)) }}</span>
                                                    </h3>
                                                    <div class="description">{!! nl2br($comCommu->description) ?? '' !!}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        Company Communications Not Found!
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- <div class="top-client common-background">
                        <div class="top-client-wrap-in">
                            <div class="title  d-flex flex-wrap">
                                <h3 class="m-600">Top Clients</h3>
                                <div class="view-all justify-content-flex-end flex-wrap d-flex"><a href="/all-clients"
                                        class="blue-oblivion-color m-600">View all clients <i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a></div>
                            </div>
                            <div class="top-client-details d-flex flex-wrap ">
                                @foreach ($topClients as $client)
    <div class="top-client-wrap">
                                    <div class="inner  box-hover">
                                        <div class="d-flex flex-wrap">
                                            <div class="imge-chart">
                                                <a href="{{ route('clientDetailView', ['id' => $client->id]) }}">
                                                @if ($client->profile_picture_url)
    <img src="{{ $client->profile_picture_url }}">
@else
    <img src="{{ asset('assets/images/Avatar-Profile-Vector-PNG.png') }}">
    @endif
                                                </a>
                                            </div>
                                            <div class="chart-percentage up-graph">
                                                <h5>0% <img src="{{ asset('assets/images/chart-up.png') }}"></h5>
                                            </div>
                                        </div>
                                        <div class="clients-detlis">
                                            <div class="client-name">
                                                <a href="{{ route('clientDetailView', ['id' => $client->id]) }}" style="color: black">
                                                    {{ $client->name }}</a></div>
                                            <a href="mailto:{{ $client->email }}">{{ $client->email }}</a>
                                            <h3>$0</h3>
                                        </div>
                                    </div>
                                </div>
    @endforeach
                                {{--                            <div class="top-client-wrap "> --}}
                                {{--                                <div class="inner box-hover"> --}}
                                {{--                                    <div class="d-flex flex-wrap"> --}}
                                {{--                                        <div class="imge-chart"> --}}
                                {{--                                            <img src="{{ asset('assets/images/clients-2.png') }}"> --}}
                                {{--                                        </div> --}}
                                {{--                                        <div class="chart-percentage up-graph"> --}}
                                {{--                                            <h5>27% <img src="{{ asset('assets/images/chart-up.png') }}">
                            </h5> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                    <div class="clients-detlis"> --}}
                                {{--                                        <div class="client-name">Martin Doe</div> --}}
                                {{--                                        <a href="mailto:martindoe@gmail.com">martindoe@gmail.com</a> --}}
                                {{--                                        <h3>$243,900</h3> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                {{--                            </div> --}}
                                {{--                            <div class="top-client-wrap"> --}}
                                {{--                                <div class="inner  box-hover"> --}}
                                {{--                                    <div class="d-flex flex-wrap"> --}}
                                {{--                                        <div class="imge-chart"> --}}
                                {{--                                            <img src="{{ asset('assets/images/clients-6.png') }}"> --}}
                                {{--                                        </div> --}}
                                {{--                                        <div class="chart-percentage"> --}}
                                {{--                                            <h5>27% <img src="{{ asset('assets/images/chart-up.png') }}">
                            </h5> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                    <div class="clients-detlis"> --}}
                                {{--                                        <div class="client-name">Maddy Jones</div> --}}
                                {{--                                        <a href="mailto:martindoe@gmail.com">martindoe@gmail.com</a> --}}
                                {{--                                        <h3>$243,900</h3> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                {{--                            </div> --}}
                                {{--                            <div class="top-client-wrap "> --}}
                                {{--                                <div class="inner box-hover"> --}}
                                {{--                                    <div class="d-flex flex-wrap"> --}}
                                {{--                                        <div class="imge-chart"> --}}
                                {{--                                            <img src="{{ asset('assets/images/clients-5.png') }}"> --}}
                                {{--                                        </div> --}}
                                {{--                                        <div class="chart-percentage"> --}}
                                {{--                                            <h5>27% <img src="{{ asset('assets/images/chart-up.png') }}">
                            </h5> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                    <div class="clients-detlis"> --}}
                                {{--                                        <div class="client-name">Mark Limm</div> --}}
                                {{--                                        <a href="mailto:martindoe@gmail.com">martindoe@gmail.com</a> --}}
                                {{--                                        <h3>$243,900</h3> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                {{--                            </div> --}}
                                {{--                            <div class="top-client-wrap "> --}}
                                {{--                                <div class="inner box-hover"> --}}
                                {{--                                    <div class="d-flex flex-wrap"> --}}
                                {{--                                        <div class="imge-chart"> --}}
                                {{--                                            <img src="{{ asset('assets/images/clients-4.png') }}"> --}}
                                {{--                                        </div> --}}
                                {{--                                        <div class="chart-percentage down-graph"> --}}
                                {{--                                            <h5>27% <img src="{{ asset('assets/images/chart-down.png') }}">
                            </h5> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                    <div class="clients-detlis"> --}}
                                {{--                                        <div class="client-name">Stephen James</div> --}}
                                {{--                                        <a href="mailto:martindoe@gmail.com">martindoe@gmail.com</a> --}}
                                {{--                                        <h3>$243,900</h3> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                {{--                            </div> --}}
                                {{--                            <div class="top-client-wrap "> --}}
                                {{--                                <div class="inner box-hover"> --}}
                                {{--                                    <div class="d-flex flex-wrap"> --}}
                                {{--                                        <div class="imge-chart"> --}}
                                {{--                                            <img src="{{ asset('assets/images/clients-3.png') }}"> --}}
                                {{--                                        </div> --}}
                                {{--                                        <div class="chart-percentage down-graph"> --}}
                                {{--                                            <h5>27% <img src="{{ asset('assets/images/chart-down.png') }}">
                            </h5> --}}
                                {{--                                        </div> --}}
                                {{--                                    </div> --}}
                                {{--                                    <div class="clients-detlis"> --}}
                                {{--                                        <div class="client-name">Anna Lock</div> --}}
                                {{--                                        <a href="mailto:martindoe@gmail.com">martindoe@gmail.com</a> --}}
                                {{--                                        <h3>$243,900</h3> --}}
                                {{--                                    </div> --}}
                                {{--                                </div> --}}
                                {{--                            </div> --}}
                            </div>
                        </div>
                    </div> -->
                    </div>
                    <div class="dashboard-right sidebar">
                        <div class="dashboard-right-wrap common-background">
                            <div class="sidebar-title">
                                <h4>This week’s summary</h4>
                            </div>
                            <div class="summary-wrap">
                                <div class="week-summary">
                                    <div class="summary-wrap">
                                        <input type="checkbox" checked="checked">
                                        <label> Complete all booking information for trip</label>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis tempor.
                                    </p>
                                    <div class="due-date"><a href="#">Due Monday</a></div>
                                </div>
                                <div class="week-summary">
                                    <div class="summary-wrap">
                                        <input type="checkbox" checked="checked">
                                        <label>Submit proposals for new clients</label>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis tempor.
                                    </p>
                                    <div class="due-date"><a href="#">Due Monday</a></div>
                                </div>
                                <div class="week-summary">
                                    <div class="summary-wrap">
                                        <input type="checkbox" checked="checked">
                                        <label>Review revenue numbers for March</label>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis tempor.
                                    </p>
                                    <div class="due-date"><a href="#">Due Monday</a></div>
                                </div>
                            </div>
                            <div class="view-all  d-flex flex-wrap justify-content-flex-end">
                                <a href="#" class="blue-oblivion-color m-600">View all to-dos <i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        @if (Auth::check() && auth()->user()->role_id != App\ModelsExtended\Role::Super_Admin)
                            <div class="faq_accordion common-background">
                                <div class="sidebar-title">
                                    <h4>Frequently Asked Question</h4>
                                </div>
                                @if ($topFaqs->count() > 0)
                                    <div class="accordion-container">
                                        @foreach ($topFaqs as $faq)
                                            <div class="set">
                                                <a href="#" class="faq-title">
                                                    {{ $faq->question ?? '' }}
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="content">
                                                    {!! nl2br($faq->answer) ?? '' !!}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="view-all  d-flex flex-wrap justify-content-flex-end">
                                        <a href="{{ route('faqs.view') }}" class="blue-oblivion-color m-600">View More <i
                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                @else
                                    <div class="accordion-container">
                                        Frequently Asked Question Not Found!
                                    </div>
                                @endif
                            </div>
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
        jQuery(document).ready(function($) {});
        $(".hide-all-profile").on("click", function() {
            $(".hide-all-profile").hide();
            $(".view-all-profile").show();
            $(".complete-profile-bar-chart").hide();
            $(".complete-profile-details").hide();
        });
        $(".view-all-profile").on("click", function() {
            $(".view-all-profile").hide();
            $(".hide-all-profile").show();
            $(".complete-profile-bar-chart").show();
            $(".complete-profile-details").show();
        });
    </script>
@endpush
