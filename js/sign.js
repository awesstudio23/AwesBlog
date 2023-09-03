$(document).ready(function () {
    $("#sign-up-form").on("submit", function (e) {
        e.preventDefault();

        let inputPassword = $("#password");
        let inputConfirmPassword = $("#confirm-password");

        if (inputPassword.val() != inputConfirmPassword.val()) {
            toastr.error('Ошибка! Пароли не совпадают.');
            inputPassword.addClass("border-danger");
            inputConfirmPassword.addClass("border-danger");
        } else {
            inputPassword.removeClass("border-danger");
            inputConfirmPassword.removeClass("border-danger");
            $.ajax({
                type: "POST",
                url: "/php/api/sign.php",
                data: $(this).serialize() + "&type=sign-up",
                success: function (data) {
                    if (data == "") {
                        window.location.href = "profile";
                    } else {
                        toastr.error(data);
                    }
                }
            });
        }
    });
});