var email = document.querySelector('#email');
var user = document.querySelector('#user');
var pass = document.querySelector('#pass');
var verify_pass = document.querySelector('#verify_pass');

var error_email = document.querySelector('#email_error');
var error_user = document.querySelector('#user_error');
var error_pass = document.querySelector('#pass_error');
var error_verify = document.querySelector('#verify_error');
var error_datos = document.querySelector('#error_datos')

email.addEventListener('textInput', email_Verify);
user.addEventListener('textInput', user_Verify);
pass.addEventListener('textInput', pass_Verify);
verify_pass.addEventListener('textInput', verifyPass_Verify);

function validar(){
    if (email.value.length < 6 && email.value.length > 0) {
        email.style.border = "1px solid red";
        error_email.style.display = "block";
        email.focus();
        return false
    }

    if (user.value.length < 4 && user.value.length > 0) {
        user.style.border = "1px solid red";
        error_user.style.display = "block";
        user.focus();
        return false
    }

    if (pass.value.length < 5 && pass.value.length > 0) {
        pass.style.border = "1px solid red";
        error_pass.style.display = "block";
        pass.focus();
        return false
    }

    if (verify_pass.value.length < 5 && verify_pass.value.length > 0) {
        verify_pass.style.border = "1px solid red";
        error_verify_pass.style.display = "block";
        verify_pass.focus();
        return false
    }

    if (email.value.length == 0 || user.value.length == 0 || pass.value.length == 0 || verify_pass.value.length == 0) {
        error_datos.style.display = "block";
        return false;
    }

}

function email_Verify() {
    if (email.value.length >= 5) {
    email.style.border = "1px solid silver";
    error_email.style.display ="none";
    return true;
    }

    if (email.value.length == 0 || user.value.length == 0 || pass.value.length == 0 || verify_pass.value.length == 0) {
        error_datos.style.display = "none";
        return true;
    }
}

function user_Verify() {
    if (user.value.length >= 3) {
    user.style.border = "1px solid silver";
    error_user.style.display ="none";
    return true;
    }

    if (email.value.length == 0 || user.value.length == 0 || pass.value.length == 0 || verify_pass.value.length == 0) {
        error_datos.style.display = "none";
        return true;
    }
}

function pass_Verify() {
    if (pass.value.length >= 5) {
    pass.style.border = "1px solid silver";
    error_pass.style.display ="none";
    return true;
    }

    if (email.value.length == 0 || user.value.length == 0 || pass.value.length == 0 || verify_pass.value.length == 0) {
        error_datos.style.display = "none";
        return true;
    }
}

function verifyPass_Verify() {
    if (verify_pass.value.length >= 5) {
    verify_pass.style.border = "1px solid silver";
    error_verify.style.display ="none";
    return true;
    }

    if (email.value.length == 0 || user.value.length == 0 || pass.value.length == 0 || verify_pass.value.length == 0) {
        error_datos.style.display = "none";
        return true;
    }
}