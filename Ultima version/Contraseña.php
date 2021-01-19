<?php
require 'conexion.php';
session_start();
$usuarios=$_SESSION['login'];
$verificado=verificacio();
$vieja = $_POST['txtAntigua'];
$confirmar = $_POST['txtConfirmar'];
$nueva = $_POST['txtNueva'];
echo $verificado;
if($nueva==$confirmar){
  if ($vieja==$verificado)
  {

    $sql="CALL SPContrasenaC ('$nueva','$usuarios')";
    if(mysqli_query($conexion,$sql)=== TRUE)
    {
      echo"<script type='text/javascript'>".
     "var mensaje = confirm('Contraseña modificada');
     if (mensaje) {
     window.location.href='interfaz_est.php'
     }
     else {
     window.location.href='interfaz_est.php';
     }
      </script>";
      }
    }
    else{
      echo"<script type='text/javascript'>".
     "var mensaje = confirm('Las contraseñas no coincide con la registrada');
     if (mensaje) {
     window.location.href='usuario.php'
     }
     else {
     window.location.href='interfaz_est.php';
     }
      </script>";
    }
  }
  else
  {
    echo"<script type='text/javascript'>".
   "var mensaje = confirm('Las contraseñas no coinciden');
   if (mensaje) {
   window.location.href='usuario.php'
   }
   else {
   window.location.href='interfaz_est.php';
   }
    </script>";
  }
function verificacio(){
require 'conexion.php';
$usuarios=$_SESSION['login'];
  $sql="CALL SPVerificar('$usuarios')";
  $consultarol = mysqli_query($conexion,$sql);
  $row = mysqli_fetch_array($consultarol);
  $rem = $row["clave"];
  return $rem;

}
 ?>
