@extends('pages.layouts.app')

@section('content')
    <div class="dashboard-details dashboard-header padding-spacing ">
        <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center client-wrap">
            <div class="title-wrap">
                <span>Clients</span>
                <h1>Upcoming Trips</h1>
            </div>
            <ul class="d-flex flex-wrap justify-content-flex-end m-600">
                <li><a href="javascript:void(0)">New Report</a>
                </li>
                <li>
                    <a href="#add-client-model" data-fancybox="">Add trip</a>
                    <div style="display: none;" id="add-client-model" class="add-client-model">
                        <div class="add-client-form">
                            <h1>Invite new client</h1>
                            <form>
                                <ul>
                                    <li>
                                        <label for="uname"><b>Name</b></label>
                                        <input type="text" placeholder="Enter name" name="uname" required="">
                                    </li>
                                    <li>
                                        <label for="uname"><b>Email</b></label>
                                        <input type="text" placeholder="Enter email" name="uname" required="">
                                    </li>
                                    <li class="width-100">
                                        <label>Required documentation</label>
                                        <div class="switch-documentation">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                            <div>Passport</div>
                                        </div>
                                        <div class="switch-documentation">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                            <div>Credit Card</div>
                                        </div>
                                        <div class="switch-documentation">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                            <div>Medical</div>
                                        </div>
                                    </li>
                                    <li class="width-100 documents-signed">
                                        <label>Documents to be signed</label>
                                        <div class="switch-documentation">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                            <div>SmartFlyer Agreement</div>
                                        </div>
                                        <div class="switch-documentation">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                            <div>Personal Liability</div>
                                        </div>
                                        <div class="switch-documentation">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                            <div>Terms of Service</div>
                                        </div>
                                        <div class="switch-documentation">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                            <div>Privacy agreement</div>
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
        <div class="upcoming-trip-details">
            <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                    <div class="image">
                        <img src="{{ asset('assets/images/login-form-image.png') }}">
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
                    <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                    <div class="image">
                        <img src="{{ asset('assets/images/login-form-image.png') }}">
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
                    <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                    <div class="image">
                        <img src="{{ asset('assets/images/login-form-image.png') }}">
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
                    <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                    <div class="image">
                        <img src="{{ asset('assets/images/login-form-image.png') }}">
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
                    <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                    <div class="image">
                        <img src="{{ asset('assets/images/login-form-image.png') }}">
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
                    <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="upcoming-trip-details-wrap d-flex flex-wrap">
                <div class="upcoming-trip-details-wrap-content" style="padding: 0;">
                    <div class="image">
                        <img src="{{ asset('assets/images/login-form-image.png') }}">
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
                    <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
