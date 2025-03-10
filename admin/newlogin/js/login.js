
$(document).ready(function () {
    $('.social-icon span:last-child').load(function () {
        $('.social-icon span').not(':last-child').toggleClass('hidden show');
    });

    $('#showHideEye').click(function () {
        var input = document.getElementById("password");
        if (input.type === "password") {
            input.type = "text";
            $(this).removeClass('fa fa-eye text-muted');
            $(this).addClass('fa fa-eye-slash text-muted');
        } else {
            input.type = "password";
            $(this).removeClass('fa fa-eye-slash text-muted');
            $(this).addClass('fa fa-eye text-muted');
        }
    });

    $("#password").trigger('click');

});


