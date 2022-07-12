
$("#form_submit").submit(function(e) {
    var myurl = "<?php bloginfo('template_directory') ?>/inc/users/functionality/ajax-processing/registration.php";
    $.ajax({
        type: "POST",
        url: myurl,
        data: $("#form_submit").serialize(),
        success: function(data) {
            console.log(data);
            $("#form_message").html(data);
        }

    });

    e.preventDefault();
});
