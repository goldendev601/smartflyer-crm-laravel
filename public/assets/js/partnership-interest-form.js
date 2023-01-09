$(document).ready(function () {
	if ($("#partnershipInterestForm").length > 0) {
		$("#partnershipInterestForm").validate({
			rules: {
				name: {
					required: true,
					maxlength: 300
				},
				email: {
					required: true,
					email: true,
				},
			},
			messages: {
				name: {
					required: "Please enter name",
				},
				email: {
					required: "Please enter email",
				},
			},
			highlight: function (element, errorClass) {
				$(element).removeClass(errorClass);
			},
			errorPlacement: function (error, element) {
				error.insertAfter(element);
			},
			submitHandler: function (form) {
				form.submit();
			}
		});
	}
});

$("#send_new_invite").on("click", function () {
	$(".error").remove();
});

$(document).ready(function () {

	$('#second-steps').hide();
	$('#next_step_btn, #tab3, #tab4, #tab5, #tab6').on("click", function () {
		$('#tab3').addClass("active");
		$('#first-steps').hide();
		$("#second-steps").show();
		window.scrollTo(150, 0);
		$('.navigation__link').removeClass('active');
		$('#references').addClass('active');
		return false;
	});
	$('#previous_step_btn, #tab1, #tab2').on("click", function () {
		$("#second-steps").hide();
		$('#first-steps').show();
		window.scrollTo(10, 0);
		$('.navigation__link').removeClass('active');
		$('#main_information').addClass('active');

		return false;
	});


});
$('.news-form-section nav a.navigation__link:nth-child(1)').addClass('active');
let mainNavLinks = document.querySelectorAll(".news-form-section nav a.navigation__link");
let mainSections = document.querySelectorAll(".partnership-interest-form .news-form-left .page-section");

let lastId;
let cur = [];



window.addEventListener("scroll", event => {
	let fromTop = window.scrollY;
	mainNavLinks.forEach(link => {
		let section = document.querySelector(link.hash);

		if (
			section.offsetTop <= fromTop &&
			section.offsetTop + section.offsetHeight > fromTop
		) {
			link.classList.add("active");
		} else {
			link.classList.remove("active");
		}
	});
});

