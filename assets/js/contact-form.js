
$(document).ready(function () {
    $("#contact-form").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'universe/assets/scripts/conocer.php',
            data: {
                name: $("#name").val(),
                email: $("#email").val(),
                subject: $("#subject").val(),
                message: $("#message").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.msg == 'success') {
                    $("#name,#email,#subject,#message").val('');
                    $("#contactSuccess").removeClass("hidden");
                    $("#contactsubmitbtn").attr("disabled","disabled");
                } else {
                    $("#contactError").removeClass("hidden");
                }
            }
        });
    });
});


