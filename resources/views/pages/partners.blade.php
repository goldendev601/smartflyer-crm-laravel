@extends('pages.layouts.app')

@section('content')
    <div class="dashboard-details dashboard-header padding-spacing">
        <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
            <h1>Partners</h1>
            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                <li><a href="javascript:void(0)">Pending tasks</a></li>
            </ul>
        </div>
        <div class="clients-tab-section">
            <div class="clients-tab d-flex flex-wrap justify-content-space-between">
                <ul class="tabs outer-tabs d-flex flex-wrap partners-clients-tab">
                    <li class="active" rel="tab1"><span>All</span></li>
                    <li rel="tab2"><span>Hotels</span></li>
                    <li rel="tab3"><span>CRUISES</span></li>
                    <li rel="tab4"><span>DMC'S</span></li>
                    <li rel="tab5"><span>INSURANCE</span></li>
                    <li rel="tab6"><span>Transportation</span></li>
                    <li rel="tab7"><span>Air</span></li>
                </ul>
                <div class="search-filetr d-flex flex-wrap">
                    <i class="bi bi-funnel"></i>
                    <div class="trip-view-search">
                        <a data-fancybox="" data-src="#search-popup">
                            <div class="search bisearch">
                                <!-- <img src="images/search.png"> -->
                                <i class="bi bi-search"></i>
                            </div>
                        </a>
                        <div style="display: none;" id="search-popup">
                            <h1>Search</h1>
                            <input type="search" id="gsearch" name="gsearch"
                                placeholder="Search for bookings, clients and suppliers.">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab_container partners-tab-section">
                <div id="tab1" class="tab_content">
                    <div class="agents-all-tab partners-all-tab">
                        <div class="related-contacts common-background full-width ">
                            <div class="partners-main-section">
                                <div class="title">
                                    <h3>Frequently Used Partners</h3>
                                </div>
                                <div class="partners-main-wrap">
                                    <div class="destinations-wrap d-flex flex-wrap">
                                        <div class="destinations-in">
                                            <a data-fancybox="" href="#france">
                                                <div class="destinations-image white"
                                                    style="background: url({{ asset('assets/images/product1.png') }}) no-repeat center /cover;">
                                                    <h2>GRACE HOTEL SANTORINI </h2>
                                                    <span>Santorini, Greece</span>
                                                </div>
                                            </a>
                                            <div style="display: none;" id="france"
                                                class="destinations-trip-view partners-destinations-popup">
                                                <div class="trip-view-section ">
                                                    <div
                                                        class="trip-view-left d-flex flex-wrap full-width align-items-center ">
                                                        <div class="trip-header partner-view-left col-6">
                                                            <div class="partner-view-inner">
                                                                <div class="content">
                                                                    <h2>Grace Hotel Santorini</h2>
                                                                    <ul>
                                                                        <li>Santorini</li>
                                                                        <li>Greece</li>
                                                                    </ul>
                                                                    <p>Grace Hotel Santorini is an exclusive luxury boutique
                                                                        hotel perched high on Santorini’s Caldera. It has
                                                                        been designed to integrate perfectly with its unique
                                                                        geography. </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="partner-view-right col-6">
                                                            <div class="partner-view-img">
                                                                <img src="{{ asset('assets/images/destination-mage.png') }}">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="partner-view-tabbing">
                                                        <ul class="partners-inner-tabs tabs  partner-view-tab">
                                                            <li class="tab8 active" rel="tab8">OVERVIEW</li>
                                                            <li class="tab9" rel="tab9">CONTACTS</li>
                                                            <li class="tab10" rel="tab10">Property Specifics</li>
                                                            <li class="tab11" rel="tab11">How to book</li>
                                                            <li class="tab12" rel="tab12">Selling points</li>
                                                            <li class="tab13" rel="tab13">MArketing assets</li>
                                                            <li class="tab14" rel="tab14">PROMOTIONS </li>
                                                            <li class="tab15" rel="tab15">DOCUMENTS</li>
                                                            <li class="tab16" rel="tab16">Reviews</li>
                                                        </ul>
                                                        <div class="tab_container">
                                                            <div id="tab8" class="tab_content" style="display: block;">
                                                                <h2>SmartFlyer Exclusives</h2>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                    Donec ac metus augue.</p>
                                                            </div>

                                                            <div id="tab9" class="tab_content">
                                                                <h2>Tab 4 content</h2>
                                                                <p>Integer ultrices lacus sit amet lorem viverra consequat.
                                                                    Vivamus lacinia interdum sapien non faucibus. Maecenas
                                                                    bibendum, lectus at ultrices viverra, elit magna egestas
                                                                    magna, a adipiscing mauris justo nec eros.</p>
                                                            </div>

                                                            <div id="tab10" class="tab_content">
                                                                <h2>SmartFlyer Exclusives10</h2>
                                                                <p>Integer ultrices lacus sit amet lorem viverra consequat.
                                                                    Vivamus lacinia interdum sapien non faucibus. Maecenas
                                                                    bibendum, lectus at ultrices viverra, elit magna egestas
                                                                    magna, a adipiscing mauris justo nec eros.</p>
                                                            </div>
                                                            <div id="tab11" class="tab_content">
                                                                <h2>SmartFlyer Exclusives</h2>
                                                                <p>Integer ultrices lacus sit amet lorem viverra consequat.
                                                                    Vivamus lacinia interdum sapien non faucibus. Maecenas
                                                                    bibendum, lectus at ultrices viverra, elit magna egestas
                                                                    magna, a adipiscing mauris justo nec eros.</p>
                                                            </div>
                                                            <div id="tab12" class="tab_content">
                                                                <h2>SmartFlyer Exclusives</h2>
                                                                <p>Integer ultrices lacus sit amet lorem viverra consequat.
                                                                    Vivamus lacinia interdum sapien non faucibus. Maecenas
                                                                    bibendum, lectus at ultrices viverra, elit magna egestas
                                                                    magna, a adipiscing mauris justo nec eros.</p>
                                                            </div>
                                                            <div id="tab13" class="tab_content">
                                                                <h2>SmartFlyer Exclusives</h2>
                                                                <p>Integer ultrices lacus sit amet lorem viverra consequat.
                                                                    Vivamus lacinia interdum sapien non faucibus. Maecenas
                                                                    bibendum, lectus at ultrices viverra, elit magna egestas
                                                                    magna, a adipiscing mauris justo nec eros.</p>
                                                            </div>
                                                            <div id="tab14" class="tab_content">
                                                                <h2>SmartFlyer Exclusives</h2>
                                                                <p>Integer ultrices lacus sit amet lorem viverra consequat.
                                                                    Vivamus lacinia interdum sapien non faucibus. Maecenas
                                                                    bibendum, lectus at ultrices viverra, elit magna egestas
                                                                    magna, a adipiscing mauris justo nec eros.</p>
                                                            </div>
                                                            <div id="tab15" class="tab_content">
                                                                <h2>SmartFlyer Exclusives</h2>
                                                                <p>Integer ultrices lacus sit amet lorem viverra consequat.
                                                                    Vivamus lacinia interdum sapien non faucibus. Maecenas
                                                                    bibendum, lectus at ultrices viverra, elit magna egestas
                                                                    magna, a adipiscing mauris justo nec eros.</p>
                                                            </div>
                                                            <div id="tab16" class="tab_content">
                                                                <h2>SmartFlyer Exclusives</h2>
                                                                <p>Integer ultrices lacus sit amet lorem viverra consequat.
                                                                    Vivamus lacinia interdum sapien non faucibus. Maecenas
                                                                    bibendum, lectus at ultrices viverra, elit magna egestas
                                                                    magna, a adipiscing mauris justo nec eros.</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="destinations-in">
                                            <a data-fancybox="" href="#springs">
                                                <div class="destinations-image white"
                                                    style="background: url({{ asset('assets/images/product2.png') }}) no-repeat center /cover;">
                                                    <h2>Palm Springs</h2>
                                                    <span>Capri, Palm Springs</span>
                                                    <div class="content">10 Trips in the last Month</div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="destinations-in">
                                            <a data-fancybox="" href="#italy">
                                                <div class="destinations-image white"
                                                    style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                                    <h2>Italy</h2>
                                                    <span>Capri, Italy</span>
                                                    <div class="content">10 Trips in the last Month</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="destinations-in">
                                            <a data-fancybox="" href="#bahamas">
                                                <div class="destinations-image white"
                                                    style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                                    <h2>Bahamas</h2>
                                                    <span>Bahamas</span>
                                                    <div class="content">10 Trips in the last Month</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="partners-main-section">
                                <div class="title">
                                    <h3>All partners</h3>
                                </div>
                                <div class="partners-main-wrap">
                                    <div class="destinations-wrap d-flex flex-wrap">
                                        <div class="destinations-in">
                                            <a data-fancybox="" href="#france">
                                                <div class="destinations-image white"
                                                    style="background: url({{ asset('assets/images/product1.png') }}) no-repeat center /cover;">
                                                    <h2>GRACE HOTEL SANTORINI </h2>
                                                    <span>Santorini, Greece</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="destinations-in">
                                            <a data-fancybox="" href="#springs">
                                                <div class="destinations-image white"
                                                    style="background: url({{ asset('assets/images/product2.png') }}) no-repeat center /cover;">
                                                    <h2>Palm Springs</h2>
                                                    <span>Capri, Palm Springs</span>
                                                    <div class="content">10 Trips in the last Month</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="destinations-in">
                                            <a data-fancybox="" href="#italy">
                                                <div class="destinations-image white"
                                                    style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                                    <h2>Italy</h2>
                                                    <span>Capri, Italy</span>
                                                    <div class="content">10 Trips in the last Month</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="destinations-in">
                                            <a data-fancybox="" href="#bahamas">
                                                <div class="destinations-image white"
                                                    style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                                    <h2>Bahamas</h2>
                                                    <span>Bahamas</span>
                                                    <div class="content">10 Trips in the last Month</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab2" class="tab_content">
                    <div class="partners-main-section">
                        <div class="title">
                            <h3>Frequently Used Partners</h3>
                        </div>
                        <div class="partners-main-wrap">
                            <div class="destinations-wrap d-flex flex-wrap">
                                <div class="destinations-in">
                                    <a href="#france">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product1.png') }}) no-repeat center /cover;">
                                            <h2>GRACE HOTEL SANTORINI </h2>
                                            <span>Santorini, Greece</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#springs">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product2.png') }}) no-repeat center /cover;">
                                            <h2>Palm Springs</h2>
                                            <span>Capri, Palm Springs</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#italy">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Italy</h2>
                                            <span>Capri, Italy</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#bahamas">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Bahamas</h2>
                                            <span>Bahamas</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab3" class="tab_content">
                    <div class="partners-main-section">
                        <div class="title">
                            <h3>Frequently Used Partners</h3>
                        </div>
                        <div class="partners-main-wrap">
                            <div class="destinations-wrap d-flex flex-wrap">
                                <div class="destinations-in">
                                    <a href="#france">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product1.png') }}) no-repeat center /cover;">
                                            <h2>GRACE HOTEL SANTORINI </h2>
                                            <span>Santorini, Greece</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#bahamas">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Bahamas</h2>
                                            <span>Bahamas</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab4" class="tab_content">
                    <div class="partners-main-section">
                        <div class="title">
                            <h3>Frequently Used Partners</h3>
                        </div>
                        <div class="partners-main-wrap">
                            <div class="destinations-wrap d-flex flex-wrap">
                                <div class="destinations-in">
                                    <a href="#france">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product1.png') }}) no-repeat center /cover;">
                                            <h2>GRACE HOTEL SANTORINI </h2>
                                            <span>Santorini, Greece</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#springs">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product2.png') }}) no-repeat center /cover;">
                                            <h2>Palm Springs</h2>
                                            <span>Capri, Palm Springs</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#italy">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Italy</h2>
                                            <span>Capri, Italy</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab5" class="tab_content">
                    <div class="partners-main-section">
                        <div class="title">
                            <h3>Frequently Used Partners</h3>
                        </div>
                        <div class="partners-main-wrap">
                            <div class="destinations-wrap d-flex flex-wrap">
                                <div class="destinations-in">
                                    <a href="#italy">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Italy</h2>
                                            <span>Capri, Italy</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#bahamas">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Bahamas</h2>
                                            <span>Bahamas</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab6" class="tab_content">
                    <div class="partners-main-section">
                        <div class="title">
                            <h3>Frequently Used Partners</h3>
                        </div>
                        <div class="partners-main-wrap">
                            <div class="destinations-wrap d-flex flex-wrap">
                                <div class="destinations-in">
                                    <a href="#france">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product1.png') }}) no-repeat center /cover;">
                                            <h2>GRACE HOTEL SANTORINI </h2>
                                            <span>Santorini, Greece</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="destinations-in">
                                    <a href="#italy">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Italy</h2>
                                            <span>Capri, Italy</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#bahamas">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Bahamas</h2>
                                            <span>Bahamas</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#bahamas">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Bahamas</h2>
                                            <span>Bahamas</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab7" class="tab_content">
                    <div class="partners-main-section">
                        <div class="title">
                            <h3>Frequently Used Partners</h3>
                        </div>
                        <div class="partners-main-wrap">
                            <div class="destinations-wrap d-flex flex-wrap">
                                <div class="destinations-in">
                                    <a href="#france">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product1.png') }}) no-repeat center /cover;">
                                            <h2>GRACE HOTEL SANTORINI </h2>
                                            <span>Santorini, Greece</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#springs">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product2.png') }}) no-repeat center /cover;">
                                            <h2>Palm Springs</h2>
                                            <span>Capri, Palm Springs</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#italy">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Italy</h2>
                                            <span>Capri, Italy</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#bahamas">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Bahamas</h2>
                                            <span>Bahamas</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#bahamas">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Bahamas</h2>
                                            <span>Bahamas</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="destinations-in">
                                    <a href="#bahamas">
                                        <div class="destinations-image white"
                                            style="background: url({{ asset('assets/images/product3.png') }}) no-repeat center /cover;">
                                            <h2>Bahamas</h2>
                                            <span>Bahamas</span>
                                            <div class="content">10 Trips in the last Month</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
