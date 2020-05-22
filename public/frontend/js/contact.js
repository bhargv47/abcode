$(function() {

    "use strict";

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

    $('#contact-form').validator();


    // when the form is submitted
    $('#contact-form').on('submit', function(e) {
        $('#success', '#error').hide();

        e.preventDefault();
        var token = $("input[name=_token]").val();
        var name = $('input#InputName').val()
        var email = $('input#InputEmail').val()
        var subject = $('input#InputSubject').val()
        var message = $('textarea#InputMessage').val()

        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val(),
            },
            url: "contact",
            data: { token: token, name: name, email: email, subject: subject, message: message },
            success: function(data) {
                console.log(data)
                var arr = $.parseJSON(data);


                if (arr.status == 'success') {
                    $('#success').show();
                } else {
                    $('#error').show();

                }



            }
        });
    });

})