<?php  
include 'superior.php';
session_start();
error_reporting(0);
$varuser = $_SESSION['confirmusuario'];


if ($varuser == null || $varuser = '') {
  echo "
    <script>
      alert('Usted no tiene autorización');
      window.location='index.php';
    </script>
  ";
  die();
}
?>


<div class="w-100">
<nav class="navbar navbar-expand-lg navbar-light border-bottom navbar-color">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                  <div class="container">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Proveedores</h1>
                            
                      </div>
                  </div>    
              </div>
            </div>
          </nav>
          <div id="content" class="bg-grey w-100">

<div style="padding: 2% 2% 2% 2%;">
<form action="Registros/registro_proveedores.php" method="post" class=" col-lg-12 card-body card" style="width: 100%; border-width: 3px; margin-top: 20px;" onsubmit="return ValidProv();">
<div class="panel panel-default" >
 <div class="panel-heading">
     <div class="row ">
      
              <div class=" col-lg-4 col-md-12">
                  <span class="help-block text-muted small-font" > Nombre</span>
                  <input type="text" class="form-control" id="nombre_prov" name="nombre_prov" />
              </div>
        	  <div class="col-lg-4 col-md-12">
                  <span class="help-block text-muted small-font" >  Teléfono</span>
                  <input type="text" class="form-control" id="telefono_prov" name="telefono_prov" />
              </div>
              <div class="col-lg-4 col-md-12">
                  <span class="help-block text-muted small-font" >  No. Cuenta</span>
                  <input type="text" class="form-control" id="cuenta_prov" name="cuenta_prov" />
              </div>  
     </div>
          </div>
    <div style="padding-top: 15px;">
                  <a href="#"><input type="submit"  class="btn btn-success float-right" value="   Registrar   " style="padding: 8px;"/></a>
    </div>             
                  
              </div>
</form>
  </div>


  <!-TABLA->
  
					
                  		

<div style="padding-left: 1%;">
	<div class="float-left">
          <div class="col-md-12">
		            <div class="input-group has-validation">
		              <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-search"></i></span>
		                <input type="text" class="form-control" id="busquedaProv" placeholder="Buscar...">
		             </div> 
	         </div>	
	     </div>    
   </div>             	
              	
<div style="padding-top: 2%">
<div style="padding:25px;">
<div id="tabla_busqueda_prov">
  
</div>
</div>
</div>
</div>	



<!-- MODALES -->
<!-- MODAL editar proveeedor -->
<div class="modal fade" id="editarProveedor" aria-labelledby="exampleModalLabel" aria-hidden="true">
							
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<form action="Ediciones/editarProveedor.php" method="POST">
  <div class="form-group">
    <input type="hidden" class="form-control" id="numeroProv" name="numeroProv">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Nombre</label>
    <input type="text" class="form-control" id="nombreProv" name="nombreProv">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Telefono</label>
    <input type="text" class="form-control" id="telefonoProv" name="telefonoProv">
  </div>
  <div class="form-group">Cuenta</label>
    <input type="text" class="form-control" id="cuentaProv" name="cuentaProv">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- MODAL ocultar proveedor -->

<div class="modal fade" id="ocultarProveedor" aria-labelledby="exampleModalLabel" aria-hidden="true">           
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONFIRMACIÓN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<form action="Eliminaciones/ocultarProveedor.php" method="POST">
  
<label for="formGroupExampleInput2">¿Desea eliminar a este proveedor?</label>
<input type="hidden" class="form-control" id="numeroProvEdit" name="numeroProv">
<input type="hidden" class="form-control" id="VistaProv" name="VistaProv" value="0">
    <input type="text" class="form-control" id="nombreProvEdit" name="nombreProvEdit" readonly>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>
  



<?php include 'inferior.php' ?>