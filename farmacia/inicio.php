<?php  
include 'superior.php';
session_start();
error_reporting();
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

         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-light border-bottom navbar-color">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="container">
                          <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Venta de Medicina San Rafael</h1>
                            
                      </div>
                  </div>
               
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="Contenido/img/logoexpor.png" class="img-fluid rounded-circle avatar mr-2"
                       />
                    <?php echo $_SESSION['confirmusuario'] ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item " href="perfil.php"><i class="fas fa-user"></i>  Mi perfil</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="cerrar_sesion.php"><i class="fas fa-power-off"></i>  Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Fin Navbar -->
 <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

              

              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Caja</h6>
                                        <h3 class="font-weight-bold">$50000</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 50.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Productos Activos</h6>
                                        <h3 class="font-weight-bold">100</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 25.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Ventas Efectuadas</h6>
                                        <h3 class="font-weight-bold">2500</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 75.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Número de Proveedores</h6>
                                        <h3 class="font-weight-bold">500</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 15.50%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

              <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8 my-3">
                              <div class="card rounded-0">
                                  <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Ventas Realizadas por Mes</h6>
                                  </div>


                                    <div class="dx-viewport demo-container">
                                       <div id="chart"></div>
                                    </div>
                              </div>
                          </div>
                          
                            <div class="card rounded-0 col-lg-3 my-3 ml-5">
                                <div class="card-header bg-light">
                                    <h6 class="font-weight-bold mb-0">Por Pagar</h6>
                                </div>
                                <div class="card-body pt-2">

                                   <li class="list-group">
                                     <div class="d-flex border-bottom py-2">
                                         <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0 align-rigth">Proveedor 1</h6><button class="btn-success btn-block btn btn-sm">Pagar</button>
                                              <small class="d-block text-danger">Q.350.00</small>
                                        </div>
                                      </div>
                                   </li>
                                    <li class="list-group">
                                     <div class="d-flex border-bottom py-2">
                                         <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0 align-rigth">Proveedor 2</h6><button class="btn-success btn-block btn btn-sm">Pagar</button>
                                              <small class="d-block text-danger">Q.350.00</small>
                                        </div>
                                      </div>
                                   </li>
                                    <li class="list-group">
                                     <div class="d-flex border-bottom py-2">
                                         <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0 align-rigth">Proveedor 3</h6><button class="btn-success btn-block btn btn-sm">Pagar</button>
                                              <small class="d-block text-danger">Q.350.00</small>
                                        </div>
                                      </div>
                                   </li>
                                    <li class="list-group">
                                     <div class="d-flex border-bottom py-2">
                                         <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0 align-rigth">Proveedor 4</h6><button class="btn-success btn-block btn btn-sm">Pagar</button>
                                              <small class="d-block text-danger">Q.350.00</small>
                                        </div>
                                      </div>
                                   </li>


                                    </div>
                                    
                                </div>
                           
                          </div>
                      </div>
              </section>

        </div>

        </div>
    </div>









       <?php  
include 'inferior.php';
?>