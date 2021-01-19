<?php
//LLama la Conexion
require 'conexion.php';
//Asigna las variables por el metodo post
$sugerencia= $_POST['Comment'];
$usuario = $_POST['user2'];
//Llama al procedimiento almacenado para eliminar un comentario
$sql="CALL SPEliminarS('$sugerencia')";
//Si el procedimiento se realiza elimina el comentario
if(mysqli_query($conexion,$sql)=== TRUE)
{
    echo "<script>alert('Comentario guardado');</script>";
    header("location:interfaz_est.php?user=$usuario");
}
