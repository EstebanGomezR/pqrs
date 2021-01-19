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

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
        <p class="bg-success" align="center">
        <b>

        </b>
        </p>
    </h3>
                    </header>
                <!--Final header-->

        <!--Inicio del formulario de Menu-->
         <form method="POST" action="Contraseña.php">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="well"> <!--hace un sombreado a la columna-->
                            <center>
                                <h3><strong>Modificar contraseña</strong></h3><br>
                                <img src="img/clave.png" class="img-circle" width="150" height="150">

                                <br><br><br>

                                <form class="form-inline"  name="login">
                                      <p>Contraseña Antigua:</p>
                                        <input type="text" name="txtAntigua"/>
                                        <p>Contraseña nueva :</p>
                                        <input type="text" name="txtNueva" value=""/>
                                        <p>Confirmar Contraseña:</p>
                                        <input type="text" name="txtConfirmar" />
                                        <br/>  <br/>  <br/>
                                        <p><input type="submit" id="enviar" class="btn btn-success" value="Aceptar" name="btn_index">
                                        <p><input type="submit" onclick="action='interfaz_est.php'" class="btn btn btn-danger" value="Cancelar" name="btn_index">
                                        <hr/>
                                </form>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
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
