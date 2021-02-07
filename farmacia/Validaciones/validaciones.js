/*VALIDACIONES PARA EL REGISTRO DE PROVEEDORES*/
function  ValidProv() {

	var Nombre_Prov = document.getElementById('nombre_prov').value;
    var Telefono_Prov = document.getElementById('telefono_prov').value;
    var Cuenta_Prov = document.getElementById('cuenta_prov').value;


    if (Nombre_Prov=="") {

    	alert('El campo Nombre está vacío');
    	return false;
    }
    else if (Nombre_Prov.length>50){
        alert('El Nombre es demasiado largo');
        return false;
    }
    else if (Telefono_Prov.length>15){
        alert('El número de teléfono es demasiado largo');
        return false;
    }
    else if (Cuenta_Prov.length>20){
        alert('El número de Cuenta es demasiado largo');
        return false;
    }
}







