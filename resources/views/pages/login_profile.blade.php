<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="new-login-header">
        <div class="news-logo">
            <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/blue-logo.png') }}"></a>
            <div class="on-behalf d-flex flex-wrap">
                <h4>On behalf of</h4>
                <img src="{{ asset('assets/images/travel-company.png') }}">
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap login-new-profile align-items-center">
        <div class="left">
            <h2>Please complete your profile so we can start help you plan your perfect trip. </h2>
            <div class="content">
                <p> Our relationships allow us to provide priority waitlist, upgrades, and exclusive amenities that
                    simply aren’t available elsewhere. </p>
            </div>
            <div class="button-1">
                <a href="#">COMPLETE MY PROFILE</a>
            </div>
        </div>
        <div class="right">
            <div class="image">
                <img src="{{ asset('assets/images/login-image.png') }}">
            </div>
        </div>
    </div>
    <div class="login-new-profile footer-text">
        <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dashboard-script.js') }}"></script>

</body>

</html>
