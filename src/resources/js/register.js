$(document).ready(function () {
   initEmailValidation();
});

/**
 * On email input change validate the email.
 */
function initEmailValidation() {
    let input = $('#email'),
        validity = $('.validity');

    input.on('change', function () {
        let email = $(this).val();
        input.removeClass();
        validity.html('');

        if (isEmailValid(email)) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '/email/validate',
                data: {email: email},
                success: function (response) {
                    if (response.taken) {
                        input.addClass('error');
                        validity.html('Email is not available!');
                    } else {
                        input.addClass('success');
                        validity.html('Email is available!');
                    }
                },
                error: function (response) {
                    input.addClass('error');
                    validity.html('Could not validate email.');
                }
            });
        } else {
            input.addClass('alert-error');
            validity.html('Please input a valid email!');
        }
    });
}

/**
 * Regex validate email
 * @param email
 * @returns {boolean}
 */
function isEmailValid(email) {
    let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}