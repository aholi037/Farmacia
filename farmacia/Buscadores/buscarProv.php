<?php 
error_reporting();
include '../conectar.php';

$tabla="";
$Vista="1";
$query= "SELECT * FROM proveedores WHERE vista='$Vista' ORDER BY cod_prov";


if (isset($_POST['Consultar']))
 {
	$q=$conexion->real_escape_string($_POST['Consultar']);
	$query="SELECT * FROM proveedores WHERE vista = 1 AND (cod_prov LIKE '%{$q}%' OR nombre_prov LIKE '%{$q}%' OR telefono_prov LIKE '%{$q}%' OR cuenta_prov LIKE '%{$q}%' OR date_prov LIKE '%{$q}%')"; 
}

$BuscarProveedores=$conexion->query($query);
if ($BuscarProveedores->num_rows>0) {
	$tabla.="
    <table class='table table-hover table-striped table-bordered'>
  <thead class='thead-light'>
    <tr>
      <th scope='col'>No.</th>
      <th scope='col'>Nombre</th>
      <th scope='col'>Teléfono</th>
      <th scope='col'>No. de Cuenta</th>
      <th scope='col'>Fecha de registro</th>
      <th scope='col'>Editar</th>
    </tr>
  </thead>
  <tbody>

	";

while ($filas=$BuscarProveedores->fetch_assoc()) 
{

     $tabla.='              
                    <tr>
                        <td scope="row"> '.$filas['cod_prov'].'</td>
                        <td>'.$filas['nombre_prov'].'</td>
                        <td> '.$filas['telefono_prov'].'</td>
                        <td>'.$filas['cuenta_prov'].'</td>
                        <td>'.$filas['date_prov'].'</td>
                        <td> 

                            <button type="button" class="btn btn-success editbtnprov" data-toggle="modal" data-target="#editarProveedor">Modificar</button>
                            <button type="button" class="btn btn-danger deletebtnprov" data-toggle="modal" data-target="#ocultarProveedor">Eliminar</button>

                            </td>
                    </tr>
                    ';
                }
                $tabla.="</tbody> </table>";

}
else{
	$tabla="No se encontraron resultados :(";
}

echo $tabla;


 ?>
<script>

	$('.editbtnprov').on('click', function() {
	
	$tr=$(this).closest('tr');
	var datos=$tr.children("td").map(function(){
		return $(this).text();
	});
	$('#numeroProv').val(datos[0]);
	$('#nombreProv').val(datos[1]);
	$('#telefonoProv').val(datos[2]);
	$('#cuentaProv').val(datos[3]);
});

$('.deletebtnprov').on('click', function() {
	
	$tr=$(this).closest('tr');
	var datos=$tr.children("td").map(function(){
		return $(this).text();
	});
	$('#numeroProvEdit').val(datos[0]);
	$('#nombreProvEdit').val(datos[1]);
});
</script>