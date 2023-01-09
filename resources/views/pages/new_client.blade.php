<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Client</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="news-logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/images/blue-logo.png') }}">
        </a>
    </div>

    <div class="my-profile-form">
        <div class="my-profile">
            <h3>Complete my profile</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
        </div>

        <div class="news-form-section d-flex flex-wrap">
            <div class="news-form-right">
                <nav class="navigation" id="mainNav">
                    <a class="navigation__link" href="#1">
                        <div class="navigation-wrap">
                            <div class="number"></div>
                            <h3>Main Information</h3>
                        </div>
                    </a>
                    <a class="navigation__link" href="#2">
                        <div class="navigation-wrap">
                            <div class="number"></div>
                            <h3>Related contacts</h3>
                        </div>
                    </a>
                    <a class="navigation__link" href="#3">
                        <div class="navigation-wrap">
                            <div class="number"></div>
                            <h3>Important dates</h3>
                        </div>
                    </a>
                    <a class="navigation__link" href="#4">
                        <div class="navigation-wrap">
                            <div class="number"></div>
                            <h3>Important numbers</h3>
                        </div>
                    </a>
                    <a class="navigation__link" href="#5">
                        <div class="navigation-wrap">
                            <div class="number"></div>
                            <h3>Notes and tags</h3>
                        </div>
                    </a>
                    <a class="navigation__link" href="#6">
                        <div class="navigation-wrap">
                            <div class="number"></div>
                            <h3>Food & allergies</h3>
                        </div>
                    </a>
                    <a class="navigation__link" href="#7">
                        <div class="navigation-wrap">
                            <div class="number"></div>
                            <h3>Preferences</h3>
                        </div>
                    </a>
                </nav>
            </div>
            <div class="news-form-left">
                <div class="page-section hero" id="1">
                    <div class="news-form-wrap">
                        <div class="add-client-form edit-popup ">
                            <h3>Main Information</h3>
                            <form>
                                <ul>
                                    <li class="width-100">
                                        <label for="uname"><b>Full Name</b></label>
                                        <input type="text" placeholder="Martin Doe" name="uname" required="">
                                    </li>
                                    <li class="width-100">
                                        <label for="uname"><b>Email</b></label>
                                        <input type="email" name="Deadline" required="" placeholder="Email">
                                    </li>
                                    <li class="width-100">
                                        <label for="uname"><b>Phone number</b></label>
                                        <input type="text" placeholder="+12121111234" name="details" required="">
                                    </li>
                                    <li class="date-section width-100">
                                        <label for="uname"><b>Birthday</b></label>
                                        <div class="birthday-dropdown">
                                            <div class="month">
                                                <select class="form-select">
                                                    <option>Month</option>
                                                    @foreach (config('global.month') as $key => $month)
                                                    <option value="{{ $key }}">{{ $month }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="date">
                                                <select class="form-select">
                                                    <option>Day</option>
                                                    @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}">{{ $i }}
                                                        </option>
                                                        @endfor
                                                </select>
                                            </div>
                                            <div class="year">
                                                <select class="form-select">
                                                    <option>Year</option>
                                                    @for ($i = 1988; $i <= 1998; $i++) <option value="{{ $i }}">{{ $i }}
                                                        </option>
                                                        @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="page-section" id="2">
                    <div class="news-form-wrap contact-padding-bottom">
                        <div class="add-client-form edit-popup ">
                            <h3>Related contacts</h3>
                            <div class="contact-form-details related-contacts-form">
                                <div class="contact-form">
                                    <div
                                        class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                        <h4>Contact 1</h4>
                                        <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}">
                                        </div>
                                    </div>
                                    <form>
                                        <ul>
                                            <li>
                                                <label for="uname"><b>Enter name</b></label>
                                                <input type="text" placeholder="Martin Doe" name="uname" required="">
                                            </li>
                                            <li class="frequency-section time-zone">
                                                <label>Relationship</label>
                                                <select class="form-select">
                                                    <option>Relationship 1</option>
                                                    <option>Relationship 2</option>
                                                    <option>Relationship 3</option>
                                                </select>
                                            </li>
                                            <li>
                                                <label for="uname"><b>Email</b></label>
                                                <input type="email" name="Deadline" required="" placeholder="Email">
                                            </li>
                                            <li class="date-section">
                                                <label for="uname"><b>Birthday</b></label>
                                                <div class="birthday-dropdown">
                                                    <div class="month">
                                                        <select class="form-select">
                                                            <option>Month</option>
                                                            @foreach (config('global.month') as $key => $month)
                                                            <option value="{{ $key }}">
                                                                {{ $month }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="date">
                                                        <select class="form-select">
                                                            <option>Day</option>
                                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}">
                                                                {{ $i }}
                                                                </option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                    <div class="year">
                                                        <select class="form-select">
                                                            <option>Year</option>
                                                            @for ($i = 1988; $i <= 1998; $i++) <option value="{{ $i }}">
                                                                {{ $i }}
                                                                </option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="add-related-contact add-form-div">
                                <div class="related-contact blue-oblivion-color m-600"><i class="fa fa-plus"
                                        aria-hidden="true"></i> Add new related contact</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-section">
                    <div class="news-form-wrap">
                        <div class="add-client-form social-media">
                            <h3>Social media</h3>
                            <form>
                                <table>
                                    <tr>
                                        <th>Site</th>
                                        <th>Profile link</th>
                                    </tr>
                                    <tr>
                                        <td>Facebook</td>
                                        <td>For e.g.:<span>www.facebook.com/myprofile</span></td>
                                    </tr>
                                    <tr>
                                        <td>Instagram</td>
                                        <td>For e.g.:<span> www.instagram.com/myprofile</span></td>
                                    </tr>
                                    <tr>
                                        <td>Linkedin</td>
                                        <td>For e.g.:<span>www.linkedin.com/myprofile</span></td>
                                    </tr>
                                    <tr>
                                        <td>Twitter</td>
                                        <td>For e.g.:<span>www.twitter.com/myprofile</span></td>
                                    </tr>
                                    <tr>
                                        <td>Custom</td>
                                        <td><span>Enter a custom link</span></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="page-section" id="3">
                    <div class="news-form-wrap contact-padding-bottom">
                        <div class="add-client-form edit-popup ">
                            <h3>Important Dates</h3>
                            <div class="contact-form-details important-dates-form">
                                <div class="contact-form">
                                    <div
                                        class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                        <h4>Event/Date #1</h4>
                                        <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}">
                                        </div>
                                    </div>
                                    <form>
                                        <ul>
                                            <li>
                                                <label for="uname"><b>Name/Event</b></label>
                                                <input type="text" placeholder="Martin Doe" name="uname" required="">
                                            </li>
                                            <li class="frequency-section time-zone">
                                                <label>Frequency</label>
                                                <select class="form-select">
                                                    <option>Frequency 1</option>
                                                    <option>Frequency 2</option>
                                                    <option>Frequency 3</option>
                                                </select>
                                            </li>
                                            <li>
                                                <label for="uname"><b>Email</b></label>
                                                <input type="email" name="Deadline" required="" placeholder="Email">
                                            </li>
                                            <li class="date-section">
                                                <label for="uname"><b>Birthday</b></label>
                                                <div class="birthday-dropdown">
                                                    <div class="month">
                                                        <select class="form-select">
                                                            <option>Month</option>
                                                            @foreach (config('global.month') as $key => $month)
                                                            <option value="{{ $key }}">
                                                                {{ $month }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="date">
                                                        <select class="form-select">
                                                            <option>Day</option>
                                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i }}">
                                                                {{ $i }}
                                                                </option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                    <div class="year">
                                                        <select class="form-select">
                                                            <option>Year</option>
                                                            @for ($i = 1988; $i <= 1998; $i++) <option value="{{ $i }}">
                                                                {{ $i }}
                                                                </option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="add-important-dates add-form-div">
                                <div class="related-contact blue-oblivion-color m-600"><i class="fa fa-plus"
                                        aria-hidden="true"></i>Add new date</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-section" id="4">
                    <div class="news-form-wrap contact-padding-bottom">
                        <div class="add-client-form edit-popup ">
                            <h3>Important Numbers</h3>
                            <div class="contact-form-details important-numbers-form">
                                <div class="contact-form">
                                    <div
                                        class="contact-title  d-flex flex-wrap align-items-center justify-content-space-between">
                                        <h4>Reward/loyalty number</h4>
                                        <div class="icon"><img src="{{ asset('assets/images/garbage-can.png') }}">
                                        </div>
                                    </div>
                                    <form>
                                        <ul>
                                            <li>
                                                <label for="uname"><b>Number</b></label>
                                                <input type="number" placeholder="Enter number" name="uname"
                                                    required="">
                                            </li>
                                            <li class="frequency-section time-zone">
                                                <label>Rewards/loyalty program</label>
                                                <select class="form-select">
                                                    <option>Rewards/loyalty program 1</option>
                                                    <option>Rewards/loyalty program 2</option>
                                                    <option>Rewards/loyalty program 3</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="add-important-numbers add-form-div">
                                <div class="related-contact blue-oblivion-color m-600"><i class="fa fa-plus"
                                        aria-hidden="true"></i>Add new number</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-section" id="5">
                    <div class="news-form-wrap notes-form">
                        <div class="add-client-form edit-popup title-padding-bottom">
                            <h3>Notes</h3>
                            <form>
                                <ul>
                                    <li class="width-100">
                                        <textarea placeholder="Enter client notes here..."
                                            style="height:174px;"></textarea>
                                    </li>
                                    <li class="width-100">
                                        <label></label>
                                        <input type="text" required="" placeholder="Add tags separated by a comma">
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="page-section" id="6">
                    <div class="news-form-wrap">
                        <div class="add-client-form edit-popup title-padding-bottom food-and-allergies">
                            <h3>Food & Allergies</h3>
                            <div class="food-diet">
                                <div class="contact-title ">
                                    <h4>Diet</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis
                                        tempor purus, condimentum hac morbi sit.</p>
                                </div>
                                <div class="notes-form-checkbox d-flex flex-wrap ">
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 1</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 2</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 3</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 4</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 5</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 6</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 7</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 8</label>
                                    </div>
                                </div>
                            </div>
                            <div class="food-allergies-wrap">
                                <div class="contact-title ">
                                    <h4>Allergies</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis
                                        tempor purus, condimentum hac morbi sit.</p>
                                </div>
                                <div class="notes-form-checkbox d-flex flex-wrap ">
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 1</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 2</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 3</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 4</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 5</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 6</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 7</label>
                                    </div>
                                    <div class="summary-wrap position-relative">
                                        <input type="checkbox">
                                        <label>Option 8</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-section" id="7">
                    <div class="news-form-wrap like-deslike">
                        <div class="add-client-form edit-popup food-and-allergies">
                            <div class="like">
                                <h3>Like</h3>
                                <div class="food-diet">
                                    <div class="contact-title ">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis
                                            tempor purus, condimentum hac morbi sit.</p>
                                    </div>
                                    <form>
                                        <ul>
                                            <li class="width-100">
                                                <input type="text" required=""
                                                    placeholder="Enter items separated bt a comma">
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="dislikes">
                                <h3>Dislikes</h3>
                                <div class="food-diet">
                                    <div class="contact-title ">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis lobortis
                                            tempor purus, condimentum hac morbi sit.</p>
                                    </div>
                                    <form>
                                        <ul>
                                            <li class="width-100">
                                                <input type="text" required=""
                                                    placeholder="Enter items separated bt a comma">
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="upload-documents">
                    <a href="{{ route('clientDocuments') }}">Next: upload documents</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/clients/new-client-script.js') }}"></script>

</body>

</html>