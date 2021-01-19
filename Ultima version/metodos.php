<?php
//Validacion de Login
//Llama la conexion
require 'conexion.php';
//Asigna las variables del formulario de login
$usuario =  $_POST["usuario"];
$clave =  $_POST["clave"];
//Inicia la variable de Session
session_start();
$rolo;
//Sentencia sql para validar que los datos esten en la base de datos
$q= "SELECT COUNT(*) as contar FROM tbl_login where usuario = '$usuario' and clave ='$clave'";
$consulta= mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);
//Valida si la consulta es exitosa ademas el metodo rola devuelve el valor que indica a que rol pertenece el usuario
if($array['contar']>0 && rola()==1 && Bloqueo()==1)
  {
    //Asigna el usuario a la variable de session
    $_SESSION['login']= $usuario;
    //Redirecciona a la pg de administrador
    header("location:interfaz_adm.php");
  }
else if($array['contar']>0 && rola()==2 &&  Bloqueo()==1)
  {
    //Asigna el usuario a la variable de session
    $_SESSION['login']= $usuario;
    //Redirecciona a la pg de profesor
    header("location:interfaz_prof.php");
  }
else if($array['contar']>0 && rola()==3 &&  Bloqueo()==1)
  {
    //Asigna el usuario a la variable de session
    $_SESSION['login']= $usuario;
    //Redirecciona a la pg de estudiante
    header("location:interfaz_est.php");
  }
else if($array['contar']>0 && rola()==3 &&  Bloqueo()!=1)
  {
      echo"<script type='text/javascript'>".
      "var mensaje = confirm('Su usuario ha sido baneado por hijo de perra NO JODA!!');
      if (mensaje) {
        window.location.href='index.php'
      }
      else {
        window.location.href='index.php';
   }
    </script>";
    }
else
  {
    //script de alerta que se produce cuando los datos no son correctos
    echo"<script type='text/javascript'>".
   "var mensaje = confirm('Datos del LOGIN incorretos');
   if (mensaje) {
   window.location.href='index.php'
   }
   else {
   window.location.href='index.php';
   }
    </script>";
  }

//Funcion para determinar que rol tiene el usuario
function rola ()
  {
    //Llama la cinexion
    require 'conexion.php';
    $usuario =  $_POST["usuario"];
    $clave =  $_POST["clave"];
    //Realiza la consulta
    $rol=  "SELECT fk_rol as rol FROM tbl_usuario, tbl_login where tbl_login.usuario = '$usuario' and tbl_login.clave ='$clave' AND tbl_usuario.fk_login= tbl_login.ID";
    $consultarol = mysqli_query($conexion,$rol);
    $row = mysqli_fetch_array($consultarol);
    $rolo = $row["rol"];
    //Devuelve el valor de la consulta
    return $rolo;
  }
  function bloqueo()
  {
    require 'conexion.php';
    $usuario =  $_POST["usuario"];
    $clave =  $_POST["clave"];
    //Realiza la consulta
    $rol=  "SELECT fk_estado as estado FROM tbl_usuario, tbl_login where tbl_login.usuario = '$usuario' and tbl_login.clave ='$clave' AND tbl_usuario.fk_login= tbl_login.ID";
    $consultarol = mysqli_query($conexion,$rol);
    $row = mysqli_fetch_array($consultarol);
    $estado = $row["estado"];
    return $estado;

    }




 ?>
