<?php require_once "VerificarAdmin.php"; ?>
<!DOCTYPE html>
<html lang="en">
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
  </head>
  <body style="background:#100a26">
    <header>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header" style="color:white">
            <span class="navbar-brand">Estacionamiento</span>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="LoginEmpleados.php">Empleados</a></li>
            <li><a href="IngresoAutos.php">Autos</a></li>
            <li class="active"><a href="Administracion.php">Administracion</a></li>
          </ul>
          <ul class="nav navbar-inverse navbar-right">
              <li><a href="LogOut.php">Log Out</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container">
      <form  action="Administracion.php" method="post">
        <ul class="list-group">
            <br>
            <li><input type="submit" class="btn-success"  value="Alta" name="Alta"></li>
            <br>
            <li><input type="submit" class="btn-success"  value="Baja" name="Baja"></li>
            <br>
            <li><input type="submit" class="btn-success"  value="Mod" name="Mod"></li>
            <br>
        </ul>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
<?php

if (isset($_POST["Alta"]))
{
  require_once('../lib/nusoap.php');
  $server = new nusoap_server();
  $server->configureWSDL('Alta Empleados', 'urn:Administracion.php');

}





 ?>
