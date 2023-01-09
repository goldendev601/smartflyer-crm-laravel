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

    /* Search Trip View */
    jQuery(document).on("click", ".trip-view-search .search", function () {
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

    jQuery(document).mouseup(function (e) {
        var popup = jQuery(".trip-details-tasks");
        if (!popup.is(e.target) && popup.has(e.target).length == 0) {
            popup.hide();
        }
    });

    /*  Clients tab */
    jQuery(".clients-tab-section .tab_content").hide();
    jQuery(".clients-tab-section .tab_content:first").show();

    /* if in tab mode */
    jQuery(".clients-tab-section ul.tabs li").click(function () {
        jQuery(".tab_content").hide();
        var activeTab = jQuery(this).attr("rel");
        jQuery("#" + activeTab).fadeIn();

        jQuery(".clients-tab-section ul.tabs li").removeClass("active");
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

        jQuery(".clients-tab-section ul.tabs li").removeClass("active");
        jQuery(
            ".clients-tab-section ul.tabs li[rel^='" + d_activeTab + "']"
        ).addClass("active");
    });

    jQuery(".clients-tab-section ul.tabs li").last().addClass("tab_last");

    // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    // jQuery("#edit-popup .tab_content").hide();
    // jQuery("#edit-popup .tab_container .tab_content:nth-child(1)").show();

    // /* if in tab mode */
    // jQuery("#edit-popup ul.tabs li").click(function() {

    // 	jQuery("#edit-popup .tab_content").hide();
    // 	var activeTab = jQuery(this).attr("rel");
    // 	jQuery("#"+activeTab).fadeIn();

    // 	jQuery("#edit-popup ul.tabs li").removeClass("active");
    // 	jQuery(this).addClass("active");

    // 	jQuery("#edit-popup .tab_drawer_heading").removeClass("d_active");
    // 	jQuery("#edit-popup .tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");

    // });
    // /* if in drawer mode */
    // jQuery("#edit-popup .tab_drawer_heading").click(function() {
    // 	jQuery("#edit-popup .tab_content").hide();
    // 	var d_activeTab = jQuery(this).attr("rel");
    // 	jQuery("#"+d_activeTab).fadeIn();

    // 	jQuery("#edit-popup .tab_drawer_heading").removeClass("d_active");
    // 	jQuery(this).addClass("d_active");

    // 	jQuery("#edit-popup ul.tabs li").removeClass("active");
    // 	jQuery("#edit-popup ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    // });

    // /* Extra class "tab_last"
    //    to add border to right side
    //    of last tab */
    //    jQuery('#edit-popup ul.tabs li').last().addClass("tab_last");

    if (jQuery(".form-select").length) {
        jQuery(".form-select").select2({
            placeholder: "Select a programming language",
            allowClear: true,
        });
    }

    jQuery("#upload-pdf").click(function () {
        jQuery(".upload-pdf").show();
    });
});
