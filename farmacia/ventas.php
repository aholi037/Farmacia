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




<?php include 'inferior.php' ?>