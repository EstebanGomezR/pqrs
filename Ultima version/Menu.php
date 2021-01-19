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
				    margin-left: 82%;
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
                    
                
    <h3>    
        <p class="bg-danger" align="center">
        <b>
            <?php
            session_start();
            ob_start();
                if(isset($_SESSION['sesion_exito']))
                {
                    //if($_SESSION['sesion_exito']==0) Como dije en el video, esto no es estrictamente necesario
                    // {echo "inicie sesion por favor";} Ya que si lo dejamos, siempre que accedemos a index arroja error.
                    if($_SESSION['sesion_exito']==2)
                        {echo "Los campos SON OBLIGATORIOS";}
                    if($_SESSION['sesion_exito']==3)
                        {echo "DATOS INCORRECTOS";}
                }
                else
                {
                    $_SESSION['sesion_exito']=0;
                }
                
            ?>
        </b>
        </p>
        <p class="bg-success" align="center">
        <b>
            <?php
                if($_SESSION['sesion_exito']==4)
                    {echo "GRACIAS POR USAR NUESTROS SERVICIOS";}
                $_SESSION['sesion_exito']=0; //Despues de confirmar el error, igualo lo variable a 0
            ?>
        </b>
        </p>
    </h3>
                    </header>
                <!--Final header-->
    <div>
		<ul>
			<li><a href="default.asp">Cuenta</a></li>

			<li class="f"><a href="about.asp">Cerrar sesión</a></li>	
		</ul>
	</div>	
        <!--Inicio del formulario de Menu-->
        <form>
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="well"> <!--hace un sombreado a la columna-->
                            <center>
                                <h3><strong>Sugerencias</strong></h3><br>
                                <img src="img/sugerencias.png" class="img-circle" width="150" height="150">
                                <br><br><br>
                                <form>
                                        <select>
                                        <option value="volvo">Profesor 1</option>
                                        <option value="saab">Profesor 2</option>
                                        <option value="mercedes">Profesor 3</option>
                                        <option value="audi">Profesor 4</option>
                                        </select>
                                        <br/>
                                        <br/>
                                        <p>Agrege su sugerencia: </p>
                                        <input type="textarea" />
                                         <br/>  <br/>  <br/>
                                        <p><input type="submit" id="enviar" class="btn btn-success" value="Aceptar" name="btn_index">
                                </form>
                                <hr/>

                            </center>
                        </div>
                    </div>
                    <div class="col-md-4">
					
					 <div class="well"> <!--hace un sombreado a la columna-->
                            <center>
                                <h3><strong>Mis publicaciones</strong></h3><br>
                                <form>
                                        
                                </form>
                                <hr/>

                            </center>
                        </div>
					
					</div>
					
					 <div class="col-md-4">
								<div class="well"> <!--hace un sombreado a la columna-->
                            <center>
					 
                                <h3><strong>Publicaciones Recientes</strong></h3><br>
                               
                                        <p><input type="submit" id="enviar" class="btn btn-success" value="Ver todas" name="btn_index">
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