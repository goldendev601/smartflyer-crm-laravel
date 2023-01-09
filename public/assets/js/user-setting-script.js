jQuery(document).ready(function ($) {
    $("#select_day").selectize({
        sortField: {
            field: "text",
            direction: "asc",
        },
    });
    $("#select_month").selectize({
        sortField: {
            field: "text",
            direction: "asc",
        },
    });
    $("#select_year").selectize({
        sortField: {
            field: "text",
            direction: "asc",
        },
    });

    $("#openChangePasswordFrom").on("click", function () {
        $.fancybox.open($("#openChangePasswordFromView"));
        return true;
    });
    // Current password
    const togglePasswordCurrentPass = document.querySelector(
        "#togglePasswordCurrentPass"
    );
    const current_password = document.querySelector("#current_password");
    togglePasswordCurrentPass.addEventListener("click", function () {
        const type =
            current_password.getAttribute("type") === "password"
                ? "text"
                : "password";
        current_password.setAttribute("type", type);
        this.classList.toggle("bi-eye");
    });
    // New password
    const togglePasswordNewPass = document.querySelector(
        "#togglePasswordNewPass"
    );
    const new_password = document.querySelector("#new_password");
    togglePasswordNewPass.addEventListener("click", function () {
        const type =
            new_password.getAttribute("type") === "password"
                ? "text"
                : "password";
        new_password.setAttribute("type", type);
        this.classList.toggle("bi-eye");
    });

    // Confirm New password
    const togglePasswordConfirnNewPass = document.querySelector(
        "#togglePasswordConfirnNewPass"
    );
    const confirm_new_password = document.querySelector(
        "#confirm_new_password"
    );
    togglePasswordConfirnNewPass.addEventListener("click", function () {
        const type =
            confirm_new_password.getAttribute("type") === "password"
                ? "text"
                : "password";
        confirm_new_password.setAttribute("type", type);
        this.classList.toggle("bi-eye");
    });
});

function OpenFileBrowser() {
    $(".file-upload-input").trigger("click");
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var thumb = $(".file-upload-image");
        var reader = new FileReader();

        reader.onload = function (e) {
            // $(".file-upload-image").attr("src", e.target.result);
            thumb.addClass("preview-no-default");
            thumb.css("background-image", "url(" + e.target.result + ")");
            thumb.removeClass("preview-has-default");
            $(".remove-profile-photo").val("no");
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function removeUpload() {
    $(".file-upload-image")
        .removeAttr("style")
        .removeClass("preview-no-default")
        .addClass("preview-has-default");
    $(".remove-profile-photo").val("yes");
}
