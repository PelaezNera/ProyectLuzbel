window.addEventListener("DOMContentLoaded", function () {
    let tema = document.getElementById('tema');
    let switchButton = document.getElementById('switch');
    let label_tema = switchButton.getElementsByTagName('span')[0];

    // Función para cambiar el modo
    function cambiarModo(checked) {
        if (checked) {
            document.body.classList.add('light-mode');
            document.body.classList.remove('dark-mode');
            label_tema.innerHTML = 'wb_sunny';
            switchButton.classList.add('active');
        } else {
            document.body.classList.remove('light-mode');
            document.body.classList.add('dark-mode');
            label_tema.innerHTML = 'dark_mode';
            switchButton.classList.remove('active');
        }
        // Guardamos el modo en localstorage.
        localStorage.setItem('dark-mode', checked.toString());
    }

    // Cambiar el modo cuando se haga clic en el botón
    switchButton.addEventListener('click', () => {
        tema.checked = !tema.checked; // Cambiar el estado del checkbox
        cambiarModo(tema.checked);
    });

    // Obtener el modo almacenado en el local storage y aplicarlo
    const modoGuardado = localStorage.getItem('dark-mode');
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
//             document.body.classList.add('light-mode');
//             document.body.classList.remove('dark-mode');
//             label_tema.innerHTML = 'wb_sunny';
//         } else {
//             document.body.classList.remove('light-mode');
//             document.body.classList.add('dark-mode');
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
//         document.body.classList.toggle('dark-mode');
//         if (checked) {
//             document.body.classList.add('light-mode');
//             document.body.classList.remove('dark-mode');
//             label_tema.innerHTML = '<span class="material-symbols-outlined pulso" id="tema_icono">dark_mode</span>';
//         } else {
//             document.body.classList.remove('light-mode');
//             document.body.classList.add('dark-mode');
//             label_tema.innerHTML = '<span class="material-symbols-outlined pulso" id="tema_icono_2">wb_sunny</span>';
//             btnSwitch.classList.toggle('active');
//         }
//     }
//     cambiarModo(tema.checked);
// });

// window.addEventListener("DOMContentLoaded", function () {
//     let switchButton = document.getElementById('switch');

//     function cambiarModo() {
//         if (document.body.classList.contains('light-mode')) {
//             document.body.classList.remove('light-mode');
//             document.body.classList.add('dark-mode');
//             switchButton.innerHTML = '<span class="material-symbols-outlined pulso" id="tema_icono">dark_mode</span>';
//         } else {
//             document.body.classList.add('light-mode');
//             document.body.classList.remove('dark-mode');
//             switchButton.innerHTML = '<span class="material-symbols-outlined pulso" id="tema_icono_2">wb_sunny</span>';
//         }
//     }

//     switchButton.addEventListener('click', cambiarModo);

//     cambiarModo();
// });