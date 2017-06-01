<?php

if($_POST["op"] == "login")
{
    $login = new LoginEmpleado($_POST["legajoEmp"],$_POST["pass"]);
    $PDO = new PDO("mysql:host=localhost;dbname=estacionamiento","root","");//LOGIN CON PDO
    $empleados = $PDO->query("SELECT * FROM empleados");
    $array = $empleados->fetchAll(PDO::FETCH_ASSOC);
    for ($i=0; $i < count($array); $i++) {
      if($login->GetLegajo() == $array[$i]["legajo"])
      {
        if ($login->GetPass() == $array[$i]["pass"]) {
          echo $array[$i]["nombre"]." ".$array[$i]["apellido"]." Turno: ".$array[$i]["turno"];
          /*session_start();
          $_SESSION["user"] = */
          break;
        }
        else {
          echo "Password incorrecta";
        }
      }
      else {
        echo "El legajo no existe";
      }
    }
}





class LoginEmpleado
{
  private $legajo;
  private $pass;

  function __construct($id,$pas)
  {
    $this->legajo = $id;
    $this->pass = $pas;
  }
  function GetLegajo()
  {
    return $this->legajo;
  }
  function GetPass()
  {
    return $this->pass;
  }
}
/*
class Empleados
{
  private $Nombre;
  private $Apellido;
  private $dni;
  private $turno;
  private $legajo;
  private $pass;



  function __construct($name,$last,$dn,$id,$turn,$pas)
  {
    $this->Nombre = $name;
    $this->Apellido = $last;
    $this->dni = $dn;
    $this->legajo = $id;
    $this->turno = $turn;
    $this->pass = $pas;
  }

}*/





 ?>
