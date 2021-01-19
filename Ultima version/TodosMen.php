<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/examples/navbar-fixed-top/ -->
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
				      margin-left: 74%;
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
          <li><a href="interfaz_est.php?user=">Inicio</a></li>
			    <li><a href="usuario.php">Cuenta</a></li>
			    <li class="f"><a href="index.php">Cerrar sesión</a></li>
		    </ul>
	    </div>
      <!--Inicio del formulario de Menu-->
      <form action="comentarios.php" method="POST">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
					  <div class="well"> <!--hace un sombreado a la columna-->
              <center>
                <h3><strong> Publicaciones</strong></h3><br>
                  <form action="Eliminar_coment.php" method="POST">
                    <table>
                    <?php
                      //Lama la conexio con mysql
                      require ('conexion.php');
                      //Sentencia sql para cargar sugerenecias
                      $sql="SELECT tbl_sugerencia.texto, tbl_area.area from tbl_sugerencia, tbl_area where tbl_sugerencia.fk_destinatario=tbl_area.id";
                      $consulta= mysqli_query($conexion,$sql);
                      //Mientra la consulta se realize crea forms con los datos que trae
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
                        echo "<p class='commenta'>";
                        echo $row ['area'];
                        echo "</p >";
                        echo "</td >" ;
                        echo "</tr>" ;
                        echo "</form>";
                                      }
                    ?>
                    </table>
                    </form>
                    <hr/>
              </center>
            </div>
					</div>
					<div class="col-md-4"></div>
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
