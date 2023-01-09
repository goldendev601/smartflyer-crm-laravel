jQuery(document).ready(function ($) {
    /*  sidebar menu */

    jQuery(".mainmenu li:has(ul)").addClass("parent");

    jQuery("a.menulinks").click(function () {
        jQuery(this).next("ul").slideToggle(250);
        jQuery("body").toggleClass("mobile-open");
        jQuery(".mainmenu li.parent ul").slideUp(250);
        jQuery("a.child-triggerm").removeClass("child-open");
        return false;
    });

    jQuery(".mainmenu li.parent > a").after(
        '<a class="child-triggerm"><span></span></a>'
    );

    jQuery(".mainmenu a.child-triggerm").click(function () {
        jQuery(this)
            .parent()
            .siblings("li")
            .find("a.child-triggerm")
            .removeClass("child-open");
        jQuery(this).parent().siblings("li").find("ul").slideUp(250);
        jQuery(this).next("ul").slideToggle(250);
        jQuery(this).toggleClass("child-open");
        return;
    });

    /* Dashboard search toggle */
    jQuery(document).on("click", ".dashboard-time li.clock", function () {
        jQuery(".clock-toggle-content").slideToggle();
    });

    /* Dashboard logout toggle */
    jQuery(document).on(
        "click",
        ".dashboard-menu-sidebar > .inner ",
        function () {
            jQuery(".dashboard-logout").show();
        }
    );

    jQuery(document).mouseup(function (e) {
        var popup = jQuery(".dashboard-logout");
        if (!popup.is(e.target) && popup.has(e.target).length == 0) {
            popup.hide();
        }
    });

    jQuery(document).on("click", ".chat-div-open", function () {
        jQuery(".chat-popup").show();
    });

    jQuery(document).mouseup(function (e) {
        var popup = jQuery(".chat-popup");
        if (!popup.is(e.target) && popup.has(e.target).length == 0) {
            popup.hide();
        }
    });

    /* Search Trip View */
    jQuery(document).on("click", ".trip-view-search > .search", function () {
        jQuery(".trip-view-search .search-box").toggle();
        jQuery(".trip-view-search input[type='text']").focus();
    });

    /* Popup View Task */
    jQuery(".trip-details-tasks").hide();

    jQuery(".share-icon-wrap").on("click", function () {
        jQuery(".share-popup").toggle();
    });

    jQuery(".view-task-btn").on("click", function () {
        jQuery(".trip-details-tasks").show();
    });

    jQuery(".view-profile .close").on("click", function () {
        jQuery(".view-profile").hide();
    });

    jQuery(document).mouseup(function (e) {
        var popup = jQuery(".trip-details-tasks");
        if (!popup.is(e.target) && popup.has(e.target).length == 0) {
            popup.hide();
        }
    });

    // Outer Tabs
    /*  Clients tab */
    jQuery(".clients-tab-section .tab_content").hide();
    jQuery(".clients-tab-section .tab_content:first").show();

    /* if in tab mode */
    jQuery(".clients-tab-section ul.outer-tabs li").click(function () {
        jQuery(".tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery(".clients-tab-section ul.outer-tabs li").removeClass("active");
        jQuery(this).addClass("active");

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(
            ".clients-tab-section .tab_drawer_heading[rel^='" + activeTab + "']"
        ).addClass("d_active");
    });
    /* if in drawer mode */
    jQuery(".clients-tab-section .tab_drawer_heading").click(function () {
        jQuery(".clients-tab-section .tab_content").hide();
        var d_activeTab = jQuery(this).attr("rel");
        jQuery("#" + d_activeTab).fadeIn();

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(this).addClass("d_active");

        jQuery(".clients-tab-section ul.outer-tabs li").removeClass("active");
        jQuery(
            ".clients-tab-section ul.outer-tabs li[rel^='" + d_activeTab + "']"
        ).addClass("active");
    });

    jQuery(".clients-tab-section ul.outer-tabs li").last().addClass("tab_last");
    /* end */

    // Outer Tabs
    /*  Clients tab */

    /* if in tab mode */
    jQuery(".clients-tab-section ul.all-clinet-tab li").click(function () {
        jQuery(".tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery(".clients-tab-section ul.all-clinet-tab li").removeClass(
            "active"
        );
        jQuery(this).addClass("active");

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(
            ".clients-tab-section .tab_drawer_heading[rel^='" + activeTab + "']"
        ).addClass("d_active");
    });
    /* if in drawer mode */
    jQuery(".clients-tab-section .tab_drawer_heading").click(function () {
        jQuery(".clients-tab-section .tab_content").hide();
        var d_activeTab = jQuery(this).attr("rel");
        jQuery("#" + d_activeTab).fadeIn();

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(this).addClass("d_active");

        jQuery(".clients-tab-section ul.outer-tabs li").removeClass("active");
        jQuery(
            ".clients-tab-section ul.outer-tabs li[rel^='" + d_activeTab + "']"
        ).addClass("active");
    });

    jQuery(".clients-tab-section ul.outer-tabs li").last().addClass("tab_last");

    //  Inner tabs
    /*  Partners tab */
    jQuery(".clients-tab-section .tab_content").hide();
    jQuery(".clients-tab-section .tab_content:first").show();
    jQuery(".partner-view-tabbing .tab_container .tab_content:first").show();

    /* if in tab mode */
    jQuery(".clients-tab-section ul.partners-inner-tabs li").click(function () {
        jQuery(".partner-view-tabbing")
            .children(".tab_container")
            .find(".tab_content")
            .hide();
        var activeTab = jQuery(this).attr("rel");

        jQuery("#" + activeTab).fadeIn();
        jQuery("ul.partners-inner-tabs li").removeClass("active");
        jQuery("." + activeTab).addClass("active");
    });

    // tabbed content
    jQuery("#edit-popup .tab_content").hide();
    jQuery("#edit-popup .tab_container .tab_content:nth-child(1)").show();

    /* if in tab mode */
    jQuery("#edit-popup ul.tabs li").click(function () {
        jQuery("#edit-popup .tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery("#edit-popup ul.tabs li").removeClass("active");
        jQuery(this).addClass("active");

        jQuery("#edit-popup .tab_drawer_heading").removeClass("d_active");
        jQuery(
            "#edit-popup .tab_drawer_heading[rel^='" + activeTab + "']"
        ).addClass("d_active");
    });
    /* if in drawer mode */
    jQuery("#edit-popup .tab_drawer_heading").click(function () {
        jQuery("#edit-popup .tab_content").hide();
        var d_activeTab = jQuery(this).attr("rel");
        jQuery("#" + d_activeTab).fadeIn();

        jQuery("#edit-popup .tab_drawer_heading").removeClass("d_active");
        jQuery(this).addClass("d_active");

        jQuery("#edit-popup ul.tabs li").removeClass("active");
        jQuery("#edit-popup ul.tabs li[rel^='" + d_activeTab + "']").addClass(
            "active"
        );
    });

    /* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
    jQuery("#edit-popup ul.tabs li").last().addClass("tab_last");

    if (jQuery(".form-select").length) {
        jQuery(".form-select").select2({
            // placeholder: "Select a programming language",
            allowClear: true,
        });
    }

    /*  --------------------------------------------- */

    /* client-detail-view */

    /* if in tab mode */
    jQuery(".clients-tab-section ul.client-detail-view-tab li").click(
        function () {
            jQuery(".tab_content").hide();
            var activeTab = jQuery(this).attr("rel");
            jQuery("#" + activeTab).fadeIn();

            jQuery(
                ".clients-tab-section ul.client-detail-view-tab li"
            ).removeClass("active");
            jQuery(this).addClass("active");

            jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
                "d_active"
            );
            jQuery(
                ".clients-tab-section .tab_drawer_heading[rel^='" +
                    activeTab +
                    "']"
            ).addClass("d_active");
        }
    );
    /* if in drawer mode */
    jQuery(".clients-tab-section .tab_drawer_heading").click(function () {
        jQuery(".clients-tab-section .tab_content").hide();
        var d_activeTab = jQuery(this).attr("rel");
        jQuery("#" + d_activeTab).fadeIn();

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(this).addClass("d_active");

        jQuery(".clients-tab-section ul.client-detail-view-tab li").removeClass(
            "active"
        );
        jQuery(
            ".clients-tab-section ul.client-detail-view-tab li[rel^='" +
                d_activeTab +
                "']"
        ).addClass("active");
    });

    jQuery(".clients-tab-section ul.client-detail-view-tab li")
        .last()
        .addClass("tab_last");

    /*  -------------------- end -------------------- */

    /*  -----------------------start trip-tabs  ---------------------- */

    /* trips */

    /* if in tab mode */
    jQuery(".clients-tab-section ul.trip-tabs li").click(function () {
        jQuery(".tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery(".clients-tab-section ul.trip-tabs li").removeClass("active");
        jQuery(this).addClass("active");

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(
            ".clients-tab-section .tab_drawer_heading[rel^='" + activeTab + "']"
        ).addClass("d_active");
    });
    /* if in drawer mode */
    jQuery(".clients-tab-section .tab_drawer_heading").click(function () {
        jQuery(".clients-tab-section .tab_content").hide();
        var d_activeTab = jQuery(this).attr("rel");
        jQuery("#" + d_activeTab).fadeIn();

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(this).addClass("d_active");

        jQuery(".clients-tab-section ul.trip-tabs li").removeClass("active");
        jQuery(
            ".clients-tab-section ul.trip-tabs li[rel^='" + d_activeTab + "']"
        ).addClass("active");
    });

    jQuery(".clients-tab-section ul.trip-tabs li").last().addClass("tab_last");

    /*  -------------------- end -------------------- */

    /*  -----------------------start to-do-tabs  ---------------------- */

    /* trips */

    /* if in tab mode */
    jQuery(".clients-tab-section ul.to-do-tab li").click(function () {
        jQuery(".tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery(".clients-tab-section ul.to-do-tab li").removeClass("active");
        jQuery(this).addClass("active");

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(
            ".clients-tab-section .tab_drawer_heading[rel^='" + activeTab + "']"
        ).addClass("d_active");
    });
    /* if in drawer mode */
    jQuery(".clients-tab-section .tab_drawer_heading").click(function () {
        jQuery(".clients-tab-section .tab_content").hide();
        var d_activeTab = jQuery(this).attr("rel");
        jQuery("#" + d_activeTab).fadeIn();

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(this).addClass("d_active");

        jQuery(".clients-tab-section ul.to-do-tab li").removeClass("active");
        jQuery(
            ".clients-tab-section ul.to-do-tab li[rel^='" + d_activeTab + "']"
        ).addClass("active");
    });

    jQuery(".clients-tab-section ul.to-do-tab li").last().addClass("tab_last");

    /*  -------------------- end -------------------- */

    /*  -----------------------start agents-tabs  ---------------------- */

    /* trips */

    /* if in tab mode */
    jQuery(".clients-tab-section ul.agents-tabs li").click(function () {
        jQuery(".tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery(".clients-tab-section ul.agents-tabs li").removeClass("active");
        jQuery(this).addClass("active");

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(
            ".clients-tab-section .tab_drawer_heading[rel^='" + activeTab + "']"
        ).addClass("d_active");
    });
    /* if in drawer mode */
    jQuery(".clients-tab-section .tab_drawer_heading").click(function () {
        jQuery(".clients-tab-section .tab_content").hide();
        var d_activeTab = jQuery(this).attr("rel");
        jQuery("#" + d_activeTab).fadeIn();

        jQuery(".clients-tab-section .tab_drawer_heading").removeClass(
            "d_active"
        );
        jQuery(this).addClass("d_active");

        jQuery(".clients-tab-section ul.agents-tabs li").removeClass("active");
        jQuery(
            ".clients-tab-section ul.agents-tabs li[rel^='" + d_activeTab + "']"
        ).addClass("active");
    });

    jQuery(".clients-tab-section ul.agents-tabs li")
        .last()
        .addClass("tab_last");

    /*  -------------------- end -------------------- */

    // new clinet popup
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

    jQuery(".faq_accordion .accordion-container .set:first-child .faq-title").addClass('active');
    jQuery(".faq_accordion .accordion-container .set:first-child .content").show();

    jQuery(".faq_accordion .set > a").on("click", function() {
        if (jQuery(this).hasClass("active")) {
            jQuery(this).removeClass("active");
            jQuery(this)
                .siblings(".content")
                .slideUp(200);
            jQuery(".faq_accordion .set > a i")
                .removeClass("fa-angle-up")
                .addClass("fa-angle-down");
        } else {
            jQuery(".faq_accordion .set > a i")
                .removeClass("fa-angle-up")
                .addClass("fa-angle-down");
            jQuery(this)
                .find("i")
                .removeClass("fa-angle-down")
                .addClass("fa-angle-up");
            jQuery(".faq_accordion .set > a").removeClass("active");
            jQuery(this).addClass("active");
            jQuery(".content").slideUp(200);
            jQuery(this)
                .siblings(".content")
                .slideDown(200);
        }
        return false;
    });

});
/*jQuery(window).scroll(function () {
	var scrollDistance = jQuery(window).scrollTop();
	// Assign active class to nav links while scolling
	jQuery('#new-client-popup .page-section').each(function (i) {
		if (jQuery(this).position().top <= scrollDistance) {
			jQuery('.navigation a.active').removeClass('active');
			jQuery('.navigation a').eq(i).addClass('active');
		}
	});
}).scroll();*/

/* mobile tabs */

/*jQuery(document).ready(function ($) {
	jQuery('.date-numbers-client-detail .clients-tab-section .clients-tab ul.tabs li').click(function() {

		if (jQuery(this).is(':last-child')) {
			jQuery('.next').hide();
		} else {
			jQuery('.next').show();
		}

		var position = jQuery(this).position();
		var corresponding = jQuery(this).data("id");

		scroll = jQuery('.date-numbers-client-detail .clients-tab-section .clients-tab ul.tabs').scrollLeft();
		jQuery('.date-numbers-client-detail .clients-tab-section .clients-tab ul.tabs').animate({
			'scrollLeft': scroll + position.left - 30
		}, 200);

		// hide all content divs
		jQuery('.tabContent div').hide();

		// show content of corresponding tab
		jQuery('div.' + corresponding).toggle();

		// remove active class from currently not active tabs
		jQuery('.tabs li').removeClass('active');

		// add active class to clicked tab
		jQuery(this).addClass('active');
	});

	jQuery('div a').click(function(e) {
		e.preventDefault();
		jQuery('li.active').next('li').trigger('click');
	});
});*/
