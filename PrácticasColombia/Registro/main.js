function validar() {
    var nombres, apellidos, correo, contraseña, repetir, documento, expresión;
    nombres = document.getElementById("nombres").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    contraseña = document.getElementById("contraseña").value;
    repetir = document.getElementById("repetir").value;
    documento = document.getElementById("documento").value;

    expresión = /\w+@\w+\.+[a-z]/;

    if (nombres === "" || apellidos === "" || correo === "" || contraseña === "" || repetir === "" || documento === "") {
        alert("Todos los campos son obligatorios");
        return false;
    } else if (nombres.length > 30) {
        alert("Los nombres son muy largos");
        return false;
    } else if (apellidos.length > 80) {
        alert("Los apellidos son muy largos");
        return false;
    } else if (correo.length > 100) {
        alert("El correo que escribió no está permitido");
        return false;
    } else if (!expresión.test(correo)) {
        alert("Correo No válido");
        return false;
    } else if (contraseña.length > 20) {
        alert("Contraseña muy larga");
        return false;
    } else if (repetir.length > 20) {
        alert("Contraseña muy larga");
        return false;
    } else if (documento.length > 20) {
        alert("Documento No válido");
        return false;
    } else if (isNaN(documento)) {
        alert("Número de Documento No válido");
        return false;
    }
}
