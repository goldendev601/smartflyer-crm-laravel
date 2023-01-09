jQuery(document).ready(function ($) {
    jQuery(".related-contacts-form-select").select2();
    jQuery(".important-dates-form-select").select2();

    jQuery("#clientTags").tagsinput({
        confirmKeys: [44],
    });

    jQuery(".add-related-contact").click(function () {
        jQuery(".related-contacts-form .contact-form")
            .first()
            .find("input:text")
            .val("")
            .end()
            .clone(true)
            .appendTo(
                ".contact-padding-bottom .add-client-form .related-contacts-form"
            );
        $(this).parent().children().children().children().children().show();
        //find all select2 and destroy them
        $(".related-contacts-form .contact-form")
            .find("select")
            .each(function (index) {
                $(this).removeAttr("data-select2-id").select2();
                $(this).last().next().next().remove();
            });

        var newId = 1;
        var totalContactForm = document.querySelectorAll(
            ".related-contacts-form .contact-form"
        );
        totalContactForm.forEach(function (elm) {
            elm.setAttribute("id", "contact-form" + newId);
            $(`#contact-form${newId} .related-contacts-form-number`).text(
                `${newId}`
            );
            newId++;
        });

        return true;
    });

    /* Important Dates form  delete start */
    jQuery(".add-important-dates").click(function () {
        jQuery(".important-dates-form .contact-form")
            .first()
            .clone(true)
            .find("input:text")
            .val("")
            .end()
            .appendTo(
                ".contact-padding-bottom .add-client-form .important-dates-form"
            );

        var newId = 1;
        var totalContactForm = document.querySelectorAll(
            ".important-dates-form .contact-form"
        );

        totalContactForm.forEach(function (elm) {
            elm.setAttribute("id", "important-dates-form" + newId);
            $(
                `#important-dates-form${newId} .important-dates-form-number`
            ).text(`${newId}`);
            newId++;
        });
        return false;
    });

    /* Important Numbers form  delete start */
    jQuery(".add-important-numbers").click(function () {
        jQuery(".important-numbers-form .contact-form")
            .first()
            .clone(true)
            .find("input:text")
            .val("")
            .end()
            .appendTo(
                ".contact-padding-bottom .add-client-form .important-numbers-form"
            );

        //find all select2 and destroy them
        $(".important-numbers-form .contact-form")
            .find("select")
            .each(function (index) {
                $(this).removeAttr("data-select2-id").select2();
                $(this).last().next().next().remove();
            });

        var newId = 1;
        var totalContactForm = document.querySelectorAll(
            ".important-numbers-form .contact-form"
        );

        totalContactForm.forEach(function (elm) {
            elm.setAttribute("id", "important-numbers-form" + newId);
            $(
                `#important-numbers-form${newId} .important-numbers-form-number`
            ).text(`${newId}`);
            newId++;
        });
        return false;
    });

    $(".new-client-popup-one").on("click", function () {
        $("#new-client-popup").show();
        $("body").addClass("new-client-popup-open");
    });

    jQuery("#new-client-popup .close").click(function () {
        jQuery("#new-client-popup").hide();
        $("body").removeClass("new-client-popup-open");
    });
});

function removeContactform(e) {
    if ($(".related-contacts-form .contact-form").length > 1) {
        e.parent().parent().parent().remove();
    }
}

function removeImportDateform(e) {
    if ($(".important-dates-form .contact-form").length > 1) {
        e.parent().parent().parent().remove();
    }
}

function removeImportNumberform(e) {
    if ($(".important-numbers-form .contact-form").length > 1) {
        e.parent().parent().parent().remove();
    }
}

// jQuery("#new-client-popup").on("scroll", onScroll);
jQuery(".news-form-section nav a.navigation__link").on("click", function (e) {
    //smoothscroll
    e.preventDefault();
    var target = this.hash,
        menu = target;
    $target = $(target);
    $("#new-client-popup")
        .stop()
        .animate(
            {
                scrollTop: $target.offset().top + 2,
            },
            900,
            function () {
                window.location.hash = target;
            }
        );
});

jQuery("#new-client-popup")
    .scroll(function () {
        var scrollPos = jQuery("#new-client-popup").scrollTop();
        // Assign active class to nav links while scolling
        if ($("#new-client-popup").is(":visible")) {
            $("#mainNav a").each(function (i) {
                var currLink = $(this);
                var refEl = $(currLink.attr("href"));
                if (
                    refEl.position().top <= scrollPos &&
                    refEl.position().top + refEl.height() > scrollPos
                ) {
                    jQuery(".navigation a.active").removeClass("active");
                    jQuery(".navigation a").eq(i).addClass("active");
                }
            });
        }
    })
    .scroll();

jQuery(document).ready(function ($) {
    $("#totalFilesDiv").hide();
    $("#uploadedFileList").html("<h3>No documentation attached</h3>");
    $("#OpenImgUpload").click(function () {
        $("#imgupload").trigger("click");
    });
});
function OnSelectFiles() {
    var input = $("#imgupload");
    var list = "";
    for (var i = 0; i < input[0].files.length; ++i) {
        let extension = input[0].files.item(i).name.split(".").pop();
        list += `<li><span>${extension}</span> <div class="document-name"> ${
            input[0].files.item(i).name
        } </div> </li>`;
    }
    $("#totalFiles").text(`(${input[0].files.length})`);
    $("#totalFilesDiv").show();
    $("#uploadedFileList").html("<ul>" + list + "</ul>");
}

function initImageUpload() {
    var uploadProfilePicBox = document.querySelector(".uploadProfilePic .box");
    let uploadField = uploadProfilePicBox.querySelector(".image-upload");

    uploadField.addEventListener("change", getFile);

    function getFile(e) {
        let file = e.currentTarget.files[0];
        checkType(file);
    }

    function previewImage(file) {
        let thumb = uploadProfilePicBox.querySelector(".js-image-preview"),
            reader = new FileReader();

        reader.onload = function () {
            thumb.style.backgroundImage = "url(" + reader.result + ")";
        };
        reader.readAsDataURL(file);
        thumb.className += " js--no-default";
    }

    function checkType(file) {
        let imageType = /image.*/;
        if (!file.type.match(imageType)) {
            alert("File is not an image");
            throw "File is not an image";
        } else if (!file) {
            console.log("No image selected");
            throw "No image selected";
        } else {
            previewImage(file);
        }
    }
}
initImageUpload();
