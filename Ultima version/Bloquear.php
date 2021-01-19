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
				    li a:hover {
					         background-color: #111;
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
                </header>
                <!--Final header-->
                <!--Menu-->
                <div>
		                <ul>
                      <li><a href="interfaz_adm.php">Inicio</a></li>
                      <li><a href="Registroad.php">Agregar</a></li>
                      <li><a href="Bloquear.php?user2=0">Bloquear</a></li>
			                <li class="f"><a href="about.asp">Cerrar sesión</a></li>
		                </ul>
	              </div>
                <!--Inicio del formulario de Menu-->
                <form action="bloqueo.php" method="post">
                  <div class="row">
                    <div class="col-md-4"></div>
					          <div class="col-md-4">
								      <div class="well"> <!--hace un sombreado a la columna-->
                        <center>
                        <?php
                        //Variable de si se ha enviado un usuario para reportar
                        $user;
                        $user = $_GET['user2'];
                        ?>
                          <h3><strong>Bloquear</strong></h3><br>
                            <p>Documento</p></br>
                            <input type="text" value=<?php echo $user ?> name="usuari"></br></br>
                            <p><input type="submit" id="enviar" class="btn btn-success" value="Aceptar" name="btn_index">
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
