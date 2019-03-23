function validar() {
    var correo, contraseña, expresión;
    correo = document.getElementById("correo").value;
    contraseña = document.getElementById("contraseña").value;

    expresión = /\w+@\w+\.+[a-z]/;

    if (correo === "" || contraseña === "") {
        alert("Debe completar los campos");
        return false;
    } else if (!expresión.test(correo)) {
        alert("Correo No válido");
        return false;
    }
}
