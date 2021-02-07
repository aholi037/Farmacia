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
                            <h1 class="font-weight-bold mb-0">Compras</h1>
                            
                      </div>
                  </div>    
              </div>
            </div>
          </nav>
          <div id="content" class="bg-grey w-100">

<div style="padding: 2% 2% 2% 2%;">
<form action="Registros/registro_compra.php" method="POST" class=" col-lg-12 card-body card" style="width: 100%; border-width: 3px; margin-top: 20px;">
<div class="panel panel-default" >
 <div class="panel-heading">
     
      <div class="row">
              <div class="col-lg-12">
                <span class="help-block text-muted small-font" > Proveedor</span>
                  <div class="form-group">
            <select class="form-control" id="proveedorcompra" name="proveedorcompra">
              <option>...</option>
              <?php
                
                include 'conectar.php';
                $sentencia = "SELECT * from proveedores WHERE vista='1'";
                $resul = mysqli_query($conexion,$sentencia);
                  while ($filas=mysqli_fetch_array($resul)) {?>
                <option>
                    <?php 
                        echo $filas['nombre_prov'];
                      }
                ?>
                </option>
            </select>
          </div>
              </div>
          </div>
     <div class="row ">
      
              <div class=" col-lg-6 col-md-12">
                  <span class="help-block text-muted small-font" > Cantidad</span>
                  <input type="text" class="form-control" id="cantidadcompra" name="cantidadcompra" />
              </div>
        <div class="col-lg-6 col-md-12">
                  <span class="help-block text-muted small-font" >  Abono</span>
                  <input type="text" class="form-control" id="abonocompra" name="abonocompra" />
              </div>  
              <div class="col-lg-6 col-md-12">
                  <input type="hidden" class="form-control" id="usuariocompra" name="usuariocompra" value="<?php echo $_SESSION['confirmusuario'] ?>"/>
              </div>
     </div>
          </div>
    <div style="padding-top: 15px;">
                  <input type="submit"  class="btn btn-success float-right" value="Realizar Compra" style="padding: 8px;"/>
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
		                <input type="text" class="form-control" placeholder="Buscar...">
		             </div> 
	         </div>	
	     </div>    
   </div>             	
              	
<div style="padding-top: 2%">
<div style="padding:25px;">
<table class="table table-hover table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<th scope="row">xd</th>
    	<td>xd</td>
    	<td>xd</td>
    	<td>xd</td>
    </tr>
    <tr>
    	<th scope="row">xd</th>
    	<td>xd</td>
    	<td>xd</td>
    	<td>xd</td>
    </tr>
    <tr>
    	<th scope="row">xd</th>
    	<td>xd</td>
    	<td>xd</td>
    	<td>xd</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>	





<?php include 'inferior.php' ?>