//logear

var email = document.querySelector('#email');
var user = document.querySelector('#user');
var pass = document.querySelector('#pass');
var verify_pass = document.querySelector('#verify_pass');

var error_email = document.querySelector('#email_error');
var error_user = document.querySelector('#user_error');
var error_pass = document.querySelector('#pass_error');
var error_verify = document.querySelector('#verify_error');
var error_datos = document.querySelector('#error_datos');


email.addEventListener('input', email_Verify);
user.addEventListener('input', user_Verify);
pass.addEventListener('input', pass_Verify);
verify_pass.addEventListener('input', verifyPass_Verify);

function validar() {
    let valid = true;

    if (email.value.length < 6 && email.value.length >= 0) {
        email.style.border = "1px solid red";
        error_email.style.display = "block";
        valid = false;
    } else {
        email.style.border = "1px solid lime";
        error_email.style.display = "none";
    }

    if (user.value.length < 3 && user.value.length >= 0) {
        user.style.border = "1px solid red";
        error_user.style.display = "block";
        valid = false;
    } else {
        user.style.border = "1px solid lime";
        error_user.style.display = "none";
    }

    if (pass.value.length < 5 && pass.value.length >= 0) {
        pass.style.border = "1px solid red";
        error_pass.style.display = "block";
        valid = false;
    } else {
        pass.style.border = "1px solid lime";
        error_pass.style.display = "none";
    }

 
    if (verify_pass.value.length < 5 && verify_pass.value.length >= 0) {
        verify_pass.style.border = "1px solid red";
        error_verify.style.display = "block";
        valid = false;
    } else {
        verify_pass.style.border = "1px solid lime";
        error_verify.style.display = "none";
    }

    if (email.value.length === 0 || user.value.length === 0 || pass.value.length === 0 || verify_pass.value.length === 0) {
        error_datos.style.display = "block";
        valid = false;
    } else {
        error_datos.style.display = "none";
    }

    return valid;
}

function email_Verify() {
    if (email.value.length >= 6) {
        email.style.border = "1px solid lime";
        error_email.style.display = "none";
    }
}

function user_Verify() {
    if (user.value.length >= 4) {
        user.style.border = "1px solid lime";
        error_user.style.display = "none";
    }
}

function pass_Verify() {
    if (pass.value.length >= 5) {
        pass.style.border = "1px solid lime";
        error_pass.style.display = "none";
    }
}

function verifyPass_Verify() {
    if (verify_pass.value.length >= 5) {
        verify_pass.style.border = "1px solid lime";
        error_verify.style.display = "none";
    }
}

//login
var user_login = document.querySelector('#user_login');
var pass_login = document.querySelector('#pass_login');

var error_login_user = document.querySelector('#user_login_error');
var error_login_pass = document.querySelector('#pass_login_error');
var error_login_datos = document.querySelector('#error_login_datos');

user_login.addEventListener('input', user_login_Verify);
pass_login.addEventListener('input', pass_login_Verify);

function validar_login() {
    let valid = true;

    if (user_login.value.length < 3 && user_login.value.length >= 0) {
        user_login.style.border = "1px solid red";
        error_login_user.style.display = "block";
        valid = false;
    } else {
        user_login.style.border = "1px solid lime";
        error_login_user.style.display = "none";
    }

    if (pass_login.value.length < 5 && pass_login.value.length >= 0) {
        pass_login.style.border = "1px solid red";
        error_login_pass.style.display = "block";
        valid = false;
    } else {
        pass_login.style.border = "1px solid lime";
        error_login_pass.style.display = "none";
    }

    if (user_login.value.length === 0 || pass_login.value.length === 0) {
        error_login_datos.style.display = "block";
        valid = false;
    } else {
        error_login_datos.style.display = "none";
    }

    return valid;
}

function user_login_Verify() {
    if (user_login.value.length >= 4) {
        user_login.style.border = "1px solid lime";
        error_user.style.display = "none";
    }
}

function pass_login_Verify() {
    if (pass_login.value.length >= 5) {
        pass_login.style.border = "1px solid lime";
        error_login_pass.style.display = "none";
    }
}
