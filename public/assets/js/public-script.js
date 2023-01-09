$(document).ready(function () {
    const togglePassword = $("#togglePassword");
    const password = $("#password");

    togglePassword.on("click", function () {
        // toggle the type attribute
        const type =
            password.attr("type") === "password" ? "text" : "password";
        password.attr("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });

    const togglePasswordConfirm = $("#togglePassword-Confirm");
    const passwordConfirm = $("#password-Confirm");

    togglePasswordConfirm.on("click", function () {
        // toggle the type attribute
        const type =
        passwordConfirm.attr("type") === "password" ? "text" : "password";
        passwordConfirm.attr("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });
 
});
