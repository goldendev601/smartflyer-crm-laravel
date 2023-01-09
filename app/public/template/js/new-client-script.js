jQuery(document).ready(function ($) {
    if (jQuery(".form-select").length) {
        jQuery(".form-select").select2({
            // placeholder: "Select a programming language",
            allowClear: true,
        });
    }

    jQuery(".news-form-section nav a.navigation__link").on(
        "click",
        function (e) {
            var href = jQuery(this).attr("href");
            jQuery("html, body").animate(
                {
                    scrollTop: $(href).offset().top,
                },
                "900"
            );

            e.preventDefault();
        }
    );

    /* contact form  delete start */
    jQuery(".related-contacts-form .contact-title .icon").click(function () {
        jQuery(".related-contacts-form .contact-form").hide();
    });

    jQuery(".add-related-contact").click(function () {
        jQuery(".related-contacts-form .contact-form")
            .clone()
            .appendTo(
                ".contact-padding-bottom .add-client-form .related-contacts-form"
            );
        return false;
    });

    /* Important Dates form  delete start */

    jQuery(".add-important-dates").click(function () {
        jQuery(".important-dates-form .contact-form")
            .clone()
            .appendTo(
                ".contact-padding-bottom .add-client-form .important-dates-form"
            );
        return false;
    });

    jQuery(".important-dates-form .contact-title .icon").click(function () {
        jQuery(".important-dates-form .contact-form").hide();
        return false;
    });

    /* Important Numbers form  delete start */

    jQuery(".add-important-numbers").click(function () {
        jQuery(".important-numbers-form .contact-form")
            .clone()
            .appendTo(
                ".contact-padding-bottom .add-client-form .important-numbers-form"
            );
        return false;
    });

    jQuery(".important-numbers-form .contact-title .icon").click(function () {
        jQuery(".important-numbers-form .contact-form").hide();
        return false;
    });

    jQuery("#new-client-popup").hide();
    jQuery(".new-client-popup-one").click(function () {
        jQuery("#new-client-popup").show();
    });

    jQuery("#new-client-popup .close").click(function () {
        jQuery("#new-client-popup").hide();
    });
});

jQuery(window)
    .scroll(function () {
        var scrollDistance = jQuery(window).scrollTop();
        // Assign active class to nav links while scolling
        jQuery(".page-section").each(function (i) {
            if (jQuery(this).position().top <= scrollDistance) {
                jQuery(".navigation a.active").removeClass("active");
                jQuery(".navigation a").eq(i).addClass("active");
            }
        });
    })
    .scroll();
