$(document).ready(function () {

    $("#add_contact_form").submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: "add_contact.php",
            data: $(this).serialize(),
            type: "POST",
            success: function (data) {
                console.log(data);
            }
        })
    });




})
