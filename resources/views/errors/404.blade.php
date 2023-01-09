<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smartflyer CRM</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style type="text/css">
        .blank-container {
        width: 100%; 
        height: 80vh; 
        display: flex; 
        justify-content: center; 
        align-items: center;
    }
    .blank-title {
        font-family: 'Canela'; 
        font-size: 214px; 
        line-height: 214px; 
        color: #1D3C86; 
        letter-spacing: 0.03em; 
        font-weight: 300; 
        text-align: center;
    }
    .blank-sub-title {
        font-family: 'Canela'; 
        font-size: 24px; 
        line-height: 24px; 
        color: #000000; 
        letter-spacing: 0.05em; 
        font-weight: 300; 
        margin-top: 21px; 
        text-align: center;
    }
    h2.blank-sub-title {
    color: #000000;
    letter-spacing: 0.03em;
    font-size: 48px;
    text-align: center;
    line-height: normal;
    font-weight: 500;
}
    .button-container {
        margin-top: 120px; 
        width: 100%; 
        display: flex; 
        justify-content: center; 
        align-items: center;
    }
    .button-wrapper  a{
        width: 315px; 
        height: 30px; 
        border: 1px solid #1D3C86; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        padding-top: 5px;
    }
    .button-text {
        font-family: 'Trade Gothic LT Pro'; 
        color: #1D3C86; 
        font-weight: 700; 
        font-size: 14px; 
        line-height: 17px; 
        text-align: center; 
        letter-spacing: 0.12em;

    }
    @media (max-width:991px){
    .blank-title {
        font-size: 86px;
        line-height: normal;
    }

    h2.blank-sub-title {
        font-size: 26px;
    }
    .button-container {
        margin-top: 50px;
    }
    }
    </style>
</head>
<body>
    <div class="image" style="max-width: 50%; padding: 20px 40px 30px;">
        <img src="{{ asset('assets/images/logo-blue.png') }}">
    </div>
    <div class="blank-container">
        <div class="blank-wrapper">
            <h1 class="blank-title">
                404
            </h1>
            <h2 class="blank-sub-title">
                Page not found
            </h2>
            <h3 class="blank-sub-title">
                We can't seem to find the page you're looking for.
            </h3>
            <div class="button-container">
                <div class="button-wrapper">
                    <h4 class="button-text">
                        <a href="{{ route('dashboard') }}">RETURN TO HOME</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>