<?php

  
class proveedor {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $nombre;   
  private $cif;
  private $direccion; 
  private $email; 
  private $telefono;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nNombre, $nCif, $nDireccion, $nEmail, $nTelefono) {
  
    $this->nombre = $nNombre;
    $this->cif = $nCif;
    $this->direccion = $nDireccion;
    $this->email = $nEmail; 
    $this->telefono = $nTelefono;
  }

  
  //Getters

  function getNombre() {
    return  $this->nombre;
  }

  function getCif() {
    return  $this->cif;
  }
  
  function getDireccion() {
    return  $this->direccion;
  }

  function getEmail() {
    return $this->email;
  }

  function getTelefono() {
    return  $this->telefono;
  }
  

  function imprimeProveedor() {
    return "<p>$this->nombre,$this->cif,$this->direccion,$this->email,$this->telefono</p>";
  }


  //sql para inserción de los proveedores
  function getInsertSQL() {
    $sql = "INSERT INTO proveedor (nombre, cif, direccion, email, telefono) VALUES ('$this->nombre','$this->cif','$this->direccion','$this->email',$this->telefono) ";

    return $sql;
  }



}
?>
