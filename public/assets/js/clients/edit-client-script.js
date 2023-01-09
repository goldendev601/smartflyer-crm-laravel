function fixSelect2ClosingModalIssue() {
    // $('.select2-hidden-accessible').select2('destroy');
    //
    // $('.pop-select2').each(function (i, obj) {
    //     console.log(obj);
    //     if ($(obj).data('select2'))
    //     {
    //         $(obj).select2('destroy');
    //     }
    // });
    // $('.pop-select2').select2();
    $(".pop-select2").on("select2:select", function (e) {
        setTimeout(function () {
            $(e.target)
                .parents(".main-edit-window")
                .css("display", "inline-block");
        }, 200);
    });
}

jQuery(document).ready(function ($) {

    jQuery(".related-contacts-openEditClientFromView-select").select2();
    jQuery(".important-dates-openEditClientFromView-select").select2();
    jQuery(".openEditClientFromView-select").select2();

    jQuery(".related-contacts-form-select").select2();
    jQuery(".important-dates-form-select").select2();

    jQuery("#clientTags").tagsinput({
        confirmKeys: [44],
    });

    jQuery(".add-related-contact").click(function () {
        let relatedContactsForm = jQuery(".related-contacts-form .contact-form")
            .first()
            .clone(true);
        relatedContactsForm.find(':input').each(function () {
            $(this).val('');
        });
        relatedContactsForm.appendTo(
            ".contact-padding-bottom .add-client-form .related-contacts-form"
        );
        $(this).parent().children().children().children().children().show();

        // find all select2 and destroy them
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
        totalContactForm.forEach(function (elm, key) {

            elm.setAttribute("id", "contact-form" + newId);
            $(`#contact-form${newId} .related-contacts-form-number`).text(
                `${newId}`
            );
            if (elm.querySelector('.error_rc_email_0')) {
                elm.querySelector('.error_rc_email_0').setAttribute("class", "error error_rc_email_" + key)
            }
            if (elm.querySelector('.error_rc_name_0')) {
                elm.querySelector('.error_rc_name_0').setAttribute("class", "error error_rc_name_" + key)
            }
            if (elm.querySelector('.error_rc_relationship_0')) {
                elm.querySelector('.error_rc_relationship_0').setAttribute("class", "error error_rc_relationship_" + key)
            }
            if (elm.querySelector('.error_rc_dobM_0')) {
                elm.querySelector('.error_rc_dobM_0').setAttribute("class", "error error_rc_dobM_" + key)
            }
            if (elm.querySelector('.error_rc_dobD')) {
                elm.querySelector('.error_rc_dobD_0').setAttribute("class", "error error_rc_dobD_" + key)
            }
            if (elm.querySelector('.error_rc_dobY')) {
                elm.querySelector('.error_rc_dobY_0').setAttribute("class", "error error_rc_dobY_" + key)
            }
            newId++;
        });

        setTimeout(function () {
            fixSelect2ClosingModalIssue();
        }, 500);

        return true;
    });

    /* Important Numbers form  delete start */
    jQuery(".add-important-numbers").click(function () {
        let importantNumbers = jQuery(".important-numbers-form .contact-form")
            .first()
            .clone(true);
        importantNumbers.find(':input').each(function () {
            $(this).val('');
        });
        importantNumbers.appendTo(
            ".contact-padding-bottom .add-client-form .important-numbers-form"
        );
        $(this).parent().children().children().children().children().show();
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

        totalContactForm.forEach(function (elm, key) {
            elm.setAttribute("id", "important-numbers-form" + newId);
            $(
                `#important-numbers-form${newId} .important-numbers-form-number`
            ).text(`${newId}`);
            if (elm.querySelector('.error_im_loyaltyProgram_0')) {
                elm.querySelector('.error_im_loyaltyProgram_0').setAttribute("class", "error error_im_loyaltyProgram_" + key)
            }
            if (elm.querySelector('.error_im_number_0')) {
                elm.querySelector('.error_im_number_0').setAttribute("class", "error error_im_number_" + key)
            }
            newId++;
        });

        setTimeout(function () {
            fixSelect2ClosingModalIssue();
        }, 500);
        return true;
    });

    /* Important Dates form  delete start */
    jQuery(".add-important-dates").click(function () {
        let importantDates = jQuery(".important-dates-form .contact-form")
            .first()
            .clone(true);
        importantDates.find('[type=text]').each(function () {
            $(this).val('');
        });
        importantDates.find('select').each(function () {
            $(this).val("").trigger( "change" );
        });
        importantDates.appendTo(
            ".contact-padding-bottom .add-client-form .important-dates-form"
        );
        $(this).parent().children().children().children().children().show();

        $(".important-dates-form .contact-form")
            .find("select")
            .each(function (index) {
                $(this).removeAttr("data-select2-id").select2();
                $(this).last().next().next().remove();
            });
        var newId = 1;
        var totalContactForm = document.querySelectorAll(
            ".important-dates-form .contact-form"
        );

        totalContactForm.forEach(function (elm, key) {
            elm.setAttribute("id", "important-dates-form" + newId);
            $(
                `#important-dates-form${newId} .important-dates-form-number`
            ).text(`${newId}`);
            if (elm.querySelector('.error_imd_eventName_0')) {
                elm.querySelector('.error_imd_eventName_0').setAttribute("class", "error error_imd_eventName_" + key)
            }
            if (elm.querySelector('.error_impd_frequency_0')) {
                elm.querySelector('.error_impd_frequency_0').setAttribute("class", "error error_impd_frequency_" + key)
            }
            if (elm.querySelector('.error_impd_notes_0')) {
                elm.querySelector('.error_impd_notes_0').setAttribute("class", "error error_impd_notes_" + key)
            }
            if (elm.querySelector('.error_impd_dobM_0')) {
                elm.querySelector('.error_impd_dobM_0').setAttribute("class", "error error_impd_dobM_" + key)
            }
            if (elm.querySelector('.error_impd_dobD_0')) {
                elm.querySelector('.error_impd_dobD_0').setAttribute("class", "error error_impd_dobD_" + key)
            }
            if (elm.querySelector('.error_impd_dobY_0')) {
                elm.querySelector('.error_impd_dobY_0').setAttribute("class", "error error_impd_dobY_" + key)
            }
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

    // function removeContactform(e) {
    //     if ($(".related-contacts-form .contact-form").length > 1) {
    //         e.parent().parent().parent().remove();
    //     }
    // }

    $(document).on('click', '.remove_contact', function () {
        if ($(".related-contacts-form .contact-form").length > 1) {
            $(this).parent().parent().parent().remove();
        }
    })
    // function removeImportDateform(e) {
    //     if ($(".important-dates-form .contact-form").length > 1) {
    //         e.parent().parent().parent().remove();
    //     }
    // }
    $(document).on('click', '.remove_import_date_form', function () {
        if ($(".important-dates-form .contact-form").length > 1) {
            $(this).parent().parent().parent().remove();
        }
    })
    // function removeImportNumberform(e) {
    //     if ($(".important-numbers-form .contact-form").length > 1) {
    //         e.parent().parent().parent().remove();
    //     }
    // }
    $(document).on('click', '.remove_import_number_form', function () {
        if ($(".important-numbers-form .contact-form").length > 1) {
            $(this).parent().parent().parent().remove();
        }
    })

    // jQuery("#new-client-popup").on("scroll", onScroll);
    jQuery(".news-form-section nav a.navigation__link").on(
        "click",
        function (e) {
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
        }
    );

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

    // jQuery(document).ready(function ($) {
    //     $("#totalFilesDiv").hide();
    //     $("#uploadedFileList").html("<h3>No documentation attached</h3>");
    //     $("#OpenImgUpload").click(function () {
    //         $("#imgupload").trigger("click");
    //     });
    // });

    function OnSelectFiles() {
        console.log('333');
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

        var uploadProfilePicBox = document.querySelector(
            ".uploadProfilePic .box"
        );
        let uploadField = uploadProfilePicBox.querySelector(".image-upload");

        uploadField.addEventListener("change", getFile);
        const dataTransfer = new DataTransfer();

        function getFile(e) {
            let file = e.target.files[0];
            if (file) {
                checkType(file);
                dataTransfer.items.remove(0);
                dataTransfer.items.add(file);
            }
            e.target.files = dataTransfer.files;

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

    $("#openEditClientFrom").on("click", function () {
        $.fancybox.open($("#openEditClientFromView"));
        $("#openEditClientFromView").css('display', 'inline-block ')
        return true;
    });

    fixSelect2ClosingModalIssue();
});
