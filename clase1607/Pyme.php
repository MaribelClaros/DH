<?php

class Pyme extends Cliente
{
  protected $cuit;
  protected $razonSocial;
  protected $sucursal;

  public function __construct($cuit, $razonSocial, $sucursal, $email, $pass)
  {
    $this->cuit = $cuit;
    $this->razonSocial = $razonSocial;
    $this->sucursal = $sucursal;
    parent::__construct($email, $pass);
  }

  public function setCuit($cuit){
    $this->cuit = $cuit;
  }
  public function getCuit(){
    return $this->cuit;
  }
  public function setRazonSocial($razonSocial){
    $this->razonSocial = $razonSocial;
  }
  public function getRazonSocial(){
    return $this->razonSocial;
  }
  public function setSucursal($sucursal){
    $this->sucursal = $sucursal;
  }
  public function getSucursal(){
    return $this->sucursal;
  }
}
