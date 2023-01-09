@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}" />

@endpush

<form method="POST" action="{{ route('updateclient',['id'=>$getdetails->id]) }}" enctype="multipart/form-data"
      id="clientEditForm">
    @csrf

    <div class="news-form-section d-flex flex-wrap">
        <div class="news-form-left">

            <div class="page-section hero" id="main-information">
                <div class="news-form-wrap">
                    <div class="add-client-form edit-popup ">
                        <h4>Main Information</h4>
                        @if(count($getdetails->client_contacts)>0)
                            @foreach($getdetails->client_contacts as $keyRC=>$valRC)
                            @endforeach
                        @endif

                        <ul>
                            <li class="width-100">
                                <label for="uname" class="required"><b>First Name</b></label>
                                <input type="text" placeholder="Enter first name" name="client_first_name" value="{{ $getdetails->first_name }}" required="required">
                                <span class="error_client_first_name error"></span>
                            </li>
                            <li>
                                <div class="row middle-last">
                                    <div class="middle-name col-md-4">
                                        <label for="uname" class="required"><b>Middle Name</b></label>
                                        <input type="text" placeholder="Enter middle name" value="{{ $getdetails->middle_name }}" name="client_middle_name">
                                        <span class="error_client_middle_name error"></span>
                                    </div>
                                    <div class="last-name col-md-4">
                                        <label for="uname" class="required"><b>Last Name</b></label>
                                        <input type="text" placeholder="Enter last name" value="{{ $getdetails->last_name }}" name="client_last_name">
                                        <span class="error_client_last_name error"></span>
                                    </div>
                                </div>


                            </li>
                            <li class="width-100">
                                <label for="uname" class="required"><b>Email</b></label>
                                <input type="email" name="client_email" placeholder="Email"
                                       value="{{ $getdetails->email }}">
                                <span class="error_client_email  error"></span>
                            </li>
                            <li class="width-100">
                                <label for="uname" class="required"><b>Phone number</b></label>
                                <input type="tel" id="client_phone" maxlength="20" placeholder="e.g. +1800001111"
                                       name="client_phone" value="{{ $getdetails->phone }}">
                                <span class="error_client_phone  error"></span>
                            </li>
                            <li class="date-section width-100">
                                <label for="uname" class="required"><b>Birthday</b></label>
                                <div class="birthday-dropdown">
                                    <div class="month">
                                        <select class="openEditClientFromView-select" name="client_dobM">
                                            <option value="">Month</option>
                                            @foreach (config('global.month') as $key => $month)
                                                <option value="{{ $key }}"
                                                        {{$getdetails->date_of_birth ? convertDateForFrontend($getdetails->date_of_birth)['dobM'] == $month  ? 'selected' : '' : ''}}>
                                                    {{ $month }} </option>
                                            @endforeach
                                        </select>
                                        <span class="error_client_dobM  error"></span>
                                    </div>
                                    <div class="date">
                                        <select class="openEditClientFromView-select" name="client_dobD">
                                            <option value="">Day</option>
                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}"
                                                    {{ $getdetails->date_of_birth ? convertDateForFrontend($getdetails->date_of_birth)['dobD'] == $i  ? 'selected' : '' : ''}}>
                                                {{ $i }}</option>
                                            @endfor
                                        </select>
                                        <span class="error_client_dobD  error"></span>
                                    </div>
                                    <div class="year">
                                        <select class="openEditClientFromView-select" name="client_dobY">
                                            <option value="">Year</option>
                                            @for ($i = 1920; $i <= now()->year; $i++) <option value="{{ $i }}"
                                                    {{ $getdetails->date_of_birth ? convertDateForFrontend($getdetails->date_of_birth)['dobY'] == $i  ? 'selected' : '' : ''}}>
                                                {{ $i }}</option>
                                            @endfor
                                        </select>
                                        <span class="error_client_dobY  error"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="width-50 uploadProfilePic">
                                <div class="box">
                                    <div class="js-image-preview {{strlen($getdetails->profile_picture_relative_url) > 10 ? 'profileImgExist':'' }}"
                                         style="background-image: url({{$getdetails->profile_picture_url}});"></div>
                                    <div class="upload-options">
                                        <label >
                                            Change Profile Photo
                                            <input type="file" name="profile_picture_relative_url" class="image-upload"
                                                   accept="image/*" />
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li class="width-50">
                                <label for="uname" class="required"><b>Address</b></label>
                                <textarea name="address" placeholder="Enter client address here..."
                                          style="height:70%">{{  $getdetails->address }}</textarea>
                                <span class="error_address  error"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-section" id="related-contacts">
                <div class="news-form-wrap contact-padding-bottom">
                    <div class="add-client-form edit-popup ">
                        <h4>Related contacts</h4>
                        <div class="contact-form-details related-contacts-form">
                            @if(count($getdetails->client_contacts)>0)
                                @foreach($getdetails->client_contacts as $keyRC=>$valRC)
                                    <div class="contact-form" id="contact-form{{ $keyRC+1 }}">
                                        <div
                                                class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                            <h4>Contact #&nbsp;<span class="related-contacts-form-number">{{$keyRC+1}}</span>
                                            </h4>
                                            <div class="icon" style="display: none"><img src="{{ asset('assets/images/garbage-can.png') }}" class="remove_contact">
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <label for="uname" class="required"><b>Enter name</b></label>
                                                <input type="hidden" name="id[]" value="{{$valRC->id}}">
                                                <input type="text" placeholder="Martin Doe" name="rc_name[]"
                                                       value="{{$valRC->name}}">
                                                <span class="error_rc_name_{{$keyRC}}  error"></span>

                                            </li>
                                            <li class="frequency-section time-zone">
                                                <label class="required">Relationship</label>
                                                <select class="related-contacts-openEditClientFromView-select"
                                                        name="rc_relationship[]">
                                                    <option value="">Select relationship</option>
                                                    @foreach($relationship as $key => $val)
                                                        <option value="{{$val->id}}"
                                                                {{$valRC->relationship_type->id == $val->id  ? 'selected' : ''}}>
                                                            {{$val->description}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="error_rc_relationship_{{$keyRC}} error"></span>
                                            </li>
                                            <li>
                                                <label for="uname" class="required"><b>Email</b></label>
                                                <input type="email" name="rc_email[]" placeholder="Email"
                                                       value="{{$valRC->email}}">
                                                <span class="error_rc_email_{{$keyRC}} error"></span>
                                            </li>
                                            <li class="date-section">
                                                <label for="uname" class="required"><b>Birthday</b></label>
                                                <div class="birthday-dropdown">
                                                    <div class="month">
                                                        <select class="related-contacts-openEditClientFromView-select"
                                                                name="rc_dobM[]">
                                                            <option value="">Month</option>
                                                            @foreach (config('global.month') as $key => $month)
                                                                <option value="{{ $key }}"
                                                                        {{convertDateForFrontend($valRC->date_of_birth)['dobM'] == $month  ? 'selected' : ''}}>
                                                                    {{ $month }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error_rc_dobM_{{$keyRC}} error"></span>
                                                    </div>
                                                    <div class="date">
                                                        <select class="related-contacts-openEditClientFromView-select"
                                                                name="rc_dobD[]" >
                                                            <option value="">Day</option>
                                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}"
                                                                    {{convertDateForFrontend($valRC->date_of_birth)['dobD'] == $i  ? 'selected' : ''}}>
                                                                {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                        <span class="error_rc_dobD_{{$keyRC}} error"></span>
                                                    </div>
                                                    <div class="year">
                                                        <select class="related-contacts-openEditClientFromView-select"
                                                                name="rc_dobY[]" >
                                                            <option value="">Year</option>
                                                            @for ($i = 1920; $i <= now()->year; $i++) <option value="
                                                            {{ $i }}"
                                                                    {{convertDateForFrontend($valRC->date_of_birth)['dobY'] == $i  ? 'selected' : ''}}>
                                                                {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                        <span class="error_rc_dobY_{{$keyRC}} error"></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            @else
                                <div class="contact-form">
                                    <div
                                            class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                        <h4>Contact #&nbsp;<span class="related-contacts-form-number">1</span></h4>
                                        <div class="icon" style="display: none"><img
                                                    src="{{ asset('assets/images/garbage-can.png') }}"
                                                     class="remove_contact">

                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <label for="uname" class="required"><b>Enter name</b></label>
                                            <input type="text" placeholder="Martin Doe" name="rc_name[]">
                                            <span class="error_rc_name_0 error"></span>
                                        </li>
                                        <li class="frequency-section time-zone">
                                            <label>Relationship</label>
                                            <select class="related-contacts-openEditClientFromView-select"
                                                    name="rc_relationship[]">
                                                <option value="">Select relationship</option>
                                                @foreach($relationship as $key => $val)
                                                    <option value="{{$val->id}}">{{$val->description}}</option>
                                                @endforeach
                                            </select>
                                            <span class="error_rc_relationship_0 error"></span>
                                        </li>
                                        <li>
                                            <label for="uname" class="required"><b>Email</b></label>
                                            <input type="email" name="rc_email[]" placeholder="Email">
                                            <span class="error_rc_email_0 error"></span>
                                        </li>
                                        <li class="date-section">
                                            <label for="uname" class="required"><b>Birthday</b></label>
                                            <div class="birthday-dropdown">
                                                <div class="month">
                                                    <select class="related-contacts-openEditClientFromView-select"
                                                            name="rc_dobM[]">
                                                        <option>Month</option>
                                                        @foreach (config('global.month') as $key => $month)
                                                            <option value="{{ $key }}">
                                                                {{ $month }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="error_rc_dobM_0 error"></span>
                                                </div>
                                                <div class="date">
                                                    <select class="related-contacts-openEditClientFromView-select"
                                                            name="rc_dobD[]">
                                                        <option>Day</option>
                                                        @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}">
                                                            {{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="year">
                                                    <select class="related-contacts-openEditClientFromView-select"
                                                            name="rc_dobY[]">
                                                        <option>Year</option>
                                                        @for ($i = 1920; $i <= now()->year; $i++) <option value="
                                                            {{ $i }}">
                                                            {{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                    <span class="error_rc_dobY_0 error"></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endif

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
                        <h4>Social media</h4>
                        <table>
                            <tr>
                                <th>Site</th>
                                <th class="required">Profile link</th>
                            </tr>
                            <tr>
                                <td class="socialLinkTitle">Facebook</td>
                                <td>
                                    <input type="url" placeholder="For e.g.: www.facebook.com/myprofile"
                                           name="social_facebook_url"
                                           value="{{old('social_facebook_url') ? old('social_facebook_url') : $getdetails->social_facebook_url }}">
                                    <span class="error_social_facebook_url error"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="socialLinkTitle">Instagram</td>
                                <td>
                                    <input type="url" placeholder="For e.g.: www.instagram.com/myprofile"
                                           name="social_instagram_url"
                                           value="{{ old('social_instagram_url') ? old('social_instagram_url') : $getdetails->social_instagram_url}}">
                                    <span class="error_social_instagram_url error"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="socialLinkTitle">Linkedin</td>
                                <td>
                                    <input type="url" placeholder="For e.g.: www.linkedin.com/myprofile"
                                           name="social_linkedin_url"
                                           value="{{ old('social_linkedin_url') ? old('social_linkedin_url') :  $getdetails->social_linkedin_url}}">
                                    <span class="error_social_linkedin_url error"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="socialLinkTitle">Twitter</td>
                                <td>
                                    <input type="url" placeholder="For e.g.: www.twitter.com/myprofile"
                                           name="social_twitter_url"
                                           value="{{ old('social_twitter_url') ? old('social_twitter_url') : $getdetails->social_twitter_url }}">
                                    <span class="error_social_twitter_url error"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="socialLinkTitle">Custom</td>
                                <td>
                                    <input type="url" placeholder="Enter a custom link" name="social_custom_url"
                                           value="{{ old('social_custom_url') ? old('social_custom_url') : $getdetails->social_custom_url }}">
                                    <span class="error_social_custom_url error"></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="page-section" id="important-dates">
                <div class="news-form-wrap contact-padding-bottom">
                    <div class="add-client-form edit-popup ">
                        <h3>Important Dates</h3>
                        <div class="contact-form-details important-dates-form">
                            @if(count($getdetails->client_events) > 0)
                                @foreach($getdetails->client_events as $ImpKey=>$ImpVal)
                                    <div class="contact-form">
                                        <div
                                                class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                            <h4>Event/Date #<span class="important-dates-form-number">{{$ImpKey+1}}</span></h4>
                                            <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}"
                                                                  class="remove_import_date_form">
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <label for="uname" class="required"><b>Name/Event</b></label>
                                                <input type="text" placeholder="Martin Doe" name="imd_eventName[]"
                                                       value="{{$ImpVal->name}}">
                                                <span class="error_imd_eventName_{{ $ImpKey }} error"></span>
                                            </li>
                                            <li class="frequency-section time-zone">
                                                <label class="required">Frequency</label>
                                                <select class="important-dates-openEditClientFromView-select"
                                                        name="impd_frequency[]">
                                                    <option value="">Select frequency</option>
                                                    @foreach($frequency as $key => $val)
                                                        <option value="{{$val->id}}"
                                                                {{$ImpVal->event_frequency->id == $val->id  ? 'selected' : ''}}>
                                                            {{$val->description}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="error_impd_frequency_{{ $ImpKey }} error"></span>
                                            </li>
                                            <li>
                                                <label for="uname" class="required"><b>Notes</b></label>
                                                <input type="text" name="impd_notes[]" placeholder="Notes..."
                                                       value="{{$ImpVal->notes}}">
                                                <span class="error_impd_notes_{{ $ImpKey }} error"></span>
                                            </li>
                                            <li class="date-section">
                                                <label for="uname" class="required"><b>Date</b></label>
                                                <div class="birthday-dropdown">
                                                    <div class="month">
                                                        <select class="important-dates-openEditClientFromView-select"
                                                                name="impd_dobM[]">
                                                            <option value="">Month</option>
                                                            @foreach (config('global.month') as $key => $month)
                                                                <option value="{{ $key }}"
                                                                        {{convertDateForFrontend($ImpVal->event_date)['dobM'] == $month  ? 'selected' : ''}}>
                                                                    {{ $month }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="error_impd_dobM_{{ $ImpKey }} error"></span>
                                                    </div>
                                                    <div class="date">
                                                        <select class="important-dates-openEditClientFromView-select"
                                                                name="impd_dobD[]">
                                                            <option value="">Day</option>
                                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}"
                                                                    {{convertDateForFrontend($ImpVal->event_date)['dobD'] == $i  ? 'selected' : ''}}>
                                                                {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                        <span class="error_impd_dobD_{{ $ImpKey }} error"></span>
                                                    </div>
                                                    <div class="year">
                                                        <select class="important-dates-openEditClientFromView-select"
                                                                name="impd_dobY[]">
                                                            <option value="">Year</option>
                                                            @for ($i = 1920; $i <= now()->year; $i++) <option value="{{ $i }}"
                                                                    {{convertDateForFrontend($ImpVal->event_date)['dobY'] == $i  ? 'selected' : ''}}>
                                                                {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                        <span class="error_impd_dobY_{{ $ImpKey }} error"></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            @else
                                <div class="contact-form">
                                    <div
                                            class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                        <h4>Event/Date #<span class="important-dates-form-number">1</span></h4>
                                        <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}"
                                                               class="remove_import_date_form">
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <label for="uname" class="required"><b>Name/Event</b></label>
                                            <input type="text" placeholder="Martin Doe" name="imd_eventName[]">
                                        </li>
                                        <li class="frequency-section time-zone">
                                            <label>Frequency</label>
                                            <select class="important-dates-openEditClientFromView-select"
                                                    name="impd_frequency[]">
                                                <option value="">Select frequency</option>
                                                @foreach($frequency as $key => $val)
                                                    <option value="{{$val->id}}">{{$val->description}}</option>
                                                @endforeach
                                            </select>
                                            <span class="error_impd_frequency_0 error"></span>
                                        </li>
                                        <li>
                                            <label for="uname" class="required"><b>Notes</b></label>
                                            <input type="text" name="impd_notes[]" placeholder="Notes...">
                                            <span class="error_impd_notes_0 error"></span>
                                        </li>
                                        <li class="date-section">
                                            <label for="uname"><b>Date</b></label>
                                            <div class="birthday-dropdown">
                                                <div class="month">
                                                    <select class="important-dates-openEditClientFromView-select"
                                                            name="impd_dobM[]">
                                                        <option value="">Month</option>
                                                        @foreach (config('global.month') as $key => $month)
                                                            <option value="{{ $key }}">
                                                                {{ $month }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="error_impd_dobM_0 error"></span>
                                                </div>
                                                <div class="date">
                                                    <select class="important-dates-openEditClientFromView-select"
                                                            name="impd_dobD[]">
                                                        <option value="">Day</option>
                                                        @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}">
                                                            {{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                    <span class="error_impd_dobD_0 error"></span>
                                                </div>
                                                <div class="year">
                                                    <select class="important-dates-openEditClientFromView-select"
                                                            name="impd_dobY[]">
                                                        <option value="">Year</option>
                                                        @for ($i = 1920; $i <= now()->year; $i++) <option value="{{ $i }}">
                                                            {{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                    <span class="error_impd_dobY_0 error"></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endif
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
                        <h4>Important Numbers</h4>
                        <div class="contact-form-details important-numbers-form">
                            @if(count($getdetails->client_loyalty_numbers) > 0)
                                @foreach($getdetails->client_loyalty_numbers as $ImpNKey=>$ImpNVal)
                                    <div class="contact-form">
                                        <div
                                                class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                            <h4>Reward/loyalty number #<span class="important-numbers-form-number">1</span></h4>
                                            <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}"
                                                                   class="remove_import_number_form">
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="frequency-section time-zone">
                                                <label class="required">Rewards/loyalty program</label>
                                                <input type="text" placeholder="Enter Rewards/loyalty program"
                                                       name="im_loyaltyProgram[]" value="{{$ImpNVal->loyalty_program}}">
                                                <span class="error_im_loyaltyProgram_{{$ImpNKey}} error"></span>
                                            </li>
                                            <li>
                                                <label for="uname" class="required"><b>Number</b></label>
                                                <input type="text" placeholder="Enter number" name="im_number[]"
                                                       value="{{$ImpNVal->number}}">
                                                <span class="error_im_number_{{$ImpNKey}} error"></span>
                                            </li>
                                        </ul>

                                    </div>
                                @endforeach
                            @else
                                <div class="contact-form">
                                    <div
                                            class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                        <h4>Reward/loyalty number #<span class="important-numbers-form-number">1</span></h4>
                                        <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}"
                                                               class="remove_import_number_form">
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="frequency-section time-zone" style="display:none">
                                            <input type="text" placeholder="Enter Rewards/loyalty program" name="im_id[]"
                                                   value="0">
                                            <span class="error_im_id_0 error"></span>
                                        </li>
                                        <li class="frequency-section time-zone">
                                            <label class="required">Rewards/loyalty program</label>
                                            <input type="text" placeholder="Enter Rewards/loyalty program"
                                                   name="im_loyaltyProgram[]">
                                            <span class="error_im_loyaltyProgram_0 error"></span>
                                        </li>
                                        <li>
                                            <label for="uname" class="required"><b>Number</b></label>
                                            <input type="text" placeholder="Enter number" name="im_number[]">
                                            <span class="error_im_number_0 error"></span>
                                        </li>
                                    </ul>

                                </div>
                            @endif
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
                        <h4 class="required">Notes</h4>
                        <ul>
                            <li class="width-100">
                                <textarea name="note" placeholder="Enter client notes here..."
                                          style="height:174px;">{{ old('note') ? old('note') : $getdetails->notes }}</textarea>
                            </li>
                            <li class="width-100" style="display:none">
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
                        <h4>Food & Allergies</h4>
                        <div class="food-diet">
                            <div class="contact-title ">
                                <h4>Diet</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Facilisis lobortis tempor purus, condimentum hac morbi sit.</p>
                            </div>
                            <div class="notes-form-checkbox d-flex flex-wrap">
                                @foreach($diet as $key => $val)
                                    <div class="summary-wrap position-relative" id="food-diet-{{$key}}">
                                        <input type="checkbox" name="foodDiet[]" id="diet-{{$key}}" value="{{$val->id}}"
                                                {{ in_array($val->id, array_column(json_decode($getdetails->client_diets), 'diet_id')) == 1 ? 'checked' : '' }}>
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
                                                {{ in_array($val->id, array_column(json_decode($getdetails->client_allergies), 'allergy_id')) == 1 ? 'checked' : '' }}>
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
                            <h4 class="required">Like</h4>
                            <div class="food-diet">
                                <div class="contact-title ">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Facilisis lobortis tempor purus, condimentum hac morbi sit.
                                    </p>
                                </div>
                                <ul class="">
                                    <li class="width-100">
                                        <textarea name="likes" placeholder="Enter client likes here..."
                                                  style="height:170px;">{{ old('likes') ? old('likes') : $getdetails->likes }}</textarea>
                                        <span class="error error_likes"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dislikes">
                            <h4 class="required">Dislikes</h4>
                            <div class="food-diet">
                                <div class="contact-title ">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Facilisis lobortis tempor purus, condimentum hac morbi sit.
                                    </p>
                                </div>
                                <ul>
                                    <li class="width-100">
                                        <textarea name="dislikes" placeholder="Enter client dislikes here..."
                                                  style="height:170px;">{{ old('dislikes') ? old('dislikes') : $getdetails->dislikes }}</textarea>
                                        <span class="error error_dislikes"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="upload-btns d-flex flex-wrap">
                <div class="add-client-btn buttons">
                    <button type="submit" id="submit_client_form" class="indicator-off">
                        <span class="indicator-label ">
                            Update client details
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </div>

        </div>

    </div>
</form>

@push('js')
    <script type="text/javascript" src="{{ asset('assets/js/clients/edit-client-script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/js/intlTelInput.min.js"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>

    <script>

        var telInput = null;
        jQuery(document).ready(function($) {
            telInput = $("#client_phone");
            telInput = telInput.intlTelInput({
                // utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.8/js/utils.js',
                formatOnDisplay: false,
                nationalMode: false,
                separateDialCode: true,
                // customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                //     console.log(selectedCountryPlaceholder);
                //     return "e.g. " + selectedCountryPlaceholder + '1234567';
                // }
            });

            if ($("#clientEditForm").length > 0) {
                // Suppose that your method is well defined

                jQuery.validator.addMethod("validatePhone",
                    function(value, element) {
                        var testVal = value.indexOf('+') >= 0 ? value : '+' + $("#client_phone").intlTelInput("getSelectedCountryData").dialCode + value;
                        $('[name="client_phone"]').val(testVal);
                        var valid;
                        if ($.trim(testVal).length > 0) {
                            var regx = /[+][0-9]{10,15}/;
                            valid = regx.test(testVal);
                        } else {
                            valid = true;
                        }
                        return this.optional(element) || valid;
                    }, "Please enter valid phone number"
                );
                $("#clientEditForm").validate({
                    rules: {
                        client_first_name: {
                            required: true,
                            maxlength: 250
                        },
                        client_middle_name: {
                            required: true,
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
                            required: true,
                            validatePhone: true
                        },
                        client_dobM: {
                            required: true,
                        },
                        client_dobD: {
                            required: true,
                        },
                        client_dobY: {
                            required: true,
                        },
                        address: {
                            required: true,
                            maxlength: 250
                        },
                        social_facebook_url: {
                            required: true,
                            url: true,
                            maxlength: 250
                        },
                        social_instagram_url: {
                            required: true,
                            url: true,
                            maxlength: 250
                        },
                        social_linkedin_url: {
                            required: true,
                            url: true,
                            maxlength: 250
                        },
                        social_twitter_url: {
                            required: true,
                            url: true,
                            maxlength: 250
                        },
                        social_custom_url: {
                            required: true,
                            url: true,
                            maxlength: 250
                        },

                        note: {
                            required: true,
                            maxlength: 250
                        },
                        likes: {
                            required: true,
                            maxlength: 250
                        },
                        dislikes: {
                            required: true,
                            maxlength: 250
                        },
                        // profile_picture_relative_url: {
                        //     required: false,
                        //     extension: "jpg|jpeg|png|PNG|gif"
                        // }
                    },
                    messages: {
                        client_first_name: {
                            required: "Please enter first name",
                        },
                        client_middle_name: {
                            required: "Please enter middle name",
                        },
                        client_last_name: {
                            required: "Please enter last name",
                        },
                        client_email: {
                            required: "Please enter valid email",
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
                        let button = $('#submit_client_form')
                        buttonIndicator(button,'on')
                        event.preventDefault();
                        let url = $('#clientEditForm').attr('action');
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: new FormData(form),
                            contentType: false,
                            cache: false,
                            processData: false,
                            success: function (response) {

                                    window.location.reload();
                            },
                            error: function (response) {
                                //show error message
                                buttonIndicator(button,'off')
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
    </script>
@endpush
