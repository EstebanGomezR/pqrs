<?php
require ('conexion.php');
$documento=$_POST["txtUsera"];
$sql="SELECT ID from tbl_login where usuario ='$documento'";
$consulta= mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($consulta)){
     echo "no se puede";
   }
   else{
     $sql="INSERT INTO tbl_login(usuario,clave) values ('$documento','$documento')";
     if($consulta= mysqli_query($conexion,$sql)){
       $sql2="SELECT ID from tbl_login where usuario ='$documento'";
       $consulta2= mysqli_query($conexion,$sql2);
       if($row=mysqli_fetch_array($consulta2)){
            $rol;
            if(val_cargo()==1 || val_cargo()==2){
              $rol=2;
            }
            else if (val_cargo()==3 ) {
              $rol=3;
            }
            $id_login= $row['ID'];
            $nom= val_nomb();
            $ape=val_apellido();
            $log=$id_login;
            $car= val_cargo();
            $are= val_area();
            $sql3="CALL SPIngresar2 ('$nom','$ape','$id_login','$rol','1','$car','$are')";
            if(mysqli_query($conexion,$sql3)=== TRUE)
            {
              echo"<script type='text/javascript'>".
             "var mensaje = confirm('Se ha agregado al estudiante');
             if (mensaje) {
             window.location.href='interfaz_adm.php'
             }
             else {
             window.location.href='interfaz_adm.php';
             }
              </script>";


            }
            else {
              echo "errer";

            }



          }
       }
   }
function val_cargo(){
  require ('conexion.php');
  $cargo=$_POST["cargo"];
  $id_cargo;
  $sql="SELECT id from tbl_cargo where cargo ='$cargo'";
  $consulta= mysqli_query($conexion,$sql);
  if($row=mysqli_fetch_array($consulta)){
       $id_cargo= $row['id'];
     }
  return $id_cargo;


}
function val_area(){
  require ('conexion.php');
  $area=$_POST["area"];
  $id_area;
  $sql="SELECT id from tbl_area where area ='$area'";
  $consulta= mysqli_query($conexion,$sql);
  if($row=mysqli_fetch_array($consulta)){
       $id_area= $row['id'];
     }
  return $id_area;
}



function val_nomb(){
require ('conexion.php');
$nombre=$_POST["txtNombre"];
$id_nombre;
$sql="SELECT id from tbl_nombre where nombre ='$nombre'";
$consulta= mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($consulta)){
     $id_nombre= $row['id'];
   }
   else{
     $sql="INSERT INTO tbl_nombre(nombre) values ('$nombre')";
     if($consulta= mysqli_query($conexion,$sql)){
       $sql2="SELECT id from tbl_nombre where nombre ='$nombre'";
       $consulta2= mysqli_query($conexion,$sql2);
       if($row=mysqli_fetch_array($consulta2)){
            $id_nombre= $row['id'];
          }
       }
   }
   return $id_nombre;
}

function val_apellido(){
require ('conexion.php');
$apellido=$_POST["txtApellido"];
$id_apellido;
$sql="SELECT id from tbl_apellido where apellido ='$'";
$consulta= mysqli_query($conexion,$sql);
if($row=mysqli_fetch_array($consulta)){
     $id_apellido= $row['id'];
   }
   else{
     $sql="INSERT INTO tbl_apellido(apellido) values ('$apellido')";
     if($consulta= mysqli_query($conexion,$sql)){
       $sql2="SELECT id from tbl_apellido where apellido ='$apellido'";
       $consulta2= mysqli_query($conexion,$sql2);
       if($row=mysqli_fetch_array($consulta2)){
            $id_apellido= $row['id'];
          }
       }
   }
   return $id_apellido;
}


?>
