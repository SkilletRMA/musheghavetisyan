/**
 * Created by ched.switzer on 1/26/16.
 *
 * This script is to detect Marketo forms and
 * attach Informatica validation to the elements
 */




function decodeHtml(html) {
    var txt = document.createElement("textarea");
    txt.innerHTML = html;
    return txt.value;
}

/** Free trials Infusionsoft forms additions by Austin Harbert 10/28/16 **/

$('#orderForm').ready(function (form) {
    var errorCount = 0;
    var postData = {};
    var form = $('#orderForm');
    form.verify = false;
    var formValidate = false;
    var validationCount = 0;

    $('#orderForm').submit(function (event) {

        $('#Order').val('Sending please wait...');
        $('.submitWarning').removeClass('hide');
        var consoleMsg = "";
        if (validationCount === 0) {
            // Email /
            var email = $("#Email").val();
            if (email.length) {
                consoleMsg += "Email Element Found\n";
                postData["emailVerify"] = "yes";
                postData["email"] = email;
                form.verify = true;
            } else {
                email = "No email Entered";
                consoleMsg += "Email Element Found\n";
                postData["emailVerify"] = "yes";
                postData["email"] = email;
                form.verify = true;
            }

            console.log(consoleMsg);
            // We have something to check //
            if (form.verify) {
                console.log("Validation Check: ", postData);

                $.get('/inc/informatica/validator.php', postData)

                    .done(function (result) {
                        console.log("Validation Results: ", result);
                        var data = $.parseJSON(result);
                        console.log("DATA: ", data);
                        if (data.email == 'failure') {
                            // Show error message, pointed at Email element
                            $('#errorMessage').empty();
                            $('#errorMessage').append('The email address you have entered is invalid. Please try again.')
                            //errorCount = errorCount + 1;
                            $('#Order').val('Order');
                            $('.submitWarning').addClass('hide');
                            return false;
                        } else {
                            console.log("SUBMITTING: ", form);
                            form.verify = false;
                            //formValidate = true;
                            $('#errorMessage').empty();
                            //return true;
                            validationCount = 1;
                            $('#Order').val('Order Sent!');
                            $('.submitWarning').addClass('hide');
                            form.submit();
                        }
                    }, 'jsonp');
            }
            return false;
        }
    });
});
/** Desk contact us forms additions by Austin Harbert 10/28/16 **/

$('#contactForm').ready(function (form) {
    var errorCount = 0;
    var postData = {};
    var form = $('#contactForm');
    form.verify = false;
    var formValidate = false;
    var validationCount = 0;

    $('#contactForm').submit(function (event) {

        $('#contactSubmit').val('Sending please wait...');
        //$('.submitWarning').removeClass('hide');
        var consoleMsg = "";
        if (validationCount === 0) {
            // Email /
            var email = $("#email").val();
            if (email.length) {
                consoleMsg += "Email Element Found\n";
                postData["emailVerify"] = "yes";
                postData["email"] = email;
                form.verify = true;
            } else {
                email = "No email Entered";
                consoleMsg += "Email Element Found\n";
                postData["emailVerify"] = "yes";
                postData["email"] = email;
                form.verify = true;
            }

            console.log(consoleMsg);
            // We have something to check //
            if (form.verify) {
                console.log("Validation Check: ", postData);

                $.get('https://www.tonyrobbins.com//inc/informatica/validator.php', postData)

                    .done(function (result) {
                        console.log("Validation Results: ", result);
                        var data = $.parseJSON(result);
                        console.log("DATA: ", data);
                        if (data.email == 'failure') {
                            // Show error message, pointed at Email element
                            $('#contactErrorMessage').empty();
                            $('#contactErrorMessage').append('The email address you have entered is not registered. Please try again.');
                            errorCount = errorCount + 1;
                            $('#contactSubmit').val('Contact Us');
                            //$('.submitWarning').addClass('hide');
                            return false;
                        } else {
                            console.log("SUBMITTING: ", form);
                            form.verify = false;
                            //formValidate = true;
                            $('#contactErrorMessage').empty();
                            //return true;
                            validationCount = 1;
                            $('#contactSubmit').val('Request Sent');
                            //$('.submitWarning').addClass('hide');
                            form.submit();
                            //Submit tracking code for segment
                            var fname = $('#firstName').val();
                            var lname = $('#lastName').val();
                            var email = $('#email').val();
                            var phone = $('#phone').val();
                            var cat = $('#tier1Need').val();
                            analytics.track('Contacted Support', {
                                first_name: fname,
                                last_name: lname,
                                email: email,
                                phone: phone, 
                                support_category: cat
                            });
                        }
                    }, 'jsonp');
            }
            return false;
        }
    });
});