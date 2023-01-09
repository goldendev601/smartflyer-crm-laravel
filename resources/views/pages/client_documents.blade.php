<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div class="my-profile-form upload-files-main-div">
        <div class="my-profile my-profile-wrap">
            <h3>Upload files for secure file sharing</h3>
            <p>Don;t worry, your files are secure with us. Our system allows us to store them privately and with an
                expiration date. </p>
        </div>
        <div class="upload-files">
            <div class="summary-wrap position-relative">
                <input type="checkbox">
                <label>Upload Passport</label>
            </div>
            <div class="summary-wrap position-relative">
                <input type="checkbox">
                <label>Upload Vaccination Card</label>
            </div>
        </div>
        <div class="file-upload position-relative">
            <div class="file-upload-wrap">
                <form>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </form>
            </div>
            <div class="file-upload-content">
                <div class="image">
                    <i class="bi bi-cloud-upload"></i>
                </div>
                <div class="content">Drag and drop files here or click to upload (You are allowed to upload any file
                    type and 5 files at a tume. Max file size 100MB)</div>
            </div>
        </div>
        <div class="upload-btns d-flex flex-wrap">
            <div class="edit-profile buttons"><a href="{{ route('newClient') }}">Back to edit profile</a></div>
            <div class="privacy-agreement buttons"><a href="{{ route('newClient') }}">Next: Sign Privacy agreement</a>
            </div>
        </div>
        <div class="upload-files-footer d-flex flex-wrap align-items-center">
            <div class="image">
                <img src="{{ asset('assets/images/celopay.png') }}">
            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/clients/clients/new-client-script.js') }}"></script>

</body>

</html>