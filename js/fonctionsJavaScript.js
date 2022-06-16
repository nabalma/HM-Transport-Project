function VerifCreationCompte() {
    let pwd = document.getElementById("inputPassword").value;
    let confirmPwd = document.getElementById("confirmPassword").value;

    if (pwd != confirmPwd) {
        let alert = document.getElementById("alertinputpasswd");
        alert.classList.remove("invisible");

        return false;
    } else {
        return true;
    }
}


function alertErreurCredentiels() {
    let boiteAlerte = document.getElementById("erreurCredentiels");
    boiteAlerte.classList.remove("invisible");
}