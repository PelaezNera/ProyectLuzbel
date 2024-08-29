//logear
var title = document.querySelector('#titulo');
var info = document.querySelector('#info');

var error_title = document.querySelector('#error_titulo');
var error_info = document.querySelector('#error_info');
var error_datos = document.querySelector('#error_datos');

title.addEventListener('input', title_Verify);
info.addEventListener('input', info_Verify);

function validar() {
    let valid = true;

    if (title.value.length < 3 && title.value.length >= 0) {
        title.style.border = "1px solid red";
        error_title.style.display = "block";
        valid = false;
    } else {
        title.style.border = "1px solid lime";
        error_title.style.display = "none";
    }

    if (info.value.length < 5 && info.value.length >= 0) {
        info.style.border = "1px solid red";
        error_info.style.display = "block";
        valid = false;
    } else {
        info.style.border = "1px solid lime";
        error_info.style.display = "none";
    }

    if (title.value.length === 0 || info.value.length === 0) {
        error_datos.style.display = "block";
        valid = false;
    } else {
        error_datos.style.display = "none";
    }

    return valid;
}

function title_Verify() {
    if (title.value.length >= 4) {
        title.style.border = "1px solid lime";
        error_title.style.display = "none";
    }
}

function info_Verify() {
    if (info.value.length >= 5) {
        info.style.border = "1px solid lime";
        error_info.style.display = "none";
    }
}