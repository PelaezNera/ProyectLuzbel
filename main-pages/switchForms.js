// switchForms.js
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.switch-form');
    const forms = document.querySelectorAll('form');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const formToShow = button.getAttribute('data-form');

            forms.forEach(form => {
                if (form.classList.contains(formToShow)) {
                    form.classList.add('active');
                } else {
                    form.classList.remove('active');
                }
            });
        });
    });

    document.querySelector('.signUp').classList.add('active');
});
