<?php

  
class Cliente {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $dni;   
  private $nombre;
  private $apellidos; 
  private $email; 
  private $fechaNacimiento;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nDni, $nNombre, $nApellidos, $nEmail, $nFechaNacimiento) {
  
    $this->dni = $nDni;
    $this->nombre = $nNombre;
    $this->apellidos = $nApellidos;
    $this->email = $nEmail; 
    $this->fechaNacimiento = $nFechaNacimiento;
  }

  
  //Getters

  function getDni() {
    return  $this->dni;
  }

  function getNombre() {
    return  $this->nombre;
  }
  
  function getApellidos() {
    return  $this->apellidos;
  }

  function getEmail() {
    return $this->email;
  }

  function getFechaNacimiento() {
    return  $this->fechaNacimiento;
  }
  

  function imprimeCliente() {
    return "<p>$this->dni,$this->nombre,$this->apellidos,$this->email,$this->fechaNacimiento</p>";
  }


  //sql para inserción de los clientes
  function getInsertSQL() {
    $sql = "INSERT INTO clientes (dni, nombre, apellidos, email, fechaNacimiento) VALUES ('$this->dni','$this->nombre','$this->apellidos','$this->email','$this->fechaNacimiento') ";

    return $sql;
  }

  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM clientes ORDER BY ";

    switch ($tipoOrdenacion) {
      case "nombreasc":
        $sql = $sql . "nombre ASC";
        break;
      case "nombredes":
        $sql = $sql . "nombre DESC";
        break;
      case "apelidosasc":
        $sql = $sql . "apellidos ASC";
        break;
      case "apellidosdesc":
          $sql = $sql . "apellidos DESC";
          break;
      default:
        $sql = $sql . "apellidos ASC";
    }

    return $sql;
  }


}
?>
