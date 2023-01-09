<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/intlTelInput.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/pre-loader.css') }}" rel="stylesheet" />
</head>
<body>
<div class="loaderArea d-none">
    <div class="pre-loader "></div>
</div>
{{--@dd($client->client_documents)--}}
<div id="new-client-popup">
    <div class="my-profile-form">
        <form action="{{ route('delegateUpdateClient',['id'=>$client->id]) }}" enctype="multipart/form-data" id="form">
            @csrf
            <input type="hidden" name="token" value="{{ $client->token }}">
            <div class="my-profile d-flex flex-wrap justify-content-space-between">
                <div class="d-flex align-items-center ">
{{--                    <div class="close"><img src="{{ asset('assets/images/close.png') }}"></div>--}}
                    <h3>{{ $client->name }}</h3>
                </div>
                <div class="upload-documents">
                    <a href="#" id="OpenImgUploadDelegate">Upload documentation</a>
                    <input type="file" id="imgupload" name="documents[]" multiple accept=".jpg,.png,.pdf,.xlsx,.docx"
                           style="display:none"/>
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
                                        <label for="uname" class="required"><b>First Name</b></label>
                                        <input type="text" placeholder="Enter first name" name="client_first_name" value="{{ $client->first_name }}" required="required">
                                        <span class="error_client_first_name error"></span>
                                    </li>
                                    <li>
                                        <div class="row middle-last">
                                            <div class="middle-name col-md-4">
                                                <label for="uname" class="required"><b>Middle Name</b></label>
                                                <input type="text" placeholder="Enter middle name" value="{{ $client->middle_name }}" name="client_middle_name">
                                                <span class="error_client_middle_name error"></span>
                                            </div>
                                            <div class="last-name col-md-4">
                                                <label for="uname" class="required"><b>Last Name</b></label>
                                                <input type="text" placeholder="Enter last name" value="{{ $client->last_name }}" name="client_last_name">
                                                <span class="error_client_last_name error"></span>
                                            </div>
                                        </div>


                                    </li>
                                    <li class="width-100">
                                        <label for="uname"><b>Email</b></label>
                                        <input type="email" name="client_email" placeholder="Email"
                                               value="{{ $client->email }}">
                                        <span class="error_client_email error"></span>
                                    </li>
                                    <li class="width-100">
                                        <label for="client_phone"><b>Phone number</b></label>
                                        <input type="tel" name="client_phone" id="client_phone_ed" maxlength="20"
                                               placeholder="e.g.800001111" value="{{ $client->phone }}" >
                                        <span class="error_client_phone error"></span>
                                    </li>

                                    <li class="date-section width-100">
                                        <label for="uname"><b>Birthday</b></label>
                                        <div class="birthday-dropdown">
                                            <div class="month">
                                                <select class="form-select" name="client_dobM" id="select_clientM" required>
                                                    <option value="">Month</option>
                                                    @foreach (config('global.month') as $key => $month)
                                                        <option value="{{ $key }}"
                                                            {{$client->date_of_birth ? convertDateForFrontend($client->date_of_birth)['dobM'] == $month  ? 'selected' : '' : ''}}>
                                                            {{ $month }} </option>
                                                    @endforeach
                                                </select>
                                                <span class="error_client_dobM error"></span>
                                            </div>
                                            <div class="date">
                                                <select class="form-select" name="client_dobD" id="select_clientD" required>
                                                    <option value="">Day</option>
                                                    @for ($i = 1; $i <= 31; $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $client->date_of_birth ? convertDateForFrontend($client->date_of_birth)['dobD'] == $i  ? 'selected' : '' : ''}}>
                                                            {{ $i }}</option>
                                                    @endfor
                                                </select>
                                                <span class="error_client_dobD error"></span>
                                            </div>
                                            <div class="year">
                                                <select class="form-select" name="client_dobY" id="select_clientY" required>
                                                    <option value="">Year</option>
                                                    @for ($i = 1920; $i <= now()->year; $i++)
                                                        <option value="{{ $i }}"
                                                            {{ $client->date_of_birth ? convertDateForFrontend($client->date_of_birth)['dobY'] == $i  ? 'selected' : '' : ''}}>
                                                            {{ $i }}</option>
                                                    @endfor
                                                </select>
                                                <span class="error_client_dobY error"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="width-50 uploadProfilePic">
                                        <div class="box">
                                            <div class="js-image-preview {{strlen($client->profile_picture_relative_url) > 10 ? 'profileImgExist':'' }}"
                                                 style="background-image: url({{$client->profile_picture_url}});"></div>
                                            <div class="upload-options">
                                                <label>
                                                    Upload Profile Photo
                                                    <input type="file" name="profile_picture_relative_url"
                                                           class="image-upload" accept="image/*"/>
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="width-50">
                                        <label for="uname"><b>Address</b></label>
                                        <textarea name="address" placeholder="Enter client address here..."
                                                  style="height:70%" required="required">{{  $client->address }}</textarea>
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
                                    @if(count($client->client_contacts)>0)
                                        @foreach($client->client_contacts as $keyRC=>$valRC)
                                    <div class="contact-form" id="contact-form{{ $keyRC+1 }}">
                                        <div
                                            class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                            <h4>Contact #&nbsp;<span class="related-contacts-form-number">{{$keyRC+1}}</span></h4>
                                            <div class="icon" style="display: none"><img
                                                    src="{{ asset('assets/images/garbage-can.png') }}"
                                                    class="remove_contact">
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <label for="uname"><b>Enter name</b></label>
                                                <input type="hidden" name="id[]" value="{{$valRC->id}}">
                                                <input type="text" placeholder="Martin Doe" name="rc_name[]" value="{{$valRC->name}}" required="required">
                                                <span class="error_rc_name_{{$keyRC}}  error"></span>
                                            </li>
                                            <li class="frequency-section time-zone">
                                                <label>Relationship</label>
                                                <select class="related-contacts-form-select" name="rc_relationship[]" required="required">
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
                                                <label for="uname"><b>Email</b></label>
                                                <input type="email" name="rc_email[]" placeholder="Email"  value="{{$valRC->email}}" required="required">
                                                <span class="error_rc_email_{{$keyRC}} error"></span>
                                            </li>
                                            <li class="date-section">
                                                <label for="uname"><b>Birthday</b></label>
                                                <div class="birthday-dropdown">
                                                    <div class="month">
                                                        <select class="related-contacts-form-select" name="rc_dobM[]" required="required">
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
                                                        <select class="related-contacts-form-select" name="rc_dobD[]" required="required">
                                                            <option value="">Day</option>
                                                            @for ($i = 1; $i <= 31; $i++)
                                                                <option value="{{ $i }}"
                                                                    {{convertDateForFrontend($valRC->date_of_birth)['dobD'] == $i  ? 'selected' : ''}}>
                                                                    {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                        <span class="error_rc_dobD_{{$keyRC}} error"></span>
                                                    </div>
                                                    <div class="year">
                                                        <select class="related-contacts-form-select" name="rc_dobY[]" required="required">
                                                            <option value="">Year</option>
                                                            @for ($i = 1920; $i <= now()->year; $i++)
                                                                <option value="
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
                                </div>
                                   @endforeach
                                    @else
                                        <div class="contact-form ">
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
                                                    <input type="text" placeholder="Martin Doe" name="rc_name[]" required="required">
                                                    <span class="error_rc_name_0 error"></span>
                                                </li>
                                                <li class="frequency-section time-zone">
                                                    <label>Relationship</label>
                                                    <select class="related-contacts-openEditClientFromView-select"
                                                            name="rc_relationship[]" required="required">
                                                        <option value="">Select relationship</option>
                                                        @foreach($relationship as $key => $val)
                                                            <option value="{{$val->id}}">{{$val->description}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="error_rc_relationship_0 error"></span>
                                                </li>
                                                <li>
                                                    <label for="uname" class="required"><b>Email</b></label>
                                                    <input type="email" name="rc_email[]" placeholder="Email" required="required">
                                                    <span class="error_rc_email_0 error"></span>
                                                </li>
                                                <li class="date-section">
                                                    <label for="uname" class="required"><b>Birthday</b></label>
                                                    <div class="birthday-dropdown">
                                                        <div class="month">
                                                            <select class="related-contacts-openEditClientFromView-select"
                                                                    name="rc_dobM[]" required="required">
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
                                                                    name="rc_dobD[]" required="required">
                                                                <option>Day</option>
                                                                @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}">
                                                                    {{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        <div class="year">
                                                            <select class="related-contacts-openEditClientFromView-select"
                                                                    name="rc_dobY[]" required="required">
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


                                <div class="add-related-contact add-form-div">
                                    <div class="related-contact blue-oblivion-color cp m-600"><i class="fa fa-plus"
                                                                                                 aria-hidden="true"></i>
                                        Add new related
                                        contact
                                    </div>
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
                                                   name="social_facebook_url" value="{{old('social_facebook_url') ? old('social_facebook_url') : $client->social_facebook_url }}">
                                            <span class="error_social_facebook_url error"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="socialLinkTitle">Instagram</td>
                                        <td>
                                            <input type="url" placeholder="For e.g.: www.instagram.com/myprofile"
                                                   name="social_instagram_url"
                                                   value="{{ old('social_instagram_url') ? old('social_instagram_url') : $client->social_instagram_url}}">
                                            <span class="error_social_instagram_url error"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="socialLinkTitle">Linkedin</td>
                                        <td>
                                            <input type="url" placeholder="For e.g.: www.linkedin.com/myprofile"
                                                   name="social_linkedin_url" value="{{ old('social_linkedin_url') ? old('social_linkedin_url') :  $client->social_linkedin_url}}">
                                            <span class="error_social_linkedin_url error"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="socialLinkTitle">Twitter</td>
                                        <td>
                                            <input type="url" placeholder="For e.g.: www.twitter.com/myprofile"
                                                   name="social_twitter_url" value="{{ old('social_twitter_url') ? old('social_twitter_url') : $client->social_twitter_url }}">
                                            <span class="error_social_twitter_url error"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="socialLinkTitle">Custom</td>
                                        <td>
                                            <input type="url" placeholder="Enter a custom link" name="social_custom_url"
                                                   value="{{ old('social_custom_url') ? old('social_custom_url') : $client->social_custom_url }}">
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
                                    @if(count($client->client_events) > 0)
                                        @foreach($client->client_events as $ImpKey=>$ImpVal)
                                            <div class="contact-form">
                                                <div
                                                    class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                                    <h4>Event/Date #<span class="important-dates-form-number">{{$ImpKey+1}}</span></h4>
                                                    <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}"
                                                                           onclick="removeImportDateform($(this))"      class="remove_import_date_form">
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <label for="uname" class="required"><b>Name/Event</b></label>
                                                        <input type="text" placeholder="Martin Doe" name="imd_eventName[]"
                                                               value="{{$ImpVal->name}}" required="required">
                                                        <span class="error_imd_eventName_{{ $ImpKey }} error"></span>
                                                    </li>
                                                    <li class="frequency-section time-zone">
                                                        <label class="required">Frequency</label>
                                                        <select class="important-dates-openEditClientFromView-select"
                                                                name="impd_frequency[]" required="required">
                                                            <option value=""> Select frequency</option>
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
                                                               value="{{$ImpVal->notes}}" required="required">
                                                        <span class="error_impd_notes_{{ $ImpKey }} error"></span>
                                                    </li>
                                                    <li class="date-section">
                                                        <label for="uname" class="required"><b>Date</b></label>
                                                        <div class="birthday-dropdown">
                                                            <div class="month">
                                                                <select class="important-dates-openEditClientFromView-select"
                                                                        name="impd_dobM[]" required="required">
                                                                    <option>Month</option>
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
                                                                        name="impd_dobD[]" required="required">
                                                                    <option>Day</option>
                                                                    @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}"
                                                                        {{convertDateForFrontend($ImpVal->event_date)['dobD'] == $i  ? 'selected' : ''}}>
                                                                        {{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                                <span class="error_impd_dobD_{{ $ImpKey }} error"></span>
                                                            </div>
                                                            <div class="year">
                                                                <select class="important-dates-openEditClientFromView-select"
                                                                        name="impd_dobY[]" required="required">
                                                                    <option>Year</option>
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
                                                                   onclick="removeImportDateform($(this))"
                                                                   class="remove_import_date_form">
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <label for="uname"><b>Name/Event</b></label>
                                                <input type="text" placeholder="Martin Doe" name="imd_eventName[]" required="required">
                                            </li>
                                            <li class="frequency-section time-zone">
                                                <label>Frequency</label>
                                                <select class="important-dates-form-select" name="impd_frequency[]" required="required">
                                                    <option value="">Select frequency</option>
                                                    @foreach($frequency as $key => $val)
                                                        <option value="{{$val->id}}">{{$val->description}}</option>
                                                    @endforeach
                                                </select>
                                            </li>
                                            <li>
                                                <label for="uname"><b>Notes</b></label>
                                                <input type="text" name="impd_notes[]" placeholder="Notes..." required="required">
                                            </li>
                                            <li class="date-section">
                                                <label for="uname"><b>Date</b></label>
                                                <div class="birthday-dropdown">
                                                    <div class="month">
                                                        <select class="important-dates-form-select" name="impd_dobM[]" required="required">
                                                            <option value="">Month</option>
                                                            @foreach (config('global.month') as $key => $month)
                                                                <option value="{{ $key }}">
                                                                    {{ $month }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="date">
                                                        <select class="important-dates-form-select" name="impd_dobD[]" required="required">
                                                            <option value="">Day</option>
                                                            @for ($i = 1; $i <= 31; $i++)
                                                                <option value="{{ $i }}">
                                                                    {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                    <div class="year">
                                                        <select class="important-dates-form-select" name="impd_dobY[]" required="required">
                                                            <option value="">Year</option>
                                                            @for ($i = 1920; $i <= now()->year; $i++)
                                                                <option value="{{ $i }}">
                                                                    {{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endif
                            </div>
                                <div class="add-important-dates add-form-div">
                                    <div class="related-contact blue-oblivion-color cp m-600"><i class="fa fa-plus"
                                                                                                 aria-hidden="true"></i>Add
                                        new date
                                    </div>
                                </div>

                    </div>
                    </div>
                    <div class="page-section" id="important-numbers">
                        <div class="news-form-wrap contact-padding-bottom">
                            <div class="add-client-form edit-popup ">
                                <h3>Important Numbers</h3>
                                <div class="contact-form-details important-numbers-form">
                                    @if(count($client->client_loyalty_numbers) > 0)
                                        @foreach($client->client_loyalty_numbers as $ImpNKey=>$ImpNVal)
                                            <div class="contact-form">
                                                <div
                                                    class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                                    <h4>Reward/loyalty number #<span class="important-numbers-form-number">{{ $ImpNKey+1 }}</span></h4>
                                                    <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}"
                                                                    onclick="removeImportNumberform($(this))"       class="remove_import_number_form">
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="frequency-section time-zone">
                                                        <label class="required">Rewards/loyalty program</label>
                                                        <input type="text" placeholder="Enter Rewards/loyalty program"
                                                               name="im_loyaltyProgram[]" value="{{$ImpNVal->loyalty_program}}" required="required">
                                                        <span class="error_im_loyaltyProgram_{{$ImpNKey}} error"></span>
                                                    </li>
                                                    <li>
                                                        <label for="uname" class="required"><b>Number</b></label>
                                                        <input type="text" placeholder="Enter number" name="im_number[]"
                                                               value="{{$ImpNVal->number}}" required="required">
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
                                                           value="0" required="required">
                                                    <span class="error_im_id_0 error"></span>
                                                </li>
                                                <li class="frequency-section time-zone">
                                                    <label class="required">Rewards/loyalty program</label>
                                                    <input type="text" placeholder="Enter Rewards/loyalty program"
                                                           name="im_loyaltyProgram[]" required="required">
                                                    <span class="error_im_loyaltyProgram_0 error"></span>
                                                </li>
                                                <li>
                                                    <label for="uname" class="required"><b>Number</b></label>
                                                    <input type="text" placeholder="Enter number" name="im_number[]" required="required">
                                                    <span class="error_im_number_0 error"></span>
                                                </li>
                                            </ul>

                                        </div>
                                    @endif
                                </div>
                                <div class="add-important-numbers add-form-div">
                                    <div class="related-contact blue-oblivion-color cp m-600"><i class="fa fa-plus"
                                                                                                 aria-hidden="true"></i>Add
                                        new
                                        number
                                    </div>
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
                                                  style="height:174px;" required="required">{{ old('note') ? old('note') : $client->notes }}</textarea>
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
                                                <input type="checkbox" name="foodDiet[]" id="diet-{{$key}}" value="{{$val->id}}"
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
                                            Facilisis lobortis tempor purus, condimentum hac morbi sit.</p>
                                    </div>
                                    <div class="notes-form-checkbox d-flex flex-wrap">
                                        @foreach($allergy as $key => $val)
                                            <div class="summary-wrap position-relative" id="food-allergies-{{$key}}">
                                                <input type="checkbox" class="allergy" name="foodAllergies[]" id="allergies-{{$key}}"
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
                    <div class="page-section" id="preferences">
                        <div class="news-form-wrap like-deslike">
                            <div class="add-client-form edit-popup food-and-allergies">
                                <div class="like">
                                    <h3>Like</h3>
                                    <div class="food-diet">
                                        <div class="contact-title ">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Facilisis lobortis tempor purus, condimentum hac morbi sit.
                                            </p>
                                        </div>
                                        <ul>
                                            <li class="width-100">
                                                <textarea name="likes" placeholder="Enter client likes here..."
                                                          style="height:174px;" required="required">{{ old('likes') ? old('likes') : $client->likes }}</textarea>
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
                                                          style="height:174px;" required="required">{{ old('dislikes') ? old('dislikes') : $client->dislikes }}</textarea>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upload-btns d-flex flex-wrap">
{{--                        <div class="edit-profile buttons" ><a href="{{ route('allClient') }}">Save--}}
{{--                                as draft</a>--}}
{{--                        </div>--}}
                        <input type="hidden" name="submission_type">
                        <div class="add-client-btn buttons">
                            <button type="submit"
                                    onclick="setSaveType('draft')"
                                    name="save_as_draft" id="submit_save_as_client_form" class="submit_client_form indicator-off">
                        <span class="indicator-label ">
                            Save as draft
                        </span>
                                <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                            </button>
                        </div>
                        <div class="add-client-btn buttons">
                            <button type="submit" name="save" id="submit_client_form"
                                    onclick="setSaveType('save')"
                                    class="submit_client_form indicator-off">
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
                <div class="documentation-attached">
                    <div id="totalFilesDivDelegate" files="{{count($client->client_documents)}}" >
                        <h4>Documents <span id="totalFiles">{{ count($client->client_documents) }}</span></h4>
                    </div>
                    <div class="d-flex justify-content-center align-items-center text-center"
                         style="width: 100%;height: 500px;">
                        <div class="inner" id="uploadedFileList">
                                <ul class="documents-ul">
                                        @foreach($client->client_documents as $key => $document)
                                        <li class="documents" document="{{ $document->id }}" id="document-{{ $key }}">
                                            <span>{{getFileExtFromFileName($document->document_name)}}</span>
                                            <a href="{{$document->document_url}}"
                                               target="_blank" style="color: black">{{$document->document_name}}</a>
                                            <span class="remove-document"><i class="fa fa-close" style="font-size:16px;color:#ffffff"></i></span>
                                        </li>
                                        @endforeach

                                </ul>

                        </div>
                    </div>
                </div>

        </form>
        </div>
    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{--<script type="text/javascript" src="{{ asset('assets/js/clients/new-client-script.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('assets/js/clients/edit-client-script.js') }}"></script>
<!-- <script src="{{ asset('assets/js/intlTelInput.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.10/js/intlTelInput.min.js"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-tagsinput.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/dashboard-script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
<script>
    // use to indicate final save
    function setSaveType(v){ $("[name='submission_type']").val(v); }

    const dataTransfer = new DataTransfer();
    $(document).on('click','.remove-document',function (){
       let documentId =  $(this).parent().attr('document');
       let fileName = $(this).parent().find('.file-name').text().trim();
        $(this).parent().remove();

        $("#totalFiles").text($("#uploadedFileList ul li").length);

        if( parseInt($("#totalFiles").text()) > 0) {
            $("#totalFilesDivDelegate").show();
        }else{
            $("#totalFilesDivDelegate").hide();
            $("#uploadedFileList ul").html("<h3>No documentation attached</h3>");
        }
        if (typeof documentId !== "undefined") {
            console.log('delete-document/'+documentId)
            $.ajax({
                type: 'get',
                url:'delete-document/'+documentId,
                success: function (response) {
                    if(response.status == 200){
                        toastr.success(response.message);
                    }
                }
            });
        }else{

            for(let i = 0; i < dataTransfer.items.length; i++){
                // Correspondance du fichier et du nom
                if(fileName === dataTransfer.items[i].getAsFile().name){
                    // Suppression du fichier dans l'objet DataTransfer
                    dataTransfer.items.remove(i);
                    continue;
                }
            }
            document.getElementById('imgupload').files = dataTransfer.files;
            toastr.success('Document delete successfully.')

        }
    });
    function removeImportNumberform(e) {
        if ($(".important-numbers-form .contact-form").length > 1) {
            e.parent().parent().parent().remove();
        }
    }
    function removeImportDateform(e) {
        if ($(".important-dates-form .contact-form").length > 1) {
            e.parent().parent().parent().remove();
        }
    }
    var telInput = null;
    jQuery(document).ready(function ($) {
        telInput = $("#client_phone_ed");
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
            // $.validator.addMethod("allergy", function(value, elem, param) {
            //     return $(".allergy:checkbox:checked").length > 0;
            // },"You must select at least one!");
            jQuery.validator.addMethod("validatePhone",
                function (value, element) {

                    if (value.length > 0) {
                        var testVal = value.indexOf('+') >= 0 ? value : '+' + $("#client_phone_ed").intlTelInput("getSelectedCountryData").dialCode + value;
                        console.log(testVal)
                        $('[name="client_phone"]').val(testVal);
                        var valid;
                        if ($.trim(testVal).length > 0) {
                            var regx = /[+][0-9]{10,15}/;
                            valid = regx.test(testVal);
                        } else {
                            valid = true;
                        }
                    } else {
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
                    social_custom_url: {
                        required: true,
                        url: true
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
                highlight: function (element, errorClass) {
                    $(element).removeClass(errorClass); //prevent class to be added to selects
                },
                errorPlacement: function (error, element) {
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
                submitHandler: function (form, event) {
                    // form.submit();
                    event.preventDefault();
                    $('.loaderArea').removeClass('d-none')

                    let url = $('#form').attr('action');
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: new FormData(form),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (response) {
                            $('.loaderArea').addClass('d-none')
                            window.location.href='/';
                        },
                        error: function (response) {
                            //show error message
                            $('.loaderArea').addClass('d-none')
                            $.each(response.responseJSON.errors, function (index, value) {
                                var replace_index = index.replace(".", "_");
                                $('.error_' + replace_index).html(value);
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

    $(document).on('click','.remove_contact', function (){
        if ($(".related-contacts-form .contact-form").length > 1) {
            $(this).parent().parent().parent().remove();
        }
    })

    $('#select_clientD').change(function () {
        if ($(this).val() != "") {
            $("#main-information .date label.error").hide();
        } else {
            $("#main-information .date label.error").show();
        }
    })
    $('#select_clientM').change(function () {
        if ($(this).val() != "") {
            $("#main-information .month label.error").hide();
        } else {
            $("#main-information .month label.error").show();
        }
    })
    $('#select_clientY').change(function () {
        if ($(this).val() != "") {
            $("#main-information .year label.error").hide();
        } else {
            $("#main-information .year label.error").show();
        }
    })
    jQuery(document).ready(function ($) {

        if( parseInt($('#totalFilesDivDelegate').attr('files')) > 0) {
            $("#totalFilesDivDelegate").show();
        }else{
            $("#totalFilesDivDelegate").hide();
            $("#uploadedFileList ul ").html("<h3>No documentation attached</h3>");
        }


        $("#OpenImgUploadDelegate").click(function () {
            $("#imgupload").trigger("click");
        });
    });
    $("#imgupload").on('change', function(e){
        var input = $("#imgupload");
        var list = "";
        for (var i = 0; i < input[0].files.length; ++i) {
            let extension = input[0].files.item(i).name.split(".").pop();
            list += `<li><span>${extension}</span><a href="#" class="file-name" style="color:black"> ${
                input[0].files.item(i).name
            }</a> <span class="remove-document"><i class="fa fa-close" style="font-size:16px;color:#fffff"></i></span> </li>`;
        }
        $("#uploadedFileList ul h3").remove();
        $("#totalFilesDivDelegate").show();
        $("#uploadedFileList ul").append(list);

        $("#uploadedFileList ul li").each(function(i, obj) {
            $(this).addClass('documents');
            $(this).attr('id','documents-'+i);

        });

        for (let file of this.files) {
            dataTransfer.items.add(file);
        }
        this.files = dataTransfer.files;

        document.getElementById('imgupload').files = dataTransfer.files
        $("#totalFiles").text($("#uploadedFileList ul li").length);

    })

</script>
