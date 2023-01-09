<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client Review</title>
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
    <div class="my-profile my-profile-wrap review-title">
        <h3>Please review the documents below</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
    </div>
    <div class="agreement-doc">
        <div class="top">
            <div class="title">
                <h3>SmartFlyer agreement.doc</h3>
            </div>
            <ul>
                <li><a href="javascript:void(0)" id="zoomOut"><i class="bi bi-zoom-out"></i></a></li>
                <li><a href="javascript:void(0)" id="zoomIn"><i class="bi bi-zoom-in"></i></a></li>
                <li><a href="javascript:void(0)" id="download_pdf" onclick="CreatePDFfromHTML()"><i
                            class="bi bi-download"></i></a></li>
                <li><a href="javascript:void(0)" onclick="window.print();"><i class="bi bi-printer"></i></a></li>
            </ul>
        </div>
        <div class="middle-content">
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="signature-form">
                    <form>
                        <ul>
                            <li>
                                <label for="fname">Date</label>
                                <input type="date" name="bday" required pattern="\d{4}-\d{2}-\d{2}">
                            </li>
                            <li>
                                <label for="fname">Name</label>
                                <input type="text" name="name" required>
                            </li>
                            <li>
                                <label>signature </label>
                                <input type="text" name="signature ">
                            </li>
                        </ul>
                    </form>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="review-logo">
                    <img src="{{ asset('assets/images/blue-logo.png') }}">
                </div>
            </div>
            <div id="editor"></div>
        </div>
        <div class="bottom">
            <div class="image">
                <img src="{{ asset('assets/images/docusign.png') }}">
            </div>
        </div>
    </div>
    <div class="footer-review">
        <a href="#">Next: Sign Privacy agreement</a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/clients/new-client-script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    <script>
    $(document).ready(function() {
        var currentZoom = 1.0;
        $('#zoomIn').click(function() {
            $('.content').animate({
                'zoom': currentZoom += .1
            }, 'slow');
        });

        $('#zoomOut').click(function() {
            $('.content').animate({
                'zoom': currentZoom -= .1
            }, 'slow');
        });
    });

    function CreatePDFfromHTML() {
        var HTML_Width = $(".content").width();
        var HTML_Height = $(".content").height();
        var top_left_margin = 15;
        var PDF_Width = HTML_Width + (top_left_margin * 2);
        var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
        var canvas_image_width = HTML_Width;
        var canvas_image_height = HTML_Height;

        var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

        html2canvas($(".content")[0]).then(function(canvas) {
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
            pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width,
                canvas_image_height);
            for (var i = 1; i <= totalPDFPages; i++) {
                pdf.addPage(PDF_Width, PDF_Height);
                pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin *
                    4), canvas_image_width, canvas_image_height);
            }
            pdf.save("SmartFlyer-agreement.pdf");
        });
    }
    </script>
</body>

</html>