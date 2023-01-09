@extends('pages.layouts.app')

@section('content')
<div class="dashboard-details dashboard-header padding-spacing">
    <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
        <h1>Trips</h1>
        <ul class="d-flex flex-wrap justify-content-flex-end m-600">
            <li>
                <a href="#trip-pending-tasks" class="view-task-btn">Pending tasks</a>
                <div class="trip-pending-tasks ">
                    <div class="trip-details-tasks white" style="">
                        <h1>Here is what’s pending</h1>
                        <div class="multigraph">
                            <div class="multigraph-content">
                                <div class="multigraph-width">
                                    <span>Your progress</span>
                                    <p>890,344 Sales</p>
                                </div>
                            </div>
                            <span class="graph-div"></span>
                            <div class="content">Keep up the good job, you are among the top 1% of sellers</div>
                        </div>
                        <div class="dashboard-right">
                            <div class="trip-details-header d-flex flex-wrap align-items-center">
                                <h2>To-do this week</h2>
                                <a href="#">Add task</a>
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
                </div>
            </li>
            <li><a href="javascript:void(0)">New Report</a>
            </li>
            <li>
                <a href="#add-client-model" data-fancybox>Add trip</a>
                <div style="display: none;" id="add-client-model" class="add-client-model add-trip-form">
                    <div class="add-trip-popup">
                        <h1>Add trip from</h1>
                        <div class="trip-from">
                            <a href="#manual-trip-section" class="trip-from-wrap" data-fancybox>
                                <div class="image">
                                    <img src="{{ asset('assets/images/distance.png') }}">
                                </div>
                                <h3>Add manual trip</h3>
                            </a>
                            <div class="edit-popup" id="manual-trip-section" style="display: none;">
                                <div class="title-wrap">
                                    <h1>Add manual trip</h1>
                                </div>
                                <div class="add-client-form">
                                    <form>
                                        <ul>
                                            <li>
                                                <label for="uname"><b>Add manual trip</b></label>
                                                <input type="text" placeholder="Enter name" name="uname" required="">
                                            </li>
                                            <li class="frequency-section">
                                                <label for="uname"><b>Client</b></label>
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>Client 1</option>
                                                    <option>Client 2</option>
                                                    <option>Client 3</option>
                                                </select>
                                            </li>
                                            <li>
                                                <label for="start-date"><b>Start date</b></label>
                                                <input type="date" name="Start-date" required placeholder="Set date">
                                            </li>
                                            <li>
                                                <label for="end-date"><b>End date</b></label>
                                                <input type="date" name="End-date" required placeholder="Set date">
                                            </li>
                                            <li class="frequency-section">
                                                <label for="uname"><b>Type</b></label>
                                                <select class="form-select">
                                                    <option>Leisure</option>
                                                    <option>Leisure 1</option>
                                                    <option>Leisure 2</option>
                                                    <option>Leisure 3</option>
                                                </select>
                                            </li>
                                            <li class="frequency-section">
                                                <label for="uname"><b>Currency</b></label>
                                                <select class="form-select">
                                                    <option>USD</option>
                                                    <option>USD 1</option>
                                                    <option>USD 2</option>
                                                    <option>USD 3</option>
                                                </select>
                                            </li>
                                            <li class="width-100">
                                                <label for="uname"><b>Enter notes</b></label>
                                                <textarea placeholder="Enter notes here"></textarea>
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
                            <a href="#upload-pdf" class="trip-from-wrap" data-fancybox>
                                <div class="image">
                                    <img src="{{ asset('assets/images/upload.png') }}">
                                </div>
                                <h3>Import from PDF</h3>
                            </a>
                            <div class="upload-pdf add-client-model" id="upload-pdf" style="display: none;">
                                <div class="add-trip-popup">
                                    <h1>Upload PDF</h1>
                                    <div class="upload-pdf-wrap">
                                        Drag and drop your file here <br>or <a href="#">click here</a> to browse
                                        files in your computer
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="trip-from-wrap">
                                <div class="image">
                                    <img src="{{ asset('assets/images/isologue-color.png') }}">
                                </div>
                                <h3>Import from SION</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="dashboard-left all-clients-card">
        <div class="dashboard-chart d-flex flex-wrap margin-15">
            <div class="dashboard-chart-wrap col-4">
                <div class="inner box-hover">
                    <figure>
                        <img src="{{ asset('assets/images/Revenue.png') }}">
                    </figure>
                    <h6>10 Clients</h6>
                    <div class="chart-details d-flex flex-wrap align-items-center justify-content-flex-start">
                        <h2>$5,209</h2>
                        <div class="chart-percentage">
                            <h5>27% <img src="{{ asset('assets/images/chart-up.png') }}"></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-chart-wrap col-4">
                <div class="inner box-hover">
                    <figure>
                        <img src="{{ asset('assets/images/Clients-icon.png') }}">
                    </figure>
                    <h6>Clients</h6>
                    <div class="chart-details d-flex flex-wrap align-items-center justify-content-flex-start">
                        <h2>2,044</h2>
                        <div class="chart-percentage">
                            <h5>27% <img src="{{ asset('assets/images/chart-up.png') }}"></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-chart-wrap col-4">
                <div class="inner box-hover">
                    <img src="{{ asset('assets/images/Equalizer.png') }}">
                    <h6>Milestone Reached</h6>
                    <div class="chart-details d-flex flex-wrap align-items-center justify-content-flex-start">
                        <h2>$50,000</h2>
                        <div class="chart-percentage down-graph">
                            <h5>14% <img src="{{ asset('assets/images/chart-down.png') }}"></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-chart-wrap col-4">
                <div class="inner box-hover">
                    <img src="{{ asset('assets/images/Group-chat.png') }}">
                    <h6>Bookings </h6>
                    <div class="chart-details d-flex flex-wrap align-items-center justify-content-space-between">
                        <h2>23,508</h2>
                        <div class="chart-percentage">
                            <h5>27% <img src="{{ asset('assets/images/chart-up.png') }}"></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients-tab-section">
        <div class="clients-tab d-flex flex-wrap justify-content-space-between">
            <ul class="tabs trip-tabs  d-flex flex-wrap">
                <li class="active" rel="tab1"><span>All</span></li>
                <li rel="tab2"><span>Upcoming</span></li>
                <li rel="tab3"><span>Past</span></li>
                <li rel="tab3"><span>canceled</span></li>
            </ul>
            <div class="search-filetr d-flex flex-wrap">
                <i class="bi bi-funnel"></i>
                <div class="trip-view-search">
                    <a data-fancybox data-src="#search-popup">
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
        <div class="tab_container">
            <div id="tab1" class="tab_content">
                <div class="upcoming-trip-details">
                    <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                        <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                            <div class="image">
                                <a href="#italy" data-fancybox><img
                                        src="{{ asset('assets/images/login-form-image.png') }}"></a>
                                <div style="display: none;" id="italy" class="destinations-trip-view">
                                    <div class="trip-view-section d-flex flex-wrap">
                                        <div class="trip-view-left">
                                            <div class="trip-header">
                                                <div class="top-header d-flex flex-wrap align-items-center">
                                                    <h2 class="black">Trip to italy</h2>
                                                </div>
                                            </div>
                                            <div class="trip-details">
                                                <div class="trip-details-wrap d-flex flex-wrap">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/images/clients-2.png') }}">
                                                    </div>
                                                    <div class="trip-details-content">
                                                        <h3>Martin Doe</h3>
                                                        <a href="mailto:martindoe@gmail.com"
                                                            class="black email">martindoe@gmail.com</a>
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                    href="tel:+1 (212) 855 1234" class="black ">+1
                                                                    (212) 855 1234</a></li>
                                                            <li class="black "><i class="fa fa-map-marker"
                                                                    aria-hidden="true"></i> 31w 31st Street, New York,
                                                                NY, 10018</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="itinerary-section">
                                                <div class="title-top">
                                                    <h3>Itinerary</h3>
                                                </div>
                                                <div class="itinerary-wrap">
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trip-view-right"
                                            style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                            <div
                                                class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                                <div class="trip-view-search">
                                                    <div class="search">
                                                        <img src="{{ asset('assets/images/search.png') }}">
                                                    </div>
                                                    <div class="search-box">
                                                        <input type="text" placeholder="" />
                                                        <input type="button" value="Search" />
                                                    </div>
                                                </div>
                                                <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                    <li><a href="#">New Report</a></li>
                                                    <li><a href="javascript:void(0)" class="view-task-btn">View
                                                            tasks</a>
                                                        <div class="trip-details-tasks white">
                                                            <h1>Trip details</h1>
                                                            <div class="received-date">
                                                                <span>Received till date</span>
                                                                <strong>$8,345</strong>
                                                            </div>
                                                            <div class="multigraph">
                                                                <div class="multigraph-content">
                                                                    <div class="multigraph-width">
                                                                        <strong>70%</strong>
                                                                        <span>Paid</span>
                                                                        <p>$2,115 Pending</p>
                                                                    </div>
                                                                </div>
                                                                <span class="graph-div"></span>
                                                            </div>
                                                            <div class="dashboard-right">
                                                                <div
                                                                    class="trip-details-header d-flex flex-wrap align-items-center">
                                                                    <h2>To-do</h2>
                                                                    <a href="#">Add task</a>
                                                                </div>
                                                                <div class="dashboard-right-wrap">
                                                                    <div class="summary-wrap">
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label> Complete information for
                                                                                        trip</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Submit proposals for new
                                                                                        clients</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Review revenue numbers for
                                                                                        March</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li><a href="#">Edit trip</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h3>Honeymoon</h3>
                            <p> brasil , st.marks, cuba</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <div class="upcoming-trip-details-wrap-content-image">
                                <img src="{{ asset('assets/images/image-1.png') }}">
                                <h4> Maddy Jones </h4>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h4>July 17 to August 1 </h4>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis tempor.</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <a href="#italy" data-fancybox><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <div style="display: none;" id="italy" class="destinations-trip-view">
                                <div class="trip-view-section d-flex flex-wrap">
                                    <div class="trip-view-left">
                                        <div class="trip-header">
                                            <div class="top-header d-flex flex-wrap align-items-center">
                                                <h2 class="black">Trip to italy</h2>
                                            </div>
                                        </div>
                                        <div class="trip-details">
                                            <div class="trip-details-wrap d-flex flex-wrap">
                                                <div class="image">
                                                    <img src="{{ asset('assets/images/clients-2.png') }}">
                                                </div>
                                                <div class="trip-details-content">
                                                    <h3>Martin Doe</h3>
                                                    <a href="mailto:martindoe@gmail.com"
                                                        class="black email">martindoe@gmail.com</a>
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                href="tel:+1 (212) 855 1234" class="black ">+1 (212)
                                                                855 1234</a></li>
                                                        <li class="black "><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i> 31w 31st Street, New York, NY,
                                                            10018</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itinerary-section">
                                            <div class="title-top">
                                                <h3>Itinerary</h3>
                                            </div>
                                            <div class="itinerary-wrap">
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trip-view-right"
                                        style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                        <div
                                            class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                            <div class="trip-view-search">
                                                <div class="search">
                                                    <img src="{{ asset('assets/images/search.png') }}">
                                                </div>
                                                <div class="search-box">
                                                    <input type="text" placeholder="" />
                                                    <input type="button" value="Search" />
                                                </div>
                                            </div>
                                            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                <li><a href="#">New Report</a></li>
                                                <li><a href="javascript:void(0)" class="view-task-btn">View tasks</a>
                                                    <div class="trip-details-tasks white">
                                                        <h1>Trip details</h1>
                                                        <div class="received-date">
                                                            <span>Received till date</span>
                                                            <strong>$8,345</strong>
                                                        </div>
                                                        <div class="multigraph">
                                                            <div class="multigraph-content">
                                                                <div class="multigraph-width">
                                                                    <strong>70%</strong>
                                                                    <span>Paid</span>
                                                                    <p>$2,115 Pending</p>
                                                                </div>
                                                            </div>
                                                            <span class="graph-div"></span>
                                                        </div>
                                                        <div class="dashboard-right">
                                                            <div
                                                                class="trip-details-header d-flex flex-wrap align-items-center">
                                                                <h2>To-do</h2>
                                                                <a href="#">Add task</a>
                                                            </div>
                                                            <div class="dashboard-right-wrap">
                                                                <div class="summary-wrap">
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label> Complete information for
                                                                                    trip</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Submit proposals for new
                                                                                    clients</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Review revenue numbers for
                                                                                    March</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">Edit trip</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                        <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                            <div class="image">
                                <a href="#France" data-fancybox><img
                                        src="{{ asset('assets/images/login-form-image.png') }}"></a>
                                <div style="display: none;" id="France" class="destinations-trip-view">
                                    <div class="trip-view-section d-flex flex-wrap">
                                        <div class="trip-view-left">
                                            <div class="trip-header">
                                                <div class="top-header d-flex flex-wrap align-items-center">
                                                    <h2 class="black">Trip to France</h2>
                                                </div>
                                            </div>
                                            <div class="trip-details">
                                                <div class="trip-details-wrap d-flex flex-wrap">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/images/clients-2.png') }}">
                                                    </div>
                                                    <div class="trip-details-content">
                                                        <h3>Martin Doe</h3>
                                                        <a href="mailto:martindoe@gmail.com"
                                                            class="black email">martindoe@gmail.com</a>
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                    href="tel:+1 (212) 855 1234" class="black ">+1
                                                                    (212) 855 1234</a></li>
                                                            <li class="black "><i class="fa fa-map-marker"
                                                                    aria-hidden="true"></i> 31w 31st Street, New York,
                                                                NY, 10018</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="itinerary-section">
                                                <div class="title-top">
                                                    <h3>Itinerary</h3>
                                                </div>
                                                <div class="itinerary-wrap">
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trip-view-right"
                                            style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                            <div
                                                class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                                <div class="trip-view-search">
                                                    <div class="search">
                                                        <img src="{{ asset('assets/images/search.png') }}">
                                                    </div>
                                                    <div class="search-box">
                                                        <input type="text" placeholder="" />
                                                        <input type="button" value="Search" />
                                                    </div>
                                                </div>
                                                <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                    <li><a href="#">New Report</a></li>
                                                    <li><a href="javascript:void(0)" class="view-task-btn">View
                                                            tasks</a>
                                                        <div class="trip-details-tasks white">
                                                            <h1>Trip details</h1>
                                                            <div class="received-date">
                                                                <span>Received till date</span>
                                                                <strong>$8,345</strong>
                                                            </div>
                                                            <div class="multigraph">
                                                                <div class="multigraph-content">
                                                                    <div class="multigraph-width">
                                                                        <strong>70%</strong>
                                                                        <span>Paid</span>
                                                                        <p>$2,115 Pending</p>
                                                                    </div>
                                                                </div>
                                                                <span class="graph-div"></span>
                                                            </div>
                                                            <div class="dashboard-right">
                                                                <div
                                                                    class="trip-details-header d-flex flex-wrap align-items-center">
                                                                    <h2>To-do</h2>
                                                                    <a href="#">Add task</a>
                                                                </div>
                                                                <div class="dashboard-right-wrap">
                                                                    <div class="summary-wrap">
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label> Complete information for
                                                                                        trip</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Submit proposals for new
                                                                                        clients</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Review revenue numbers for
                                                                                        March</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li><a href="#">Edit trip</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h3>Honeymoon</h3>
                            <p> brasil , st.marks, cuba</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <div class="upcoming-trip-details-wrap-content-image">
                                <img src="{{ asset('assets/images/image-1.png') }}">
                                <h4> Maddy Jones </h4>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h4>July 17 to August 1 </h4>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis tempor.</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <a href="#France" data-fancybox><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <div style="display: none;" id="France" class="destinations-trip-view">
                                <div class="trip-view-section d-flex flex-wrap">
                                    <div class="trip-view-left">
                                        <div class="trip-header">
                                            <div class="top-header d-flex flex-wrap align-items-center">
                                                <h2 class="black">Trip to France</h2>
                                            </div>
                                        </div>
                                        <div class="trip-details">
                                            <div class="trip-details-wrap d-flex flex-wrap">
                                                <div class="image">
                                                    <img src="{{ asset('assets/images/clients-2.png') }}">
                                                </div>
                                                <div class="trip-details-content">
                                                    <h3>Martin Doe</h3>
                                                    <a href="mailto:martindoe@gmail.com"
                                                        class="black email">martindoe@gmail.com</a>
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                href="tel:+1 (212) 855 1234" class="black ">+1 (212)
                                                                855 1234</a></li>
                                                        <li class="black "><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i> 31w 31st Street, New York, NY,
                                                            10018</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itinerary-section">
                                            <div class="title-top">
                                                <h3>Itinerary</h3>
                                            </div>
                                            <div class="itinerary-wrap">
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trip-view-right"
                                        style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                        <div
                                            class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                            <div class="trip-view-search">
                                                <div class="search">
                                                    <img src="{{ asset('assets/images/search.png') }}">
                                                </div>
                                                <div class="search-box">
                                                    <input type="text" placeholder="" />
                                                    <input type="button" value="Search" />
                                                </div>
                                            </div>
                                            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                <li><a href="#">New Report</a></li>
                                                <li><a href="javascript:void(0)" class="view-task-btn">View tasks</a>
                                                    <div class="trip-details-tasks white">
                                                        <h1>Trip details</h1>
                                                        <div class="received-date">
                                                            <span>Received till date</span>
                                                            <strong>$8,345</strong>
                                                        </div>
                                                        <div class="multigraph">
                                                            <div class="multigraph-content">
                                                                <div class="multigraph-width">
                                                                    <strong>70%</strong>
                                                                    <span>Paid</span>
                                                                    <p>$2,115 Pending</p>
                                                                </div>
                                                            </div>
                                                            <span class="graph-div"></span>
                                                        </div>
                                                        <div class="dashboard-right">
                                                            <div
                                                                class="trip-details-header d-flex flex-wrap align-items-center">
                                                                <h2>To-do</h2>
                                                                <a href="#">Add task</a>
                                                            </div>
                                                            <div class="dashboard-right-wrap">
                                                                <div class="summary-wrap">
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label> Complete information for
                                                                                    trip</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Submit proposals for new
                                                                                    clients</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Review revenue numbers for
                                                                                    March</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">Edit trip</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                        <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                            <div class="image">
                                <a href="#palmsprings" data-fancybox><img
                                        src="{{ asset('assets/images/login-form-image.png') }}"></a>
                                <div style="display: none;" id="palmsprings" class="destinations-trip-view">
                                    <div class="trip-view-section d-flex flex-wrap">
                                        <div class="trip-view-left">
                                            <div class="trip-header">
                                                <div class="top-header d-flex flex-wrap align-items-center">
                                                    <h2 class="black">Trip to Palm Springs</h2>
                                                </div>
                                            </div>
                                            <div class="trip-details">
                                                <div class="trip-details-wrap d-flex flex-wrap">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/images/clients-2.png') }}">
                                                    </div>
                                                    <div class="trip-details-content">
                                                        <h3>Martin Doe</h3>
                                                        <a href="mailto:martindoe@gmail.com"
                                                            class="black email">martindoe@gmail.com</a>
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                    href="tel:+1 (212) 855 1234" class="black ">+1
                                                                    (212) 855 1234</a></li>
                                                            <li class="black "><i class="fa fa-map-marker"
                                                                    aria-hidden="true"></i> 31w 31st Street, New York,
                                                                NY, 10018</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="itinerary-section">
                                                <div class="title-top">
                                                    <h3>Itinerary</h3>
                                                </div>
                                                <div class="itinerary-wrap">
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trip-view-right"
                                            style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                            <div
                                                class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                                <div class="trip-view-search">
                                                    <div class="search">
                                                        <img src="{{ asset('assets/images/search.png') }}">
                                                    </div>
                                                    <div class="search-box">
                                                        <input type="text" placeholder="" />
                                                        <input type="button" value="Search" />
                                                    </div>
                                                </div>
                                                <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                    <li><a href="#">New Report</a></li>
                                                    <li><a href="javascript:void(0)" class="view-task-btn">View
                                                            tasks</a>
                                                        <div class="trip-details-tasks white">
                                                            <h1>Trip details</h1>
                                                            <div class="received-date">
                                                                <span>Received till date</span>
                                                                <strong>$8,345</strong>
                                                            </div>
                                                            <div class="multigraph">
                                                                <div class="multigraph-content">
                                                                    <div class="multigraph-width">
                                                                        <strong>70%</strong>
                                                                        <span>Paid</span>
                                                                        <p>$2,115 Pending</p>
                                                                    </div>
                                                                </div>
                                                                <span class="graph-div"></span>
                                                            </div>
                                                            <div class="dashboard-right">
                                                                <div
                                                                    class="trip-details-header d-flex flex-wrap align-items-center">
                                                                    <h2>To-do</h2>
                                                                    <a href="#">Add task</a>
                                                                </div>
                                                                <div class="dashboard-right-wrap">
                                                                    <div class="summary-wrap">
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label> Complete information for
                                                                                        trip</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Submit proposals for new
                                                                                        clients</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Review revenue numbers for
                                                                                        March</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li><a href="#">Edit trip</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h3>Honeymoon</h3>
                            <p> brasil , st.marks, cuba</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <div class="upcoming-trip-details-wrap-content-image">
                                <img src="{{ asset('assets/images/image-1.png') }}">
                                <h4> Maddy Jones </h4>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h4>July 17 to August 1 </h4>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis tempor.</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <a href="#palmsprings" data-fancybox><i class="fa fa-angle-right"
                                    aria-hidden="true"></i></a>
                            <div style="display: none;" id="palmsprings" class="destinations-trip-view">
                                <div class="trip-view-section d-flex flex-wrap">
                                    <div class="trip-view-left">
                                        <div class="trip-header">
                                            <div class="top-header d-flex flex-wrap align-items-center">
                                                <h2 class="black">Trip to Palm Springs</h2>
                                            </div>
                                        </div>
                                        <div class="trip-details">
                                            <div class="trip-details-wrap d-flex flex-wrap">
                                                <div class="image">
                                                    <img src="{{ asset('assets/images/clients-2.png') }}">
                                                </div>
                                                <div class="trip-details-content">
                                                    <h3>Martin Doe</h3>
                                                    <a href="mailto:martindoe@gmail.com"
                                                        class="black email">martindoe@gmail.com</a>
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                href="tel:+1 (212) 855 1234" class="black ">+1 (212)
                                                                855 1234</a></li>
                                                        <li class="black "><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i> 31w 31st Street, New York, NY,
                                                            10018</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itinerary-section">
                                            <div class="title-top">
                                                <h3>Itinerary</h3>
                                            </div>
                                            <div class="itinerary-wrap">
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trip-view-right"
                                        style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                        <div
                                            class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                            <div class="trip-view-search">
                                                <div class="search">
                                                    <img src="{{ asset('assets/images/search.png') }}">
                                                </div>
                                                <div class="search-box">
                                                    <input type="text" placeholder="" />
                                                    <input type="button" value="Search" />
                                                </div>
                                            </div>
                                            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                <li><a href="#">New Report</a></li>
                                                <li><a href="javascript:void(0)" class="view-task-btn">View tasks</a>
                                                    <div class="trip-details-tasks white">
                                                        <h1>Trip details</h1>
                                                        <div class="received-date">
                                                            <span>Received till date</span>
                                                            <strong>$8,345</strong>
                                                        </div>
                                                        <div class="multigraph">
                                                            <div class="multigraph-content">
                                                                <div class="multigraph-width">
                                                                    <strong>70%</strong>
                                                                    <span>Paid</span>
                                                                    <p>$2,115 Pending</p>
                                                                </div>
                                                            </div>
                                                            <span class="graph-div"></span>
                                                        </div>
                                                        <div class="dashboard-right">
                                                            <div
                                                                class="trip-details-header d-flex flex-wrap align-items-center">
                                                                <h2>To-do</h2>
                                                                <a href="#">Add task</a>
                                                            </div>
                                                            <div class="dashboard-right-wrap">
                                                                <div class="summary-wrap">
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label> Complete information for
                                                                                    trip</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Submit proposals for new
                                                                                    clients</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Review revenue numbers for
                                                                                    March</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">Edit trip</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                        <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                            <div class="image">
                                <a href="#bahamas" data-fancybox><img
                                        src="{{ asset('assets/images/login-form-image.png') }}"></a>
                                <div style="display: none;" id="bahamas" class="destinations-trip-view">
                                    <div class="trip-view-section d-flex flex-wrap">
                                        <div class="trip-view-left">
                                            <div class="trip-header">
                                                <div class="top-header d-flex flex-wrap align-items-center">
                                                    <h2 class="black">Trip to Bahamas</h2>
                                                </div>
                                            </div>
                                            <div class="trip-details">
                                                <div class="trip-details-wrap d-flex flex-wrap">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/images/clients-2.png') }}">
                                                    </div>
                                                    <div class="trip-details-content">
                                                        <h3>Martin Doe</h3>
                                                        <a href="mailto:martindoe@gmail.com"
                                                            class="black email">martindoe@gmail.com</a>
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                    href="tel:+1 (212) 855 1234" class="black ">+1
                                                                    (212) 855 1234</a></li>
                                                            <li class="black "><i class="fa fa-map-marker"
                                                                    aria-hidden="true"></i> 31w 31st Street, New York,
                                                                NY, 10018</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="itinerary-section">
                                                <div class="title-top">
                                                    <h3>Itinerary</h3>
                                                </div>
                                                <div class="itinerary-wrap">
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trip-view-right"
                                            style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                            <div
                                                class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                                <div class="trip-view-search">
                                                    <div class="search">
                                                        <img src="{{ asset('assets/images/search.png') }}">
                                                    </div>
                                                    <div class="search-box">
                                                        <input type="text" placeholder="" />
                                                        <input type="button" value="Search" />
                                                    </div>
                                                </div>
                                                <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                    <li><a href="#">New Report</a></li>
                                                    <li><a href="javascript:void(0)" class="view-task-btn">View
                                                            tasks</a>
                                                        <div class="trip-details-tasks white">
                                                            <h1>Trip details</h1>
                                                            <div class="received-date">
                                                                <span>Received till date</span>
                                                                <strong>$8,345</strong>
                                                            </div>
                                                            <div class="multigraph">
                                                                <div class="multigraph-content">
                                                                    <div class="multigraph-width">
                                                                        <strong>70%</strong>
                                                                        <span>Paid</span>
                                                                        <p>$2,115 Pending</p>
                                                                    </div>
                                                                </div>
                                                                <span class="graph-div"></span>
                                                            </div>
                                                            <div class="dashboard-right">
                                                                <div
                                                                    class="trip-details-header d-flex flex-wrap align-items-center">
                                                                    <h2>To-do</h2>
                                                                    <a href="#">Add task</a>
                                                                </div>
                                                                <div class="dashboard-right-wrap">
                                                                    <div class="summary-wrap">
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label> Complete information for
                                                                                        trip</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Submit proposals for new
                                                                                        clients</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Review revenue numbers for
                                                                                        March</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li><a href="#">Edit trip</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h3>Honeymoon</h3>
                            <p> brasil , st.marks, cuba</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <div class="upcoming-trip-details-wrap-content-image">
                                <img src="{{ asset('assets/images/image-1.png') }}">
                                <h4> Maddy Jones </h4>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h4>July 17 to August 1 </h4>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis tempor.</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <a href="#bahamas" data-fancybox><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <div style="display: none;" id="bahamas" class="destinations-trip-view">
                                <div class="trip-view-section d-flex flex-wrap">
                                    <div class="trip-view-left">
                                        <div class="trip-header">
                                            <div class="top-header d-flex flex-wrap align-items-center">
                                                <h2 class="black">Trip to Bahamas</h2>
                                            </div>
                                        </div>
                                        <div class="trip-details">
                                            <div class="trip-details-wrap d-flex flex-wrap">
                                                <div class="image">
                                                    <img src="{{ asset('assets/images/clients-2.png') }}">
                                                </div>
                                                <div class="trip-details-content">
                                                    <h3>Martin Doe</h3>
                                                    <a href="mailto:martindoe@gmail.com"
                                                        class="black email">martindoe@gmail.com</a>
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                href="tel:+1 (212) 855 1234" class="black ">+1 (212)
                                                                855 1234</a></li>
                                                        <li class="black "><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i> 31w 31st Street, New York, NY,
                                                            10018</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itinerary-section">
                                            <div class="title-top">
                                                <h3>Itinerary</h3>
                                            </div>
                                            <div class="itinerary-wrap">
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trip-view-right"
                                        style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                        <div
                                            class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                            <div class="trip-view-search">
                                                <div class="search">
                                                    <img src="{{ asset('assets/images/search.png') }}">
                                                </div>
                                                <div class="search-box">
                                                    <input type="text" placeholder="" />
                                                    <input type="button" value="Search" />
                                                </div>
                                            </div>
                                            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                <li><a href="#">New Report</a></li>
                                                <li><a href="javascript:void(0)" class="view-task-btn">View
                                                        tasks</a>
                                                    <div class="trip-details-tasks white">
                                                        <h1>Trip details</h1>
                                                        <div class="received-date">
                                                            <span>Received till date</span>
                                                            <strong>$8,345</strong>
                                                        </div>
                                                        <div class="multigraph">
                                                            <div class="multigraph-content">
                                                                <div class="multigraph-width">
                                                                    <strong>70%</strong>
                                                                    <span>Paid</span>
                                                                    <p>$2,115 Pending</p>
                                                                </div>
                                                            </div>
                                                            <span class="graph-div"></span>
                                                        </div>
                                                        <div class="dashboard-right">
                                                            <div
                                                                class="trip-details-header d-flex flex-wrap align-items-center">
                                                                <h2>To-do</h2>
                                                                <a href="#">Add task</a>
                                                            </div>
                                                            <div class="dashboard-right-wrap">
                                                                <div class="summary-wrap">
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label> Complete information for
                                                                                    trip</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Submit proposals for new
                                                                                    clients</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Review revenue numbers for
                                                                                    March</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">Edit trip</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                        <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                            <div class="image">
                                <a href="#italy" data-fancybox><img
                                        src="{{ asset('assets/images/login-form-image.png') }}"></a>
                                <div style="display: none;" id="italy" class="destinations-trip-view">
                                    <div class="trip-view-section d-flex flex-wrap">
                                        <div class="trip-view-left">
                                            <div class="trip-header">
                                                <div class="top-header d-flex flex-wrap align-items-center">
                                                    <h2 class="black">Trip to italy</h2>
                                                </div>
                                            </div>
                                            <div class="trip-details">
                                                <div class="trip-details-wrap d-flex flex-wrap">
                                                    <div class="image">
                                                        <img src="{{ asset('assets/images/clients-2.png') }}">
                                                    </div>
                                                    <div class="trip-details-content">
                                                        <h3>Martin Doe</h3>
                                                        <a href="mailto:martindoe@gmail.com"
                                                            class="black email">martindoe@gmail.com</a>
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                    href="tel:+1 (212) 855 1234" class="black ">+1
                                                                    (212) 855 1234</a></li>
                                                            <li class="black "><i class="fa fa-map-marker"
                                                                    aria-hidden="true"></i> 31w 31st Street, New York,
                                                                NY, 10018</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="itinerary-section">
                                                <div class="title-top">
                                                    <h3>Itinerary</h3>
                                                </div>
                                                <div class="itinerary-wrap">
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="itinerary-month">
                                                        <div class="month">
                                                            <h2>July 9</h2>
                                                        </div>
                                                        <div class="itinerary-details">
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itinerary-inner">
                                                                <div class="inner">
                                                                    <div class="left-image">
                                                                        <img
                                                                            src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h3 class="m-600 black">Flight to Capri</h3>
                                                                        <h4 class="m-600">From New York, NY to Capri,
                                                                            Italy</h4>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Facilisis lobortis tempor
                                                                            purus, condimentum hac morbi sit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trip-view-right"
                                            style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                            <div
                                                class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                                <div class="trip-view-search">
                                                    <div class="search">
                                                        <img src="{{ asset('assets/images/search.png') }}">
                                                    </div>
                                                    <div class="search-box">
                                                        <input type="text" placeholder="" />
                                                        <input type="button" value="Search" />
                                                    </div>
                                                </div>
                                                <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                    <li><a href="#">New Report</a></li>
                                                    <li><a href="javascript:void(0)" class="view-task-btn">View
                                                            tasks</a>
                                                        <div class="trip-details-tasks white">
                                                            <h1>Trip details</h1>
                                                            <div class="received-date">
                                                                <span>Received till date</span>
                                                                <strong>$8,345</strong>
                                                            </div>
                                                            <div class="multigraph">
                                                                <div class="multigraph-content">
                                                                    <div class="multigraph-width">
                                                                        <strong>70%</strong>
                                                                        <span>Paid</span>
                                                                        <p>$2,115 Pending</p>
                                                                    </div>
                                                                </div>
                                                                <span class="graph-div"></span>
                                                            </div>
                                                            <div class="dashboard-right">
                                                                <div
                                                                    class="trip-details-header d-flex flex-wrap align-items-center">
                                                                    <h2>To-do</h2>
                                                                    <a href="#">Add task</a>
                                                                </div>
                                                                <div class="dashboard-right-wrap">
                                                                    <div class="summary-wrap">
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label> Complete information for
                                                                                        trip</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Submit proposals for new
                                                                                        clients</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="week-summary">
                                                                            <div class="week-summary-in">
                                                                                <div class="summary-wrap">
                                                                                    <input type="checkbox"
                                                                                        checked="checked">
                                                                                    <label>Review revenue numbers for
                                                                                        March</label>
                                                                                </div>
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit.
                                                                                    Facilisis lobortis tempor.</p>
                                                                            </div>
                                                                            <div class="due-date"><a href="#">Due
                                                                                    monday</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li><a href="#">Edit trip</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h3>Honeymoon</h3>
                            <p> brasil , st.marks, cuba</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <div class="upcoming-trip-details-wrap-content-image">
                                <img src="{{ asset('assets/images/image-1.png') }}">
                                <h4> Maddy Jones </h4>
                            </div>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <h4>July 17 to August 1 </h4>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis tempor.</p>
                        </div>
                        <div class="upcoming-trip-details-wrap-content">
                            <a href="#italy" data-fancybox><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <div style="display: none;" id="italy" class="destinations-trip-view">
                                <div class="trip-view-section d-flex flex-wrap">
                                    <div class="trip-view-left">
                                        <div class="trip-header">
                                            <div class="top-header d-flex flex-wrap align-items-center">
                                                <h2 class="black">Trip to italy</h2>
                                            </div>
                                        </div>
                                        <div class="trip-details">
                                            <div class="trip-details-wrap d-flex flex-wrap">
                                                <div class="image">
                                                    <img src="{{ asset('assets/images/clients-2.png') }}">
                                                </div>
                                                <div class="trip-details-content">
                                                    <h3>Martin Doe</h3>
                                                    <a href="mailto:martindoe@gmail.com"
                                                        class="black email">martindoe@gmail.com</a>
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i><a
                                                                href="tel:+1 (212) 855 1234" class="black ">+1 (212)
                                                                855 1234</a></li>
                                                        <li class="black "><i class="fa fa-map-marker"
                                                                aria-hidden="true"></i> 31w 31st Street, New York, NY,
                                                            10018</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="itinerary-section">
                                            <div class="title-top">
                                                <h3>Itinerary</h3>
                                            </div>
                                            <div class="itinerary-wrap">
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="itinerary-month">
                                                    <div class="month">
                                                        <h2>July 9</h2>
                                                    </div>
                                                    <div class="itinerary-details">
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itinerary-inner">
                                                            <div class="inner">
                                                                <div class="left-image">
                                                                    <img
                                                                        src="{{ asset('assets/images/itinerary-1.png') }}">
                                                                </div>
                                                                <div class="content">
                                                                    <h3 class="m-600 black">Flight to Capri</h3>
                                                                    <h4 class="m-600">From New York, NY to Capri,
                                                                        Italy</h4>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur
                                                                        adipiscing elit. Facilisis lobortis tempor
                                                                        purus, condimentum hac morbi sit.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trip-view-right"
                                        style="background: url(images/login-form-image.png) no-repeat center / cover;">
                                        <div
                                            class="trip-view-header d-flex flex-wrap justify-content-flex-end align-items-center">
                                            <div class="trip-view-search">
                                                <div class="search">
                                                    <img src="{{ asset('assets/images/search.png') }}">
                                                </div>
                                                <div class="search-box">
                                                    <input type="text" placeholder="" />
                                                    <input type="button" value="Search" />
                                                </div>
                                            </div>
                                            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                                                <li><a href="#">New Report</a></li>
                                                <li><a href="javascript:void(0)" class="view-task-btn">View
                                                        tasks</a>
                                                    <div class="trip-details-tasks white">
                                                        <h1>Trip details</h1>
                                                        <div class="received-date">
                                                            <span>Received till date</span>
                                                            <strong>$8,345</strong>
                                                        </div>
                                                        <div class="multigraph">
                                                            <div class="multigraph-content">
                                                                <div class="multigraph-width">
                                                                    <strong>70%</strong>
                                                                    <span>Paid</span>
                                                                    <p>$2,115 Pending</p>
                                                                </div>
                                                            </div>
                                                            <span class="graph-div"></span>
                                                        </div>
                                                        <div class="dashboard-right">
                                                            <div
                                                                class="trip-details-header d-flex flex-wrap align-items-center">
                                                                <h2>To-do</h2>
                                                                <a href="#">Add task</a>
                                                            </div>
                                                            <div class="dashboard-right-wrap">
                                                                <div class="summary-wrap">
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label> Complete information for
                                                                                    trip</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Submit proposals for new
                                                                                    clients</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                    <div class="week-summary">
                                                                        <div class="week-summary-in">
                                                                            <div class="summary-wrap">
                                                                                <input type="checkbox"
                                                                                    checked="checked">
                                                                                <label>Review revenue numbers for
                                                                                    March</label>
                                                                            </div>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                                adipiscing elit. Facilisis lobortis
                                                                                tempor.</p>
                                                                        </div>
                                                                        <div class="due-date"><a href="#">Due
                                                                                monday</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="#">Edit trip</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab_content">
                <div class="trip-details d-flex flex-wrap">
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-1.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Sarah Stevens</< /h3>
                                            <a href="mailto:martindoe@gmail.com"
                                                class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-1.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Sarah Stevens</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-2.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Martin Doe</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    <div class="upcoming-trips-tab">
                                        <div class="upcoming-content"> Upcoming <strong>Europe 2022</strong></div>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-2.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Martin Doe</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-6.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Maddy Jones</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    <div class="upcoming-trips-tab">
                                        <div class="upcoming-content"> Upcoming <strong>Europe 2022</strong></div>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-6.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Maddy Jones</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-5.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Mark Limm</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    <div class="upcoming-trips-tab">
                                        <div class="upcoming-content"> Upcoming <strong>Europe 2022</strong></div>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-5.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Mark Limm</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab3" class="tab_content">
                <div class="trip-details d-flex flex-wrap">
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-1.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Sarah Stevens</< /h3>
                                            <a href="mailto:martindoe@gmail.com"
                                                class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-1.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Sarah Stevens</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-2.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Martin Doe</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    <div class="upcoming-trips-tab">
                                        <div class="upcoming-content"> Upcoming <strong>Europe 2022</strong></div>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-2.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Martin Doe</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-6.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Maddy Jones</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    <div class="upcoming-trips-tab">
                                        <div class="upcoming-content"> Upcoming <strong>Europe 2022</strong></div>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-6.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Maddy Jones</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-5.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Mark Limm</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    <div class="upcoming-trips-tab">
                                        <div class="upcoming-content"> Upcoming <strong>Europe 2022</strong></div>
                                    </div>
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="trip-details-wrap d-flex flex-wrap col-6">
                        <div class="image">
                            <a href="{{ route('clientDetailView',['id'=>1]) }}">
                                <img src="{{ asset('assets/images/clients-5.png') }}">
                            </a>
                        </div>
                        <div class="trip-details-content">
                            <div class="trip-details-content-inner d-flex flex-wrap">
                                <div class="tab-content-title">
                                    <h3><a href="{{ route('clientDetailView',['id'=>1]) }}">Mark Limm</a></h3>
                                    <a href="mailto:martindoe@gmail.com" class="black email">martindoe@gmail.com</a>
                                </div>
                                <div class="upcoming-trips-tab">
                                    No upcoming trips
                                </div>
                            </div>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1 (212) 855 1234"
                                        class="black ">+1 (212) 855 1234</a></li>
                                <li class="black "><i class="fa fa-map-marker" aria-hidden="true"></i> 31w 31st
                                    Street, New York, NY, 10018</li>
                                <li class="share-icon"><a href="#"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection