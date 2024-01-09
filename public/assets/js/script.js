document.addEventListener("DOMContentLoaded", function(){
    const form = document.getElementById("my-form");

    const nomInput = document.getElementById("nom");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirmPassword");

    const fnameError = document.getElementById("fname-error");
    const emailError = document.getElementById("email-error");
    const passError = document.getElementById("pass-error");
    const confPassError = document.getElementById("confPass-error");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        let isValid = true;

        const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
        const nameRegex = /^[a-z0-9_-]{3,15}$/;

        if (nomInput.value.length < 3) {
            isValid = false;
            fnameError.textContent = "Le nom doit contenir au moins 3 caracteres";
        } else if (!nameRegex.test(nomInput.value)) {
            isValid = false;
            fnameError.textContent = "Veuillez entrer un nom valide";
        }
        if (!emailRegex.test(emailInput.value)) {
            isValid = false;
            emailError.textContent = "Veuillez entrer une adresse e-mail valide";
        }

        if (passwordInput.value.length < 6) {
            isValid = false;
            passError.textContent ="Le mot de passe doit contenir au moins 6 caracteres";
        }

        if (passwordInput.value !== confirmPasswordInput.value) {
            isValid = false;
            confPassError.textContent = "Les mots de passe ne correspondent pas";
        }

        if (isValid) {
            form.submit();
        }
    });
});