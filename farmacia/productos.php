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
                            <h1 class="font-weight-bold mb-0">Registro de Productos</h1>
                            
                      </div>
                  </div>    
              </div>
            </div>
          </nav>
          <div id="content" class="bg-grey w-100">

<div style="padding: 2% 2% 2% 2%;">
<form action="#" class=" col-lg-12 card-body card" style="width: 100%; border-width: 3px; margin-top: 20px;">
<div class="panel panel-default" >
 <div class="panel-heading">
     
      	  <div class="row">
             <div class=" col-lg-8 col-md-12">
                  <span class="help-block text-muted small-font" > Nombre</span>
                  <input type="text" class="form-control"/>
             </div>
             <div class="col-lg-2">
	                <span class="help-block text-muted small-font" > Estante</span>
	                  <div class="form-group">
	            			<select class="form-control" id="exampleFormControlSelect1">
					              <option>...</option>
					              <option>A</option>
					              <option>B</option>
					              <option>C</option>
					              <option>D</option>
					              <option>E</option>
					              <option>G</option>
					              <option>H</option>
	           				 </select>
	         			</div>
             </div>
             <div class="col-lg-2">
	                <span class="help-block text-muted small-font" > Fila</span>
	                  <div class="form-group">
	            			<select class="form-control" id="exampleFormControlSelect1">
					              <option>...</option>
					              <option>1</option>
					              <option>2</option>
					              <option>3</option>
					              <option>4</option>
					              <option>5</option>
					              <option>6</option>
	           				 </select>
	         			</div>
             </div> 
          </div>
     <div class="row">
     		 <div class="col-lg-3 col-md-12">
                  <span class="help-block text-muted small-font" >  Cantidad</span>
                  <input type="text" class="form-control"/>
             </div> 
             <div class="col-lg-5">
	                <span class="help-block text-muted small-font" > Tipo</span>
	                  <div class="">
	            			<select class="form-control" id="exampleFormControlSelect1">
					              <option>...</option>
					              <option>Tipo1</option>
					              <option>Tipo2</option>
					              <option>Tipo3</option>
					              <option>Tipo4</option>
	           				 </select>
	         			</div>
             </div>
     		 <div class=" col-lg-2 col-md-12">
                  <span class="help-block text-muted small-font" > Precio de Compra</span>
                  <input type="text" class="form-control"/>
             </div>
             <div class=" col-lg-2 col-md-12">
                  <span class="help-block text-muted small-font" > Precio de Venta</span>
                  <input type="text" class="form-control"/>
             </div>  
     </div>
     <div class="row">
     		 <div class="col-lg-8">
	                		<span class="help-block text-muted small-font" > Proveedor</span>
	                 		 <div class="form-group">
	            			<select class="form-control" id="exampleFormControlSelect1">
					              <option>...</option>
              <?php
                
                include 'conectar.php';
                $sentencia = "SELECT * from proveedores";
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
     	     <div class="col-lg-4">
	                <span class="help-block text-muted small-font" > Categoría</span>
	                  <div class="form-group">
	            			<select class="form-control" id="exampleFormControlSelect1">
					              <option>...</option>
					              <option>Categoría 1</option>
					              <option>Categoría 2</option>
					              <option>Categoría 3</option>
					              <option>Categoría 4</option>
	           				 </select>
	         			</div>
             </div> 
               
     </div>
     <div class="row form-group">
        	
     </div>
     
          </div>



    <div style="padding-top: 2px;">
                  <a href="#"><input type="submit"  class="btn btn-success float-right" value="    Registrar    " style="padding: 8px;"/></a>
    </div>             
                  
              </div>
</form>
  </div>


  <!-TABLA->
  
					
                  		

<div style="padding-left: 5px;">
	<div class="float-left">
          <div class="col-md-12">
		            <div class="input-group has-validation">
		              <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-search"></i></span>
		                <input type="text" class="form-control" placeholder="Buscar...">
		             </div> 
	         </div>	
	     </div>    
   </div>             	
              	
<div style="padding-top: 3%">
<div style="padding:25px 25px 0px 1.7%;">
<table class="table table-hover table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th >No.</th>
      <th >Código</th>
      <th >Nombre</th>
      <th >Cantidad</th>
      <th >Fecha-hora</th>
      <th >Estante y Fila</th>
      <th >Editar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<td>1</td>
    	<td>45698756</td>
    	<td>Alguna Medicina xd</td>
    	<td>15</td>
    	<td>19/01/2021 20:54</td>
    	<td>A1</td>
    	 <td>  
             <a><button type='button' class='btn btn-success'>Modificar</button></a> 
             <a><button type='button' class='btn btn-danger'>Eliminar</button></a>
         </td>
    </tr>
    <tr>
    	<td>2</td>
    	<td>45698756</td>
    	<td>Alguna Medicina x2</td>
    	<td>23</td>
    	<td>19/01/2021 20:54</td>
    	<td>B1</td>
    	 <td>  
             <a><button type='button' class='btn btn-success'>Modificar</button></a> 
             <a><button type='button' class='btn btn-danger'>Eliminar</button></a>
         </td>
    </tr>
    <tr>
    	<td>3</td>
    	<td>45698756</td>
    	<td>Alguna Medicina x3</td>
    	<td>35</td>
    	<td>19/01/2021 20:54</td>
    	<td>C1</td>
    	 <td>  
             <a><button type='button' class='btn btn-success'>Modificar</button></a> 
             <a><button type='button' class='btn btn-danger'>Eliminar</button></a>
         </td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>	




<?php include 'inferior.php' ?>