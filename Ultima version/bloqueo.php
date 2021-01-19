<?php
function jajaja(){
//lama la conexion xon mysql
require 'conexion.php';
$User=$_POST['usuari'];
$sql="CALL SPIdLogin ('$User')";
//si se ejecuta el procedimiento se guarda el comentario en la bs de datos
$row=mysqli_query($conexion,$sql);
$add = mysqli_fetch_array($row);
$id=$add["ID"];
return $id;
}
require 'conexion.php';
$a=jajaja();
$sql="CALL SPModEst ('$a')";
//si se ejecuta el procedimiento se guarda el comentario en la bs de datos
if($row=mysqli_query($conexion,$sql)){
  echo"<script type='text/javascript'>".
 "var mensaje = confirm('Se ha baneado al estudiante');
 if (mensaje) {
 window.location.href='interfaz_adm.php'
 }
 else {
 window.location.href='interfaz_adm.php';
 }
  </script>";


}

echo jajaja();
 ?>
