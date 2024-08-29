var user = document.querySelector('#user');
var email = document.querySelector('#email');
var pass = document.querySelector('#pass');
var tipo = document.querySelector('#tipo');

var error_datos = document.querySelector('#error_datos');
var error_user = document.querySelector('#error_name');
var error_email = document.querySelector('#error_email');
var error_pass = document.querySelector('#error_pass');
var error_tipo = document.querySelector('#error_tipo');

user.addEventListener('input', user_Verify);
email.addEventListener('input', email_Verify);
pass.addEventListener('input', pass_Verify);
tipo.addEventListener('input', tipo_Verify);

function validar() {
    let valid = true;

    if (user.value.length < 3 && user.value.length >= 0) {
        user.style.border = "1px solid red";
        error_user.style.display = "block";
        valid = false;
    } else {
        user.style.border = "1px solid lime";
        error_user.style.display = "none";
    }

    if (email.value.length < 3 && email.value.length >= 0) {
        email.style.border = "1px solid red";
        error_email.style.display = "block";
        valid = false;
    } else {
        email.style.border = "1px solid lime";
        error_email.style.display = "none";
    }

    if (pass.value.length < 5 && pass.value.length >= 0) {
        pass.style.border = "1px solid red";
        error_pass.style.display = "block";
        valid = false;
    } else {
        pass.style.border = "1px solid lime";
        error_pass.style.display = "none";
    }

    if (tipo.value.length < 3 && tipo.value.length >= 0) {
        tipo.style.border = "1px solid red";
        error_tipo.style.display = "block";
        valid = false;
    } else {
        tipo.style.border = "1px solid lime";
        error_tipo.style.display = "none";
    }

    if (user.value.length === 0 || email.value.length === 0 || pass.value.length === 0 || tipo.value.length === 0) {
        error_datos.style.display = "block";
        valid = false;
    } else {
        error_datos.style.display = "none";
    }

    return valid;
}

function user_Verify() {
    if (user.value.length >= 4) {
        user.style.border = "1px solid lime";
        error_user.style.display = "none";
    }
}

function email_Verify() {
    if (email.value.length >= 5) {
        email.style.border = "1px solid lime";
        error_email.style.display = "none";
    }
}

function pass_Verify() {
    if (pass.value.length >= 4) {
        pass.style.border = "1px solid lime";
        error_pass.style.display = "none";
    }
}

function tipo_Verify() {
    if (tipo.value.length >= 4) {
        tipo.style.border = "1px solid lime";
        error_tipo.style.display = "none";
    }
}