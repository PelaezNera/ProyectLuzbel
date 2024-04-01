document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("hashchange", function () {
        const excludedSections = ["info", "records"];
        const hash = window.location.hash.substring(1);

        if (!excludedSections.includes(hash)) {
            window.scrollTo(window.scrollX, window.scrollY - 50);
        }
    });
});

window.addEventListener("DOMContentLoaded", function () {
    let tema = document.getElementById('tema');
    let switchButton = document.getElementById('switch');
    let label_tema = switchButton.getElementsByTagName('span')[0];

    // Función para cambiar el modo
    function cambiarModo(checked) {
        if (checked) {
            document.body.classList.add('modo-claro');
            document.body.classList.remove('modo-oscuro');
            label_tema.innerHTML = 'wb_sunny';
            switchButton.classList.add('active');
        } else {
            document.body.classList.remove('modo-claro');
            document.body.classList.add('modo-oscuro');
            label_tema.innerHTML = 'dark_mode';
            switchButton.classList.remove('active');
        }
        // Guardamos el modo en localstorage.
        localStorage.setItem('modo-oscuro', checked.toString());
    }

    // Cambiar el modo cuando se haga clic en el botón
    switchButton.addEventListener('click', () => {
        tema.checked = !tema.checked; // Cambiar el estado del checkbox
        cambiarModo(tema.checked);
    });

    // Obtener el modo almacenado en el local storage y aplicarlo
    const modoGuardado = localStorage.getItem('modo-oscuro');
    if (modoGuardado !== null) {
        cambiarModo(modoGuardado === 'true');
    } else {
        // Si no hay modo almacenado, aplicamos el modo inicial según el checkbox
        cambiarModo(tema.checked);
    }
});



// window.addEventListener("DOMContentLoaded", function () {
//     let tema = document.getElementById('tema');
//     let switchButton = document.getElementById('switch');
//     let label_tema = switchButton.getElementsByTagName('span')[0];

//     function cambiarModo(checked) {
//         if (checked) {
//             document.body.classList.add('modo-claro');
//             document.body.classList.remove('modo-oscuro');
//             label_tema.innerHTML = 'wb_sunny';
//         } else {
//             document.body.classList.remove('modo-claro');
//             document.body.classList.add('modo-oscuro');
//             label_tema.innerHTML = 'dark_mode';
//         }
//     }
//     switchButton.addEventListener('click', () => {
//         tema.checked = !tema.checked; // Cambiar el estado del checkbox
//         cambiarModo(tema.checked);
//     });
//     cambiarModo(tema.checked);
// });

// window.addEventListener("DOMContentLoaded", function () {
//     let tema = document.getElementById('tema');
//     let label_tema = document.getElementById('la_tema');
//     let btnSwitch = document.getElementById('switch');
//     function cambiarModo(checked) {
//         document.body.classList.toggle('modo-oscuro');
//         if (checked) {
//             document.body.classList.add('modo-claro');
//             document.body.classList.remove('modo-oscuro');
//             label_tema.innerHTML = '<span class="material-symbols-outlined pulso" id="tema_icono">dark_mode</span>';
//         } else {
//             document.body.classList.remove('modo-claro');
//             document.body.classList.add('modo-oscuro');
//             label_tema.innerHTML = '<span class="material-symbols-outlined pulso" id="tema_icono_2">wb_sunny</span>';
//             btnSwitch.classList.toggle('active');
//         }
//     }
//     cambiarModo(tema.checked);
// });

// window.addEventListener("DOMContentLoaded", function () {
//     let switchButton = document.getElementById('switch');

//     function cambiarModo() {
//         if (document.body.classList.contains('modo-claro')) {
//             document.body.classList.remove('modo-claro');
//             document.body.classList.add('modo-oscuro');
//             switchButton.innerHTML = '<span class="material-symbols-outlined pulso" id="tema_icono">dark_mode</span>';
//         } else {
//             document.body.classList.add('modo-claro');
//             document.body.classList.remove('modo-oscuro');
//             switchButton.innerHTML = '<span class="material-symbols-outlined pulso" id="tema_icono_2">wb_sunny</span>';
//         }
//     }

//     switchButton.addEventListener('click', cambiarModo);

//     cambiarModo();
// });