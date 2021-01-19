<?php
//lama la conexion xon mysql
require 'conexion.php';
//Inicia la variable session
session_start();
//Asigna la variable session
$usuario = $_SESSION['login'];
//LLamada de datos por el metedo post
$sugerencia= $_POST['txtComentarios'];
$area =$_POST['area'];
$destinatario;
$envia=remitente();
//Valida la seleccion del combo box para seleccionar el area a la que se va enviar la sugerencia
if($area==("Emprendimiento"))
{
  $destinatario = 1;
}
else if ($area==("Hospitalidad"))
{
  $destinatario = 2;
}
//Llamada del procedimiento almacenado para agregar sugerencia
$sql="CALL SPSugerencia ('$envia','$destinatario','$sugerencia')";
//si se ejecuta el procedimiento se guarda el comentario en la bs de datos
if(mysqli_query($conexion,$sql)=== TRUE)
{
    echo "<script>alert('Comentario guardado');</script>";
    header("location:interfaz_est.php?user=$usuario");
}
//Funcion para determinar el remitente
function remitente ()
{
    //LLama la conexion
    require 'conexion.php';
    //usa la variable session para determinar el usuario que esta haciendo la sigerencia
    $usuario = $_SESSION['login'];
    //Sentemcia sql para determinar el id del usuario
    $rol=  "SELECT tbl_usuario.ID  FROM tbl_usuario, tbl_login where tbl_login.usuario = '$usuario' AND tbl_usuario.fk_login= tbl_login.ID";
    $consultarol = mysqli_query($conexion,$rol);
    $row = mysqli_fetch_array($consultarol);
    //Guarda el id de la consulta en una variable que retornara
    $rem = $row["ID"];
    return $rem;
}
 ?>
