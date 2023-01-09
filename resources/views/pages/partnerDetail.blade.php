@extends('pages.layouts.app')

@section('content')
<div class="dashboard-details dashboard-header padding-spacing">
    <div class="trip-view-header d-flex flex-wrap justify-content-space-between align-items-center">
        <a href="/partners" class="navigation-txt">
            <img src="{{ asset('assets/images/arrow-left.png') }}" class="navigation-icon-img"> 
            Back
        </a>
        <ul class="d-flex flex-wrap justify-content-flex-end m-600">
            <li>
                <a href="#reject-application" class="detail-page-btn"  data-fancybox>Reject</a>
                <div class="edit-popup fancybox-content send-new-invite" id="reject-application" style="display: none;">
                    <div class="title-wrap">
                        <h1>Reject application?</h1>
                    </div>
                    <br>
                    <div class="add-client-form">
                        <form id="addnewTodoForm">
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
                <div class="edit-popup fancybox-content send-new-invite" id="approve-application" style="display: none;">
                    <div class="title-wrap">
                        <h1>Approve application?</h1>
                    </div>
                    <br>
                    <div class="add-client-form">
                        <form id="addnewTodoForm">
                            @csrf
                            <ul>
                                <li class="width-100 documents-signed">
                                    <label>Please review details before confirming approval.</label>
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
    <div class="clients-tab-section partner-detail-tab-section">
        <div>
            <h2>Application for Elevate Partnership</h2>
            <label class="detail-sub-title">Shangrila Beach Hotel</label>
        </div>
        <div class="clients-tab-section">
        <div class="clients-tab d-flex flex-wrap justify-content-space-between clients-tab-detail">
            <ul class="tabs to-do-tab d-flex flex-wrap">
                <li class="active" rel="tab1"><span>OVERVIEW</span></li>
                <li rel="tab2"><span>PROPERTY CONTACTS</span></li>
                <li rel="tab3"><span>PROPERTY SPECIFICS</span></li>
                <li rel="tab4"><span>BOOKING + COMMISSIONS</span></li>
                <li rel="tab5"><span>PROMOTIONS + TRAININGS</span></li>
                <li rel="tab6"><span>MARKETING</span></li>
            </ul>
        </div>
        <div class="tab_container">
            <div id="tab1" class="tab_content">
                <div class="todo-all-tab">
                    <div class="overview-content">
                        The purpose of this section is to provide a summary of your property to be featured on our internal agent-facing intranet (Smartienet). This information is password protected + exclusively available to our SmartFlyer travel advisors.
                        Note: In the case that you have also opted into a paid marketing plan, we will utilize this submission to craft your client-facing profile on smartflyer.com. Keep in mind we use a very conversational writing style on our site, ensuring the content we provide is differentiated from what clients may find elsewhere. So please write as you’d speak! Please refrain from copy + pasting your hotel’s website copy into the fields below. In order to optimize your profile’s search engine ranking, we need the language to be as original as possible. Thank you!
                    </div>
                    <div class="main-details-title">
                        Main details
                    </div>
                    <div class="main-details-wrapper d-flex flex-wrap justify-content-space-between">
                        <div class="main-details-container">
                            <h4 class="main-details-label">Property name</h4>
                            <input type="text" value="Shangrila Beach Hotel" name="property-name">
                        </div>
                        <div class="main-details-container">
                            <h4 class="main-details-label">Overline text</h4>
                            <input type="text" value="n/a" name="overline-text">
                        </div>
                    </div>
                    <div class="main-details-wrapper d-flex flex-wrap justify-content-space-between">
                        <div class="main-details-container">
                            <h4 class="main-details-label">Property style (Pick Three)</h4>
                            <div class="notes-form-checkbox d-flex flex-wrap">
                                <div class="summary-wrap position-relative" id="propertyStyle">
                                    <input type="checkbox" name="propertyStyle[]" id="propertyStyle"
                                        value="" >
                                    <label>ECOTOURISM</label>
                                </div>
                                <div class="summary-wrap position-relative" id="propertyStyle">
                                    <input type="checkbox" name="propertyStyle[]" id="propertyStyle"
                                        value="" >
                                    <label>WELLNESS</label>
                                </div>
                                <div class="summary-wrap position-relative" id="propertyStyle">
                                    <input type="checkbox" name="propertyStyle[]" id="propertyStyle"
                                        value="" >
                                    <label>CULTURE</label>
                                </div>
                                <div class="summary-wrap position-relative" id="propertyStyle">
                                    <input type="checkbox" name="propertyStyle[]" id="propertyStyle"
                                        value="" >
                                    <label>FAMILY</label>
                                </div>
                                <div class="summary-wrap position-relative" id="propertyStyle">
                                    <input type="checkbox" name="propertyStyle[]" id="propertyStyle"
                                        value="" >
                                    <label>BEACH</label>
                                </div>
                                <div class="summary-wrap position-relative" id="propertyStyle">
                                    <input type="checkbox" name="propertyStyle[]" id="propertyStyle"
                                        value="" >
                                    <label>HIDEAWAY</label>
                                </div>
                                <div class="summary-wrap position-relative" id="propertyStyle">
                                    <input type="checkbox" name="propertyStyle[]" id="propertyStyle"
                                        value="" >
                                    <label>CITY</label>
                                </div>
                                <div class="summary-wrap position-relative" id="propertyStyle">
                                    <input type="checkbox" name="propertyStyle[]" id="propertyStyle"
                                        value="" >
                                    <label>DISCOVERY</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-details-wrapper d-flex flex-wrap justify-content-space-between">
                        <div class="main-details-container">
                            <h4 class="main-details-label">Add Location</h4>
                            <input type="text" value="23 thailand rd. Phuket, Thailand" name="location">
                        </div>
                        <div class="main-details-container">
                            <h4 class="main-details-label">Attach header image</h4>
                            <input type="text" value="header-image.png" name="overline-text">
                        </div>
                    </div>
                    <div class="main-details-wrapper d-flex flex-wrap justify-content-space-between">
                        <div class="main-details-container-full">
                            <h4 class="main-details-label">Long Description</h4>
                            <input type="text" value="Shangrila Beach Hotel  is an exclusive luxury boutique hotel perched high on Phuket Thailand. It has been designed to integrate perfectly with its unique geography. This luxurious property, with its individually-styled suites and bedrooms, appeals to those seeking the ultimate romantic escape." name="long-description">
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab_content">
                <div class="todo-all-tab">
                </div>
            </div>
            <div id="tab3" class="tab_content">
                <div class="todo-all-tab">
                </div>
            </div>
            <div id="tab4" class="tab_content">
                <div class="todo-all-tab">
                </div>
            </div>
            <div id="tab5" class="tab_content">
                <div class="todo-all-tab">
                </div>
            </div>
            <div id="tab6" class="tab_content">
                <div class="todo-all-tab">
                </div>
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

</script>
@endpush
