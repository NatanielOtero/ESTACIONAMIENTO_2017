<?php

session_start();

if(!isset($_SESSION["admin"]) && !isset($_SESSION["empleado"]))
{
  header("Location:LoginEmpleados.php");
}

 ?>
