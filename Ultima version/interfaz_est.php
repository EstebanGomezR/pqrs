<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Diseño y Publicidad" content="">
        <meta name="Central de Diseño" content="">
        <link rel="icon" href="img/favicon.ico">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		    <link rel="stylesheet" type="txt/css" href="css.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		    <style>
				    ul {
				       list-style-type: none;
				       margin: 0;
				       padding: 0;
				       overflow: hidden;
				       background-color: #0C4E81;
				       }
				    li {
				       float: left;
				       }
				    .f {
				       margin-left: 74%;
				       }
				    li a {
					     display: block;
					     color: white;
					     text-align: center;
					     padding: 14px 16px;
					     text-decoration: none;
					       }
				    li a:hover {
					     background-color: #111;
				         }
            .comment{
               font-size: 20px;
               font-family: cursive;
                 }
            .commenta{
                  font-size: 10px;
                  font-family: cursive;
                  text-align: right;
                  color: red;
                    }
            .boton_personalizado{
               text-decoration: none;
               padding: 8px;
               font-weight: 150;
               font-size: 10px;
               color: #ffffff;
               background-color: red;
               border-radius: 6px;
               border: 2px solid;
                }
		    </style>
      </head>
        <body>
          <?php
            session_start();
            $oee = $_SESSION['login'];
          ?>
          <div class="container">
                <!--Header-->
                <header>
                  <div class="row">
                    <div class="col-md-2"><img src="img/logo_pag.png"></div>
                    <div class="col-md-8"><font color="#000"><center><strong><h1>Politecnico Internacional</h1></strong><h3>Sugerencias y reclamos</h3></center></font></div>
                    <div class="col-md-2"></div>
                  </div>
                  <hr>
                </header>
                <!--Menu-->
                  <div>
		                   <ul>
                        <li><a href="interfaz_est.php?user=">Inicio</a></li>
                        <li><a href="usuario.php">Cuenta</a></li>
                        <li class="f"><a href="index.php">Cerrar sesión</a></li>
		                   </ul>
	                </div>
        <!--Inicio del formulario de Menu-->
                  <form action="comentarios.php" method="POST">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="well"> <!--hace un sombreado a la columna-->
                          <center>
                            <h3><strong>Sugerencias</strong></h3><br>
                            <img src="img/sugerencias.png" class="img-circle" width="150" height="150">
                            <br><br><br>
                            <form>
                              <p>Dirigida a: </p>
                              <select name="area">
                              <option value="">Seleccion</option>
                                <?php
                                  require ('conexion.php');
                                  $sql="SELECT area from tbl_area";
                                  $consulta= mysqli_query($conexion,$sql);
                                  while ($row=mysqli_fetch_array($consulta))
                                  {
                                  echo "<option >" ;
                                  echo $row ['area'];
                                  echo "</option>" ;
                                  }
                                ?>
                              </select>
                              <br/>
                              <br/>
                              <p>Agrege su sugerencia: </p>
                              <textarea name="txtComentarios" rows="6" cols="30" placeholder="Escribe aquí tus comentarios"></textarea>
                              <br/>  <br/>  <br/>
                              <p><input type="submit" id="enviar" class="btn btn-success" value="Aceptar" name="btn_index">
                              <input type="hidden" name="user" value="<?php echo $oee ?>"/>
                             </form>
                             <hr/>
                          </center>
                        </div>
                      </div>
                      <div class="col-md-4">
					              <div class="well"> <!--hace un sombreado a la columna-->
                          <center>
                            <h3><strong>Mis publicaciones</strong></h3><br>
                              <form action="Eliminar_coment.php" method="POST">
                                <table>
                                  <?php
                                    require ('conexion.php');
                                    $sql="SELECT texto from tbl_sugerencia, tbl_usuario, tbl_login where tbl_usuario.fk_login = tbl_login.ID and tbl_sugerencia.fk_remitente=tbl_usuario.ID and tbl_login.usuario=".$oee;
                                    $consulta= mysqli_query($conexion,$sql);
                                    while ($row=mysqli_fetch_array($consulta)) {
                                      $text=$row ['texto'];
                                      echo "<tr>" ;
                                      echo "<td > <hr/>" ;
                                  ?>
                                      <form >
                                  <?php
                                       echo "<p class='comment'>";
                                       echo $row ['texto'];
                                       echo "</p >";
                                  ?>
                                       <input  type="hidden" name="Comment" value="<?= $row ['texto']; ?>">
                                       <input type="submit"  class="boton_personalizado" value="Eliminar" name="btndsad">
                                       <input type="hidden" name="user2" value="<?php echo $oee ?>"/>
                                  <?php
                                      echo "</td >" ;
                                      echo "</tr>" ;
                                      echo "</form>";
                                    }
                                   ?>
                                </table>
                                <hr/>

                              </form>
                            </center>
                        </div>
        					    </div>
					            <div class="col-md-4">
							          <div class="well"> <!--hace un sombreado a la columna-->
                          <center>
                            <h3><strong>Publicaciones Recientes</strong></h3><br>
                            <form action="TodosMen.php" method="POST">
                            <table  cellpadding="5">
                              <?php
                                require ('conexion.php');
                                $sql="SELECT tbl_sugerencia.texto, tbl_area.area from tbl_sugerencia, tbl_area where tbl_sugerencia.fk_destinatario=tbl_area.id";
                                $consulta= mysqli_query($conexion,$sql);
                                $i=0;
                                while ($row=mysqli_fetch_array($consulta))
                                {
                                  $i++;
                                  $text=$row ['texto'];
                                  echo "<tr>" ;
                                  echo "<td > <hr/>" ;
                              ?>
                                <form >
                              <?php
                                 echo "<p class='comment'>";
                                 echo $row ['texto'];
                                 echo "</p >";
                                 echo "<p class='commenta'>";
                                 echo $row ['area'];
                                 echo "</p >";
                                 echo "</td >" ;
                                 echo "</tr>" ;
                                  if($i==5)
                                  {
                                    break;
                                  }
                                echo "</form>";
                                 }
                              ?>
                            </table>
                            <input type="hidden" name="user2" value="<?php echo $oee ?>"
                            <p><input type="submit"   onclick="action='TodosMen.php'"class="btn btn-success" value="Ver todas" name="btnAceptar2">
                            </form>
                              <hr/>
                          </center>
                        </div>
					            </div>
                    </div>
                  </form>
        <!--Final del formulario de Menu-->
        <!--Inicio footer-->
                <footer>
                    <p align="center"><i>Creado por <strong>Julian Fula</strong></i> </p>
                    <p align="center"><i>Creado por <strong>Jose Esteban Gomez</strong></i> </p>
                    <p align="center"><i>Creado por <strong>Andres Villanueva</strong></i> </p>
               </footer>
                <!--Final footer-->
            </div>
    </body>
</html>
