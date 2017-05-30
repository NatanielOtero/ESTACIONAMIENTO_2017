<?php

/**
 *
 */
class Empleados
{
  private $Nombre;
  private $Apellido;
  private $dni;
  private $legajo;
  private $turno


  function __construct($name,$last,$dn,$id,$turn)
  {
    $this->Nombre = $name;
    $this->Apellido = $last;
    $this->dni = $dn;
    $this->legajo = $id;
    $this->turno = $turn;
  }

}





 ?>
