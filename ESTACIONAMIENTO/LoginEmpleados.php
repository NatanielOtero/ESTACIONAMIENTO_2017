<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="funciones.js">
    </script>
  </head>
  <body style="background:#100a26">
    <header>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header" style="color:white">
            <span class="navbar-brand">Estacionamiento</span>
          </div>
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li class="active"><a href="LoginEmpleados.php">Empleados</a></li>
            <li><a href="IngresoAutos.php">Autos</a></li>
            <li><a href="Administracion.php">Administracion</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <section class="main container">
      <div class="row">
        <div class="col-xs-12">
          <div class="container" style="background-color:white;border-0">
            <form method="post" id="form">
                <div class="input-group">
                    <br>
                    <label class="sr-only" for="nombre">Legajo</label>
                    <input class="form-control" type="text" name="legajoEmp" placeholder="Legajo" id="nombre">
                    <label  class="sr-only" for="pass">Contraseña</label>
                    <input class="form-control" type="password" name="pass" placeholder="Contraseña">
                </div>
                    <br>
                    <input class="btn-success" type="button" name="Enviar" value="Enviar" onclick="LogearEmpleado()">
                    <input class="btn-danger" type="reset" name="Borrar" value="Borrar">
              </form>
          </div>
        </div>
      </div>
      <div class="container" style="background-color:black;color:white">
          <h1>
            <div  id="resp">

            </div>
          </h1>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
