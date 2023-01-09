<?php /** @var \App\ModelsExtended\Agent[]|\Illuminate\Database\Eloquent\Collection $agents **/ ?>


@extends('pages.layouts.app')

@section('content')
    <div class="dashboard-details dashboard-header padding-spacing">
        <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
            <h1>Agents</h1>
        </div>
        <div class="clients-tab-section">
            <div class="clients-tab d-flex flex-wrap justify-content-space-between">
                <ul class="tabs agents-tabs d-flex flex-wrap">
                    <li class="active" rel="tab1"><span>All</span></li>
{{--                    <li rel="tab2"><span>Open</span></li>--}}
{{--                    <li rel="tab3"><span>Completed</span></li>--}}
                </ul>
{{--                <div class="search-filetr d-flex flex-wrap">--}}
{{--                    <i class="bi bi-funnel"></i>--}}
{{--                    <div class="trip-view-search">--}}
{{--                        <a data-fancybox="" data-src="#search-popup">--}}
{{--                            <div class="search bisearch">--}}
{{--                                <!-- <img src="images/search.png"> -->--}}
{{--                                <i class="bi bi-search"></i>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div style="display: none;" id="search-popup">--}}
{{--                            <h1>Search</h1>--}}
{{--                            <input type="search" id="gsearch" name="gsearch"--}}
{{--                                placeholder="Search for bookings, clients and suppliers.">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                    <div class="agents-all-tab">
                        <div class="related-contacts common-background full-width ">
                            <div class="related-contacts-details">
                                <table>
                                    <tbody>
                                    @forelse( $agents as $agent )
                                        <tr>
                                            <td style="width: 320px">
                                                <div class="sidebar-profile view-task-btn"
                                                onclick="window.open('{{ $agent->weblink }}')">
                                                    <img src="{{ $agent->image_url }}" width="26" style="object-fit: cover"/>
                                                    <strong>{{ $agent->name }}</strong>
                                                </div>
{{--                                                <div class="view-profile trip-details-tasks" id="view-profile"--}}
{{--                                                    style="display: none;">--}}
{{--                                                    <div class="close"><img--}}
{{--                                                            src="{{ asset('assets/images/close-2.png') }}"></div>--}}
{{--                                                    <div class="view-profile-wrap">--}}
{{--                                                        <div class="image">--}}
{{--                                                            <img src="{{ asset('assets/images/view-profile.png') }}">--}}
{{--                                                        </div>--}}
{{--                                                        <h3>Sarah Stevens</h3>--}}
{{--                                                        <ul class="address-details">--}}
{{--                                                            <li>NEW YORK, NY</li>--}}
{{--                                                            <li>8 years of experience</li>--}}
{{--                                                            <li>Specialty</li>--}}
{{--                                                        </ul>--}}
{{--                                                        <div class="travel">--}}
{{--                                                            FAMILY TRAVEL, ROMANCE, CRUISE--}}
{{--                                                            <div class="zoom-id-img">--}}
{{--                                                                <div class="zoom-img"><img--}}
{{--                                                                        src="{{ asset('assets/images/zoom-img.png') }}">--}}
{{--                                                                </div>--}}
{{--                                                                <div class="img-a"><img src="{{ asset('assets/images/img-a.png') }}"></div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="bio_content-wrap">--}}
{{--                                                            <h3>Bio</h3>--}}
{{--                                                            <div class="bio-content">--}}
{{--                                                                <div class="content">--}}
{{--                                                                    After embarking on a 16-year career at one of the--}}
{{--                                                                    world’s largest hotel companies, Monica discovered--}}
{{--                                                                    luxury travel bliss while exploring a breadth of--}}
{{--                                                                    destinations. Some of her favorites? An adventurous sand--}}
{{--                                                                    dune ride across the Dubai desert … meandering through--}}
{{--                                                                    London to find the best spot for afternoon tea & scones--}}
{{--                                                                    … taking the first sip of vin chaud at a quiet French--}}
{{--                                                                    café in Paris … cruising along the Adriatic Sea admiring--}}
{{--                                                                    the beauty of the Greek Isles … shopping in New York--}}
{{--                                                                    City with girlfriends … historical sightseeing in--}}
{{--                                                                    Washington, D.C. with her children … and relaxing on--}}
{{--                                                                    pristine beaches with her beau …--}}
{{--                                                                    Monica has also worked with and arranged VIP travel--}}
{{--                                                                    experiences for some of the most highly-regarded travel--}}
{{--                                                                    bloggers and influencers in the travel industry.--}}

{{--                                                                    Monica says when thinking about your next vacation, “Let--}}
{{--                                                                    someone else arrange your travels, but plan to indulge--}}
{{--                                                                    and expect to be delighted. Opt for accommodations nicer--}}
{{--                                                                    than your own home, taste foods you don’t have to spend--}}
{{--                                                                    hours to prepare yourself and try or learn something new--}}
{{--                                                                    every chance you get. I will diligently uncover the best--}}
{{--                                                                    options for you to experience luxury travel on all--}}
{{--                                                                    levels.”--}}



{{--                                                                    My most memorable travel experiences are when I see--}}
{{--                                                                    destinations through my daughters’ eyes. Looking at--}}
{{--                                                                    their expressions the first time they ever set eyes on--}}
{{--                                                                    the vast ocean aboard a mega cruise ship, gazing at--}}
{{--                                                                    Cinderella’s castle at the Magic Kingdom, looking up at--}}
{{--                                                                    huge skyscrapers in New York City… the list goes on and--}}
{{--                                                                    on and will go on and on…--}}

{{--                                                                    Working for one of the world’s largest hotel companies--}}
{{--                                                                    for many years, gave me so much insight into the travel--}}
{{--                                                                    industry, in addition to the destinations that I--}}
{{--                                                                    traveled to near and far. Being ultra organized and--}}
{{--                                                                    having a passion for planning put the cherry on top! Put--}}
{{--                                                                    all of it together with knowing how to cultivate--}}
{{--                                                                    relationships from working with the hospitality and--}}
{{--                                                                    travel media was the perfect formula for me to become a--}}
{{--                                                                    travel advisor. And, I’m loving it!--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </td>
                                            <td style="width: 35%">
                                                @if( $agent->email )
                                                <img src="{{ asset('assets/images/@.png') }}"> {{ $agent->email }}
                                                @endif
                                            </td>
{{--                                            <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
                                            <td style="width: 20%"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $agent->address }}</td>
{{--                                            <td>--}}
{{--                                                <div class="zoom-img">--}}
{{--                                                    <a href="#zoom-popup" data-fancybox><img--}}
{{--                                                            src="{{ asset('assets/images/zoom-img.png') }}"></a>--}}
{{--                                                    <div class="zoom-popup" id="zoom-popup" style="display: none;">--}}
{{--                                                        <div class="inner">--}}
{{--                                                            <img src="{{ asset('assets/images/zoom-popup.png') }}">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
                                            <td><a href="{{ $agent->weblink }}" target="_blank">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    {{--                                        <tr>--}}
{{--                                            <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                    Stevens</strong></td>--}}
{{--                                            <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                            <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New--}}
{{--                                                York, NY, 10018</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="zoom-img">--}}
{{--                                                    <a href="#zoom-popup" data-fancybox><img--}}
{{--                                                            src="{{ asset('assets/images/zoom-img.png') }}"></a>--}}
{{--                                                    <div class="zoom-popup" id="zoom-popup" style="display: none;">--}}
{{--                                                        <div class="inner">--}}
{{--                                                            <img src="{{ asset('assets/images/zoom-popup.png') }}">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                    Stevens</strong></td>--}}
{{--                                            <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                            <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New--}}
{{--                                                York, NY, 10018</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="zoom-img"><a href="#"></a></div>--}}
{{--                                            </td>--}}
{{--                                            <td><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                    Stevens</strong></td>--}}
{{--                                            <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                            <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New--}}
{{--                                                York, NY, 10018</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="zoom-img"><a href="#"></a></div>--}}
{{--                                            </td>--}}
{{--                                            <td><a href="#"><i class="fa fa-angle-right"--}}
{{--                                                        aria-hidden="true"></i></a></td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                    Stevens</strong></td>--}}
{{--                                            <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                            <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New--}}
{{--                                                York, NY, 10018</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="zoom-img">--}}
{{--                                                    <a href="#zoom-popup" data-fancybox><img--}}
{{--                                                            src="{{ asset('assets/images/zoom-img.png') }}"></a>--}}
{{--                                                    <div class="zoom-popup" id="zoom-popup" style="display: none;">--}}
{{--                                                        <div class="inner">--}}
{{--                                                            <img src="{{ asset('assets/images/zoom-popup.png') }}">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td><a href="#"><i class="fa fa-angle-right"--}}
{{--                                                        aria-hidden="true"></i></a></td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                    Stevens</strong></td>--}}
{{--                                            <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                            <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New--}}
{{--                                                York, NY, 10018</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="zoom-img">--}}
{{--                                                    <a href="#zoom-popup" data-fancybox><img--}}
{{--                                                            src="{{ asset('assets/images/zoom-img.png') }}"></a>--}}
{{--                                                    <div class="zoom-popup" id="zoom-popup" style="display: none;">--}}
{{--                                                        <div class="inner">--}}
{{--                                                            <img src="{{ asset('assets/images/zoom-popup.png') }}">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td><a href="#"><i class="fa fa-angle-right"--}}
{{--                                                        aria-hidden="true"></i></a></td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                    Stevens</strong></td>--}}
{{--                                            <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                            <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New--}}
{{--                                                York, NY, 10018</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="zoom-img">--}}
{{--                                                    <a href="#zoom-popup" data-fancybox><img--}}
{{--                                                            src="{{ asset('assets/images/zoom-img.png') }}"></a>--}}
{{--                                                    <div class="zoom-popup" id="zoom-popup" style="display: none;">--}}
{{--                                                        <div class="inner">--}}
{{--                                                            <img src="{{ asset('assets/images/zoom-popup.png') }}">--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td><a href="#"><i class="fa fa-angle-right"--}}
{{--                                                        aria-hidden="true"></i></a></td>--}}
{{--                                        </tr>--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div id="tab2" class="tab_content">--}}
{{--                    <div class="agents-all-tab">--}}
{{--                        <div class="related-contacts common-background full-width ">--}}
{{--                            <div class="related-contacts-details">--}}
{{--                                <table>--}}
{{--                                    <tr>--}}
{{--                                        <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                Stevens</strong></td>--}}
{{--                                        <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                        <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                        <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New York,--}}
{{--                                            NY, 10018</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="zoom-img"><a href="#"></a></div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                Stevens</strong></td>--}}
{{--                                        <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                        <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                        <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New York,--}}
{{--                                            NY, 10018</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="zoom-img"><a href="#"></a></div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="sidebar-profile view-task-btn"><img--}}
{{--                                                    src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                    Stevens</strong></div>--}}
{{--                                            <div class="view-profile trip-details-tasks" id="view-profile"--}}
{{--                                                style="display: none;">--}}
{{--                                                <div class="close"><img src="{{ asset('assets/images/close-2.png') }}">--}}
{{--                                                </div>--}}
{{--                                                <div class="view-profile-wrap">--}}
{{--                                                    <div class="image">--}}
{{--                                                        <img src="{{ asset('assets/images/view-profile.png') }}">--}}
{{--                                                    </div>--}}
{{--                                                    <h3>Sarah Stevens</h3>--}}
{{--                                                    <ul class="address-details">--}}
{{--                                                        <li>NEW YORK, NY</li>--}}
{{--                                                        <li>8 years of experience</li>--}}
{{--                                                        <li>Specialty</li>--}}
{{--                                                    </ul>--}}
{{--                                                    <div class="travel">--}}
{{--                                                        FAMILY TRAVEL, ROMANCE, CRUISE--}}
{{--                                                        <div class="zoom-id-img">--}}
{{--                                                            <div class="zoom-img"><img--}}
{{--                                                                    src="{{ asset('assets/images/zoom-img.png') }}"></div>--}}
{{--                                                            <div class="img-a"><img--}}
{{--                                                                    src="{{ asset('assets/images/img-a.png') }}"></div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="bio_content-wrap">--}}
{{--                                                        <h3>Bio</h3>--}}
{{--                                                        <div class="bio-content">--}}
{{--                                                            <div class="content">--}}
{{--                                                                After embarking on a 16-year career at one of the world’s--}}
{{--                                                                largest hotel companies, Monica discovered luxury travel--}}
{{--                                                                bliss while exploring a breadth of destinations. Some of her--}}
{{--                                                                favorites? An adventurous sand dune ride across the Dubai--}}
{{--                                                                desert … meandering through London to find the best spot for--}}
{{--                                                                afternoon tea & scones … taking the first sip of vin chaud--}}
{{--                                                                at a quiet French café in Paris … cruising along the--}}
{{--                                                                Adriatic Sea admiring the beauty of the Greek Isles …--}}
{{--                                                                shopping in New York City with girlfriends … historical--}}
{{--                                                                sightseeing in Washington, D.C. with her children … and--}}
{{--                                                                relaxing on pristine beaches with her beau …--}}
{{--                                                                Monica has also worked with and arranged VIP travel--}}
{{--                                                                experiences for some of the most highly-regarded travel--}}
{{--                                                                bloggers and influencers in the travel industry.--}}

{{--                                                                Monica says when thinking about your next vacation, “Let--}}
{{--                                                                someone else arrange your travels, but plan to indulge and--}}
{{--                                                                expect to be delighted. Opt for accommodations nicer than--}}
{{--                                                                your own home, taste foods you don’t have to spend hours to--}}
{{--                                                                prepare yourself and try or learn something new every chance--}}
{{--                                                                you get. I will diligently uncover the best options for you--}}
{{--                                                                to experience luxury travel on all levels.”--}}



{{--                                                                My most memorable travel experiences are when I see--}}
{{--                                                                destinations through my daughters’ eyes. Looking at their--}}
{{--                                                                expressions the first time they ever set eyes on the vast--}}
{{--                                                                ocean aboard a mega cruise ship, gazing at Cinderella’s--}}
{{--                                                                castle at the Magic Kingdom, looking up at huge skyscrapers--}}
{{--                                                                in New York City… the list goes on and on and will go on and--}}
{{--                                                                on…--}}

{{--                                                                Working for one of the world’s largest hotel companies for--}}
{{--                                                                many years, gave me so much insight into the travel--}}
{{--                                                                industry, in addition to the destinations that I traveled to--}}
{{--                                                                near and far. Being ultra organized and having a passion for--}}
{{--                                                                planning put the cherry on top! Put all of it together with--}}
{{--                                                                knowing how to cultivate relationships from working with the--}}
{{--                                                                hospitality and travel media was the perfect formula for me--}}
{{--                                                                to become a travel advisor. And, I’m loving it!--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                        <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                        <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New York,--}}
{{--                                            NY, 10018</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="zoom-img">--}}
{{--                                                <a href="#zoom-popup" data-fancybox><img--}}
{{--                                                        src="{{ asset('assets/images/zoom-img.png') }}"></a>--}}
{{--                                                <div class="zoom-popup" id="zoom-popup" style="display: none;">--}}
{{--                                                    <div class="inner">--}}
{{--                                                        <img src="{{ asset('assets/images/zoom-popup.png') }}">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div id="tab3" class="tab_content">--}}
{{--                    <div class="agents-all-tab">--}}
{{--                        <div class="related-contacts common-background full-width ">--}}
{{--                            <div class="related-contacts-details">--}}
{{--                                <table>--}}
{{--                                    <tr>--}}
{{--                                        <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                Stevens</strong></td>--}}
{{--                                        <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                        <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                        <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New York,--}}
{{--                                            NY, 10018</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="zoom-img"><a href="#"></a></div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><img src="{{ asset('assets/images/Martin-Doe.png') }}"><strong>Sarah--}}
{{--                                                Stevens</strong></td>--}}
{{--                                        <td><img src="{{ asset('assets/images/@.png') }}"> maria88@gmail.com</td>--}}
{{--                                        <td><i class="fa fa-phone" aria-hidden="true"></i> +1(212) 234-1234</td>--}}
{{--                                        <td><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st Street, New York,--}}
{{--                                            NY, 10018</td>--}}
{{--                                        <td>--}}
{{--                                            <div class="zoom-img"><a href="#"></a></div>--}}
{{--                                        </td>--}}
{{--                                        <td><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
