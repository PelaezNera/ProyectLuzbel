//cambio pass

var pass_old = document.querySelector('#pass');
var new_pass = document.querySelector('#new_pass');
var verify_pass = document.querySelector('#verify_pass');

var error_pass_old = document.querySelector('#oldPass_error');
var error_new_pass = document.querySelector('#newPass_error');
var error_new_verify = document.querySelector('#verifyPass_error');
var error_datos = document.querySelector('#error_datos');

pass_old.addEventListener('input', old_pass_Verify);
new_pass.addEventListener('input', new_pass_Verify);
verify_pass.addEventListener('input', verifyPass_Verify);

function validar_pass() {
    let valid = true;

    if (pass_old.value.length < 3 && pass_old.value.length >= 0) {
        pass_old.style.border = "1px solid red";
        error_pass_old.style.display = "block";
        valid = false;
    } else {
        pass_old.style.border = "1px solid lime";
        error_pass_old.style.display = "none";
    }

    if (new_pass.value.length < 5 && new_pass.value.length >= 0) {
        new_pass.style.border = "1px solid red";
        error_new_pass.style.display = "block";
        valid = false;
    } else {
        new_pass.style.border = "1px solid lime";
        error_new_pass.style.display = "none";
    }

 
    if (verify_pass.value.length < 5 && verify_pass.value.length >= 0) {
        verify_pass.style.border = "1px solid red";
        error_new_verify.style.display = "block";
        valid = false;
    } else {
        verify_pass.style.border = "1px solid lime";
        error_new_verify.style.display = "none";
    }

    if (pass_old.value.length === 0 || new_pass.value.length === 0 || verify_pass.value.length === 0) {
        error_datos.style.display = "block";
        valid = false;
    } else {
        error_datos.style.display = "none";
    }

    return valid;
}

function old_pass_Verify() {
    if (pass_old.value.length >= 4) {
        pass_old.style.border = "1px solid lime";
        error_pass_old.style.display = "none";
    }
}

function new_pass_Verify() {
    if (new_pass.value.length >= 5) {
        new_pass.style.border = "1px solid lime";
        error_new_pass.style.display = "none";
    }
}

function verifyPass_Verify() {
    if (verify_pass.value.length >= 5) {
        verify_pass.style.border = "1px solid lime";
        error_new_verify.style.display = "none";
    }
}