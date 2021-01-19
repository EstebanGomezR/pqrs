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
        <!-- Bootstrap core CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		    <link rel="stylesheet" type="txt/css" href="css.css">
        <!-- Latest compiled and minified JavaScript -->
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
				       margin-left: 67%;
               }
				     li a {
					     display: block;
					     color: white;
					     text-align: center;
					     padding: 14px 16px;
					     text-decoration: none;
					     }
				       /* Change the link color to #111 (black) on hover */
				     li a:hover {
					     background-color: #111;
				       }
             .boton_personalizado{
                text-decoration: none;
                padding: 8px;
                font-weight: 150;
                font-size: 10px;
                color: #ffffff;
                background-color: green;
                border-radius: 6px;
                border: 2px solid;
                }
		    </style>
    </head>
    <body>
      <div class="container">
      <!--Inicio header-->
        <header>
          <div class="row">
            <div class="col-md-2"><img src="img/logo_pag.png"></div>
              <div class="col-md-8"><font color="#000"><center><strong><h1>Politecnico Internacional</h1></strong><h3>Sugerencias y reclamos</h3></center></font></div>
                <div class="col-md-2"></div>
          </div>
          <hr>
          </header>
      <!--Final header-->
          <div>
		        <ul>
              <li><a href="interfaz_adm.php">Inicio</a></li>
			        <li><a href="Registroad.php">Agregar</a></li>
              <li><a href="Bloquear.php?user2=0">Bloquear</a></li>
			        <li class="f"><a href="about.asp">Cerrar sesión</a></li>
		        </ul>
	        </div>
          <!--Inicio del formulario de Menu-->
          <div class="row">
            <div class="col-md-4"></div>
					  <div class="col-md-4">
						  <div class="well"> <!--hace un sombreado a la columna-->
                <center>
                  <h3><strong>Publicaciones</strong></h3><br>
                  <table>
                  <?php
                   //LLama la conexion
                    require ('conexion.php');
                    //Sentencia sql que carga las sugerencias
                    $sql="SELECT texto from tbl_sugerencia";
                    //Ejecuta la consulta
                    $consulta= mysqli_query($conexion,$sql);
                    //Mientras la consulta se realize crea un form con un botton para cargar el comentario con su respectivo remitente
                    while ($row=mysqli_fetch_array($consulta)) {
                    echo "<form action='Comentario_com.php' method='POST'>";
                    echo "<tr>" ;
                    echo "<td > <hr/>" ;
                    $text=$row ['texto'];
                    echo "<p class='comment'>";
                    echo $row ['texto'];
                    echo "</p >";
                  ?>
                    <input  type="hidden" name="Comment" value="<?= $row ['texto']; ?>">
                    <input type="submit"  class="boton_personalizado" value="Ver comentario" name="btndsad">
                    <input type="hidden" name="user2" value="<?php echo $oee ?>"/>
                  <?php
                    echo "</td >" ;
                    echo "</tr>" ;
                    echo"</form>";
                    }
                  ?>
                  </table>
                  <hr/>
                  <hr/>
                </center>
              </div>
					  </div>
          </div>
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
