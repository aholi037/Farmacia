document.getElementById("btn_registrarse").addEventListener("click", register);
document.getElementById("btn_iniciar-sesion").addEventListener("click", login);

var Contenedor_login_register=document.querySelector(".contenedor__login-register");
var Formulario_login=document.querySelector(".formulario__login");
var Formulario_register=document.querySelector(".formulario__register");
var Caja_trasera_login=document.querySelector(".caja__trasera-login");
var Caja_trasera_register=document.querySelector(".caja__trasera-register");


function login(){
 Formulario_register.style.display = "none";
 Contenedor_login_register.style.left = "0px";
 Formulario_login.style.display = "block";
 Caja_trasera_register.style.opacity = "0";
 Caja_trasera_login.style.opacity = "1";

}


function register(){
 Formulario_register.style.display = "block";
 Contenedor_login_register.style.left = "340px";
 Formulario_login.style.display = "none";
 Caja_trasera_register.style.opacity = "1";
 Caja_trasera_login.style.opacity = "0";
}

function  ValidUser() {

    var Nombre_User = document.getElementById('NombreUsuario').value;
    var Cargo_User = document.getElementById('rolUser').value;
    var User_User = document.getElementById('UsuarioUsuario').value;
    var Contra_User = document.getElementById('ContraUsuario').value;


    if (Nombre_User=="") {

        alert('El campo Nombre está vacío');
        return false;
    }
    else if (Nombre_User.length>50){
        alert('El Nombre es demasiado largo');
        return false;
    }
    else if (Cargo_User=="..."){
        alert('Aún no ha seleccionado un cargo para el Usuario');
        return false;
    }
    else if (User_User=="") {

        alert('Aún no ha escrito su nombre de Usuario');
        return false;
    }
    else if (User_User.length>10){
        alert('El Nombre de Usuario es demasiado largo');
        return false;
    }
    if (Contra_User=="") {

        alert('Debe escribir una contraseña para su usuario');
        return false;
    }
    else if (Contra_User.length>15){
        alert('El Contraseña es demasiado larga');
        return false;
    }
}

