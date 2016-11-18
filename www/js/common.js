/**
 * Created by Anghelo on 18-11-2016.
 */


function clavesIguales(pass, pass2){
    return pass == pass2;
}

function emailValido($email){
    return /^.+[@].+\..+$/.test($email);
}

function crearCuenta(){
    var pass1 = document.getElementById("pass").value;
    var pass2 = document.getElementById("pass_confirm").value;
    if(!clavesIguales(pass1, pass2)){
        alert("Las contraseñas no coinciden.");
        return false;
    }
    var email = document.getElementById("email").value;
    if(!emailValido(email)){
        alert("El eMail no es valido.");
        return false;
    }
    return true;
}