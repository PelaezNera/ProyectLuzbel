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
        localStorage.setItem('modo-oscuro', checked.toString());
    }

    switchButton.addEventListener('click', () => {
        tema.checked = !tema.checked;
        cambiarModo(tema.checked);
    });

    const modoGuardado = localStorage.getItem('modo-oscuro');
    if (modoGuardado !== null) {
        cambiarModo(modoGuardado === 'true');
    } else {
        cambiarModo(tema.checked);
    }
});